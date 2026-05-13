@extends('layouts.page')
@section('title', 'Wisata Buatan')
@section('page-title', 'Wisata Buatan')

@push('styles')
<style>
    .wisata-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
        margin-bottom: 24px;
    }
    .wisata-stat {
        background: linear-gradient(135deg, #1B3A6B, #2563EB);
        border-radius: 14px; padding: 16px;
        text-align: center; color: white;
    }
    .wisata-stat .val { font-size: 1.6rem; font-weight: 800; line-height: 1.1; }
    .wisata-stat .lbl { font-size: 0.68rem; opacity: 0.8; margin-top: 3px; text-transform: uppercase; letter-spacing: 0.5px; }

    .wisata-card {
        background: white;
        border: 1px solid var(--border);
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.22s cubic-bezier(.4,0,.2,1);
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .wisata-card:hover {
        border-color: rgba(27,58,107,0.2);
        box-shadow: 0 10px 30px rgba(27,58,107,0.13);
        transform: translateY(-4px);
    }

    .wisata-thumb {
        height: 170px;
        position: relative;
        overflow: hidden;
        flex-shrink: 0;
    }
    .wisata-thumb img {
        width: 100%; height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    .wisata-card:hover .wisata-thumb img { transform: scale(1.06); }

    .wisata-thumb-fallback {
        width: 100%; height: 170px;
        display: flex; align-items: center; justify-content: center;
        font-size: 4rem;
        flex-shrink: 0;
        position: relative;
    }

    .badge-tiket {
        position: absolute; bottom: 10px; right: 10px;
        background: rgba(22,163,74,0.92);
        backdrop-filter: blur(4px);
        color: white; font-size: 0.67rem; font-weight: 700;
        padding: 3px 10px; border-radius: 99px;
        z-index: 2;
    }
    .badge-num {
        position: absolute; top: 10px; left: 10px;
        background: rgba(27,58,107,0.88);
        backdrop-filter: blur(4px);
        color: white; font-size: 0.7rem; font-weight: 800;
        width: 28px; height: 28px; border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        z-index: 2;
    }

    .wisata-body { padding: 14px; flex: 1; display: flex; flex-direction: column; }
    .wisata-name { font-weight: 800; font-size: 0.9rem; color: var(--biru); margin-bottom: 5px; line-height: 1.3; }
    .wisata-loc { font-size: 0.72rem; color: var(--muted); display: flex; align-items: flex-start; gap: 4px; margin-bottom: 8px; line-height: 1.4; }
    .wisata-loc i { margin-top: 2px; flex-shrink: 0; color: var(--biru-muda); }
    .wisata-desc { font-size: 0.79rem; color: #475569; line-height: 1.55; flex: 1; }

    .wisata-tags { display: flex; flex-wrap: wrap; gap: 5px; margin-top: 10px; }
    .wisata-tag {
        font-size: 0.63rem; font-weight: 600;
        padding: 2px 8px; border-radius: 99px;
        background: #EFF6FF; color: var(--biru-muda);
    }

    @media (max-width: 576px) {
        .wisata-stats { gap: 8px; }
        .wisata-stat .val { font-size: 1.2rem; }
        .wisata-thumb, .wisata-thumb-fallback { height: 140px; }
    }
</style>
@endpush

@section('page-content')

{{-- STATS --}}
<div class="wisata-stats">
    <div class="wisata-stat">
        <div class="val">11</div>
        <div class="lbl">Destinasi Buatan</div>
    </div>
    <div class="wisata-stat">
        <div class="val">5</div>
        <div class="lbl">Kolam Renang</div>
    </div>
    <div class="wisata-stat">
        <div class="val">3</div>
        <div class="lbl">Taman Rekreasi</div>
    </div>
</div>

{{--
    Simpan foto di: public/images/wisata-buatan/
    Contoh: public/images/wisata-buatan/sangkan-resort.jpg
--}}

<div class="row g-3">

    @php
    $wisata = [
        [
            'no'    => 1,
            'nama'  => 'Sangkan Resort Aqua Park',
            'lokasi'=> 'Jl. Raya Bandorasa No. KM. 12, Bandorasa Wetan, Kec. Cilimus, Kabupaten Kuningan, Jawa Barat 45556',
            'foto'  => '/images/wisata-buatan/sangkan-resort.jpg',
            'emoji' => '🏖️',
            'tiket' => null,
            'bg'    => 'linear-gradient(135deg,#0369a1,#0ea5e9)',
            'desc'  => 'Resort wisata air terpadu yang menawarkan wahana permainan air, kolam renang, serta fasilitas penginapan dengan pemandangan alam pegunungan Kuningan yang asri.',
            'tags'  => ['🏊 Kolam Renang','🎢 Wahana Air','🏨 Resort','🌄 Pegunungan'],
        ],
        [
            'no'    => 2,
            'nama'  => 'Ghifafari Valley',
            'lokasi'=> 'Linggarjati, Kec. Cilimus, Kabupaten Kuningan, Jawa Barat 45556',
            'foto'  => '/images/wisata-buatan/ghifafari-valley.jpg',
            'emoji' => '🌄',
            'tiket' => null,
            'bg'    => 'linear-gradient(135deg,#3b0764,#7e22ce)',
            'desc'  => 'Destinasi wisata dengan konsep valley modern yang memadukan spot foto instagramable, area bermain, dan pemandangan alam Linggarjati yang hijau dan sejuk.',
            'tags'  => ['📸 Spot Foto','🌿 Alam Hijau','🎭 Rekreasi'],
        ],
        [
            'no'    => 3,
            'nama'  => 'Zazam Pool',
            'lokasi'=> 'Jl. Veteran Blok Pakuwon, Desa Manislor, Kec. Jalaksana, Kabupaten Kuningan, Jawa Barat 45556',
            'foto'  => '/images/wisata-buatan/zazam-pool.jpg',
            'emoji' => '🏊',
            'tiket' => null,
            'bg'    => 'linear-gradient(135deg,#0c4a6e,#0284c7)',
            'desc'  => 'Kolam renang modern yang dilengkapi fasilitas lengkap, cocok untuk rekreasi keluarga maupun anak-anak. Berlokasi di kawasan Jalaksana yang mudah diakses.',
            'tags'  => ['🏊 Kolam Renang','👨‍👩‍👧 Keluarga','🎽 Olahraga'],
        ],
        [
            'no'    => 4,
            'nama'  => 'Kolam Renang Grage Sangkan',
            'lokasi'=> 'Jl. Raya Sangkanurip No. 1, Panawuan, Kec. Cigandamekar, Kabupaten Kuningan, Jawa Barat 45556',
            'foto'  => '/images/wisata-buatan/grage-sangkan.jpg',
            'emoji' => '🏊',
            'tiket' => null,
            'bg'    => 'linear-gradient(135deg,#1B3A6B,#2563EB)',
            'desc'  => 'Kolam renang yang memanfaatkan sumber air panas alami Sangkanhurip. Menjadi salah satu destinasi wisata air terpopuler di Kuningan dengan fasilitas yang memadai.',
            'tags'  => ['♨️ Air Panas','🏊 Kolam Renang','👨‍👩‍👧 Keluarga'],
        ],
        [
            'no'    => 5,
            'nama'  => 'The Mountain Rekreasion Park',
            'lokasi'=> 'Perumahan Pesona Alam Kuningan, Jl. Raya Cirendang-Cigugur, Cipari, Kec. Cigugur, Kabupaten Kuningan, Jawa Barat 45518',
            'foto'  => '/images/wisata-buatan/mountain-park.jpg',
            'emoji' => '⛰️',
            'tiket' => null,
            'bg'    => 'linear-gradient(135deg,#14532d,#16a34a)',
            'desc'  => 'Taman rekreasi modern dengan konsep pegunungan yang menawarkan berbagai wahana permainan, area outbound, dan spot foto dengan latar belakang Gunung Ciremai.',
            'tags'  => ['🎢 Wahana','🏕️ Outbound','📸 Spot Foto','🏔️ Gunung Ciremai'],
        ],
        [
            'no'    => 6,
            'nama'  => 'Waduk Darma',
            'lokasi'=> 'Desa Jagara, Kec. Darma, Kabupaten Kuningan',
            'foto'  => '/images/wisata-buatan/waduk-darma.jpg',
            'emoji' => '🌊',
            'tiket' => null,
            'bg'    => 'linear-gradient(135deg,#155e75,#0891b2)',
            'desc'  => 'Waduk buatan seluas 430 Ha yang dimanfaatkan sebagai kawasan wisata air. Menawarkan aktivitas memancing, perahu wisata, dan pemandangan alam yang indah di sekitarnya.',
            'tags'  => ['⛵ Perahu Wisata','🎣 Memancing','🏞️ Panorama','💧 Waduk'],
        ],
        [
            'no'    => 7,
            'nama'  => 'Taman Rekreasi Salsabila',
            'lokasi'=> 'Jl. Panawuan No. 2, Rt.01/Rw.01, Dusun 01, Desa Panawuan, Kec. Cigandamekar, Kabupaten Kuningan',
            'foto'  => '/images/wisata-buatan/salsabila.jpg',
            'emoji' => '🌳',
            'tiket' => null,
            'bg'    => 'linear-gradient(135deg,#166534,#15803d)',
            'desc'  => 'Taman rekreasi keluarga dengan berbagai fasilitas bermain anak, area piknik, dan taman yang terawat. Cocok untuk liburan akhir pekan bersama keluarga.',
            'tags'  => ['🎠 Area Bermain','🧺 Piknik','👨‍👩‍👧 Keluarga','🌿 Taman'],
        ],
        [
            'no'    => 8,
            'nama'  => 'Sangkanhurip Alami',
            'lokasi'=> 'Jl. Pemandian Air Panas Sangkanhurip No. 210, Desa Sangkanhurip, Kec. Cigandamekar, Kabupaten Kuningan',
            'foto'  => '/images/wisata-buatan/sangkanhurip-alami.jpg',
            'emoji' => '♨️',
            'tiket' => null,
            'bg'    => 'linear-gradient(135deg,#7c2d12,#c2410c)',
            'desc'  => 'Kawasan pemandian air panas alami Sangkanhurip yang terkenal dengan khasiat terapeutiknya. Suasana alam yang asri dan udara segar menambah kenyamanan pengunjung.',
            'tags'  => ['♨️ Air Panas Alami','💆 Terapi','🌿 Udara Segar'],
        ],
        [
            'no'    => 9,
            'nama'  => 'Linggarjati Indah',
            'lokasi'=> 'Jl. Linggarjati No. 04, Desa Linggasana, Kec. Cigandamekar, Kabupaten Kuningan',
            'foto'  => '/images/wisata-buatan/linggarjati-indah.jpg',
            'emoji' => '🏡',
            'tiket' => null,
            'bg'    => 'linear-gradient(135deg,#1B3A6B,#3b82f6)',
            'desc'  => 'Kawasan wisata yang memanfaatkan keindahan alam sekitar Linggarjati. Menawarkan suasana pedesaan yang tenang dengan pemandangan kebun dan perbukitan yang hijau.',
            'tags'  => ['🌿 Alam Pedesaan','🏡 Suasana Tenang','🏔️ Perbukitan'],
        ],
        [
            'no'    => 10,
            'nama'  => 'Kolam Renang Sanggariang',
            'lokasi'=> 'Jl. Siliwangi No. 75, Kec. Purwawinangun, Kabupaten Kuningan',
            'foto'  => '/images/wisata-buatan/kolam-sanggariang.jpg',
            'emoji' => '🏊',
            'tiket' => null,
            'bg'    => 'linear-gradient(135deg,#0c4a6e,#0369a1)',
            'desc'  => 'Kolam renang yang berlokasi strategis di kawasan Purwawinangun, mudah diakses dari pusat kota Kuningan. Fasilitas lengkap untuk renang rekreasi maupun olahraga.',
            'tags'  => ['🏊 Kolam Renang','🎽 Olahraga','📍 Lokasi Strategis'],
        ],
        [
            'no'    => 11,
            'nama'  => 'Kolam Renang Tirta Gunung Mas',
            'lokasi'=> 'Jl. Luragung No. 5, Kec. Luragung, Kabupaten Kuningan',
            'foto'  => '/images/wisata-buatan/tirta-gunung-mas.jpg',
            'emoji' => '🏊',
            'tiket' => null,
            'bg'    => 'linear-gradient(135deg,#1e3a5f,#1B3A6B)',
            'desc'  => 'Kolam renang yang terletak di kawasan Luragung, menjadi sarana rekreasi air bagi masyarakat sekitar. Dilengkapi fasilitas ganti pakaian dan area istirahat.',
            'tags'  => ['🏊 Kolam Renang','👨‍👩‍👧 Keluarga','🌿 Sejuk'],
        ],
    ];
    @endphp

    @foreach($wisata as $w)
    <div class="col-md-6">
        <div class="wisata-card">

            <div class="wisata-thumb">
                <img src="{{ $w['foto'] }}"
                     alt="{{ $w['nama'] }}"
                     onerror="
                        this.parentElement.style.display='none';
                        this.parentElement.nextElementSibling.style.display='flex';
                     ">
                <span class="badge-num">{{ $w['no'] }}</span>
                @if($w['tiket'])
                    <span class="badge-tiket">{{ $w['tiket'] }}</span>
                @endif
            </div>

            <div class="wisata-thumb-fallback"
                 style="background: {{ $w['bg'] }}; display: none;">
                <span style="font-size:3.5rem;">{{ $w['emoji'] }}</span>
                <span class="badge-num">{{ $w['no'] }}</span>
                @if($w['tiket'])
                    <span class="badge-tiket">{{ $w['tiket'] }}</span>
                @endif
            </div>

            <div class="wisata-body">
                <div class="wisata-name">{{ $w['nama'] }}</div>
                <div class="wisata-loc">
                    <i class="bi bi-geo-alt-fill"></i>
                    {{ $w['lokasi'] }}
                </div>
                <div class="wisata-desc">{{ $w['desc'] }}</div>
                <div class="wisata-tags">
                    @foreach($w['tags'] as $tag)
                        <span class="wisata-tag">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    @endforeach

</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">
    Sumber: Dinas Pariwisata Kabupaten Kuningan
</p>

@endsection