@extends('layouts.page')
@section('title', 'Indeks Penyusunan IPM')
@section('page-title', 'Indeks Penyusunan IPM')
@section('page-content')

<div class="row g-3 mb-4">
    <div class="col-4">
        <div class="p-3 rounded-3 text-center" style="background:#EFF6FF;">
            <div style="font-size:1.2rem;font-weight:800;color:#1B3A6B;">0,786</div>
            <div style="font-size:0.7rem;color:#64748B;">Indeks Kesehatan</div>
        </div>
    </div>
    <div class="col-4">
        <div class="p-3 rounded-3 text-center" style="background:#EFF6FF;">
            <div style="font-size:1.2rem;font-weight:800;color:#1B3A6B;">0,659</div>
            <div style="font-size:0.7rem;color:#64748B;">Indeks Pendidikan</div>
        </div>
    </div>
    <div class="col-4">
        <div class="p-3 rounded-3 text-center" style="background:#EFF6FF;">
            <div style="font-size:1.2rem;font-weight:800;color:#1B3A6B;">0,612</div>
            <div style="font-size:0.7rem;color:#64748B;">Indeks Pengeluaran</div>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-hover table-bordered" style="font-size:0.83rem;">
        <thead style="background:#1B3A6B;color:white;text-align:center;">
            <tr>
                <th>Tahun</th>
                <th>Indeks Kesehatan</th>
                <th>Indeks Pendidikan</th>
                <th>Indeks Pengeluaran</th>
                <th>IPM</th>
            </tr>
        </thead>
        <tbody style="text-align:center;">
            <tr><td>2024</td><td>0,786</td><td>0,659</td><td>0,612</td><td><strong>68,54</strong></td></tr>
            <tr><td>2023</td><td>0,781</td><td>0,648</td><td>0,604</td><td>67,89</td></tr>
            <tr><td>2022</td><td>0,775</td><td>0,636</td><td>0,595</td><td>67,21</td></tr>
            <tr><td>2021</td><td>0,769</td><td>0,624</td><td>0,585</td><td>66,54</td></tr>
            <tr><td>2020</td><td>0,764</td><td>0,612</td><td>0,571</td><td>65,92</td></tr>
        </tbody>
    </table>
</div>
<p class="text-muted" style="font-size:0.75rem;">Sumber: BPS Kabupaten Kuningan</p>
@endsection