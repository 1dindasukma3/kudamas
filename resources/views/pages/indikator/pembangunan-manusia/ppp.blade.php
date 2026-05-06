@extends('layouts.page')
@section('title', 'Purchasing Power Parity')
@section('page-title', 'PURCHASING POWER PARITY (PPP)')
@section('page-content')

<div class="table-responsive">
    <table class="table table-bordered table-hover" style="font-size:0.9rem;">
        <thead style="background:#1B3A6B;color:white;text-align:center;">
            <tr>
                <th>Tahun</th>
                <th>(Ribu Rupiah/orang/tahun)</th>
            </tr>
        </thead>

        <tbody style="text-align:center;">
            <tr><td>2010</td><td>8.205</td></tr>
            <tr><td>2011</td><td>8.231</td></tr>
            <tr><td>2012</td><td>8.248</td></tr>
            <tr><td>2013</td><td>8.348</td></tr>
            <tr><td>2014</td><td>8.393</td></tr>
            <tr><td>2015</td><td>8.516</td></tr>
            <tr><td>2016</td><td>8.580</td></tr>
            <tr><td>2017</td><td>8.736</td></tr>
            <tr><td>2018</td><td>9.297</td></tr>
            <tr><td>2019</td><td>9.673</td></tr>
            <tr><td>2020</td><td>9.459</td></tr>
            <tr><td>2021</td><td>9.409</td></tr>
            <tr><td>2022</td><td>9.620</td></tr>
            <tr><td>2023</td><td>10.011</td></tr>
            <tr><td>2024</td><td>10.418</td></tr>
        </tbody>
    </table>
</div>

<div class="mt-3">
    <p class="text-muted" style="font-size:0.75rem;">
        Sumber: BPS, Rilis Berita Resmi Statistik
    </p>
</div>

@endsection