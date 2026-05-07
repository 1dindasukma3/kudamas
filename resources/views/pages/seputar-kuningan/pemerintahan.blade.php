@extends('layouts.page')
@section('title', 'Pemerintahan')
@section('page-title', 'Pemerintahan')

@push('styles')
<style>
    .opd-list { display: flex; flex-direction: column; gap: 8px; }
    .opd-item {
        display: flex; align-items: center; gap: 12px;
        background: #F8FAFC;
        border: 1px solid var(--border);
        border-radius: 10px; padding: 11px 14px;
        font-size: 0.85rem; color: var(--text);
    }
    .opd-num {
        width: 28px; height: 28px;
        background: var(--biru); color: white;
        border-radius: 50%; font-size: 0.72rem;
        font-weight: 700; display: flex;
        align-items: center; justify-content: center;
        flex-shrink: 0;
    }
</style>
@endpush

@section('page-content')

<div class="row g-3 mb-4">
    <div class="col-4">
        <div class="stat-card">
            <div class="stat-value">32</div>
            <div class="stat-label">Kecamatan</div>
        </div>
    </div>
    <div class="col-4">
        <div class="stat-card">
            <div class="stat-value">361</div>
            <div class="stat-label">Desa / Kelurahan</div>
        </div>
    </div>
    <div class="col-4">
        <div class="stat-card">
            <div class="stat-value">15</div>
            <div class="stat-label">Kelurahan</div>
        </div>
    </div>
</div>

<h6 class="fw-bold mb-3" style="color:var(--biru);">Perangkat Daerah Kabupaten Kuningan</h6>

<div class="opd-list">
    @php
    $opd = [
        'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah',
        'Badan Pengelolaan Pendapatan Daerah',
        'Badan Pengelolaan Keuangan dan Aset Daerah',
        'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia',
        'Badan Rumah Sakit Umum 45 Kabupaten Kuningan',
        'Badan Rumah Sakit Umum Linggajati',
        'Badan Kesatuan Bangsa dan Politik',
        'Badan Penanggulangan Bencana Daerah',
        'Sekretariat DPRD Kabupaten Kuningan',
        'Inspektorat Kabupaten Kuningan',
        'Dinas Pendidikan dan Kebudayaan',
        'Dinas Kesehatan',
        'Dinas Pekerjaan Umum dan Tata Ruang',
        'Dinas Perumahan, Kawasan Permukiman dan Pertanahan',
        'Satuan Polisi Pamong Praja',
        'Dinas Sosial',
        'Dinas Tenaga Kerja dan Transmigrasi',
        'Dinas Ketahanan Pangan dan Pertanian',
        'Dinas Lingkungan Hidup',
        'Dinas Kependudukan dan Catatan Sipil',
        'Dinas Pemberdayaan Masyarakat dan Desa',
        'Dinas Pengendalian Penduduk, Keluarga Berencana, Pemberdayaan Perempuan dan Perlindungan Anak',
        'Dinas Komunikasi dan Informatika',
        'Dinas Koperasi, Usaha Kecil dan Menengah',
        'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu',
        'Dinas Kepemudaan dan Olahraga',
        'Dinas Kearsipan dan Perpustakaan',
        'Dinas Pariwisata dan Kebudayaan',
        'Dinas Perdagangan dan Perindustrian',
    ];
    @endphp

    @foreach($opd as $i => $nama)
    <div class="opd-item">
        <div class="opd-num">{{ $i + 1 }}</div>
        <span>{{ $nama }}</span>
    </div>
    @endforeach
</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">Sumber: Pemerintah Kabupaten Kuningan</p>

@endsection