@extends('layouts.page')
@section('title', 'Pertumbuhan IPM')
@section('page-title', 'Pertumbuhan IPM')
@section('page-content')

<div class="table-responsive">
    <table class="table table-bordered table-hover" style="font-size:0.9rem;">
        <thead style="background:#1B3A6B;color:white;text-align:center;">
            <tr>
                <th>Tahun</th>
                <th>Persen</th>
            </tr>
        </thead>

        <tbody style="text-align:center;">
            <tr><td>2022</td><td>0,64</td></tr>
            <tr><td>2023</td><td>0,78</td></tr>
            <tr><td>2024</td><td>0,80</td></tr>
        </tbody>
    </table>
</div>

<div class="mt-3">
    <p class="text-muted" style="font-size:0.75rem;">
        Sumber: BPS, Rilis Berita Resmi Statistik
    </p>
</div>

@endsection