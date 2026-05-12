@extends('layouts.page')

@section('title', 'Umur Harapan Hidup')
@section('page-title', 'Umur Harapan Hidup')

@section('page-content')

<div style="font-size:15px; color:#3A3A3A;">

    <div class="table-responsive">

        <table class="table border-0 align-middle"
               style="font-size:15px; table-layout:fixed; width:100%;">

            <thead>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th>Tahun</th>
                    <th>UHH</th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                @foreach($uhh as $u)

                <tr>
                    <td>{{ $u['Tahun'] }}</td>
                    <td>{{ $u['UHH'] }}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:15px; font-style:italic;">
        Catatan: *UHH Hasil Long Form SP2020
    </p>

    <p style="font-size:13px; color:#6B7280; margin-top:10px; font-style:italic;">
        Sumber: BPS, Rilis Berita Resmi Statistik
    </p>

</div>

@endsection