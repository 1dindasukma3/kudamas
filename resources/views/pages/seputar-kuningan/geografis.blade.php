@extends('layouts.page')
@section('title', 'Kondisi Geografis')
@section('page-title', 'Kondisi Geografis')

@push('styles')
<style>
    .geo-hero{
        background: linear-gradient(135deg,#1B3A6B,#2563EB);
        border-radius: 22px;
        padding: 24px;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .geo-hero::after{
        content:'';
        position:absolute;
        width:180px;
        height:180px;
        background:rgba(255,255,255,0.08);
        border-radius:50%;
        top:-70px;
        right:-70px;
    }

    .geo-card{
        background:#fff;
        border-radius:18px;
        padding:18px;
        box-shadow:0 3px 14px rgba(0,0,0,0.05);
        border:1px solid #EEF2F7;
        height:100%;
        text-align:center;
    }

    .geo-value{
        font-size:1.3rem;
        font-weight:800;
        color:var(--biru);
        line-height:1;
    }

    .geo-label{
        font-size:0.75rem;
        color:#6B7280;
        margin-top:8px;
    }

    .section-title{
        color:var(--biru);
        font-weight:700;
        margin-bottom:14px;
    }

    .geo-text{
        text-align:justify;
        line-height:1.9;
        color:#555;
    }

    .batas-card{
        background:#fff;
        border-radius:18px;
        padding:14px;
        border:1px solid #E5E7EB;
        box-shadow:0 2px 10px rgba(0,0,0,0.04);
        height:100%;
    }

    .batas-icon{
        width:42px;
        height:42px;
        border-radius:12px;
        background:linear-gradient(135deg,#1B3A6B,#2563EB);
        display:flex;
        align-items:center;
        justify-content:center;
        color:white;
        font-size:1rem;
        flex-shrink:0;
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

<div class="geo-hero mb-4">
    <div class="d-flex align-items-center gap-3 position-relative">
        <div style="font-size:2.4rem;">🌍</div>

        <div>
            <div style="font-size:0.8rem;opacity:0.8;letter-spacing:1px;text-transform:uppercase;">
                Kabupaten Kuningan
            </div>

            <div style="font-size:1.7rem;font-weight:800;line-height:1.2;">
                Kondisi Geografis
            </div>

            <div style="font-size:0.85rem;opacity:0.85;">
                Letak wilayah dan batas administrasi Kabupaten Kuningan
            </div>
        </div>
    </div>
</div>

<div class="row g-3 mb-4">

    <div class="col-6">
        <div class="geo-card">
            <div style="font-size:1.4rem;">📍</div>
            <div class="geo-value">108°23' - 108°47'</div>
            <div class="geo-label">Bujur Timur</div>
        </div>
    </div>

    <div class="col-6">
        <div class="geo-card">
            <div style="font-size:1.4rem;">🧭</div>
            <div class="geo-value">6°47' - 7°12'</div>
            <div class="geo-label">Lintang Selatan</div>
        </div>
    </div>

    <div class="col-6">
        <div class="geo-card">
            <div style="font-size:1.4rem;">🏘️</div>
            <div class="geo-value">32</div>
            <div class="geo-label">Kecamatan</div>
        </div>
    </div>

    <div class="col-6">
        <div class="geo-card">
            <div style="font-size:1.4rem;">🏡</div>
            <div class="geo-value">361</div>
            <div class="geo-label">Desa</div>
        </div>
    </div>

</div>

<div class="bg-white rounded-4 shadow-sm p-4 mb-4">

    <h6 class="section-title">Letak Geografis</h6>

    <p class="geo-text">
        <strong>Kabupaten Kuningan</strong> terletak pada titik koordinat
        108°23 - 108°47 Bujur Timur dan 6°47 - 7°12 Lintang Selatan.
        Sedangkan ibu kotanya terletak pada titik koordinat
        6°58 Lintang Selatan dan 108°29 Bujur Timur.
    </p>

    <p class="geo-text mb-0">
        Dilihat dari posisi geografisnya terletak di bagian timur Jawa Barat
        berada pada lintasan jalan regional yang menghubungkan Kota Cirebon
        dengan wilayah Priangan Timur dan sebagai jalan alternatif jalur
        tengah yang menghubungkan Bandung - Majalengka dengan Jawa Tengah.
    </p>

</div>

<h6 class="section-title">Batas Wilayah Administratif</h6>

<div class="row g-3">

    <div class="col-6">
        <div class="batas-card">
            <div class="d-flex align-items-center gap-3">
                <div class="batas-icon">⬆️</div>

                <div>
                    <div style="font-size:0.72rem;color:#9CA3AF;font-weight:700;letter-spacing:0.5px;">
                        SEBELAH UTARA
                    </div>

                    <div style="font-size:0.86rem;font-weight:600;color:#374151;">
                        Kabupaten Cirebon
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="batas-card">
            <div class="d-flex align-items-center gap-3">
                <div class="batas-icon">➡️</div>

                <div>
                    <div style="font-size:0.72rem;color:#9CA3AF;font-weight:700;letter-spacing:0.5px;">
                        SEBELAH TIMUR
                    </div>

                    <div style="font-size:0.86rem;font-weight:600;color:#374151;">
                        Kabupaten Brebes (Jawa Tengah)
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="batas-card">
            <div class="d-flex align-items-center gap-3">
                <div class="batas-icon">⬇️</div>

                <div>
                    <div style="font-size:0.72rem;color:#9CA3AF;font-weight:700;letter-spacing:0.5px;">
                        SEBELAH SELATAN
                    </div>

                    <div style="font-size:0.86rem;font-weight:600;color:#374151;">
                        Kabupaten Ciamis dan Kabupaten Cilacap
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="batas-card">
            <div class="d-flex align-items-center gap-3">
                <div class="batas-icon">⬅️</div>

                <div>
                    <div style="font-size:0.72rem;color:#9CA3AF;font-weight:700;letter-spacing:0.5px;">
                        SEBELAH BARAT
                    </div>

                    <div style="font-size:0.86rem;font-weight:600;color:#374151;">
                        Kabupaten Majalengka
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="bg-white rounded-4 shadow-sm p-4 mt-4">

    <h6 class="section-title">Administratif Wilayah</h6>

    <p class="geo-text mb-0">
        Kabupaten Kuningan terdiri atas
        <strong>32 Kecamatan</strong>,
        <strong>15 Kelurahan</strong> dan
        <strong>361 Desa</strong>.
    </p>

</div>

<div class="source-text">
    Sumber: Pemerintah Kabupaten Kuningan
</div>

@endsection