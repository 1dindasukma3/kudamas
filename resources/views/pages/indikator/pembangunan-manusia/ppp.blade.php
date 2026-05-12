@extends('layouts.page')

@section('title', 'Purchasing Power Parity (PPP)')
@section('page-title', 'Purchasing Power Parity (PPP)')

@section('page-content')

<div style="font-size:15px; color:#3A3A3A;">

    <div class="table-responsive">

        <table class="table border-0 align-middle"
            style="font-size:15px; table-layout:fixed; width:100%;">

            <thead>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th>Tahun</th>
                    <th>(Ribu Rupiah/orang/tahun)</th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                @foreach($ppp as $p)

                <tr>
                    <td>{{ $p['tahun'] }}</td>
                    <td>{{ $p['nilai'] }}</td>
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