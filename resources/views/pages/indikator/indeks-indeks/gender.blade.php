@extends('layouts.page')
@section('title', 'Indeks Perubahan Harga')
@section('page-title', 'Indeks Perubahan Harga (IPH)')
@section('page-content')

<div class="table-responsive mb-4">
    <table class="table table-bordered" style="font-size:0.82rem;">

        <thead style="background:#1B3A6B;color:white;text-align:center;">
            <tr>
                <th colspan="3">Indeks Ketimpangan Gender (IKG)</th>
            </tr>
            <tr>
                <th>Variabel IKG</th>
                <th>Thn. 2022</th>
                <th>Thn. 2023</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>MTF</td>
                <td class="text-center">0,041</td>
                <td class="text-center">0,040</td>
            </tr>

            <tr>
                <td>MPHPK20</td>
                <td class="text-center">0,226</td>
                <td class="text-center">0,210</td>
            </tr>

            <tr>
                <td>Keterwakilan Laki-laki di Legislatif (%)</td>
                <td class="text-center">76</td>
                <td class="text-center">76</td>
            </tr>

            <tr>
                <td>Keterwakilan Perempuan di Legislatif (%)</td>
                <td class="text-center">24</td>
                <td class="text-center">24</td>
            </tr>

            <tr>
                <td>Pendidikan Laki-laki Minimal SMA (%)</td>
                <td class="text-center">28,09</td>
                <td class="text-center">27,91</td>
            </tr>

            <tr>
                <td>Pendidikan Perempuan Minimal SMA (%)</td>
                <td class="text-center">23,49</td>
                <td class="text-center">22,59</td>
            </tr>

            <tr>
                <td>TPAK Laki-laki</td>
                <td class="text-center">81,13</td>
                <td class="text-center">81,90</td>
            </tr>

            <tr>
                <td>TPAK Perempuan</td>
                <td class="text-center">42,64</td>
                <td class="text-center">41,65</td>
            </tr>

            <tr>
                <td>Indeks Ketimpangan Gender (IKG)</td>
                <td class="text-center">42,64</td>
                <td class="text-center">41,65</td>
            </tr>
        </tbody>

    </table>
</div>

<div class="table-responsive">
    <table class="table table-bordered" style="font-size:0.82rem;">

        <thead style="background:#1B3A6B;color:white;text-align:center;">
            <tr>
                <th colspan="3">Indeks Pembangunan Gender (IPG)</th>
            </tr>
            <tr>
                <th>Komponen</th>
                <th>Thn. 2022</th>
                <th>Thn. 2023</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Usia harapan Hidup (UHH) Laki-laki</td>
                <td class="text-center">72,80</td>
                <td class="text-center">73,10</td>
            </tr>

            <tr>
                <td>Usia harapan Hidup (UHH) Perempuan</td>
                <td class="text-center">77,38</td>
                <td class="text-center">77,68</td>
            </tr>

            <tr>
                <td>Harapan lama Sekolah (EYS) Laki-laki</td>
                <td class="text-center">12,91</td>
                <td class="text-center">12,93</td>
            </tr>

            <tr>
                <td>Harapan lama Sekolah (EYS) Perempuan</td>
                <td class="text-center">12,24</td>
                <td class="text-center">12,25</td>
            </tr>

            <tr>
                <td>Rata lama Sekolah (MYS) Laki-laki</td>
                <td class="text-center">8,15</td>
                <td class="text-center">8,16</td>
            </tr>

            <tr>
                <td>Rata lama Sekolah (MYS) Perempuan</td>
                <td class="text-center">7,62</td>
                <td class="text-center">7,63</td>
            </tr>

            <tr>
                <td>Pengeluaran (Rp/Kapita/Hari) Laki-laki</td>
                <td class="text-center">14.226</td>
                <td class="text-center">14.794</td>
            </tr>

            <tr>
                <td>Pengeluaran (Rp/Kapita/Hari) Perempuan</td>
                <td class="text-center">6.777</td>
                <td class="text-center">7.042</td>
            </tr>

            <tr>
                <td>Indeks Pembangunan Manusia (IPM) Laki-laki</td>
                <td class="text-center">75,7</td>
                <td class="text-center">76,25</td>
            </tr>

            <tr>
                <td>Indeks Pembangunan Manusia (IPM) Perempuan</td>
                <td class="text-center">66,35</td>
                <td class="text-center">66,94</td>
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