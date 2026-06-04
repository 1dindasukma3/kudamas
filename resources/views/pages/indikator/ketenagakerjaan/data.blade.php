@extends('layouts.page')

@section('title', 'Ketenagakerjaan')
@section('page-title', 'Ketenagakerjaan')

@section('page-content')

<style>
@media (max-width:768px){

    .table-ketenagakerjaan{
        font-size:12px !important;
    }

    .table-ketenagakerjaan th{
        padding:8px 4px !important;
        font-size:12px !important;
    }

    .table-ketenagakerjaan td{
        padding:8px 4px !important;
        font-size:12px !important;
    }

    .table-ketenagakerjaan th:first-child,
    .table-ketenagakerjaan td:first-child{
        width:34%;
    }

    .table-ketenagakerjaan th:not(:first-child),
    .table-ketenagakerjaan td:not(:first-child){
        width:22%;
    }
}
</style>

<div style="font-size:15px; color:#3A3A3A;">


    {{-- ANGKATAN KERJA --}}
    <div class="table-responsive">

        <table class="table border-0 align-middle table-ketenagakerjaan"
      		 style="font-size:15px; table-layout:fixed; width:100%;">

            <thead>

                <tr>
                    <th colspan="4"
                        style="background:#2F4B7C; color:white; text-align:center;
                               font-weight:500; padding:14px; border:none;">
                        Angkatan Kerja 2025
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

       <table class="table border-0 align-middle table-ketenagakerjaan"
      	 style="font-size:15px; table-layout:fixed; width:100%;">

            <thead>

                <tr>
                    <th colspan="4"
                        style="background:#2F4B7C; color:white; text-align:center;
                               font-weight:500; padding:14px; border:none;">
                        Bukan Angkatan Kerja 2025
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
                    <td style="text-align:left;">{{ $b['kegiatan'] }}</td>
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