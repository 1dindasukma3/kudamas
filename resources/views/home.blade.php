@extends('layouts.main')

@section('title', 'Menu Utama')

@push('styles')
<style>

    /* ── BANNER ── */
    .banner-wrap {
        border-radius: 18px;
        overflow: hidden;
        margin-bottom: 28px;
        box-shadow:
            0 4px 6px rgba(0,0,0,0.05),
            0 20px 50px rgba(27,58,107,0.18);
        position: relative;
    }

    .banner-slide {
        height: 280px;
        background-size: cover;
        background-position: center;
        background-color: var(--biru);
        position: relative;
    }

    .banner-slide::after {
        content: '';
        position: absolute; inset: 0;
        background: linear-gradient(
            180deg,
            rgba(8,18,42,0.05) 0%,
            rgba(8,18,42,0.25) 45%,
            rgba(8,18,42,0.82) 100%
        );
    }

    .banner-caption {
        position: absolute; bottom: 0; left: 0; right: 0;
        padding: 22px 28px; z-index: 2;
    }

    .banner-badge {
        display: inline-block;
        background: var(--kuning);
        color: #1a1a1a;
        font-size: 0.68rem; font-weight: 700;
        letter-spacing: 0.5px; text-transform: uppercase;
        padding: 3px 10px; border-radius: 99px;
        margin-bottom: 8px;
    }

    .banner-caption h5 {
        color: white; font-weight: 800;
        font-size: 1.15rem; margin-bottom: 5px; line-height: 1.3;
    }

    .banner-caption p {
        color: rgba(255,255,255,0.75);
        font-size: 0.82rem; margin: 0;
    }

    .carousel-ctrl {
        position: absolute; top: 50%;
        transform: translateY(-50%); z-index: 3;
        width: 40px; height: 40px;
        background: rgba(255,255,255,0.15);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255,255,255,0.2);
        border-radius: 50%; color: white;
        display: flex; align-items: center; justify-content: center;
        font-size: 0.9rem; cursor: pointer;
        transition: all 0.2s;
    }
    .carousel-ctrl:hover {
        background: rgba(255,255,255,0.28);
        border-color: rgba(255,255,255,0.35);
        transform: translateY(-50%) scale(1.08);
    }
    .carousel-ctrl.prev { left: 16px; }
    .carousel-ctrl.next { right: 16px; }

    .dot-wrap {
        position: absolute; bottom: 14px;
        left: 50%; transform: translateX(-50%);
        z-index: 3; display: flex; gap: 6px; align-items: center;
    }
    .dot-btn {
        width: 8px; height: 8px;
        border-radius: 4px; border: none;
        background: rgba(255,255,255,0.5); padding: 0;
        cursor: pointer; transition: all 0.25s;
    }
    .dot-btn.active {
        width: 24px; background: white; opacity: 1;
    }

    /* ── STATS ROW ── */
    .stats-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 14px;
        margin-bottom: 28px;
    }

    .stat-chip {
        background: rgba(255,255,255,0.92);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.85);
        border-radius: 14px;
        padding: 16px;
        display: flex; align-items: center; gap: 12px;
        box-shadow: 0 2px 10px rgba(27,58,107,0.07);
        transition: all 0.22s;
    }
    .stat-chip:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(27,58,107,0.12);
    }

    .stat-chip-icon {
        width: 44px; height: 44px; border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.2rem; flex-shrink: 0;
    }

    .stat-chip-val {
        font-size: 1.2rem; font-weight: 800; color: var(--biru); line-height: 1.1;
    }
    .stat-chip-lbl { font-size: 0.68rem; color: var(--muted); margin-top: 2px; }

    /* ── SECTION LABEL ── */
    .section-label {
        font-size: 0.67rem; font-weight: 700;
        letter-spacing: 2.5px; text-transform: uppercase;
        color: var(--muted); margin-bottom: 16px;
        display: flex; align-items: center; gap: 12px;
    }
    .section-label::after {
        content: ''; flex: 1; height: 1px; background: var(--border);
    }

    /* ── MENU CARDS ── */
    .menu-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    .menu-card {
        background: rgba(255,255,255,0.92);
        backdrop-filter: blur(10px);
        border: 1.5px solid rgba(255,255,255,0.85);
        border-radius: 18px;
        text-decoration: none; color: var(--text);
        display: flex; flex-direction: column;
        align-items: center; justify-content: center;
        padding: 32px 16px; gap: 14px;
        text-align: center; min-height: 150px;
        box-shadow: 0 2px 10px rgba(27,58,107,0.07);
        transition: all 0.24s cubic-bezier(.4,0,.2,1);
        position: relative; overflow: hidden;
    }

    /* Garis aksen bawah */
    .menu-card::after {
        content: '';
        position: absolute; bottom: 0; left: 0; right: 0;
        height: 3px;
        background: linear-gradient(90deg, var(--biru), var(--biru-muda));
        transform: scaleX(0); transform-origin: left;
        transition: transform 0.28s cubic-bezier(.4,0,.2,1);
    }

    .menu-card:hover {
        border-color: rgba(27,58,107,0.15);
        box-shadow:
            0 10px 30px rgba(27,58,107,0.14),
            0 2px 8px rgba(27,58,107,0.06);
        transform: translateY(-5px);
        color: var(--text);
    }
    .menu-card:hover::after { transform: scaleX(1); }

    .mc-icon {
        width: 60px; height: 60px;
        background: var(--biru-light);
        border-radius: 16px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.6rem; color: var(--biru-muda);
        transition: all 0.24s cubic-bezier(.4,0,.2,1);
    }
    .menu-card:hover .mc-icon {
        background: var(--biru);
        color: white;
        transform: scale(1.1) rotate(-5deg);
        box-shadow: 0 6px 20px rgba(27,58,107,0.3);
    }

    .mc-label {
        font-size: 0.83rem; font-weight: 700;
        color: var(--text); line-height: 1.4;
        transition: color 0.2s;
    }
    .menu-card:hover .mc-label { color: var(--biru); }

    /* ── RESPONSIVE ── */
    @media (max-width: 900px) {
        .stats-row { grid-template-columns: repeat(2, 1fr); }
        .menu-grid { grid-template-columns: repeat(2, 1fr); }
        .banner-slide { height: 220px; }
    }

    @media (max-width: 576px) {
        .stats-row { grid-template-columns: repeat(2, 1fr); gap: 10px; }
        .menu-grid { grid-template-columns: repeat(2, 1fr); gap: 10px; }
        .banner-slide { height: 180px; }
        .menu-card { padding: 22px 12px; min-height: 120px; }
        .mc-icon { width: 48px; height: 48px; font-size: 1.3rem; }
    }
</style>
@endpush

@section('main-content')

    {{-- ══ BANNER ══ --}}
    <div class="banner-wrap">
        <div id="myCarousel" class="carousel slide"
             data-bs-ride="carousel" data-bs-interval="4500">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="banner-slide"
                         style="background-image: url('/images/banner1.jpg');">
                        <div class="banner-caption">
                            <div class="banner-badge">📢 Pengumuman</div>
                            <h5>Sensus Ekonomi 2026</h5>
                            <p>Mari Kita Sukseskan Sensus Ekonomi 2026 - Mencatat Ekonomi Indonesia</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="banner-slide"
                         style="background-image: url('/images/banner2.jpg');">
                        <div class="banner-caption">
                            <div class="banner-badge">📊 Statistik</div>
                            <h5>IPM Kabupaten Kuningan 2024</h5>
                            <p>Indeks Pembangunan Manusia mencapai 68,54 - terus meningkat setiap tahun</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="banner-slide"
                         style="background-image: url('/images/banner3.jpg');">
                        <div class="banner-caption">
                            <div class="banner-badge">👥 Kependudukan</div>
                            <h5>Penduduk Kuningan 2024</h5>
                            <p>Jumlah penduduk Kabupaten Kuningan sebanyak 1.132.543 jiwa</p>
                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-ctrl prev"
                    data-bs-target="#myCarousel" data-bs-slide="prev">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="carousel-ctrl next"
                    data-bs-target="#myCarousel" data-bs-slide="next">
                <i class="bi bi-chevron-right"></i>
            </button>

            <div class="dot-wrap">
                <button class="dot-btn active" data-bs-target="#myCarousel" data-bs-slide-to="0"></button>
                <button class="dot-btn" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
                <button class="dot-btn" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
            </div>
        </div>
    </div>

    
    {{-- ══ MENU UTAMA ══ --}}
    <div class="section-label">Menu Utama</div>

    <div class="menu-grid">

        <a href="{{ route('beranda') }}" class="menu-card">
            <div class="mc-icon"><i class="bi bi-house-fill"></i></div>
            <div class="mc-label">Beranda</div>
        </a>

        <a href="{{ route('indikator') }}" class="menu-card">
            <div class="mc-icon"><i class="bi bi-bar-chart-fill"></i></div>
            <div class="mc-label">Indikator Statistik</div>
        </a>

        <a href="{{ route('seputar-kuningan') }}" class="menu-card">
            <div class="mc-icon"><i class="bi bi-file-text-fill"></i></div>
            <div class="mc-label">Seputar Kuningan</div>
        </a>

        <a href="{{ route('pariwisata') }}" class="menu-card">
            <div class="mc-icon"><i class="bi bi-image-fill"></i></div>
            <div class="mc-label">Pariwisata</div>
        </a>

        <a href="{{ route('link-seputar') }}" class="menu-card">
            <div class="mc-icon"><i class="bi bi-box-arrow-up-right"></i></div>
            <div class="mc-label">Link Seputar Kuningan</div>
        </a>

        <a href="{{ route('media-sosial') }}" class="menu-card">
            <div class="mc-icon"><i class="bi bi-share-fill"></i></div>
            <div class="mc-label">Media Sosial BPS</div>
        </a>

    </div>

@endsection