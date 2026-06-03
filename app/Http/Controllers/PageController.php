<?php

/*
|--------------------------------------------------------------------------
| PageController
|--------------------------------------------------------------------------
| Controller ini digunakan untuk menampilkan halaman-halaman website serta
| mengambil data indikator dari Google Spreadsheet dalam format CSV.
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    /**
    * Menampilkan halaman splash / welcome saat pertama kali website dibuka.
    */
    public function splash()
    {
        return view('welcome');
    }

    /**
    * Menampilkan halaman home utama.
    */
    public function home()
    {
        return view('home');
    }

    /**
    * Menampilkan halaman beranda website.
    */
    public function beranda()
    {
        return view('pages.beranda');
    }

    /**
    * Menampilkan halaman utama menu indikator.
    */
    public function indikator()
    {
        return view('pages.indikator');
    }

    /**
    * Menampilkan halaman utama menu seputar Kuningan.
    */
    public function seputarKuningan()
    {
        return view('pages.seputar-kuningan');
    }

    /**
    * Menampilkan halaman utama menu pariwisata.
    */
    public function pariwisata()
    {
        return view('pages.pariwisata');
    }

    /**
    * Menampilkan halaman media sosial.
    */
    public function mediaSosial()
    {
        return view('pages.media-sosial');
    }

    /**
    * Menampilkan halaman kategori indikator kependudukan.
    */
    public function kependudukan()
    {
        return view('pages.indikator.kependudukan');
    }

    /**
    * Menampilkan halaman kategori indikator kemiskinan.
    */
    public function kemiskinan()
    {
        return view('pages.indikator.kemiskinan');
    }

    /**
    * Menampilkan halaman kategori indikator PDRB.
    */
    public function pdrb()
    {
        return view('pages.indikator.pdrb');
    }

    /**
    * Menampilkan halaman kategori indikator Gini Ratio.
    */
    public function giniRatio()
    {
        return view('pages.indikator.gini-ratio');
    }

    /**
    * Menampilkan halaman kategori indikator ketenagakerjaan.
    */
    public function ketenagakerjaan()
    {
        return view('pages.indikator.ketenagakerjaan');
    }

    /**
    * Menampilkan halaman kategori indikator pembangunan manusia.
    */
    public function pembangunanManusia()
    {
        return view('pages.indikator.pembangunan-manusia');
    }

    /**
    * Menampilkan halaman kategori indeks-indeks.
    */
    public function indeksIndeks()
    {
        return view('pages.indikator.indeks-indeks');
    }

    // ===== KEPENDUDUKAN =====
    /**
    * Menampilkan halaman konsep untuk indikator kependudukan.
    */
    public function kependudukanKonsep()
    {
        return view('pages.indikator.kependudukan.konsep');
    }

    /**
    * Mengambil data jumlah penduduk berdasarkan jenis kelamin dari Google Spreadsheet, lalu mengirimkannya ke view.
    */
    public function kependudukanJenisKelamin()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1550688871";

        // Membaca file CSV dari URL Google Spreadsheet dan mengubah setiap baris menjadi array.
        $data = array_map('str_getcsv', file($url));

        // Mengambil baris pertama sebagai header kolom.
        $header = array_shift($data);

        $jenisKelamin = [];

        foreach ($data as $row) {

            if(count($header) == count($row)){

                $jenisKelamin[] = array_combine($header, $row);

            }

        }

        return view(
        'pages.indikator.kependudukan.jenis-kelamin',
        compact('jenisKelamin')
        );
    }
    /**
    * Mengambil data jumlah penduduk berdasarkan kelompok umur dari Google Spreadsheet, lalu mengirimkannya ke view.
    */
    public function kependudukanKelompokUmur()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=577966239";

        // Membaca file CSV dari URL Google Spreadsheet dan mengubah setiap baris menjadi array.
        $data = array_map('str_getcsv', file($url));

        // Mengambil baris pertama sebagai header kolom.
        $header = array_shift($data);

        $kelompokUmur = [];

        foreach ($data as $row) {

            if(count($header) == count($row)){

                $kelompokUmur[] = array_combine($header, $row);

            }

        }

        return view(
        'pages.indikator.kependudukan.kelompok-umur',
        compact('kelompokUmur')
        );
    }
    // ===== KEMISKINAN =====
    /**
    * Menampilkan halaman konsep untuk indikator kemiskinan.
    */
    public function kemiskinanKonsep()
    {
        return view('pages.indikator.kemiskinan.konsep');
    }
    /**
    * Mengambil data garis kemiskinan dari Google Spreadsheet, lalu mengirimkannya ke view.
    */
    public function kemiskinanGaris()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1027468071";

        // Membaca file CSV dari URL Google Spreadsheet dan mengubah setiap baris menjadi array.
        $data = array_map('str_getcsv', file($url));

        // Mengambil baris pertama sebagai header kolom.
        $header = array_shift($data);

        $garisKemiskinan = [];

        foreach ($data as $row) {

            if(count($header) == count($row)){

                $garisKemiskinan[] = array_combine($header, $row);

            }

        }

        return view(
        'pages.indikator.kemiskinan.garis-kemiskinan',
        compact('garisKemiskinan')
        );
    }
    /**
    * Mengambil data jumlah penduduk miskin dari Google Spreadsheet, lalu mengirimkannya ke view.
    */
    public function kemiskinanJumlah()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1059408719";

        // Membaca file CSV dari URL Google Spreadsheet dan mengubah setiap baris menjadi array.
        $data = array_map('str_getcsv', file($url));

        // Mengambil baris pertama sebagai header kolom.
        $header = array_shift($data);

        $jumlahMiskin = [];

        foreach ($data as $row) {

            if(count($header) == count($row)){

                $jumlahMiskin[] = array_combine($header, $row);

            }

        }

        return view(
        'pages.indikator.kemiskinan.jumlah-penduduk-miskin',
        compact('jumlahMiskin')
        );
    }
    /**
    * Mengambil data persentase penduduk miskin dari Google Spreadsheet, lalu mengirimkannya ke view.
    */
    public function kemiskinanPersentase()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=997920258";

        // Membaca file CSV dari URL Google Spreadsheet dan mengubah setiap baris menjadi array.
        $data = array_map('str_getcsv', file($url));

        // Mengambil baris pertama sebagai header kolom.
        $header = array_shift($data);

        $persentase = [];

        foreach ($data as $row) {

            if(count($header) == count($row)){

                $persentase[] = array_combine($header, $row);

            }

        }

        return view(
        'pages.indikator.kemiskinan.persentase-penduduk-miskin',
        compact('persentase')
        );
    }
    /**
    * Mengambil data indeks kedalaman kemiskinan dari Google Spreadsheet, lalu mengirimkannya ke view.
    */
    public function kemiskinanKedalaman()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1870800698";

        // Membaca file CSV dari URL Google Spreadsheet dan mengubah setiap baris menjadi array.
        $data = array_map('str_getcsv', file($url));

        // Mengambil baris pertama sebagai header kolom.
        $header = array_shift($data);

        $kedalaman = [];

        foreach ($data as $row) {

            if(count($header) == count($row)){

                $kedalaman[] = array_combine($header, $row);

            }

        }

        return view(
        'pages.indikator.kemiskinan.indeks-kedalaman',
        compact('kedalaman')
        );
    }
    /**
    * Mengambil data indeks keparahan kemiskinan dari Google Spreadsheet, lalu mengirimkannya ke view.
    */
    public function kemiskinanKeparahan()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1810548027";

        // Membaca file CSV dari URL Google Spreadsheet dan mengubah setiap baris menjadi array.
        $data = array_map('str_getcsv', file($url));

        // Mengambil baris pertama sebagai header kolom.
        $header = array_shift($data);

        $keparahan = [];

        foreach ($data as $row) {

            if(count($header) == count($row)){

                $keparahan[] = array_combine($header, $row);

            }

        }

        return view(
        'pages.indikator.kemiskinan.indeks-keparahan',
        compact('keparahan')
        );
    }
    /**
    * Menampilkan halaman konsep untuk indikator PDRB.
    */
    public function pdrbKonsep()
    {
        return view('pages.indikator.pdrb.konsep');
    }

    /**
    * Mengambil data PDRB per kapita dari Google Spreadsheet menggunakan HTTP request, lalu mengirimkannya ke view.
    */
    public function pdrbPerkapita()
    {
        $urlPdrb = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=809516038";

        $response = Http::get($urlPdrb);

        // Mengubah isi response CSV menjadi array per baris.
        $rows = array_map('str_getcsv', explode("\n", $response->body()));

        $headerPdrb = array_shift($rows);

        $pdrb = [];

        foreach ($rows as $row) {

            if(count($headerPdrb) == count($row)) {

                $pdrb[] = array_combine($headerPdrb, $row);

            }
        }

        return view('pages.indikator.pdrb.perkapita', compact('pdrb'));
    }
    // LPE
    /**
    * Mengambil data laju pertumbuhan ekonomi dari Google Spreadsheet menggunakan HTTP request, lalu mengirimkannya ke view.
    */
    public function lajuEkonomi()
    {
        $urlLpe = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=467430730";

        $response = Http::get($urlLpe);

        // Mengubah isi response CSV menjadi array per baris.
        $rows = array_map('str_getcsv', explode("\n", $response->body()));

        $headerLpe = array_shift($rows);

        $lpe = [];

        foreach ($rows as $row) {

            if(count($headerLpe) == count($row)) {

                $lpe[] = array_combine($headerLpe, $row);

            }
        }

        return view(
        'pages.indikator.pdrb.laju-ekonomi',
        compact('lpe')
        );
    }
    // ===== GINI RATIO =====
    /**
    * Menampilkan halaman konsep untuk indikator Gini Ratio.
    */
    public function giniKonsep()
    {
        return view('pages.indikator.gini-ratio.konsep');
    }
    /**
    * Mengambil data Gini Ratio dari Google Spreadsheet, lalu menyusunnya menjadi array untuk dikirim ke view.
    */
    public function giniData()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=0";

        // Membaca file CSV dari URL Google Spreadsheet dan mengubah setiap baris menjadi array.
        $data = array_map('str_getcsv', file($url));

        array_shift($data);

        $gini = [];

        foreach ($data as $row) {

            $gini[] = [
            'Tahun' => $row[0] ?? '',
            'Gini Ratio' => $row[1] ?? '',
            ];

        }

        return view(
        'pages.indikator.gini-ratio.data',
        compact('gini')
        );
    }
    // ===== KETENAGAKERJAAN =====
    /**
    * Menampilkan halaman konsep untuk indikator ketenagakerjaan.
    */
    public function ketenagakerjaanKonsep()
    {
        return view('pages.indikator.ketenagakerjaan.konsep');
    }
    /**
    * Mengambil data angkatan kerja dan bukan angkatan kerja dari Google Spreadsheet, lalu mengirimkan keduanya ke view.
    */
    public function ketenagakerjaanData()
    {
        // ANGKATAN KERJA
        $urlAngkatan = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1274743605";

        $responseAngkatan = Http::get($urlAngkatan);

        $rowsAngkatan = array_map('str_getcsv', explode("\n", $responseAngkatan->body()));

        $angkatan = [];

        for ($i = 2; $i < count($rowsAngkatan); $i++) {

            if (count($rowsAngkatan[$i]) < 4) continue;

            $angkatan[] = [
            'kegiatan'  => $rowsAngkatan[$i][0] ?? '',
            'laki'      => $rowsAngkatan[$i][1] ?? '',
            'perempuan' => $rowsAngkatan[$i][2] ?? '',
            'jumlah'    => $rowsAngkatan[$i][3] ?? '',
            ];
        }

        // BUKAN ANGKATAN KERJA
        $urlBukan = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1360793945";

        $responseBukan = Http::get($urlBukan);

        $rowsBukan = array_map('str_getcsv', explode("\n", $responseBukan->body()));

        $bukanAngkatan = [];

        for ($i = 2; $i < count($rowsBukan); $i++) {

            if (count($rowsBukan[$i]) < 4) continue;

            $bukanAngkatan[] = [
            'kegiatan'  => $rowsBukan[$i][0] ?? '',
            'laki'      => $rowsBukan[$i][1] ?? '',
            'perempuan' => $rowsBukan[$i][2] ?? '',
            'jumlah'    => $rowsBukan[$i][3] ?? '',
            ];
        }

        return view(
        'pages.indikator.ketenagakerjaan.data',
        compact('angkatan', 'bukanAngkatan')
        );
    }
    /**
    * Mengambil data TPT dan TPAK dari Google Spreadsheet, lalu mengirimkan keduanya ke view.
    */
    public function ketenagakerjaanTpt()
    {
        // ===== TPT =====
        $urlTpt = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=305309167";

        $responseTpt = Http::timeout(10)->get($urlTpt);

        $rowsTpt = array_map('str_getcsv', explode("\n", $responseTpt->body()));

        $tpt = [];

        for ($i = 1; $i < count($rowsTpt); $i++) {

            if (
            count($rowsTpt[$i]) >= 4 &&
            !empty(trim($rowsTpt[$i][0] ?? ''))
            ) {

                $tpt[] = [
                'Tahun' => $rowsTpt[$i][0] ?? '',
                'Bekerja (jiwa)' => $rowsTpt[$i][1] ?? '',
                'Pengangguran Terbuka (jiwa)' => $rowsTpt[$i][2] ?? '',
                'TPT(%)' => $rowsTpt[$i][3] ?? '',
                ];
            }
        }

        // ===== TPAK =====
        $urlTpak = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=767782761";

        $responseTpak = Http::timeout(10)->get($urlTpak);

        $rowsTpak = array_map('str_getcsv', explode("\n", $responseTpak->body()));

        $tpak = [];

        for ($i = 1; $i < count($rowsTpak); $i++) {

            if (
            count($rowsTpak[$i]) >= 4 &&
            !empty(trim($rowsTpak[$i][0] ?? ''))
            ) {

                $tpak[] = [
                'Tahun' => $rowsTpak[$i][0] ?? '',
                'Tingkat Kesempatan Kerja (%)' => $rowsTpak[$i][1] ?? '',
                'TPT(%)' => $rowsTpak[$i][2] ?? '',
                'TPAK(%)' => $rowsTpak[$i][3] ?? '',
                ];
            }
        }

        return view(
        'pages.indikator.ketenagakerjaan.tpt-tpak',
        compact('tpt', 'tpak')
        );
    }
    // ===== PEMBANGUNAN MANUSIA =====
    /**
    * Menampilkan halaman konsep untuk indikator pembangunan manusia.
    */
    public function pmKonsep()
    {
        return view('pages.indikator.pembangunan-manusia.konsep');
    }
    /**
    * Mengambil data Umur Harapan Hidup dari Google Spreadsheet, lalu mengirimkannya ke view.
    */
    public function pmUhh()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=680249460";

        // Membaca file CSV dari URL Google Spreadsheet dan mengubah setiap baris menjadi array.
        $data = array_map('str_getcsv', file($url));

        // Mengambil baris pertama sebagai header kolom.
        $header = array_shift($data);

        $uhh = [];

        foreach ($data as $row) {

            if(count($header) == count($row)){

                $uhh[] = array_combine($header, $row);

            }

        }

        return view(
        'pages.indikator.pembangunan-manusia.uhh',
        compact('uhh')
        );
    }
    /**
    * Mengambil data Expected Years of Schooling dari Google Spreadsheet, lalu mengirimkannya ke view.
    */
    public function pmEys()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1627103762";

        // Membaca file CSV dari URL Google Spreadsheet dan mengubah setiap baris menjadi array.
        $data = array_map('str_getcsv', file($url));

        array_shift($data);

        $eys = [];

        foreach ($data as $row) {

            $eys[] = [
            'tahun' => $row[0] ?? '',
            'eys' => $row[1] ?? '',
            ];

        }

        return view(
        'pages.indikator.pembangunan-manusia.eys',
        compact('eys')
        );
    }
    /**
    * Mengambil data Mean Years of Schooling dari Google Spreadsheet, lalu mengirimkannya ke view.
    */
    public function pmMys()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=235472709";

        // Membaca file CSV dari URL Google Spreadsheet dan mengubah setiap baris menjadi array.
        $data = array_map('str_getcsv', file($url));

        array_shift($data);

        $mys = [];

        foreach ($data as $row) {

            $mys[] = [
            'tahun' => $row[0] ?? '',
            'mys' => $row[1] ?? '',
            ];

        }

        return view(
        'pages.indikator.pembangunan-manusia.mys',
        compact('mys')
        );
    }
    /**
    * Mengambil data pengeluaran per kapita / PPP dari Google Spreadsheet, lalu mengirimkannya ke view.
    */
    public function pmPpp()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=525184302";

        // Membaca file CSV dari URL Google Spreadsheet dan mengubah setiap baris menjadi array.
        $data = array_map('str_getcsv', file($url));

        array_shift($data);

        $ppp = [];

        foreach ($data as $row) {

            $ppp[] = [
            'tahun' => $row[0] ?? '',
            'nilai' => $row[1] ?? '',
            ];

        }

        return view(
        'pages.indikator.pembangunan-manusia.ppp',
        compact('ppp')
        );
    }
    /**
    * Mengambil data Indeks Pembangunan Manusia dari Google Spreadsheet menggunakan HTTP request, lalu mengirimkannya ke view.
    */
    public function pmIpm()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1391712310";

        // Mengambil isi CSV menggunakan HTTP request.
        $response = Http::get($url);

        $data = array_map('str_getcsv', explode("\n", $response->body()));

        array_shift($data);

        $ipm = [];

        foreach ($data as $row) {

            $ipm[] = [
            'tahun' => $row[0] ?? '',
            'ipm' => $row[1] ?? '',
            ];

        }

        return view(
        'pages.indikator.pembangunan-manusia.ipm',
        compact('ipm')
        );
    }
    /**
    * Mengambil data pertumbuhan IPM dari Google Spreadsheet, lalu mengirimkannya ke view.
    */
    public function pmPertumbuhan()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1361098060";

        // Membaca file CSV dari URL Google Spreadsheet dan mengubah setiap baris menjadi array.
        $data = array_map('str_getcsv', file($url));

        array_shift($data);

        $pertumbuhan = [];

        foreach ($data as $row) {

            $pertumbuhan[] = [
            'tahun' => $row[0] ?? '',
            'persen' => $row[1] ?? '',
            ];

        }

        return view(
        'pages.indikator.pembangunan-manusia.pertumbuhan-ipm',
        compact('pertumbuhan')
        );
    }

    // ===== INDEKS-INDEKS =====
    /**
    * Menampilkan halaman konsep untuk kategori indeks-indeks.
    */
    public function indeksKonsep()
    {
        return view('pages.indikator.indeks-indeks.konsep');
    }
    /**
    * Mengambil data indeks penyusun IPM dan komponen IPM dari Google Spreadsheet, lalu mengirimkannya ke view.
    */
    public function indeksPenyusunan()
    {
        // ===== INDEKS PENYUSUN IPM =====
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=90813308";

        $response = Http::timeout(20)->get($url);

        $data = array_map(
        'str_getcsv',
        explode("\n", $response->body())
        );

        $penyusunan = [];

        for ($i = 2; $i < count($data); $i++) {

            if (count($data[$i]) >= 6) {

                $penyusunan[] = [
                'indeks' => $data[$i][0] ?? '',
                '2019'   => $data[$i][1] ?? '',
                '2020'   => $data[$i][2] ?? '',
                '2021'   => $data[$i][3] ?? '',
                '2022'   => $data[$i][4] ?? '',
                '2023'   => $data[$i][5] ?? '',
                ];
            }
        }

        // ===== KOMPONEN IPM 2025 =====
        $urlKomponen = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1638103132";

        $responseKomponen = Http::timeout(20)->get($urlKomponen);

        $dataKomponen = array_map(
        'str_getcsv',
        explode("\n", $responseKomponen->body())
        );

        $komponen = [];

        for ($i = 2; $i < count($dataKomponen); $i++) {

            if (count($dataKomponen[$i]) >= 2) {

                $komponen[] = [
                'komponen' => $dataKomponen[$i][0] ?? '',
                'nilai'    => $dataKomponen[$i][1] ?? '',
                ];
            }
        }

        return view(
        'pages.indikator.indeks-indeks.penyusunan-ipm',
        compact('penyusunan', 'komponen')
        );
    }
    /**
    * Mengambil data IKG dan IPG dari Google Spreadsheet, lalu mengirimkan keduanya ke view.
    */
    public function indeksGender()
    {
        // ===== IKG =====
        $urlIkg = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=965902695";

        $responseIkg = Http::get($urlIkg);

        $rowsIkg = array_map('str_getcsv', explode("\n", $responseIkg->body()));

        $ikg = [];

        for ($i = 2; $i < count($rowsIkg); $i++) {

            if (count($rowsIkg[$i]) >= 4) {

                $ikg[] = [
                'variabel'   => $rowsIkg[$i][0] ?? '',
                'tahun2023'  => $rowsIkg[$i][1] ?? '',
                'tahun2024'  => $rowsIkg[$i][2] ?? '',
                'tahun2025'  => $rowsIkg[$i][3] ?? '',
                ];
            }
        }

        // ===== IPG =====
        $urlIpg = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=311668744";

        $responseIpg = Http::get($urlIpg);

        $rowsIpg = array_map('str_getcsv', explode("\n", $responseIpg->body()));

        $ipg = [];

        for ($i = 2; $i < count($rowsIpg); $i++) {

            if (count($rowsIpg[$i]) >= 4) {

                $ipg[] = [
                'variabel'   => $rowsIpg[$i][0] ?? '',
                'tahun2023'  => $rowsIpg[$i][1] ?? '',
                'tahun2024'  => $rowsIpg[$i][2] ?? '',
                'tahun2025'  => $rowsIpg[$i][3] ?? '',
                ];
            }
        }

        return view(
        'pages.indikator.indeks-indeks.gender',
        compact('ikg', 'ipg')
        );
    }
    // ===== LINK SEPUTAR KUNINGAN =====
    /**
    * Menampilkan halaman link seputar Kuningan.
    */
    public function linkSeputar()
    {
        return view('pages.link-seputar');
    }
}
