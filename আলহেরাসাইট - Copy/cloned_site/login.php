<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title>Login | Alhera Online</title>
    <link rel="stylesheet" href="/assets/vendor/fontawesome-6.5.0/css/all.min.css?v=1.1.0">
    <link rel="stylesheet" href="/assets/css/inter-local.css">
    <link rel="stylesheet" href="/assets/css/theme-edu.css?v=1.1.0">
    <style>
        /* theme-edu.css carries html[data-theme] body{display:block} for the migrated
           portal pages; this card is centred by flex, so the rule has to be scoped to
           the same specificity and win on order. */
        html[data-theme] body {
            min-height: 100vh;
            margin: 0;
            display: flex; align-items: center; justify-content: center;
            padding: 24px;
            background:
                radial-gradient(900px 620px at 12% 8%, var(--bg-glow-a), transparent 60%),
                radial-gradient(760px 560px at 88% 92%, var(--bg-glow-c), transparent 62%),
                var(--bg);
            color: var(--text);
            font-family: 'Inter', -apple-system, 'Segoe UI', sans-serif;
        }
        .login-container {
            width: 100%; max-width: 420px;
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 22px;
            padding: 34px 30px;
            box-shadow: 0 34px 70px -32px rgba(0, 0, 0, .9);
        }
        .login-brand { display: flex; align-items: center; gap: 12px; margin-bottom: 24px; }
        .login-brand .mark {
            width: 44px; height: 44px; border-radius: 14px; flex: none;
            display: grid; place-items: center;
            background: linear-gradient(135deg, var(--accent), var(--accent-2));
            color: #fff; font-weight: 800; font-size: 19px;
        }
        .login-brand h1 { font-size: 23px; font-weight: 700; letter-spacing: -.02em; margin: 0; }
        .login-brand p { color: var(--text-2); font-size: 13.5px; margin: 3px 0 0; }
        .form-group { margin-bottom: 16px; }
        .form-group label {
            display: block; font-size: 13px; font-weight: 600;
            color: var(--text-2); margin-bottom: 6px;
        }
        .form-group input {
            width: 100%; padding: 12px 14px;
            background: var(--panel-2); color: var(--text);
            border: 1px solid var(--line-2); border-radius: 12px;
            font-size: 15px; font-family: inherit; transition: .18s;
        }
        .form-group input::placeholder { color: var(--text-3); }
        .form-group input:focus {
            outline: none; border-color: var(--accent);
            box-shadow: 0 0 0 4px var(--accent-soft);
        }
        .btn-login {
            width: 100%; margin-top: 6px; padding: 13px;
            background: linear-gradient(135deg, var(--accent), var(--accent-2));
            color: #fff; border: none; border-radius: 12px;
            font-size: 15px; font-weight: 700; font-family: inherit;
            cursor: pointer; transition: .18s;
        }
        .btn-login:hover { transform: translateY(-1px); filter: brightness(1.08); }
        .error-msg {
            display: flex; align-items: center; gap: 9px;
            background: var(--red-soft); color: var(--red);
            border: 1px solid rgba(239, 68, 68, .28);
            padding: 11px 13px; border-radius: 12px;
            font-size: 13.5px; margin-bottom: 16px;
        }
        .footer-text { margin-top: 18px; text-align: center; font-size: 13px; color: var(--text-3); }
        /* html[data-theme] a { color: inherit } in theme-edu.css outranks a plain
           class+element rule, so the accent link has to carry the same prefix. */
        html[data-theme] .footer-text a { color: var(--accent); font-weight: 600; text-decoration: none; }
        html[data-theme] .footer-text a:hover { text-decoration: underline; }

        .role-tabs { display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px; margin-bottom: 16px; }
        .role-tabs label {
            display: flex; align-items: center; justify-content: center; gap: 7px;
            padding: 10px 6px; border: 1px solid var(--line-2); border-radius: 12px;
            font-size: 13px; color: var(--text-2); cursor: pointer; transition: .18s;
            background: var(--surface-2, rgba(255,255,255,.03));
        }
        .role-tabs input { position: absolute; opacity: 0; pointer-events: none; }
        .role-tabs input:checked + span { color: var(--accent); font-weight: 700; }
        .role-tabs label:has(input:checked) {
            border-color: var(--accent); background: var(--accent-soft);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-brand">
            <span class="mark">A</span>
            <div>
                <h1>Welcome back</h1>
                <p>Login to your Alhera Online account</p>
            </div>
        </div>

                
        <form method="post">
            <div class="role-tabs" role="radiogroup" aria-label="Sign in as">
                                <label>
                    <input type="radio" name="login_role" value="student" checked>
                    <span><i class="fas fa-user-graduate"></i> Student</span>
                </label>
                                <label>
                    <input type="radio" name="login_role" value="teacher" >
                    <span><i class="fas fa-chalkboard-teacher"></i> Teacher</span>
                </label>
                                <label>
                    <input type="radio" name="login_role" value="admin" >
                    <span><i class="fas fa-shield-halved"></i> Admin</span>
                </label>
                            </div>
            <div class="form-group">
                <label for="email">Email or Username</label>
                <input type="text" id="email" name="email" autocomplete="username" placeholder="you@example.com"
                       value="" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="current-password" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn-login">Sign In</button>
        </form>
        <div class="footer-text">
            <p><a href="/forgot-password.php">Forgot password?</a></p>
        </div>
    </div>
</body>
</html>
