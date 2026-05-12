@extends('layouts.page')
@section('title', 'Seni Budaya')
@section('page-title', 'Seni Budaya')

@section('page-content')

<div class="mb-4">
    <h3 style="font-weight:700; color:#1B3A6B;">
        5 Seni Budaya Terpopuler
    </h3>
</div>

@php
$seni = [

    [
        'no' => '1',
        'nama' => 'SEREN TAUN',
        'foto' => asset('images/seni/seren-taun.jpg'),
        'desc' => 'Seren taun merupakan upacara adat panen padi masyarakat Sunda khususnya di Cigugur Kabupaten Kuningan yang dilakukan setiap tahun. Penyelenggaraan dimulai dengan upacara ngajayuk (Menyambut) pada tanggal 18 Rayagung, kemudian dilanjutkan pada tanggal 22 Rayagung bulan akhir pada sistem penanggalan Sunda. Acara dipusatkan di Pendopo Paseban Tri Panca Tunggal peninggalan Pangeran Djatikusumah yang didirikan tahun 1840, sebagaimana layaknya sesembahan musim panen, ornamen gabah serta hasil bumi mendominasi rangkaian acara. Dengan acara pembukaan padi sebagai puncak area, dengan disertai beberapa kesenian tradisional masyarakat agraris Sunda tempo dulu.',
    ],

    [
        'no' => '2',
        'nama' => 'SENI BUDAYA SAPTON',
        'foto' => asset('images/seni/sapton.jpg'),
        'desc' => 'Seni Budaya Sapton deglar pada setiap hari Kuningan, setelah upacara hari ulang tahun dilaksanakan, para pejabat dan tamu undangan dipersilahkan melihat permainan ini, sebagai permainan ketangkasan berkuda dengan peserta para demang/ kepala/ desa/ kuwu.',
    ],

    [
        'no' => '3',
        'nama' => 'SENI BUDAYA CINGCOWONG',
        'foto' => asset('images/seni/cingcowong.jpg'),
        'desc' => 'Seni budaya Cingcowong dari daerah Luragung tepatnya Kuningan Bagian Timur. Kesenian ini digelar dikala musim kemarau yang panjang/ kekeringan karena kesenian ini bertujuan meminta hujan. Kegiatan ini mengandung unsur magis.',
    ],

    [
        'no' => '4',
        'nama' => 'SENI BUDAYA KAWIN CAI',
        'foto' => asset('images/seni/kawin-cai.jpg'),
        'desc' => 'Seni Budaya Kawin Cai dari Desa Babakan Mulya dan Manis Kidul kecamatan Jalaksana, digelar setelah panen padi Masyarakat setempat. Syukuran atas keberhasilan dalam mengolah pertanian, dengan air melimpah. Tradisi ini dilaksanakan pada hari jum’at kliwon.',
    ],

    [
        'no' => '5',
        'nama' => 'SENI BUDAYA PESTA DADUNG',
        'foto' => asset('images/seni/pesta-dadung.jpg'),
        'desc' => 'Seni budaya pesta dadung berasal dari Desa Cilebak Kecamatan Cilebak, sebagai syukuran petani kepada yang maha kuasa, karena limpahan hasil pertanian yang berlimpah.',
    ],

];
@endphp

<div class="d-flex flex-column gap-3">

    @foreach($seni as $s)

    <div class="rounded-3 overflow-hidden"
         style="background:#F8FAFC; border:1px solid #E2E8F0;">

        {{-- FOTO --}}
        <img src="{{ $s['foto'] }}"
             alt="{{ $s['nama'] }}"
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
                    {{ $s['no'] }}
                </div>

                <div style="
                    font-weight:700;
                    font-size:1rem;
                    color:#1B3A6B;
                ">
                    {{ $s['nama'] }}
                </div>

            </div>

            <div style="
                font-size:0.9rem;
                color:#475569;
                line-height:1.8;
                text-align:justify;
            ">
                {{ $s['desc'] }}
            </div>

        </div>

    </div>

    @endforeach

</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">
    Sumber: Dinas Pariwisata dan Kebudayaan Kabupaten Kuningan
</p>

@endsection