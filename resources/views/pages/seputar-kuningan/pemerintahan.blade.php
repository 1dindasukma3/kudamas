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
            <div style="font-size:0.8rem;opacity:0.8;letter-spacing:1px;text-transform:uppercase;">
                Pemerintah Kabupaten Kuningan
            </div>

            <div style="font-size:1.6rem;font-weight:800;line-height:1.2;">
                Perangkat Daerah
            </div>

            <div style="font-size:0.85rem;opacity:0.85;">
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

<h6 class="section-title">Daftar Perangkat Daerah Kabupaten Kuningan</h6>

<div class="opd-list">

@php
$opd = [
'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah Kabupaten Kuningan',
'Badan Pengelolaan Pendapatan Daerah Kabupaten Kuningan',
'Badan Pengelolaan Keuangan dan Aset Daerah Kabupaten Kuningan',
'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kabupaten Kuningan',
'Badan Rumah Sakit Umum 45 Kabupaten Kuningan',
'Badan Rumah Sakit Umum Linggajati Kabupaten Kuningan',
'Badan Kesatuan Bangsa dan Politik Kabupaten Kuningan',
'Badan Penanggulangan Bencana Daerah Kabupaten Kuningan',
'Sekretariat DPRD Kabupaten Kuningan',
'Inspektorat Kabupaten Kuningan',
'Dinas Pendidikan dan Kebudayaan Kabupaten Kuningan',
'Dinas Kesehatan Kabupaten Kuningan',
'Dinas Pekerjaan Umum dan Tata Ruang Kabupaten Kuningan',
'Dinas Perumahan, Kawasan Permukiman dan Pertanahan Kabupaten Kuningan',
'Satuan Polisi Pamong Praja Kabupaten Kuningan',
'Dinas Sosial Kabupaten Kuningan',
'Dinas Tenaga Kerja dan Transmigrasi Kabupaten Kuningan',
'Dinas Ketahanan Pangan dan Pertanian Kabupaten Kuningan',
'Dinas Lingkungan Hidup Kabupaten Kuningan',
'Dinas Kependudukan dan Catatan Sipil Kabupaten Kuningan',
'Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Kuningan',
'Dinas Pengendalian Penduduk, Keluarga Berencana, Pemberdayaan Perempuan dan Perlindungan Anak Kabupaten Kuningan',
'Dinas Perhubungan Kabupaten Kuningan',
'Dinas Komunikasi dan Informatika Kabupaten Kuningan',
'Dinas Koperasi, Usaha Mikro Kecil dan Menengah, Perindustrian dan Perdagangan Kabupaten Kuningan',
'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Kuningan',
'Dinas Pemuda, Olahraga dan Pariwisata Kabupaten Kuningan',
'Dinas Kearsipan dan Perpustakaan Kabupaten Kuningan',
'Dinas Perikanan dan Peternakan Kabupaten Kuningan',
'Bagian Hukum Sekretariat Daerah Kabupaten Kuningan',
'Bagian Tata Pemerintahan Sekretariat Daerah Kabupaten Kuningan',
'Bagian Protokol dan Komunikasi Pimpinan Sekretariat Daerah Kabupaten Kuningan',
'Bagian Kesejahteraan Rakyat Sekretariat Daerah Kabupaten Kuningan',
'Bagian Administrasi Pembangunan Daerah Kabupaten Kuningan',
'Bagian Perekonomian dan Sumber Daya Alam Sekretariat Daerah Kabupaten Kuningan',
'Bagian Pengadaan Barang/Jasa Sekretariat Daerah Kabupaten Kuningan',
'Bagian Umum Sekretariat Daerah Kabupaten Kuningan',
'Bagian Perencanaan dan Keuangan Sekretariat Daerah Kabupaten Kuningan',
'Bagian Organisasi Sekretariat Daerah Kabupaten Kuningan',
];
@endphp

@foreach($opd as $i => $nama)

<div class="opd-item">
    <div class="opd-num">{{ $i + 1 }}</div>

    <div class="opd-name">
        {{ $nama }}
    </div>
</div>

@endforeach

</div>

<div class="source-text">
    Sumber: Pemerintah Kabupaten Kuningan
</div>

@endsection