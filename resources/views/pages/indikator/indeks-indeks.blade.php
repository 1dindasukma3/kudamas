@extends('layouts.page')
@section('title', 'Indeks-Indeks')
@section('page-title', 'Indeks-Indeks')

@section('page-content')
<div class="submenu-grid">

    <a href="{{ route('indeks.konsep') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-book-fill"></i></div>
        <span>Konsep</span>
    </a>

    <a href="{{ route('indeks.penyusunan') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-clipboard-data-fill"></i></div>
        <span>Indeks Penyusunan IPM</span>
    </a>

    <a href="{{ route('indeks.gender') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-gender-ambiguous"></i></div>
        <span>Indeks Ketimpangan Gender & Indeks Pembangunan Gender</span>
    </a>

</div>
@endsection