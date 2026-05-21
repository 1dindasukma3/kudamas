@extends('layouts.page')

@section('title', 'Laju Pertumbuhan Ekonomi')
@section('page-title', 'Laju Pertumbuhan Ekonomi')

@section('page-content')

<div style="font-size:15px; color:#3A3A3A;">

    <div class="table-responsive">

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

</div>

@endsection