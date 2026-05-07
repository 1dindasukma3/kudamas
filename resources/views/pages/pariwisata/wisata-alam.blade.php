@extends('layouts.page')
@section('title', 'Wisata Alam')
@section('page-title', 'Wisata Alam')

@push('styles')
<style>
    .wisata-card {
        background: #F8FAFC;
        border: 1px solid var(--border);
        border-radius: 14px; overflow: hidden;
        transition: all 0.22s;
    }
    .wisata-card:hover {
        border-color: rgba(27,58,107,0.2);
        box-shadow: 0 8px 24px rgba(27,58,107,0.1);
        transform: translateY(-2px);
    }
    .wisata-thumb {
        height: 130px;
        background: linear-gradient(135deg, #1B3A6B, #2563EB);
        display: flex; align-items: center; justify-content: center;
        font-size: 3.5rem;
    }
    .wisata-body { padding: 14px; }
    .wisata-name { font-weight: 700; font-size: 0.9rem; color: var(--text); margin-bottom: 4px; }
    .wisata-loc { font-size: 0.75rem; color: var(--muted); display: flex; align-items: center; gap: 4px; }
    .wisata-desc { font-size: 0.8rem; color: #475569; margin-top: 8px; line-height: 1.5; }
</style>
@endpush

@section('page-content')

<div class="row g-3">
    @php $wisata = [
        ['nama'=>'Gunung Ciremai','lokasi'=>'Cigugur / Cilimus','icon'=>'🏔️','desc'=>'Gunung tertinggi di Jawa Barat (3.078 mdpl). Destinasi favorit pendaki dari seluruh Indonesia.'],
        ['nama'=>'Waduk Darma','lokasi'=>'Darma','icon'=>'💧','desc'=>'Waduk buatan seluas 430 Ha dengan pemandangan alam yang indah dan aktivitas air yang beragam.'],
        ['nama'=>'Talaga Remis','lokasi'=>'Dukupuntang','icon'=>'🌊','desc'=>'Danau alami yang tenang dikelilingi hutan hijau dengan ekosistem yang terjaga.'],
        ['nama'=>'Curug Sidomba','lokasi'=>'Kuningan','icon'=>'🌊','desc'=>'Air terjun indah dengan kolam alami di bawahnya, cocok untuk refreshing.'],
        ['nama'=>'Cibulan','lokasi'=>'Maniskidul','icon'=>'🐟','desc'=>'Sumber mata air dengan kolam renang alami dan ikan-ikan keramat yang dipercaya masyarakat setempat.'],
        ['nama'=>'Balong Dalem','lokasi'=>'Cigugur','icon'=>'💧','desc'=>'Kolam alami yang jernih dengan suasana alam yang sejuk dan asri.'],
    ]; @endphp

    @foreach($wisata as $w)
    <div class="col-md-6">
        <div class="wisata-card">
            <div class="wisata-thumb">{{ $w['icon'] }}</div>
            <div class="wisata-body">
                <div class="wisata-name">{{ $w['nama'] }}</div>
                <div class="wisata-loc"><i class="bi bi-geo-alt-fill"></i> {{ $w['lokasi'] }}</div>
                <div class="wisata-desc">{{ $w['desc'] }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">Sumber: Dinas Pariwisata Kabupaten Kuningan</p>

@endsection