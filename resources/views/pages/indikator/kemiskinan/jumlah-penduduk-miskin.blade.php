@extends('layouts.page')

@section('title', 'Jumlah Penduduk Miskin')
@section('page-title', 'Jumlah Penduduk Miskin')

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
                        Ribuan Orang
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                <tr><td>2012</td><td>142,90</td></tr>
                <tr><td>2013</td><td>139,40</td></tr>
                <tr><td>2014</td><td>133,60</td></tr>
                <tr><td>2015</td><td>147,20</td></tr>
                <tr><td>2016</td><td>144,10</td></tr>
                <tr><td>2017</td><td>141,60</td></tr>
                <tr><td>2018</td><td>131,20</td></tr>
                <tr><td>2019</td><td>123,16</td></tr>
                <tr><td>2020</td><td>139,20</td></tr>
                <tr><td>2021</td><td>143,35</td></tr>
                <tr><td>2022</td><td>140,25</td></tr>
                <tr><td>2023</td><td>133,88</td></tr>
                <tr><td>2024</td><td>131,83</td></tr>

            </tbody>

        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:10px; font-style:italic;">
        Sumber: BPS, Rilis Berita Resmi Statistik
    </p>

</div>

@endsection