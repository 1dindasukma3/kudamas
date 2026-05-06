@extends('layouts.page')

@section('title', 'Gini Ratio')
@section('page-title', 'Gini Ratio')

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
                        Gini Ratio
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

    @foreach($gini as $item)

        <tr>
            <td>{{ $item['tahun'] }}</td>
            <td>{{ $item['gini_ratio'] }}</td>
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