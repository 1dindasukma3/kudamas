@extends('layouts.page')

@section('title', 'Media Sosial BPS')
@section('page-title', 'Media Sosial BPS')

@section('page-content')
<p>Ikuti BPS Kabupaten Kuningan di media sosial:</p>

@php
$sosmed = [
    ['nama' => 'Instagram', 'akun' => '@bps3208', 'url' => 'https://instagram.com/bps3208', 'icon' => '📸', 'warna' => '#E1306C'],
    ['nama' => 'Facebook', 'akun' => 'BPS Kabupaten Kuningan', 'url' => '#', 'icon' => '📘', 'warna' => '#1877F2'],
    ['nama' => 'YouTube', 'akun' => 'BPS Kuningan', 'url' => '#', 'icon' => '▶️', 'warna' => '#FF0000'],
    ['nama' => 'Website', 'akun' => 'kuningankab.bps.go.id', 'url' => 'https://kuningankab.bps.go.id', 'icon' => '🌐', 'warna' => '#1B3A6B'],
];
@endphp

<div class="mt-2 d-flex flex-column gap-2">
    @foreach($sosmed as $item)
    <a href="{{ $item['url'] }}" target="_blank"
       class="d-flex align-items-center gap-3 p-3 rounded-3 text-decoration-none"
       style="background: #F8FAFC; border: 1px solid #E2E8F0;">
        <div style="font-size: 1.8rem;">{{ $item['icon'] }}</div>
        <div>
            <div class="fw-bold" style="color: {{ $item['warna'] }}; font-size: 0.9rem;">{{ $item['nama'] }}</div>
            <div style="font-size: 0.8rem; color: #64748B;">{{ $item['akun'] }}</div>
        </div>
        <div class="ms-auto" style="color: #CBD5E1;">›</div>
    </a>
    @endforeach
</div>
@endsection