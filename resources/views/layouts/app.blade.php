<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUDAMAS - @yield('title', 'Kuningan Dalam Angka Statistik')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --biru-tua: #1B3A6B;
            --biru-muda: #2563EB;
            --kuning: #F5C518;
            --abu: #F1F5F9;
        }

        body {
            background-color: var(--abu);
            font-family: 'Segoe UI', sans-serif;
        }

        /* ===== NAVBAR ===== */
        .navbar-kudamas {
            background-color: var(--biru-tua);
            padding: 12px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-kudamas .brand-text {
            color: white;
            font-weight: 700;
            font-size: 0.95rem;
            line-height: 1.3;
        }

        .navbar-kudamas .navbar-toggler {
            border-color: rgba(255,255,255,0.4);
        }

        .navbar-kudamas .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.85%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-kudamas .nav-link {
            color: rgba(255,255,255,0.85) !important;
            font-size: 0.88rem;
            font-weight: 500;
            padding: 8px 14px !important;
            border-radius: 6px;
            transition: all 0.15s;
        }

        .navbar-kudamas .nav-link:hover,
        .navbar-kudamas .nav-link.active {
            background-color: rgba(255,255,255,0.15);
            color: white !important;
        }

        /* Di mobile, nav collapse punya background */
        @media (max-width: 991px) {
            .navbar-kudamas .navbar-collapse {
                background-color: var(--biru-tua);
                padding: 8px 0 12px;
                margin-top: 8px;
                border-top: 1px solid rgba(255,255,255,0.15);
            }
        }

        /* ===== KONTEN ===== */
        .main-content {
            padding: 24px 0 40px;
        }

        /* ===== CARD ===== */
        .card-menu {
            background: white;
            border-radius: 14px;
            border: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            transition: transform 0.15s, box-shadow 0.15s;
            text-decoration: none;
            color: var(--biru-tua);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 28px 16px;
            gap: 14px;
            text-align: center;
            height: 100%;
        }

        .card-menu:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(27,58,107,0.15);
            color: var(--biru-tua);
        }

        .card-menu .card-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #DBEAFE, #EFF6FF);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--biru-tua);
        }

        .card-menu .card-label {
            font-weight: 700;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            line-height: 1.4;
        }

        /* ===== BANNER ===== */
        .banner-pengumuman {
            background: linear-gradient(135deg, #EFF6FF, #DBEAFE);
            border-left: 4px solid var(--biru-tua);
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 0.85rem;
            color: var(--biru-tua);
            margin-bottom: 24px;
        }

        /* ===== PAGE HEADER (halaman konten) ===== */
        .page-header {
            background-color: var(--biru-tua);
            padding: 14px 0;
            margin-bottom: 0;
        }

        .page-header a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            font-size: 0.85rem;
        }

        .page-header a:hover { color: white; }

        .page-header h1 {
            color: white;
            font-size: 1.1rem;
            font-weight: 700;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ===== FOOTER ===== */
        .footer-kudamas {
            background-color: var(--biru-tua);
            color: rgba(255,255,255,0.6);
            text-align: center;
            padding: 20px;
            font-size: 0.75rem;
            line-height: 1.8;
            margin-top: 40px;
        }

        .footer-kudamas span {
            color: rgba(255,255,255,0.9);
            font-weight: 600;
        }
    </style>

    @stack('styles')
</head>
<body>

{{-- ===== NAVBAR ===== --}}
<nav class="navbar navbar-kudamas navbar-expand-lg">
    <div class="container">

        {{-- Logo + Nama --}}
        <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="{{ route('home') }}">
            <div style="width:36px;height:36px;background:var(--kuning);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.1rem;flex-shrink:0;">
                🐴
            </div>
            <div class="brand-text">
                KUDAMAS<br>
                <span style="font-size:0.7rem;font-weight:400;opacity:0.8;">Kuningan Dalam Angka Statistik</span>
            </div>
        </a>

        {{-- Hamburger (mobile) --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu Links --}}
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto gap-1">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="bi bi-grid-fill me-1"></i> Menu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">
                        <i class="bi bi-house-fill me-1"></i> Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('indikator') ? 'active' : '' }}" href="{{ route('indikator') }}">
                        <i class="bi bi-bar-chart-fill me-1"></i> Indikator
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('seputar-kuningan') ? 'active' : '' }}" href="{{ route('seputar-kuningan') }}">
                        <i class="bi bi-file-text-fill me-1"></i> Seputar Kuningan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pariwisata') ? 'active' : '' }}" href="{{ route('pariwisata') }}">
                        <i class="bi bi-image-fill me-1"></i> Pariwisata
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('media-sosial') ? 'active' : '' }}" href="{{ route('media-sosial') }}">
                        <i class="bi bi-share-fill me-1"></i> Media Sosial
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>

{{-- ===== KONTEN ===== --}}
<main class="main-content">
    @yield('content')
</main>

{{-- ===== FOOTER ===== --}}
<footer class="footer-kudamas">
    <span>KUDAMAS</span> — Kuningan Dalam Angka Statistik<br>
    BPS Kabupaten Kuningan &nbsp;|&nbsp; ©{{ date('Y') }}
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
