@extends('layouts.page')

@section('title', 'Indeks Keparahan Kemiskinan')
@section('page-title', 'Indeks Keparahan Kemiskinan')

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
                        (P2)
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                <tr><td>2012</td><td>0,47</td></tr>
                <tr><td>2013</td><td>0,47</td></tr>
                <tr><td>2014</td><td>0,53</td></tr>
                <tr><td>2015</td><td>0,62</td></tr>
                <tr><td>2016</td><td>0,59</td></tr>
                <tr><td>2017</td><td>0,44</td></tr>
                <tr><td>2018</td><td>0,40</td></tr>
                <tr><td>2019</td><td>0,18</td></tr>
                <tr><td>2020</td><td>0,62</td></tr>
                <tr><td>2021</td><td>0,46</td></tr>
                <tr><td>2022</td><td>0,53</td></tr>
                <tr><td>2023</td><td>0,42</td></tr>
                <tr><td>2024</td><td>0,53</td></tr>

            </tbody>

        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:10px; font-style:italic;">
        Sumber: BPS, Rilis Berita Resmi Statistik
    </p>

</div>

@endsection