(function () {
  var storageKey = 'ah_admissions';
  var form = document.getElementById('admForm');
  var confirmation = document.getElementById('okBox');
  var submitError = document.getElementById('submitError');
  var lookupForm = document.getElementById('statusLookupForm');
  var reviewList = document.getElementById('admissionReviewList');
  var reviewError = document.getElementById('reviewError');
  var result = document.getElementById('statusResult');
  var courseSelect = document.getElementById('course');
  var yearSelect = document.getElementById('year');
  var batchSelect = document.getElementById('batch');
  var customTimeFields = document.getElementById('customTimeFields');
  var batchStart = document.getElementById('batchStart');
  var batchEnd = document.getElementById('batchEnd');
  var courseLevels = {
    alim: ['১ম বছর', '২য় বছর', '৩য় বছর', '৪র্থ বছর', '৫ম বছর', '৬ষ্ঠ বছর', '৭ম বছর', 'জানি না — পরামর্শ চাই'],
    hifz: ['নাযেরা / তাজবীদ স্তর', 'হিফজ শুরু করতে চাই', 'হিফজ চলমান', 'জানি না — পরামর্শ চাই'],
    farz: ['প্রাথমিক স্তর', 'মধ্যবর্তী স্তর', 'জানি না — পরামর্শ চাই'],
    nazera: ['নাযেরা শুরু', 'নাযেরা চলমান', 'তাজবীদ সংশোধন', 'জানি না — পরামর্শ চাই'],
    arabic: ['প্রাথমিক স্তর', 'মধ্যবর্তী স্তর', 'উচ্চতর স্তর', 'জানি না — পরামর্শ চাই']
  };

  function showMessage(element, message) {
    if (!element) return;
    element.textContent = message;
    element.hidden = false;
  }

  function clearMessage(element) {
    if (!element) return;
    element.textContent = '';
    element.hidden = true;
  }

  function readApplications() {
    var raw = localStorage.getItem(storageKey);
    if (!raw) return [];
    var applications = JSON.parse(raw);
    if (!Array.isArray(applications)) {
      throw new Error('আবেদনের ডেমো ডেটা পড়া যাচ্ছে না।');
    }
    return applications;
  }

  function saveApplications(applications) {
    localStorage.setItem(storageKey, JSON.stringify(applications));
  }

  function getStatus(application) {
    return application.status || 'Pending';
  }

  function statusText(status) {
    if (status === 'Accepted') return 'গ্রহণ করা হয়েছে';
    if (status === 'Rejected') return 'বাতিল করা হয়েছে';
    return 'পর্যালোচনাধীন';
  }

  function statusClass(status) {
    if (status === 'Accepted') return 'accepted';
    if (status === 'Rejected') return 'rejected';
    return 'pending';
  }

  function updateYearOptions() {
    if (!courseSelect || !yearSelect) return;
    var levels = courseLevels[courseSelect.value] || [];
    yearSelect.replaceChildren();

    var placeholder = document.createElement('option');
    placeholder.value = '';
    placeholder.textContent = levels.length ? 'বর্ষ / স্তর নির্বাচন করুন' : 'আগে কোর্স নির্বাচন করুন';
    yearSelect.appendChild(placeholder);

    levels.forEach(function (level) {
      var option = document.createElement('option');
      option.value = level;
      option.textContent = level;
      yearSelect.appendChild(option);
    });

    yearSelect.disabled = levels.length === 0;
  }

  function updateCustomTimeFields() {
    if (!batchSelect || !customTimeFields) return;
    var isCustom = batchSelect.value === 'custom';
    customTimeFields.hidden = !isCustom;
    if (!isCustom) {
      if (batchStart) batchStart.value = '';
      if (batchEnd) {
        batchEnd.value = '';
        batchEnd.closest('.ah-field').classList.remove('bad');
      }
      if (batchStart) batchStart.closest('.ah-field').classList.remove('bad');
    }
  }

  function normalizePhone(phone) {
    return String(phone || '').replace(/\D/g, '');
  }

  function appendText(parent, tagName, className, text) {
    var element = document.createElement(tagName);
    if (className) element.className = className;
    element.textContent = text;
    parent.appendChild(element);
    return element;
  }

  function findApplication(appNo, phone) {
    var normalizedNo = String(appNo || '').trim().toUpperCase();
    var normalizedPhone = normalizePhone(phone);
    if (!normalizedNo || !normalizedPhone) return null;

    return readApplications().find(function (application) {
      return String(application.appNo || '').trim().toUpperCase() === normalizedNo
        && normalizePhone(application.phone) === normalizedPhone;
    }) || null;
  }

  function showApplicationStatus(application) {
    result.replaceChildren();
    result.className = 'status-result';
    result.hidden = false;

    if (!application) {
      result.classList.add('not-found');
      appendText(result, 'p', '', 'এই আবেদন নম্বর ও মোবাইল নম্বরের মিল পাওয়া যায়নি।');
      return;
    }

    var status = getStatus(application);
    result.classList.add(statusClass(status));
    appendText(result, 'strong', 'status-result-title', application.name + ' — ' + status);
    var courseDetails = 'কোর্স: ' + (application.course || 'উল্লেখ নেই');
    if (application.year) courseDetails += ' · বর্ষ / স্তর: ' + application.year;
    appendText(result, 'p', '', 'আবেদন: ' + application.appNo + ' · ' + courseDetails);
    if (application.batch) {
      var schedule = application.batch;
      if (application.customTime) schedule += ' (' + application.customTime + ')';
      appendText(result, 'p', '', 'পছন্দের সময়: ' + schedule);
    }
    appendText(result, 'p', 'status-result-description', statusText(status));
  }

  function lookupStatus() {
    try {
      var application = findApplication(
        document.getElementById('lookupAppNo').value,
        document.getElementById('lookupPhone').value
      );
      showApplicationStatus(application);
      clearMessage(reviewError);
      return application;
    } catch (error) {
      result.replaceChildren();
      result.className = 'status-result not-found';
      result.hidden = false;
      appendText(result, 'p', '', error.message || 'আবেদনের তথ্য পড়া যাচ্ছে না।');
      return null;
    }
  }

  function makeApplicationNo(applications) {
    var year = new Date().getFullYear();
    var appNo;
    do {
      appNo = 'AH-' + year + '-' + Date.now().toString(36).toUpperCase()
        + '-' + Math.random().toString(36).slice(2, 6).toUpperCase();
    } while (applications.some(function (application) {
      return application.appNo === appNo;
    }));
    return appNo;
  }

  function renderReviewList() {
    if (!reviewList) return;
    reviewList.replaceChildren();
    clearMessage(reviewError);

    var applications = readApplications().slice().reverse();
    if (!applications.length) {
      appendText(reviewList, 'p', 'review-empty', 'এখনও কোনো ডেমো আবেদন জমা হয়নি।');
      return;
    }

    applications.forEach(function (application) {
      var card = document.createElement('article');
      card.className = 'review-card';

      var heading = document.createElement('div');
      heading.className = 'review-card-heading';
      appendText(heading, 'strong', '', application.name || 'নাম দেওয়া হয়নি');
      var status = getStatus(application);
      appendText(heading, 'span', 'status-badge ' + statusClass(status), status);
      card.appendChild(heading);

      appendText(card, 'p', 'review-meta', application.appNo + ' · ' + (application.course || 'কোর্স উল্লেখ নেই'));
      if (application.year) appendText(card, 'p', 'review-meta', 'বর্ষ / স্তর: ' + application.year);
      if (application.email) appendText(card, 'p', 'review-meta', 'ইমেইল: ' + application.email);
      if (application.batch) {
        var schedule = application.batch;
        if (application.customTime) schedule += ' (' + application.customTime + ')';
        appendText(card, 'p', 'review-meta', 'পছন্দের সময়: ' + schedule);
      }
      appendText(card, 'p', 'review-meta', 'মোবাইল: ' + (application.phone || '—'));

      if (status === 'Pending') {
        var actions = document.createElement('div');
        actions.className = 'review-actions';
        [
          { value: 'Accepted', label: 'গ্রহণ করুন', className: 'accept' },
          { value: 'Rejected', label: 'বাতিল করুন', className: 'reject' }
        ].forEach(function (action) {
          var button = document.createElement('button');
          button.type = 'button';
          button.className = 'review-action ' + action.className;
          button.textContent = action.label;
          button.addEventListener('click', function () {
            updateStatus(application.appNo, action.value);
          });
          actions.appendChild(button);
        });
        card.appendChild(actions);
      } else {
        appendText(card, 'p', 'review-decision', statusText(status));
      }

      reviewList.appendChild(card);
    });
  }

  function updateStatus(appNo, nextStatus) {
    var actionText = nextStatus === 'Accepted' ? 'গ্রহণ' : 'বাতিল';
    if (!window.confirm('এই ডেমো আবেদনটি ' + actionText + ' করবেন?')) return;

    try {
      var applications = readApplications();
      var application = applications.find(function (item) {
        return item.appNo === appNo;
      });
      if (!application) throw new Error('আবেদনটি আর খুঁজে পাওয়া যাচ্ছে না।');
      if (getStatus(application) !== 'Pending') return;

      application.status = nextStatus;
      application.statusUpdatedAt = new Date().toISOString();
      saveApplications(applications);
      renderReviewList();

      if (lookupForm && document.getElementById('lookupAppNo').value.trim()
        && document.getElementById('lookupPhone').value.trim()) {
        lookupStatus();
      }
    } catch (error) {
      showMessage(reviewError, error.message || 'স্ট্যাটাস সংরক্ষণ করা যায়নি।');
    }
  }

  if (form && confirmation) {
    function setBad(element, bad) {
      element.closest('.ah-field').classList.toggle('bad', bad);
    }

    function validate() {
      var good = true;
      var name = document.getElementById('name');
      var nameValid = name.value.trim().length >= 3;
      setBad(name, !nameValid);
      good = good && nameValid;

      var gender = document.getElementById('gender');
      var genderValid = Boolean(gender.value);
      setBad(gender, !genderValid);
      good = good && genderValid;

      var phone = document.getElementById('phone');
      var phoneValid = /^01[3-9]\d{8}$/.test(phone.value.trim());
      setBad(phone, !phoneValid);
      good = good && phoneValid;

      var email = document.getElementById('email');
      var emailValid = /^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email.value.trim());
      setBad(email, !emailValid);
      good = good && emailValid;

      var course = document.getElementById('course');
      var courseValid = Boolean(course.value);
      setBad(course, !courseValid);
      good = good && courseValid;

      var photo = document.getElementById('photo');
      var photoFile = photo.files && photo.files[0];
      var photoValid = !photoFile || (
        /^image\/(png|jpeg|webp)$/.test(photoFile.type)
        && photoFile.size <= 5 * 1024 * 1024
      );
      setBad(photo, !photoValid);
      good = good && photoValid;

      var isCustomTime = batchSelect.value === 'custom';
      if (batchStart && batchEnd) {
        var startValid = !isCustomTime || Boolean(batchStart.value);
        var endValid = !isCustomTime || Boolean(batchEnd.value && batchStart.value && batchEnd.value > batchStart.value);
        setBad(batchStart, !startValid);
        setBad(batchEnd, !endValid);
        good = good && startValid && endValid;
      }

      var agree = document.getElementById('agree');
      document.getElementById('agreeErr').style.display = agree.checked ? 'none' : 'block';
      return good && agree.checked;
    }

    form.addEventListener('submit', function (event) {
      event.preventDefault();
      clearMessage(submitError);
      if (!validate()) {
        var firstInvalid = form.querySelector('.ah-field.bad');
        if (firstInvalid) firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
        return;
      }

      var button = document.getElementById('admBtn');
      button.disabled = true;
      button.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> জমা হচ্ছে...';
      var saved = false;

      try {
        var applications = readApplications();
        var application = {
          appNo: makeApplicationNo(applications),
          at: new Date().toISOString(),
          status: 'Pending',
          statusUpdatedAt: new Date().toISOString(),
          name: document.getElementById('name').value.trim(),
          phone: document.getElementById('phone').value.trim(),
          email: document.getElementById('email').value.trim(),
          course: courseSelect.options[courseSelect.selectedIndex].textContent,
          year: yearSelect.value,
          batch: batchSelect.options[batchSelect.selectedIndex].textContent,
          customTime: batchSelect.value === 'custom'
            ? batchStart.value + '–' + batchEnd.value
            : ''
        };
        applications.push(application);
        saveApplications(applications);
        saved = true;

        document.getElementById('appNo').textContent = application.appNo;
        document.getElementById('lookupAppNo').value = application.appNo;
        document.getElementById('lookupPhone').value = application.phone;
        showApplicationStatus(application);
        confirmation.classList.add('on');
        confirmation.scrollIntoView({ behavior: 'smooth', block: 'center' });
        form.querySelectorAll('input,select,textarea').forEach(function (element) {
          if (element.type === 'checkbox') element.checked = false;
          else if (element.type !== 'file') element.value = '';
        });
        updateYearOptions();
        batchSelect.value = 'morning';
        updateCustomTimeFields();
        document.querySelectorAll('.ah-drop input[type="file"]').forEach(function (input) {
          input.value = '';
        });
        document.querySelectorAll('.ah-file').forEach(function (fileList) {
          fileList.replaceChildren();
        });
      } catch (error) {
        showMessage(submitError, error.message || 'আবেদনটি সংরক্ষণ করা যায়নি। আবার চেষ্টা করুন।');
      } finally {
        button.disabled = false;
        button.innerHTML = '<i class="fa-solid fa-paper-plane"></i> আবেদন জমা দিন';
      }
      if (saved) {
        try {
          renderReviewList();
        } catch (error) {
          showMessage(reviewError, error.message || 'আবেদনের ডেমো তালিকা আপডেট করা যায়নি।');
        }
      }
    });

    form.querySelectorAll('input,select,textarea').forEach(function (element) {
      element.addEventListener('blur', validate);
    });
    courseSelect.addEventListener('change', updateYearOptions);
    batchSelect.addEventListener('change', updateCustomTimeFields);
    updateYearOptions();
    updateCustomTimeFields();
  }

  if (lookupForm) {
    lookupForm.addEventListener('submit', function (event) {
      event.preventDefault();
      lookupStatus();
    });
  }

  try {
    renderReviewList();
  } catch (error) {
    showMessage(reviewError, error.message || 'আবেদনের ডেমো তালিকা পড়া যাচ্ছে না।');
  }

  window.addEventListener('storage', function (event) {
    if (event.key !== storageKey) return;
    try {
      renderReviewList();
      if (lookupForm && document.getElementById('lookupAppNo').value.trim()
        && document.getElementById('lookupPhone').value.trim()) lookupStatus();
    } catch (error) {
      showMessage(reviewError, error.message || 'আবেদনের স্ট্যাটাস আপডেট করা যায়নি।');
    }
  });
})();
