@extends('layouts.page')
@section('title', 'Bupati Kabupaten Kuningan')
@section('page-title', 'Bupati Kabupaten Kuningan')

@section('page-content')

<div class="text-center mb-4">
    <div style="width:100px;height:100px;background:linear-gradient(135deg,#1B3A6B,#2563EB);
                border-radius:50%;display:flex;align-items:center;justify-content:center;
                margin:0 auto 16px;font-size:3rem;box-shadow:0 8px 24px rgba(27,58,107,0.3);">
        👤
    </div>
    <div style="font-size:1.2rem;font-weight:800;color:var(--biru);">H. Dian Rachmat Yanuar, S.Si., M.Si.</div>
    <div style="font-size:0.82rem;color:var(--muted);margin-top:4px;">Bupati Kabupaten Kuningan</div>
    <div style="font-size:0.78rem;color:var(--muted);">Periode 2024 — 2029</div>
</div>

<div class="row g-3 mb-4">
    <div class="col-md-6">
        <div class="p-3 rounded-3" style="background:#EFF6FF;border:1px solid #DBEAFE;">
            <div style="font-size:0.68rem;color:var(--muted);text-transform:uppercase;letter-spacing:1px;font-weight:700;margin-bottom:4px;">Jabatan</div>
            <div style="font-size:0.88rem;font-weight:600;color:var(--text);">Bupati Kabupaten Kuningan</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="p-3 rounded-3" style="background:#EFF6FF;border:1px solid #DBEAFE;">
            <div style="font-size:0.68rem;color:var(--muted);text-transform:uppercase;letter-spacing:1px;font-weight:700;margin-bottom:4px;">Masa Jabatan</div>
            <div style="font-size:0.88rem;font-weight:600;color:var(--text);">2024 — 2029</div>
        </div>
    </div>
</div>

<h6 class="fw-bold mb-3" style="color:var(--biru);">Visi</h6>
<div class="info-box">
    "Kuningan Maju, Sejahtera, dan Berdaya Saing Berbasis Agrobisnis dan Pariwisata yang Religius dan Berbudaya"
</div>

<h6 class="fw-bold mt-4 mb-3" style="color:var(--biru);">Misi</h6>
<ol style="padding-left:1.2rem;font-size:0.88rem;line-height:2;">
    <li>Meningkatkan kualitas sumber daya manusia yang beriman, bertaqwa dan berbudaya.</li>
    <li>Mengembangkan ekonomi kerakyatan berbasis agrobisnis dan pariwisata.</li>
    <li>Meningkatkan infrastruktur dan aksesibilitas wilayah.</li>
    <li>Meningkatkan tata kelola pemerintahan yang baik dan bersih.</li>
    <li>Meningkatkan kualitas lingkungan hidup yang berkelanjutan.</li>
</ol>

<p class="text-muted mt-4" style="font-size:0.75rem;">* Data dummy — sesuaikan dengan data resmi Pemkab Kuningan</p>

@endsection