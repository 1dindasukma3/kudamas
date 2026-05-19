@extends('layouts.page')
@section('title', 'Pemerintahan')
@section('page-title', 'Pemerintahan Kabupaten Kuningan')

@push('styles')
<style>
    .hero-government {
        background: linear-gradient(135deg,#1B3A6B,#2563EB);
        border-radius: 22px;
        padding: 24px;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .hero-government::after{
        content:'';
        position:absolute;
        width:180px;
        height:180px;
        background:rgba(255,255,255,0.08);
        border-radius:50%;
        top:-60px;
        right:-60px;
    }

    .stat-card-modern{
        background:white;
        border-radius:18px;
        padding:18px 12px;
        text-align:center;
        box-shadow:0 4px 15px rgba(0,0,0,0.05);
        height:100%;
    }

    .stat-value{
        font-size:1.4rem;
        font-weight:800;
        color:var(--biru);
        line-height:1;
    }

    .stat-label{
        font-size:0.75rem;
        color:#6B7280;
        margin-top:6px;
    }

    .section-title{
        color:var(--biru);
        font-weight:700;
        margin-bottom:16px;
    }

    .opd-list{
        display:flex;
        flex-direction:column;
        gap:12px;
    }

    .opd-item{
        display:flex;
        align-items:flex-start;
        gap:14px;
        background:#fff;
        border-radius:18px;
        padding:14px;
        box-shadow:0 2px 12px rgba(0,0,0,0.05);
        border:1px solid #EEF2F7;
        transition:0.2s ease;
    }

    .opd-item:hover{
        transform:translateY(-2px);
    }

    .opd-num{
        width:34px;
        height:34px;
        border-radius:12px;
        background:linear-gradient(135deg,#1B3A6B,#2563EB);
        color:white;
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:0.8rem;
        font-weight:700;
        flex-shrink:0;
    }

    .opd-name{
        font-size:0.88rem;
        color:#374151;
        line-height:1.6;
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

<div class="hero-government mb-4">
    <div class="d-flex align-items-center gap-3 position-relative">

        <div style="font-size:2.5rem;">🏛️</div>

        <div>

            <div style="
                font-size:0.8rem;
                opacity:0.8;
                letter-spacing:1px;
                text-transform:uppercase;
            ">
                Pemerintah Kabupaten Kuningan
            </div>

            <div style="
                font-size:1.6rem;
                font-weight:800;
                line-height:1.2;
            ">
                Perangkat Daerah
            </div>

            <div style="
                font-size:0.85rem;
                opacity:0.85;
            ">
                Daftar organisasi perangkat daerah Kabupaten Kuningan
            </div>

        </div>

    </div>
</div>

<div class="row g-3 mb-4">

    <div class="col-4">
        <div class="stat-card-modern">
            <div style="font-size:1.4rem;">🏘️</div>
            <div class="stat-value">32</div>
            <div class="stat-label">Kecamatan</div>
        </div>
    </div>

    <div class="col-4">
        <div class="stat-card-modern">
            <div style="font-size:1.4rem;">🏡</div>
            <div class="stat-value">361</div>
            <div class="stat-label">Desa/Kelurahan</div>
        </div>
    </div>

    <div class="col-4">
        <div class="stat-card-modern">
            <div style="font-size:1.4rem;">🏢</div>
            <div class="stat-value">39</div>
            <div class="stat-label">Perangkat</div>
        </div>
    </div>

</div>

<h5 class="section-title">
    Daftar Perangkat Daerah Kabupaten Kuningan
</h5>

<div class="opd-list">

    @foreach($opd as $o)

    <div class="opd-item">

        <div class="opd-num">
            {{ $o['no'] }}
        </div>

        <div class="opd-name">
            {{ $o['nama'] }}
        </div>

    </div>

    @endforeach

</div>

<div class="source-text">
    Sumber: Pemerintah Kabupaten Kuningan
</div>

@endsection