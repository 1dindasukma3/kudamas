@extends('layouts.page')

@section('title', 'Seni Budaya')
@section('page-title', 'Seni Budaya')

@push('styles')
<style>

    .wisata-card{
        background:#fff;
        border-radius:18px;
        overflow:hidden;
        border:1px solid #E5E7EB;
        box-shadow:0 4px 14px rgba(0,0,0,0.06);
        height:100%;
        transition:0.3s;
    }

    .wisata-card:hover{
        transform:translateY(-4px);
        box-shadow:0 8px 24px rgba(0,0,0,0.1);
    }

    .wisata-thumb img{
        width:100%;
        height:220px;
        object-fit:cover;
    }

    .wisata-body{
        padding:16px;
    }

    .wisata-name{
        font-size:1rem;
        font-weight:700;
        color:#1E3A8A;
        margin-bottom:6px;
    }

    .wisata-loc{
        font-size:0.78rem;
        color:#6B7280;
        margin-bottom:10px;
        display:flex;
        gap:4px;
        align-items:flex-start;
    }

    .wisata-desc{
        font-size:0.82rem;
        color:#475569;
        line-height:1.7;
        text-align:justify;
    }

    .wisata-tags{
        display:flex;
        flex-wrap:wrap;
        gap:6px;
        margin-top:14px;
    }

    .wisata-tag{
        background:#EFF6FF;
        color:#2563EB;
        padding:4px 10px;
        border-radius:999px;
        font-size:0.68rem;
        font-weight:600;
    }

</style>
@endpush

@section('page-content')

<div class="row g-4">

    @foreach($seni as $item)

    <div class="col-md-6">

        <div class="wisata-card">

            <div class="wisata-thumb">

                <img src="{{ $item['Foto'] ?? '' }}"
                     alt="{{ $item['Nama'] ?? '' }}">

            </div>

            <div class="wisata-body">

            <div class="wisata-name">
    {{ $item['Nama'] ?? '-' }}
</div>

                <div class="wisata-loc">
                    <i class="bi bi-geo-alt-fill"></i>
                    {{ $item['Lokasi'] ?? '-' }}
                </div>

                <div class="wisata-desc">
                    {{ $item['Deskripsi'] ?? '-' }}
                </div>

                <div class="wisata-tags">

                    <span class="wisata-tag">
                        {{ $item['Tag 1'] ?? '-' }}
                    </span>

                    <span class="wisata-tag">
                        {{ $item['Tag 2'] ?? '-' }}
                    </span>

                    <span class="wisata-tag">
                        {{ $item['Tag 3'] ?? '-' }}
                    </span>

                    <span class="wisata-tag">
                        {{ $item['Tag 4'] ?? '-' }}
                    </span>

                    <span class="wisata-tag">
                        {{ $item['Tag 5'] ?? '-' }}
                    </span>

                </div>

            </div>

        </div>

    </div>

    @endforeach

</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">
    Sumber: Dinas Pariwisata dan Kebudayaan Kabupaten Kuningan
</p>

@endsection