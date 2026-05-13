@extends('layouts.page')
@section('title', 'Wisata Kuliner')
@section('page-title', 'Wisata Kuliner')

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

    .badge-num {
        position: absolute; top: 10px; left: 10px;
        background: rgba(27,58,107,0.88);
        backdrop-filter: blur(4px);
        color: white; font-size: 0.7rem; font-weight: 800;
        width: 28px; height: 28px; border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        z-index: 2;
    }

    .badge-harga {
        position: absolute; bottom: 10px; right: 10px;
        background: rgba(22,163,74,0.92);
        backdrop-filter: blur(4px);
        color: white; font-size: 0.67rem; font-weight: 700;
        padding: 3px 10px; border-radius: 99px;
        z-index: 2;
    }

    .wisata-body { padding: 14px; flex: 1; display: flex; flex-direction: column; }
    .wisata-name { font-weight: 800; font-size: 0.9rem; color: var(--biru); margin-bottom: 5px; line-height: 1.3; }
    .wisata-loc { font-size: 0.72rem; color: var(--muted); display: flex; align-items: flex-start; gap: 4px; margin-bottom: 8px; line-height: 1.4; }
    .wisata-loc i { margin-top: 2px; flex-shrink: 0; color: var(--biru-muda); }
    .wisata-desc { font-size: 0.79rem; color: #475569; line-height: 1.6; flex: 1; text-align: justify; }

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
        <div class="val">3</div>
        <div class="lbl">Kuliner Khas</div>
    </div>
    <div class="wisata-stat">
        <div class="val">Rp500</div>
        <div class="lbl">Harga Termurah</div>
    </div>
    <div class="wisata-stat">
        <div class="val">3</div>
        <div class="lbl">Lokasi Tersebar</div>
    </div>
</div>

{{--
    Simpan foto di: public/images/kuliner/
    File yang dibutuhkan:
    - tahu-kopeci.jpg
    - rujak-kangkung.jpg
    - nasi-kasreng.jpg
--}}

<div class="row g-3">

    @php
    $kuliner = [
        [
            'no'     => 1,
            'nama'   => 'Tahu Kopeci',
            'lokasi' => 'Tersebar di seluruh wilayah Kab. Kuningan — Oleh-oleh khas',
            'foto'   => '/images/kuliner/tahu-kopeci.jpg',
            'emoji'  => '🍢',
            'harga'  => 'Rp 500/biji',
            'bg'     => 'linear-gradient(135deg,#713f12,#d97706)',
            'desc'   => 'Tahu Kuningan berukuran kecil dan berwarna cokelat di bagian luarnya dengan cita rasa kedelai yang masih sangat kental. Sangat cocok dinikmati bersamaan dengan cabai rawit. Rasanya gurih dan empuk, harganya pun sangat terjangkau hanya Rp 500 per buah. Jika dibeli dalam jumlah banyak, Tahu Kopeci dibungkus dengan tempat khusus dari bambu. Sebagai pelengkap, pedagang juga menyediakan lontong dan susu kedelai. Gigitan pertama terasa renyah di luar, kemudian gurih dan lembut di dalam. Mengingat rasanya yang lezat, Tahu Kopeci kerap dijadikan oleh-oleh khas Kuningan.',
            'tags'   => ['🍢 Tahu Khas','🌶️ Pedas Gurih','🎁 Oleh-oleh','🥛 Susu Kedelai','🌿 Kedelai Asli'],
        ],
        [
            'no'     => 2,
            'nama'   => 'Rujak Kangkung dan Tutut',
            'lokasi' => 'Jl. RE Martadinata No.111, Cipang, Kec. Kuningan, Jawa Barat 45514',
            'foto'   => '/images/kuliner/rujak-kangkung.jpeg',
            'emoji'  => '🥗',
            'harga'  => null,
            'bg'     => 'linear-gradient(135deg,#166534,#15803d)',
            'desc'   => 'Kuliner rujak kangkung dan tutut diolah secara sederhana dan cepat, bahan pokoknya pun sangat mudah didapat. Namun tidak semua orang bisa meraciknya dengan bumbu yang pas dan menggigit lidah, sehingga banyak orang yang penasaran dan ingin mencoba meraciknya sendiri di rumah. Sajian unik ini memadukan kangkung segar dengan tutut (keong sawah) dalam balutan bumbu rujak yang khas.',
            'tags'   => ['🥗 Rujak Khas','🐚 Tutut','🌿 Kangkung','🌶️ Bumbu Pedas'],
        ],
        [
            'no'     => 3,
            'nama'   => 'Nasi Kasreng',
            'lokasi' => 'Desa Luragung Tonggoh, Kec. Luragung, Kab. Kuningan',
            'foto'   => '/images/kuliner/nasi-kasreng.webp',
            'emoji'  => '🍚',
            'harga'  => null,
            'bg'     => 'linear-gradient(135deg,#7c2d12,#c2410c)',
            'desc'   => 'Nasi Kasreng adalah sajian kuliner khas daerah Kuningan Timur yang seringkali menjadi menu makan bagi kalangan masyarakat menengah ke bawah. Salah satu kuliner Nasi Kasreng yang paling banyak dikunjungi berada di Desa Luragung Tonggoh, Kecamatan Luragung. Nama "Kasreng" merupakan perpaduan antara pedagang yang pada waktu itu juga berjualan gorengan. Nasi dan gorengan tersebut dilengkapi dengan tauge mentah, rebon, dan sambal.',
            'tags'   => ['🍚 Nasi Khas','🌶️ Sambal','🫘 Tauge','🦐 Rebon','🍟 Gorengan'],
        ],
    ];
    @endphp

    @foreach($kuliner as $k)
    <div class="col-md-6">
        <div class="wisata-card">

            <div class="wisata-thumb">
                <img src="{{ $k['foto'] }}"
                     alt="{{ $k['nama'] }}"
                     onerror="
                        this.parentElement.style.display='none';
                        this.parentElement.nextElementSibling.style.display='flex';
                     ">
                <span class="badge-num">{{ $k['no'] }}</span>
                @if($k['harga'])
                    <span class="badge-harga">{{ $k['harga'] }}</span>
                @endif
            </div>

            <div class="wisata-thumb-fallback"
                 style="background: {{ $k['bg'] }}; display: none;">
                <span style="font-size:3.5rem;">{{ $k['emoji'] }}</span>
                <span class="badge-num">{{ $k['no'] }}</span>
                @if($k['harga'])
                    <span class="badge-harga">{{ $k['harga'] }}</span>
                @endif
            </div>

            <div class="wisata-body">
                <div class="wisata-name">{{ $k['nama'] }}</div>
                <div class="wisata-loc">
                    <i class="bi bi-geo-alt-fill"></i>
                    {{ $k['lokasi'] }}
                </div>
                <div class="wisata-desc">{{ $k['desc'] }}</div>
                <div class="wisata-tags">
                    @foreach($k['tags'] as $tag)
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