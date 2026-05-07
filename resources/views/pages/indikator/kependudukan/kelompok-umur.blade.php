@extends('layouts.page')

@section('title', 'Kependudukan Menurut Kelompok Umur')
@section('page-title', 'Menurut Kelompok Umur')

@section('page-content')

<div style="font-size:15px; color:#3A3A3A;">

    <div class="table-responsive">

        <table class="table border-0 align-middle" style="font-size:15px;">

            <thead>

                <tr>
                    <th colspan="4"
                        style="
                            background:#2F4B7C;
                            color:white;
                            text-align:center;
                            font-weight:500;
                            padding:14px;
                            border:none;
                            line-height:1.5;
                        ">
                        Jumlah Penduduk Menurut Kelompok Umur, Tahun 2025
                    </th>
                </tr>

                <tr style="background:#2F4B7C; color:white;">

                    <th style="border:none; font-weight:500; text-align:center;">
                        Umur
                    </th>

                    <th style="border:none; font-weight:500; text-align:center;">
                        Laki-laki
                    </th>

                    <th style="border:none; font-weight:500; text-align:center;">
                        Perempuan
                    </th>

                    <th style="border:none; font-weight:500; text-align:center;">
                        Total
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

@foreach($kelompokUmur as $umur)

<tr>
    <td>{{ $umur['Kelompok Umur'] }}</td>
    <td>{{ $umur['Laki-Laki'] }}</td>
    <td>{{ $umur['Perempuan'] }}</td>
    <td>{{ $umur['Jumlah'] }}</td>
</tr>

@endforeach

</tbody>
        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:10px;">
        Sumber: BPS, Proyeksi Penduduk Hasil SP2020
    </p>

</div>

@endsection