@extends('layouts.page')
@section('title', 'Wisata Buatan')
@section('page-title', 'Wisata Buatan')

@section('page-content')

<div class="mb-4">
    <h3 style="font-weight:700; color:#1B3A6B;">
        11 Wisata Buatan Terpopuler
    </h3>
</div>

@php
$wisata = [

    [
        'no' => '1',
        'nama' => 'SANGKAN RESORT AQUA PARK',
        'foto' => asset('images/wisata/sangkan-resort.jpg'),
        'lokasi' => 'Jl. Raya Bandorasa No. KM. 12, Bandorasa Wetan, Kec. Cilimus, Kabupaten Kuningan, Jawa Barat 45556',
    ],

    [
        'no' => '2',
        'nama' => 'GHIFFARI VALLEY',
        'foto' => asset('images/wisata/ghiffari-valley.jpg'),
        'lokasi' => 'Linggarjati, Kec. Cilimus, Kabupaten Kuningan, Jawa Barat 45556',
    ],

    [
        'no' => '3',
        'nama' => 'ZAZAM POOL',
        'foto' => asset('images/wisata/zazam-pool.jpg'),
        'lokasi' => 'Jl. Veteran Blok Pakuwon Desa Manislor, Kec. Jalaksana, Kabupaten Kuningan, Jawa Barat 45554',
    ],

    [
        'no' => '4',
        'nama' => 'KOLAM RENANG GRAGE SANGKAN',
        'foto' => asset('images/wisata/grage-sangkan.jpg'),
        'lokasi' => 'Jl. Raya Sangkanurip No.1, Panawuan, Cigandamekar, Kabupaten Kuningan, Jawa Barat 45556',
    ],

    [
        'no' => '5',
        'nama' => 'THE MOUNTAIN REKREASION PARK',
        'foto' => asset('images/wisata/mountain-park.jpg'),
        'lokasi' => 'Perumahan Pesona Alam Kuningan, Jalan Raya Cirendang-Cigugur, Cipari, Kec. Cigugur, Kabupaten Kuningan, Jawa Barat 45518',
    ],

    [
        'no' => '6',
        'nama' => 'WADUK DARMA',
        'foto' => asset('images/wisata/waduk-darma.jpg'),
        'lokasi' => 'Desa Jagara Kec. Darma - Kuningan',
    ],

    [
        'no' => '7',
        'nama' => 'TAMAN REKREASI SALSABILA',
        'foto' => asset('images/wisata/salsabila.jpg'),
        'lokasi' => 'Jl. Panawuan No.2 Rt.01 Rw.01 Dusun01 Desa Panawuan Kec. Cigandamekar Kab. Kuningan',
    ],

    [
        'no' => '8',
        'nama' => 'SANGKANHURIP ALAMI',
        'foto' => asset('images/wisata/sangkanhurip.jpg'),
        'lokasi' => 'Jl. Pemandian Air Panas Sangkanhurip No.210 Desa Sangkanhurip Kec. Cigandamekar',
    ],

    [
        'no' => '9',
        'nama' => 'LINGGARJATI INDAH',
        'foto' => asset('images/wisata/linggarjati-indah.jpg'),
        'lokasi' => 'Jl. Linggarjati No.04 Desa Linggasana Kec. Cigandamekar - Kuningan',
    ],

    [
        'no' => '10',
        'nama' => 'KOLAM RENANG SANGGARIANG',
        'foto' => asset('images/wisata/sanggariang.jpg'),
        'lokasi' => 'Jl. Siliwangi No.75 Kec. Purwawinangun - Kuningan',
    ],

    [
        'no' => '11',
        'nama' => 'KOLAM RENANG TIRTA GUNUNG MAS',
        'foto' => asset('images/wisata/tirta-gunung-mas.jpg'),
        'lokasi' => 'Jl. Luragung No.5 Luragung - Kuningan',
    ],

];
@endphp

<div class="d-flex flex-column gap-3">

    @foreach($wisata as $w)

    <div class="rounded-3 overflow-hidden"
         style="background:#F8FAFC; border:1px solid #E2E8F0;">

        {{-- FOTO --}}
        <img src="{{ $w['foto'] }}"
             alt="{{ $w['nama'] }}"
             style="
                width:100%;
                height:220px;
                object-fit:cover;
             ">

        <div class="p-3">

            <div class="d-flex align-items-center gap-3 mb-3">

                <div style="
                    width:42px;
                    height:42px;
                    background:#1B3A6B;
                    color:white;
                    border-radius:50%;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    font-weight:700;
                    flex-shrink:0;
                ">
                    {{ $w['no'] }}
                </div>

                <div style="
                    font-weight:700;
                    font-size:1rem;
                    color:#1B3A6B;
                ">
                    {{ $w['nama'] }}
                </div>

            </div>

            <div style="
                font-size:0.9rem;
                color:#475569;
                line-height:1.8;
                text-align:justify;
            ">
                <strong>Lokasi:</strong> {{ $w['lokasi'] }}
            </div>

        </div>

    </div>

    @endforeach

</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">
    Sumber: Dinas Pariwisata Kabupaten Kuningan
</p>

@endsection