@extends('layouts.page')
@section('title', 'Kependudukan')
@section('page-title', 'Kependudukan')

@section('page-content')
<div class="submenu-grid">

    <a href="{{ route('kependudukan.konsep') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-book-fill"></i></div>
        <span>Konsep</span>
    </a>

    <a href="{{ route('kependudukan.jenis-kelamin') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-gender-ambiguous"></i></div>
        <span>Menurut Jenis Kelamin</span>
    </a>

    <a href="{{ route('kependudukan.kelompok-umur') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-people-fill"></i></div>
        <span>Menurut Kelompok Umur</span>
    </a>

    <a href="https://kuningankab.bps.go.id" target="_blank" class="submenu-card unduh">
        <div class="sc-icon"><i class="bi bi-download"></i></div>
        <span>Unduh di Web</span>
    </a>

</div>
@endsection