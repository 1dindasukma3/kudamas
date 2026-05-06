@extends('layouts.page')

@section('title', 'TPT dan TPAK')
@section('page-title', 'TPT dan TPAK')

@section('page-content')

<div style="font-size:15px; color:#3A3A3A;">

    {{-- TPT --}}
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
                        Tingkat Pengangguran Terbuka (TPT)
                    </th>
                </tr>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th style="border:none; font-weight:500;">
                        Tahun
                    </th>

                    <th style="border:none; font-weight:500;">
                        Bekerja (jiwa)
                    </th>

                    <th style="border:none; font-weight:500;">
                        Pengangguran Terbuka (jiwa)
                    </th>

                    <th style="border:none; font-weight:500;">
                        TPT (%)
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                <tr>
                    <td>2020</td>
                    <td>463.164</td>
                    <td>58.513</td>
                    <td>11,22</td>
                </tr>

                <tr>
                    <td>2021</td>
                    <td>479.405</td>
                    <td>63.377</td>
                    <td>11,68</td>
                </tr>

                <tr>
                    <td>2022</td>
                    <td>478.750</td>
                    <td>52.075</td>
                    <td>9,81</td>
                </tr>

                <tr>
                    <td>2023</td>
                    <td>519.658</td>
                    <td>54.511</td>
                    <td>9,49</td>
                </tr>

                <tr>
                    <td>2024</td>
                    <td>570.023</td>
                    <td>48.106</td>
                    <td>7,78</td>
                </tr>

            </tbody>

        </table>

    </div>

    {{-- TPAK --}}
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
                        Tingkat Partisipasi Angkatan Kerja (TPAK)
                    </th>
                </tr>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th style="border:none; font-weight:500;">
                        Tahun
                    </th>

                    <th style="border:none; font-weight:500;">
                        Tingkat Kesempatan Kerja (%)
                    </th>

                    <th style="border:none; font-weight:500;">
                        TPT (%)
                    </th>

                    <th style="border:none; font-weight:500;">
                        TPAK (%)
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                <tr>
                    <td>2020</td>
                    <td>88,78</td>
                    <td>11,22</td>
                    <td>61,98</td>
                </tr>

                <tr>
                    <td>2021</td>
                    <td>88,32</td>
                    <td>11,68</td>
                    <td>63,82</td>
                </tr>

                <tr>
                    <td>2022</td>
                    <td>90,19</td>
                    <td>9,81</td>
                    <td>61,80</td>
                </tr>

                <tr>
                    <td>2023</td>
                    <td>90,51</td>
                    <td>9,49</td>
                    <td>61,95</td>
                </tr>

                <tr>
                    <td>2024</td>
                    <td>92,22</td>
                    <td>7,78</td>
                    <td>65,84</td>
                </tr>

            </tbody>

        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:10px; font-style:italic;">
        Sumber: BPS, Rilis Berita Resmi Statistik
    </p>

</div>

@endsection