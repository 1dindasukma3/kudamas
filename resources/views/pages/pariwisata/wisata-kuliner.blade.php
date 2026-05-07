@extends('layouts.page')
@section('title', 'Wisata Kuliner')
@section('page-title', 'Wisata Kuliner')

@section('page-content')

<p class="mb-4">Kabupaten Kuningan memiliki berbagai kuliner khas yang wajib dicoba saat berkunjung:</p>

<div class="row g-3">
    @php $kuliner = [
        ['nama'=>'Nasi Tutug Oncom','icon'=>'🍚','harga'=>'Rp 10.000 – 20.000','desc'=>'Nasi yang dicampur dengan oncom goreng, khas Kuningan dan populer sebagai sarapan.'],
        ['nama'=>'Docang','icon'=>'🍲','harga'=>'Rp 8.000 – 15.000','desc'=>'Sayur lontong dengan kuah santan bercampur oncom dan sayuran, makanan khas Cirebon-Kuningan.'],
        ['nama'=>'Tahu Kuningan','icon'=>'🟡','harga'=>'Rp 2.000/biji','desc'=>'Tahu putih lembut khas Kuningan yang terkenal karena teksturnya yang lembut dan rasanya yang gurih.'],
        ['nama'=>'Empal Gentong','icon'=>'🥘','harga'=>'Rp 25.000 – 40.000','desc'=>'Gulai daging sapi yang dimasak dalam gentong tanah liat dengan bumbu rempah khas.'],
        ['nama'=>'Kerupuk Kulit','icon'=>'🍿','harga'=>'Rp 15.000/bungkus','desc'=>'Kerupuk dari kulit sapi/kerbau yang digoreng renyah, oleh-oleh favorit dari Kuningan.'],
        ['nama'=>'Pedesan Entog','icon'=>'🍖','harga'=>'Rp 30.000 – 50.000','desc'=>'Masakan daging itik manila dengan kuah pedas khas, cita rasa yang kuat dan menggugah selera.'],
    ]; @endphp

    @foreach($kuliner as $k)
    <div class="col-md-6">
        <div class="d-flex gap-3 p-3 rounded-3 h-100"
             style="background:#F8FAFC;border:1px solid var(--border);">
            <div style="font-size:2.2rem;flex-shrink:0;">{{ $k['icon'] }}</div>
            <div>
                <div style="font-weight:700;font-size:0.9rem;color:var(--text);margin-bottom:2px;">{{ $k['nama'] }}</div>
                <div style="font-size:0.72rem;color:#16A34A;font-weight:600;margin-bottom:5px;">{{ $k['harga'] }}</div>
                <div style="font-size:0.8rem;color:#475569;line-height:1.55;">{{ $k['desc'] }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">Sumber: Dinas Pariwisata Kabupaten Kuningan</p>

@endsection