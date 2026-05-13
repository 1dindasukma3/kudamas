@extends('layouts.page')
@section('title', 'Seni Budaya')
@section('page-title', 'Seni Budaya')

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

    .wisata-body { padding: 14px; flex: 1; display: flex; flex-direction: column; }
    .wisata-name { font-weight: 800; font-size: 0.9rem; color: var(--biru); margin-bottom: 5px; line-height: 1.3; }
    .wisata-loc { font-size: 0.72rem; color: var(--muted); display: flex; align-items: flex-start; gap: 4px; margin-bottom: 8px; line-height: 1.4; }
    .wisata-loc i { margin-top: 2px; flex-shrink: 0; color: var(--biru-muda); }
    .wisata-desc { font-size: 0.79rem; color: #475569; line-height: 1.55; flex: 1; text-align: justify; }

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
        <div class="val">5</div>
        <div class="lbl">Seni Budaya</div>
    </div>
    <div class="wisata-stat">
        <div class="val">3</div>
        <div class="lbl">Upacara Adat</div>
    </div>
    <div class="wisata-stat">
        <div class="val">2</div>
        <div class="lbl">Seni Pertunjukan</div>
    </div>
</div>

{{--
    Simpan foto di: public/images/seni/
    File yang dibutuhkan:
    - seren-taun.jpg
    - sapton.jpg
    - cingcowong.jpg
    - kawin-cai.jpg
    - pesta-dadung.jpg
--}}

<div class="row g-3">

    @php
    $seni = [
        [
            'no'    => 1,
            'nama'  => 'Seren Taun',
            'lokasi'=> 'Pendopo Paseban Tri Panca Tunggal, Cigugur, Kab. Kuningan',
            'foto'  => '/images/seni/seren-taun.jpg',
            'emoji' => '🌾',
            'bg'    => 'linear-gradient(135deg,#713f12,#d97706)',
            'desc'  => 'Upacara adat panen padi masyarakat Sunda khususnya di Cigugur yang dilakukan setiap tahun. Penyelenggaraan dimulai dengan upacara Ngajayuk (Menyambut) pada tanggal 18 Rayagung, kemudian dilanjutkan pada tanggal 22 Rayagung bulan akhir pada sistem penanggalan Sunda. Acara dipusatkan di Pendopo Paseban Tri Panca Tunggal peninggalan Pangeran Djatikusumah yang didirikan tahun 1840. Ornamen gabah serta hasil bumi mendominasi rangkaian acara dengan pembukaan padi sebagai puncak acara, disertai berbagai kesenian tradisional masyarakat agraris Sunda tempo dulu.',
            'tags'  => ['🌾 Panen Padi','🎭 Upacara Adat','📅 22 Rayagung','🏛️ Paseban'],
        ],
        [
            'no'    => 2,
            'nama'  => 'Seni Budaya Sapton',
            'lokasi'=> 'Digelar setiap Hari Jadi Kuningan, Kab. Kuningan',
            'foto'  => '/images/seni/sapton.jpeg',
            'emoji' => '🐎',
            'bg'    => 'linear-gradient(135deg,#1B3A6B,#2563EB)',
            'desc'  => 'Seni Budaya Sapton digelar pada setiap Hari Jadi Kuningan, setelah upacara ulang tahun dilaksanakan. Para pejabat dan tamu undangan dipersilahkan menyaksikan permainan ketangkasan berkuda ini, dengan peserta para demang/kepala/desa/kuwu.',
            'tags'  => ['🐎 Berkuda','🎪 Ketangkasan','🎉 Hari Jadi','👑 Tradisional'],
        ],
        [
            'no'    => 3,
            'nama'  => 'Seni Budaya Cingcowong',
            'lokasi'=> 'Luragung, Kuningan Bagian Timur, Kab. Kuningan',
            'foto'  => '/images/seni/cingcowong.jpg',
            'emoji' => '🌧️',
            'bg'    => 'linear-gradient(135deg,#0c4a6e,#0369a1)',
            'desc'  => 'Seni budaya Cingcowong berasal dari daerah Luragung, Kuningan Bagian Timur. Kesenian ini digelar saat musim kemarau panjang atau kekeringan karena bertujuan meminta hujan kepada Yang Maha Kuasa. Kegiatan ini mengandung unsur magis yang kuat dan menjadi warisan budaya tak ternilai.',
            'tags'  => ['🌧️ Ritual Hujan','✨ Magis','🌾 Tradisi Agraris','🎭 Luragung'],
        ],
        [
            'no'    => 4,
            'nama'  => 'Seni Budaya Kawin Cai',
            'lokasi'=> 'Desa Babakan Mulya & Manis Kidul, Kec. Jalaksana, Kab. Kuningan',
            'foto'  => '/images/seni/kawin-cai.jpg',
            'emoji' => '💧',
            'bg'    => 'linear-gradient(135deg,#155e75,#0891b2)',
            'desc'  => 'Seni Budaya Kawin Cai digelar setelah panen padi sebagai bentuk syukuran atas keberhasilan dalam mengolah pertanian dengan air yang melimpah. Tradisi unik ini dilaksanakan pada hari Jumat Kliwon oleh masyarakat Desa Babakan Mulya dan Manis Kidul Kecamatan Jalaksana.',
            'tags'  => ['💧 Syukuran Air','🌾 Pasca Panen','📅 Jumat Kliwon','🎭 Jalaksana'],
        ],
        [
            'no'    => 5,
            'nama'  => 'Seni Budaya Pesta Dadung',
            'lokasi'=> 'Desa Cilebak, Kec. Cilebak, Kab. Kuningan',
            'foto'  => '/images/seni/pesta-dadung.jpg',
            'emoji' => '🎊',
            'bg'    => 'linear-gradient(135deg,#166534,#15803d)',
            'desc'  => 'Seni budaya Pesta Dadung berasal dari Desa Cilebak, Kecamatan Cilebak. Merupakan tradisi syukuran para petani kepada Yang Maha Kuasa atas limpahan hasil pertanian yang berlimpah. Tradisi ini menjadi wujud rasa terima kasih masyarakat terhadap alam dan Sang Pencipta.',
            'tags'  => ['🎊 Syukuran','🌾 Hasil Panen','🙏 Tradisi','🎭 Cilebak'],
        ],
    ];
    @endphp

    @foreach($seni as $s)
    <div class="col-md-6">
        <div class="wisata-card">

            <div class="wisata-thumb">
                <img src="{{ $s['foto'] }}"
                     alt="{{ $s['nama'] }}"
                     onerror="
                        this.parentElement.style.display='none';
                        this.parentElement.nextElementSibling.style.display='flex';
                     ">
                <span class="badge-num">{{ $s['no'] }}</span>
            </div>

            <div class="wisata-thumb-fallback"
                 style="background: {{ $s['bg'] }}; display: none;">
                <span style="font-size:3.5rem;">{{ $s['emoji'] }}</span>
                <span class="badge-num">{{ $s['no'] }}</span>
            </div>

            <div class="wisata-body">
                <div class="wisata-name">{{ $s['nama'] }}</div>
                <div class="wisata-loc">
                    <i class="bi bi-geo-alt-fill"></i>
                    {{ $s['lokasi'] }}
                </div>
                <div class="wisata-desc">{{ $s['desc'] }}</div>
                <div class="wisata-tags">
                    @foreach($s['tags'] as $tag)
                        <span class="wisata-tag">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    @endforeach

</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">
    Sumber: Dinas Pariwisata dan Kebudayaan Kabupaten Kuningan
</p>

@endsection