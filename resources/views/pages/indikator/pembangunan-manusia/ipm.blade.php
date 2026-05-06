@extends('layouts.page')
@section('title', 'Indeks Pembangunan Manusia')
@section('page-title', 'Indeks Pembangunan Manusia')
@section('page-content')

<div class="table-responsive">
    <table class="table table-bordered table-hover" style="font-size:0.9rem;">
        <thead style="background:#1B3A6B;color:white;text-align:center;">
            <tr>
                <th>Tahun</th>
                <th>IPM*</th>
            </tr>
        </thead>

        <tbody style="text-align:center;">
            <tr><td>2020</td><td>69,66</td></tr>
            <tr><td>2021</td><td>69,99</td></tr>
            <tr><td>2022</td><td>70,44</td></tr>
            <tr><td>2023</td><td>70,99</td></tr>
            <tr><td>2024</td><td>71,56</td></tr>
        </tbody>
    </table>
</div>

<div class="mt-3">
    <p class="text-muted mb-1" style="font-size:0.75rem;">
        Catatan: *UHH Hasil Long Form SP2020
    </p>

    <p class="text-muted" style="font-size:0.75rem;">
        Sumber: BPS, Rilis Berita Resmi Statistik
    </p>
</div>

@endsection