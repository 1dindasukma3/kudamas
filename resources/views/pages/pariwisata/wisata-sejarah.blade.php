@extends('layouts.page')
@section('title', 'Wisata Sejarah & Religi')
@section('page-title', 'Wisata Sejarah & Religi')

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
        <div class="val">2</div>
        <div class="lbl">Wisata Sejarah</div>
    </div>
    <div class="wisata-stat">
        <div class="val">1946</div>
        <div class="lbl">Tahun Perundingan</div>
    </div>
    <div class="wisata-stat">
        <div class="val">661</div>
        <div class="lbl">mdpl Cipari</div>
    </div>
</div>

{{--
    Simpan foto di: public/images/sejarah/
    File yang dibutuhkan:
    - linggarjati.jpg
    - cipari.jpg
--}}

<div class="row g-3">

    @php
    $wisata = [
        [
            'no'     => 1,
            'nama'   => 'Gedung Perundingan Linggarjati',
            'lokasi' => 'Desa Linggajati, Kec. Cilimus, Kab. Kuningan',
            'foto'   => '/images/sejarah/linggarjati.jpg',
            'emoji'  => '🏛️',
            'bg'     => 'linear-gradient(135deg,#1B3A6B,#1e40af)',
            'desc'   => 'Gedung Perundingan Linggarjati adalah saksi sejarah tempat diadakannya perundingan antara Republik Indonesia dengan Pemerintah Belanda pasca perang kemerdekaan pada November 1946. Karena tidak memungkinkan perundingan dilakukan di Jakarta maupun Yogyakarta, maka dipilih Linggajati sebagai jalan tengah. Pada Minggu 10 November 1946, Lord Killearn tiba di Cirebon menumpang kapal fregat Inggris H.M.S. Veryan Bay. Delegasi Belanda datang dari Jakarta menggunakan kapal terbang "Catalina" dan menginap di kapal perang "Banckert". Delegasi Indonesia dipimpin Sjahrir, sementara Presiden Soekarno dan Wakil Presiden Hatta menginap di kediaman Bupati Kuningan. Kedua delegasi mengadakan perundingan pada 11–12 November 1946 yang ditengahi Lord Killearn dari Inggris.',
            'tags'   => ['🏛️ Cagar Budaya','📜 1946','🇮🇩 Kemerdekaan','🤝 Perundingan','🌍 Sejarah Dunia'],
        ],
        [
            'no'     => 2,
            'nama'   => 'Taman Purbakala Cipari',
            'lokasi' => 'Kampung Cipari, Desa Cigugur, Kec. Cigugur — ±4 km dari Kota Kuningan, 661 mdpl',
            'foto'   => '/images/sejarah/cipari.jpg',
            'emoji'  => '🗿',
            'bg'     => 'linear-gradient(135deg,#713f12,#92400e)',
            'desc'   => 'Situs Purbakala Cipari merupakan peninggalan megalitik yang berada di kaki Gunung Ciremai, Kabupaten Kuningan. Situs ini diduga sebagai desa permukiman purbakala dengan karakteristik peninggalan bangunan megalitik seperti kubur batu dan menhir. Terletak pada ketinggian 661 meter dari permukaan laut dan berjarak sekitar empat kilometer dari Kota Kuningan. Penemuan situs ini menjadi bukti nyata bahwa wilayah Kuningan telah dihuni sejak ribuan tahun silam oleh manusia yang telah mencapai tingkat kebudayaan relatif maju.',
            'tags'   => ['🗿 Megalitik','⛏️ Purbakala','🏔️ Kaki Ciremai','🪨 Kubur Batu','🏛️ Menhir'],
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
            </div>

            <div class="wisata-thumb-fallback"
                 style="background: {{ $w['bg'] }}; display: none;">
                <span style="font-size:3.5rem;">{{ $w['emoji'] }}</span>
                <span class="badge-num">{{ $w['no'] }}</span>
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