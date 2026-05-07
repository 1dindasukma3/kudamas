@extends('layouts.page')
@section('title', 'Wisata Sejarah & Religi')
@section('page-title', 'Wisata Sejarah & Religi')

@section('page-content')

<div class="row g-3">
    @php $wisata = [
        ['nama'=>'Museum Linggarjati','lokasi'=>'Cilimus','icon'=>'🏛️','desc'=>'Museum bersejarah tempat ditandatanganinya Perjanjian Linggarjati pada 1946 antara Indonesia dan Belanda.'],
        ['nama'=>'Makam Sunan Rahmat','lokasi'=>'Ancaran','icon'=>'🕌','desc'=>'Makam salah satu tokoh penyebar Islam di Kuningan yang banyak diziarahi masyarakat.'],
        ['nama'=>'Candi Jiwa','lokasi'=>'Kuningan','icon'=>'🛕','desc'=>'Situs candi Hindu-Buddha peninggalan kerajaan kuno yang menjadi bukti sejarah peradaban awal di Kuningan.'],
        ['nama'=>'Situs Watu Luhur','lokasi'=>'Ciawigebang','icon'=>'🗿','desc'=>'Batu megalitik bersejarah yang dipercaya sebagai peninggalan nenek moyang masyarakat Kuningan.'],
        ['nama'=>'Masjid Agung Kuningan','lokasi'=>'Kuningan','icon'=>'🕌','desc'=>'Masjid bersejarah yang menjadi pusat kegiatan keagamaan masyarakat Muslim Kuningan.'],
        ['nama'=>'Gedung Perundingan Linggarjati','lokasi'=>'Cilimus','icon'=>'🏛️','desc'=>'Gedung bersejarah saksi bisu perundingan diplomatik pertama Indonesia pasca kemerdekaan.'],
    ]; @endphp

    @foreach($wisata as $w)
    <div class="col-md-6">
        <div class="d-flex gap-3 p-3 rounded-3" style="background:#F8FAFC;border:1px solid var(--border);">
            <div style="font-size:2.2rem;flex-shrink:0;">{{ $w['icon'] }}</div>
            <div>
                <div style="font-weight:700;font-size:0.9rem;color:var(--text);margin-bottom:2px;">{{ $w['nama'] }}</div>
                <div style="font-size:0.72rem;color:var(--muted);margin-bottom:5px;display:flex;align-items:center;gap:4px;">
                    <i class="bi bi-geo-alt-fill"></i> {{ $w['lokasi'] }}
                </div>
                <div style="font-size:0.8rem;color:#475569;line-height:1.55;">{{ $w['desc'] }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">Sumber: Dinas Pariwisata Kabupaten Kuningan</p>

@endsection