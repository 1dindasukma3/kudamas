@extends('layouts.page')

@section('title', 'Persentase Penduduk Miskin')
@section('page-title', 'Prosentase Penduduk Miskin')

@section('page-content')

<div style="font-size:15px; color:#3A3A3A;">

    <div class="table-responsive">

        <table class="table border-0 align-middle" style="font-size:15px;">

            <thead>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th style="border:none; font-weight:500; padding:12px;">
                        Tahun
                    </th>

                    <th style="border:none; font-weight:500; padding:12px;">
                        Persen
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

@foreach($persentase as $p)

<tr>
    <td>{{ $p['Tahun'] }}</td>
    <td>{{ str_replace('.', ',', $p['Persen']) }}</td>
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