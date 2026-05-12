@extends('layouts.page')

@section('title', 'Indeks Penyusunan IPM')
@section('page-title', 'Indeks Penyusunan IPM')

@section('page-content')

<div style="font-size:15px; color:#3A3A3A;">

    <div class="table-responsive">

        <table class="table border-0 align-middle"
            style="font-size:15px; table-layout:fixed; width:100%;">

            <thead>

                <tr>
                    <th colspan="6"
                        style="background:#2F4B7C; color:white; text-align:center;
                        font-weight:600; padding:14px; border:none;">
                        Indeks Penyusun IPM
                    </th>
                </tr>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th>Indeks</th>
                    <th>2019</th>
                    <th>2020</th>
                    <th>2021</th>
                    <th>2022</th>
                    <th>2023</th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                @foreach($penyusunan as $p)

                <tr>
                    <td style="text-align:left;">{{ $p['indeks'] }}</td>
                    <td>{{ $p['2019'] }}</td>
                    <td>{{ $p['2020'] }}</td>
                    <td>{{ $p['2021'] }}</td>
                    <td>{{ $p['2022'] }}</td>
                    <td>{{ $p['2023'] }}</td>
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