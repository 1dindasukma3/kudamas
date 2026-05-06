@extends('layouts.page')
@section('title', 'Indeks Penyusunan IPM')
@section('page-title', 'Indeks Penyusunan IPM')
@section('page-content')

<div class="table-responsive">
    <table class="table table-bordered" style="font-size:0.85rem;">

        <thead style="background:#1B3A6B;color:white;text-align:center;">
            <tr>
                <th colspan="6" style="font-size:1rem;padding:15px;">
                    Indeks Penyusun IPM
                </th>
            </tr>

            <tr>
                <th>Indeks</th>
                <th>2019</th>
                <th>2020</th>
                <th>2021</th>
                <th>2022</th>
                <th>2023</th>
            </tr>
        </thead>

        <tbody style="text-align:center;">
            <tr>
                <td style="text-align:left;">Kesehatan</td>
                <td>82,08</td>
                <td>82,45</td>
                <td>82,74</td>
                <td>83,12</td>
                <td>84,48</td>
            </tr>

            <tr>
                <td style="text-align:left;">Pendidikan</td>
                <td>58,21</td>
                <td>59,18</td>
                <td>59,97</td>
                <td>60,27</td>
                <td>60,36</td>
            </tr>

            <tr>
                <td style="text-align:left;">Pengeluaran</td>
                <td>69,12</td>
                <td>68,44</td>
                <td>68,27</td>
                <td>68,95</td>
                <td>70,17</td>
            </tr>
        </tbody>

    </table>
</div>

<div class="mt-3">
    <p class="text-muted" style="font-size:0.75rem;">
        Sumber: BPS, Rilis Berita Resmi Statistik
    </p>
</div>

@endsection