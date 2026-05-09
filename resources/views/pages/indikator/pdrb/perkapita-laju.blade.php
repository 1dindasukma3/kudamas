@extends('layouts.page')

@section('title', 'PDRB Perkapita & Laju Pertumbuhan')
@section('page-title', 'PDRB Perkapita dan Laju Pertumbuhan Ekonomi Atas Harga Dasar Konstan (LPE)')

@section('page-content')

<div style="font-size:15px; color:#3A3A3A;">

    {{-- TABEL PDRB --}}
    <div class="table-responsive">

        <table class="table border-0 align-middle"
               style="font-size:15px; table-layout:fixed; width:100%;">

            <thead>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th style="border:none; font-weight:500; padding:12px; width:40%;">
                        Tahun
                    </th>

                    <th style="border:none; font-weight:500; padding:12px; width:60%;">
                        PDRB Perkapita
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                @foreach($pdrb as $p)

                <tr>
                    <td>{{ $p['Tahun'] }}</td>
                    <td>{{ $p['PDRB Perkapita'] }}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    {{-- TABEL LPE --}}
    <div class="table-responsive mt-4">

        <table class="table border-0 align-middle"
               style="font-size:15px; table-layout:fixed; width:100%;">

            <thead>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th style="border:none; font-weight:500; padding:12px; width:40%;">
                        Tahun
                    </th>

                    <th style="border:none; font-weight:500; padding:12px; width:60%;">
                        Laju Pertumbuhan Ekonomi
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                @foreach($lpe as $l)

                <tr>
                    <td>{{ $l['Tahun'] }}</td>
                    <td>{{ $l['Laju Pertumbuhan Ekonomi'] }}</td>
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