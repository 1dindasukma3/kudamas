@extends('layouts.page')
@section('title', 'Indikator Statistik')
@section('page-title', 'Indikator Statistik')

@section('page-content')
<div class="submenu-grid">

    <a href="{{ route('kependudukan') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-people-fill"></i></div>
        <span>Kependudukan</span>
    </a>

    <a href="{{ route('kemiskinan') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-house-slash-fill"></i></div>
        <span>Kemiskinan</span>
    </a>

    <a href="{{ route('pdrb') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-graph-up-arrow"></i></div>
        <span>Produk Domestik Regional Bruto</span>
    </a>

    <a href="{{ route('gini-ratio') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-bar-chart-steps"></i></div>
        <span>Gini Ratio</span>
    </a>

    <a href="{{ route('ketenagakerjaan') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-briefcase-fill"></i></div>
        <span>Ketenagakerjaan</span>
    </a>

    <a href="{{ route('pembangunan-manusia') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-person-fill-up"></i></div>
        <span>Pembangunan Manusia</span>
    </a>

    <a href="{{ route('indeks-indeks') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-clipboard-data-fill"></i></div>
        <span>Indeks-Indeks</span>
    </a>

</div>
@endsection