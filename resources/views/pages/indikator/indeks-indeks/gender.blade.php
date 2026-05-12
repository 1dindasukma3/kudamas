@extends('layouts.page')

@section('title', 'Indeks Perubahan Harga')
@section('page-title', 'Indeks Perubahan Harga (IPH)')

@section('page-content')

<div style="font-size:15px; color:#3A3A3A;">

    {{-- IKG --}}
    <div class="table-responsive">

        <table class="table border-0 align-middle"
               style="font-size:15px; width:100%;">

            <thead>

                <tr>
                    <th colspan="3"
                        style="background:#2F4B7C; color:white; text-align:center;
                               padding:14px; border:none;">
                        Indeks Ketimpangan Gender (IKG)
                    </th>
                </tr>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th style="border:none;">Variabel IKG</th>
                    <th style="border:none;">Thn. 2022</th>
                    <th style="border:none;">Thn. 2023</th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                @foreach($ikg as $i)

                <tr>
                    <td style="text-align:left;">{{ $i['variabel'] }}</td>
                    <td>{{ $i['tahun2022'] }}</td>
                    <td>{{ $i['tahun2023'] }}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    {{-- IPG --}}
    <div class="table-responsive mt-4">

        <table class="table border-0 align-middle"
               style="font-size:15px; width:100%;">

            <thead>

                <tr>
                    <th colspan="3"
                        style="background:#2F4B7C; color:white; text-align:center;
                               padding:14px; border:none;">
                        Indeks Pembangunan Gender (IPG)
                    </th>
                </tr>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th style="border:none;">Komponen</th>
                    <th style="border:none;">Thn. 2022</th>
                    <th style="border:none;">Thn. 2023</th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                @foreach($ipg as $i)

                <tr>
                    <td style="text-align:left;">{{ $i['variabel'] }}</td>
                    <td>{{ $i['tahun2022'] }}</td>
                    <td>{{ $i['tahun2023'] }}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:15px; font-style:italic;">
        Sumber: BPS, Rilis Berita Resmi Statistik
    </p>

</div>

@endsection