@extends('layouts.main')

@section('title', 'Menu Utama')

@push('styles')
<style>
    /* ===== BANNER CUSTOM ===== */
    .banner-wrap {
        border-radius: 16px;
        overflow: hidden;
        margin-bottom: 24px;
        box-shadow: 0 4px 20px rgba(27,58,107,0.15);
        position: relative;
        width: 100%;
        background: var(--biru);
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .banner-track {
        position: relative;
        width: 100%;
        height: 320px;
        overflow: hidden;
    }

    .banner-slide-custom {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        -webkit-transition: opacity 0.6s ease;
        transition: opacity 0.6s ease;
    }

    .banner-slide-custom.active {
        opacity: 1;
        z-index: 2;
    }

    .banner-img-custom {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: top center;
        object-position: top center;
        -webkit-flex-shrink: 0;
        flex-shrink: 0;
    }

    .banner-slide-custom::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: -webkit-linear-gradient(
            top,
            rgba(8,18,42,0.1) 0%,
            rgba(8,18,42,0.4) 50%,
            rgba(8,18,42,0.85) 100%
        );
        background: linear-gradient(
            180deg,
            rgba(8,18,42,0.1) 0%,
            rgba(8,18,42,0.4) 50%,
            rgba(8,18,42,0.85) 100%
        );
        z-index: 1;
        pointer-events: none;
    }

    .banner-caption-custom {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: clamp(14px, 4vw, 28px);
        z-index: 2;
    }

    .banner-badge-custom {
        display: inline-block;
        background: var(--kuning);
        color: #1a1a1a;
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        padding: 3px 10px;
        border-radius: 99px;
        margin-bottom: 8px;
    }

    .banner-caption-custom h5 {
        color: white;
        font-weight: 800;
        font-size: clamp(0.95rem, 4vw, 1.35rem);
        margin-bottom: 5px;
        line-height: 1.3;
    }

    .banner-caption-custom p {
        color: rgba(255,255,255,0.9);
        font-size: clamp(0.72rem, 3vw, 0.85rem);
        margin: 0;
        line-height: 1.4;
    }

    .banner-nav-btn {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        z-index: 3;
        width: 40px;
        height: 40px;
        background: rgba(255,255,255,0.2);
        -webkit-backdrop-filter: blur(8px);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255,255,255,0.3);
        border-radius: 50%;
        color: white;
        display: -webkit-flex;
        display: flex;
        -webkit-align-items: center;
        align-items: center;
        -webkit-justify-content: center;
        justify-content: center;
        font-size: 1rem;
        cursor: pointer;
        -webkit-transition: all 0.2s;
        transition: all 0.2s;
        -webkit-appearance: none;
        appearance: none;
    }

    .banner-nav-btn:hover {
        background: rgba(255,255,255,0.35);
        -webkit-transform: translateY(-50%) scale(1.08);
        transform: translateY(-50%) scale(1.08);
    }

    .banner-nav-btn.prev {
        left: 16px;
    }

    .banner-nav-btn.next {
        right: 16px;
    }

    .banner-dots {
        position: absolute;
        bottom: 14px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        z-index: 3;
        display: -webkit-flex;
        display: flex;
        gap: 8px;
        -webkit-align-items: center;
        align-items: center;
    }

    .banner-dot {
        width: 8px;
        height: 8px;
        border-radius: 4px;
        border: none;
        background: rgba(255,255,255,0.5);
        padding: 0;
        cursor: pointer;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        -webkit-appearance: none;
        appearance: none;
    }

    .banner-dot.active {
        width: 24px;
        background: white;
    }

    /* ===== RESPONSIVE BANNER ===== */
    @media (max-width: 768px) {
        .banner-track {
            height: auto;
            overflow: visible;
        }

        .banner-slide-custom {
            position: relative !important;
            top: auto !important;
            left: auto !important;
            width: 100% !important;
            height: auto !important;
            display: none !important;
            opacity: 1 !important;
            -webkit-transition: none !important;
            transition: none !important;
        }

        .banner-slide-custom.active {
            display: -webkit-flex !important;
            display: flex !important;
            -webkit-flex-direction: column !important;
            flex-direction: column !important;
            z-index: auto;
        }

        .banner-img-wrapper {
            position: relative;
            width: 100%;
            padding-bottom: 56%;
            overflow: hidden;
            background: #ffffff;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
        }

        .banner-img-custom {
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            -o-object-fit: contain !important;
            object-fit: contain !important;
            -o-object-position: center center !important;
            object-position: center center !important;
        }

        .banner-slide-custom::after {
            display: none !important;
        }

        .banner-caption-custom {
            position: relative !important;
            bottom: auto !important;
            left: auto !important;
            right: auto !important;
            background: -webkit-linear-gradient(left top, #1B3A6B 0%, #152d54 100%) !important;
            background: linear-gradient(135deg, #1B3A6B 0%, #152d54 100%) !important;
            padding: 14px 16px 20px !important;
            z-index: auto;
        }

        .banner-caption-custom h5 {
            font-size: 1.05rem !important;
            margin-bottom: 4px;
        }

        .banner-caption-custom p {
            font-size: 0.76rem !important;
            line-height: 1.35;
        }

        .banner-nav-btn {
            display: none !important;
        }

        .banner-dots {
            position: relative !important;
            bottom: auto !important;
            left: auto !important;
            -webkit-transform: none !important;
            transform: none !important;
            -webkit-justify-content: center !important;
            justify-content: center !important;
            padding: 10px 0 4px !important;
            background: #152d54 !important;
        }

        .banner-dot {
            background: rgba(255,255,255,0.4) !important;
        }

        .banner-dot.active {
            background: white !important;
        }
    }

    @media (max-width: 480px) {
        .banner-img-wrapper {
            padding-bottom: 62%;
        }

        .banner-caption-custom h5 {
            font-size: 0.95rem !important;
        }

        .banner-caption-custom p {
            font-size: 0.72rem !important;
        }

        .banner-dot {
            width: 6px !important;
            height: 6px !important;
        }

        .banner-dot.active {
            width: 18px !important;
        }
    }

    /* ===== MENU CARDS ===== */
    .section-label {
        font-size: 0.67rem;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: var(--muted);
        margin-bottom: 16px;
        display: -webkit-flex;
        display: flex;
        -webkit-align-items: center;
        align-items: center;
        gap: 12px;
    }

    .section-label::after {
        content: '';
        -webkit-flex: 1;
        flex: 1;
        height: 1px;
        background: var(--border);
    }

    .menu-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    .menu-card {
        background: rgba(255,255,255,0.92);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        border: 1.5px solid rgba(255,255,255,0.85);
        border-radius: 18px;
        text-decoration: none;
        color: var(--text);
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: column;
        flex-direction: column;
        -webkit-align-items: center;
        align-items: center;
        -webkit-justify-content: center;
        justify-content: center;
        padding: 32px 16px;
        gap: 14px;
        text-align: center;
        min-height: 150px;
        box-shadow: 0 2px 10px rgba(27,58,107,0.07);
        -webkit-transition: all 0.24s cubic-bezier(.4,0,.2,1);
        transition: all 0.24s cubic-bezier(.4,0,.2,1);
        position: relative;
        overflow: hidden;
    }

    .menu-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: -webkit-linear-gradient(left, var(--biru), var(--biru-muda));
        background: linear-gradient(90deg, var(--biru), var(--biru-muda));
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transform-origin: left;
        transform-origin: left;
        -webkit-transition: transform 0.28s cubic-bezier(.4,0,.2,1);
        transition: transform 0.28s cubic-bezier(.4,0,.2,1);
    }

    .menu-card:hover {
        border-color: rgba(27,58,107,0.15);
        box-shadow: 0 10px 30px rgba(27,58,107,0.14), 0 2px 8px rgba(27,58,107,0.06);
        -webkit-transform: translateY(-5px);
        transform: translateY(-5px);
        color: var(--text);
    }

    .menu-card:hover::after {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }

    .mc-icon {
        width: 60px;
        height: 60px;
        background: var(--biru-light);
        border-radius: 16px;
        display: -webkit-flex;
        display: flex;
        -webkit-align-items: center;
        align-items: center;
        -webkit-justify-content: center;
        justify-content: center;
        font-size: 1.6rem;
        color: var(--biru-muda);
        -webkit-transition: all 0.24s cubic-bezier(.4,0,.2,1);
        transition: all 0.24s cubic-bezier(.4,0,.2,1);
    }

    .menu-card:hover .mc-icon {
        background: var(--biru);
        color: white;
        -webkit-transform: scale(1.1) rotate(-5deg);
        transform: scale(1.1) rotate(-5deg);
        box-shadow: 0 6px 20px rgba(27,58,107,0.3);
    }

    .mc-label {
        font-size: 0.83rem;
        font-weight: 700;
        color: var(--text);
        line-height: 1.4;
        -webkit-transition: color 0.2s;
        transition: color 0.2s;
    }

    .menu-card:hover .mc-label {
        color: var(--biru);
    }

    @media (max-width: 900px) {
        .menu-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 576px) {
        .menu-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .menu-card {
            padding: 20px 10px;
            min-height: 110px;
            border-radius: 14px;
        }

        .mc-icon {
            width: 44px;
            height: 44px;
            font-size: 1.2rem;
            border-radius: 10px;
        }

        .mc-label {
            font-size: 0.75rem;
        }
    }
</style>
@endpush

@section('main-content')

    <div class="banner-wrap" id="bannerWrap">
        <div class="banner-track">

            {{-- Slide 1 --}}
            <div class="banner-slide-custom active" data-index="0">
                <div class="banner-img-wrapper">
                    <img src="{{ asset('images/banner1.png') }}"
                         alt="Sensus Ekonomi 2026"
                         class="banner-img-custom">
                </div>

                <div class="banner-caption-custom">
                    <div class="banner-badge-custom">📢 Pengumuman</div>
                    <h5>Sensus Ekonomi 2026</h5>
                    <p>Mari sukseskan Sensus Ekonomi 2026 yang akan dilaksanakan pada bulan Juni - Agustus 2026</p>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="banner-slide-custom" data-index="1">
                <div class="banner-img-wrapper">
                    <img src="{{ asset('images/banner2.png') }}"
                         alt="Pelayanan Statistik"
                         class="banner-img-custom">
                </div>

                <div class="banner-caption-custom">
                    <h5>Pelayanan Statistik Terpadu</h5>
                    <p>Pelayanan Statistik Terpadu sebagai pusat informasi data terpercaya</p>
                </div>
            </div>

            {{-- Slide 3 --}}
            <div class="banner-slide-custom" data-index="2">
                <div class="banner-img-wrapper">
                    <img src="{{ asset('images/banner3.png') }}"
                         alt="Kuningan Dalam Angka"
                         class="banner-img-custom">
                </div>

                <div class="banner-caption-custom">
                    <h5>Kuningan Dalam Angka Statistik</h5>
                    <p>Mewujudkan integrasi data daerah yang akurat, transparan, dan mudah diakses</p>
                </div>
            </div>

        </div>

        <button class="banner-nav-btn prev" id="bannerPrev">
            <i class="bi bi-chevron-left"></i>
        </button>

        <button class="banner-nav-btn next" id="bannerNext">
            <i class="bi bi-chevron-right"></i>
        </button>

        <div class="banner-dots">
            <button class="banner-dot active" data-index="0"></button>
            <button class="banner-dot" data-index="1"></button>
            <button class="banner-dot" data-index="2"></button>
        </div>
    </div>

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

@push('scripts')
<script>
    (function() {
        const slides = document.querySelectorAll('.banner-slide-custom');
        const dots = document.querySelectorAll('.banner-dot');
        const prevBtn = document.getElementById('bannerPrev');
        const nextBtn = document.getElementById('bannerNext');

        let currentIndex = 0;
        const totalSlides = slides.length;
        let autoPlayInterval;

        function isMobile() {
            return window.innerWidth <= 768;
        }

        function goToSlide(index) {
            if (index < 0) {
                index = totalSlides - 1;
            }

            if (index >= totalSlides) {
                index = 0;
            }

            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            slides[index].classList.add('active');
            dots[index].classList.add('active');

            currentIndex = index;
        }

        function nextSlide() {
            goToSlide(currentIndex + 1);
        }

        function prevSlide() {
            goToSlide(currentIndex - 1);
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetAutoPlay();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetAutoPlay();
            });
        }

        dots.forEach((dot, idx) => {
            dot.addEventListener('click', () => {
                goToSlide(idx);
                resetAutoPlay();
            });
        });

        function startAutoPlay() {
            autoPlayInterval = setInterval(nextSlide, 4500);
        }

        function resetAutoPlay() {
            clearInterval(autoPlayInterval);
            startAutoPlay();
        }

        let touchStartX = 0;
        let touchEndX = 0;
        const bannerWrap = document.getElementById('bannerWrap');

        if (bannerWrap) {
            bannerWrap.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });

            bannerWrap.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;

                const diff = touchStartX - touchEndX;

                if (Math.abs(diff) > 50) {
                    diff > 0 ? nextSlide() : prevSlide();
                    resetAutoPlay();
                }
            }, { passive: true });
        }

        startAutoPlay();
    })();
</script>
@endpush