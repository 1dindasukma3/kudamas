@extends('layouts.page')
@section('title', 'Link Seputar Kuningan')
@section('page-title', 'Link Seputar Kuningan')

@push('styles')
<style>
    .link-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
    }

    .link-card {
        background: white;
        border: 1.5px solid var(--border);
        border-radius: 16px;
        padding: 22px 20px;
        display: flex;
        align-items: center;
        gap: 16px;
        text-decoration: none;
        color: var(--text);
        transition: all 0.22s cubic-bezier(.4,0,.2,1);
        box-shadow: 0 2px 8px rgba(27,58,107,0.05);
        position: relative;
        overflow: hidden;
    }

    .link-card::before {
        content: '';
        position: absolute;
        left: 0; top: 0; bottom: 0;
        width: 4px;
        background: var(--biru);
        border-radius: 0 2px 2px 0;
        transform: scaleY(0);
        transform-origin: bottom;
        transition: transform 0.22s cubic-bezier(.4,0,.2,1);
    }

    .link-card:hover {
        border-color: rgba(27,58,107,0.2);
        box-shadow: 0 8px 28px rgba(27,58,107,0.12);
        transform: translateY(-3px);
        color: var(--text);
    }

    .link-card:hover::before { transform: scaleY(1); }

    .link-logo {
        width: 52px; height: 52px;
        background: var(--biru-light);
        border-radius: 14px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.5rem;
        flex-shrink: 0;
        transition: all 0.22s;
    }

    .link-card:hover .link-logo {
        background: var(--biru);
        color: white;
    }

    .link-name {
        font-weight: 700;
        font-size: 0.88rem;
        color: var(--text);
        line-height: 1.3;
        margin-bottom: 3px;
    }

    .link-url {
        font-size: 0.72rem;
        color: var(--muted);
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .link-ext {
        margin-left: auto;
        width: 30px; height: 30px;
        background: var(--bg);
        border-radius: 8px;
        display: flex; align-items: center; justify-content: center;
        color: var(--muted);
        font-size: 0.75rem;
        flex-shrink: 0;
        transition: all 0.2s;
    }

    .link-card:hover .link-ext {
        background: var(--biru);
        color: white;
    }

    @media (max-width: 576px) {
        .link-grid { grid-template-columns: 1fr; }
    }
</style>
@endpush

@section('page-content')

<p style="color:var(--muted);font-size:0.87rem;margin-bottom:20px;">
    Tautan resmi instansi pemerintahan dan lembaga terkait di Kabupaten Kuningan.
    Klik kartu untuk mengunjungi website masing-masing instansi.
</p>

<div class="link-grid">

    @php
    $links = [
        [
            'nama'  => 'Pemerintah Daerah Kabupaten Kuningan',
            'url'   => 'https://kuningankab.go.id',
            'icon'  => '🏛️',
            'label' => 'kuningankab.go.id',
        ],
        [
            'nama'  => 'Polres Kuningan',
            'url'   => 'https://polreskubu.com',
            'icon'  => '🚔',
            'label' => 'polreskubu.com',
        ],
        [
            'nama'  => 'Dinas Komunikasi dan Informatika',
            'url'   => 'https://diskominfo.kuningankab.go.id',
            'icon'  => '📡',
            'label' => 'diskominfo.kuningankab.go.id',
        ],
        [
            'nama'  => 'Pengadilan Negeri Kuningan',
            'url'   => 'https://pn-kuningan.go.id',
            'icon'  => '⚖️',
            'label' => 'pn-kuningan.go.id',
        ],
        [
            'nama'  => 'Pengadilan Agama Kuningan',
            'url'   => 'https://pa-kuningan.go.id',
            'icon'  => '🕌',
            'label' => 'pa-kuningan.go.id',
        ],
        [
            'nama'  => 'Dinas Kependudukan & Pencatatan Sipil',
            'url'   => 'https://disdukcapil.kuningankab.go.id',
            'icon'  => '👥',
            'label' => 'disdukcapil.kuningankab.go.id',
        ],
        [
            'nama'  => 'Dinas Pemuda, Olahraga dan Pariwisata',
            'url'   => 'https://disporapar.kuningankab.go.id',
            'icon'  => '⛹️',
            'label' => 'disporapar.kuningankab.go.id',
        ],
    ];
    @endphp

    @foreach($links as $link)
    <a href="{{ $link['url'] }}" target="_blank" rel="noopener" class="link-card">
        <div class="link-logo">{{ $link['icon'] }}</div>
        <div style="flex:1;min-width:0;">
            <div class="link-name">{{ $link['nama'] }}</div>
            <div class="link-url">
                <i class="bi bi-globe"></i>
                <span style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">
                    {{ $link['label'] }}
                </span>
            </div>
        </div>
        <div class="link-ext">
            <i class="bi bi-box-arrow-up-right"></i>
        </div>
    </a>
    @endforeach

</div>

@endsection