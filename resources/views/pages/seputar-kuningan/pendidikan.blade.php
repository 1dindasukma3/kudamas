@extends('layouts.page')
@section('title', 'Informasi Pendidikan')
@section('page-title', 'Informasi Pendidikan')
@section('page-content')

{{-- ══ TABEL APS / APM / APK DARI SPREADSHEET ══ --}}
<h6 class="fw-bold mb-3" style="color:var(--biru);">
    <i class="bi bi-bar-chart-line me-1"></i> Angka Partisipasi Sekolah / Murni / Kasar
</h6>

<div class="table-responsive mb-4">
    <table class="table table-hover table-bordered" style="font-size:0.83rem;">
        <thead style="background:var(--biru);color:white;text-align:center;">
            <tr>
                <th>Keterangan</th>
                <th>Laki-Laki</th>
                <th>Perempuan</th>
                <th>Laki-laki dan Perempuan</th>
            </tr>
            <tr style="background:rgba(255,255,255,0.15);font-size:0.75rem;font-weight:400;">
                <th>(1)</th><th>(2)</th><th>(3)</th><th>(4)</th>
            </tr>
        </thead>
        <tbody>
            @forelse($aps as $row)
            <tr style="text-align:center;">
                <td style="text-align:left;font-weight:600;">{{ $row['keterangan'] }}</td>
                <td>{{ $row['laki'] }}</td>
                <td>{{ $row['perempuan'] }}</td>
                <td style="font-weight:700;color:var(--biru);">{{ $row['total'] }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center text-muted py-3">
                    <i class="bi bi-exclamation-circle me-1"></i>
                    Data belum tersedia
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<p class="text-muted mt-3" style="font-size:0.75rem;">
    Sumber: Badan Pusat Statistik Kabupaten Kuningan
</p>

@endsection