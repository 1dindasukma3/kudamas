@extends('layouts.page')
@section('title', 'Umur Harapan Hidup')
@section('page-title', 'Umur Harapan Hidup')
@section('page-content')

<div class="table-responsive">
    <table class="table table-bordered table-hover" style="font-size:0.9rem;">
        <thead style="background:#1B3A6B;color:white;text-align:center;">
            <tr>
                <th>Tahun</th>
                <th>UHH</th>
            </tr>
        </thead>

        <tbody style="text-align:center;">
            <tr><td>2010</td><td>70,02</td></tr>
            <tr><td>2011</td><td>72,10</td></tr>
            <tr><td>2012</td><td>72,15</td></tr>
            <tr><td>2013</td><td>72,21</td></tr>
            <tr><td>2014</td><td>72,24</td></tr>
            <tr><td>2015</td><td>72,64</td></tr>
            <tr><td>2016</td><td>72,76</td></tr>
            <tr><td>2017</td><td>72,88</td></tr>
            <tr><td>2018</td><td>73,11</td></tr>
            <tr><td>2019</td><td>73,35</td></tr>
            <tr><td>2020*</td><td>74,25</td></tr>
            <tr><td>2021*</td><td>74,43</td></tr>
            <tr><td>2022*</td><td>74,67</td></tr>
            <tr><td>2023*</td><td>74,91</td></tr>
            <tr><td>2024*</td><td>75,22</td></tr>
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