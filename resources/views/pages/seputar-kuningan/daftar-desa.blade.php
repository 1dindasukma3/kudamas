@extends('layouts.page')
@section('title', 'Daftar Nama Desa')
@section('page-title', 'Daftar Nama Desa')

@push('styles')
<style>
    .kecamatan-block {
        margin-bottom: 24px;
    }
    .kecamatan-header {
        background: var(--biru);
        color: white;
        padding: 10px 16px;
        border-radius: 10px;
        font-weight: 700;
        font-size: 0.88rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .desa-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 8px;
    }
    .desa-item {
        background: #F8FAFC;
        border: 1px solid var(--border);
        border-radius: 8px;
        padding: 8px 12px;
        font-size: 0.82rem;
        color: var(--text);
        display: flex;
        align-items: center;
        gap: 7px;
    }
    .desa-item::before {
        content: '';
        width: 6px; height: 6px;
        background: var(--biru-muda);
        border-radius: 50%;
        flex-shrink: 0;
    }
    @media (max-width: 576px) {
        .desa-grid { grid-template-columns: repeat(2, 1fr); }
    }
</style>
@endpush

@section('page-content')

<p class="mb-4" style="color:var(--muted);">
    Kabupaten Kuningan terdiri dari <strong>32 kecamatan</strong> dengan total <strong>361 desa/kelurahan</strong>.
    Berikut daftar nama desa per kecamatan:
</p>

{{-- KECAMATAN KUNINGAN --}}
<div class="kecamatan-block">
    <div class="kecamatan-header">
        <i class="bi bi-geo-alt-fill"></i> Kecamatan Kuningan
    </div>
    <div class="desa-grid">
        <div class="desa-item">Awirarangan</div>
        <div class="desa-item">Cijoho</div>
        <div class="desa-item">Cigintung</div>
        <div class="desa-item">Citangtu</div>
        <div class="desa-item">Kuningan</div>
        <div class="desa-item">Ancaran</div>
        <div class="desa-item">Winduhaji</div>
        <div class="desa-item">Windusengkahan</div>
        <div class="desa-item">Kasturi</div>
    </div>
</div>

{{-- KECAMATAN CILIMUS --}}
<div class="kecamatan-block">
    <div class="kecamatan-header">
        <i class="bi bi-geo-alt-fill"></i> Kecamatan Cilimus
    </div>
    <div class="desa-grid">
        <div class="desa-item">Cilimus</div>
        <div class="desa-item">Caracas</div>
        <div class="desa-item">Linggaindah</div>
        <div class="desa-item">Setianegara</div>
        <div class="desa-item">Cibeureum</div>
        <div class="desa-item">Kaliaren</div>
        <div class="desa-item">Mandapajaya</div>
        <div class="desa-item">Sampora</div>
    </div>
</div>

{{-- KECAMATAN CIGUGUR --}}
<div class="kecamatan-block">
    <div class="kecamatan-header">
        <i class="bi bi-geo-alt-fill"></i> Kecamatan Cigugur
    </div>
    <div class="desa-grid">
        <div class="desa-item">Cigugur</div>
        <div class="desa-item">Sukamulya</div>
        <div class="desa-item">Cisantana</div>
        <div class="desa-item">Gunungkeling</div>
        <div class="desa-item">Puncak</div>
        <div class="desa-item">Babakanmulya</div>
    </div>
</div>

{{-- KECAMATAN CIAWIGEBANG --}}
<div class="kecamatan-block">
    <div class="kecamatan-header">
        <i class="bi bi-geo-alt-fill"></i> Kecamatan Ciawigebang
    </div>
    <div class="desa-grid">
        <div class="desa-item">Ciawigebang</div>
        <div class="desa-item">Ciawilor</div>
        <div class="desa-item">Cigarukgak</div>
        <div class="desa-item">Geresik</div>
        <div class="desa-item">Lebaksiuh</div>
        <div class="desa-item">Pamulihan</div>
        <div class="desa-item">Randusari</div>
        <div class="desa-item">Sidaraja</div>
    </div>
</div>

{{-- KECAMATAN LURAGUNG --}}
<div class="kecamatan-block">
    <div class="kecamatan-header">
        <i class="bi bi-geo-alt-fill"></i> Kecamatan Luragung
    </div>
    <div class="desa-grid">
        <div class="desa-item">Luragung</div>
        <div class="desa-item">Cibingbin</div>
        <div class="desa-item">Cibuntu</div>
        <div class="desa-item">Luragunglandeuh</div>
        <div class="desa-item">Padarama</div>
        <div class="desa-item">Sangkanurip</div>
    </div>
</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">
    * Data dummy — sesuaikan dengan data desa lengkap dari BPS Kabupaten Kuningan
</p>

@endsection