@extends('layouts.page')

@section('title', 'Kependudukan Menurut Jenis Kelamin')
@section('page-title', 'Menurut Jenis Kelamin')

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
                        Jumlah Penduduk Menurut Jenis Kelamin dan Kecamatan, Tahun 2025
                    </th>
                </tr>

                <tr style="background:#2F4B7C; color:white;">

                    <th style="border:none; font-weight:500; padding:10px;">
                        Kecamatan
                    </th>

                    <th style="border:none; font-weight:500; text-align:center;">
                        Laki-Laki
                    </th>

                    <th style="border:none; font-weight:500; text-align:center;">
                        Perempuan
                    </th>

                    <th style="border:none; font-weight:500; text-align:center;">
                        Jumlah
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach($jenisKelamin as $jk)

                <tr style="{{ $jk['Kecamatan'] == 'Kab. Kuningan' ? 'font-weight:bold;' : '' }}">

                    <td>{{ $jk['Kecamatan'] }}</td>
                    <td class="text-center">{{ $jk['Laki-Laki'] }}</td>
                    <td class="text-center">{{ $jk['Perempuan'] }}</td>
                    <td class="text-center">{{ $jk['Jumlah'] }}</td>

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