@extends('layouts.main')
@section('title', '')

@section('main-content')

    <div class="page-breadcrumb">
        <a href="{{ route('home') }}"><i class="bi bi-grid-fill"></i> Menu</a>
        <i class="bi bi-chevron-right" style="font-size:0.6rem;"></i>
        @yield('breadcrumb-parent')
        <span class="current">@yield('page-title')</span>
    </div>

    <div class="page-title">@yield('page-title')</div>

    <div class="page-card">
        @yield('page-content')
    </div>

@endsection