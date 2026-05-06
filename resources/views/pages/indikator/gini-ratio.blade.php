@extends('layouts.page')
@section('title', 'Gini Ratio')
@section('page-title', 'Gini Ratio')

@section('page-content')
<div class="submenu-grid">

    <a href="{{ route('gini-ratio.konsep') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-book-fill"></i></div>
        <span>Konsep</span>
    </a>

    <a href="{{ route('gini-ratio.data') }}" class="submenu-card">
        <div class="sc-icon"><i class="bi bi-bar-chart-steps"></i></div>
        <span>Gini Ratio</span>
    </a>

</div>
@endsection