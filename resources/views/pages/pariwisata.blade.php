@extends('layouts.page')
@section('title', 'Pariwisata')
@section('page-title', 'Pariwisata')

@section('page-content')
<div class="submenu-grid">

    <a href="{{ route('pw.alam') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-tree-fill"></i></div>
        <span>Wisata Alam</span>
    </a>

    <a href="{{ route('pw.seni-budaya') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-music-note-beamed"></i></div>
        <span>Seni Budaya</span>
    </a>

    <a href="{{ route('pw.buatan') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-buildings-fill"></i></div>
        <span>Wisata Buatan</span>
    </a>

    <a href="{{ route('pw.sejarah') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-bank2"></i></div>
        <span>Wisata Sejarah & Religi</span>
    </a>

    <a href="{{ route('pw.kuliner') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-cup-hot-fill"></i></div>
        <span>Wisata Kuliner</span>
    </a>

    <a href="{{ route('pw.hotel') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-house-fill"></i></div>
        <span>Hotel & Penginapan</span>
    </a>

</div>
@endsection