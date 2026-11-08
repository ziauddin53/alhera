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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>আমাদের কোর্সসমূহ</title>
    <!-- Local assets -->
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/fonts-hind-siliguri.css">
    <style>
        :root {
            --hero-bg: #050d0f;
            --hero-title-color: #f5c842;
            --hero-highlight-color: #f5c842;
            --hero-subtitle-color: #ffffff;
            --hero-badge-color: #f5c842;
            --hero-badge-bg: rgba(212,160,23,0.08);
            --stat-number-color: #f5c842;
            --stat-label-color: #ffffff;
            --filter-bg: #f8f9fa;
            --filter-input-bg: #ffffff;
            --filter-text-color: #0a191f;
            --filter-border: #dde1e6;
            --filter-btn-color: #d4a017;
            --filter-btn-hover: #f5c842;
            --filter-btn-text: #050d0f;
            --card-bg: #ffffff;
            --card-title-color: #0a191f;
            --card-title-hover: #a67c00;
            --card-desc-color: #4a5568;
            --card-btn-color: #d4a017;
            --card-btn-hover: #f5c842;
            --card-btn-text: #050d0f;
            --card-code-color: #d4a017;
            --card-code-bg: rgba(212,160,23,0.10);
            --free-badge-color: #22c55e;
            --paid-badge-color: #050d0f;
            --cat-badge-bg: #ffffff;
            --cat-badge-color: #0a191f;
            --section-bg: #f8f9fa;
            --pagination-bg: #ffffff;
            --pagination-text: #4a5568;
            --pagination-active: #d4a017;
            --pagination-hover: #f5c842;
            --empty-icon-color: #d4a017;
            --empty-icon-bg: rgba(212,160,23,0.10);
            --gold: #d4a017;
            --gold-bright: #f5c842;
            --gold-dark: #a67c00;
            --gold-muted: rgba(212,160,23,0.10);
            --emerald: #0d7c5f;
            --emerald-light: #10a37f;
            --dark-1: #050d0f;
            --dark-2: #0a191f;
            --dark-3: #0f2429;
            --dark-4: #152f35;
            --light-1: #f8f9fa;
            --light-2: #eef0f2;
            --light-3: #dde1e6;
            --text-primary: #0a191f;
            --text-secondary: #4a5568;
            --text-muted: #8896a6;
            --white: #ffffff;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.04);
            --shadow-md: 0 4px 16px rgba(0,0,0,0.06);
            --shadow-lg: 0 12px 40px rgba(0,0,0,0.08);
            --shadow-xl: 0 24px 60px rgba(0,0,0,0.1);
            --shadow-gold: 0 8px 30px rgba(212,160,23,0.2);
            --r-sm: 8px;
            --r-md: 14px;
            --r-lg: 20px;
            --r-xl: 28px;
            --ease: 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            --ease-fast: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            --ease-out: 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Hind Siliguri', sans-serif;
            background: var(--light-1);
            color: var(--text-primary);
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }
        a { text-decoration: none; color: inherit; }
        img { display: block; max-width: 100%; }

        .scroll-prog {
            position: fixed; top: 0; left: 0; height: 3px;
            background: linear-gradient(90deg, var(--gold), var(--emerald-light), var(--gold-bright));
            width: 0%; z-index: 10000; transition: width 0.1s linear;
        }
        .btt {
            position: fixed; bottom: 30px; right: 30px;
            width: 46px; height: 46px;
            background: linear-gradient(135deg, var(--gold), var(--gold-dark));
            color: var(--dark-1); border: none; border-radius: 50%;
            font-size: 16px; cursor: pointer; z-index: 9999;
            opacity: 0; transform: translateY(20px) scale(0.8);
            transition: var(--ease); box-shadow: var(--shadow-gold);
            display: flex; align-items: center; justify-content: center;
        }
        .btt.vis { opacity: 1; transform: translateY(0) scale(1); }
        .btt:hover { transform: translateY(-4px) scale(1.05); box-shadow: 0 12px 40px rgba(212,160,23,0.35); }

        .rv { opacity: 0; transform: translateY(50px); transition: opacity var(--ease-out), transform var(--ease-out); }
        .rv.vis { opacity: 1; transform: translateY(0); }
        .rv-l { opacity: 0; transform: translateX(-50px); transition: opacity var(--ease-out), transform var(--ease-out); }
        .rv-l.vis { opacity: 1; transform: translateX(0); }
        .rv-r { opacity: 0; transform: translateX(50px); transition: opacity var(--ease-out), transform var(--ease-out); }
        .rv-r.vis { opacity: 1; transform: translateX(0); }
        .d1{transition-delay:.06s}.d2{transition-delay:.12s}.d3{transition-delay:.18s}.d4{transition-delay:.24s}
        .d5{transition-delay:.30s}.d6{transition-delay:.36s}.d7{transition-delay:.42s}.d8{transition-delay:.48s}
        .d9{transition-delay:.54s}.d10{transition-delay:.60s}.d11{transition-delay:.66s}.d12{transition-delay:.72s}

        .courses-hero {
            position: relative; overflow: hidden;
            background: var(--hero-bg);
            padding: 90px 0 70px;
        }
        .courses-hero::before {
            content: ''; position: absolute; inset: 0;
            background:
                radial-gradient(ellipse 500px 350px at 15% 50%, rgba(212,160,23,0.06), transparent),
                radial-gradient(ellipse 400px 400px at 85% 40%, rgba(13,124,95,0.05), transparent);
            z-index: 0;
        }
                .courses-hero .hero-pattern {
            position: absolute; inset: 0; z-index: 0;
            background-image: url('../uploads/course-page/course-page-1788947215-4111bb1fcb.jpeg');
            background-size: cover;
            background-position: center;
            opacity: 0.08;
        }
                .hero-orb {
            position: absolute; border-radius: 50%; filter: blur(80px);
            z-index: 0; animation: orbF 14s ease-in-out infinite;
        }
        .ho1 { width: 260px; height: 260px; background: rgba(212,160,23,0.07); top: -80px; right: 5%; }
        .ho2 { width: 180px; height: 180px; background: rgba(13,124,95,0.05); bottom: -50px; left: 10%; animation-delay: -5s; }
        @keyframes orbF {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(20px, -15px) scale(1.05); }
            66% { transform: translate(-15px, 10px) scale(0.95); }
        }
        .hero-lines {
            position: absolute; inset: 0; z-index: 1; overflow: hidden;
        }
        .hero-lines span {
            position: absolute;
            background: linear-gradient(180deg, transparent, rgba(212,160,23,0.05), transparent);
            width: 1px; height: 100%;
            animation: shimmer 8s ease-in-out infinite;
        }
        .hero-lines span:nth-child(1) { left: 20%; }
        .hero-lines span:nth-child(2) { left: 40%; animation-delay: -2s; }
        .hero-lines span:nth-child(3) { left: 60%; animation-delay: -4s; }
        .hero-lines span:nth-child(4) { left: 80%; animation-delay: -6s; }
        @keyframes shimmer { 0%, 100% { opacity: 0; } 50% { opacity: 1; } }

        .hero-content {
            position: relative; z-index: 2; text-align: center; color: var(--white);
        }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: var(--hero-badge-bg);
            border: 1px solid rgba(212,160,23,0.15);
            color: var(--hero-badge-color);
            padding: 5px 18px; border-radius: 50px;
            font-size: 0.8rem; font-weight: 600; margin-bottom: 18px;
        }
        .hero-badge i { animation: bPulse 2s ease-in-out infinite; font-size: 0.72rem; }
        @keyframes bPulse { 0%, 100% { opacity: 1; } 50% { opacity: 0.4; } }
        .hero-title {
            font-size: 3.4rem; font-weight: 800; line-height: 1.1; margin-bottom: 12px;
            color: var(--hero-title-color);
        }
        .hero-title span {
            color: var(--hero-highlight-color);
            background: linear-gradient(135deg, var(--gold-bright), var(--gold), var(--gold-dark));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero-sub {
            font-size: 1.05rem; color: var(--hero-subtitle-color);
            max-width: 540px; margin: 0 auto 28px; line-height: 1.7;
        }
        .hero-stats {
            display: flex; justify-content: center; gap: 44px;
        }
        .hs-item { text-align: center; }
        .hs-item .hs-num {
            font-size: 2rem; font-weight: 800; color: var(--stat-number-color);
            line-height: 1; display: block; margin-bottom: 3px;
        }
        .hs-item .hs-lbl {
            font-size: 0.8rem; color: var(--stat-label-color);
            font-weight: 500;
        }
        .hs-item + .hs-item { position: relative; }
        .hs-item + .hs-item::before {
            content: ''; position: absolute; left: -22px; top: 50%; transform: translateY(-50%);
            width: 1px; height: 30px;
            background: linear-gradient(180deg, transparent, rgba(212,160,23,0.2), transparent);
        }
        .hero-wave {
            position: absolute; bottom: -2px; left: 0; right: 0; z-index: 2;
            height: 50px; background: var(--light-1);
            clip-path: ellipse(55% 100% at 50% 100%);
        }

        .filter-bar {
            position: sticky; top: 80px; z-index: 100;
            background: var(--filter-bg);
            backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(0,0,0,0.04);
            padding: 18px 0; transition: var(--ease);
        }
        .filter-bar.scrolled { box-shadow: 0 4px 20px rgba(0,0,0,0.04); }
        .filter-inner {
            display: flex; gap: 10px; flex-wrap: wrap;
            align-items: center; justify-content: center;
        }
        .filter-input-wrap {
            position: relative; flex: 1; max-width: 320px; min-width: 220px;
        }
        .filter-input-wrap i {
            position: absolute; left: 14px; top: 50%; transform: translateY(-50%);
            color: var(--text-muted); font-size: 0.88rem; transition: var(--ease-fast); pointer-events: none;
        }
        .filter-input-wrap input {
            width: 100%; padding: 11px 14px 11px 40px;
            border: 1.5px solid var(--filter-border);
            border-radius: var(--r-sm);
            font-size: 0.9rem; font-family: inherit;
            background: var(--filter-input-bg);
            transition: var(--ease);
            color: var(--filter-text-color);
        }
        .filter-input-wrap input::placeholder { color: var(--text-muted); }
        .filter-input-wrap input:focus {
            outline: none; border-color: var(--gold);
            background: var(--filter-input-bg);
            box-shadow: 0 0 0 3px rgba(212,160,23,0.1);
        }
        .filter-input-wrap input:focus ~ i { color: var(--gold); }
        .filter-select {
            padding: 11px 36px 11px 14px;
            border: 1.5px solid var(--filter-border);
            border-radius: var(--r-sm);
            font-size: 0.9rem; font-family: inherit;
            background: var(--filter-input-bg);
            transition: var(--ease);
            color: var(--filter-text-color);
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%238896a6' d='M2 4l4 4 4-4m0 6L4 6H2a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h2l2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h2l2 2v6a2 2 0 0 1 2 2z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            padding-right: 36px;
        }
        .filter-select:focus {
            outline: none; border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(212,160,23,0.1);
        }
        .filter-btn {
            padding: 11px 24px;
            background: var(--filter-btn-color);
            border: none; border-radius: var(--r-sm);
            color: var(--filter-btn-text);
            font-weight: 700; font-size: 0.88rem;
            cursor: pointer; transition: var(--ease);
            display: inline-flex; align-items: center; gap: 7px;
            position: relative; overflow: hidden;
        }
        .filter-btn::before {
            content: ''; position: absolute; inset: 0;
            background: var(--filter-btn-hover);
            opacity: 0; transition: var(--ease);
        }
        .filter-btn span, .filter-btn i { position: relative; z-index: 1; }
        .filter-btn:hover::before { opacity: 1; }
        .filter-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 24px rgba(212,160,23,0.3); }
        .filter-reset {
            padding: 11px 18px; background: transparent;
            border: 1.5px solid var(--filter-border);
            border-radius: var(--r-sm);
            color: var(--text-muted); font-weight: 600; font-size: 0.88rem;
            cursor: pointer; transition: var(--ease-fast);
            display: inline-flex; align-items: center; gap: 6px;
        }
        .filter-reset:hover { border-color: var(--gold); color: var(--gold-dark); background: var(--gold-muted); }
        .filter-active {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 5px 14px; background: var(--gold-muted);
            border: 1px solid rgba(212,160,23,0.2);
            border-radius: 50px; font-size: 0.78rem; font-weight: 600;
            color: var(--gold-dark);
        }
        .filter-active a { color: var(--gold-dark); }
        .filter-active a:hover { opacity: 0.6; }

        .courses-section {
            padding: 40px 0 90px;
            background: var(--section-bg);
        }
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 26px;
        }

        .course-card {
            background: var(--card-bg);
            border-radius: var(--r-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(0,0,0,0.04);
            transition: var(--ease);
            position: relative;
        }
        .course-card::after {
            content: ''; position: absolute; inset: 0; border-radius: var(--r-lg);
            opacity: 0; transition: var(--ease);
            box-shadow: 0 20px 60px rgba(212,160,23,0.1), 0 6px 18px rgba(0,0,0,0.06);
            pointer-events: none;
        }
        .course-card:hover { transform: translateY(-8px); border-color: rgba(212,160,23,0.15); }
        .course-card:hover::after { opacity: 1; }

        .course-card .card-thumb {
            height: 210px; position: relative; overflow: hidden;
        }
        .course-card .card-thumb img {
            width: 100%; height: 100%; object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .course-card:hover .card-thumb img { transform: scale(1.06); }
        .card-thumb-overlay {
            position: absolute; inset: 0;
            background: linear-gradient(180deg, transparent 40%, rgba(5,13,15,0.5));
            z-index: 1;
        }
        .card-thumb .cat-b {
            position: absolute; bottom: 12px; left: 12px; z-index: 2;
            display: inline-flex; align-items: center; gap: 5px;
            padding: 4px 14px;
            background: var(--cat-badge-bg);
            backdrop-filter: blur(8px); border-radius: 50px;
            font-size: 0.72rem; font-weight: 700;
            color: var(--cat-badge-color);
        }
        .card-thumb .cat-b i { font-size: 0.65rem; color: var(--gold); }

        .card-thumb .free-b {
            display: none !important;
        }

        .card-thumb .bookmark-btn {
            position: absolute; top: 12px; left: 12px; z-index: 2;
            width: 34px; height: 34px; background: rgba(255,255,255,0.9);
            backdrop-filter: blur(8px); border: none; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; transition: var(--ease-fast);
            color: var(--text-muted); font-size: 0.8rem;
            opacity: 0; transform: scale(0.8);
        }
        .course-card:hover .bookmark-btn { opacity: 1; transform: scale(1); }
        .bookmark-btn:hover, .bookmark-btn.saved { background: var(--gold); color: var(--dark-1); }
        .bookmark-btn.saved { opacity: 1; transform: scale(1); }

        .card-body { padding: 20px 22px 24px; position: relative; z-index: 1; }

        .card-code {
            display: none !important;
        }

        .card-meta {
            display: flex; align-items: center; gap: 14px; flex-wrap: wrap;
            font-size: 0.8rem; color: var(--text-muted); font-weight: 500; margin-bottom: 10px;
        }
        .card-meta i { color: var(--gold); margin-right: 4px; font-size: 0.72rem; }
        .meta-dot { width: 3px; height: 3px; border-radius: 50%; background: var(--light-3); }
        .meta-free {
            background: rgba(34,197,94,0.1); color: #166534;
            padding: 2px 10px; border-radius: 20px;
            font-size: 0.72rem; font-weight: 700;
        }
        .card-title {
            font-size: 1.15rem; font-weight: 700;
            color: var(--card-title-color);
            line-height: 1.4; margin-bottom: 8px;
            transition: var(--ease-fast);
            display: -webkit-box; -webkit-line-clamp: 2;
            -webkit-box-orient: vertical; overflow: hidden;
        }
        .course-card:hover .card-title { color: var(--card-title-hover); }
        .card-excerpt {
            color: var(--card-desc-color);
            font-size: 0.9rem; line-height: 1.7;
            margin-bottom: 16px;
            display: -webkit-box; -webkit-line-clamp: 2;
            -webkit-box-orient: vertical; overflow: hidden;
        }
        .card-footer {
            display: flex; align-items: center; justify-content: space-between;
        }
        .btn-details {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 9px 22px;
            background: var(--card-btn-color);
            color: var(--card-btn-text);
            font-weight: 700; border-radius: 50px;
            font-size: 0.84rem; border: none; cursor: pointer;
            transition: var(--ease); position: relative; overflow: hidden;
        }
        .btn-details::before {
            content: ''; position: absolute; inset: 0;
            background: var(--card-btn-hover);
            opacity: 0; transition: var(--ease);
        }
        .btn-details span, .btn-details i { position: relative; z-index: 1; }
        .btn-details:hover::before { opacity: 1; }
        .btn-details:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 24px rgba(212,160,23,0.3);
        }
        .btn-details i { transition: transform 0.3s ease; font-size: 0.72rem; }
        .btn-details:hover i { transform: translateX(3px); }
        .card-share {
            display: flex; gap: 5px;
        }
        .card-share button {
            width: 32px; height: 32px; border-radius: 50%;
            border: 1px solid var(--light-3); background: var(--white);
            color: var(--text-muted); font-size: 0.76rem; cursor: pointer;
            transition: var(--ease-fast);
            display: flex; align-items: center; justify-content: center;
        }
        .card-share button:hover {
            border-color: var(--gold); color: var(--gold-dark); background: var(--gold-muted);
        }

        .pagination-wrap {
            display: flex; justify-content: center; align-items: center;
            gap: 6px; margin-top: 40px; flex-wrap: wrap;
        }
        .pg-btn {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 10px 18px;
            border: 1.5px solid var(--light-3);
            border-radius: var(--r-sm);
            background: var(--pagination-bg);
            color: var(--pagination-text);
            font-weight: 600; font-size: 0.86rem;
            cursor: pointer; transition: var(--ease-fast);
            font-family: inherit;
        }
        .pg-btn:hover {
            border-color: var(--pagination-hover);
            color: var(--gold-dark);
            background: var(--gold-muted);
        }
        .pg-btn.active {
            background: var(--pagination-active);
            color: var(--dark-1);
            border-color: transparent;
            box-shadow: 0 3px 12px rgba(212,160,23,0.2);
        }
        .pg-btn.disabled { opacity: 0.35; pointer-events: none; }
        .pg-dots {
            padding: 10px 5px; color: var(--text-muted);
            font-weight: 700; letter-spacing: 2px;
        }

        .empty-state {
            text-align: center; padding: 80px 20px; grid-column: 1 / -1;
        }
        .empty-icon {
            width: 72px; height: 72px; border-radius: 50%;
            background: var(--empty-icon-bg);
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 18px; font-size: 1.8rem;
            color: var(--empty-icon-color);
        }
        .empty-state h3 {
            font-size: 1.3rem; color: var(--dark-2);
            margin-bottom: 6px;
        }
        .empty-state p {
            color: var(--text-muted); font-size: 0.95rem;
            margin-bottom: 16px;
        }

        @media (max-width: 1024px) {
            .courses-grid { grid-template-columns: repeat(2, 1fr); }
            .hero-title { font-size: 2.6rem; }
            .hero-stats { gap: 24px; }
        }
        @media (max-width: 768px) {
            .filter-bar { top: 70px; }
            .hero-title { font-size: 2rem; }
            .hero-sub { font-size: 0.92rem; }
            .hero-stats { flex-direction: column; gap: 14px; }
            .hs-item + .hs-item::before { display: none; }
            .courses-grid { grid-template-columns: 1fr; max-width: 460px; margin: 0 auto; }
            .filter-inner { flex-direction: column; }
            .filter-input-wrap { max-width: 100%; min-width: 0; }
            .card-share { display: none; }
            .course-card .card-thumb { height: 180px; }
        }
        @media (max-width: 480px) {
            .hero-title { font-size: 1.6rem; }
            .hero-stats { gap: 10px; }
            .hs-item .hs-num { font-size: 1.5rem; }
        }

        .free-b,
        .card-code {
            display: none !important;
        }
    </style>
</head>
<body>

<div class="scroll-prog" id="scrollProg"></div>
<button class="btt" id="btt"><i class="fas fa-arrow-up"></i></button>

<!-- ===== Hero ===== -->
<section class="courses-hero">
    <div class="hero-pattern"></div>
    <div class="hero-orb ho1"></div>
    <div class="hero-orb ho2"></div>
    <div class="hero-lines"><span></span><span></span><span></span><span></span></div>
    <div style="max-width:1280px; margin:0 auto; padding:0 28px;">
        <div class="hero-content rv">
            <div class="hero-badge"><i class="fas fa-graduation-cap"></i> 📚 আমাদের</div>
            <h1 class="hero-title">
                আমাদের                <span>কোর্সসমূহ</span>
            </h1>
            <p class="hero-sub">আপনার দ্বীনি শিক্ষার যাত্রা শুরু করুন আমাদের পেশাদার কোর্সগুলোর মাধ্যমে</p>
            <div class="hero-stats rv">
                <div class="hs-item">
                    <span class="hs-num counter" data-target="3">0</span>
                    <span class="hs-lbl">মোট কোর্স</span>
                </div>
                <div class="hs-item">
                    <span class="hs-num">3+</span>
                    <span class="hs-lbl">ক্যাটাগরি</span>
                </div>
                <div class="hs-item">
                    <span class="hs-num counter" data-target="1000">0</span>
                    <span class="hs-lbl">শিক্ষার্থী</span>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-wave"></div>
</section>

<!-- ===== Filter bar ===== -->
<div class="filter-bar" id="filterBar">
    <div style="max-width:1280px; margin:0 auto; padding:0 28px;">
        <form method="GET" action="courses.php" class="filter-inner">
            <div class="filter-input-wrap">
                <input type="text" name="search" placeholder="কোর্স খুঁজুন..." value="">
                <i class="fas fa-magnifying-glass"></i>
            </div>
            <select class="filter-select" name="category">
                <option value="">📂 সব ক্যাটাগরি</option>
                                    <option value="14" >
                        আন্তর্জাতিক হিফজুল কুরআন                    </option>
                                    <option value="13" >
                        আলেম কোর্স                    </option>
                                    <option value="15" >
                        ফরজে আইন                    </option>
                            </select>
            <button type="submit" class="filter-btn">
                <span>ফিল্টার</span>
                <i class="fas fa-filter"></i>
            </button>
            <a href="courses.php" class="filter-reset"><i class="fas fa-rotate-left"></i> রিসেট</a>
        </form>
            </div>
</div>

<!-- ===== Course grid ===== -->
<section class="courses-section">
    <div style="max-width:1280px; margin:0 auto; padding:0 28px;">
                    <div class="courses-grid">
                                    <div class="course-card rv d1">
                        <div class="card-thumb">
                            <img src="/assets/img/placeholder.svg" alt="আন্তর্জাতিক হিফজুল কুরআন" loading="lazy">
                            <div class="card-thumb-overlay"></div>
                                                            <span class="cat-b"><i class="fas fa-folder"></i> 14</span>
                                                        <!-- ❌ Free/paid badge disabled (hidden with CSS) -->
                            <button class="bookmark-btn" onclick="toggleBookmark(this)" aria-label="Bookmark"><i class="far fa-bookmark"></i></button>
                        </div>
                        <div class="card-body">
                            <!-- ❌ Course Code disabled (hidden with CSS) -->
                            <div class="card-meta">
                                                                    <span><i class="fas fa-calendar-alt"></i> 26 Oct 2026</span>
                                                            </div>
                            <h3 class="card-title">আন্তর্জাতিক হিফজুল কুরআন</h3>
                            <p class="card-excerpt">
                                ...                            </p>
                            <div class="card-footer">
                                <!-- ✅ Links fixed — adjust to your folder structure -->
                                <a href="course-details.php?id=66" class="btn-details">
                                    <span>বিস্তারিত দেখুন</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <div class="card-share">
                                    <button onclick="shareC(this, 66)" aria-label="Facebook"><i class="fab fa-facebook-f"></i></button>
                                    <button onclick="shareC(this, 66)" aria-label="Twitter"><i class="fab fa-x-twitter"></i></button>
                                    <button onclick="copyC(66)" aria-label="Copy"><i class="fas fa-link"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                                        <div class="course-card rv d2">
                        <div class="card-thumb">
                            <img src="/assets/img/placeholder.svg" alt="ফরজে আইন কোর্স" loading="lazy">
                            <div class="card-thumb-overlay"></div>
                                                            <span class="cat-b"><i class="fas fa-folder"></i> 15</span>
                                                        <!-- ❌ Free/paid badge disabled (hidden with CSS) -->
                            <button class="bookmark-btn" onclick="toggleBookmark(this)" aria-label="Bookmark"><i class="far fa-bookmark"></i></button>
                        </div>
                        <div class="card-body">
                            <!-- ❌ Course Code disabled (hidden with CSS) -->
                            <div class="card-meta">
                                                                    <span><i class="fas fa-calendar-alt"></i> 26 Oct 2026</span>
                                                            </div>
                            <h3 class="card-title">ফরজে আইন কোর্স</h3>
                            <p class="card-excerpt">
                                ...                            </p>
                            <div class="card-footer">
                                <!-- ✅ Links fixed — adjust to your folder structure -->
                                <a href="course-details.php?id=65" class="btn-details">
                                    <span>বিস্তারিত দেখুন</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <div class="card-share">
                                    <button onclick="shareC(this, 65)" aria-label="Facebook"><i class="fab fa-facebook-f"></i></button>
                                    <button onclick="shareC(this, 65)" aria-label="Twitter"><i class="fab fa-x-twitter"></i></button>
                                    <button onclick="copyC(65)" aria-label="Copy"><i class="fas fa-link"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                                        <div class="course-card rv d3">
                        <div class="card-thumb">
                            <img src="/assets/img/placeholder.svg" alt="আলেম কোর্স" loading="lazy">
                            <div class="card-thumb-overlay"></div>
                                                            <span class="cat-b"><i class="fas fa-folder"></i> 13</span>
                                                        <!-- ❌ Free/paid badge disabled (hidden with CSS) -->
                            <button class="bookmark-btn" onclick="toggleBookmark(this)" aria-label="Bookmark"><i class="far fa-bookmark"></i></button>
                        </div>
                        <div class="card-body">
                            <!-- ❌ Course Code disabled (hidden with CSS) -->
                            <div class="card-meta">
                                                                    <span><i class="fas fa-calendar-alt"></i> 26 Oct 2026</span>
                                                            </div>
                            <h3 class="card-title">আলেম কোর্স</h3>
                            <p class="card-excerpt">
                                ...                            </p>
                            <div class="card-footer">
                                <!-- ✅ Links fixed — adjust to your folder structure -->
                                <a href="course-details.php?id=59" class="btn-details">
                                    <span>বিস্তারিত দেখুন</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <div class="card-share">
                                    <button onclick="shareC(this, 59)" aria-label="Facebook"><i class="fab fa-facebook-f"></i></button>
                                    <button onclick="shareC(this, 59)" aria-label="Twitter"><i class="fab fa-x-twitter"></i></button>
                                    <button onclick="copyC(59)" aria-label="Copy"><i class="fas fa-link"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                                </div>
        
            </div>
</section>

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
<script>
document.addEventListener('DOMContentLoaded', function() {
    var sp = document.getElementById('scrollProg');
    var bt = document.getElementById('btt');
    var fb = document.getElementById('filterBar');

    function onScroll() {
        var st = window.scrollY, dh = document.documentElement.scrollHeight - window.innerHeight;
        sp.style.width = (dh > 0 ? (st / dh) * 100 : 0) + '%';
        bt.classList.toggle('vis', st > 400);
        if (fb) fb.classList.toggle('scrolled', st > 300);
    }

    var tk = false;
    window.addEventListener('scroll', function() {
        if (!tk) { requestAnimationFrame(function() { onScroll(); tk = false; }); tk = true; }
    });
    bt.addEventListener('click', function() { window.scrollTo({ top: 0, behavior: 'smooth' }); });

    var els = document.querySelectorAll('.rv, .rv-l, .rv-r');
    var obs = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
            if (e.isIntersecting) {
                e.target.classList.add('vis');
                e.target.querySelectorAll('.counter').forEach(function(c) {
                    if (c.dataset.done) return; c.dataset.done = '1';
                    var t = parseInt(c.dataset.target);
                    if (!isNaN(t) && t > 0) runC(c, t);
                });
            }
        });
    }, { threshold: 0.08, rootMargin: '0px 0px -20px 0px' });
    els.forEach(function(el) { obs.observe(el); });
    onScroll();
});

function runC(el, target) {
    var cur = 0, inc = Math.ceil(target / 65);
    var bd = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];
    var suf = el.textContent.includes('+') ? '+' : '';
    function bn(n) { return n.toString().replace(/\d/g, function(d) { return bd[parseInt(d)]; }); }
    var t = setInterval(function() {
        cur += inc;
        if (cur >= target) { cur = target; clearInterval(t); }
        el.textContent = bn(cur) + suf;
    }, 30);
}

function toggleBookmark(btn) {
    btn.classList.toggle('saved');
    var i = btn.querySelector('i');
    if (btn.classList.contains('saved')) { i.className = 'fas fa-bookmark'; showToast('বুকমার্ক করা হয়েছে', 'fa-bookmark'); }
    else { i.className = 'far fa-bookmark'; showToast('বুকমার্ক থেকে সরানো হয়েছে', 'fa-bookmark'); }
}

function shareC(el, id) {
    var u = window.location.origin + '/course-details.php?id=' + id;
    var card = el.closest('.course-card');
    var t = card ? card.querySelector('.card-title').textContent : 'কোর্স';
    var label = el.getAttribute('aria-label') || '';
    if (label === 'Facebook') window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(u), '_blank', 'width=600,height=400');
    else if (label === 'Twitter') window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(u) + '&text=' + encodeURIComponent(t), '_blank', 'width=600,height=400');
}

function copyC(id) {
    var u = window.location.origin + '/course-details.php?id=' + id;
    navigator.clipboard.writeText(u).then(function() {
        showToast('লিংক কপি হয়েছে', 'fa-link');
    }).catch(function() {
        showToast('সমস্যা হয়েছে', 'fa-exclamation-circle');
    });
}

function showToast(msg, icon) {
    var c = document.getElementById('toastC');
    if (!c) {
        c = document.createElement('div');
        c.id = 'toastC';
        c.style.cssText = 'position:fixed;bottom:32px;left:50%;transform:translateX(-50%);z-index:99999;display:flex;flex-direction:column;gap:8px;align-items:center;';
        document.body.appendChild(c);
    }
    var t = document.createElement('div');
    t.className = 'toast';
    t.innerHTML = '<i class="fas ' + (icon || 'fa-check-circle') + '"></i> ' + msg;
    t.style.cssText = 'padding:11px 22px;background:#0a191f;color:#fff;border-radius:8px;font-size:0.9rem;font-weight:600;box-shadow:0 10px 40px rgba(0,0,0,0.15);display:flex;align-items:center;gap:9px;border-left:3px solid #d4a017;animation:toastIn 0.4s cubic-bezier(0.34,1.56,0.64,1)';
    c.appendChild(t);
    setTimeout(function() { t.style.animation = 'toastOut 0.3s ease forwards'; setTimeout(function() { if (t.parentNode) t.parentNode.removeChild(t); }, 300); }, 2500);
}
</script>

</body>
</html>