@extends('layouts.page')

@section('title', 'Garis Kemiskinan')
@section('page-title', 'Garis Kemiskinan')

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
                        (rupiah/kapita/bulan)
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                <tr><td>2012</td><td>264.851</td></tr>
                <tr><td>2013</td><td>261.858</td></tr>
                <tr><td>2014</td><td>271.015</td></tr>
                <tr><td>2015</td><td>276.154</td></tr>
                <tr><td>2016</td><td>289.901</td></tr>
                <tr><td>2017</td><td>302.061</td></tr>
                <tr><td>2018</td><td>332.483</td></tr>
                <tr><td>2019</td><td>340.775</td></tr>
                <tr><td>2020</td><td>352.358</td></tr>
                <tr><td>2021</td><td>358.069</td></tr>
                <tr><td>2022</td><td>371.665</td></tr>
                <tr><td>2023</td><td>402.767</td></tr>
                <tr><td>2024</td><td>420.867</td></tr>

            </tbody>

        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:10px; font-style:italic;">
        Sumber: BPS, Rilis Berita Resmi Statistik
    </p>

</div>

@endsection