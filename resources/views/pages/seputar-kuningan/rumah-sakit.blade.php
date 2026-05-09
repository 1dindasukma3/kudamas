@extends('layouts.page')
@section('title', 'Rumah Sakit')
@section('page-title', 'Rumah Sakit Kabupaten Kuningan')

@push('styles')
<style>
    .hero-rs{
        background: linear-gradient(135deg,#1B3A6B,#2563EB);
        border-radius: 22px;
        padding: 24px;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .hero-rs::after{
        content:'';
        position:absolute;
        width:180px;
        height:180px;
        border-radius:50%;
        background:rgba(255,255,255,0.08);
        top:-70px;
        right:-70px;
    }

    .stat-card-modern{
        background:#fff;
        border-radius:18px;
        padding:18px 12px;
        text-align:center;
        border:1px solid #EEF2F7;
        box-shadow:0 3px 14px rgba(0,0,0,0.05);
        height:100%;
    }

    .stat-value{
        font-size:1.4rem;
        font-weight:800;
        color:var(--biru);
        line-height:1;
    }

    .stat-label{
        font-size:0.74rem;
        color:#6B7280;
        margin-top:6px;
    }

    .section-title{
        color:var(--biru);
        font-weight:700;
        margin-bottom:14px;
    }

    .rs-card{
        background:#fff;
        border-radius:20px;
        padding:16px;
        border:1px solid #E5E7EB;
        box-shadow:0 3px 12px rgba(0,0,0,0.05);
        display:flex;
        gap:14px;
        align-items:flex-start;
        margin-bottom:14px;
        transition:0.2s ease;
    }

    .rs-card:hover{
        transform:translateY(-2px);
    }

    .rs-icon{
        width:52px;
        height:52px;
        border-radius:16px;
        background:linear-gradient(135deg,#1B3A6B,#2563EB);
        display:flex;
        align-items:center;
        justify-content:center;
        color:white;
        font-size:1.3rem;
        flex-shrink:0;
    }

    .rs-name{
        font-size:0.92rem;
        font-weight:800;
        color:#374151;
        margin-bottom:5px;
        line-height:1.5;
    }

    .rs-address{
        font-size:0.8rem;
        color:#6B7280;
        line-height:1.7;
    }

    .rs-phone{
        margin-top:6px;
        font-size:0.78rem;
        color:#2563EB;
        font-weight:600;
    }

    .source-text{
        font-size:0.72rem;
        color:#9CA3AF;
        text-align:center;
        margin-top:24px;
    }
</style>
@endpush

@section('page-content')

<div class="hero-rs mb-4">

    <div class="d-flex align-items-center gap-3 position-relative">

        <div style="font-size:2.5rem;">🏥</div>

        <div>
            <div style="font-size:0.8rem;opacity:0.8;letter-spacing:1px;text-transform:uppercase;">
                Kabupaten Kuningan
            </div>

            <div style="font-size:1.7rem;font-weight:800;line-height:1.2;">
                Daftar Rumah Sakit
            </div>

            <div style="font-size:0.85rem;opacity:0.85;">
                Informasi rumah sakit di Kabupaten Kuningan
            </div>
        </div>

    </div>

</div>

<div class="row g-3 mb-4">

    <div class="col-4">
        <div class="stat-card-modern">
            <div style="font-size:1.4rem;">🏥</div>
            <div class="stat-value">12</div>
            <div class="stat-label">Rumah Sakit</div>
        </div>
    </div>

    <div class="col-4">
        <div class="stat-card-modern">
            <div style="font-size:1.4rem;">📍</div>
            <div class="stat-value">32</div>
            <div class="stat-label">Kecamatan</div>
        </div>
    </div>

    <div class="col-4">
        <div class="stat-card-modern">
            <div style="font-size:1.4rem;">🚑</div>
            <div class="stat-value">24H</div>
            <div class="stat-label">Layanan</div>
        </div>
    </div>

</div>

<h6 class="section-title">Daftar 12 Rumah Sakit di Kabupaten Kuningan</h6>

@php
$rumahsakit = [
[
'nama' => 'Rumah Sakit Umum Daerah 45',
'alamat' => 'Jl. Jend. Sudirman No.68 Kuningan',
'telp' => '(0232) 871885'
],
[
'nama' => 'Rumah Sakit Umum Wijaya Kusumah',
'alamat' => 'Jl. RE. Martadinata No.172 Kelurahan Ciporang, Kuningan',
'telp' => '(0232) 871565'
],
[
'nama' => 'Rumah Sakit Umum Sekar Kamulyan',
'alamat' => 'Jl. Rumah Sakit No.28 Kelurahan Cigugur, Kec. Cigugur, Kab. Kuningan',
'telp' => '(0232) 873206'
],
[
'nama' => 'Rumah Sakit Umum Juanda',
'alamat' => 'Jl. Ir. H. Juanda No.207 Kelurahan Purwawinangun, Kec. Kuningan',
'telp' => '(0232) 876433'
],
[
'nama' => 'Rumah Sakit Umum El-Syifa',
'alamat' => 'Jl. RE. Martadinata No.108 Desa Ancaran, Kec. Kuningan',
'telp' => '(0232) 876240'
],
[
'nama' => 'Rumah Sakit Umum Kuningan Medical Centre',
'alamat' => 'Jl. RE. Martadinata No.01 Desa Kertawangunan, Kec. Sindangagung',
'telp' => '(0232) 8890300'
],
[
'nama' => 'Rumah Sakit Umum Daerah Linggajati',
'alamat' => 'Jl. Bandorasa – Cilimus No.36 Kec. Cilimus Kab. Kuningan',
'telp' => '(0232) 614884'
],
[
'nama' => 'Rumah Sakit Umum KMC Luragung',
'alamat' => 'Dusun Rahayu RT 002 RW 001 Desa Cirahayu, Kec. Luragung, Kab. Kuningan',
'telp' => '(0232) 8900112'
],
[
'nama' => 'Rumah Sakit Jantung Hasna Medika Kuningan',
'alamat' => 'Jl. Raya Cigugur Lingkungan Manis RT 030 RW 011, Kelurahan Cigugur, Kec. Cigugur, Kab. Kuningan',
'telp' => '(0232) 8611111'
],
[
'nama' => 'Rumah Sakit Mitra Husada Ciawigebang',
'alamat' => 'Jl. Raya Siliwangi No.151, Kec. Ciawigebang, Kab. Kuningan',
'telp' => '-'
],
[
'nama' => 'Rumah Sakit Umum Arya Kamuning',
'alamat' => 'Jl. Raya Cihideunggirang Dusun Manis RT 001 RW 002 Desa Cihideunggirang, Kec. Cidahu, Kab. Kuningan',
'telp' => '(0232) 891188'
],
[
'nama' => 'RS Permata Kuningan',
'alamat' => 'Jl. Cut Nyak Dien RT 007 RW 002 Kelurahan Ciporang Kec. Kuningan Kab. Kuningan',
'telp' => '(0232) 8905556'
],
];
@endphp

@foreach($rumahsakit as $i => $rs)

<div class="rs-card">

    <div class="rs-icon">
        🏥
    </div>

    <div>
        <div class="rs-name">
            {{ $i + 1 }}. {{ $rs['nama'] }}
        </div>

        <div class="rs-address">
            {{ $rs['alamat'] }}
        </div>

        <div class="rs-phone">
            ☎ {{ $rs['telp'] }}
        </div>
    </div>

</div>

@endforeach

<div class="source-text">
    Sumber: Pemerintah Kabupaten Kuningan
</div>

@endsection