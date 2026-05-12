@extends('layouts.page')
@section('title', 'Wisata Kuliner')
@section('page-title', 'Wisata Kuliner')

@section('page-content')

<div class="mb-4">
    <h3 style="font-weight:700; color:#1B3A6B;">
        3 Wisata Kuliner Terpopuler
    </h3>
</div>

@php
$kuliner = [

    [
        'no' => '1',
        'nama' => 'Tahu Kopeci',
        'foto' => asset('images/kuliner/tahu-kopeci.jpg'),
        'desc' => 'Tahu Kuningan berukuran kecil dan berwarna cokelat di bagian luarnya dengan cita rasa kedelai yang masih sangat kental. Tahu Kopeci sangat cocok dinikmati bersamaan dengan cabai rawit. Disamping rasanya yang gurih dan empuk, harganya pun tak membuat kantong jadi bolong. Tahu Kopeci ini dijual dengan harga Rp 500 per buah, dan kalau beli dengan jumlah yang banyak Tahu Kopeci akan dibungkus dengan tempat khusus yang terbuat dari bambu.

Sebagai pelengkap para pedagang Tahu juga menyediakan lontong dan susu kedelai, yang akan membuat menyantap Tahu khas Kuningan ini kian nikmat. Gigitan pertama terasa renyah dan ranum di luar, gigitan kedua terasa gurih dan lembut memberikan sensasi hangat di mulut. Gigitan selanjutnya, lidah tak mau berhenti bergoyang. Mengingat rasanya yang lezat, Tahu Kopeci kerap dijadikan oleh-oleh khas Kuningan.',
    ],

    [
        'no' => '2',
        'nama' => 'Kuliner Rujak Kangkung dan Tutut',
        'foto' => asset('images/kuliner/rujak-kangkung.jpg'),
        'desc' => 'Kuliner rujak kangkung dan tutut di Olah sederhana dan cepat, bahan pokoknya pun sangat mudah didapat, dimanapun. Namun tidak semua orang bisa meraciknya dengan bumbu yang pas dan menggigit lidah. banyak orang yang penasaran dan ingin mencoba meraciknya sendiri di rumah.

Wisata kuliner rujak Kangkung dan tutut beralamat di Jalan RE Martadinata No. 111 Cipang Kecamatan Kuningan Kabupaten Kuningan Jawa Barat 45514 Indonesia.',
    ],

    [
        'no' => '3',
        'nama' => 'Kuliner Nasi Kasreng',
        'foto' => asset('images/kuliner/nasi-kasreng.jpg'),
        'desc' => 'Nasi Kasreng adalah salah satu sajian kuliner daerah Kuningan Timur. Nasi kasreng seringkali menjadi menu makan bagi kalangan masyarakat menengah ke bawah. salah satu kuliner Nasi Kasreng yang banyak pengunjungnya berada di daerah Desa Luragung Tonggoh, Kecamatan Luragung. Awal muncul nama kasreng ini merupakan perpaduan antara pedagang yang pada waktu itu jualan gorengan juga, lalu selanjutnya nasi dan gorengan tersebut di lengkapi dengan toge mentah, rebon dan sambal.',
    ],

];
@endphp

<div class="d-flex flex-column gap-4">

    @foreach($kuliner as $k)

    <div class="rounded-3 overflow-hidden"
         style="background:#F8FAFC; border:1px solid #E2E8F0;">

        {{-- FOTO --}}
        <img src="{{ $k['foto'] }}"
             alt="{{ $k['nama'] }}"
             style="
                width:100%;
                height:240px;
                object-fit:cover;
             ">

        <div class="p-3 p-md-4">

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
                    {{ $k['no'] }}
                </div>

                <div style="
                    font-weight:700;
                    font-size:1rem;
                    color:#1B3A6B;
                ">
                    {{ $k['nama'] }}
                </div>

            </div>

            <div style="
                font-size:0.92rem;
                color:#475569;
                line-height:1.9;
                text-align:justify;
                white-space:pre-line;
            ">
                {{ $k['desc'] }}
            </div>

        </div>

    </div>

    @endforeach

</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">
    Sumber: Dinas Pariwisata Kabupaten Kuningan
</p>

@endsection