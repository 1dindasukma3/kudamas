@extends('layouts.page')
@section('title', 'Kondisi Geografis')
@section('page-title', 'Kondisi Geografis')

@section('page-content')

<div class="row g-3 mb-4">
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-value" style="font-size:1.2rem;">1.195,71</div>
            <div class="stat-label">Luas Wilayah (km²)</div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-value" style="font-size:1.2rem;">32</div>
            <div class="stat-label">Kecamatan</div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-value" style="font-size:1.2rem;">3.078</div>
            <div class="stat-label">Ketinggian (mdpl)</div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-value" style="font-size:1.2rem;">26°C</div>
            <div class="stat-label">Suhu Rata-rata</div>
        </div>
    </div>
</div>

<h6 class="fw-bold mb-3" style="color:var(--biru);">Letak Geografis</h6>
<p>Kabupaten Kuningan terletak di bagian timur Provinsi Jawa Barat pada koordinat <strong>108°23' - 108°47' Bujur Timur</strong> dan <strong>6°45' - 7°13' Lintang Selatan</strong>. Kabupaten ini berbatasan langsung dengan Provinsi Jawa Tengah di sebelah timur.</p>

<h6 class="fw-bold mt-4 mb-3" style="color:var(--biru);">Batas Wilayah</h6>
<div class="row g-2 mb-3">
    @php $batas = [
        ['arah'=>'Utara','wilayah'=>'Kabupaten Cirebon','icon'=>'bi-arrow-up'],
        ['arah'=>'Selatan','wilayah'=>'Kabupaten Ciamis & Kabupaten Pangandaran','icon'=>'bi-arrow-down'],
        ['arah'=>'Barat','wilayah'=>'Kabupaten Majalengka','icon'=>'bi-arrow-left'],
        ['arah'=>'Timur','wilayah'=>'Kabupaten Brebes (Jawa Tengah)','icon'=>'bi-arrow-right'],
    ]; @endphp

    @foreach($batas as $b)
    <div class="col-6">
        <div class="d-flex align-items-center gap-2 p-3 rounded-3"
             style="background:#EFF6FF;border:1px solid #DBEAFE;">
            <div style="width:36px;height:36px;background:var(--biru);border-radius:8px;
                        display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <i class="bi {{ $b['icon'] }}" style="color:white;font-size:0.9rem;"></i>
            </div>
            <div>
                <div style="font-size:0.7rem;color:var(--muted);font-weight:600;text-transform:uppercase;letter-spacing:0.5px;">{{ $b['arah'] }}</div>
                <div style="font-size:0.82rem;font-weight:600;color:var(--text);">{{ $b['wilayah'] }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<h6 class="fw-bold mt-4 mb-3" style="color:var(--biru);">Kondisi Topografi</h6>
<p>Wilayah Kabupaten Kuningan didominasi oleh daerah perbukitan dan pegunungan dengan ketinggian bervariasi dari 0 hingga 3.078 meter di atas permukaan laut. Puncak tertinggi adalah <strong>Gunung Ciremai</strong> (3.078 mdpl) yang merupakan gunung tertinggi di Jawa Barat.</p>

<p>Wilayah dataran rendah umumnya berada di bagian utara kabupaten, sementara bagian selatan dan barat didominasi perbukitan dan pegunungan yang subur.</p>

<p class="text-muted mt-3" style="font-size:0.75rem;">Sumber: BPS Kabupaten Kuningan</p>

@endsection