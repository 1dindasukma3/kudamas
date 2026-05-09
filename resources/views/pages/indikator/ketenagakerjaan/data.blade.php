@extends('layouts.page')

@section('title', 'Ketenagakerjaan')
@section('page-title', 'Ketenagakerjaan')

@section('page-content')

<div style="font-size:15px; color:#3A3A3A;">

    {{-- ANGKATAN KERJA --}}
    <div class="table-responsive">

        <table class="table border-0 align-middle"
               style="font-size:15px; table-layout:fixed; width:100%;">

            <thead>

                <tr>
                    <th colspan="4"
                        style="background:#2F4B7C; color:white; text-align:center;
                               font-weight:500; padding:14px; border:none;">
                        Angkatan Kerja 2023
                    </th>
                </tr>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th style="border:none; padding:12px; width:40%;">
                        Kegiatan Utama
                    </th>

                    <th style="border:none; padding:12px; width:20%;">
                        Laki-Laki
                    </th>

                    <th style="border:none; padding:12px; width:20%;">
                        Perempuan
                    </th>

                    <th style="border:none; padding:12px; width:20%;">
                        Jumlah
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                @foreach($angkatan as $a)

                <tr>
                    <td style="text-align:left;">{{ $a['kegiatan'] }}</td>
                    <td>{{ $a['laki'] }}</td>
                    <td>{{ $a['perempuan'] }}</td>
                    <td>{{ $a['jumlah'] }}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    {{-- BUKAN ANGKATAN KERJA --}}
    <div class="table-responsive mt-4">

        <table class="table border-0 align-middle"
               style="font-size:15px; table-layout:fixed; width:100%;">

            <thead>

                <tr>
                    <th colspan="4"
                        style="background:#2F4B7C; color:white; text-align:center;
                               font-weight:500; padding:14px; border:none;">
                        Bukan Angkatan Kerja 2023
                    </th>
                </tr>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th style="border:none; padding:12px; width:40%;">
                        Kegiatan Utama
                    </th>

                    <th style="border:none; padding:12px; width:20%;">
                        Laki-Laki
                    </th>

                    <th style="border:none; padding:12px; width:20%;">
                        Perempuan
                    </th>

                    <th style="border:none; padding:12px; width:20%;">
                        Jumlah
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                @foreach($bukanAngkatan as $b)

                <tr>
                    <td style="text-align:left;">{{ $b['Kegiatan'] }}</td>
                    <td>{{ $b['laki'] }}</td>
                    <td>{{ $b['perempuan'] }}</td>
                    <td>{{ $b['jumlah'] }}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:10px; font-style:italic;">
        Sumber: BPS, Kabupaten Kuningan Dalam Angka
    </p>

</div>

@endsection