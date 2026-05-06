@extends('layouts.page')
@section('title', 'Ketenagakerjaan')
@section('page-title', 'Ketenagakerjaan')

@section('page-content')
<div class="submenu-grid">

    <a href="{{ route('ketenagakerjaan.konsep') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-book-fill"></i></div>
        <span>Konsep</span>
    </a>

    <a href="{{ route('ketenagakerjaan.data') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-briefcase-fill"></i></div>
        <span>Ketenagakerjaan</span>
    </a>

    <a href="{{ route('ketenagakerjaan.tpt-tpak') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-bar-chart-fill"></i></div>
        <span>TPT dan TPAK</span>
    </a>

    <a href="https://kuningankab.bps.go.id" target="_blank" class="submenu-card unduh">
        <div class="sc-icon"><i class="bi bi-download"></i></div>
        <span>Unduh di Web</span>
    </a>

</div>
@endsection