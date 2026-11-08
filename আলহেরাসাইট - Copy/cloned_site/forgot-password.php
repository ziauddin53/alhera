<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | Alhera Online</title>
    <link rel="stylesheet" href="/assets/vendor/fontawesome-6.5.0/css/all.min.css?v=1.1.0">
    <link rel="stylesheet" href="/assets/css/inter-local.css">
    <link rel="stylesheet" href="/assets/css/theme-edu.css?v=1.1.0">
    <style>
        html[data-theme] body {
            min-height: 100vh; margin: 0;
            display: flex; align-items: center; justify-content: center;
            padding: 24px;
            background:
                radial-gradient(900px 620px at 12% 8%, var(--bg-glow-a), transparent 60%),
                radial-gradient(760px 560px at 88% 92%, var(--bg-glow-c), transparent 62%),
                var(--bg);
            color: var(--text);
            font-family: 'Inter', -apple-system, 'Segoe UI', sans-serif;
        }
        .fp-card {
            width: 100%; max-width: 440px;
            background: var(--panel); border: 1px solid var(--line);
            border-radius: 22px; padding: 32px 30px;
            box-shadow: 0 34px 70px -32px rgba(0, 0, 0, .9);
        }
        .fp-brand { display: flex; align-items: center; gap: 12px; margin-bottom: 18px; }
        .fp-brand .mark {
            width: 44px; height: 44px; border-radius: 14px; flex: none;
            display: grid; place-items: center;
            background: linear-gradient(135deg, var(--accent), var(--accent-2));
            color: #fff; font-weight: 800; font-size: 19px;
        }
        .fp-brand h1 { font-size: 22px; font-weight: 700; letter-spacing: -.02em; margin: 0; }
        .fp-brand p { color: var(--text-2); font-size: 13.5px; margin: 3px 0 0; }
        .fp-steps { display: flex; gap: 8px; margin-bottom: 20px; }
        .fp-steps span {
            flex: 1; height: 4px; border-radius: 4px; background: var(--panel-3);
        }
        .fp-steps span.on { background: linear-gradient(90deg, var(--accent), var(--accent-2)); }
        .fp-note { color: var(--text-2); font-size: 13.5px; line-height: 1.6; margin: 0 0 18px; }
        .form-group { margin-bottom: 16px; }
        .form-group > label {
            display: block; font-size: 13px; font-weight: 600;
            color: var(--text-2); margin-bottom: 6px;
        }
        .form-group input[type=text], .form-group input[type=email], .form-group input[type=tel],
        .form-group input[type=password] {
            width: 100%; padding: 12px 14px;
            background: var(--panel-2); color: var(--text);
            border: 1px solid var(--line-2); border-radius: 12px;
            font-size: 15px; font-family: inherit; transition: .18s;
        }
        .form-group input.otp {
            letter-spacing: 10px; text-align: center; font-size: 22px; font-weight: 700;
        }
        .form-group input:focus { outline: none; border-color: var(--accent); box-shadow: 0 0 0 4px var(--accent-soft); }
        .fp-channels { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 18px; }
        .fp-channels label {
            display: flex; align-items: center; gap: 9px; cursor: pointer;
            padding: 12px 13px; border: 1px solid var(--line-2); border-radius: 12px;
            background: var(--panel-2); font-size: 13.5px; font-weight: 600; color: var(--text-2);
        }
        .fp-channels label:has(input:checked) {
            border-color: var(--accent); background: var(--accent-soft); color: var(--text);
        }
        .fp-channels input { accent-color: var(--accent); }
        .btn-fp {
            width: 100%; padding: 13px;
            background: linear-gradient(135deg, var(--accent), var(--accent-2));
            color: #fff; border: none; border-radius: 12px;
            font-size: 15px; font-weight: 700; font-family: inherit; cursor: pointer; transition: .18s;
        }
        .btn-fp:hover { transform: translateY(-1px); filter: brightness(1.08); }
        .btn-ghost {
            display: block; width: 100%; margin-top: 10px; padding: 11px;
            background: transparent; color: var(--text-2); border: 1px solid var(--line-2);
            border-radius: 12px; font-size: 13.5px; font-weight: 600; font-family: inherit;
            cursor: pointer; text-decoration: none; text-align: center;
        }
        .btn-ghost:hover { color: var(--text); border-color: var(--accent); }
        .fp-msg {
            display: flex; align-items: flex-start; gap: 9px;
            padding: 11px 13px; border-radius: 12px; font-size: 13.5px; margin-bottom: 16px;
            line-height: 1.5;
        }
        .fp-msg.error { background: var(--red-soft); color: var(--red); border: 1px solid rgba(239,68,68,.28); }
        .fp-msg.ok { background: var(--green-soft); color: var(--green); border: 1px solid rgba(34,197,94,.28); }
        .fp-foot { margin-top: 16px; text-align: center; font-size: 13px; color: var(--text-3); }
        html[data-theme] .fp-foot a { color: var(--accent); font-weight: 600; text-decoration: none; }
        html[data-theme] .fp-foot a:hover { text-decoration: underline; }
    </style>
</head>
<body>
<div class="fp-card">
    <div class="fp-brand">
        <span class="mark">A</span>
        <div>
            <h1>Reset password</h1>
            <p>We will send you a 6-digit verification code</p>
        </div>
    </div>

    <div class="fp-steps">
        <span class="on"></span>
        <span class=""></span>
        <span class=""></span>
    </div>

        
            <p class="fp-note">Choose where the code should go, then fill in the box that appears.</p>
        <form method="post" action="forgot-password.php">
            <input type="hidden" name="step" value="ask">
            <input type="hidden" name="csrf_token" value="cf6706ce74e026cf46bfb1695daf627786e4c976083d67b3e7950ed8197afc7d">
            <div class="fp-channels">
                <label><input type="radio" name="channel" value="email"
                    checked> <i class="fas fa-envelope"></i> Email</label>
                <label><input type="radio" name="channel" value="sms"
                    > <i class="fas fa-mobile-screen"></i> SMS</label>
            </div>
            <div class="form-group" id="fpEmailBox">
                <label for="identity_email">Email Address</label>
                <input type="email" id="identity_email" name="identity_email" autocomplete="email"
                       placeholder="you@example.com" value="">
            </div>
            <div class="form-group" id="fpPhoneBox">
                <label for="identity_phone">Mobile Number</label>
                <input type="tel" id="identity_phone" name="identity_phone" inputmode="numeric" autocomplete="tel"
                       placeholder="01XXXXXXXXX" value="">
                <small style="display:block;color:var(--text-3);font-size:12.5px;margin-top:6px;">
                    The number saved on your account, like 01712345678.
                     This site has no SMS gateway yet (Admin → Settings → SMS Gateway), so the code would go by email instead.                </small>
            </div>
            <button type="submit" class="btn-fp"><i class="fas fa-paper-plane"></i> Send code</button>
        </form>
        <script>
        (function () {
            var emailBox = document.getElementById('fpEmailBox'),
                phoneBox = document.getElementById('fpPhoneBox');
            function show() {
                var c = (document.querySelector('input[name="channel"]:checked') || {}).value || 'email';
                emailBox.hidden = c === 'sms';
                phoneBox.hidden = c === 'email';
                var field = document.getElementById(c === 'sms' ? 'identity_phone' : 'identity_email');
                if (field && !field.value) field.focus();
            }
            Array.prototype.forEach.call(document.querySelectorAll('input[name="channel"]'), function (r) {
                r.addEventListener('change', show);
            });
            show();
        })();
        </script>
    
    <div class="fp-foot">
                <a href="/login.php">Back to login</a>
    </div>
</div>
</body>
</html>
