@extends('layouts.page')
@section('title', 'Informasi Pendidikan')
@section('page-title', 'Informasi Pendidikan')

@section('page-content')

<div class="row g-3 mb-4">
    @php $data = [
        ['label'=>'SD / Sederajat','val'=>'621','icon'=>'bi-building','bg'=>'#EFF6FF','c'=>'#2563EB'],
        ['label'=>'SMP / Sederajat','val'=>'189','icon'=>'bi-building','bg'=>'#F0FDF4','c'=>'#16A34A'],
        ['label'=>'SMA / Sederajat','val'=>'87','icon'=>'bi-building','bg'=>'#FFFBEB','c'=>'#D97706'],
        ['label'=>'Perguruan Tinggi','val'=>'8','icon'=>'bi-mortarboard-fill','bg'=>'#FEF2F2','c'=>'#DC2626'],
    ]; @endphp

    @foreach($data as $d)
    <div class="col-6">
        <div class="stat-card d-flex align-items-center gap-3 text-start p-3">
            <div class="stat-icon-wrap"
                 data-bg="{{ $d['bg'] }}"
                 data-color="{{ $d['c'] }}">
                <i class="bi {{ $d['icon'] }}"></i>
            </div>
            <div>
                <div style="font-size:1.4rem;font-weight:800;color:var(--biru);">{{ $d['val'] }}</div>
                <div style="font-size:0.72rem;color:var(--muted);">{{ $d['label'] }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<h6 class="fw-bold mb-3" style="color:var(--biru);">Angka Partisipasi Sekolah (APS)</h6>
<div class="table-responsive">
    <table class="table table-hover table-bordered" style="font-size:0.83rem;">
        <thead style="background:var(--biru);color:white;text-align:center;">
            <tr>
                <th>Jenjang</th>
                <th>APS 2022</th>
                <th>APS 2023</th>
                <th>APS 2024</th>
            </tr>
        </thead>
        <tbody style="text-align:center;">
            <tr><td>SD (7–12 thn)</td><td>98,21%</td><td>98,45%</td><td>98,67%</td></tr>
            <tr><td>SMP (13–15 thn)</td><td>89,34%</td><td>90,12%</td><td>90,78%</td></tr>
            <tr><td>SMA (16–18 thn)</td><td>72,45%</td><td>73,89%</td><td>75,12%</td></tr>
        </tbody>
    </table>
</div>

<p class="text-muted mt-3" style="font-size:0.75rem;">Sumber: Dinas Pendidikan Kabupaten Kuningan & BPS</p>

{{-- Terapkan warna via JS agar VSCode tidak error --}}
<script>
    document.querySelectorAll('.stat-icon-wrap').forEach(el => {
        el.style.width        = '44px';
        el.style.height       = '44px';
        el.style.background   = el.dataset.bg;
        el.style.borderRadius = '12px';
        el.style.display      = 'flex';
        el.style.alignItems   = 'center';
        el.style.justifyContent = 'center';
        el.style.flexShrink   = '0';
        el.querySelector('i').style.color    = el.dataset.color;
        el.querySelector('i').style.fontSize = '1.2rem';
    });
</script>

@endsection