@extends('layouts.page')
@section('title', 'Hotel & Penginapan')
@section('page-title', 'Hotel & Penginapan')

@push('styles')
<style>
    .hotel-card {
        background: #F8FAFC;
        border: 1px solid var(--border);
        border-radius: 12px; padding: 16px;
        display: flex; gap: 14px;
        transition: all 0.2s;
    }
    .hotel-card:hover {
        border-color: rgba(27,58,107,0.2);
        box-shadow: 0 4px 16px rgba(27,58,107,0.08);
    }
    .hotel-icon {
        width: 48px; height: 48px;
        background: linear-gradient(135deg,#1B3A6B,#2563EB);
        border-radius: 12px; font-size: 1.4rem;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }
    .hotel-name { font-weight: 700; font-size: 0.9rem; color: var(--text); }
    .hotel-loc { font-size: 0.75rem; color: var(--muted); margin: 2px 0; }
    .hotel-stars { color: #F5C518; font-size: 0.75rem; }
    .hotel-price { font-size: 0.78rem; color: #16A34A; font-weight: 600; margin-top: 4px; }
</style>
@endpush

@section('page-content')

<div class="row g-3 mb-4">
    <div class="col-4">
        <div class="stat-card">
            <div class="stat-value">12</div>
            <div class="stat-label">Hotel</div>
        </div>
    </div>
    <div class="col-4">
        <div class="stat-card">
            <div class="stat-value">34</div>
            <div class="stat-label">Penginapan / Villa</div>
        </div>
    </div>
    <div class="col-4">
        <div class="stat-card">
            <div class="stat-value">1.240</div>
            <div class="stat-label">Total Kamar</div>
        </div>
    </div>
</div>

<div class="d-flex flex-column gap-3">

    @php $hotel = [
        ['nama'=>'Hotel Tirta Sanita','lokasi'=>'Cigugur, Kuningan','bintang'=>4,'harga'=>'Rp 450.000 – 900.000/malam','icon'=>'🏨'],
        ['nama'=>'Hotel Permata Kuningan','lokasi'=>'Jl. RE Martadinata, Kuningan','bintang'=>3,'harga'=>'Rp 300.000 – 600.000/malam','icon'=>'🏩'],
        ['nama'=>'Villa Linggarjati','lokasi'=>'Cilimus, Kuningan','bintang'=>3,'harga'=>'Rp 350.000 – 700.000/malam','icon'=>'🏡'],
        ['nama'=>'Wisma Ciremai','lokasi'=>'Jl. Siliwangi, Kuningan','bintang'=>2,'harga'=>'Rp 150.000 – 300.000/malam','icon'=>'🏠'],
        ['nama'=>'Penginapan Darma Indah','lokasi'=>'Waduk Darma, Kuningan','bintang'=>2,'harga'=>'Rp 200.000 – 400.000/malam','icon'=>'🏡'],
    ]; @endphp

    @foreach($hotel as $h)
    <div class="hotel-card">
        <div class="hotel-icon">{{ $h['icon'] }}</div>
        <div>
            <div class="hotel-name">{{ $h['nama'] }}</div>
            <div class="hotel-loc"><i class="bi bi-geo-alt-fill"></i> {{ $h['lokasi'] }}</div>
            <div class="hotel-stars">
                @for($i=0;$i<$h['bintang'];$i++) ★ @endfor
                @for($i=$h['bintang'];$i<5;$i++) ☆ @endfor
                <span style="color:var(--muted);margin-left:4px;">{{ $h['bintang'] }} Bintang</span>
            </div>
            <div class="hotel-price"><i class="bi bi-tag-fill"></i> {{ $h['harga'] }}</div>
        </div>
    </div>
    @endforeach

</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">* Data dummy — sesuaikan dengan data resmi Dinas Pariwisata Kabupaten Kuningan</p>

@endsection