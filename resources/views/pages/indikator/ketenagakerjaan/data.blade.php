@extends('layouts.page')

@section('title', 'Data Ketenagakerjaan')
@section('page-title', 'Ketenagakerjaan')

@section('page-content')

<div style="font-size:15px; color:#3A3A3A;">

    {{-- ANGKATAN KERJA --}}
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
                        ">
                        Angkatan Kerja 2023
                    </th>
                </tr>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th style="border:none; font-weight:500;">
                        Kegiatan Utama
                    </th>

                    <th style="border:none; font-weight:500;">
                        Laki-Laki
                    </th>

                    <th style="border:none; font-weight:500;">
                        Perempuan
                    </th>

                    <th style="border:none; font-weight:500;">
                        Jumlah
                    </th>

                </tr>

            </thead>

            <tbody style="vertical-align:top;">

                <tr>
                    <td><strong>Angkatan Kerja</strong></td>
                    <td class="text-center">382.883</td>
                    <td class="text-center">191.286</td>
                    <td class="text-center">574.169</td>
                </tr>

                <tr>
                    <td>Bekerja</td>
                    <td class="text-center">345.408</td>
                    <td class="text-center">174.250</td>
                    <td class="text-center">519.658</td>
                </tr>

                <tr>
                    <td>Pengangguran Terbuka</td>
                    <td class="text-center">37.475</td>
                    <td class="text-center">17.036</td>
                    <td class="text-center">54.511</td>
                </tr>

            </tbody>

        </table>

    </div>

    {{-- BUKAN ANGKATAN KERJA --}}
    <div class="table-responsive mt-4">

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
                        ">
                        Bukan Angkatan Kerja 2023
                    </th>
                </tr>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th style="border:none; font-weight:500;">
                        Kegiatan Utama
                    </th>

                    <th style="border:none; font-weight:500;">
                        Laki-Laki
                    </th>

                    <th style="border:none; font-weight:500;">
                        Perempuan
                    </th>

                    <th style="border:none; font-weight:500;">
                        Jumlah
                    </th>

                </tr>

            </thead>

            <tbody style="vertical-align:top;">

                <tr>
                    <td><strong>Bukan Angkatan Kerja</strong></td>
                    <td class="text-center">84.632</td>
                    <td class="text-center">267.985</td>
                    <td class="text-center">352.617</td>
                </tr>

                <tr>
                    <td>Sekolah</td>
                    <td class="text-center">38.397</td>
                    <td class="text-center">35.458</td>
                    <td class="text-center">73.855</td>
                </tr>

                <tr>
                    <td>Mengurus Rumah Tangga</td>
                    <td class="text-center">16.349</td>
                    <td class="text-center">223.268</td>
                    <td class="text-center">239.617</td>
                </tr>

                <tr>
                    <td>Lainnya</td>
                    <td class="text-center">29.886</td>
                    <td class="text-center">9.259</td>
                    <td class="text-center">39.145</td>
                </tr>

            </tbody>

        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:10px; font-style:italic;">
        Sumber: BPS, Kabupaten Kuningan Dalam Angka
    </p>

</div>

@endsection