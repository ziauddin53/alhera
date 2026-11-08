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
<title>ব্লগ - আল হেরা অনলাইন মাদ্রাসা</title>
<link rel="stylesheet" href="/assets/vendor/fontawesome-6.5.0/css/all.min.css">
<link rel="stylesheet" href="/assets/css/fonts-hind-siliguri.css"><link rel="stylesheet" href="/assets/css/fonts-noto-nastaliq-urdu.css">
<style>
:root {
    --gold: #d4a017;
    --gold-bright: #f5c842;
    --gold-dark: #a67c00;
    --gold-muted: rgba(212,160,23,0.12);
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
    --shadow-sm: 0 1px 3px rgba(0,0,0,0.04), 0 1px 2px rgba(0,0,0,0.03);
    --shadow-md: 0 4px 16px rgba(0,0,0,0.06), 0 2px 6px rgba(0,0,0,0.04);
    --shadow-lg: 0 12px 40px rgba(0,0,0,0.08), 0 4px 12px rgba(0,0,0,0.04);
    --shadow-xl: 0 24px 60px rgba(0,0,0,0.1), 0 8px 20px rgba(0,0,0,0.06);
    --shadow-gold: 0 8px 30px rgba(212,160,23,0.2);
    --radius-sm: 8px;
    --radius-md: 14px;
    --radius-lg: 20px;
    --transition: 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    --transition-fast: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

* { margin: 0; padding: 0; box-sizing: border-box; }
html { scroll-behavior: smooth; }
body {
    font-family: 'Hind Siliguri', sans-serif;
    background: #f8f9fa;
    color: #0a191f;
    padding-top: 80px;
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
}
a { text-decoration: none; color: inherit; }
img { display: block; max-width: 100%; }
button { font-family: inherit; }
.container { max-width: 1320px; margin: 0 auto; padding: 0 24px; }

.scroll-progress {
    position: fixed; top: 0; left: 0; height: 3px;
    background: linear-gradient(90deg,
        #d4a017,
        #10a37f,
        #f5c842);
    width: 0%; z-index: 10000;
    transition: width 0.1s linear;
}

.back-to-top {
    position: fixed; bottom: 32px; right: 32px;
    width: 48px; height: 48px;
    background: linear-gradient(135deg,
        #d4a017,
        #a67c00);
    color: #050d0f;
    border: none; border-radius: 50%;
    font-size: 17px; cursor: pointer; z-index: 9999;
    opacity: 0; transform: translateY(20px) scale(0.8);
    transition: var(--transition); box-shadow: var(--shadow-gold);
    display: flex; align-items: center; justify-content: center;
}
.back-to-top.visible { opacity: 1; transform: translateY(0) scale(1); }
.back-to-top:hover { transform: translateY(-4px) scale(1.05); box-shadow: 0 12px 40px rgba(212,160,23,0.35); }

.reveal { opacity: 0; transform: translateY(40px); transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1); }
.reveal.visible { opacity: 1; transform: translateY(0); }
.reveal-right { opacity: 0; transform: translateX(50px); transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1); }
.reveal-right.visible { opacity: 1; transform: translateX(0); }
.stagger-1 { transition-delay: 0.05s; }
.stagger-2 { transition-delay: 0.10s; }
.stagger-3 { transition-delay: 0.15s; }
.stagger-4 { transition-delay: 0.20s; }
.stagger-5 { transition-delay: 0.25s; }
.stagger-6 { transition-delay: 0.30s; }

/* ============================================================
   হিরো
   ============================================================ */
.blog-hero {
    position: relative;
    background: #050d0f;
    padding: 70px 0 60px;
    overflow: hidden;
}
.blog-hero::before {
    content: ''; position: absolute; inset: 0;
    background:
        radial-gradient(ellipse 600px 400px at 20% 50%, rgba(212,160,23,0.07), transparent),
        radial-gradient(ellipse 500px 500px at 80% 30%, rgba(13,124,95,0.06), transparent);
    z-index: 1;
}
.hero-pattern {
    position: absolute; inset: 0; z-index: 1; opacity: 0.04;
    background-image: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23d4a017' stroke-width='0.5'%3E%3Cpath d='M40 0L80 40L40 80L0 40Z'/%3E%3Cpath d='M40 10L70 40L40 70L10 40Z'/%3E%3C/g%3E%3C/svg%3E");
    background-size: 80px 80px;
}
.hero-orb { position: absolute; border-radius: 50%; filter: blur(80px); z-index: 1; animation: orbFloat 12s ease-in-out infinite; }
.hero-orb-1 { width: 280px; height: 280px; background: rgba(212,160,23,0.08); top: -80px; right: 10%; }
.hero-orb-2 { width: 180px; height: 180px; background: rgba(13,124,95,0.06); bottom: -50px; left: 15%; animation-delay: -4s; }
@keyframes orbFloat { 0%,100%{transform:translate(0,0) scale(1);} 33%{transform:translate(25px,-15px) scale(1.05);} 66%{transform:translate(-15px,10px) scale(0.95);} }
.hero-lines { position: absolute; inset: 0; z-index: 1; overflow: hidden; }
.hero-lines span { position: absolute; background: linear-gradient(180deg, transparent, rgba(212,160,23,0.06), transparent); width: 1px; height: 100%; animation: lineShimmer 8s ease-in-out infinite; }
.hero-lines span:nth-child(1) { left: 20%; }
.hero-lines span:nth-child(2) { left: 40%; animation-delay: -2s; }
.hero-lines span:nth-child(3) { left: 60%; animation-delay: -4s; }
.hero-lines span:nth-child(4) { left: 80%; animation-delay: -6s; }
@keyframes lineShimmer { 0%,100%{opacity:0;} 50%{opacity:1;} }

.hero-content { position: relative; z-index: 2; text-align: center; }
.hero-badge {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(212,160,23,0.08);
    border: 1px solid rgba(212,160,23,0.15);
    color: #f5c842;
    padding: 5px 18px; border-radius: 50px;
    font-size: 0.8rem; font-weight: 600; margin-bottom: 16px;
    backdrop-filter: blur(10px);
}
.hero-badge i { font-size: 0.72rem; animation: badgePulse 2s ease-in-out infinite; }
@keyframes badgePulse { 0%,100%{opacity:1;} 50%{opacity:0.5;} }
.hero-title {
    font-size: 3.2rem; font-weight: 800; line-height: 1.15;
    margin-bottom: 12px; color: #ffffff;
}
.hero-title .highlight {
    background: linear-gradient(135deg,
        #f5c842,
        #d4a017,
        #a67c00);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
}
.hero-title .arabic-deco {
    font-family: 'Noto Nastaliq Urdu', serif; font-size: 1.6rem; font-weight: 400;
    display: block; color: #d4a017; opacity: 0.5; margin-top: 4px;
    -webkit-text-fill-color: #d4a017;
}
.hero-subtitle {
    font-size: 1.05rem; color: #8896a6; max-width: 550px;
    margin: 0 auto 24px; line-height: 1.7;
}
.hero-stats { display: flex; justify-content: center; gap: 44px; margin-top: 28px; }
.hero-stat { text-align: center; }
.hero-stat .num { font-size: 1.7rem; font-weight: 800; color: #f5c842; line-height: 1; display: block; }
.hero-stat .label { font-size: 0.78rem; color: #8896a6; margin-top: 3px; display: block; font-weight: 500; }
.hero-stat + .hero-stat { position: relative; }
.hero-stat + .hero-stat::before {
    content: ''; position: absolute; left: -22px; top: 50%; transform: translateY(-50%);
    width: 1px; height: 32px;
    background: linear-gradient(180deg, transparent, rgba(212,160,23,0.2), transparent);
}
.hero-bottom-border { position: absolute; bottom: 0; left: 0; right: 0; height: 1px; background: linear-gradient(90deg, transparent, rgba(212,160,23,0.3), transparent); z-index: 3; }
.hero-bottom-curve { position: absolute; bottom: -1px; left: 0; right: 0; height: 36px; background: #f8f9fa; border-radius: 36px 36px 0 0; z-index: 2; }

/* ============================================================
   ফিল্টার বার
   ============================================================ */
.filter-bar {
    padding: 24px 0 6px; position: sticky; top: 80px; z-index: 100;
    background: rgba(248,249,250,0.88);
    backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px);
    border-bottom: 1px solid rgba(0,0,0,0.04);
    transition: var(--transition);
}
.filter-bar.scrolled { box-shadow: 0 4px 20px rgba(0,0,0,0.04); }
.filter-inner { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
.filter-label { font-size: 0.82rem; font-weight: 600; color: #4a5568; white-space: nowrap; }
.filter-label i { color: var(--gold); margin-right: 5px; }
.filter-pill {
    display: inline-flex; align-items: center; gap: 5px;
    padding: 6px 16px; border-radius: 50px; font-size: 0.82rem; font-weight: 500;
    border: 1px solid #dde1e6;
    background: #ffffff;
    color: #4a5568;
    cursor: pointer; transition: var(--transition-fast); white-space: nowrap;
}
.filter-pill:hover {
    border-color: #d4a017;
    color: #a67c00;
    background: rgba(212,160,23,0.12);
}
.filter-pill.active {
    background: linear-gradient(135deg,
        #d4a017,
        #a67c00);
    color: #050d0f;
    border-color: transparent; font-weight: 600;
    box-shadow: 0 2px 12px rgba(212,160,23,0.2);
}
.filter-pill .pill-count {
    background: rgba(0,0,0,0.08);
    color: #4a5568;
    padding: 1px 8px; border-radius: 20px; font-size: 0.72rem; font-weight: 700;
}
.filter-pill.active .pill-count {
    background: rgba(0,0,0,0.15);
    color: #050d0f;
}
.active-filters { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; padding: 10px 0 0; }
.active-filter-tag {
    display: inline-flex; align-items: center; gap: 6px;
    padding: 4px 12px;
    background: rgba(212,160,23,0.12);
    border: 1px solid rgba(212,160,23,0.2);
    border-radius: 20px; font-size: 0.76rem; font-weight: 600;
    color: #a67c00;
}
.active-filter-tag a { color: #a67c00; opacity: 0.6; transition: var(--transition-fast); }
.active-filter-tag a:hover { opacity: 1; }

/* ============================================================
   ব্লগ লেআউট
   ============================================================ */
.blog-section { padding: 36px 0 80px; }
.blog-layout { display: grid; grid-template-columns: 1fr 360px; gap: 36px; align-items: start; }

.posts-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 22px; }

.post-card {
    background: #ffffff;
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    border: 1px solid rgba(0,0,0,0.04);
    transition: var(--transition);
    position: relative;
}
.post-card::after {
    content: ''; position: absolute; inset: 0;
    border-radius: var(--radius-lg); opacity: 0; transition: var(--transition);
    box-shadow: 0 16px 48px rgba(212,160,23,0.1), 0 6px 20px rgba(0,0,0,0.06);
    pointer-events: none;
}
.post-card:hover { transform: translateY(-5px); border-color: rgba(212,160,23,0.15); }
.post-card:hover::after { opacity: 1; }

.post-card .thumb-wrap { position: relative; height: 190px; overflow: hidden; }
.post-card .thumb-wrap img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1); }
.post-card:hover .thumb-wrap img { transform: scale(1.06); }
.post-card .thumb-overlay { position: absolute; inset: 0; background: linear-gradient(180deg, transparent 40%, rgba(5,13,15,0.5)); z-index: 1; }
.post-card .cat-badge {
    position: absolute; bottom: 10px; left: 10px; z-index: 2;
    display: inline-flex; align-items: center; gap: 4px;
    padding: 3px 11px;
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(8px); border-radius: 50px;
    font-size: 0.7rem; font-weight: 700;
    color: #0a191f;
}
.post-card .cat-badge i { color: #d4a017; font-size: 0.65rem; }
.post-card .views-badge {
    position: absolute; top: 10px; right: 10px; z-index: 2;
    display: inline-flex; align-items: center; gap: 4px;
    padding: 3px 10px;
    background: rgba(5,13,15,0.6);
    backdrop-filter: blur(8px); border-radius: 50px;
    font-size: 0.68rem; font-weight: 600;
    color: rgba(255,255,255,0.9);
}
.post-card .bookmark-btn {
    position: absolute; top: 10px; left: 10px; z-index: 2;
    width: 32px; height: 32px;
    background: rgba(255,255,255,0.9);
    backdrop-filter: blur(8px); border: none; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer; transition: var(--transition-fast);
    color: #8896a6; font-size: 0.78rem;
    opacity: 0; transform: scale(0.8);
}
.post-card:hover .bookmark-btn { opacity: 1; transform: scale(1); }
.post-card .bookmark-btn:hover {
    background: #d4a017;
    color: #050d0f;
}
.post-card .bookmark-btn.saved {
    background: #d4a017;
    color: #050d0f;
    opacity: 1; transform: scale(1);
}

.post-card .card-body { padding: 16px 18px 18px; position: relative; z-index: 1; }
.post-card .card-meta {
    display: flex; align-items: center; gap: 12px;
    margin-bottom: 6px; font-size: 0.75rem;
    color: #8896a6; font-weight: 500;
}
.post-card .card-meta i { color: #d4a017; margin-right: 3px; font-size: 0.68rem; }
.post-card .card-meta .meta-dot { width: 3px; height: 3px; border-radius: 50%; background: var(--light-3); }

.post-card .card-title {
    font-size: 1.05rem; font-weight: 700;
    color: #0a191f;
    line-height: 1.4; margin-bottom: 6px; transition: var(--transition-fast);
    display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
}
.post-card:hover .card-title { color: #a67c00; }

.post-card .card-excerpt {
    font-size: 0.84rem; color: #4a5568;
    line-height: 1.65; margin-bottom: 14px;
    display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
}

.post-card .card-footer { display: flex; align-items: center; justify-content: space-between; }
.btn-read-more {
    display: inline-flex; align-items: center; gap: 7px;
    padding: 7px 18px;
    background: linear-gradient(135deg,
        #d4a017,
        #a67c00);
    color: #050d0f;
    font-weight: 700; border-radius: 50px;
    font-size: 0.8rem; transition: var(--transition);
    border: none; cursor: pointer; position: relative; overflow: hidden;
}
.btn-read-more::before {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(135deg,
        #f5c842,
        #d4a017);
    opacity: 0; transition: var(--transition);
}
.btn-read-more span, .btn-read-more i { position: relative; z-index: 1; }
.btn-read-more:hover::before { opacity: 1; }
.btn-read-more:hover { color: #050d0f; transform: translateY(-2px); box-shadow: 0 5px 20px rgba(212,160,23,0.3); }
.btn-read-more i { transition: transform 0.3s ease; font-size: 0.7rem; }
.btn-read-more:hover i { transform: translateX(3px); }

.card-share { display: flex; gap: 5px; }
.card-share button {
    width: 30px; height: 30px; border-radius: 50%;
    border: 1px solid #dde1e6;
    background: var(--white); color: #8896a6;
    font-size: 0.72rem; cursor: pointer;
    transition: var(--transition-fast); display: flex; align-items: center; justify-content: center;
}
.card-share button:hover {
    border-color: #d4a017;
    color: #a67c00;
    background: rgba(212,160,23,0.12);
}

/* ============================================================
   সাইডবার
   ============================================================ */
.sidebar { position: sticky; top: 140px; }
.widget {
    background: #ffffff;
    border-radius: var(--radius-lg);
    padding: 22px; box-shadow: var(--shadow-sm);
    border: 1px solid rgba(0,0,0,0.04);
    margin-bottom: 20px; transition: var(--transition);
}
.widget:hover { box-shadow: var(--shadow-md); }
.widget-header {
    display: flex; align-items: center; gap: 10px;
    margin-bottom: 16px; padding-bottom: 12px;
    border-bottom: 1px solid #eef0f2;
}
.widget-icon {
    width: 34px; height: 34px; border-radius: var(--radius-sm);
    background: linear-gradient(135deg,
        rgba(212,160,23,0.12),
        rgba(13,124,95,0.08));
    display: flex; align-items: center; justify-content: center;
    font-size: 0.82rem; color: #d4a017; flex-shrink: 0;
}
.widget-title { font-size: 0.95rem; font-weight: 700; color: #0a191f; line-height: 1.2; }
.widget-title small { display: block; font-size: 0.72rem; font-weight: 500; color: #8896a6; margin-top: 1px; }

.search-widget .search-input-wrap { position: relative; }
.search-widget .search-input-wrap i {
    position: absolute; left: 13px; top: 50%; transform: translateY(-50%);
    color: #8896a6; font-size: 0.82rem; transition: var(--transition-fast); pointer-events: none;
}
.search-widget input {
    width: 100%; padding: 10px 13px 10px 38px;
    border: 1.5px solid #dde1e6;
    border-radius: var(--radius-sm);
    font-size: 0.88rem; font-family: inherit;
    background: #f8f9fa;
    transition: var(--transition); color: #0a191f;
}
.search-widget input::placeholder { color: #8896a6; }
.search-widget input:focus {
    outline: none;
    border-color: #d4a017;
    background: var(--white); box-shadow: 0 0 0 3px rgba(212,160,23,0.1);
}
.search-widget input:focus ~ i { color: #d4a017; }
.search-widget .search-btn {
    width: 100%; padding: 10px;
    background: linear-gradient(135deg,
        #d4a017,
        #a67c00);
    border: none; border-radius: var(--radius-sm);
    color: #050d0f;
    font-weight: 700; font-size: 0.85rem; cursor: pointer;
    transition: var(--transition); margin-top: 7px;
}
.search-widget .search-btn:hover { box-shadow: var(--shadow-gold); transform: translateY(-1px); }

.category-list { list-style: none; }
.category-list li {
    display: flex; align-items: center; justify-content: space-between;
    padding: 8px 10px; border-radius: var(--radius-sm);
    transition: var(--transition-fast); margin-bottom: 2px;
}
.category-list li:hover { background: rgba(212,160,23,0.12); }
.category-list li a {
    display: flex; align-items: center; gap: 8px;
    font-size: 0.86rem; font-weight: 500;
    color: #0a191f; flex: 1;
}
.category-list li a i { color: #d4a017; font-size: 0.74rem; width: 18px; text-align: center; }
.category-list li .cat-count {
    background: #eef0f2;
    color: #4a5568;
    padding: 2px 9px; border-radius: 20px;
    font-size: 0.72rem; font-weight: 700;
    min-width: 28px; text-align: center; transition: var(--transition-fast);
}
.category-list li:hover .cat-count {
    background: #d4a017;
    color: #050d0f;
}

.recent-list { list-style: none; }
.recent-list li { display: flex; gap: 12px; padding: 10px 0; border-bottom: 1px solid #eef0f2; transition: var(--transition-fast); }
.recent-list li:last-child { border-bottom: none; }
.recent-list li:hover { padding-left: 5px; }
.recent-list .recent-num {
    width: 28px; height: 28px; border-radius: 7px;
    background: linear-gradient(135deg,
        rgba(212,160,23,0.12),
        rgba(13,124,95,0.06));
    display: flex; align-items: center; justify-content: center;
    font-size: 0.74rem; font-weight: 800;
    color: #d4a017;
    flex-shrink: 0; margin-top: 2px;
}
.recent-list li:first-child .recent-num {
    background: linear-gradient(135deg,
        #d4a017,
        #a67c00);
    color: #050d0f;
}
.recent-list .recent-info { flex: 1; min-width: 0; }
.recent-list .recent-info a {
    font-size: 0.84rem; font-weight: 600;
    color: #0a191f; line-height: 1.35;
    display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
    transition: var(--transition-fast);
}
.recent-list .recent-info a:hover { color: #a67c00; }
.recent-list .recent-date { font-size: 0.72rem; color: #8896a6; margin-top: 2px; display: flex; align-items: center; gap: 4px; }
.recent-list .recent-date i { font-size: 0.62rem; color: #d4a017; }

.popular-list { list-style: none; }
.popular-list li { display: flex; gap: 12px; padding: 10px 0; border-bottom: 1px solid #eef0f2; align-items: flex-start; transition: var(--transition-fast); }
.popular-list li:last-child { border-bottom: none; }
.popular-list li:hover { padding-left: 5px; }
.popular-list .pop-rank {
    width: 26px; height: 26px; border-radius: 6px;
    display: flex; align-items: center; justify-content: center;
    font-size: 0.68rem; font-weight: 800; flex-shrink: 0; margin-top: 2px;
    background: var(--light-2); color: var(--text-muted);
}
.popular-list li:nth-child(1) .pop-rank { background: linear-gradient(135deg, #f5c842, #d4a017); color: #050d0f; }
.popular-list li:nth-child(2) .pop-rank { background: linear-gradient(135deg, #a8b5c0, #7a8a96); color: var(--white); }
.popular-list li:nth-child(3) .pop-rank { background: linear-gradient(135deg, #cd7f32, #a66322); color: var(--white); }
.popular-list .pop-info { flex: 1; min-width: 0; }
.popular-list .pop-info a {
    font-size: 0.84rem; font-weight: 600;
    color: #0a191f; line-height: 1.35;
    display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
    transition: var(--transition-fast);
}
.popular-list .pop-info a:hover { color: #a67c00; }
.popular-list .pop-views { font-size: 0.7rem; color: #8896a6; margin-top: 2px; display: flex; align-items: center; gap: 4px; }
.popular-list .pop-views i { color: #d4a017; font-size: 0.62rem; }

.tag-cloud { display: flex; flex-wrap: wrap; gap: 7px; }
.tag-cloud a {
    padding: 4px 12px;
    border: 1px solid #dde1e6;
    border-radius: 50px; font-size: 0.78rem; font-weight: 500;
    color: #4a5568;
    transition: var(--transition-fast);
}
.tag-cloud a:hover {
    border-color: #d4a017;
    background: rgba(212,160,23,0.12);
    color: #a67c00;
}

.newsletter-widget {
    background: linear-gradient(145deg,
        #0a191f,
        #0f2429,
        #152f35);
    border: 1px solid rgba(212,160,23,0.1);
    position: relative; overflow: hidden;
}
.newsletter-widget::before { content: ''; position: absolute; top: -40%; right: -30%; width: 180px; height: 180px; background: radial-gradient(circle, rgba(212,160,23,0.1), transparent 70%); border-radius: 50%; }
.newsletter-widget::after { content: ''; position: absolute; bottom: -30%; left: -20%; width: 140px; height: 140px; background: radial-gradient(circle, rgba(212,160,23,0.1), transparent 70%); border-radius: 50%; }
.newsletter-widget .widget-header { border-bottom-color: rgba(255,255,255,0.08); position: relative; z-index: 1; }
.newsletter-widget .widget-icon { background: rgba(212,160,23,0.1); color: #d4a017; }
.newsletter-widget .widget-title { color: var(--white); }
.newsletter-widget .widget-title small { color: rgba(255,255,255,0.45); }
.newsletter-widget .nl-text { color: rgba(255,255,255,0.55); font-size: 0.85rem; line-height: 1.65; margin-bottom: 14px; position: relative; z-index: 1; }
.newsletter-widget .nl-form { position: relative; z-index: 1; display: flex; flex-direction: column; gap: 7px; }
.newsletter-widget .nl-form input {
    padding: 10px 14px;
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: var(--radius-sm);
    background: rgba(255,255,255,0.05);
    color: #ffffff;
    font-size: 0.88rem; font-family: inherit; transition: var(--transition);
}
.newsletter-widget .nl-form input::placeholder { color: rgba(255,255,255,0.3); }
.newsletter-widget .nl-form input:focus {
    outline: none;
    border-color: #d4a017;
    background: rgba(255,255,255,0.08); box-shadow: 0 0 0 3px rgba(212,160,23,0.1);
}
.newsletter-widget .nl-form button {
    padding: 10px;
    background: linear-gradient(135deg,
        #d4a017,
        #a67c00);
    border: none; border-radius: var(--radius-sm);
    color: #050d0f;
    font-weight: 700; font-size: 0.88rem; cursor: pointer; transition: var(--transition);
}
.newsletter-widget .nl-form button:hover { box-shadow: 0 6px 24px rgba(212,160,23,0.3); transform: translateY(-1px); }
.newsletter-widget .nl-note { font-size: 0.7rem; color: rgba(255,255,255,0.3); margin-top: 8px; position: relative; z-index: 1; display: flex; align-items: center; gap: 5px; }
.newsletter-widget .nl-note i { color: var(--emerald-light); font-size: 0.65rem; }

/* ============================================================
   সিঙ্গেল পোস্ট
   ============================================================ */
.single-post-card {
    background: #ffffff;
    border-radius: var(--radius-lg);
    overflow: hidden; box-shadow: var(--shadow-md);
    border: 1px solid rgba(0,0,0,0.04);
}
.single-post-card .single-featured { width: 100%; height: 400px; object-fit: cover; }
.single-post-card .single-body { padding: 32px 36px 36px; }
.single-post-card .single-meta { display: flex; align-items: center; gap: 18px; flex-wrap: wrap; margin-bottom: 12px; font-size: 0.84rem; color: #8896a6; font-weight: 500; }
.single-post-card .single-meta i { color: #d4a017; margin-right: 4px; font-size: 0.76rem; }
.single-post-card .single-meta .meta-sep { width: 4px; height: 4px; border-radius: 50%; background: var(--light-3); }
.single-post-card .single-title { font-size: 2rem; font-weight: 800; color: #050d0f; line-height: 1.3; margin-bottom: 8px; }
.single-post-card .single-category-tag {
    display: inline-flex; align-items: center; gap: 5px;
    padding: 4px 13px;
    background: rgba(212,160,23,0.12);
    border-radius: 50px; font-size: 0.76rem; font-weight: 700;
    color: #a67c00; margin-bottom: 22px;
}
.single-post-card .single-category-tag i { font-size: 0.68rem; }
.single-post-card .single-content { font-size: 1.02rem; line-height: 1.9; color: #0a191f; }
.single-post-card .single-content p { margin-bottom: 14px; }
.single-post-card .single-back {
    display: inline-flex; align-items: center; gap: 7px; margin-top: 24px;
    padding: 9px 22px;
    border: 1.5px solid #dde1e6;
    border-radius: 50px; font-weight: 600; font-size: 0.86rem;
    color: #4a5568; transition: var(--transition);
}
.single-post-card .single-back:hover {
    border-color: #d4a017;
    color: #a67c00;
    background: rgba(212,160,23,0.12);
}
.single-post-card .single-back i { transition: transform 0.3s ease; }
.single-post-card .single-back:hover i { transform: translateX(-3px); }

/* ============================================================
   প্যাজিনেশন
   ============================================================ */
.pagination-wrap { display: flex; justify-content: center; align-items: center; gap: 5px; margin-top: 30px; }
.page-btn {
    display: inline-flex; align-items: center; gap: 5px;
    padding: 8px 16px;
    border: 1.5px solid #dde1e6;
    border-radius: var(--radius-sm);
    background: #ffffff;
    color: #4a5568;
    font-weight: 600; font-size: 0.84rem; cursor: pointer;
    transition: var(--transition-fast); font-family: inherit;
}
.page-btn:hover {
    border-color: #d4a017;
    color: #a67c00;
    background: rgba(212,160,23,0.12);
}
.page-btn.active {
    background: linear-gradient(135deg,
        #d4a017,
        #a67c00);
    color: #050d0f;
    border-color: transparent; box-shadow: 0 3px 12px rgba(212,160,23,0.2);
}
.page-btn.disabled { opacity: 0.35; pointer-events: none; }
.page-dots { padding: 8px 5px; color: #8896a6; font-weight: 700; letter-spacing: 2px; }

.empty-state { text-align: center; padding: 70px 20px; grid-column: 1 / -1; }
.empty-state .empty-icon {
    width: 72px; height: 72px; border-radius: 50%;
    background: rgba(212,160,23,0.12);
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 18px; font-size: 1.8rem;
    color: #d4a017;
}
.empty-state h3 { font-size: 1.2rem; font-weight: 700; color: #0a191f; margin-bottom: 6px; }
.empty-state p { color: #8896a6; font-size: 0.92rem; }

.toast-container { position: fixed; bottom: 32px; left: 50%; transform: translateX(-50%); z-index: 99999; display: flex; flex-direction: column; gap: 8px; align-items: center; }
.toast {
    padding: 11px 22px;
    background: #0a191f;
    color: #ffffff;
    border-radius: var(--radius-sm); font-size: 0.88rem; font-weight: 600;
    box-shadow: var(--shadow-xl); display: flex; align-items: center; gap: 9px;
    animation: toastIn 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    border-left: 3px solid #d4a017;
}
.toast.toast-out { animation: toastOut 0.3s ease forwards; }
.toast i { color: #d4a017; }
@keyframes toastIn { from { opacity: 0; transform: translateY(20px) scale(0.9); } to { opacity: 1; transform: translateY(0) scale(1); } }
@keyframes toastOut { from { opacity: 1; transform: translateY(0) scale(1); } to { opacity: 0; transform: translateY(20px) scale(0.9); } }

@media (max-width: 1100px) { .blog-layout { grid-template-columns: 1fr 320px; gap: 28px; } }
@media (max-width: 992px) { .blog-layout { grid-template-columns: 1fr; } .sidebar { position: static; } .posts-grid { grid-template-columns: repeat(2, 1fr); } .hero-title { font-size: 2.6rem; } }
@media (max-width: 768px) {
    body { padding-top: 70px; }
    .filter-bar { top: 70px; }
    .hero-title { font-size: 2rem; }
    .hero-title .arabic-deco { font-size: 1.2rem; }
    .hero-subtitle { font-size: 0.92rem; }
    .hero-stats { gap: 24px; }
    .hero-stat .num { font-size: 1.3rem; }
    .blog-hero { padding: 45px 0 40px; }
    .post-card .thumb-wrap { height: 160px; }
    .post-card .card-body { padding: 14px 15px 16px; }
    .post-card .card-title { font-size: 0.95rem; }
    .post-card .card-excerpt { font-size: 0.8rem; -webkit-line-clamp: 2; }
    .card-share { display: none; }
    .single-post-card .single-body { padding: 22px 18px 26px; }
    .single-post-card .single-title { font-size: 1.4rem; }
    .single-post-card .single-featured { height: 240px; }
    .container { padding: 0 16px; }
}
@media (max-width: 580px) {
    .posts-grid { grid-template-columns: 1fr; }
    .hero-title { font-size: 1.6rem; }
    .hero-stats { flex-direction: column; gap: 14px; }
    .hero-stat + .hero-stat::before { display: none; }
    .filter-inner { gap: 7px; }
    .filter-pill { padding: 5px 12px; font-size: 0.78rem; }
    .post-card .thumb-wrap { height: 200px; }
    .pagination-wrap { gap: 4px; }
    .page-btn { padding: 7px 11px; font-size: 0.8rem; }
}
</style>
</head>
<body>

<div class="scroll-progress" id="scrollProgress"></div>
<button class="back-to-top" id="backToTop" aria-label="Back to top"><i class="fas fa-arrow-up"></i></button>
<div class="toast-container" id="toastContainer"></div>

<!-- Hero -->
<section class="blog-hero">
    <div class="hero-pattern"></div>
    <div class="hero-orb hero-orb-1"></div>
    <div class="hero-orb hero-orb-2"></div>
    <div class="hero-lines"><span></span><span></span><span></span><span></span></div>
    <div class="container">
        <div class="hero-content reveal">
            <div class="hero-badge">
                <i class="fas fa-sun"></i>
                আমাদের ব্লগ            </div>
            <h1 class="hero-title">
                জ্ঞানের <span class="highlight">আলো</span> ছড়িয়ে                <span class="arabic-deco">بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</span>
            </h1>
            <p class="hero-subtitle"></p>
            <div class="hero-stats">
                <div class="hero-stat">
                    <span class="num" data-count="3">0</span>
                    <span class="label">মোট পোস্ট</span>
                </div>
                <div class="hero-stat">
                    <span class="num" data-count="3">0</span>
                    <span class="label">ক্যাটাগরি</span>
                </div>
                <div class="hero-stat">
                    <span class="num" data-count="1200">0</span>
                    <span class="label">মোট পাঠক</span>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-bottom-border"></div>
    <div class="hero-bottom-curve"></div>
</section>

<!-- Filter bar -->
<div class="filter-bar" id="filterBar">
    <div class="container">
        <div class="filter-inner">
            <span class="filter-label"><i class="fas fa-filter"></i> ফিল্টার:</span>
            <a href="blog.php" class="filter-pill active">
                <i class="fas fa-border-all"></i> সব পোস্ট            </a>
                                                <a href="?category=%E0%A6%85%E0%A6%A8%E0%A6%B2%E0%A6%BE%E0%A6%87%E0%A6%A8+%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE" class="filter-pill ">
                        অনলাইন শিক্ষা                        <span class="pill-count">1</span>
                    </a>
                                    <a href="?category=%E0%A6%87%E0%A6%B8%E0%A6%B2%E0%A6%BE%E0%A6%AE%E0%A7%80+%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE" class="filter-pill ">
                        ইসলামী শিক্ষা                        <span class="pill-count">1</span>
                    </a>
                                    <a href="?category=%E0%A6%95%E0%A7%81%E0%A6%B0%E0%A6%86%E0%A6%A8+%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE" class="filter-pill ">
                        কুরআন শিক্ষা                        <span class="pill-count">1</span>
                    </a>
                                    </div>
            </div>
</div>

<!-- Blog content -->
<section class="blog-section">
    <div class="container">
        <div class="blog-layout">
            <div class="main-content">

                                    <!-- 2 column grid -->
                    <div class="posts-grid">
                                                                                    <div class="post-card reveal stagger-1">
                                    <div class="thumb-wrap">
                                                                                    <img src="/assets/img/placeholder.svg" alt="Blog" loading="lazy">
                                                                                <div class="thumb-overlay"></div>
                                                                                    <span class="cat-badge"><i class="fas fa-folder"></i> ইসলামী শিক্ষা</span>
                                                                                <span class="views-badge"><i class="fas fa-eye"></i> 4</span>
                                        <button class="bookmark-btn" onclick="toggleBookmark(this)" aria-label="Bookmark"><i class="far fa-bookmark"></i></button>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-meta">
                                            <span><i class="fas fa-calendar-alt"></i> 20 Aug 2026</span>
                                            <span class="meta-dot"></span>
                                                                                            <span><i class="fas fa-user-pen"></i> আল হেরা টিম</span>
                                                                                    </div>
                                        <h3 class="card-title">কুরআন শিক্ষার গুরুত্ব</h3>
                                        <p class="card-excerpt">
                                            পবিত্র কুরআন শিক্ষার গুরুত্ব অপরিসীম। এটি আমাদের জীবন পরিচালনার পূর্ণাঙ্গ গাইডলাইন।                                        </p>
                                        <div class="card-footer">
                                            <a href="blog.php?id=1" class="btn-read-more">
                                                <span>পড়ুন</span> <i class="fas fa-arrow-right"></i>
                                            </a>
                                            <div class="card-share">
                                                <button onclick="sharePost('facebook', 1)" aria-label="Facebook"><i class="fab fa-facebook-f"></i></button>
                                                <button onclick="sharePost('twitter', 1)" aria-label="Twitter"><i class="fab fa-x-twitter"></i></button>
                                                <button onclick="copyLink(1)" aria-label="Copy"><i class="fas fa-link"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="post-card reveal stagger-2">
                                    <div class="thumb-wrap">
                                                                                    <img src="/assets/img/placeholder.svg" alt="Blog" loading="lazy">
                                                                                <div class="thumb-overlay"></div>
                                                                                    <span class="cat-badge"><i class="fas fa-folder"></i> অনলাইন শিক্ষা</span>
                                                                                <span class="views-badge"><i class="fas fa-eye"></i> 2</span>
                                        <button class="bookmark-btn" onclick="toggleBookmark(this)" aria-label="Bookmark"><i class="far fa-bookmark"></i></button>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-meta">
                                            <span><i class="fas fa-calendar-alt"></i> 20 Aug 2026</span>
                                            <span class="meta-dot"></span>
                                                                                            <span><i class="fas fa-user-pen"></i> আল হেরা টিম</span>
                                                                                    </div>
                                        <h3 class="card-title">অনলাইন মাদ্রাসার সুবিধা</h3>
                                        <p class="card-excerpt">
                                            অনলাইন মাদ্রাসার মাধ্যমে ঘরে বসেই মানসম্মত ইসলামী শিক্ষা গ্রহণের সুযোগ রয়েছে।                                        </p>
                                        <div class="card-footer">
                                            <a href="blog.php?id=2" class="btn-read-more">
                                                <span>পড়ুন</span> <i class="fas fa-arrow-right"></i>
                                            </a>
                                            <div class="card-share">
                                                <button onclick="sharePost('facebook', 2)" aria-label="Facebook"><i class="fab fa-facebook-f"></i></button>
                                                <button onclick="sharePost('twitter', 2)" aria-label="Twitter"><i class="fab fa-x-twitter"></i></button>
                                                <button onclick="copyLink(2)" aria-label="Copy"><i class="fas fa-link"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="post-card reveal stagger-3">
                                    <div class="thumb-wrap">
                                                                                    <img src="/assets/img/placeholder.svg" alt="Blog" loading="lazy">
                                                                                <div class="thumb-overlay"></div>
                                                                                    <span class="cat-badge"><i class="fas fa-folder"></i> কুরআন শিক্ষা</span>
                                                                                <span class="views-badge"><i class="fas fa-eye"></i> 1</span>
                                        <button class="bookmark-btn" onclick="toggleBookmark(this)" aria-label="Bookmark"><i class="far fa-bookmark"></i></button>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-meta">
                                            <span><i class="fas fa-calendar-alt"></i> 20 Aug 2026</span>
                                            <span class="meta-dot"></span>
                                                                                            <span><i class="fas fa-user-pen"></i> আল হেরা টিম</span>
                                                                                    </div>
                                        <h3 class="card-title">তাজবিদ শিক্ষার নিয়ম</h3>
                                        <p class="card-excerpt">
                                            তাজবিদ হলো কুরআন তিলাওয়াতের সঠিক নিয়ম ও উচ্চারণ পদ্ধতি।                                        </p>
                                        <div class="card-footer">
                                            <a href="blog.php?id=3" class="btn-read-more">
                                                <span>পড়ুন</span> <i class="fas fa-arrow-right"></i>
                                            </a>
                                            <div class="card-share">
                                                <button onclick="sharePost('facebook', 3)" aria-label="Facebook"><i class="fab fa-facebook-f"></i></button>
                                                <button onclick="sharePost('twitter', 3)" aria-label="Twitter"><i class="fab fa-x-twitter"></i></button>
                                                <button onclick="copyLink(3)" aria-label="Copy"><i class="fas fa-link"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                        </div>

                    <!-- Pagination -->
                                                </div>

            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="widget search-widget reveal-right stagger-1">
                    <div class="widget-header">
                        <div class="widget-icon"><i class="fas fa-magnifying-glass"></i></div>
                        <div class="widget-title">সার্চ করুন <small>ব্লগে খুঁজুন</small></div>
                    </div>
                    <form method="GET">
                        <div class="search-input-wrap">
                            <input type="text" name="search" placeholder="কী খুঁজছেন?" value="" />
                            <i class="fas fa-magnifying-glass"></i>
                        </div>
                        <button type="submit" class="search-btn">খুঁজুন</button>
                    </form>
                </div>

                                    <div class="widget reveal-right stagger-2">
                        <div class="widget-header">
                            <div class="widget-icon"><i class="fas fa-layer-group"></i></div>
                            <div class="widget-title">ক্যাটাগরি <small>বিষয়ভিত্তিক</small></div>
                        </div>
                        <ul class="category-list">
                                                            <li>
                                    <a href="?category=%E0%A6%85%E0%A6%A8%E0%A6%B2%E0%A6%BE%E0%A6%87%E0%A6%A8+%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE"><i class="fas fa-folder-open"></i> অনলাইন শিক্ষা</a>
                                    <span class="cat-count">1</span>
                                </li>
                                                            <li>
                                    <a href="?category=%E0%A6%87%E0%A6%B8%E0%A6%B2%E0%A6%BE%E0%A6%AE%E0%A7%80+%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE"><i class="fas fa-folder-open"></i> ইসলামী শিক্ষা</a>
                                    <span class="cat-count">1</span>
                                </li>
                                                            <li>
                                    <a href="?category=%E0%A6%95%E0%A7%81%E0%A6%B0%E0%A6%86%E0%A6%A8+%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE"><i class="fas fa-folder-open"></i> কুরআন শিক্ষা</a>
                                    <span class="cat-count">1</span>
                                </li>
                                                    </ul>
                    </div>
                
                                    <div class="widget reveal-right stagger-3">
                        <div class="widget-header">
                            <div class="widget-icon"><i class="fas fa-clock-rotate-left"></i></div>
                            <div class="widget-title">সাম্প্রতিক পোস্ট <small>সর্বশেষ প্রকাশিত</small></div>
                        </div>
                        <ul class="recent-list">
                                                                                                <li>
                                        <span class="recent-num">1</span>
                                        <div class="recent-info">
                                            <a href="blog.php?id=1">কুরআন শিক্ষার গুরুত্ব</a>
                                            <span class="recent-date"><i class="fas fa-calendar-alt"></i> 20 Aug 2026</span>
                                        </div>
                                    </li>
                                                                    <li>
                                        <span class="recent-num">2</span>
                                        <div class="recent-info">
                                            <a href="blog.php?id=2">অনলাইন মাদ্রাসার সুবিধা</a>
                                            <span class="recent-date"><i class="fas fa-calendar-alt"></i> 20 Aug 2026</span>
                                        </div>
                                    </li>
                                                                    <li>
                                        <span class="recent-num">3</span>
                                        <div class="recent-info">
                                            <a href="blog.php?id=3">তাজবিদ শিক্ষার নিয়ম</a>
                                            <span class="recent-date"><i class="fas fa-calendar-alt"></i> 20 Aug 2026</span>
                                        </div>
                                    </li>
                                                                                    </ul>
                    </div>
                
                                    <div class="widget reveal-right stagger-4">
                        <div class="widget-header">
                            <div class="widget-icon"><i class="fas fa-fire-flame-curved"></i></div>
                            <div class="widget-title">জনপ্রিয় পোস্ট <small>সবচেয়ে বেশি পঠিত</small></div>
                        </div>
                        <ul class="popular-list">
                                                            <li>
                                    <span class="pop-rank">1</span>
                                    <div class="pop-info">
                                        <a href="blog.php?id=1">কুরআন শিক্ষার গুরুত্ব</a>
                                        <span class="pop-views"><i class="fas fa-eye"></i> 4 বার পঠিত</span>
                                    </div>
                                </li>
                                                            <li>
                                    <span class="pop-rank">2</span>
                                    <div class="pop-info">
                                        <a href="blog.php?id=2">অনলাইন মাদ্রাসার সুবিধা</a>
                                        <span class="pop-views"><i class="fas fa-eye"></i> 2 বার পঠিত</span>
                                    </div>
                                </li>
                                                            <li>
                                    <span class="pop-rank">3</span>
                                    <div class="pop-info">
                                        <a href="blog.php?id=3">তাজবিদ শিক্ষার নিয়ম</a>
                                        <span class="pop-views"><i class="fas fa-eye"></i> 1 বার পঠিত</span>
                                    </div>
                                </li>
                                                    </ul>
                    </div>
                
                                    <div class="widget reveal-right stagger-5">
                        <div class="widget-header">
                            <div class="widget-icon"><i class="fas fa-hashtag"></i></div>
                            <div class="widget-title">ট্যাগ সমূহ <small>জনপ্রিয় বিষয়</small></div>
                        </div>
                        <div class="tag-cloud">
                                                            <a href="?category=%E0%A6%85%E0%A6%A8%E0%A6%B2%E0%A6%BE%E0%A6%87%E0%A6%A8+%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE">অনলাইন শিক্ষা</a>
                                                            <a href="?category=%E0%A6%87%E0%A6%B8%E0%A6%B2%E0%A6%BE%E0%A6%AE%E0%A7%80+%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE">ইসলামী শিক্ষা</a>
                                                            <a href="?category=%E0%A6%95%E0%A7%81%E0%A6%B0%E0%A6%86%E0%A6%A8+%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE">কুরআন শিক্ষা</a>
                                                        <a href="#">কুরআন</a>
                            <a href="#">হাদিস</a>
                            <a href="#">ফিকহ</a>
                            <a href="#">তাফসির</a>
                        </div>
                    </div>
                
                <div class="widget newsletter-widget reveal-right stagger-6">
                    <div class="widget-header">
                        <div class="widget-icon"><i class="fas fa-envelope-open-text"></i></div>
                        <div class="widget-title">নিউজলেটার <small>সাবস্ক্রাইব করুন</small></div>
                    </div>
                    <p class="nl-text">নতুন পোস্ট প্রকাশ হলে সবার আগে জানতে সাবস্ক্রাইব করুন।</p>
                    <form class="nl-form" id="newsletterForm" method="POST">
                        <input type="email" name="email" placeholder="আপনার ইমেইল দিন" required />
                        <button type="submit">সাবস্ক্রাইব করুন <i class="fas fa-paper-plane" style="margin-left:5px;"></i></button>
                    </form>
                    <div class="nl-note"><i class="fas fa-shield-halved"></i> আমরা আপনার ইমেইল সুরক্ষিত রাখি।</div>
                </div>
            </aside>

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
    var scrollProgress = document.getElementById('scrollProgress');
    var backToTop = document.getElementById('backToTop');
    var filterBar = document.getElementById('filterBar');

    function onScroll() {
        var st = window.scrollY;
        var dh = document.documentElement.scrollHeight - window.innerHeight;
        scrollProgress.style.width = (dh > 0 ? (st / dh) * 100 : 0) + '%';
        backToTop.classList.toggle('visible', st > 400);
        if (filterBar) filterBar.classList.toggle('scrolled', st > 300);
    }

    var ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) { requestAnimationFrame(function() { onScroll(); ticking = false; }); ticking = true; }
    });
    backToTop.addEventListener('click', function() { window.scrollTo({ top: 0, behavior: 'smooth' }); });

    var revealEls = document.querySelectorAll('.reveal, .reveal-right');
    var obs = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) { if (e.isIntersecting) e.target.classList.add('visible'); });
    }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });
    revealEls.forEach(function(el) { obs.observe(el); });

    var counters = document.querySelectorAll('.hero-stat .num');
    var bd = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];
    function toBn(n) { return n.toString().replace(/\d/g, function(d) { return bd[parseInt(d)]; }); }
    var cObs = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
            if (e.isIntersecting && !e.target.dataset.animated) {
                e.target.dataset.animated = '1';
                var raw = e.target.dataset.count;
                var tgt = parseInt(raw.replace(/[০-৯]/g, function(d) { return bd.indexOf(d); }), 10) || 0;
                var cur = 0, inc = tgt / 45;
                var t = setInterval(function() {
                    cur += inc;
                    if (cur >= tgt) { cur = tgt; clearInterval(t); }
                    e.target.textContent = toBn(Math.floor(cur));
                }, 30);
            }
        });
    }, { threshold: 0.5 });
    counters.forEach(function(c) { cObs.observe(c); });

    var nlForm = document.getElementById('newsletterForm');
    if (nlForm) nlForm.addEventListener('submit', function(e) {
        e.preventDefault();
        showToast('ধন্যবাদ! আপনি সাবস্ক্রাইব করেছেন', 'fa-check-circle');
        this.querySelector('input').value = '';
    });

    onScroll();
});

function toggleBookmark(btn) {
    btn.classList.toggle('saved');
    var i = btn.querySelector('i');
    if (btn.classList.contains('saved')) { i.className = 'fas fa-bookmark'; showToast('বুকমার্ক করা হয়েছে', 'fa-bookmark'); }
    else { i.className = 'far fa-bookmark'; showToast('বুকমার্ক থেকে সরানো হয়েছে', 'fa-bookmark'); }
}
function sharePost(p, id) {
    var u = window.location.origin + '/blog.php?id=' + id;
    var t = document.querySelector('.card-title') ? document.querySelector('.card-title').textContent : 'ব্লগ';
    if (p === 'facebook') window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(u), '_blank', 'width=600,height=400');
    else if (p === 'twitter') window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(u) + '&text=' + encodeURIComponent(t), '_blank', 'width=600,height=400');
}
function copyLink(id) {
    var u = window.location.origin + '/blog.php?id=' + id;
    navigator.clipboard.writeText(u).then(function() { showToast('লিংক কপি হয়েছে', 'fa-link'); }).catch(function() { showToast('সমস্যা হয়েছে', 'fa-exclamation-circle'); });
}
function showToast(msg, icon) {
    var c = document.getElementById('toastContainer');
    var t = document.createElement('div'); t.className = 'toast';
    t.innerHTML = '<i class="fas ' + (icon || 'fa-check-circle') + '"></i> ' + msg;
    c.appendChild(t);
    setTimeout(function() { t.classList.add('toast-out'); setTimeout(function() { if (t.parentNode) t.parentNode.removeChild(t); }, 300); }, 2500);
}
</script>

</body>
</html>