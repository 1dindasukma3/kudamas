@extends('layouts.page')
@section('title', 'Kemiskinan')
@section('page-title', 'Kemiskinan')

@section('page-content')
<div class="submenu-grid">

    <a href="{{ route('kemiskinan.konsep') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-book-fill"></i></div>
        <span>Konsep</span>
    </a>

    <a href="{{ route('kemiskinan.garis') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-slash-circle-fill"></i></div>
        <span>Garis Kemiskinan</span>
    </a>

    <a href="{{ route('kemiskinan.jumlah') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-people-fill"></i></div>
        <span>Jumlah Penduduk Miskin</span>
    </a>

    <a href="{{ route('kemiskinan.persentase') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-percent"></i></div>
        <span>Persentase Penduduk Miskin</span>
    </a>

    <a href="{{ route('kemiskinan.kedalaman') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-arrow-down-circle-fill"></i></div>
        <span>Indeks Kedalaman Miskin</span>
    </a>

    <a href="{{ route('kemiskinan.keparahan') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-exclamation-triangle-fill"></i></div>
        <span>Indeks Keparahan Kemiskinan</span>
    </a>

    <a href="https://kuningankab.bps.go.id" target="_blank" class="submenu-card unduh">
        <div class="sc-icon"><i class="bi bi-download"></i></div>
        <span>Unduh di Web</span>
    </a>

</div>
@endsection