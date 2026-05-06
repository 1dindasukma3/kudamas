@extends('layouts.page')

@section('title', 'Persentase Penduduk Miskin')
@section('page-title', 'Prosentase Penduduk Miskin')

@section('page-content')

<div style="font-size:15px; color:#3A3A3A;">

    <div class="table-responsive">

        <table class="table border-0 align-middle" style="font-size:15px;">

            <thead>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th style="border:none; font-weight:500; padding:12px;">
                        Tahun
                    </th>

                    <th style="border:none; font-weight:500; padding:12px;">
                        Persen
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                <tr><td>2012</td><td>13,69</td></tr>
                <tr><td>2013</td><td>13,34</td></tr>
                <tr><td>2014</td><td>12,72</td></tr>
                <tr><td>2015</td><td>13,97</td></tr>
                <tr><td>2016</td><td>13,59</td></tr>
                <tr><td>2017</td><td>13,27</td></tr>
                <tr><td>2018</td><td>12,22</td></tr>
                <tr><td>2019</td><td>11,41</td></tr>
                <tr><td>2020</td><td>12,82</td></tr>
                <tr><td>2021</td><td>13,10</td></tr>
                <tr><td>2022</td><td>12,76</td></tr>
                <tr><td>2023</td><td>12,12</td></tr>
                <tr><td>2024</td><td>11,88</td></tr>

            </tbody>

        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:10px; font-style:italic;">
        Sumber: BPS, Rilis Berita Resmi Statistik
    </p>

</div>

@endsection