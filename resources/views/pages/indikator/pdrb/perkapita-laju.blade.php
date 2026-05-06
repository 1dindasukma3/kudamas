@extends('layouts.page')

@section('title', 'PDRB Perkapita & Laju Pertumbuhan')
@section('page-title', 'PDRB Perkapita dan Laju Pertumbuhan Ekonomi Atas Harga Dasar Konstan (LPE)')

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
                        PDRB Perkapita
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                <tr><td>2015</td><td>16.094.751,85</td></tr>
                <tr><td>2016</td><td>17.481.430,36</td></tr>
                <tr><td>2017</td><td>19.141.751,60</td></tr>
                <tr><td>2018</td><td>21.185.937,31</td></tr>
                <tr><td>2019</td><td>23.152.104,67</td></tr>
                <tr><td>2020</td><td>21.996.164,37</td></tr>
                <tr><td>2021</td><td>22.805.242,26</td></tr>
                <tr><td>2022</td><td>24.681.782,33</td></tr>
                <tr><td>2023</td><td>27.080.932,69</td></tr>

            </tbody>

        </table>

    </div>

    <div class="table-responsive mt-4">

        <table class="table border-0 align-middle" style="font-size:15px;">

            <thead>

                <tr style="background:#2F4B7C; color:white; text-align:center;">

                    <th style="border:none; font-weight:500; padding:12px;">
                        Tahun
                    </th>

                    <th style="border:none; font-weight:500; padding:12px;">
                        Laju Pertumbuhan Ekonomi
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                <tr><td>2015</td><td>6.38</td></tr>
                <tr><td>2016</td><td>6.09</td></tr>
                <tr><td>2017</td><td>6.36</td></tr>
                <tr><td>2018</td><td>6.43</td></tr>
                <tr><td>2019</td><td>6.59</td></tr>
                <tr><td>2020</td><td>0,11</td></tr>
                <tr><td>2021</td><td>3,56</td></tr>
                <tr><td>2022</td><td>5,53</td></tr>
                <tr><td>2023</td><td>5,25</td></tr>

            </tbody>

        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:10px; font-style:italic;">
        Sumber: BPS, Kabupaten Kuningan Dalam Angka
    </p>

</div>

@endsection