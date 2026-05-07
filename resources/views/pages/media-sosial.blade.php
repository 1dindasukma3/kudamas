@extends('layouts.page')
@section('title', 'Media Sosial BPS')
@section('page-title', 'Media Sosial BPS')

@push('styles')
<style>
    /* Card instansi BPS */
    .bps-block {
        background: white;
        border: 1px solid var(--border);
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 2px 12px rgba(27,58,107,0.07);
        margin-bottom: 20px;
    }

    .bps-block-header {
        background: linear-gradient(135deg, var(--biru) 0%, #1e4080 100%);
        padding: 18px 22px;
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .bps-block-icon {
        width: 48px; height: 48px;
        background: rgba(255,255,255,0.15);
        border-radius: 14px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.4rem; flex-shrink: 0;
    }

    .bps-block-name {
        color: white;
        font-weight: 800; font-size: 0.95rem;
        line-height: 1.2;
    }

    .bps-block-sub {
        color: rgba(255,255,255,0.6);
        font-size: 0.72rem;
        margin-top: 2px;
    }

    .bps-block-body {
        padding: 16px;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 10px;
    }

    /* Social media button */
    .sosmed-btn {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 7px;
        padding: 14px 8px;
        border-radius: 14px;
        text-decoration: none;
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.3px;
        transition: all 0.22s cubic-bezier(.4,0,.2,1);
        border: 1.5px solid var(--border);
        background: var(--bg);
        color: var(--text);
    }

    .sosmed-btn:hover {
        transform: translateY(-4px);
        color: white;
        border-color: transparent;
        box-shadow: 0 8px 20px rgba(0,0,0,0.18);
    }

    .sosmed-btn .s-icon {
        width: 40px; height: 40px;
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.15rem;
        transition: all 0.22s;
    }

    /* Warna per platform */
    .s-website  { --sc: #1B3A6B; }
    .s-facebook  { --sc: #1877F2; }
    .s-twitter   { --sc: #000000; }
    .s-instagram { --sc: #E1306C; }
    .s-youtube   { --sc: #FF0000; }

    .sosmed-btn.s-website  .s-icon { background: rgba(27,58,107,0.1);  color: #1B3A6B; }
    .sosmed-btn.s-facebook  .s-icon { background: rgba(24,119,242,0.1); color: #1877F2; }
    .sosmed-btn.s-twitter   .s-icon { background: rgba(0,0,0,0.07);     color: #000; }
    .sosmed-btn.s-instagram .s-icon { background: rgba(225,48,108,0.1); color: #E1306C; }
    .sosmed-btn.s-youtube   .s-icon { background: rgba(255,0,0,0.1);    color: #FF0000; }

    .sosmed-btn.s-website:hover  { background: #1B3A6B; }
    .sosmed-btn.s-facebook:hover  { background: #1877F2; }
    .sosmed-btn.s-twitter:hover   { background: #000; }
    .sosmed-btn.s-instagram:hover {
        background: linear-gradient(135deg,#833ab4,#fd1d1d,#fcb045);
    }
    .sosmed-btn.s-youtube:hover  { background: #FF0000; }

    .sosmed-btn:hover .s-icon {
        background: rgba(255,255,255,0.2);
        color: white;
    }

    .sosmed-label { text-transform: uppercase; }

    @media (max-width: 576px) {
        .bps-block-body { grid-template-columns: repeat(3, 1fr); }
    }
</style>
@endpush

@section('page-content')

@php
$bpsData = [
    [
        'nama'  => 'BPS Republik Indonesia',
        'sub'   => 'Badan Pusat Statistik RI',
        'icon'  => '🇮🇩',
        'sosmed' => [
            ['type'=>'s-website',  'label'=>'Website',   'icon'=>'bi-globe',          'url'=>'https://bps.go.id'],
            ['type'=>'s-facebook',  'label'=>'Facebook',  'icon'=>'bi-facebook',       'url'=>'https://facebook.com/bpsgoid'],
            ['type'=>'s-twitter',   'label'=>'Twitter/X', 'icon'=>'bi-twitter-x',      'url'=>'https://twitter.com/bpsgoid'],
            ['type'=>'s-instagram', 'label'=>'Instagram', 'icon'=>'bi-instagram',      'url'=>'https://instagram.com/bpsgoid'],
            ['type'=>'s-youtube',   'label'=>'YouTube',   'icon'=>'bi-youtube',        'url'=>'https://youtube.com/@bpsgoid'],
        ],
    ],
    [
        'nama'  => 'BPS Provinsi Jawa Barat',
        'sub'   => 'Badan Pusat Statistik Prov. Jabar',
        'icon'  => '🏞️',
        'sosmed' => [
            ['type'=>'s-website',  'label'=>'Website',   'icon'=>'bi-globe',          'url'=>'https://jabar.bps.go.id'],
            ['type'=>'s-facebook',  'label'=>'Facebook',  'icon'=>'bi-facebook',       'url'=>'https://facebook.com/bpsjabar'],
            ['type'=>'s-twitter',   'label'=>'Twitter/X', 'icon'=>'bi-twitter-x',      'url'=>'https://twitter.com/bpsjabar'],
            ['type'=>'s-instagram', 'label'=>'Instagram', 'icon'=>'bi-instagram',      'url'=>'https://instagram.com/bpsjabar'],
            ['type'=>'s-youtube',   'label'=>'YouTube',   'icon'=>'bi-youtube',        'url'=>'https://youtube.com/@bpsjabar'],
        ],
    ],
    [
        'nama'  => 'BPS Kabupaten Kuningan',
        'sub'   => 'Badan Pusat Statistik Kab. Kuningan',
        'icon'  => '📊',
        'sosmed' => [
            ['type'=>'s-website',  'label'=>'Website',   'icon'=>'bi-globe',          'url'=>'https://kuningankab.bps.go.id'],
            ['type'=>'s-facebook',  'label'=>'Facebook',  'icon'=>'bi-facebook',       'url'=>'https://facebook.com/bps3208'],
            ['type'=>'s-twitter',   'label'=>'Twitter/X', 'icon'=>'bi-twitter-x',      'url'=>'https://twitter.com/bps3208'],
            ['type'=>'s-instagram', 'label'=>'Instagram', 'icon'=>'bi-instagram',      'url'=>'https://instagram.com/bps3208'],
            ['type'=>'s-youtube',   'label'=>'YouTube',   'icon'=>'bi-youtube',        'url'=>'https://youtube.com/@bps3208'],
        ],
    ],
];
@endphp

@foreach($bpsData as $bps)
<div class="bps-block">

    {{-- Header --}}
    <div class="bps-block-header">
        <div class="bps-block-icon">{{ $bps['icon'] }}</div>
        <div>
            <div class="bps-block-name">{{ $bps['nama'] }}</div>
            <div class="bps-block-sub">{{ $bps['sub'] }}</div>
        </div>
    </div>

    {{-- Social media buttons --}}
    <div class="bps-block-body">
        @foreach($bps['sosmed'] as $s)
        <a href="{{ $s['url'] }}" target="_blank" rel="noopener"
           class="sosmed-btn {{ $s['type'] }}">
            <div class="s-icon">
                <i class="bi {{ $s['icon'] }}"></i>
            </div>
            <span class="sosmed-label">{{ $s['label'] }}</span>
        </a>
        @endforeach
    </div>

</div>
@endforeach

@endsection