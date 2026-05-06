@extends('layouts.page')
@section('title', 'PDRB')
@section('page-title', 'Produk Domestik Regional Bruto')

@section('page-content')
<div class="submenu-grid">

    <a href="{{ route('pdrb.konsep') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-book-fill"></i></div>
        <span>Konsep</span>
    </a>

    <a href="{{ route('pdrb.perkapita') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-graph-up-arrow"></i></div>
        <span>PDRB Perkapita & Laju Pertumbuhan Ekonomi (LIPE)</span>
    </a>

    <a href="https://kuningankab.bps.go.id" target="_blank" class="submenu-card unduh">
        <div class="sc-icon"><i class="bi bi-download"></i></div>
        <span>Unduh di Web</span>
    </a>

</div>
@endsection