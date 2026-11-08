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
    <title>আল হেরা অনলাইন মাদ্রাসা</title>
    <link rel="stylesheet" href="/assets/vendor/fontawesome-6.5.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/fonts-hind-siliguri.css">

    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family:'Hind Siliguri',sans-serif; }
        body { background-color:#f9f9f9; color:#1e1e1e; overflow-x:hidden; padding:0; }
        .animate-on-scroll { opacity:0; transform:translateY(60px); transition:opacity 0.8s cubic-bezier(0.25,0.46,0.45,0.94), transform 0.8s cubic-bezier(0.25,0.46,0.45,0.94); }
        .animate-on-scroll.visible { opacity:1; transform:translateY(0); }
        .animate-on-scroll.delay-1 { transition-delay:0.1s; }
        .animate-on-scroll.delay-2 { transition-delay:0.2s; }
        .animate-on-scroll.delay-3 { transition-delay:0.3s; }
        .animate-on-scroll.delay-4 { transition-delay:0.4s; }
        .animate-on-scroll.delay-5 { transition-delay:0.5s; }
        .section-container { max-width:1240px; margin:0 auto; padding:0 24px; }
        .section-gap { margin-bottom:60px; }
        a { text-decoration:none; color:inherit; }
        :root { --gold: #f2a900; }

        .floating-btn { position:fixed; bottom:30px; right:30px; background:linear-gradient(135deg,#155a62,#758b1c); color:#fff; padding:12px 24px; border-radius:50px; font-weight:600; display:flex; align-items:center; gap:10px; box-shadow:0 4px 15px rgba(0,0,0,0.3); z-index:999; cursor:pointer; transition:all 0.3s ease; animation:pulse-float 2s ease-in-out infinite; }
        .floating-btn:hover { transform:scale(1.1); }
        @keyframes pulse-float { 0%,100%{transform:scale(1);} 50%{transform:scale(1.05);box-shadow:0 8px 30px rgba(0,0,0,0.4);} }

        .sec-1 { background:#0084a8; background-image:url('../uploads/1787312710_ChatGPT Image Aug 21, 2026, 05_44_43 PM.png');background-size:cover;background-position:center; border-radius:30px; padding:40px 60px; position:relative; margin-top:100px; overflow:hidden; color:#1e1e1e; }
        .sec-1::before { content:''; position:absolute; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.05); z-index:0; }
        .sec-1-inner { display:grid; grid-template-columns:1.2fr 1fr; gap:40px; align-items:center; position:relative; z-index:1; }
        .sec-1-content h1 { font-size:3.5rem; color:#171616; line-height:1.1; margin-bottom:10px; animation:fadeInUp 1s ease; }
        .sec-1-content h2 { font-size:2rem; color:#1e1e1e; margin-bottom:20px; animation:fadeInUp 1s ease 0.2s both; }
        .sec-1-content p { font-size:1.1rem; color:#1e1e1e; margin-bottom:20px; line-height:1.6; animation:fadeInUp 1s ease 0.4s both; }
        .sec-1-badges { display:flex; gap:15px; margin-bottom:25px; flex-wrap:wrap; animation:fadeInUp 1s ease 0.6s both; }
        .sec-1-badges span { display:flex; align-items:center; gap:8px; color:#1e1e1e; }
        .sec-1-badges span:nth-child(2) { color:#1e1e1e; }
        .sec-1-badges span:nth-child(3) { color:#1e1e1e; }
        .sec-1-badges i { color:#f2a900; background:white; border-radius:50%; padding:5px; }
        .btn-primary { background:#007bff; color:#ffffff; padding:12px 30px; border-radius:8px; font-weight:bold; display:inline-block; transition:all 0.3s ease; animation:fadeInUp 1s ease 0.8s both; }
        .btn-primary:hover { background:#f2a900; color:#ffffff; transform:translateY(-3px) scale(1.02); box-shadow:0 8px 30px rgba(0,0,0,0.2); }
        .sec-1-img-wrap { position:relative; border-radius:15px; overflow:hidden; display:flex; flex-wrap:wrap; justify-content:center; background:#1f4a43; padding:20px; animation:zoomIn 1.2s ease; }
        .sec-1-img-wrap img { max-width:100%; height:auto; border-radius:10px; transition:transform 0.5s ease; }
        .sec-1-img-wrap img:hover { transform:scale(1.05); }
        .badge-corner { position:absolute; background:#f5fafb; padding:10px 15px; border-radius:10px; right:-10px; top:10px; font-weight:bold; color:#1e1e1e; box-shadow:0 5px 10px rgba(0,0,0,0.1); animation:slideInRight 0.8s ease; }
        .badge-bottom { position:absolute; bottom:20px; left:20px; background:#f5fafb; padding:10px 15px; border-radius:10px; color:#1e1e1e; box-shadow:0 5px 10px rgba(0,0,0,0.1); animation:slideInUp 0.8s ease; }
        @keyframes fadeInUp { from{opacity:0;transform:translateY(30px);} to{opacity:1;transform:translateY(0);} }
        @keyframes zoomIn { from{opacity:0;transform:scale(0.8);} to{opacity:1;transform:scale(1);} }
        @keyframes slideInRight { from{opacity:0;transform:translateX(50px);} to{opacity:1;transform:translateX(0);} }
        @keyframes slideInUp { from{opacity:0;transform:translateY(30px);} to{opacity:1;transform:translateY(0);} }

        .sec-2 { background:#ffffff;  border:2px solid #000000; border-radius:20px; padding:40px 20px; text-align:center; color:#0a2745; }
        .sec-2 h2 { font-size:2rem; color:#0a2745; margin-bottom:40px; }
        .sec-2 h2 span { color:var(--gold); }
        .sec-2-stats { display:grid; grid-template-columns:repeat(4,1fr); gap:20px; }
        .stat-box h3 { font-size:2rem; color:#0a2745; margin:10px 0 5px; transition:all 0.3s ease; }
        .stat-box:hover h3 { transform:scale(1.1); color:#f2a900; }
        .stat-box p { font-size:1rem; color:#0a2745; }

        .sec-3 { background:#ffffff;  border-radius:30px; padding:60px; display:grid; grid-template-columns:1fr 1fr; gap:40px; align-items:center; color:#000000; }
        .sec-3-text h2 { color:#f2a900; font-size:2.5rem; margin-bottom:20px; }
        .sec-3-text h2 span { color:white; }
        .sec-3-text p { font-size:1.1rem; color:#000000; line-height:1.7; margin-bottom:30px; }
        .sec-3-text .btn { background:#0c738f; color:#ffffff; padding:12px 25px; border-radius:8px; display:inline-block; transition:all 0.3s ease; }
        .sec-3-text .btn:hover { background:#eeb643; color:#ffffff; transform:translateY(-3px); }
        .sec-3-img-wrap img { border-radius:30px; width:100%; height:auto; border:8px solid #eeb643; max-width:400px; transition:transform 0.5s ease; }
        .sec-3-img-wrap img:hover { transform:scale(1.03); }

        .sec-4 { background:#0c181d;  border-radius:30px; padding:60px; text-align:center; color:#141414; }
        .sec-4-head-icon { background:#2c3e35; width:80px; height:80px; border-radius:50%; margin:0 auto 40px; display:flex; align-items:center; justify-content:center; border:2px solid var(--gold); font-size:2rem; color:#4aa6b8; transition:all 0.3s ease; }
        .sec-4-head-icon:hover { transform:rotate(180deg) scale(1.1); }
        .sec-4-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:20px; }
        .feature-card { background:#f5fafa; padding:30px 20px; border-radius:15px; border:1px solid #e0e0e0; text-align:center; color:#0a2a32; transition:all 0.4s ease; }
        .feature-card:hover { background:#ffffff; color:#0a2a32; transform:translateY(-10px) scale(1.02); box-shadow:0 20px 40px rgba(0,0,0,0.15); }
        .feature-card i { font-size:2.5rem; color:#4aa6b8; margin-bottom:10px; transition:all 0.3s ease; }
        .feature-card:hover i { color:#f2a900; transform:scale(1.2) rotate(5deg); }
        .feature-card h4 { font-size:1rem; }

        .sec-5 { background:#0c181d;  border-radius:30px; padding:40px; display:grid; grid-template-columns:1fr 1fr 1fr; gap:15px; }
        .sec-5 .card { background:#1a2d33; border-radius:10px; padding:20px; color:#ffffff; display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; min-height:160px; position:relative; transition:all 0.4s ease; overflow:hidden; background-size:cover; background-position:center; }
        .sec-5 .card:hover { background:#22404a; transform:translateY(-8px) scale(1.02); box-shadow:0 15px 30px rgba(0,0,0,0.3); }
        .sec-5 .card h4 { position:relative; z-index:1; transition:color 0.3s ease; }
        .sec-5 .card:hover h4 { color:#f2a900; }
        .sec-5 .card .card-overlay { position:absolute; inset:0; background:rgba(0,0,0,0.3); z-index:0; }
        .sec-5 .card img, .sec-5 .card i { position:relative; z-index:1; }
        .sec-5 .card img { max-width:100%; max-height:100px; border-radius:8px; margin-top:10px; transition:transform 0.5s ease; object-fit:contain; }
        .sec-5 .card:hover img { transform:scale(1.05); }

        .sec-6 { background:#ffffff;  border-radius:30px; padding:50px 40px; position:relative; overflow:hidden; border:2px solid rgba(242,169,0,0.3); box-shadow:0 10px 50px rgba(0,0,0,0.5); }
        .sec-6::before { content:''; position:absolute; top:-50%; left:-50%; width:200%; height:200%; background:radial-gradient(circle at 30% 50%, rgba(242,169,0,0.05) 0%, transparent 60%), radial-gradient(circle at 70% 80%, rgba(12,115,143,0.08) 0%, transparent 50%); animation:bgFloat 20s ease-in-out infinite; z-index:1; }
        @keyframes bgFloat { 0%,100%{transform:translate(0,0) rotate(0deg);} 33%{transform:translate(30px,-20px) rotate(5deg);} 66%{transform:translate(-20px,30px) rotate(-3deg);} }
        .sec-6 .particle { position:absolute; border-radius:50%; background:rgba(242,169,0,0.1); z-index:1; animation:particleFloat 15s ease-in-out infinite; }
        .sec-6 .particle:nth-child(1) { width:80px; height:80px; top:10%; left:5%; }
        .sec-6 .particle:nth-child(2) { width:120px; height:120px; bottom:10%; right:5%; animation-delay:-5s; }
        .sec-6 .particle:nth-child(3) { width:60px; height:60px; top:50%; left:50%; animation-delay:-10s; }
        .sec-6 .particle:nth-child(4) { width:40px; height:40px; top:20%; right:20%; animation-delay:-3s; }
        .sec-6 .particle:nth-child(5) { width:90px; height:90px; bottom:20%; left:30%; animation-delay:-7s; }
        @keyframes particleFloat { 0%,100%{transform:translate(0,0) scale(1);opacity:0.3;} 25%{transform:translate(30px,-40px) scale(1.2);opacity:0.6;} 50%{transform:translate(-20px,20px) scale(0.8);opacity:0.4;} 75%{transform:translate(40px,30px) scale(1.1);opacity:0.5;} }
        .sec-6-inner { position:relative; z-index:2; }
        .notice-header { display:flex; align-items:center; justify-content:space-between; margin-bottom:30px; flex-wrap:wrap; gap:15px; }
        .notice-badge { display:inline-flex; align-items:center; gap:10px; background:#f2a900; color:#ffffff; padding:10px 25px; border-radius:50px; font-weight:700; font-size:0.9rem; text-transform:uppercase; letter-spacing:1px; animation:pulseBadge 2s ease-in-out infinite; box-shadow:0 4px 20px rgba(242,169,0,0.4); }
        @keyframes pulseBadge { 0%,100%{transform:scale(1);} 50%{transform:scale(1.05);box-shadow:0 4px 40px rgba(242,169,0,0.7);} }
        .notice-nav button { width:45px; height:45px; border-radius:50%; border:2px solid rgba(255,255,255,0.2); background:rgba(255,255,255,0.05); color:white; font-size:1.2rem; cursor:pointer; transition:all 0.3s ease; backdrop-filter:blur(5px); }
        .notice-nav button:hover { background:var(--gold); color:#0a1a20; border-color:var(--gold); transform:scale(1.1); }
        .slider-container { overflow:hidden; position:relative; border-radius:20px; width:100%; }
        .slider-track { display:flex; transition:transform 0.8s cubic-bezier(0.25,0.46,0.45,0.94); width:100%; }
        .slide-item-banner { min-width:100%; padding:30px 35px; border-radius:20px; position:relative; overflow:hidden; background:linear-gradient(135deg, rgba(255,255,255,0.05), rgba(255,255,255,0.02)); border:1px solid rgba(255,255,255,0.08); backdrop-filter:blur(10px); transition:all 0.5s ease; box-sizing:border-box; background-size:cover; background-position:center; }
        .slide-item-banner::before { content:''; position:absolute; inset:0; background:linear-gradient(135deg, rgba(242,169,0,0.05), transparent 60%); z-index:0; }
        .slide-item-banner .slide-content { position:relative; z-index:1; display:grid; grid-template-columns:1fr auto; gap:30px; align-items:center; }
        .slide-item-banner .slide-text h3 { font-size:1.8rem; color:#ffffff; margin-bottom:8px; font-weight:700; transition:color 0.3s ease; }
        .slide-item-banner:hover .slide-text h3 { color:#f2a900; }
        .slide-item-banner .slide-text h3 i { margin-right:10px; }
        .slide-item-banner .slide-text .sub-title { font-size:1.1rem; color:#ffffff; margin-bottom:5px; }
        .slide-item-banner .slide-text p { color:#ffffff; font-size:0.95rem; line-height:1.6; max-width:500px; }
        .slide-item-banner .slide-text .highlight { display:inline-block; background:rgba(242,169,0,0.15); color:#f2a900; padding:4px 15px; border-radius:20px; font-size:0.85rem; font-weight:600; margin-top:10px; border:1px solid rgba(242,169,0,0.2); }
        .slide-item-banner .slide-btn { display:inline-block; padding:12px 30px; font-weight:700; border-radius:50px; transition:all 0.3s ease; border:none; cursor:pointer; font-size:0.95rem; }
        .slide-item-banner .slide-icon { font-size:4rem; color:rgba(242,169,0,0.2); min-width:80px; text-align:center; }
        .slider-dots { display:flex; justify-content:center; gap:10px; margin-top:25px; }
        .slider-dots span { width:12px; height:12px; border-radius:50%; background:rgba(255,255,255,0.2); cursor:pointer; transition:all 0.3s ease; }
        .slider-dots span.active { background:var(--gold); width:35px; border-radius:6px; box-shadow:0 0 20px rgba(242,169,0,0.4); }
        .slider-dots span:hover:not(.active) { background:rgba(255,255,255,0.4); }

        .sec-7 { background:#f6f0e3;  border-radius:30px; padding:50px; display:grid; grid-template-columns:1fr 1fr; gap:50px; align-items:center; color:#1e1e1e; }
        .sec-7-vid-wrap { background-color:#000000; border-radius:15px; padding:0; position:relative; color:white; min-height:320px; display:flex; flex-direction:column; justify-content:center; align-items:center; background-size:cover; background-position:center; transition:transform 0.4s ease, box-shadow 0.4s ease; overflow:hidden; cursor:pointer; isolation:isolate; }
        .sec-7-vid-wrap::after { content:''; position:absolute; inset:0; background:linear-gradient(180deg, rgba(0,0,0,0.2), rgba(0,0,0,0.55)); z-index:1; pointer-events:none; }
        .sec-7-vid-wrap:hover { transform:scale(1.02); box-shadow:0 15px 40px rgba(0,0,0,0.3); }
        .sec-7-vid-wrap .vid-title-overlay { position:absolute; top:20px; left:20px; right:20px; z-index:2; text-align:center; }
        .sec-7-vid-wrap .vid-title-overlay h2 { font-size:1.4rem; color:white; font-weight:700; text-shadow:2px 2px 8px rgba(0,0,0,0.9); margin:0; }
        .sec-7-vid-wrap .play-btn { font-size:2.5rem; color:white; background:rgba(255,255,255,0.25); border-radius:50%; width:75px; height:75px; display:flex; justify-content:center; align-items:center; backdrop-filter:blur(4px); transition:all 0.4s ease; position:relative; z-index:3; border:2px solid rgba(255,255,255,0.5); padding-left:8px; }
        .sec-7-vid-wrap:hover .play-btn { transform:scale(1.15); background:var(--gold); color:#0a1a20; }
        .sec-7-text h2 { font-size:2.5rem; margin-bottom:20px; color:#f2a900; }
        .sec-7-text h2 span { color:var(--gold); }
        .sec-7-text p { font-size:1.1rem; line-height:1.7; color:#1e1e1e; }

        .sec-8 { background:#0c181d;  border-radius:30px; padding:60px 60px 50px; position:relative; overflow:hidden; color:#ffffff; }
        .sec-8-header { position:relative; z-index:1; text-align:center; margin-bottom:40px; }
        .sec-8-badge { display:inline-block; background:rgba(242,169,0,0.15); color:var(--gold); padding:6px 20px; border-radius:50px; font-size:0.85rem; font-weight:600; border:1px solid rgba(242,169,0,0.2); margin-bottom:15px; }
        .sec-8-badge i { margin-right:8px; }
        .sec-8-header h2 { font-size:2.8rem; margin-bottom:15px; color:#f2a900; }
        .sec-8-header h2 span { color:var(--gold); }
        .sec-8-header p { font-size:1.05rem; max-width:700px; margin:0 auto; line-height:1.7; }
        .years-tabs { display:flex; justify-content:center; flex-wrap:wrap; gap:12px; margin-bottom:40px; position:relative; z-index:1; }
        .year-tab { display:flex; flex-direction:column; align-items:center; padding:14px 28px; background:#000000; border:2px solid rgba(255,255,255,0.06); border-radius:16px; cursor:pointer; transition:all 0.4s ease; min-width:80px; }
        .year-tab:hover { background:#030303; border-color:rgba(242,169,0,0.3); transform:translateY(-3px); }
        .year-tab.active { background:#f2a900; border-color:var(--gold); box-shadow:0 8px 30px rgba(242,169,0,0.15); transform:translateY(-5px); }
        .year-tab .year-number { font-size:2rem; font-weight:800; color:rgba(255,255,255,0.3); line-height:1; }
        .year-tab.active .year-number { color:var(--gold); }
        .year-tab .year-label { font-size:0.7rem; color:rgba(255,255,255,0.4); margin-top:2px; }
        .year-tab.active .year-label { color:rgba(255,255,255,0.8); }
        .year-tab .year-badge { font-size:0.55rem; background:rgba(255,255,255,0.05); color:rgba(255,255,255,0.3); padding:2px 10px; border-radius:20px; margin-top:4px; font-weight:600; }
        .year-tab.active .year-badge { background:rgba(242,169,0,0.15); color:var(--gold); }
        .year-content-wrapper { position:relative; z-index:1; min-height:400px; }
        .year-content { display:none; animation:fadeSlideIn 0.6s ease; }
        .year-content.active { display:block; }
        @keyframes fadeSlideIn { 0%{opacity:0;transform:translateY(30px);} 100%{opacity:1;transform:translateY(0);} }
        .year-content-grid { display:grid; grid-template-columns:1.4fr 0.6fr; gap:30px; background:#000000; border-radius:20px; padding:30px; border:1px solid rgba(255,255,255,0.04); }
        .year-info h3 { font-size:1.5rem; color:#f2a900; margin-bottom:10px; }
        .year-info h3 i { margin-right:10px; }
        .year-info > p { color:rgba(255,255,255,0.6); font-size:0.95rem; line-height:1.7; margin-bottom:20px; }
        .year-features { list-style:none; display:grid; grid-template-columns:1fr 1fr; gap:8px 20px; }
        .year-features li { color:rgba(255,255,255,0.7); font-size:0.9rem; display:flex; align-items:center; gap:8px; padding:4px 0; }
        .year-features li i { color:#f2a900; font-size:0.8rem; flex-shrink:0; }
        .year-enroll-btn { display:inline-block; margin-top:20px; padding:12px 30px; background:#f2a900; color:#0a1a20; font-weight:700; border-radius:50px; transition:all 0.3s ease; font-size:0.95rem; }
        .year-enroll-btn:hover { background:#d4880f; transform:translateY(-3px); }
        .year-stats { display:flex; flex-direction:column; gap:15px; }
        .stat-card { background:rgba(255,255,255,0.03); border-radius:16px; padding:20px 25px; text-align:center; border:1px solid rgba(255,255,255,0.04); }
        .stat-card .stat-number { font-size:2.2rem; font-weight:800; color:#f2a900; line-height:1; }
        .stat-card .stat-label { font-size:0.8rem; color:rgba(255,255,255,0.5); margin-top:5px; }

        .sec-9 { background:#0c181d;  border-radius:30px; padding:40px; display:grid; grid-template-columns:0.8fr 1.2fr; gap:20px; color:#ffffff; }
        .sec-9-left h3 { font-size:1.5rem; margin-bottom:20px; color:#f2a900; }
        .sec-9-menu { display:flex; flex-direction:column; gap:10px; }
        .sec-9-menu-item { background:#16252a; padding:15px 20px; border-radius:10px; display:flex; align-items:center; gap:10px; border:1px solid #2d424a; }
        .sec-9-menu-item.active { border:2px solid #f2a900; background:#1a2d33; }
        .sec-9-menu-item i { font-size:1.5rem; color:#f2a900; }
        .sec-9-menu-item h4 { color:#ffffff; }
        .sec-9-right h3 { font-size:1.5rem; margin-bottom:20px; color:#f2a900; }
        .module-grid { display:grid; grid-template-columns:1fr 1fr; gap:15px; }
        .module-card { background:#16252a; padding:15px; border-radius:10px; display:flex; align-items:flex-start; gap:10px; border:1px solid #2d424a; color:#ffffff; }
        .module-card i { color:#f2a900; font-size:1.2rem; margin-top:3px; }

        .sec-10 { background:#0c181d;  border-radius:30px; padding:60px 40px; text-align:center; color:#ffffff; overflow:hidden; }
        .sec-10 h2 { font-size:2.5rem; margin-bottom:10px; color:#f2a900; }
        .sec-10 h2 span { color:var(--gold); }
        .sec-10 p { color:#acbdbf; margin-bottom:40px; }
        .slider-wrapper { display:flex; justify-content:center; align-items:center; gap:15px; flex-wrap:wrap; }
        .slide-item { flex:1; border-radius:15px; background:#16252a; min-height:250px; padding:20px; position:relative; max-width:300px; background-size:cover; background-position:center; overflow:hidden; cursor:pointer; }
        .slide-item.center { flex:1.5; min-height:300px; max-width:400px; }
        .slide-item i.play-icon { position:absolute; top:40%; left:50%; transform:translate(-50%, -50%); font-size:2.5rem; color:#ffffff; text-shadow:0 0 10px rgba(0,0,0,0.5); z-index:3; }
        .slide-bottom-text { position:absolute; bottom:0; left:0; width:100%; padding:20px; background:linear-gradient(transparent, #000 80%); z-index:2; }
        .slide-bottom-text h5 { font-size:1.2rem; margin-bottom:5px; color:#f2a900; }
        .slide-bottom-text small { color:#ffffff; }

        .sec-11 { background:#0a1a20;  border-radius:30px; padding:60px 40px; text-align:center; color:#ffffff; }
        .sec-11 h2 { font-size:2.5rem; margin-bottom:20px; color:#f2a900; }
        .sec-11 h2 span { color:var(--gold); }
        .certificate-wrap { background:white; padding:40px; border-radius:15px; max-width:700px; margin:30px auto; box-shadow:0 10px 30px rgba(0,0,0,0.5); }
        .certificate-wrap img { max-width:100%; }
        .community-boxes { display:grid; grid-template-columns:1fr 1fr; gap:20px; max-width:900px; margin:0 auto; margin-top:-50px; position:relative; z-index:2; }
        .comm-box { background:#0a1919; border-radius:15px; padding:20px; text-align:left; display:flex; flex-direction:column; gap:10px; position:relative; }
        .comm-box h4 { font-size:1.2rem; color:#f2a900; }
        .comm-box p { font-size:0.8rem; color:#ffffff; }
        .comm-box .btn-comm { background:#00d2d3; color:#000000; font-weight:bold; padding:8px 15px; border-radius:5px; display:inline-block; align-self:flex-start; }
        .comm-box img { position:absolute; right:10px; bottom:10px; width:50px; opacity:0.7; }

        .sec-12 { background:linear-gradient(90deg, #155a62, #758b1c);  border-radius:30px; padding:50px 60px; display:grid; grid-template-columns:1fr 1fr; gap:50px; align-items:center; color:#ffffff; }
        .sec-12-content h2 { font-size:2.8rem; line-height:1.2; margin-bottom:20px; color:#f2a900; }
        .sec-12-content h2 span { color:var(--gold); }
        .sec-12-content p { font-size:1.1rem; line-height:1.7; margin-bottom:30px; }
        .btn-outline { border:1px solid #ffffff; padding:12px 30px; border-radius:8px; display:inline-block; color:#ffffff; }
        .sec-12-img img { max-width:100%; border-radius:10px; }

        @media (max-width:992px) { .sec-1-inner,.sec-3,.sec-7,.sec-12{grid-template-columns:1fr;} .sec-2-stats,.sec-4-grid,.sec-9,.community-boxes{grid-template-columns:1fr 1fr;} .module-grid{grid-template-columns:1fr;} .sec-5{grid-template-columns:1fr 1fr;} .slide-item-banner .slide-content{grid-template-columns:1fr;text-align:center;} .slide-item-banner .slide-icon{display:none;} .year-content-grid{grid-template-columns:1fr;} .year-features{grid-template-columns:1fr;} }
        @media (max-width:768px) { .sec-1-content h1{font-size:2.5rem;} .sec-4-grid{grid-template-columns:1fr 1fr;} .sec-9{grid-template-columns:1fr;} .sec-12{grid-template-columns:1fr;} .sec-8-header h2{font-size:1.8rem;} }
        @media (max-width:600px) { .sec-1-content h1{font-size:2rem;} .sec-2-stats,.sec-4-grid,.community-boxes,.sec-5{grid-template-columns:1fr;} .sec-7{grid-template-columns:1fr;} }

        /* GLOBAL VIDEO MODAL */
        .gvm-overlay { position:fixed; inset:0; background:rgba(0,0,0,0.92); display:flex; align-items:center; justify-content:center; z-index:999999; opacity:0; visibility:hidden; transition:opacity 0.35s ease, visibility 0.35s ease; padding:20px; backdrop-filter:blur(8px); }
        .gvm-overlay.active { opacity:1; visibility:visible; }
        .gvm-inner { position:relative; width:100%; max-width:960px; background:#000; border-radius:16px; overflow:hidden; box-shadow:0 20px 80px rgba(0,0,0,0.8); transform:scale(0.85); transition:transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1); }
        .gvm-overlay.active .gvm-inner { transform:scale(1); }
        .gvm-close { position:absolute; top:12px; right:12px; width:42px; height:42px; border-radius:50%; background:rgba(255,255,255,0.15); border:1px solid rgba(255,255,255,0.3); color:#fff; font-size:18px; cursor:pointer; z-index:10; display:flex; align-items:center; justify-content:center; }
        .gvm-close:hover { background:#f2a900; color:#000; }
        .gvm-video-wrap { position:relative; padding-bottom:56.25%; height:0; background:#000; }
        .gvm-video-wrap iframe { position:absolute; top:0; left:0; width:100%; height:100%; border:0; }
    </style>
</head>
<body>

<!-- ===== Section 1 ===== -->
<section class="section-container section-gap">
    <div class="sec-1 animate-on-scroll">
        <div class="sec-1-inner">
            <div class="sec-1-content">
                <h1>৭ বছরে আলেম</h1>
                <h2>১ম বছরই সহিহ শুদ্ধ কোরআন তেলাওয়াত ও সহিহ তরীকায় নামাজ শিক্ষা</h2>
                <p>জেনারেল শিক্ষিত ভাই-বোনদের জন্য আরবি ভাষা ও দ্বীনিয়াত শিক্ষার একটি গবেষণালব্ধ সৃজনশীল প্রতিষ্ঠান।</p>
                <div class="sec-1-badges">
                    <span><i class="fas fa-check-circle"></i> আন্তর্জাতিক হিফজুল কুরআন কোর্স</span>
                    <span><i class="fas fa-check-circle"></i> ৭ বছরে আলেম কোর্স</span>
                    <span><i class="fas fa-check-circle"></i> ফরজে আইন কোর্স</span>
                </div>
                <a href="#" class="btn-primary">
                    এখনই শুরু করুন 
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="sec-1-img-wrap">
                                <img src="../uploads/1792862723_1.jpeg" alt="">
                <div class="badge-corner">সৃজনশীল প্রতিষ্ঠান</div>
                <div class="badge-bottom">থাকছে সার্টিফিকেশনও</div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Section 2 ===== -->
<section class="section-container section-gap">
    <div class="sec-2 animate-on-scroll">
        <h2>আল হেরা অনলাইন মাদ্রাসার সংক্ষিপ্ত চিত্র</h2>
        <div class="sec-2-stats">
                            <div class="stat-box animate-on-scroll delay-1">
                    <h3 class="counter" data-target="">
                        ৫০ +                    </h3>
                    <p>অভিজ্ঞ উস্তাদ</p>
                </div>
                            <div class="stat-box animate-on-scroll delay-2">
                    <h3 class="counter" data-target="">
                        ২৫০০ +                    </h3>
                    <p>শিক্ষার্থী</p>
                </div>
                            <div class="stat-box animate-on-scroll delay-3">
                    <h3 class="counter" data-target="">
                        ৮৫-৯৫ %                    </h3>
                    <p>সফলতার হার</p>
                </div>
                            <div class="stat-box animate-on-scroll delay-4">
                    <h3 class="counter" data-target="">
                        ২৫ +                    </h3>
                    <p>প্রতি ক্লাসে শিক্ষার্থী</p>
                </div>
                    </div>
    </div>
</section>

<!-- ===== Section 3 ===== -->
<section class="section-container section-gap">
    <div class="sec-3 animate-on-scroll">
        <div class="sec-3-text">
            <h2><span>আমাদের লক্ষ্য ও উদ্দেশ্য</span></h2>
            <p>দ্বীনের আলো এবং পথহারা মানুষের মাঝে হেদায়াতের আলো পৌঁছাতে আমাদের এই আত্মনিবেদন। সমাজের সর্বস্তরের মানুষ—পেশাজীবী, শিক্ষার্থী, ব্যবসায়ী, গৃহিণী—সবার জন্য দ্বীনি শিক্ষা সহজ ও সুলভ করাই আমাদের মূল লক্ষ্য। এখানে সকল শ্রেণি-পেশার মানুষের স্বতঃস্ফূর্ত অংশগ্রহণ ও ভালোবাসা আমাদের পথচলার মূল প্রেরণা। আমরা আশা করি আল-হেরা অনলাইন মাদরাসার শিক্ষার্থীরা আদর্শবান হয়ে সমাজ গঠনে ভূমিকা রাখবে এবং দুনিয়া ও আখেরাতের কল্যাণে মুত্তাকীনদের কাফেলায় অন্তর্ভুক্ত হবে—ইনশাআল্লাহ।</p>
            <a href="#" class="btn">
                আমাদের সম্পর্কে 
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="sec-3-img-wrap">
                        <img src="../uploads/1787253860_about_logoalhera.png" alt="">
        </div>
    </div>
</section>

<!-- ===== Section 4 ===== -->
<section class="section-container section-gap">
    <div class="sec-4 animate-on-scroll">
        <div class="sec-4-head-icon"><i class="fas fa-gear"></i></div>
        <div class="sec-4-grid">
                            <div class="feature-card animate-on-scroll delay-1">
                    <i class="fas fa-star"></i>
                                        <h4></h4>
                </div>
                            <div class="feature-card animate-on-scroll delay-2">
                    <i class="fas fa-star"></i>
                                        <h4></h4>
                </div>
                            <div class="feature-card animate-on-scroll delay-3">
                    <i class="fas fa-star"></i>
                                        <h4></h4>
                </div>
                            <div class="feature-card animate-on-scroll delay-4">
                    <i class="fas fa-star"></i>
                                        <h4></h4>
                </div>
                    </div>
                <div style="margin-top:30px;">
            <p style="max-width:600px; margin:10px auto; color:#141414;">
                দ্বীনি ও আধুনিক শিক্ষার এক অনন্য সমন্বয়, যেখানে অভিজ্ঞ উলামায়ে কেরামের তত্ত্বাবধানে আপনার মেধা ও সময়ের সর্বোচ্চ মূল্যায়ন নিশ্চিত করা হবে ইনশাআল্লাহ।            </p>
        </div>
            </div>
</section>

<!-- ===== Section 5 ===== -->
<section class="section-container section-gap">
    <div class="sec-5 animate-on-scroll">
                    <div class="card animate-on-scroll delay-1"
                 style="background-image:url('../uploads/1787316064_card1_bg_Screenshot 2026-08-21 183427.png');background-size:cover;background-position:center;">
                <div class="card-overlay"></div>                <h4>ক্লাস গুলো বিজ্ঞ উলামায়ে কেরামের পরামর্শে পরিচালিত হয়</h4>
                            </div>
                    <div class="card animate-on-scroll delay-2"
                 style="background-image:url('../uploads/1787316064_card2_bg_Screenshot 2026-08-21 183459.png');background-size:cover;background-position:center;">
                <div class="card-overlay"></div>                <h4>কৌশলে পড়ানো হয় তাই পড়ার চাপ খুব বেশি নেহী</h4>
                            </div>
                    <div class="card animate-on-scroll delay-3"
                 style="background-image:url('../uploads/1787316064_card3_bg_Screenshot 2026-08-21 183532.png');background-size:cover;background-position:center;">
                <div class="card-overlay"></div>                <h4>স্কুল, কলেজ, ডিগ্রির পড়া লেখার পাশাপাশি আমাদের কোর্সে অংশগ্রহণের অপুর্ব সুযোগ</h4>
                            </div>
                    <div class="card animate-on-scroll delay-1"
                 style="background-image:url('../uploads/1787316064_card4_bg_Screenshot 2026-08-21 183635.png');background-size:cover;background-position:center;">
                <div class="card-overlay"></div>                <h4>প্রত্যেক শিক্ষার্থীকে নিজ নিজ মেধানুযায়ী পড়ানো হয়</h4>
                            </div>
                    <div class="card animate-on-scroll delay-2"
                 style="background-image:url('../uploads/1787316064_card5_bg_Screenshot 2026-08-21 183701.png');background-size:cover;background-position:center;">
                <div class="card-overlay"></div>                <h4>কোর্স শেষে কওমি মাদ্রাসা শিক্ষা বোর্ড ও দাওরায়ে হাদিস পরীক্ষায় অংশগ্রহণ</h4>
                            </div>
                    <div class="card animate-on-scroll delay-3"
                 style="background-image:url('../uploads/1787316064_card6_bg_Screenshot 2026-08-21 183725.png');background-size:cover;background-position:center;">
                <div class="card-overlay"></div>                <h4>প্রতিদিনের ক্লাসের পড়া ক্লাসেই সিখিয়ে দেওয়া হয়</h4>
                            </div>
            </div>
</section>

<!-- ===== Section 6 (Slider) ===== -->
<section class="section-container section-gap">
    <div class="sec-6 animate-on-scroll">
        <div class="particle"></div><div class="particle"></div><div class="particle"></div><div class="particle"></div><div class="particle"></div>
        <div class="sec-6-inner">
            <div class="notice-header">
                <div class="notice-badge">
                    <i class="fas fa-bullhorn"></i>
                    <span>📢 নতুন ব্যাচের নোটিশ</span>
                </div>
                <div class="notice-nav">
                    <button onclick="prevSlide()"><i class="fas fa-chevron-left"></i></button>
                    <button onclick="nextSlide()"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="slider-container">
                <div class="slider-track" id="sliderTrack">
                                            <div class="slide-item-banner style-1" style="background-image: url('../uploads/1787378365_slide_bg_0_WhatsApp%20Image%202026-08-22%20at%2011.55.43%20AM.jpeg'); background-size: cover; background-position: center;">
                            <div class="slide-content">
                                <div class="slide-text">
                                    <h3><i class="fas fa-graduation-cap"></i> নতুন ব্যাচ শুরু হচ্ছে</h3>
                                    <div class="sub-title">🎯 ৭ বছরের আলেম কোর্স</div>
                                    <p>আল হেরা অনলাইন মাদ্রাসার নতুন ব্যাচ শুরু হতে যাচ্ছে। আপনার দ্বীনি শিক্ষার যাত্রা শুরু করুন এখনই।</p>
                                    <span class="highlight"><i class="fas fa-calendar-alt"></i> শুরু: ১৫ জানুয়ারি, ২০২৬</span>
                                    <div style="margin-top:15px;">
                                        <a href="#" class="slide-btn"
                                           style="background:#f2a900;color:#ffffff;">
                                            এখনই রেজিস্টার করুন 
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="slide-icon"><i class="fas fa-graduation-cap"></i></div>
                            </div>
                        </div>
                                            <div class="slide-item-banner style-2" style="background-image: url('../uploads/1787378365_slide_bg_1_WhatsApp%20Image%202026-08-22%20at%2011.55.43%20AM%20(1).jpeg'); background-size: cover; background-position: center;">
                            <div class="slide-content">
                                <div class="slide-text">
                                    <h3><i class="fas fa-fire"></i> বিশেষ অফার</h3>
                                    <div class="sub-title">🔥 ৫০% ছাড় প্রথম ৫০ জনের জন্য</div>
                                    <p>সীমিত সময়ের জন্য বিশেষ ছাড়। আরবি ভাষা ও কুরআন শিক্ষার এই সুযোগ মিস করবেন না।</p>
                                    <span class="highlight"><i class="fas fa-clock"></i> অফার শেষ: ৩১ জানুয়ারি, ২০২৬</span>
                                    <div style="margin-top:15px;">
                                        <a href="#" class="slide-btn"
                                           style="background:#f2a900;color:#ffffff;">
                                            অফারটি দেখুন 
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="slide-icon"><i class="fas fa-fire"></i></div>
                            </div>
                        </div>
                                            <div class="slide-item-banner style-3" style="background-image: url('../uploads/1787378365_slide_bg_2_WhatsApp%20Image%202026-08-22%20at%2011.55.44%20AM.jpeg'); background-size: cover; background-position: center;">
                            <div class="slide-content">
                                <div class="slide-text">
                                    <h3><i class="fas fa-chalkboard-teacher"></i> মুক্ত ক্লাস</h3>
                                    <div class="sub-title">📖 ফ্রি ট্রায়াল ক্লাস</div>
                                    <p>আমাদের শিক্ষা পদ্ধতি ও শিক্ষকদের সাথে পরিচিত হতে ফ্রি ট্রায়াল ক্লাসে অংশগ্রহণ করুন।</p>
                                    <span class="highlight"><i class="fas fa-calendar-check"></i> প্রতি শুক্রবার বিকাল ৫টা</span>
                                    <div style="margin-top:15px;">
                                        <a href="#" class="slide-btn"
                                           style="background:#f2a900;color:#ffffff;">
                                            বুক করুন 
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="slide-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                            </div>
                        </div>
                                    </div>
            </div>
            <div class="slider-dots" id="sliderDots">
                                    <span class="active" onclick="goToSlide(0)"></span>
                                    <span class="" onclick="goToSlide(1)"></span>
                                    <span class="" onclick="goToSlide(2)"></span>
                            </div>
        </div>
    </div>
</section>

<!-- ===== Section 7 ===== -->
<section class="section-container section-gap">
    <div class="sec-7 animate-on-scroll">
                <div class="sec-7-vid-wrap" 
             style="background-image:url('../uploads/1787330248_sec7_thumb_ChatGPT Image Aug 21, 2026, 07_03_41 PM.png');"             >
                        <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
        <div class="sec-7-text">
            <h2>আমাদের গল্প</h2>
            <p>ফিতনার এই যুগে দ্বীনের হিফাযতের জন্য এবং দুনিয়ার সকল কাজ আল্লাহর সন্তুষ্টি মোতাবেক হওয়ার জন্য দ্বীনি শিক্ষার বিকল্প নেই। জেনারেল শিক্ষিত ভাই বোনের জন্য সময় যেন আর প্রতিবন্ধকতা সৃষ্টি করতে না পারে তার জন্যই আমাদের অনলাইনে এই আয়োজন।</p>
        </div>
    </div>
</section>

<!-- ===== Section 8 ===== -->
<section class="section-container section-gap">
    <div class="sec-8 animate-on-scroll">
        <div class="sec-8-header">
            <div class="sec-8-badge">
                <i class="fas fa-graduation-cap"></i> 
                আমাদের কোর্সসমূহ            </div>
            <h2>৭ বছরের <span>পূর্ণাঙ্গ সিলেবাস</span></h2>
            <p>জেনারেল শিক্ষিতদের জন্য আমাদের সব কোর্স, যেখানে ৭ বছরে আপনি কুরআন-হাদিস ও ফিকহ শাস্ত্রের মূল কিতাব থেকে পড়ার যোগ্যতা অর্জন করবেন।</p>
        </div>
        <div class="years-tabs" id="yearsTabs">
                            <button class="year-tab active" data-year="1">
                    <span class="year-number">1</span>
                    <span class="year-label">প্রথম বছর - বুনিয়াদি শিক্ষা</span>
                    <span class="year-badge">1 বছর</span>
                </button>
                            <button class="year-tab " data-year="2">
                    <span class="year-number">2</span>
                    <span class="year-label">দ্বিতীয় বছর - কুরআন ও হাদিস ভিত্তি</span>
                    <span class="year-badge">2 বছর</span>
                </button>
                            <button class="year-tab " data-year="3">
                    <span class="year-number">3</span>
                    <span class="year-label">তৃতীয় বছর - গভীর অধ্যয়ন</span>
                    <span class="year-badge">3 বছর</span>
                </button>
                            <button class="year-tab " data-year="4">
                    <span class="year-number">4</span>
                    <span class="year-label">চতুর্থ বছর - বিশেষায়িত অধ্যয়ন</span>
                    <span class="year-badge">4 বছর</span>
                </button>
                            <button class="year-tab " data-year="5">
                    <span class="year-number">5</span>
                    <span class="year-label">পঞ্চম বছর - উন্নত অধ্যয়ন</span>
                    <span class="year-badge">5 বছর</span>
                </button>
                            <button class="year-tab " data-year="6">
                    <span class="year-number">6</span>
                    <span class="year-label">ষষ্ঠ বছর - গবেষণা ও দক্ষতা</span>
                    <span class="year-badge">6 বছর</span>
                </button>
                            <button class="year-tab " data-year="7">
                    <span class="year-number">7</span>
                    <span class="year-label">সপ্তম বছর - তাকমিল (সমাপনী)</span>
                    <span class="year-badge">7 বছর</span>
                </button>
                    </div>
        <div class="year-content-wrapper">
                            <div class="year-content active" id="year-1">
                    <div class="year-content-grid">
                        <div class="year-info">
                            <h3><i class="fas fa-book-open"></i> প্রথম বছর - বুনিয়াদি শিক্ষা</h3>
                            <p>প্রথম বছরে শিক্ষার্থীরা কুরআন তিলাওয়াত, তাজবিদ ও মৌলিক আরবি ভাষা শিক্ষা লাভ করবে।</p>
                            <ul class="year-features">
                                                                    <li><i class="fas fa-check-circle"></i> সহজ কুরআন শিক্ষা (তাজবিদসহ)</li>
                                                                    <li><i class="fas fa-check-circle"></i> পূর্ণ কুরআনের নামেরা শুদ্ধভাবে পড়তে পারা</li>
                                                                    <li><i class="fas fa-check-circle"></i> এতটা অর্থ বুঝে নামাজ পড়ি</li>
                                                                    <li><i class="fas fa-check-circle"></i> আমলী সূরা ও মাসনূন দুআ মুখস্থ করণ</li>
                                                                    <li><i class="fas fa-check-circle"></i> ঈমান ও ইসলামী আকীদা (মুতালায়া)</li>
                                                                    <li><i class="fas fa-check-circle"></i> সিরাতে রাসূল ও আত-তারিখুল মাখতুম</li>
                                                                    <li><i class="fas fa-check-circle"></i> তামরীনুল দুগাহ আল আরাবিয়া</li>
                                                                    <li><i class="fas fa-check-circle"></i> আরবি হাতের লেখার ক্যালিকেশন</li>
                                                            </ul>
                            <a href="#" class="year-enroll-btn">
                                এখনই ভর্তি হোন 
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="year-stats">
                                                            <div class="stat-card">
                                    <div class="stat-number">৮</div>
                                    <div class="stat-label">মোট মডিউল</div>
                                </div>
                                                            <div class="stat-card">
                                    <div class="stat-number">৯৬</div>
                                    <div class="stat-label">মোট ক্লাস</div>
                                </div>
                                                            <div class="stat-card">
                                    <div class="stat-number">১৫০+</div>
                                    <div class="stat-label">শিক্ষার্থী</div>
                                </div>
                                                    </div>
                    </div>
                </div>
                            <div class="year-content " id="year-2">
                    <div class="year-content-grid">
                        <div class="year-info">
                            <h3><i class="fas fa-book-open"></i> দ্বিতীয় বছর - কুরআন ও হাদিস ভিত্তি</h3>
                            <p>দ্বিতীয় বছরে শিক্ষার্থীরা কুরআনের তাফসীর ও হাদিসের প্রাথমিক কিতাবসমূহ অধ্যয়ন করবে।</p>
                            <ul class="year-features">
                                                                    <li><i class="fas fa-check-circle"></i> কুরআনের তাফসীর (পারা ১-৫)</li>
                                                                    <li><i class="fas fa-check-circle"></i> সহিহ বুখারী (প্রাথমিক অধ্যায়)</li>
                                                                    <li><i class="fas fa-check-circle"></i> সহিহ মুসলিম (প্রাথমিক অধ্যায়)</li>
                                                                    <li><i class="fas fa-check-circle"></i> আরবি ভাষা ব্যাকরণ (সার্ফ)</li>
                                                                    <li><i class="fas fa-check-circle"></i> ইসলামী ফিকহ (তহারত ও সালাত)</li>
                                                                    <li><i class="fas fa-check-circle"></i> সীরাতে রাসূল (মক্কী জীবন)</li>
                                                                    <li><i class="fas fa-check-circle"></i> হাদিস উসূল (প্রাথমিক)</li>
                                                                    <li><i class="fas fa-check-circle"></i> কুরআন তিলাওয়াত (তাজবিদের সাথে)</li>
                                                            </ul>
                            <a href="#" class="year-enroll-btn">
                                এখনই ভর্তি হোন 
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="year-stats">
                                                            <div class="stat-card">
                                    <div class="stat-number">৮</div>
                                    <div class="stat-label">মোট মডিউল</div>
                                </div>
                                                            <div class="stat-card">
                                    <div class="stat-number">১০২</div>
                                    <div class="stat-label">মোট ক্লাস</div>
                                </div>
                                                            <div class="stat-card">
                                    <div class="stat-number">১৩০+</div>
                                    <div class="stat-label">শিক্ষার্থী</div>
                                </div>
                                                    </div>
                    </div>
                </div>
                            <div class="year-content " id="year-3">
                    <div class="year-content-grid">
                        <div class="year-info">
                            <h3><i class="fas fa-book-open"></i> তৃতীয় বছর - গভীর অধ্যয়ন</h3>
                            <p>তৃতীয় বছরে শিক্ষার্থীরা কুরআনের পূর্ণাঙ্গ তাফসীর ও হাদিসের গুরুত্বপূর্ণ কিতাবসমূহ অধ্যয়ন করবে।</p>
                            <ul class="year-features">
                                                                    <li><i class="fas fa-check-circle"></i> কুরআনের তাফসীর (পারা ৬-১৫)</li>
                                                                    <li><i class="fas fa-check-circle"></i> সহিহ বুখারী (মাধ্যমিক অধ্যায়)</li>
                                                                    <li><i class="fas fa-check-circle"></i> সহিহ মুসলিম (মাধ্যমিক অধ্যায়)</li>
                                                                    <li><i class="fas fa-check-circle"></i> আরবি ভাষা ব্যাকরণ (নাহু)</li>
                                                                    <li><i class="fas fa-check-circle"></i> ইসলামী ফিকহ (যাকাত, রোযা, হজ)</li>
                                                                    <li><i class="fas fa-check-circle"></i> সীরাতে রাসূল (মদীনী জীবন)</li>
                                                                    <li><i class="fas fa-check-circle"></i> হাদিস উসূল (মাধ্যমিক)</li>
                                                                    <li><i class="fas fa-check-circle"></i> কুরআন তিলাওয়াত (তাজবিদের সাথে)</li>
                                                            </ul>
                            <a href="#" class="year-enroll-btn">
                                এখনই ভর্তি হোন 
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="year-stats">
                                                            <div class="stat-card">
                                    <div class="stat-number">৮</div>
                                    <div class="stat-label">মোট মডিউল</div>
                                </div>
                                                            <div class="stat-card">
                                    <div class="stat-number">১০৮</div>
                                    <div class="stat-label">মোট ক্লাস</div>
                                </div>
                                                            <div class="stat-card">
                                    <div class="stat-number">১১০+</div>
                                    <div class="stat-label">শিক্ষার্থী</div>
                                </div>
                                                    </div>
                    </div>
                </div>
                            <div class="year-content " id="year-4">
                    <div class="year-content-grid">
                        <div class="year-info">
                            <h3><i class="fas fa-book-open"></i> চতুর্থ বছর - বিশেষায়িত অধ্যয়ন</h3>
                            <p>চতুর্থ বছরে শিক্ষার্থীরা ফিকহ ও হাদিসের গভীরে প্রবেশ করবে এবং বিশেষায়িত জ্ঞান অর্জন করবে।</p>
                            <ul class="year-features">
                                                                    <li><i class="fas fa-check-circle"></i> কুরআনের তাফসীর (পারা ১৬-২৫)</li>
                                                                    <li><i class="fas fa-check-circle"></i> সহিহ বুখারী (উচ্চ অধ্যায়)</li>
                                                                    <li><i class="fas fa-check-circle"></i> সহিহ মুসলিম (উচ্চ অধ্যায়)</li>
                                                                    <li><i class="fas fa-check-circle"></i> আরবি ভাষা সাহিত্য (প্রাথমিক)</li>
                                                                    <li><i class="fas fa-check-circle"></i> ইসলামী ফিকহ (বিবিধ মাসায়েল)</li>
                                                                    <li><i class="fas fa-check-circle"></i> ইসলামী অর্থনীতি ও ব্যবসা</li>
                                                                    <li><i class="fas fa-check-circle"></i> হাদিস উসূল (উচ্চ)</li>
                                                                    <li><i class="fas fa-check-circle"></i> দাওয়াত ও তাবলীগ</li>
                                                            </ul>
                            <a href="#" class="year-enroll-btn">
                                এখনই ভর্তি হোন 
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="year-stats">
                                                            <div class="stat-card">
                                    <div class="stat-number">৮</div>
                                    <div class="stat-label">মোট মডিউল</div>
                                </div>
                                                            <div class="stat-card">
                                    <div class="stat-number">১১৪</div>
                                    <div class="stat-label">মোট ক্লাস</div>
                                </div>
                                                            <div class="stat-card">
                                    <div class="stat-number">৯৫+</div>
                                    <div class="stat-label">শিক্ষার্থী</div>
                                </div>
                                                    </div>
                    </div>
                </div>
                            <div class="year-content " id="year-5">
                    <div class="year-content-grid">
                        <div class="year-info">
                            <h3><i class="fas fa-book-open"></i> পঞ্চম বছর - উন্নত অধ্যয়ন</h3>
                            <p>পঞ্চম বছরে শিক্ষার্থীরা কুরআনের পূর্ণাঙ্গ তাফসীর এবং হাদিসের সমস্ত কিতাবসমূহ অধ্য্যয়ন শেষ করবে।</p>
                            <ul class="year-features">
                                                                    <li><i class="fas fa-check-circle"></i> কুরআনের তাফসীর (পারা ২৬-৩০)</li>
                                                                    <li><i class="fas fa-check-circle"></i> সহিহ বুখারী (সম্পূর্ণ)</li>
                                                                    <li><i class="fas fa-check-circle"></i> সহিহ মুসলিম (সম্পূর্ণ)</li>
                                                                    <li><i class="fas fa-check-circle"></i> আরবি ভাষা সাহিত্য (মাধ্যমিক)</li>
                                                                    <li><i class="fas fa-check-circle"></i> ইসলামী ফিকহ (জটিল মাসায়েল)</li>
                                                                    <li><i class="fas fa-check-circle"></i> ইসলামী ইতিহাস ও সংস্কৃতি</li>
                                                                    <li><i class="fas fa-check-circle"></i> তাফসীর উসূল</li>
                                                                    <li><i class="fas fa-check-circle"></i> সীরাত গবেষণা</li>
                                                            </ul>
                            <a href="#" class="year-enroll-btn">
                                এখনই ভর্তি হোন 
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="year-stats">
                                                            <div class="stat-card">
                                    <div class="stat-number">৮</div>
                                    <div class="stat-label">মোট মডিউল</div>
                                </div>
                                                            <div class="stat-card">
                                    <div class="stat-number">১২০</div>
                                    <div class="stat-label">মোট ক্লাস</div>
                                </div>
                                                            <div class="stat-card">
                                    <div class="stat-number">৮০+</div>
                                    <div class="stat-label">শিক্ষার্থী</div>
                                </div>
                                                    </div>
                    </div>
                </div>
                            <div class="year-content " id="year-6">
                    <div class="year-content-grid">
                        <div class="year-info">
                            <h3><i class="fas fa-book-open"></i> ষষ্ঠ বছর - গবেষণা ও দক্ষতা</h3>
                            <p>ষষ্ঠ বছরে শিক্ষার্থীরা গবেষণামূলক কাজ এবং ইসলামী জ্ঞানের বিভিন্ন শাখায় দক্ষতা অর্জন করবে।</p>
                            <ul class="year-features">
                                                                    <li><i class="fas fa-check-circle"></i> কুরআন গবেষণা ও বিশেষায়িত তাফসীর</li>
                                                                    <li><i class="fas fa-check-circle"></i> হাদিস গবেষণা ও সমালোচনা</li>
                                                                    <li><i class="fas fa-check-circle"></i> ইসলামী আইন ও ফতোয়া</li>
                                                                    <li><i class="fas fa-check-circle"></i> ইসলামী দর্শন ও চিন্তা</li>
                                                                    <li><i class="fas fa-check-circle"></i> তুলনামূলক ধর্মতত্ত্ব</li>
                                                                    <li><i class="fas fa-check-circle"></i> গবেষণা পদ্ধতি ও লেখালেখি</li>
                                                                    <li><i class="fas fa-check-circle"></i> দাওয়াতি কৌশল ও যোগাযোগ</li>
                                                                    <li><i class="fas fa-check-circle"></i> নেতৃত্ব ও প্রশাসন</li>
                                                            </ul>
                            <a href="#" class="year-enroll-btn">
                                এখনই ভর্তি হোন 
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="year-stats">
                                                            <div class="stat-card">
                                    <div class="stat-number">৮</div>
                                    <div class="stat-label">মোট মডিউল</div>
                                </div>
                                                            <div class="stat-card">
                                    <div class="stat-number">১২৬</div>
                                    <div class="stat-label">মোট ক্লাস</div>
                                </div>
                                                            <div class="stat-card">
                                    <div class="stat-number">৬৫+</div>
                                    <div class="stat-label">শিক্ষার্থী</div>
                                </div>
                                                    </div>
                    </div>
                </div>
                            <div class="year-content " id="year-7">
                    <div class="year-content-grid">
                        <div class="year-info">
                            <h3><i class="fas fa-book-open"></i> সপ্তম বছর - তাকমিল (সমাপনী)</h3>
                            <p>সপ্তম বছরে শিক্ষার্থীরা সর্বোচ্চ জ্ঞান অর্জন করবে এবং ইসলামী জ্ঞানের সব শাখায় দক্ষ হয়ে উঠবে।</p>
                            <ul class="year-features">
                                                                    <li><i class="fas fa-check-circle"></i> পূর্ণাঙ্গ কুরআন তাফসীর সমাপ্তি</li>
                                                                    <li><i class="fas fa-check-circle"></i> ছয়টি প্রধান হাদিস কিতাব সম্পূর্ণ</li>
                                                                    <li><i class="fas fa-check-circle"></i> ইসলামী আইন ও ফতোয়া (উন্নত)</li>
                                                                    <li><i class="fas fa-check-circle"></i> ইসলামী অর্থনীতি ও সমাজ ব্যবস্থা</li>
                                                                    <li><i class="fas fa-check-circle"></i> দাওয়াতি প্রকল্প ও প্র্যাকটিক্যাল</li>
                                                                    <li><i class="fas fa-check-circle"></i> গবেষণা থিসিস/প্রকল্প</li>
                                                                    <li><i class="fas fa-check-circle"></i> নেতৃত্ব ও প্রশাসনিক দক্ষতা</li>
                                                                    <li><i class="fas fa-check-circle"></i> সমাজ সংস্কার ও উন্নয়ন</li>
                                                            </ul>
                            <a href="#" class="year-enroll-btn">
                                এখনই ভর্তি হোন 
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="year-stats">
                                                            <div class="stat-card">
                                    <div class="stat-number">৮</div>
                                    <div class="stat-label">মোট মডিউল</div>
                                </div>
                                                            <div class="stat-card">
                                    <div class="stat-number">১৩২</div>
                                    <div class="stat-label">মোট ক্লাস</div>
                                </div>
                                                            <div class="stat-card">
                                    <div class="stat-number">৫০+</div>
                                    <div class="stat-label">শিক্ষার্থী</div>
                                </div>
                                                    </div>
                    </div>
                </div>
                    </div>
    </div>
</section>

<!-- ===== Section 9 ===== -->
<section class="section-container section-gap">
    <div class="sec-9 animate-on-scroll">
        <div class="sec-9-left">
            <h3>সিলেবাস</h3>
            <div class="sec-9-menu">
                                    <div class="sec-9-menu-item active">
                        <i class="fas fa-user-graduate"></i>
                        <div><h4>ফরজে আইন (৩-৪ মাস)</h4></div>
                    </div>
                                    <div class="sec-9-menu-item ">
                        <i class="fas fa-book-quran"></i>
                        <div><h4>কুরআন তরজমা/মাদানী নেসাব (১ম বছর)</h4></div>
                    </div>
                            </div>
        </div>
        <div class="sec-9-right">
            <h3>মডিউল</h3>
            <div class="module-grid">
                                    <div class="module-card"><i class="fas fa-check-circle"></i> সহজ কুরআন শিক্ষা (তাজবিদসহ)</div>
                                    <div class="module-card"><i class="fas fa-check-circle"></i> পূর্ণ কুরআনের নামেরা শুদ্ধভাবে পড়তে পারা</div>
                                    <div class="module-card"><i class="fas fa-check-circle"></i> এতটা অর্থ বুঝে নামাজ পড়ি</div>
                                    <div class="module-card"><i class="fas fa-check-circle"></i> আমলী সূরা ও মাসনূন দুআ মুখস্থ করণ</div>
                                    <div class="module-card"><i class="fas fa-check-circle"></i> ঈমান ও ইসলামী আকীদা (মুতালায়া)</div>
                                    <div class="module-card"><i class="fas fa-check-circle"></i> সিরাতে রাসূল ও আত-তারিখুল মাখতুম</div>
                                    <div class="module-card"><i class="fas fa-check-circle"></i> তামরীনুল দুগাহ আল আরাবিয়া (প্রাথমিক আরবি ভাষা চর্চা)</div>
                                    <div class="module-card"><i class="fas fa-check-circle"></i> আরবি হাতের লেখার ক্যালিকেশন</div>
                            </div>
        </div>
    </div>
</section>

<!-- ===== Section 10 ===== -->
<section class="section-container section-gap">
    <div class="sec-10 animate-on-scroll">
        <h2>আমাদের <span>সম্পর্কে কিছু কথা</span></h2>
        <p>সময়ের সকল জটিল সমস্যার এক অমলিন মিলনক্ষেত্র আমাদের এই আবাসস্থল।</p>
        <div class="slider-wrapper">
                            <div class="slide-item center animate-on-scroll delay-1"
                     style="background-image:url('../uploads/1788624602_teacher_0_768551048_1381873443366318_5309649793600053212_n.jpg');background-size:cover;background-position:center;"
                     onclick="openVideoModal('1Q0X0X0X0X0')">
                                            <i class="fas fa-play-circle play-icon"></i>
                                        <div class="slide-bottom-text">
                        <h5>ডাঃ শফিকুল ইসলাম </h5>
                        <small>ভাষা ও শাস্ত্রের শিক্ষক</small>
                    </div>
                </div>
                            <div class="slide-item center animate-on-scroll delay-2"
                     style="background-image:url('../uploads/1788624602_teacher_1_768551048_1381873443366318_5309649793600053212_n.jpg');background-size:cover;background-position:center;"
                     onclick="openVideoModal('1Q0X0X0X0X1')">
                                            <i class="fas fa-play-circle play-icon"></i>
                                        <div class="slide-bottom-text">
                        <h5>মুফতি আশরাফুল ইসলাম</h5>
                        <small> হাদিস ও কোরআন শিক্ষা দানকারী</small>
                    </div>
                </div>
                            <div class="slide-item center animate-on-scroll delay-3"
                     style="background-image:url('../uploads/1788624602_teacher_2_768551048_1381873443366318_5309649793600053212_n.jpg');background-size:cover;background-position:center;"
                     onclick="openVideoModal('1Q0X0X0X0X2')">
                                            <i class="fas fa-play-circle play-icon"></i>
                                        <div class="slide-bottom-text">
                        <h5>মাওলানা মাসুম বিল্লাহ</h5>
                        <small>ইসলামি চিন্তাবিদ</small>
                    </div>
                </div>
                    </div>
    </div>
</section>

<!-- ===== Section 11 ===== -->
<section class="section-container section-gap">
    <div class="sec-11 animate-on-scroll">
        <h2>সরকারি নিবন্ধন ও স্বীকৃতি প্রসঙ্গে</h2>
        <p>অত্র দফতরের মহামান্য জজ আদালতের ১৮৬০ সালের এক্ট ২১ অনুযায়ী নিবন্ধিত প্রতিষ্ঠান। আমাদের সিলেবাস ও ফতওয়া সুন্নতের আলোকে প্রমাণিত।</p>
        <div class="certificate-wrap">
                        <img src="../uploads/1790187783_ChatGPT_Image_Sep_24__2026__12_22_15_AM.png" alt="">
        </div>
        <div class="community-boxes">
                            <div class="comm-box animate-on-scroll delay-1">
                    <h4>আল হেরা ইসলামিক সলিউশন (পুরুষ)</h4>
                    <p>ভাইদের জন্য ইসলামি শিক্ষা, কর্মজীবন ও দাওয়াতি কর্মকাণ্ড</p>
                    <a href="#" class="btn-comm">
                        <i class="fas fa-phone"></i> 
                        যোগাযোগ করুন                    </a>
                                    </div>
                            <div class="comm-box animate-on-scroll delay-2">
                    <h4>আল হেরা ইসলামিক সলিউশন (নারী)</h4>
                    <p>বোনদের জন্য ইসলামি শিক্ষা, কর্মজীবন ও দাওয়াতি কর্মকাণ্ড</p>
                    <a href="#" class="btn-comm">
                        <i class="fas fa-phone"></i> 
                        যোগাযোগ করুন                    </a>
                                    </div>
                    </div>
    </div>
</section>

<!-- ===== Section 12 ===== -->
<section class="section-container section-gap">
    <div class="sec-12 animate-on-scroll">
        <div class="sec-12-content">
            <h2>জ্ঞান অর্জনে আমাদের কিতাবসমূহ</h2>
            <p>জ্ঞান অর্জন ও আমলে সহায়ক, কুরআন-সুন্নাহভিত্তিক আমাদের প্রকাশিত কিতাবসমূহ এখানে পড়তে পারবেন।</p>
            <a href="#" class="btn-outline">
                ওয়েবসাইট ভিজিট করুন 
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="sec-12-img">
                        <img src="../uploads/1787377910_ChatGPT Image Aug 21, 2026, 10_36_34 PM.png" alt="">
        </div>
    </div>
</section>

<!-- Floating Call Button (DB) -->
<a href="tel:+8801700000000" class="floating-btn">
    <i class="fas fa-phone-alt"></i> 
    কল করুন</a>

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
<!-- GLOBAL VIDEO MODAL -->
<div id="globalVideoModal" class="gvm-overlay" onclick="if(event.target===this)closeVideoModal()">
    <div class="gvm-inner">
        <button class="gvm-close" onclick="closeVideoModal()"><i class="fas fa-times"></i></button>
        <div class="gvm-video-wrap">
            <iframe id="gvmIframe" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

<script>
window.getYouTubeId = function(url) {
    if (!url) return '';
    if (/^[a-zA-Z0-9_-]{11}$/.test(url)) return url;
    var patterns = [/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/|youtube\.com\/v\/|youtube\.com\/shorts\/)([a-zA-Z0-9_-]{11})/, /[?&]v=([a-zA-Z0-9_-]{11})/];
    for (var i = 0; i < patterns.length; i++) { var m = url.match(patterns[i]); if (m) return m[1]; }
    return '';
};
window.openVideoModal = function(videoIdOrUrl) {
    var videoId = window.getYouTubeId(videoIdOrUrl);
    if (!videoId) return;
    var modal = document.getElementById('globalVideoModal');
    var iframe = document.getElementById('gvmIframe');
    if (!modal || !iframe) return;
    iframe.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0&modestbranding=1';
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
};
window.closeVideoModal = function() {
    var modal = document.getElementById('globalVideoModal');
    var iframe = document.getElementById('gvmIframe');
    if (!modal || !iframe) return;
    modal.classList.remove('active');
    setTimeout(function() { iframe.src = ''; document.body.style.overflow = ''; }, 350);
};
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { var m = document.getElementById('globalVideoModal'); if (m && m.classList.contains('active')) window.closeVideoModal(); }
});

// Slider
let currentSlide = 0;
const sliderSlides = document.querySelectorAll('.slide-item-banner');
const totalSlides = sliderSlides.length;
const sliderTrack = document.getElementById('sliderTrack');
const dots = document.querySelectorAll('#sliderDots span');
function updateSlider() {
    if (totalSlides === 0 || !sliderTrack) return;
    sliderTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
    dots.forEach((dot, i) => dot.classList.toggle('active', i === currentSlide));
}
function nextSlide() { if (totalSlides === 0) return; currentSlide = (currentSlide + 1) % totalSlides; updateSlider(); }
function prevSlide() { if (totalSlides === 0) return; currentSlide = (currentSlide - 1 + totalSlides) % totalSlides; updateSlider(); }
function goToSlide(i) { if (totalSlides === 0) return; currentSlide = i; updateSlider(); }
let autoPlay = setInterval(nextSlide, 5000);
const sec6 = document.querySelector('.sec-6');
if (sec6) {
    sec6.addEventListener('mouseenter', () => clearInterval(autoPlay));
    sec6.addEventListener('mouseleave', () => { autoPlay = setInterval(nextSlide, 5000); });
}

// Year Tabs
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.year-tab');
    const contents = document.querySelectorAll('.year-content');
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            tabs.forEach(t => t.classList.remove('active'));
            contents.forEach(c => c.classList.remove('active'));
            this.classList.add('active');
            const y = this.getAttribute('data-year');
            const target = document.getElementById('year-' + y);
            if (target) target.classList.add('active');
        });
    });
});

// Scroll Animation
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.animate-on-scroll');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                const counter = entry.target.querySelector('.counter');
                if (counter && !counter.dataset.animated) {
                    counter.dataset.animated = '1';
                    const target = parseInt(counter.dataset.target);
                    if (!isNaN(target) && target > 0) animateCounter(counter, target);
                }
            }
        });
    }, { threshold: 0.15 });
    elements.forEach(el => observer.observe(el));
});
function animateCounter(element, target) {
    let current = 0;
    const increment = Math.ceil(target / 60);
    const interval = setInterval(() => {
        current += increment;
        if (current >= target) { current = target; clearInterval(interval); }
        element.textContent = current + (element.textContent.includes('+') ? '+' : '') + (element.textContent.includes('%') ? '%' : '');
    }, 30);
}
</script>

</body>
</html>