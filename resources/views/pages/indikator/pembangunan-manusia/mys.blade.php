@extends('layouts.page')
@section('title', 'Rerata Lama Sekolah')
@section('page-title', 'Rerata Lama Sekolah/ MYS')
@section('page-content')

<div class="table-responsive">
    <table class="table table-bordered table-hover" style="font-size:0.9rem;">
        <thead style="background:#1B3A6B;color:white;text-align:center;">
            <tr>
                <th>Tahun</th>
                <th>MYS</th>
            </tr>
        </thead>

        <tbody style="text-align:center;">
            <tr><td>2010</td><td>6,58</td></tr>
            <tr><td>2011</td><td>6,87</td></tr>
            <tr><td>2012</td><td>6,93</td></tr>
            <tr><td>2013</td><td>6,98</td></tr>
            <tr><td>2014</td><td>7,04</td></tr>
            <tr><td>2015</td><td>7,20</td></tr>
            <tr><td>2016</td><td>7,34</td></tr>
            <tr><td>2017</td><td>7,35</td></tr>
            <tr><td>2018</td><td>7,36</td></tr>
            <tr><td>2019</td><td>7,38</td></tr>
            <tr><td>2020</td><td>7,57</td></tr>
            <tr><td>2021</td><td>7,80</td></tr>
            <tr><td>2022</td><td>7,88</td></tr>
            <tr><td>2023</td><td>7,89</td></tr>
            <tr><td>2024</td><td>7,90</td></tr>
        </tbody>
    </table>
</div>

<div class="mt-3">
    <p class="text-muted" style="font-size:0.75rem;">
        Sumber: BPS, Rilis Berita Resmi Statistik
    </p>
</div>

@endsection