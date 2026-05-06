@extends('layouts.page')

@section('title', 'Pariwisata')
@section('page-title', 'Pariwisata')

@section('page-content')
<p>Objek wisata unggulan Kabupaten Kuningan:</p>

@php
$wisata = [
    ['nama' => 'Waduk Darma', 'deskripsi' => 'Danau buatan yang indah dengan pemandangan Gunung Ciremai.'],
    ['nama' => 'Cibulan', 'deskripsi' => 'Kolam renang alami dengan ikan-ikan keramat.'],
    ['nama' => 'Talaga Remis', 'deskripsi' => 'Danau alami di kaki Gunung Ciremai.'],
    ['nama' => 'Linggarjati', 'deskripsi' => 'Situs bersejarah perjanjian Linggarjati.'],
];
@endphp

<div class="mt-2">
    @foreach($wisata as $item)
    <div class="d-flex gap-3 py-3 border-bottom align-items-start">
        <div style="width:50px;height:50px;background:#DBEAFE;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1.4rem;flex-shrink:0;">
            🏞️
        </div>
        <div>
            <div class="fw-bold" style="color: #1B3A6B; font-size: 0.9rem;">{{ $item['nama'] }}</div>
            <div style="font-size: 0.8rem; color: #64748B; margin-top: 2px;">{{ $item['deskripsi'] }}</div>
        </div>
    </div>
    @endforeach
</div>
@endsection