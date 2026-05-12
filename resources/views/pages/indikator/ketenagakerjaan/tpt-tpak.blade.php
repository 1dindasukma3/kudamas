@extends('layouts.page')

@section('title', 'TPT dan TPAK')
@section('page-title', 'TPT dan TPAK')

@section('page-content')

<div style="font-size:15px; color:#3A3A3A;">

    {{-- TPT --}}
    <div class="table-responsive">

        <table class="table border-0 align-middle"
               style="font-size:15px; table-layout:fixed; width:100%;">

            <thead>

                <tr>
                    <th colspan="4"
                        style="background:#2F4B7C; color:white; text-align:center;
                               font-weight:500; padding:14px; border:none;">
                        Tingkat Pengangguran Terbuka (TPT)
                    </th>
                </tr>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th>Tahun</th>
                    <th>Bekerja (jiwa)</th>
                    <th>Pengangguran Terbuka (jiwa)</th>
                    <th>TPT (%)</th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                @foreach($tpt as $t)

                <tr>
                    <td>{{ $t['Tahun'] }}</td>
                    <td>{{ $t['Bekerja (jiwa)'] }}</td>
                    <td>{{ $t['Pengangguran Terbuka (jiwa)'] }}</td>
                    <td>{{ $t['TPT(%)'] }}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    {{-- TPAK --}}
    <div class="table-responsive mt-4">

        <table class="table border-0 align-middle"
               style="font-size:15px; table-layout:fixed; width:100%;">

            <thead>

                <tr>
                    <th colspan="4"
                        style="background:#2F4B7C; color:white; text-align:center;
                               font-weight:500; padding:14px; border:none;">
                        Tingkat Partisipasi Angkatan Kerja (TPAK)
                    </th>
                </tr>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th>Tahun</th>
                    <th>Tingkat Kesempatan Kerja (%)</th>
                    <th>TPT (%)</th>
                    <th>TPAK (%)</th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                @foreach($tpak as $t)

                <tr>
                    <td>{{ $t['Tahun'] }}</td>
                    <td>{{ $t['Tingkat Kesempatan Kerja (%)'] }}</td>
                    <td>{{ $t['TPT(%)'] }}</td>
                    <td>{{ $t['TPAK(%)'] }}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:10px; font-style:italic;">
        Sumber: BPS, Rilis Berita Resmi Statistik
    </p>

</div>

@endsection