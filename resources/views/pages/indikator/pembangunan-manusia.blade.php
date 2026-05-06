@extends('layouts.page')
@section('title', 'Pembangunan Manusia')
@section('page-title', 'Pembangunan Manusia')

@section('page-content')
<div class="submenu-grid">

    <a href="{{ route('pm.konsep') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-book-fill"></i></div>
        <span>Konsep</span>
    </a>

    <a href="{{ route('pm.uhh') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-heart-pulse-fill"></i></div>
        <span>Umur Harapan Hidup (UHH)</span>
    </a>

    <a href="{{ route('pm.eys') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-mortarboard-fill"></i></div>
        <span>Harapan Lama Sekolah (EYS)</span>
    </a>

    <a href="{{ route('pm.mys') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-pencil-fill"></i></div>
        <span>Rata-rata Lama Sekolah (MYS)</span>
    </a>

    <a href="{{ route('pm.ppp') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-currency-dollar"></i></div>
        <span>Purchasing Power Parity (PPP)</span>
    </a>

    <a href="{{ route('pm.ipm') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-person-fill-up"></i></div>
        <span>Indeks Pembangunan Manusia (IPM)</span>
    </a>

    <a href="{{ route('pm.pertumbuhan') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-graph-up"></i></div>
        <span>Pertumbuhan IPM</span>
    </a>

    <a href="https://kuningankab.bps.go.id" target="_blank" class="submenu-card unduh">
        <div class="sc-icon"><i class="bi bi-download"></i></div>
        <span>Unduh di Web</span>
    </a>

</div>
@endsection