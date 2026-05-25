<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUDAMAS — @yield('title', 'Kuningan Dalam Angka Statistik')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --biru:        #1B3A6B;
            --biru-mid:    #1E40AF;
            --biru-muda:   #2563EB;
            --biru-light:  #EFF6FF;
            --kuning:      #F5C518;
            --hijau:       #16A34A;
            --hijau-hover: #15803D;
            --bg:          #F0F4F8;
            --surface:     #FFFFFF;
            --border:      #E2E8F0;
            --text:        #1E293B;
            --muted:       #64748B;
            --sidebar-w:   252px;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        html, body {
            height: 100%;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            overflow: hidden;
            background: var(--bg);
            color: var(--text);
        }

        .app-shell { display: flex; height: 100vh; }

        /* ════════ FOOTER ════════ */
        .main-footer-info {
            width: 100%;
            background: #FFFFFF;
            border-top: 1px solid #E2E8F0;
            padding: 48px 0 28px;
            position: relative;
            z-index: 5;
            box-shadow: 0 -4px 24px rgba(27,58,107,0.06);
        }

        .footer-container {
            width: 92%;
            max-width: 1400px;
            margin: auto;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            gap: 48px;
            flex-wrap: wrap;
            margin-bottom: 36px;
        }

        .footer-brand { max-width: 380px; }

        .footer-brand-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 16px;
        }

        .footer-logo {
            width: 52px; height: 52px;
            border-radius: 12px;
            object-fit: contain;
            background: #F0F4F8;
            padding: 4px;
            border: 1px solid #E2E8F0;
        }

        .footer-brand h3 {
            font-size: 1.4rem;
            font-weight: 800;
            margin: 0;
            color: #1B3A6B;
            letter-spacing: 1px;
        }

        .footer-brand > .footer-brand-header > div > span {
            color: #64748B;
            font-size: 0.78rem;
        }

        .footer-brand p {
            color: #475569;
            line-height: 1.8;
            font-size: 0.87rem;
        }

        .footer-links {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            align-content: start;
        }

        .footer-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .footer-icon {
            width: 40px; height: 40px;
            border-radius: 12px;
            background: #EFF6FF;
            border: 1px solid #DBEAFE;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2563EB;
            font-size: 0.95rem;
            flex-shrink: 0;
        }

        .footer-item span,
        .footer-item a {
            color: #475569;
            text-decoration: none;
            line-height: 1.6;
            font-size: 0.85rem;
        }

        .footer-item a:hover { color: #1B3A6B; font-weight: 600; }

        .footer-bottom {
            border-top: 1px solid #E2E8F0;
            padding-top: 22px;
            text-align: center;
            color: #94A3B8;
            font-size: 0.82rem;
        }

        @media (max-width: 991px) {
            .footer-top { flex-direction: column; gap: 28px; }
            .footer-brand { max-width: 100%; }
            .footer-links { grid-template-columns: 1fr; }
        }
        /* ════════════════════════════════
           SIDEBAR
        ════════════════════════════════ */
        .sidebar {
            width: var(--sidebar-w);
            height: 100vh;
            background: linear-gradient(180deg, #1B3A6B 0%, #152d54 100%);
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            overflow: hidden;
            transition: width 0.32s cubic-bezier(.4,0,.2,1);
            z-index: 50;
            box-shadow: 2px 0 16px rgba(27,58,107,0.15);
        }

        .sidebar.collapsed { width: 0; }

        .sidebar-nav {
            flex: 1; overflow-y: auto;
            padding: 10px 0;
            scrollbar-width: thin;
            scrollbar-color: rgba(255,255,255,0.08) transparent;
            min-width: var(--sidebar-w);
        }

        .nav-label {
            color: rgba(255,255,255,0.28);
            font-size: 0.58rem; font-weight: 700;
            letter-spacing: 2.2px; text-transform: uppercase;
            padding: 16px 18px 6px;
        }

        .nav-link-1 {
            display: flex; align-items: center; gap: 10px;
            padding: 10px 18px;
            color: rgba(255,255,255,0.68);
            text-decoration: none; font-size: 0.83rem; font-weight: 500;
            border-left: 3px solid transparent;
            cursor: pointer; transition: all 0.18s; user-select: none;
            white-space: nowrap;
        }
        .nav-link-1 i.icon { font-size: 0.9rem; width: 17px; flex-shrink: 0; }
        .nav-link-1 .arrow { margin-left: auto; font-size: 0.6rem; transition: transform 0.22s; }
        .nav-link-1.open .arrow { transform: rotate(90deg); }
        .nav-link-1:hover { color: white; background: rgba(255,255,255,0.08); border-left-color: rgba(245,197,24,0.5); }
        .nav-link-1.active { color: white; background: rgba(255,255,255,0.1); border-left-color: var(--kuning); font-weight: 600; }

        .nav-sub { display: none; background: rgba(0,0,0,0.12); }
        .nav-sub.show { display: block; }

        .nav-link-2 {
            display: flex; align-items: center; gap: 8px;
            padding: 8px 18px 8px 38px;
            color: rgba(255,255,255,0.52);
            text-decoration: none; font-size: 0.78rem;
            border-left: 3px solid transparent;
            cursor: pointer; transition: all 0.18s; user-select: none; white-space: nowrap;
        }
        .nav-link-2 .arrow { margin-left: auto; font-size: 0.56rem; transition: transform 0.22s; }
        .nav-link-2.open .arrow { transform: rotate(90deg); }
        .nav-link-2:hover { color: white; background: rgba(255,255,255,0.06); border-left-color: rgba(245,197,24,0.35); }
        
        .nav-link-2.active {
            color: rgba(255,255,255,0.9);
            border-left: 3px solid var(--kuning);
            background: rgba(0,0,0,0.08);
        }
        .nav-subsub { display: none; background: rgba(0,0,0,0.1); }
        .nav-subsub.show { display: block; }

        .nav-link-3 {
            display: flex; align-items: center; gap: 5px;
            padding: 6px 18px 6px 54px;
            color: rgba(255,255,255,0.4);
            text-decoration: none; font-size: 0.73rem;
            border-left: 3px solid transparent;
            transition: all 0.18s; white-space: nowrap;
        }
        .nav-link-3::before { content: '›'; color: rgba(255,255,255,0.22); }
        .nav-link-3:hover { color: white; background: rgba(255,255,255,0.04); border-left-color: rgba(245,197,24,0.2); }
        .nav-link-3.active { color: rgba(255,255,255,0.9); border-left-color: var(--kuning); }

        .sidebar-footer {
            border-top: 1px solid rgba(255,255,255,0.07);
            padding: 16px 18px; flex-shrink: 0;
            min-width: var(--sidebar-w);
        }
        .footer-title {
            color: rgba(255,255,255,0.24); font-size: 0.57rem;
            font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
            margin-bottom: 12px;
        }
        .contact-item {
            display: flex; align-items: flex-start; gap: 8px;
            margin-bottom: 8px; color: rgba(255,255,255,0.45);
            font-size: 0.71rem; line-height: 1.45;
        }
        .contact-item i { color: var(--kuning); margin-top: 2px; flex-shrink: 0; font-size: 0.75rem; }
        .contact-item a { color: rgba(255,255,255,0.45); text-decoration: none; }
        .contact-item a:hover { color: var(--kuning); }
        .copyright { color: rgba(255,255,255,0.16); font-size: 0.59rem; margin-top: 12px; text-align: center; }

        /* ════════════════════════════════
        YANG DITAMBAH
         ════════════════════════════════ */
        .semua-menu-active {
            border-left: 3px solid var(--kuning) !important;
        }
        .nav-link-2:not(.semua-menu-active) {
            border-left: 3px solid transparent;
        }

        /* ════════════════════════════════
           CONTENT AREA
        ════════════════════════════════ */
        .content-area {
            flex: 1; display: flex; flex-direction: column;
            height: 100vh; overflow: hidden; min-width: 0;
        }

        /* ════════════════════════════════
           HEADER — redesign bersih
        ════════════════════════════════ */
        .top-header {
            height: 62px;
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            padding: 0 20px;
            gap: 0;
            flex-shrink: 0;
            box-shadow: 0 1px 8px rgba(0,0,0,0.06);
            z-index: 20;
        }

        /* Kiri: toggle + logo */
        .header-left {
            display: flex; align-items: center; gap: 12px;
            flex-shrink: 0;
        }

        .btn-toggle {
            width: 38px; height: 38px;
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 10px;
            color: var(--biru);
            display: flex; align-items: center; justify-content: center;
            font-size: 1.15rem; cursor: pointer; flex-shrink: 0;
            transition: all 0.18s;
        }
        .btn-toggle:hover {
            background: var(--biru); color: white; border-color: var(--biru);
            box-shadow: 0 4px 12px rgba(27,58,107,0.25);
        }

        .header-brand {
            display: flex; align-items: center; gap: 10px;
            text-decoration: none; flex-shrink: 0;
        }
        .logo-badge {
            width: 38px; height: 38px;
            background: linear-gradient(135deg, var(--biru), var(--biru-mid));
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 2px 8px rgba(27,58,107,0.3);
            flex-shrink: 0;
        }
        .brand-name {
            font-weight: 800; font-size: 0.95rem;
            color: var(--biru); letter-spacing: 1.5px; line-height: 1.2;
        }
        .brand-sub { font-size: 0.59rem; color: var(--muted); letter-spacing: 0.2px; }

        /* Tengah: spacer */
        .header-spacer { flex: 1; }

        /* Kanan: BPS info + search */
        .header-right {
            display: flex; align-items: center; gap: 16px;
            flex-shrink: 0;
        }

        .bps-block {
            text-align: right;
        }
        .bps-name {
            font-weight: 800; font-size: 0.88rem;
            color: var(--biru); letter-spacing: 0.4px; line-height: 1.2;
        }
        .bps-sub { font-size: 0.6rem; color: var(--muted); }

        .header-sep {
            width: 1px; height: 30px; background: var(--border); flex-shrink: 0;
        }

        /* ════════════════════════════════
           SCROLL AREA + BG TRANSPARAN
        ════════════════════════════════ */
        .scroll-area {
            flex: 1; overflow-y: auto; position: relative;
            scrollbar-width: thin; scrollbar-color: #CBD5E1 transparent;
        }

        /* Foto background hanya di content */
        .scroll-bg {
            position: fixed;
            /* Offset supaya tidak masuk ke header & sidebar */
            top: 62px;   /* tinggi header */
            left: var(--sidebar-w);
            right: 0; bottom: 0;
            z-index: 0;
            background: url('/images/bg.png') center/cover no-repeat;
            transition: left 0.32s cubic-bezier(.4,0,.2,1);
        }

        /* Update left saat sidebar collapse */
        .sidebar.collapsed ~ .content-area .scroll-bg { left: 0; }

        /* Overlay glassmorphism */
        .scroll-bg::after {
            content: '';
            position: absolute; inset: 0;
            background: rgba(240, 244, 248, 0.52);
            backdrop-filter: blur(1px);
        }

        .scroll-inner {
            position: relative; z-index: 1;
            padding: 28px 30px 60px;
        }

        .center-wrap { max-width: 940px; margin: 0 auto; }

        /* ════════════════════════════════
           PAGE ELEMENTS
        ════════════════════════════════ */
        .page-breadcrumb {
            display: flex; align-items: center; gap: 7px;
            font-size: 0.77rem; color: var(--muted); margin-bottom: 10px;
        }
        .page-breadcrumb a { color: var(--muted); text-decoration: none; transition: color 0.15s; }
        .page-breadcrumb a:hover { color: var(--biru); }
        .page-breadcrumb .sep { opacity: 0.5; font-size: 0.6rem; }
        .page-breadcrumb .current { color: var(--text); font-weight: 600; }

        .page-title {
            font-size: 1.55rem; font-weight: 800;
            color: var(--biru); margin-bottom: 22px;
            letter-spacing: 0.2px;
            display: flex; align-items: center; gap: 10px;
        }
        .page-title::before {
            content: '';
            display: block; width: 4px; height: 28px;
            background: var(--kuning); border-radius: 2px; flex-shrink: 0;
        }

        /* Card pembungkus isi */
        .page-card {
            background: rgba(255,255,255,0.92);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.85);
            border-radius: 18px; padding: 28px;
            box-shadow:
                0 4px 6px rgba(0,0,0,0.04),
                0 10px 40px rgba(27,58,107,0.08);
            font-size: 0.9rem; line-height: 1.85; color: var(--text);
        }
        .page-card h6 { color: var(--biru); font-weight: 700; margin-bottom: 10px; }
        .page-card p { color: #334155; }
        .page-card .table { font-size: 0.83rem; }
        .page-card .table thead th { background: var(--biru); color: white; font-weight: 600; }
        .page-card .table-bordered td,
        .page-card .table-bordered th { border-color: var(--border); }
        .page-card .table-hover tbody tr:hover td { background: #F8FAFC; }

        /* Stat cards */
        .stat-card {
            background: rgba(255,255,255,0.95);
            border: 1px solid var(--border);
            border-radius: 14px; padding: 18px 14px; text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .stat-card .stat-value { font-size: 1.5rem; font-weight: 800; color: var(--biru); line-height: 1.2; }
        .stat-card .stat-label { font-size: 0.7rem; color: var(--muted); margin-top: 4px; }

        /* Info box */
        .info-box {
            background: rgba(239,246,255,0.9);
            border-left: 4px solid var(--biru);
            border-radius: 0 12px 12px 0;
            padding: 12px 16px; font-size: 0.85rem;
            color: #1e3a5f; margin-bottom: 18px;
        }

        /* ════════════════════════════════
           SUBMENU GRID (2 kolom, biru)
        ════════════════════════════════ */
        .submenu-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .submenu-card {
            background: linear-gradient(135deg, var(--biru) 0%, #1e4080 100%);
            border-radius: 16px;
            text-decoration: none; color: white;
            display: flex; flex-direction: column;
            align-items: center; justify-content: center;
            padding: 32px 20px; gap: 14px;
            text-align: center;
            font-weight: 700; font-size: 0.82rem;
            text-transform: uppercase; letter-spacing: 0.7px;
            line-height: 1.4; min-height: 140px;
            box-shadow: 0 4px 16px rgba(27,58,107,0.2);
            transition: all 0.24s cubic-bezier(.4,0,.2,1);
            border: 1px solid rgba(255,255,255,0.06);
            position: relative; overflow: hidden;
        }

        .submenu-card::after {
            content: '';
            position: absolute; top: -60%; right: -20%;
            width: 120px; height: 120px;
            background: rgba(255,255,255,0.04);
            border-radius: 50%;
            transition: all 0.4s;
        }

        .submenu-card:hover {
            background: linear-gradient(135deg, var(--biru-mid) 0%, var(--biru-muda) 100%);
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 14px 36px rgba(27,58,107,0.3);
        }

        .submenu-card:hover::after {
            transform: scale(2.5);
        }

        .submenu-card .sc-icon {
            width: 56px; height: 56px;
            background: rgba(255,255,255,0.14);
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.55rem; color: white;
            transition: all 0.24s;
            position: relative; z-index: 1;
        }
        .submenu-card:hover .sc-icon {
            background: rgba(255,255,255,0.22);
            transform: scale(1.08);
        }

        .submenu-card span { position: relative; z-index: 1; }

        .submenu-card.unduh {
            background: linear-gradient(135deg, #16A34A 0%, #15803D 100%);
            box-shadow: 0 4px 16px rgba(22,163,74,0.2);
        }
        .submenu-card.unduh:hover {
            background: linear-gradient(135deg, #15803D 0%, #166534 100%);
            box-shadow: 0 14px 36px rgba(22,163,74,0.32);
        }

        /* ════════════════════════════════
           OVERLAY MOBILE
        ════════════════════════════════ */
        .sidebar-overlay {
            display: none; position: fixed; inset: 0;
            background: rgba(15,25,50,0.45); z-index: 40;
            backdrop-filter: blur(2px);
        }
        .sidebar-overlay.show { display: block; }

        /* ════════════════════════════════
           RESPONSIVE
        ════════════════════════════════ */
        @media (max-width: 991px) {
            .sidebar {
                position: fixed; left: 0; top: 0; height: 100%;
                width: var(--sidebar-w) !important;
                transform: translateX(calc(-1 * var(--sidebar-w)));
                transition: transform 0.32s cubic-bezier(.4,0,.2,1);
                z-index: 100;
            }
            .sidebar.open { transform: translateX(0); }
            .bps-block { display: none; }
            .header-sep { display: none; }
            .scroll-bg { left: 0 !important; }
            .scroll-inner { padding: 20px 16px; }
        }

        @media (max-width: 640px) {
            .submenu-grid { grid-template-columns: 1fr; }
            .search-box { width: 150px; }
            .search-box:focus-within { width: 170px; }
            .top-header { padding: 0 14px; gap: 10px; }
            .brand-sub { display: none; }
        }

        /* ════════════════════════════════
           LOGO BADGE 
        ════════════════════════════════ */
        .logo-badge {
            width: 45px;
            height: 45px;
            background: white;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 1px 8px rgba(27,58,107,0.18);
            flex-shrink: 0;
            padding: 1px;
        }

        .logo-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        /* ════════ FOOTER ════════ */
        .main-footer-info {
            width: 100%;
            background: #FFFFFF;
            border-top: 1px solid #E2E8F0;
            padding: 40px 40px 24px;
            position: relative;
            z-index: 5;
            box-shadow: 0 -2px 16px rgba(27,58,107,0.06);
            box-sizing: border-box;
        }

        .footer-container {
            width: 100%;
            max-width: 100%;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .footer-top {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 40px;
            flex-wrap: wrap;
            margin-bottom: 28px;
            width: 100%;
        }

        .footer-brand {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            max-width: 360px;
            flex-shrink: 0;
        }

        .footer-logo {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            object-fit: contain;
            background: #F0F4F8;
            border: 1px solid #E2E8F0;
            padding: 4px;
            flex-shrink: 0;
        }

        .footer-brand-text h3 {
            font-size: 1.1rem;
            font-weight: 800;
            margin: 0 0 2px;
            color: #1B3A6B;
            letter-spacing: 1px;
        }

        .footer-brand-text .footer-sub {
            color: #64748B;
            font-size: 0.72rem;
            display: block;
            margin-bottom: 8px;
        }

        .footer-brand-text p {
            color: #475569;
            line-height: 1.7;
            font-size: 0.82rem;
            margin: 0;
        }

        .footer-links {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
            align-content: start;
            min-width: 0;
        }

        .footer-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .footer-icon {
            width: 36px; height: 36px;
            border-radius: 10px;
            background: #EFF6FF;
            border: 1px solid #DBEAFE;
            display: flex; align-items: center; justify-content: center;
            color: #2563EB; font-size: 0.85rem;
            flex-shrink: 0;
        }

        .footer-item span,
        .footer-item a {
            color: #475569;
            text-decoration: none;
            line-height: 1.6;
            font-size: 0.82rem;
        }

        .footer-item a:hover { color: #1B3A6B; font-weight: 600; }

        .footer-bottom {
            border-top: 1px solid #E2E8F0;
            padding-top: 18px;
            text-align: center;
            color: #94A3B8;
            font-size: 0.78rem;
        }

        @media (max-width: 991px) {
            .main-footer-info { padding: 28px 20px 20px; }
            .footer-top { flex-direction: column; gap: 20px; }
            .footer-brand { max-width: 100%; }
            .footer-links { grid-template-columns: 1fr; }
        }
    </style>

    @stack('styles')
</head>
<body>

<div class="sidebar-overlay" id="overlay"></div>

<div class="app-shell">

    @include('partials.sidebar')

    <div class="content-area">

        {{-- ══ HEADER ══ --}}
        <div class="top-header">

            {{-- Kiri --}}
            <div class="header-left">
                <div class="btn-toggle" id="sidebarToggle" title="Toggle Sidebar">
                    <i class="bi bi-list"></i>
                </div>

                <a href="{{ route('home') }}" class="header-brand">
                    <div class="logo-badge">
                        <img src="{{ asset('images/logo kudamas.png') }}" alt="Logo" class="logo-img">
                    </div>
                    <div>
                        <div class="brand-name">KUDAMAS</div>
                        <div class="brand-sub">Kuningan Dalam Angka Statistik</div>
                    </div>
                </a>
            </div>

            {{-- Spacer --}}
            <div class="header-spacer"></div>

            {{-- Kanan --}}
            <div class="header-right">
                <div class="bps-block">
                    <div class="bps-name">BADAN PUSAT STATISTIK KUNINGAN</div>
                    <div class="bps-sub">Kabupaten Kuningan - Provinsi Jawa Barat</div>
                </div>

                <div class="header-sep"></div>
            </div>

        </div>

        {{-- ══ SCROLL AREA ══ --}}
        <div class="scroll-area">
            <div class="scroll-bg"></div>
            <div class="scroll-inner">

                {{-- Konten halaman --}}
                <div class="center-wrap">
                    @yield('main-content')
                </div>

            </div>

            {{-- FOOTER — di luar scroll-inner, full width --}}
            <footer class="main-footer-info">
                <div class="footer-container">

                    <div class="footer-top">

                        <div class="footer-brand">
                            <div class="footer-brand-header">
                                <img src="{{ asset('images/logo kudamas.png') }}" class="footer-logo">
                                <div>
                                    <h3>KUDAMAS</h3>
                                    <span>Kuningan Dalam Angka Statistik</span>
                                </div>
                            </div>
                            <p>
                                Portal statistik Kabupaten Kuningan yang menyajikan
                                data sektoral daerah secara akurat, transparan,
                                dan mudah diakses untuk mendukung pembangunan daerah.
                            </p>
                        </div>

                        <div class="footer-links">

                            <div class="footer-item">
                                <div class="footer-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <span>
                                    Jl. RE. Martadinata No.66, Cijoho,
                                    Kec. Kuningan, Kabupaten Kuningan,
                                    Jawa Barat 45513
                                </span>
                            </div>

                            <div class="footer-item">
                                <div class="footer-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <a href="tel:+62232871662">(0232) 871662</a>
                            </div>

                            <div class="footer-item">
                                <div class="footer-icon">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <a href="mailto:bps3208@bps.go.id">bps3208@bps.go.id</a>
                            </div>

                            <div class="footer-item">
                                <div class="footer-icon">
                                    <i class="bi bi-globe"></i>
                                </div>
                                <a href="https://kuningankab.bps.go.id" target="_blank">
                                    kuningankab.bps.go.id
                                </a>
                            </div>

                            <div class="footer-item">
                                <div class="footer-icon">
                                    <i class="bi bi-diagram-3-fill"></i>
                                </div>
                                <a href="https://ppid.bps.go.id/?mfd=3208" target="_blank">
                                    ppid.bps.go.id
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="footer-bottom">
                        © {{ date('Y') }} KUDAMAS -$_POST Kabupaten Kuningan Dalam Angka Statistik
                    </div>

                </div>
            </footer>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const sidebar   = document.getElementById('sidebar');
    const overlay   = document.getElementById('overlay');
    const toggleBtn = document.getElementById('sidebarToggle');
    const isDesktop = () => window.innerWidth >= 992;

    function openSidebar() {
        if (isDesktop()) sidebar.classList.remove('collapsed');
        else { sidebar.classList.add('open'); overlay.classList.add('show'); }
    }
    function closeSidebar() {
        if (isDesktop()) sidebar.classList.add('collapsed');
        else { sidebar.classList.remove('open'); overlay.classList.remove('show'); }
    }
    function toggleSidebar() {
        if (isDesktop()) sidebar.classList.toggle('collapsed');
        else {
            sidebar.classList.contains('open') ? closeSidebar() : openSidebar();
        }
    }

    toggleBtn.addEventListener('click', toggleSidebar);
    overlay.addEventListener('click', closeSidebar);

    function toggleNav(id, el) {
        const sub = document.getElementById('sub-' + id);
        if (!sub) return;
        const isOpen = sub.classList.contains('show');
        el.parentElement.querySelectorAll('.nav-sub.show, .nav-subsub.show').forEach(s => {
            if (s.id !== 'sub-' + id) {
                s.classList.remove('show');
                s.previousElementSibling?.classList.remove('open');
            }
        });
        sub.classList.toggle('show', !isOpen);
        el.classList.toggle('open', !isOpen);
    }
</script>

@stack('scripts')
</body>
</html>