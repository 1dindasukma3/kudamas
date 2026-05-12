@extends('layouts.page')
@section('title', 'Wisata Sejarah & Religi')
@section('page-title', 'Wisata Sejarah & Religi')

@section('page-content')

<div class="mb-4">
    <h3 style="font-weight:700; color:#1B3A6B;">
        2 Wisata Sejarah Terpopuler
    </h3>
</div>

@php
$wisata = [

    [
        'no' => '1',
        'nama' => 'GEDUNG PERLINDUNGAN LINGGRJATI',
        'foto' => asset('images/sejarah/linggarjati.jpg'),
        'desc' => 'Gedung Perundingan Linggarjati adalah tempat diadakannya perundingan antara Republik Indonesia dengan Pemerintah Belanda pasca perang kemerdekaan. Terletak di Desa Linggajati Kecamatan Cilimus Kabupaten Kuningan.

Gedung Perundingan Linggajati merupakan saksi sejarah tempat dilaksanakannya Perundingan Linggajati pada bulan November 1946. Karena tidak memungkinkan perundingan dilakukan di Jakarta maupun di Yogyakarta (ibu kota sementara RI), maka diambil jalan tengah jika perjanjian diadakan di Linggajati, Kuningan. Hari Minggu pada tanggal 10 November 1946 Lord Killearn tiba di Cirebon. Ia berangkat dari Jakarta menumpang kapal fregat Inggris H.M.S. Veryan Bay. Ia tidak berkeberatan menginap di Hotel Linggajati yang sekaligus menjadi tempat perundingan.

Delegasi Belanda berangkat dari Jakarta dengan menumpang kapal terbang “Catalina” yang mendarat dan berlabuh di luar Cirebon. Dari “Catalina” mereka pindah ke kapal perang “Banckert” yang kemudian menjadi hotel terapung selama perjanjian berlangsung. Delegasi Indonesia yang dipimpin oleh Sjahrir menginap di Desa Linggasama, sebuah desa dekat Linggajati. Presiden Soekarno dan Wakil Presiden Muhammad Hatta sendiri menginap di kediaman Bupati Kuningan. Kedua delegasi mengadakan perundingan pada tanggal 11-12 November 1946 yang ditengahi oleh Lord Kilearn, penengah berkebangsaan Inggris.',
    ],

    [
        'no' => '2',
        'nama' => 'TAMAN PURBAKALA CIPARI',
        'foto' => asset('images/sejarah/cipari.jpg'),
        'desc' => 'Situs ini terletak di Kampung Cipari, Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat. Berada pada ketinggian 661 meter dari permukaan laut, situs ini tepat berada di kaki Gunung Ciremai dan berjarak sekitar empat kilometer dari Kota Kuningan Jawa Barat.

Situs Purbakala Cipari merupakan situs peninggalan megalitik di Kabupaten Kuningan. Situs ini diduga sebagai sebuah situs desa permukiman purbakala dengan karakteristik peninggalan bangunan megalitik, seperti kubur batu dan menhir.',
    ],

];
@endphp

<div class="d-flex flex-column gap-4">

    @foreach($wisata as $w)

    <div class="rounded-3 overflow-hidden"
         style="background:#F8FAFC; border:1px solid #E2E8F0;">

        {{-- FOTO --}}
        <img src="{{ $w['foto'] }}"
             alt="{{ $w['nama'] }}"
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
                font-size:0.92rem;
                color:#475569;
                line-height:1.9;
                text-align:justify;
                white-space:pre-line;
            ">
                {{ $w['desc'] }}
            </div>

        </div>

    </div>

    @endforeach

</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">
    Sumber: Dinas Pariwisata Kabupaten Kuningan
</p>

@endsection