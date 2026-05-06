@extends('layouts.page')

@section('title', 'Gini Ratio')
@section('page-title', 'Gini Ratio')

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
                        Gini Ratio
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                <tr><td>2008</td><td>0,226</td></tr>
                <tr><td>2009</td><td>0,227</td></tr>
                <tr><td>2010</td><td>0,232</td></tr>
                <tr><td>2011</td><td>0,331</td></tr>
                <tr><td>2012</td><td>0,363</td></tr>
                <tr><td>2013</td><td>0,325</td></tr>
                <tr><td>2014</td><td>0,370</td></tr>
                <tr><td>2015</td><td>0,344</td></tr>
                <tr><td>2016</td><td>0,332</td></tr>
                <tr><td>2017</td><td>0,320</td></tr>
                <tr><td>2018</td><td>0,397</td></tr>
                <tr><td>2019</td><td>0,435</td></tr>
                <tr><td>2020</td><td>0,361</td></tr>
                <tr><td>2021</td><td>0,349</td></tr>
                <tr><td>2022</td><td>0,345</td></tr>
                <tr><td>2023</td><td>0,351</td></tr>
                <tr><td>2024</td><td>0,369</td></tr>

            </tbody>

        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:10px; font-style:italic;">
        Sumber: BPS, Rilis Berita Resmi Statistik
    </p>

</div>

@endsection