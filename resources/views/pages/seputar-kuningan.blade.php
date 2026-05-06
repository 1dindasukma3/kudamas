@extends('layouts.page')

@section('title', 'Seputar Kuningan')
@section('page-title', 'Seputar Kuningan')

@section('page-content')

{{-- Submenu accordion --}}
<div class="accordion" id="accordionKuningan">

    <div class="accordion-item border-0 mb-2" style="border-radius: 10px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.08);">
        <h2 class="accordion-header">
            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGeo"
                    style="font-size: 0.85rem; background-color: #EFF6FF; color: #1B3A6B;">
                🗺️ Geografi & Iklim
            </button>
        </h2>
        <div id="collapseGeo" class="accordion-collapse collapse show" data-bs-parent="#accordionKuningan">
            <div class="accordion-body" style="font-size: 0.85rem;">
                Kabupaten Kuningan terletak di bagian timur Provinsi Jawa Barat, dengan luas wilayah sekitar 1.195,71 km².
            </div>
        </div>
    </div>

    <div class="accordion-item border-0 mb-2" style="border-radius: 10px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.08);">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePem"
                    style="font-size: 0.85rem; background-color: #EFF6FF; color: #1B3A6B;">
                🏛️ Pemerintahan
            </button>
        </h2>
        <div id="collapsePem" class="accordion-collapse collapse" data-bs-parent="#accordionKuningan">
            <div class="accordion-body" style="font-size: 0.85rem;">
                <p><strong>Perangkat Daerah Kabupaten Kuningan, yaitu:</strong></p>
                <ol>
                    <li>Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah</li>
                    <li>Badan Pengelolaan Pendapatan Daerah</li>
                    <li>Badan Pengelolaan Keuangan dan Aset Daerah</li>
                    {{-- tambahkan data lainnya --}}
                </ol>
            </div>
        </div>
    </div>

</div>

@endsection