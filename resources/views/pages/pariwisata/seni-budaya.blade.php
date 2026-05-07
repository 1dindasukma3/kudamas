@extends('layouts.page')
@section('title', 'Seni Budaya')
@section('page-title', 'Seni Budaya')

@section('page-content')

<p class="mb-4">Kabupaten Kuningan memiliki kekayaan seni dan budaya yang beragam, mencerminkan akulturasi budaya Sunda dengan nilai-nilai lokal yang khas.</p>

<div class="row g-3">
    @php $seni = [
        ['nama'=>'Sintren','icon'=>'💃','desc'=>'Seni pertunjukan tradisional Sunda yang memadukan tarian, musik, dan ritual. Sintren dipercaya menampilkan gadis yang kerasukan roh halus.'],
        ['nama'=>'Tarling','icon'=>'🎸','desc'=>'Seni musik khas Cirebon-Kuningan yang menggunakan gitar dan suling sebagai instrumen utama. Tarling berasal dari kata "gitar" dan "suling".'],
        ['nama'=>'Batik Kuningan','icon'=>'🎨','desc'=>'Batik khas Kuningan dengan motif-motif yang terinspirasi dari alam sekitar Gunung Ciremai dan budaya lokal.'],
        ['nama'=>'Wayang Golek','icon'=>'🎭','desc'=>'Kesenian wayang dengan boneka kayu yang sangat populer di masyarakat Sunda, termasuk di Kabupaten Kuningan.'],
        ['nama'=>'Debus','icon'=>'⚔️','desc'=>'Kesenian tradisional yang menampilkan ketangguhan fisik dengan berbagai atraksi ekstrem yang telah melalui ritual khusus.'],
        ['nama'=>'Upacara Seren Taun','lokasi'=>'Cigugur','icon'=>'🌾','desc'=>'Upacara adat tahunan sebagai wujud syukur atas hasil panen yang dilaksanakan di Cigugur setiap bulan Rayagung.'],
    ]; @endphp

    @foreach($seni as $s)
    <div class="col-md-6">
        <div class="d-flex gap-3 p-3 rounded-3" style="background:#F8FAFC;border:1px solid var(--border);">
            <div style="font-size:2.2rem;flex-shrink:0;">{{ $s['icon'] }}</div>
            <div>
                <div style="font-weight:700;font-size:0.9rem;color:var(--text);margin-bottom:5px;">{{ $s['nama'] }}</div>
                <div style="font-size:0.8rem;color:#475569;line-height:1.55;">{{ $s['desc'] }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">Sumber: Dinas Pariwisata dan Kebudayaan Kabupaten Kuningan</p>

@endsection