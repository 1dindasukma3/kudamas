@extends('layouts.page')
@section('title', 'Bupati Kabupaten Kuningan')
@section('page-title', 'Bupati Kabupaten Kuningan')

@push('styles')
<style>
    .hero-bupati{
        background: linear-gradient(135deg,#1B3A6B,#2563EB);
        border-radius: 22px;
        padding: 24px;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .hero-bupati::after{
        content:'';
        position:absolute;
        width:180px;
        height:180px;
        background:rgba(255,255,255,0.08);
        border-radius:50%;
        top:-60px;
        right:-60px;
    }

    .info-card{
        background:#fff;
        border-radius:18px;
        padding:18px;
        border:1px solid #E5E7EB;
        box-shadow:0 3px 14px rgba(0,0,0,0.05);
    }

    .bupati-item{
        display:flex;
        gap:14px;
        align-items:flex-start;
        background:#fff;
        border-radius:18px;
        padding:14px;
        border:1px solid #EEF2F7;
        box-shadow:0 2px 10px rgba(0,0,0,0.04);
        margin-bottom:12px;
    }

    .bupati-no{
        width:36px;
        height:36px;
        border-radius:12px;
        background:linear-gradient(135deg,#1B3A6B,#2563EB);
        color:white;
        display:flex;
        align-items:center;
        justify-content:center;
        font-weight:700;
        font-size:0.8rem;
        flex-shrink:0;
    }

    .bupati-name{
        font-size:0.9rem;
        font-weight:700;
        color:#374151;
        line-height:1.5;
    }

    .bupati-year{
        font-size:0.8rem;
        color:#6B7280;
        margin-top:2px;
    }

    .section-title{
        color:var(--biru);
        font-weight:700;
        margin-bottom:14px;
    }

    .source-text{
        font-size:0.72rem;
        color:#9CA3AF;
        text-align:center;
        margin-top:24px;
    }

    .custom-link{
        color:#14B8A6;
        text-decoration:none;
        font-weight:600;
        word-break:break-word;
    }
</style>
@endpush

@section('page-content')

<div class="hero-bupati mb-4">

    <div class="d-flex align-items-center gap-3 position-relative">
        <div style="font-size:2.5rem;">👨‍⚖️</div>

        <div>
            <div style="font-size:0.8rem;opacity:0.8;letter-spacing:1px;text-transform:uppercase;">
                Pemerintah Kabupaten Kuningan
            </div>

            <div style="font-size:1.7rem;font-weight:800;line-height:1.2;">
                Daftar Bupati Kuningan
            </div>

            <div style="font-size:0.85rem;opacity:0.85;">
                Sejak dibentuknya Kabupaten Kuningan tahun 1498
            </div>
        </div>
    </div>

</div>

<div class="info-card mb-4">

    <p style="line-height:1.9;color:#555;text-align:justify;">
        Bupati Kuningan sudah ada sejak dibentuknya Kabupaten Kuningan pada
        <strong>1 September 1498</strong>. Berikut daftar Bupati Kuningan
        yang tercatat pada website resmi Pemerintah Kabupaten Kuningan.
    </p>

    <a href="https://www.kuningankab.go.id/tentang-kuningan/kilas-sejarah-kuningan"
       target="_blank"
       class="custom-link">
       https://www.kuningankab.go.id/tentang-kuningan/kilas-sejarah-kuningan
    </a>

</div>

<h6 class="section-title">Daftar Bupati Kabupaten Kuningan</h6>

@php
$bupati = [
['nama'=>'R. Noer Armadibrata'],
['nama'=>'R. Moch. Hafil'],
['nama'=>'R. Tikok Moch. Ichlas'],
['nama'=>'R. Soemitra'],
['nama'=>'Tb. Amin Abdullah'],
['nama'=>'Saleh Alibasah','tahun'=>'1958 - 1961'],
['nama'=>'Usman Djatikusumah'],
['nama'=>'Rd. Komar Suryaatmadja'],
['nama'=>'S. Soemintaatmadja'],
['nama'=>'Aruman Wirananggapathi','tahun'=>'1967 - 1973'],
['nama'=>'Karli Akbar','tahun'=>'1973 - 1978'],
['nama'=>'R. H. Unang Sunardjo, S.H.','tahun'=>'1978 - 1983'],
['nama'=>'Drs. H. Moch. Djufri Pringadi','tahun'=>'1983 - 1988'],
['nama'=>'Drs. H. Subandi','tahun'=>'1988 - 1993'],
['nama'=>'H. Yeng Ds. Partawinata, SH','tahun'=>'1993 - 1998'],
['nama'=>'Drs. H. Arifin Setiamihardja, MM','tahun'=>'1998 - 2003'],
['nama'=>'H. Aang Hamid Suganda, S.Sos.','tahun'=>'2003 - 2008'],
['nama'=>'H. Aang Hamid Suganda, S.Sos.','tahun'=>'2008 - 2013'],
['nama'=>'Hj. Utje Choeriah Hamid Suganda, S.Sos., M.AP.','tahun'=>'2013 - 2015'],
['nama'=>'H. Acep Purnama, SH., MH','tahun'=>'2015 - 2018'],
['nama'=>'H. Acep Purnama, SH., MH','tahun'=>'2018 - 2023'],
['nama'=>'(Penjabat Bupati) Raden Iip Hidayat, M.Pd.','tahun'=>'2023 - 2024'],
['nama'=>'(Penjabat Bupati) Dr. Agus Toyib, S.Sos., M.Si.','tahun'=>'2024'],
['nama'=>'Dr. Dian Rachmat Yanuar, M.Si.','tahun'=>'2024 - 2029'],
];
@endphp

@foreach($bupati as $i => $item)

<div class="bupati-item">

    <div class="bupati-no">
        {{ $i + 1 }}
    </div>

    <div>
        <div class="bupati-name">
            {{ $item['nama'] }}
        </div>

        @if(isset($item['tahun']))
        <div class="bupati-year">
            Masa Jabatan : {{ $item['tahun'] }}
        </div>
        @endif
    </div>

</div>

@endforeach

<div class="source-text">
    Sumber: Pemerintah Kabupaten Kuningan
</div>

@endsection