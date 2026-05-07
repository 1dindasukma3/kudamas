@extends('layouts.page')
@section('title', 'Rumah Sakit')
@section('page-title', 'Rumah Sakit')

@push('styles')
<style>
    .rs-card {
        background: #F8FAFC;
        border: 1px solid var(--border);
        border-radius: 12px;
        padding: 16px;
        display: flex;
        gap: 14px;
        align-items: flex-start;
        transition: all 0.2s;
    }
    .rs-card:hover {
        border-color: rgba(27,58,107,0.2);
        box-shadow: 0 4px 16px rgba(27,58,107,0.08);
    }
    .rs-icon {
        width: 46px; height: 46px;
        background: #EFF6FF;
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.3rem; flex-shrink: 0;
    }
    .rs-name { font-weight: 700; font-size: 0.88rem; color: var(--text); margin-bottom: 3px; }
    .rs-detail { font-size: 0.78rem; color: var(--muted); line-height: 1.5; }
    .rs-badge {
        display: inline-block;
        font-size: 0.65rem; font-weight: 700;
        padding: 2px 8px; border-radius: 99px;
        margin-top: 4px;
    }
    .badge-a { background: #DCFCE7; color: #166534; }
    .badge-b { background: #DBEAFE; color: #1E40AF; }
    .badge-c { background: #FEF9C3; color: #854D0E; }
</style>
@endpush

@section('page-content')

<div class="row g-3 mb-4">
    <div class="col-4">
        <div class="stat-card">
            <div class="stat-value">2</div>
            <div class="stat-label">RS Pemerintah</div>
        </div>
    </div>
    <div class="col-4">
        <div class="stat-card">
            <div class="stat-value">4</div>
            <div class="stat-label">RS Swasta</div>
        </div>
    </div>
    <div class="col-4">
        <div class="stat-card">
            <div class="stat-value">47</div>
            <div class="stat-label">Puskesmas</div>
        </div>
    </div>
</div>

<h6 class="fw-bold mb-3" style="color:var(--biru);">Daftar Rumah Sakit</h6>

<div class="d-flex flex-column gap-3">

    <div class="rs-card">
        <div class="rs-icon">🏥</div>
        <div>
            <div class="rs-name">RSUD 45 Kuningan</div>
            <div class="rs-detail">
                Jl. Siliwangi No. 2, Kuningan<br>
                Telp: (0232) 871014
            </div>
            <span class="rs-badge badge-a">Kelas B</span>
        </div>
    </div>

    <div class="rs-card">
        <div class="rs-icon">🏥</div>
        <div>
            <div class="rs-name">RSUD Linggajati Kuningan</div>
            <div class="rs-detail">
                Jl. Linggajati, Cilimus, Kuningan<br>
                Telp: (0232) 614xxx
            </div>
            <span class="rs-badge badge-b">Kelas C</span>
        </div>
    </div>

    <div class="rs-card">
        <div class="rs-icon">🏥</div>
        <div>
            <div class="rs-name">RS Islam Kuningan</div>
            <div class="rs-detail">
                Jl. Veteran, Kuningan<br>
                Telp: (0232) 871xxx
            </div>
            <span class="rs-badge badge-b">Kelas C</span>
        </div>
    </div>

    <div class="rs-card">
        <div class="rs-icon">🏥</div>
        <div>
            <div class="rs-name">RSIA Cahaya Bunda</div>
            <div class="rs-detail">
                Jl. RE. Martadinata, Kuningan<br>
                Telp: (0232) 872xxx
            </div>
            <span class="rs-badge badge-c">RS Ibu & Anak</span>
        </div>
    </div>

</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">* Data dummy — sesuaikan dengan data resmi Dinkes Kabupaten Kuningan</p>

@endsection