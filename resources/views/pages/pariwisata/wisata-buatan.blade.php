@extends('layouts.page')
@section('title', 'Wisata Buatan')
@section('page-title', 'Wisata Buatan')

@section('page-content')

<div class="row g-3">
    @php $wisata = [
        ['nama'=>'Taman Kota Kuningan','icon'=>'🌳','desc'=>'Taman kota yang asri di pusat Kuningan, cocok untuk bersantai dan olahraga pagi.'],
        ['nama'=>'Kolam Renang Tirta Kencana','icon'=>'🏊','desc'=>'Kolam renang modern dengan berbagai fasilitas air untuk keluarga.'],
        ['nama'=>'Gedung Pemuda Kuningan','icon'=>'🏛️','desc'=>'Pusat kegiatan pemuda dan seni budaya di jantung kota Kuningan.'],
        ['nama'=>'Alun-alun Kuningan','icon'=>'🌆','desc'=>'Ruang publik utama kota Kuningan yang sering dijadikan pusat kegiatan masyarakat.'],
    ]; @endphp

    @foreach($wisata as $w)
    <div class="col-md-6">
        <div class="d-flex gap-3 p-3 rounded-3" style="background:#F8FAFC;border:1px solid var(--border);">
            <div style="font-size:2.2rem;flex-shrink:0;">{{ $w['icon'] }}</div>
            <div>
                <div style="font-weight:700;font-size:0.9rem;color:var(--text);margin-bottom:5px;">{{ $w['nama'] }}</div>
                <div style="font-size:0.8rem;color:#475569;line-height:1.55;">{{ $w['desc'] }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">Sumber: Dinas Pariwisata Kabupaten Kuningan</p>

@endsection