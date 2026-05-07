@extends('layouts.page')
@section('title', 'Seputar Kuningan')
@section('page-title', 'Seputar Kuningan')

@section('page-content')
<div class="submenu-grid">

    <a href="{{ route('sk.daftar-desa') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-pin-map-fill"></i></div>
        <span>Daftar Nama Desa</span>
    </a>

    <a href="{{ route('sk.hari-jadi') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-calendar-heart-fill"></i></div>
        <span>Hari Jadi / Sejarah</span>
    </a>

    <a href="{{ route('sk.pemerintahan') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-building-fill"></i></div>
        <span>Pemerintahan</span>
    </a>

    <a href="{{ route('sk.geografis') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-globe-asia-australia"></i></div>
        <span>Kondisi Geografis</span>
    </a>

    <a href="{{ route('sk.bupati') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-person-badge-fill"></i></div>
        <span>Bupati Kabupaten Kuningan</span>
    </a>

    <a href="{{ route('sk.rumah-sakit') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-hospital-fill"></i></div>
        <span>Rumah Sakit</span>
    </a>

    <a href="{{ route('sk.pendidikan') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-mortarboard-fill"></i></div>
        <span>Informasi Pendidikan</span>
    </a>

</div>
@endsection