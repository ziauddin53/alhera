<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>আল হেরা অনলাইন মাদরাসা</title>
            <link rel="icon" href="../uploads/1787225537_favicon_logoalhera.png" type="image/x-icon">
        <link rel="stylesheet" href="/assets/css/inter-local.css">
    <link rel="stylesheet" href="/assets/vendor/fontawesome-6.5.0/css/all.min.css">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        body {
            font-family: 'Inter', -apple-system, sans-serif;
            background: #0a0e14;
            color: #fff;
            padding-top: 80px;
        }
        a { text-decoration: none; color: inherit; }

        .main-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: #000000;
            backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(255,215,0,0.12);
            box-shadow: 0 4px 30px rgba(0,0,0,0.4);
            height: 80px;
        }
        .header-container {
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 80px;
        }

        .logo-link {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            text-decoration: none;
        }
        .logo-link .logo-img {
            max-height: 50px;
            width: auto;
            transition: opacity 0.3s ease;
        }
        .logo-link:hover .logo-img {
            opacity: 0.8;
        }
        .logo-text-wrapper {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 2px;
        }
        .logo-link .brand {
            font-size: 26px;
            font-weight: 700;
            letter-spacing: -0.5px;
            color: #ffffff;
            transition: color 0.3s ease;
            line-height: 1.2;
        }
        .logo-link:hover .brand {
            color: #f5d77b;
        }
        .logo-link .tagline {
            font-size: 12px;
            font-weight: 400;
            color: #ffffff;
            letter-spacing: 0.3px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;
            list-style: none;
        }
        .nav-menu li a {
            color: #ffffff;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }
        .nav-menu li a::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #f5d77b;
            transition: width 0.3s ease;
        }
        .nav-menu li a:hover {
            color: #f5d77b;
        }
        .nav-menu li a:hover::after {
            width: 100%;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .btn-login {
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            background: transparent;
            color: #ffffff;
            border: 1px solid #ffffff;
        }
        .btn-login:hover {
            background: rgba(255,255,255,0.08);
            color: #f5d77b;
            border-color: #f5d77b;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            background: none;
            border: none;
            padding: 6px;
        }
        .menu-toggle span {
            width: 26px;
            height: 2px;
            background: #ffffff;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .menu-toggle.active span:nth-child(1) { transform: rotate(45deg) translate(4px, 5px); }
        .menu-toggle.active span:nth-child(2) { opacity: 0; }
        .menu-toggle.active span:nth-child(3) { transform: rotate(-45deg) translate(4px, -5px); }

        @media (max-width: 992px) {
            .nav-menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background: #000000;
                backdrop-filter: blur(16px);
                padding: 24px 30px;
                gap: 18px;
                border-bottom: 1px solid rgba(255,215,0,0.1);
            }
            .nav-menu.open { display: flex; }
            .menu-toggle { display: flex; }
            .header-actions .btn-login { font-size: 12px; padding: 6px 14px; }
        }
        @media (max-width: 600px) {
            .logo-link .brand { font-size: 20px; }
            .logo-link .tagline { font-size: 10px; }
            .logo-link .logo-img { max-height: 40px; }
            .header-actions .btn-login {
                display: inline-block;
                font-size: 12px;
                padding: 5px 12px;
            }
        }
        @media (max-width: 400px) {
            .logo-link .brand { font-size: 17px; }
            .logo-link .logo-img { max-height: 35px; }
            .header-actions .btn-login {
                font-size: 10px;
                padding: 4px 10px;
            }
        }
    </style>
</head>
<body>

<!-- ===== Header ===== -->
<header class="main-header">
    <div class="header-container">

        <!-- Logo + site name -->
        <a href="https://alheraonline.com" class="logo-link">
                            <img src="../uploads/1787224184_logo_logoalhera.png" alt="আল হেরা অনলাইন মাদরাসা" class="logo-img">
                        <div class="logo-text-wrapper">
                <span class="brand">
                    আল হেরা অনলাইন মাদরাসা                </span>
                <span class="tagline">কুরআন ও সুন্নাহ ভিত্তিক শিক্ষা</span>
            </div>
        </a>

        <!-- Navigation menu -->
        <ul class="nav-menu" id="navMenu">
            <li><a href="/">হোম</a></li>
            <li><a href="/Frontend/courses.php">কোর্স</a></li>
            <li><a href="/Frontend/about.php">আমাদের সম্পর্কে</a></li>
            <li><a href="/Frontend/blog.php">ব্লগ</a></li>
            <li><a href="/Frontend/contact.php">যোগাযোগ</a></li>
        </ul>

        <!-- Right-side actions (login only, no language switcher) -->
        <div class="header-actions">
            <a href="/login.php" class="btn-login">
                <i class="fas fa-sign-in-alt"></i> লগইন            </a>
            <button class="menu-toggle" id="menuToggle" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>

    </div>
</header>

<!-- ===== JavaScript ===== -->
<script>
    document.getElementById('menuToggle').addEventListener('click', function() {
        document.getElementById('navMenu').classList.toggle('open');
        this.classList.toggle('active');
    });
    document.querySelectorAll('#navMenu a').forEach(link => {
        link.addEventListener('click', () => {
            document.getElementById('navMenu').classList.remove('open');
            document.getElementById('menuToggle').classList.remove('active');
        });
    });
</script><!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>যোগাযোগ - আল হেরা অনলাইন মাদরাসা</title>
<link rel="stylesheet" href="/assets/vendor/fontawesome-6.5.0/css/all.min.css">
<link rel="stylesheet" href="/assets/css/fonts-hind-siliguri.css">
<style>
/* ==========================================================
   ROOT VARIABLES — DYNAMIC
   ========================================================== */
:root {
    --gold: #f2a900;
    --gold-dark: #c48a00;
    --gold-light: #fce8b3;
    --dark: #0a1a20;
    --text-muted: #6b7280;
    --shadow: 0 4px 20px rgba(0,0,0,0.06);
    --shadow-hover: 0 12px 40px rgba(0,0,0,0.12);
    --radius: 16px;
    --transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

* { margin:0; padding:0; box-sizing:border-box; }
body {
    font-family: 'Hind Siliguri', sans-serif;
    background: #f9f9f9;
    color: #1e1e1e;
    padding-top: 80px;
    overflow-x: hidden;
}

.section-container { max-width:1240px; margin:0 auto; padding:0 24px; }
.section-gap { margin-bottom:60px; }
a { text-decoration:none; color:inherit; }

.animate-on-scroll {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94),
                transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.animate-on-scroll.visible { opacity: 1; transform: translateY(0); }
.delay-1 { transition-delay: 0.05s; }
.delay-2 { transition-delay: 0.10s; }
.delay-3 { transition-delay: 0.15s; }
.delay-4 { transition-delay: 0.20s; }

/* ==========================================================
   হিরো — DYNAMIC
   ========================================================== */
.contact-hero {
    background: linear-gradient(135deg,
        #0a1a20 0%,
        #1a3a44 50%,
        #0a1a20 100%);
    padding: 50px 0 40px;
    border-radius: 0 0 30px 30px;
    text-align: center;
    color: #fff;
    margin-bottom: 40px;
    position: relative;
    overflow: hidden;
}
.contact-hero::before {
    content: '';
    position: absolute;
    top: -50%; right: -20%;
    width: 400px; height: 400px;
    background: radial-gradient(circle, rgba(242,169,0,0.08), transparent 70%);
    border-radius: 50%;
    animation: floatBg 20s ease-in-out infinite;
}
@keyframes floatBg {
    0%, 100% { transform: translate(0,0); }
    50% { transform: translate(30px, -30px); }
}
.contact-hero .hero-content { position: relative; z-index: 1; }
.contact-hero .hero-badge {
    display: inline-block;
    background: rgba(242,169,0,0.15);
    color: #f2a900;
    padding: 4px 18px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    border: 1px solid rgba(242,169,0,0.2);
    margin-bottom: 10px;
}
.contact-hero h1 {
    font-size: 2.8rem;
    font-weight: 800;
    color: #f2a900;
}
.contact-hero h1 span { color: #ffffff; }
.contact-hero p {
    font-size: 1rem;
    color: #b0c4cc;
    max-width: 600px;
    margin: 8px auto 0;
}

/* ==========================================================
   লেআউট
   ========================================================== */
.contact-layout {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr;
    gap: 40px;
}

/* ==========================================================
   ফর্ম — DYNAMIC
   ========================================================== */
.contact-form-wrap {
    background: #ffffff;
    border-radius: var(--radius);
    padding: 30px 32px;
    box-shadow: var(--shadow);
    border: 1px solid #f0f0f0;
}
.contact-form-wrap h2 {
    font-size: 1.8rem;
    color: #0a2745;
    margin-bottom: 6px;
}
.contact-form-wrap h2 span { color: #f2a900; }
.contact-form-wrap .sub-title {
    color: #6b7280;
    margin-bottom: 20px;
    font-size: 0.95rem;
}

.floating-group { position: relative; margin-bottom: 24px; }
.floating-group input,
.floating-group textarea,
.floating-group select {
    width: 100%;
    padding: 14px 14px 6px 14px;
    border: 1.5px solid #e0e0e0;
    border-radius: 8px;
    font-size: 14px;
    font-family: inherit;
    transition: var(--transition);
    background: #fafafa;
    outline: none;
    color: #1e1e1e;
    height: 54px;
}
.floating-group textarea {
    height: 130px;
    padding-top: 20px;
    resize: vertical;
}
.floating-group select {
    padding-top: 16px;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%236b7280' stroke-width='1.5' fill='none'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 14px center;
}
.floating-group label {
    position: absolute;
    left: 14px;
    top: 16px;
    font-size: 14px;
    color: #6b7280;
    transition: var(--transition);
    pointer-events: none;
    background: transparent;
    padding: 0 4px;
}
.floating-group input:focus,
.floating-group textarea:focus,
.floating-group select:focus {
    border-color: #f2a900;
    background: #ffffff;
    box-shadow: 0 0 0 4px rgba(242,169,0,0.08);
}
.floating-group input:focus ~ label,
.floating-group input:not(:placeholder-shown) ~ label,
.floating-group textarea:focus ~ label,
.floating-group textarea:not(:placeholder-shown) ~ label,
.floating-group select:focus ~ label {
    top: 4px;
    font-size: 11px;
    color: #f2a900;
    font-weight: 600;
}
.floating-group input::placeholder,
.floating-group textarea::placeholder { opacity: 0; }
.floating-group .error-msg {
    color: #e74c3c;
    font-size: 12px;
    margin-top: 4px;
    display: none;
}
.floating-group.has-error input,
.floating-group.has-error textarea,
.floating-group.has-error select {
    border-color: #e74c3c;
}
.floating-group.has-error .error-msg { display: block; }

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

.btn-submit {
    padding: 14px 35px;
    background: linear-gradient(135deg,
        #f2a900,
        #c48a00);
    color: #0a1a20;
    font-weight: 700;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: var(--transition);
    font-size: 16px;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}
.btn-submit:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 30px rgba(242,169,0,0.35);
}
.btn-submit:disabled { opacity: 0.6; cursor: not-allowed; transform: none; }
.btn-submit .spinner {
    display: none;
    width: 18px; height: 18px;
    border: 2px solid rgba(10,26,32,0.2);
    border-top-color: #0a1a20;
    border-radius: 50%;
    animation: spin 0.8s linear infinite;
}
.btn-submit.loading .spinner { display: inline-block; }
.btn-submit.loading .btn-text { display: none; }
@keyframes spin { to { transform: rotate(360deg); } }

/* ==========================================================
   টোস্ট — DYNAMIC
   ========================================================== */
.toast {
    position: fixed;
    top: 90px;
    right: 24px;
    background: #ffffff;
    color: #1e1e1e;
    padding: 16px 24px;
    border-radius: 12px;
    box-shadow: 0 12px 40px rgba(0,0,0,0.15);
    border-left: 4px solid #f2a900;
    transform: translateX(120%);
    transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 0.5s ease;
    opacity: 0;
    z-index: 9999;
    max-width: 400px;
    display: flex;
    align-items: center;
}
.toast.show { transform: translateX(0); opacity: 1; }
.toast.success { border-left-color: #22c55e; }
.toast.error { border-left-color: #ef4444; }
.toast .toast-icon { font-size: 1.2rem; margin-right: 12px; }
.toast .toast-msg { font-size: 14px; color: #1e1e1e; }

/* ==========================================================
   ইনফো কার্ড — DYNAMIC
   ========================================================== */
.contact-info {
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.info-card {
    background: #ffffff;
    border-radius: var(--radius);
    padding: 22px 24px;
    box-shadow: var(--shadow);
    border: 1px solid #f0f0f0;
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}
.info-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 4px; height: 100%;
    background: #f2a900;
    opacity: 0;
    transition: var(--transition);
}
.info-card:hover::before { opacity: 1; }
.info-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-hover); }
.info-card .icon {
    width: 50px; height: 50px;
    background: #fce8b3;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    color: #c48a00;
    margin-bottom: 12px;
    transition: var(--transition);
}
.info-card:hover .icon {
    transform: scale(1.1) rotate(5deg);
    background: #f2a900;
    color: #ffffff;
}
.info-card h4 {
    font-size: 1.1rem;
    color: #0a2745;
    margin-bottom: 4px;
}
.info-card p {
    color: #6b7280;
    font-size: 0.95rem;
    line-height: 1.6;
}
.info-card p i {
    margin-right: 6px;
    color: #f2a900;
}

/* ==========================================================
   সোশ্যাল — DYNAMIC
   ========================================================== */
.social-widget {
    background: #ffffff;
    border-radius: var(--radius);
    padding: 22px 24px;
    box-shadow: var(--shadow);
    border: 1px solid #f0f0f0;
    text-align: center;
}
.social-widget h4 {
    font-size: 1.1rem;
    color: #0a2745;
    margin-bottom: 12px;
}
.social-widget .social-icons {
    display: flex;
    justify-content: center;
    gap: 14px;
    flex-wrap: wrap;
}
.social-widget .social-icons a {
    width: 44px; height: 44px;
    border-radius: 50%;
    background: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: #0a2745;
    transition: var(--transition);
}
.social-widget .social-icons a:hover {
    background: #f2a900;
    color: #ffffff;
    transform: translateY(-5px) scale(1.1);
    box-shadow: 0 8px 20px rgba(242,169,0,0.25);
}

/* ==========================================================
   ম্যাপ — DYNAMIC
   ========================================================== */
.map-wrap {
    background: #ffffff;
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: var(--shadow);
    border: 1px solid #f0f0f0;
    margin-top: 40px;
}
.map-wrap iframe {
    width: 100%;
    height: 350px;
    border: none;
    display: block;
}

/* ==========================================================
   রেসপনসিভ
   ========================================================== */
@media (max-width: 992px) {
    .contact-layout { grid-template-columns: 1fr; }
    .contact-hero h1 { font-size: 2.2rem; }
}
@media (max-width: 768px) {
    .contact-hero h1 { font-size: 1.8rem; }
    .contact-hero { padding: 30px 0 20px; }
    .contact-form-wrap { padding: 20px; }
    .form-row { grid-template-columns: 1fr; }
    .toast { top: 80px; right: 16px; max-width: 90%; }
}
@media (max-width: 480px) {
    .contact-hero h1 { font-size: 1.4rem; }
}
</style>
</head>
<body>

<!-- ========================================================== -->
<!-- Hero — DYNAMIC -->
<!-- ========================================================== -->
<div class="contact-hero animate-on-scroll">
    <div class="hero-content">
        <div class="hero-badge">
            <i class="fas fa-phone-alt"></i>
            আমাদের সাথে যোগাযোগ করুন        </div>
        <h1>যোগাযোগ <span>করুন</span></h1>
        <p>যেকোনো প্রশ্ন, মতামত বা প্রয়োজনে আমাদের সাথে যোগাযোগ করুন</p>
    </div>
</div>

<!-- ========================================================== -->
<!-- Contact content -->
<!-- ========================================================== -->
<div class="section-container section-gap">
    <div class="contact-layout">

        <!-- ===== Form — DYNAMIC ===== -->
        <div class="contact-form-wrap animate-on-scroll">
            <h2>আমাদের সাথে <span>যোগাযোগ</span></h2>
            <p class="sub-title">আপনার প্রশ্ন বা মতামত জানাতে নিচের ফর্মটি পূরণ করুন</p>

            
            <form id="contactForm" class="contact-form" novalidate>
                <!-- Bots fill every input they find in the markup; a real browser never sees this one. -->
                <div style="position:absolute;left:-9999px;top:-9999px;width:1px;height:1px;overflow:hidden" aria-hidden="true">
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off" />
                </div>
                <div class="form-row">
                    <div class="floating-group">
                        <input type="text" id="name" name="name" placeholder=" " required />
                        <label for="name">আপনার নাম <span style="color:#e74c3c;">*</span></label>
                        <div class="error-msg">নাম দিন</div>
                    </div>
                    <div class="floating-group">
                        <input type="email" id="email" name="email" placeholder=" " required />
                        <label for="email">ইমেইল ঠিকানা <span style="color:#e74c3c;">*</span></label>
                        <div class="error-msg">সঠিক ইমেইল দিন</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="floating-group">
                        <input type="text" id="phone" name="phone" placeholder=" " />
                        <label for="phone">ফোন নম্বর (ঐচ্ছিক)</label>
                        <div class="error-msg">ফোন নম্বর দিন</div>
                    </div>
                    <div class="floating-group">
                        <select id="subject" name="subject" required>
                            <option value="">— নির্বাচন করুন —</option>
                                                            <option value="general">
                                    সাধারণ জিজ্ঞাসা                                </option>
                                                            <option value="admission">
                                    ভর্তি সম্পর্কে                                </option>
                                                            <option value="course">
                                    কোর্স সম্পর্কে                                </option>
                                                            <option value="support">
                                    টেকনিক্যাল সাপোর্ট                                </option>
                                                            <option value="other">
                                    অন্যান্য                                </option>
                                                            <option value="admission">
                                    ভর্তি সম্পর্কে                                </option>
                                                    </select>
                        <label for="subject">বিষয় <span style="color:#e74c3c;">*</span></label>
                        <div class="error-msg">বিষয় নির্বাচন করুন</div>
                    </div>
                </div>
                <div class="floating-group">
                    <textarea id="message" name="message" placeholder=" " required></textarea>
                    <label for="message">আপনার মেসেজ <span style="color:#e74c3c;">*</span></label>
                    <div class="error-msg">মেসেজ লিখুন</div>
                </div>

                <button type="submit" class="btn-submit" id="submitBtn">
                    <span class="btn-text">
                        <i class="fas fa-paper-plane"></i>
                        মেসেজ পাঠান                    </span>
                    <span class="spinner"></span>
                </button>
            </form>
        </div>

        <!-- ===== Info — DYNAMIC ===== -->
        <div class="contact-info">

            <div class="info-card animate-on-scroll delay-1">
                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                <h4>আমাদের ঠিকানা</h4>
                <p><i class="fas fa-location-dot"></i>
                    আল হেরা অনলাইন মাদ্রাসা<br>
                    বাংলাদেশ                </p>
            </div>

            <div class="info-card animate-on-scroll delay-2">
                <div class="icon"><i class="fas fa-phone"></i></div>
                <h4>ফোন নম্বর</h4>
                                    <p><i class="fas fa-phone"></i> +880 19174-51598</p>
                                                    <p><i class="fab fa-whatsapp"></i> +880 19174-51598 (WhatsApp)</p>
                            </div>

            <div class="info-card animate-on-scroll delay-3">
                <div class="icon"><i class="fas fa-envelope"></i></div>
                <h4>ইমেইল</h4>
                                    <p><i class="fas fa-envelope"></i> info@alheraonline.com</p>
                                                    <p><i class="fas fa-clock"></i> সপ্তাহের ৭ দিন, ২৪ ঘন্টা</p>
                            </div>

                        <div class="social-widget animate-on-scroll delay-4">
                <h4>
                    <i class="fas fa-share-alt" style="color:var(--gold);"></i>
                    সোশ্যাল মিডিয়া                </h4>
                <div class="social-icons">
                                            <a href="#" target="_blank" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                                            <a href="#" target="_blank" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                                            <a href="#" target="_blank" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                                            <a href="#" target="_blank" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                                            <a href="#" target="_blank" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                                    </div>
            </div>
            
        </div>
    </div>

    <!-- ===== Map — DYNAMIC ===== -->
        <div class="map-wrap animate-on-scroll">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.38703692693!2d90.279239!3d23.780887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1700000000000" allowfullscreen loading="lazy"></iframe>
    </div>
    </div>

<!-- ========================================================== -->
<!-- Toast -->
<!-- ========================================================== -->
<div id="toast" class="toast">
    <span class="toast-icon"><i class="fas fa-check-circle"></i></span>
    <span class="toast-msg"></span>
</div>

<!-- ========================================================== -->
<!-- Footer -->
<!-- ========================================================== -->
<footer class="footer-section">
    <style>
        .footer-section {
            background: #0b1119;
            color: rgba(255,255,255,0.8);
            padding: 60px 0 0;
            font-family: 'Inter', sans-serif;
            position: relative;
            overflow: hidden;
            margin-top: 60px;
        }
        .footer-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(to right, transparent, #f5d77b, transparent);
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            position: relative;
            z-index: 2;
        }
        .footer-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px 30px;
            margin-bottom: 50px;
        }
        .footer-col h5 {
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #f5d77b;
            margin-bottom: 22px;
            display: flex;
            align-items: center;
            gap: 10px;
            padding-bottom: 12px;
            position: relative;
        }
        .footer-col h5::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 32px;
            height: 2.5px;
            background: linear-gradient(to right, #f5d77b, transparent);
            border-radius: 4px;
        }
        .footer-col ul {
            list-style: none;
            padding: 0;
        }
        .footer-col ul li {
            margin-bottom: 10px;
        }
        .footer-col ul li a {
            color: rgba(255,255,255,0.7);
            font-size: 14px;
            transition: all 0.25s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .footer-col ul li a i {
            color: #f5d77b;
            font-size: 11px;
            opacity: 0;
            transform: translateX(-6px);
            transition: all 0.25s ease;
        }
        .footer-col ul li a:hover {
            color: #f5d77b;
            transform: translateX(4px);
        }
        .footer-col ul li a:hover i {
            opacity: 1;
            transform: translateX(0);
        }
        .newsletter-form {
            display: flex;
            flex-direction: column;
            gap: 12px;
            max-width: 280px;
        }
        .newsletter-form .input-wrap {
            display: flex;
            align-items: center;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 10px;
            padding: 0 14px;
            transition: 0.3s;
        }
        .newsletter-form .input-wrap:focus-within {
            border-color: #f5d77b;
            background: rgba(255,255,255,0.07);
        }
        .newsletter-form .input-wrap i {
            color: rgba(255,255,255,0.3);
        }
        .newsletter-form .input-wrap input {
            flex: 1;
            padding: 14px 10px;
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            font-size: 14px;
        }
        .newsletter-form .input-wrap input::placeholder {
            color: rgba(255,255,255,0.35);
        }
        .newsletter-form .btn-subscribe {
            padding: 14px 20px;
            background: #f5d77b;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            font-size: 13px;
            text-transform: uppercase;
            color: #0b1119;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .newsletter-form .btn-subscribe:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(245,215,123,0.25);
        }
        .social-links {
            display: flex;
            gap: 12px;
            margin-top: 22px;
            flex-wrap: wrap;
        }
        .social-links a {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.06);
            border-radius: 50%;
            color: rgba(255,255,255,0.6);
            transition: all 0.3s ease;
        }
        .social-links a:hover {
            background: #f5d77b;
            border-color: #f5d77b;
            color: #0b1119;
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(245,215,123,0.2);
        }
        .footer-divider {
            height: 1px;
            background: linear-gradient(to right, transparent, #f5d77b, transparent);
            margin: 40px 0 30px;
        }
        .footer-bottom {
            padding: 24px 0 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 18px;
        }
        .footer-bottom .copy {
            font-size: 13px;
            color: rgba(255,255,255,0.5);
        }
        .footer-bottom .copy strong {
            color: rgba(255,255,255,0.7);
        }
        .footer-links-bottom {
            display: flex;
            gap: 28px;
            flex-wrap: wrap;
        }
        .footer-links-bottom a {
            font-size: 13px;
            color: rgba(255,255,255,0.4);
            transition: 0.25s;
            position: relative;
        }
        .footer-links-bottom a::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 1.5px;
            background: #f5d77b;
            transition: width 0.3s ease;
        }
        .footer-links-bottom a:hover {
            color: #f5d77b;
        }
        .footer-links-bottom a:hover::after {
            width: 100%;
        }
        @media (max-width: 768px) {
            .footer-row { grid-template-columns: 1fr 1fr; gap: 30px; }
            .footer-bottom { flex-direction: column; text-align: center; }
            .footer-links-bottom { justify-content: center; }
        }
        @media (max-width: 480px) {
            .footer-row { grid-template-columns: 1fr; }
            .newsletter-form { max-width: 100%; }
        }
    </style>

    <div class="container">
        <div class="footer-row">
            <div class="footer-col">
                <h5><i class="fas fa-globe"></i> আমাদের সম্পর্কে</h5>
                <ul>
                    <li><a href="https://alheraonline.comabout.php"><i class="fas fa-angle-right"></i> আমাদের সম্পর্কে</a></li>
                    <li><a href="https://alheraonline.comcontact.php"><i class="fas fa-angle-right"></i> যোগাযোগ</a></li>
                    <li><a href="#"><i class="fas fa-angle-right"></i> আমাদের টিম</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5><i class="fas fa-link"></i> দ্রুত লিংক</h5>
                <ul>
                    <li><a href="https://alheraonline.com"><i class="fas fa-angle-right"></i> হোম</a></li>
                    <li><a href="https://alheraonline.comcourses.php"><i class="fas fa-angle-right"></i> কোর্সসমূহ</a></li>
                    <li><a href="https://alheraonline.comblog.php"><i class="fas fa-angle-right"></i> ব্লগ</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5><i class="fas fa-graduation-cap"></i> জনপ্রিয় কোর্স</h5>
                <ul>
                    <li><a href="#"><i class="fas fa-angle-right"></i> কুরআন তিলাওয়াত</a></li>
                    <li><a href="#"><i class="fas fa-angle-right"></i> তাজভীদ</a></li>
                    <li><a href="#"><i class="fas fa-angle-right"></i> আরবি ভাষা</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5><i class="fas fa-headset"></i> সহায়তা ও নীতি</h5>
                <ul>
                    <li><a href="#"><i class="fas fa-angle-right"></i> FAQ</a></li>
                    <li><a href="#"><i class="fas fa-angle-right"></i> গোপনীয়তা নীতি</a></li>
                    <li><a href="#"><i class="fas fa-angle-right"></i> শর্তাবলী</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5><i class="fas fa-bell"></i> নিউজলেটার</h5>
                <p style="font-size:14px; color:rgba(255,255,255,0.65); margin-bottom:16px;">
                    নিয়মিত আপডেট পেতে আমাদের সাথে থাকুন                </p>
                <form class="newsletter-form" id="footerNewsletter">
                    <div class="input-wrap">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="আপনার ইমেইল" required />
                    </div>
                    <button type="submit" class="btn-subscribe">
                        <i class="fas fa-paper-plane" style="margin-right:8px;"></i> সাবস্ক্রাইব করুন                    </button>
                </form>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-divider"></div>

        <div class="footer-bottom">
            <div class="copy">
                &copy; 2026 <strong>আল হেরা অনলাইন মাদরাসা</strong> &bull; সর্বস্বত্ব সংরক্ষিত            </div>
            <div class="footer-links-bottom">
                <a href="#">গোপনীয়তা নীতি</a>
                <a href="#">শর্তাবলী</a>
                <a href="#">কুকি নীতি</a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('footerNewsletter').addEventListener('submit', function(e) {
            e.preventDefault();
            const input = this.querySelector('input[type="email"]');
            if (input.value.trim()) {
                alert('ধন্যবাদ! আপনি সফলভাবে সাবস্ক্রাইব করেছেন।');
                input.value = '';
            }
        });
    </script>
</footer>
<!-- ========================================================== -->
<!-- JAVASCRIPT -->
<!-- ========================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {

    const elements = document.querySelectorAll('.animate-on-scroll');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.15 });
    elements.forEach(el => observer.observe(el));

    function showToast(message, type = 'success') {
        const toast = document.getElementById('toast');
        const icon = toast.querySelector('.toast-icon i');
        const msg = toast.querySelector('.toast-msg');
        toast.className = 'toast ' + type;
        icon.className = type === 'success' ? 'fas fa-check-circle' : 'fas fa-exclamation-circle';
        msg.textContent = message;
        toast.classList.add('show');
        setTimeout(() => toast.classList.remove('show'), 5000);
    }

    // When the reply is not JSON, say what came back instead of blaming the server: the
    // status and the first words are what identifies the real cause.
    function contactReadJson(res) {
        return res.text().then(t => {
            try { return JSON.parse(t); }
            catch (e) {
                const plain = t.replace(/<[^>]*>/g, ' ').replace(/\s+/g, ' ').trim().slice(0, 160);
                showToast('HTTP ' + res.status + (res.redirected ? ' → ' + res.url : '') + (plain ? ' · ' + plain : ''), 'error');
                return { success: false, errors: null };
            }
        });
    }

    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        let valid = true;
        const fields = form.querySelectorAll('[required]');
        fields.forEach(field => {
            const group = field.closest('.floating-group');
            if (!field.value.trim()) {
                group.classList.add('has-error');
                valid = false;
            } else {
                group.classList.remove('has-error');
            }
            if (field.type === 'email' && field.value.trim() && !field.checkValidity()) {
                group.classList.add('has-error');
                valid = false;
            }
        });
        if (!valid) {
            showToast('দয়া করে সব প্রয়োজনীয় ফিল্ড সঠিকভাবে পূরণ করুন।', 'error');
            return;
        }

        submitBtn.classList.add('loading');
        submitBtn.disabled = true;

        const formData = new FormData(form);
        formData.append('contact_ajax', '1');

        fetch(window.location.href, {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            body: formData
        })
        .then(res => contactReadJson(res))
        .then(data => {
            if (data.success) {
                showToast(data.message, 'success');
                form.reset();
                document.querySelectorAll('.floating-group input, .floating-group textarea, .floating-group select')
                    .forEach(el => {
                        if (el.tagName === 'SELECT') el.value = '';
                        el.dispatchEvent(new Event('input'));
                    });
            } else {
                if (data.errors) {
                    let errorMsg = '';
                    for (let key in data.errors) {
                        const field = document.getElementById(key);
                        if (field) {
                            const group = field.closest('.floating-group');
                            group.classList.add('has-error');
                            group.querySelector('.error-msg').textContent = data.errors[key];
                        }
                        errorMsg += data.errors[key] + '\n';
                    }
                    showToast(errorMsg, 'error');
                }
            }
        })
        .catch(err => {
            const reason = String((err && err.message) || err || 'network').slice(0, 110);
            setTimeout(() => {
                const msgEl = document.querySelector('#toast .toast-msg');
                if (msgEl) msgEl.textContent = msgEl.textContent + ' · ' + reason;
            }, 0);
            showToast('সার্ভার এরর! আবার চেষ্টা করুন।', 'error');
        })
        .finally(() => {
            submitBtn.classList.remove('loading');
            submitBtn.disabled = false;
        });
    });

    document.querySelectorAll('.floating-group input, .floating-group textarea, .floating-group select')
        .forEach(el => {
            el.addEventListener('input', function() {
                const group = this.closest('.floating-group');
                if (this.value.trim()) group.classList.remove('has-error');
            });
            el.addEventListener('change', function() {
                const group = this.closest('.floating-group');
                if (this.value.trim()) group.classList.remove('has-error');
            });
        });

    document.querySelectorAll('.floating-group input, .floating-group textarea').forEach(el => {
        if (!el.value) el.dispatchEvent(new Event('input'));
    });

});
</script>

</body>
</html>