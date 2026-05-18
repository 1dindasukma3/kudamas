@extends('layouts.page')
@section('title', 'Hotel dan Penginapan')
@section('page-title', 'Hotel dan Penginapan')

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
    .wisata-name { font-weight: 800; font-size: 0.9rem; color: var(--biru); margin-bottom: 10px; line-height: 1.3; }

    /* Info baris hotel */
    .hotel-info { display: flex; flex-direction: column; gap: 6px; flex: 1; }

    .hotel-info-row {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        font-size: 0.79rem;
        color: #475569;
        line-height: 1.5;
    }

    .hotel-info-row i {
        color: var(--biru-muda);
        font-size: 0.82rem;
        margin-top: 2px;
        flex-shrink: 0;
        width: 14px;
    }

    .hotel-info-row a {
        color: var(--biru-muda);
        text-decoration: none;
    }
    .hotel-info-row a:hover { text-decoration: underline; }

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
        <div class="val">10</div>
        <div class="lbl">Hotel & Villa</div>
    </div>
    <div class="wisata-stat">
        <div class="val">3</div>
        <div class="lbl">Hotel Berbintang</div>
    </div>
    <div class="wisata-stat">
        <div class="val">2</div>
        <div class="lbl">Spa Resort</div>
    </div>
</div>

{{--
    Simpan foto di: public/images/hotel/
    File yang dibutuhkan:
    - grage-sangkan.jpg
    - grand-cordela.jpg
    - tirta-sanita.jpg
    - sangkan-indah.jpg
    - adikarama.jpg
    - ayong.jpg
    - villa-linggajati.jpg
    - mata-air.jpg
    - anugerah-villa.jpg
    - hotel-linggajati.jpg
--}}

<div class="row g-3">

    @php
    $hotel = [
        [
            'no'      => 1,
            'nama'    => 'Grage Sangkan Hotel dan Spa',
            'foto'    => '/images/hotel/grage-sangkan.jpg',
            'emoji'   => '🏨',
            'bg'      => 'linear-gradient(135deg,#1B3A6B,#2563EB)',
            'alamat'  => 'Jl. Raya Sangkanhurip No.1, Desa Sangkanhurip, Kec. Cigandamekar',
            'telp'    => '(0232) 614534',
            'website' => null,
            'email'   => null,
            'tags'    => ['♨️ Spa','🏊 Kolam Renang','🏨 Hotel','🌿 Resort'],
        ],
        [
            'no'      => 2,
            'nama'    => 'Grand Cordela Hotel',
            'foto'    => '/images/hotel/grand-cordela.jpeg',
            'emoji'   => '🏩',
            'bg'      => 'linear-gradient(135deg,#7c3aed,#6d28d9)',
            'alamat'  => 'Jl. Siliwangi No.91, Purwawinangun, Kec. Kuningan, Jawa Barat 45511',
            'telp'    => '(0232) 872272',
            'website' => null,
            'email'   => null,
            'tags'    => ['⭐ Bintang','🏨 Hotel','📍 Pusat Kota'],
        ],
        [
            'no'      => 3,
            'nama'    => 'Tirta Sanita Spa Resort',
            'foto'    => '/images/hotel/tirta-sanita.jpg',
            'emoji'   => '💆',
            'bg'      => 'linear-gradient(135deg,#155e75,#0891b2)',
            'alamat'  => 'Jl. Panawuwan No. 98, Kec. Cigandamekar - Kuningan',
            'telp'    => '(0232) 613061',
            'website' => 'www.tirtasanita.com',
            'email'   => null,
            'tags'    => ['♨️ Spa','🌿 Resort','💆 Relaksasi','🏊 Kolam'],
        ],
        [
            'no'      => 4,
            'nama'    => 'Hotel Sangkan Indah',
            'foto'    => '/images/hotel/sangkan-indah.webp',
            'emoji'   => '🏡',
            'bg'      => 'linear-gradient(135deg,#0c4a6e,#0284c7)',
            'alamat'  => 'Komplek Pemandian Air Panas Alam No.304, Desa Sangkanhurip',
            'telp'    => '(0232) 613191 — 613378',
            'website' => null,
            'email'   => null,
            'tags'    => ['♨️ Air Panas','🏡 Penginapan','🌄 Alam'],
        ],
        [
            'no'      => 5,
            'nama'    => 'Hotel Adikarama',
            'foto'    => '/images/hotel/adikarama.jpg',
            'emoji'   => '🏨',
            'bg'      => 'linear-gradient(135deg,#14532d,#16a34a)',
            'alamat'  => 'Jl. Panawuwan No. 128, Desa Panawuwan, Kec. Cigandamekar - Kuningan',
            'telp'    => '(0232) 613666',
            'website' => null,
            'email'   => null,
            'tags'    => ['🏨 Hotel','🌿 Nyaman','📍 Panawuwan'],
        ],
        [
            'no'      => 6,
            'nama'    => 'Hotel Ayong',
            'foto'    => '/images/hotel/ayong.jpg',
            'emoji'   => '🏠',
            'bg'      => 'linear-gradient(135deg,#1e3a5f,#2563EB)',
            'alamat'  => 'Jl. Linggajati No. 4, Kec. Cilimus',
            'telp'    => '(0232) 613188',
            'website' => null,
            'email'   => null,
            'tags'    => ['🏨 Hotel','🌿 Cilimus','🏔️ Pegunungan'],
        ],
        [
            'no'      => 7,
            'nama'    => 'Villa Linggajati Indah',
            'foto'    => '/images/hotel/villa-linggajati.webp',
            'emoji'   => '🏡',
            'bg'      => 'linear-gradient(135deg,#166534,#15803d)',
            'alamat'  => 'Jl. Linggajati No.4, Desa Linggasana, Kec. Cilimus - Kuningan',
            'telp'    => '(0232) 613188',
            'website' => null,
            'email'   => null,
            'tags'    => ['🏡 Villa','🌿 Asri','🏔️ Pegunungan','🌺 Indah'],
        ],
        [
            'no'      => 8,
            'nama'    => 'Hotel Mata Air',
            'foto'    => '/images/hotel/mata-air.jpg',
            'emoji'   => '💧',
            'bg'      => 'linear-gradient(135deg,#0369a1,#0ea5e9)',
            'alamat'  => 'Jl. Linggajati No.208, Desa Sangkanhurip, Kec. Cigandamekar - Kuningan',
            'telp'    => '(0923) 615131',
            'website' => null,
            'email'   => null,
            'tags'    => ['💧 Mata Air','🏨 Hotel','🌿 Segar'],
        ],
        [
            'no'      => 9,
            'nama'    => 'Anugerah Villa',
            'foto'    => '/images/hotel/anugerah-villa.webp',
            'emoji'   => '🌺',
            'bg'      => 'linear-gradient(135deg,#713f12,#d97706)',
            'alamat'  => 'Jl. Linggasana, Kec. Cilimus - Kuningan',
            'telp'    => '(0232) 613604',
            'website' => null,
            'email'   => 'anugerahvilla@yahoo.com',
            'tags'    => ['🏡 Villa','🌺 Premium','🌿 Cilimus'],
        ],
        [
            'no'      => 10,
            'nama'    => 'Hotel Linggajati',
            'foto'    => '/images/hotel/hotel-linggajati.jpg',
            'emoji'   => '🏛️',
            'bg'      => 'linear-gradient(135deg,#1B3A6B,#1e40af)',
            'alamat'  => 'Jl. Linggarjati, Desa Linggasana, Kec. Cilimus - Kuningan',
            'telp'    => '(0232) 613185',
            'website' => null,
            'email'   => null,
            'tags'    => ['🏨 Hotel','🏛️ Bersejarah','🌿 Cilimus'],
        ],
    ];
    @endphp

    @foreach($hotel as $h)
    <div class="col-md-6">
        <div class="wisata-card">

            <div class="wisata-thumb">
                <img src="{{ $h['foto'] }}"
                     alt="{{ $h['nama'] }}"
                     onerror="
                        this.parentElement.style.display='none';
                        this.parentElement.nextElementSibling.style.display='flex';
                     ">
                <span class="badge-num">{{ $h['no'] }}</span>
            </div>

            <div class="wisata-thumb-fallback"
                 style="background: {{ $h['bg'] }}; display: none;">
                <span style="font-size:3.5rem;">{{ $h['emoji'] }}</span>
                <span class="badge-num">{{ $h['no'] }}</span>
            </div>

            <div class="wisata-body">
                <div class="wisata-name">{{ $h['nama'] }}</div>

                <div class="hotel-info">

                    <div class="hotel-info-row">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>{{ $h['alamat'] }}</span>
                    </div>

                    <div class="hotel-info-row">
                        <i class="bi bi-telephone-fill"></i>
                        <a href="tel:{{ $h['telp'] }}">{{ $h['telp'] }}</a>
                    </div>

                    @if($h['website'])
                    <div class="hotel-info-row">
                        <i class="bi bi-globe"></i>
                        <a href="https://{{ $h['website'] }}" target="_blank">
                            {{ $h['website'] }}
                        </a>
                    </div>
                    @endif

                    @if($h['email'])
                    <div class="hotel-info-row">
                        <i class="bi bi-envelope-fill"></i>
                        <a href="mailto:{{ $h['email'] }}">{{ $h['email'] }}</a>
                    </div>
                    @endif

                </div>

                <div class="wisata-tags">
                    @foreach($h['tags'] as $tag)
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