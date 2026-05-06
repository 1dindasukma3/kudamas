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
                        Jumlah Penduduk Menurut Jenis Kelamin dan Kecamatan, Tahun 2024
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

                <tr>
                    <td>Darma</td>
                    <td class="text-center">28.834</td>
                    <td class="text-center">27.725</td>
                    <td class="text-center">56.559</td>
                </tr>

                <tr>
                    <td>Kadugede</td>
                    <td class="text-center">14.787</td>
                    <td class="text-center">14.482</td>
                    <td class="text-center">29.269</td>
                </tr>

                <tr>
                    <td>Nusaherang</td>
                    <td class="text-center">10.558</td>
                    <td class="text-center">10.444</td>
                    <td class="text-center">21.002</td>
                </tr>

                <tr>
                    <td>Ciniru</td>
                    <td class="text-center">10.673</td>
                    <td class="text-center">10.349</td>
                    <td class="text-center">21.022</td>
                </tr>

                <tr>
                    <td>Hantara</td>
                    <td class="text-center">7.594</td>
                    <td class="text-center">7.523</td>
                    <td class="text-center">15.117</td>
                </tr>

                <tr>
                    <td>Selajambe</td>
                    <td class="text-center">6.860</td>
                    <td class="text-center">6.806</td>
                    <td class="text-center">13.666</td>
                </tr>

                <tr>
                    <td>Subang</td>
                    <td class="text-center">7.942</td>
                    <td class="text-center">7.744</td>
                    <td class="text-center">15.686</td>
                </tr>

                <tr>
                    <td>Cilebak</td>
                    <td class="text-center">5.737</td>
                    <td class="text-center">5.809</td>
                    <td class="text-center">11.546</td>
                </tr>

                <tr>
                    <td>Ciwaru</td>
                    <td class="text-center">15.748</td>
                    <td class="text-center">15.545</td>
                    <td class="text-center">31.293</td>
                </tr>

                <tr>
                    <td><strong>Kab. Kuningan</strong></td>
                    <td class="text-center"><strong>614.594</strong></td>
                    <td class="text-center"><strong>599.333</strong></td>
                    <td class="text-center"><strong>1.213.927</strong></td>
                </tr>

            </tbody>

        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:10px;">
        Sumber: BPS, Proyeksi Penduduk Hasil SP2020
    </p>

</div>

@endsection