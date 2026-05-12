@extends('layouts.page')
@section('title', 'Wisata Alam')
@section('page-title', 'Wisata Alam')

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

    /* Fallback kalau foto belum ada */
    .wisata-thumb-fallback {
        width: 100%; height: 170px;
        display: flex; align-items: center; justify-content: center;
        font-size: 4rem;
        flex-shrink: 0;
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
        <div class="val">19</div>
        <div class="lbl">Destinasi Alam</div>
    </div>
    <div class="wisata-stat">
        <div class="val">3.078</div>
        <div class="lbl">mdpl G. Ciremai</div>
    </div>
    <div class="wisata-stat">
        <div class="val">Rp2rb</div>
        <div class="lbl">Tiket Termurah</div>
    </div>
</div>
<div class="row g-3">

    @php
    $wisata = [
        [
            'no'      => 1,
            'nama'    => 'Telaga Remis',
            'lokasi'  => 'Desa Kaduela, Kec. Pasawahan — ±37 km dari Kuningan',
            'foto'    => '/images/wisata/telaga-remis.jpg',
            'emoji'   => '🌊',
            'tiket'   => 'Rp 10.000 – 15.000',
            'bg'      => 'linear-gradient(135deg,#0369a1,#0ea5e9)',
            'desc'    => 'Perpaduan pesona alam pegunungan hutan dengan air talaga yang jernih dan bening laksana kaca, didukung udara pegunungan yang sejuk. Akses mudah dengan kendaraan roda dua maupun empat.',
            'tags'    => ['🚤 Perahu Motor','🚲 Sepeda Air','🏕️ Saung','🕌 Musholla','🚿 MCK'],
        ],
        [
            'no'      => 2,
            'nama'    => 'Telaga Biru Ciceureum',
            'lokasi'  => 'Desa Kaduela, Kec. Pasawahan — ±37 km dari Kuningan',
            'foto'    => '/images/wisata/telaga-biru-cicerem.jpg',
            'emoji'   => '💙',
            'tiket'   => 'Rp 5.000 – 10.000/kendaraan',
            'bg'      => 'linear-gradient(135deg,#0c4a6e,#0284c7)',
            'desc'    => 'Telaga dengan air sebening kaca berwarna biru kehijauan. Tersedia ayunan gantung di atas pohon menghadap telaga. Di bawah ayunan terlihat ikan emas warna-warni. Tiket dihitung per kendaraan.',
            'tags'    => ['🐠 Ikan Warna-warni','🌳 Ayunan Pohon','📸 Spot Foto'],
        ],
        [
            'no'      => 3,
            'nama'    => 'Kebun Raya Kuningan',
            'lokasi'  => 'Desa Padabeunghar, Kec. Pasawahan — Kuningan',
            'foto'    => '/images/wisata/kebun-raya-kuningan.jpg',
            'emoji'   => '🌿',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#14532d,#16a34a)',
            'desc'    => 'Kawasan konservasi tumbuhan sekaligus wisata edukatif. Zona Penelitian, Pendidikan Lingkungan, Rekreasi Aktif, Konservasi, Koleksi Tumbuhan Lokal, Buah-buahan, dan Tumbuhan Dunia. Akses via Dukupuntang atau Pasawahan.',
            'tags'    => ['🔬 Riset','🌱 Konservasi','📚 Edukasi','🍎 Kebun Buah'],
        ],
        [
            'no'      => 4,
            'nama'    => 'Linggarjati',
            'lokasi'  => 'Kec. Cilimus — Kuningan',
            'foto'    => '/images/wisata/linggarjati.jpg',
            'emoji'   => '🏛️',
            'tiket'   => 'Rp 2.000',
            'bg'      => 'linear-gradient(135deg,#1B3A6B,#2563EB)',
            'desc'    => 'Di Gedung Perundingan Linggarjati, pengunjung dapat menyaksikan bangunan serta furnitur asli yang digunakan para delegasi Indonesia dan Belanda. Tersedia foto-foto pelaksanaan Perundingan Linggarjati di sepanjang dinding.',
            'tags'    => ['📜 Bersejarah','🏛️ Museum','📸 Galeri Foto'],
        ],
        [
            'no'      => 5,
            'nama'    => 'Sukageuri View',
            'lokasi'  => 'Jl. Palutungan, Desa Cisantana, Kec. Cigugur',
            'foto'    => '/images/wisata/sukageuri-view.jpg',
            'emoji'   => '🌄',
            'tiket'   => 'Rp 10.000',
            'bg'      => 'linear-gradient(135deg,#7c3aed,#6d28d9)',
            'desc'    => 'Destinasi wisata dengan panorama alam yang menakjubkan, fasilitas lengkap dan spot foto yang super instagramable. Cocok untuk camping dengan pemandangan Gunung Ciremai.',
            'tags'    => ['📸 Spot Foto','🌅 Panorama','⛺ Camping'],
        ],
        [
            'no'      => 6,
            'nama'    => 'Curug Bangkong',
            'lokasi'  => 'Desa Kertawirama, Kec. Nusaherang — ±12 km dari Kuningan',
            'foto'    => '/images/wisata/curug-bangkong.jpg',
            'emoji'   => '🌊',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#155e75,#0891b2)',
            'desc'    => 'Air terjun setinggi 23 meter dengan debit air deras. Di bawahnya terdapat kolam besar untuk berenang. Di balik air terjun ada gua yang dikeramatkan. Nama "Bangkong" (kodok) berasal dari legenda pertapa setempat.',
            'tags'    => ['💦 Tinggi 23m','🏊 Kolam Renang','🪨 Gua Keramat'],
        ],
        [
            'no'      => 7,
            'nama'    => 'Hutan Kota Bungkirit',
            'lokasi'  => '±2 km dari Alun-alun Kuningan',
            'foto'    => '/images/wisata/hutan-bungkirit.jpg',
            'emoji'   => '🌳',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#166534,#15803d)',
            'desc'    => 'Taman dan hutan kota dengan jaringan jalan setapak, jembatan besi panjang di area berlereng dan persawahan. Tersedia sarana bermain anak, gazebo, toilet dan mushola. Cocok untuk olahraga dan rekreasi keluarga.',
            'tags'    => ['🌉 Jembatan Besi','🎠 Area Bermain','⛩️ Gazebo','🕌 Mushola'],
        ],
        [
            'no'      => 8,
            'nama'    => 'Curug Putri Palutungan',
            'lokasi'  => 'Kec. Cigugur — ±10 km dari Kuningan',
            'foto'    => '/images/wisata/curug-putri.jpg',
            'emoji'   => '💦',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#0369a1,#0284c7)',
            'desc'    => 'Kawasan hutan dan air terjun di kaki Gunung Ciremai. Perpaduan pesona alam pegunungan dengan air terjun yang jernih dan udara sejuk. Tersedia rafting, camping area, saung, shelter, MCK dan musholla.',
            'tags'    => ['🚣 Rafting','⛺ Camping','🏕️ Saung','🕌 Musholla'],
        ],
        [
            'no'      => 9,
            'nama'    => 'Cibulan',
            'lokasi'  => 'Desa Manis Kidul, Kec. Jalaksana — Kuningan',
            'foto'    => '/images/wisata/cibulan.jpg',
            'emoji'   => '🐠',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#0c4a6e,#0369a1)',
            'desc'    => 'Kolam renang alami dengan ikan-ikan keramat yang dipercaya masyarakat setempat tidak boleh diganggu. Sumber mata air jernih yang menjadi daya tarik wisatawan dari berbagai daerah.',
            'tags'    => ['🐟 Ikan Keramat','🏊 Kolam Alami','💧 Mata Air'],
        ],
        [
            'no'      => 10,
            'nama'    => 'Telaga Nilem',
            'lokasi'  => 'Desa Kaduela, Kec. Pasawahan — Kuningan',
            'foto'    => '/images/wisata/telaga-nilem.jpg',
            'emoji'   => '🌊',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#0369a1,#0ea5e9)',
            'desc'    => 'Telaga alami yang tenang dengan suasana alam yang asri. Berdekatan dengan Telaga Remis dan Telaga Biru Cicerem sehingga bisa dikunjungi dalam satu trip.',
            'tags'    => ['🌊 Telaga Alami','🌿 Udara Segar'],
        ],
        [
            'no'      => 11,
            'nama'    => 'Sitonjul',
            'lokasi'  => 'Dusun Kliwon & Manis, Desa Sangkanhurip, Kec. Cigandamekar',
            'foto'    => '/images/wisata/sitonjul.jpg',
            'emoji'   => '⛰️',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#713f12,#d97706)',
            'desc'    => 'Destinasi wisata alam desa yang menawarkan keindahan alam pedesaan Kuningan dengan suasana tenang dan udara segar khas pegunungan.',
            'tags'    => ['🏡 Wisata Desa','🌾 Alam Pedesaan','🌄 Panorama'],
        ],
        [
            'no'      => 12,
            'nama'    => 'Pemandian Air Panas Subang',
            'lokasi'  => 'Dusun Kliwon, Desa Subang, Kec. Subang — Kuningan',
            'foto'    => '/images/wisata/air-panas-subang.jpg',
            'emoji'   => '♨️',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#7c2d12,#c2410c)',
            'desc'    => 'Pemandian air panas alami yang dipercaya memiliki khasiat untuk kesehatan kulit dan relaksasi otot. Cocok untuk healing setelah lelah beraktivitas.',
            'tags'    => ['♨️ Air Panas','💆 Relaksasi','🏥 Khasiat Kesehatan'],
        ],
        [
            'no'      => 13,
            'nama'    => 'Lembah Cilengkrang',
            'lokasi'  => 'Desa Pajambon, Kec. Karamatmulya — Kuningan',
            'foto'    => '/images/wisata/lembah-cilengkrang.jpg',
            'emoji'   => '🏞️',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#14532d,#15803d)',
            'desc'    => 'Hidden gem berupa lembah hijau yang menjadi primadona baru wisata alam Kuningan. Cocok untuk hiking dengan pemandangan alam yang memesona sepanjang perjalanan.',
            'tags'    => ['🥾 Hiking','🌿 Hidden Gem','📸 Spot Foto'],
        ],
        [
            'no'      => 14,
            'nama'    => 'Curug Sidomba',
            'lokasi'  => 'Jl. Sidomba No.1, Desa Peusing, Kec. Jalaksana',
            'foto'    => '/images/wisata/curug-sidomba.jpg',
            'emoji'   => '💦',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#155e75,#0e7490)',
            'desc'    => 'Air terjun mini yang unik dengan kolam alami di bawahnya. Memiliki cerita mitos yang menarik dari masyarakat sekitar. Cocok untuk refreshing bersama keluarga.',
            'tags'    => ['💦 Air Terjun','🏊 Kolam Alami','🌿 Asri'],
        ],
        [
            'no'      => 15,
            'nama'    => 'Balong Dalem',
            'lokasi'  => 'Desa Babakanmulya, Kec. Jalaksana — Kuningan',
            'foto'    => '/images/wisata/balong-dalem.jpg',
            'emoji'   => '💧',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#1e40af,#2563eb)',
            'desc'    => 'Kolam alami bersejarah yang jernih dengan suasana alam yang sejuk dan asri. Memiliki nilai historis bagi masyarakat Kuningan dan menjadi destinasi wisata sejarah yang indah.',
            'tags'    => ['💧 Kolam Alami','🏛️ Bersejarah','🌿 Sejuk'],
        ],
        [
            'no'      => 16,
            'nama'    => 'Bumi Perkemahan Palutungan',
            'lokasi'  => 'Desa Cisantana, Kec. Cigugur — Kuningan',
            'foto'    => '/images/wisata/buper-palutungan.jpg',
            'emoji'   => '⛺',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#1a2e05,#365314)',
            'desc'    => 'Bumi perkemahan di kaki Gunung Ciremai dengan atmosfer romantis alam terbuka. Cocok untuk kegiatan pramuka, camping keluarga maupun komunitas. Udara sejuk dan pemandangan khas pegunungan.',
            'tags'    => ['⛺ Camping','🏕️ Bumi Perkemahan','🌲 Pinus','🏔️ Gunung Ciremai'],
        ],
        [
            'no'      => 17,
            'nama'    => 'Bumi Perkemahan Paniis',
            'lokasi'  => 'Desa Singkup, Kec. Pasawahan — Kuningan',
            'foto'    => '/images/wisata/buper-paniis.jpg',
            'emoji'   => '🏕️',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#1c4532,#276749)',
            'desc'    => 'Area bumi perkemahan yang asri di kawasan Pasawahan. Cocok untuk kegiatan outdoor, team building, dan menikmati suasana alam terbuka yang segar.',
            'tags'    => ['🏕️ Camping','🌳 Alam Terbuka','🤝 Team Building'],
        ],
        [
            'no'      => 18,
            'nama'    => 'Cigugur',
            'lokasi'  => 'Desa Cigugur, Kec. Cigugur — Kuningan',
            'foto'    => '/images/wisata/cigugur.jpg',
            'emoji'   => '🌄',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#1B3A6B,#3b82f6)',
            'desc'    => 'Kawasan wisata alam di kaki Gunung Ciremai dengan udara yang sejuk dan pemandangan indah. Cigugur juga dikenal sebagai pusat kebudayaan Sunda Wiwitan dengan berbagai ritual adat.',
            'tags'    => ['🌄 Panorama','🎭 Budaya','🕌 Sunda Wiwitan'],
        ],
        [
            'no'      => 19,
            'nama'    => 'Curug Landung',
            'lokasi'  => 'Desa Cisantana, Kec. Cigugur — Kuningan',
            'foto'    => '/images/wisata/curug-landung.jpg',
            'emoji'   => '🌊',
            'tiket'   => null,
            'bg'      => 'linear-gradient(135deg,#0c4a6e,#0369a1)',
            'desc'    => 'Air terjun kekinian yang sedang hits di kalangan wisatawan. Menawarkan keindahan alam yang memesona dengan suasana hutan tropis yang asri di sekitarnya.',
            'tags'    => ['🌊 Air Terjun','🌿 Hutan Tropis','📸 Instagramable'],
        ],
    ];
    @endphp

    @foreach($wisata as $w)
    <div class="col-md-6">
        <div class="wisata-card">

            {{-- Thumbnail foto --}}
            <div class="wisata-thumb" style="{{ !$w['foto'] ? 'display:none;' : '' }}">
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

            {{-- Fallback jika foto belum tersedia --}}
            <div class="wisata-thumb-fallback"
                 style="background: {{ $w['bg'] }}; display: none; position:relative;">
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