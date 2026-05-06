@extends('layouts.page')

@section('title', 'Kependudukan Menurut Kelompok Umur')
@section('page-title', 'Menurut Kelompok Umur')

@section('page-content')

<div style="font-size:15px; color:#3A3A3A;">

    <div class="table-responsive">

        <table class="table border-0 align-middle" style="font-size:15px;">

            <thead>

                <tr>
                    <th colspan="4"
                        style="
                            background:#2F4B7C;
                            color:white;
                            text-align:center;
                            font-weight:500;
                            padding:14px;
                            border:none;
                            line-height:1.5;
                        ">
                        Jumlah Penduduk Menurut Kelompok Umur, Tahun 2022
                    </th>
                </tr>

                <tr style="background:#2F4B7C; color:white;">

                    <th style="border:none; font-weight:500; text-align:center;">
                        Umur
                    </th>

                    <th style="border:none; font-weight:500; text-align:center;">
                        Laki-laki
                    </th>

                    <th style="border:none; font-weight:500; text-align:center;">
                        Perempuan
                    </th>

                    <th style="border:none; font-weight:500; text-align:center;">
                        Total
                    </th>

                </tr>

            </thead>

            <tbody style="text-align:center;">

                <tr><td>0-4</td><td>50.019</td><td>47.942</td><td>97.961</td></tr>
                <tr><td>5-9</td><td>46.417</td><td>43.870</td><td>90.287</td></tr>
                <tr><td>10-14</td><td>45.503</td><td>43.196</td><td>88.699</td></tr>
                <tr><td>15-19</td><td>50.592</td><td>46.445</td><td>97.037</td></tr>
                <tr><td>20-24</td><td>48.947</td><td>45.888</td><td>94.835</td></tr>
                <tr><td>25-29</td><td>46.910</td><td>44.295</td><td>91.205</td></tr>
                <tr><td>30-34</td><td>45.142</td><td>41.866</td><td>87.008</td></tr>
                <tr><td>35-39</td><td>44.535</td><td>43.068</td><td>87.603</td></tr>
                <tr><td>40-44</td><td>45.218</td><td>42.945</td><td>88.163</td></tr>
                <tr><td>45-49</td><td>42.118</td><td>40.403</td><td>82.521</td></tr>
                <tr><td>50-54</td><td>37.189</td><td>37.626</td><td>74.815</td></tr>
                <tr><td>55-59</td><td>33.689</td><td>34.500</td><td>68.189</td></tr>
                <tr><td>60-64</td><td>27.796</td><td>29.695</td><td>57.491</td></tr>
                <tr><td>65-69</td><td>21.595</td><td>22.987</td><td>44.582</td></tr>
                <tr><td>70-74</td><td>14.895</td><td>16.721</td><td>31.616</td></tr>
                <tr><td>75+</td><td>14.029</td><td>17.886</td><td>31.915</td></tr>

                <tr style="font-weight:700;">
                    <td>Jumlah</td>
                    <td>614.594</td>
                    <td>599.333</td>
                    <td>1.213.927</td>
                </tr>

            </tbody>

        </table>

    </div>

    <p style="font-size:13px; color:#6B7280; margin-top:10px;">
        Sumber: BPS, Proyeksi Penduduk Hasil SP2020
    </p>

</div>

@endsection