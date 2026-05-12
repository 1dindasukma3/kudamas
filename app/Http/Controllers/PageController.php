<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function splash()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }

    public function beranda()
    {
        return view('pages.beranda');
    }

    public function indikator()
    {
        return view('pages.indikator');
    }

    public function seputarKuningan()
    {
        return view('pages.seputar-kuningan');
    }

    public function pariwisata()
    {
        return view('pages.pariwisata');
    }

    public function mediaSosial()
    {
        return view('pages.media-sosial');
    }

    public function kependudukan()
{
    return view('pages.indikator.kependudukan');
}

public function kemiskinan()
{
    return view('pages.indikator.kemiskinan');
}

public function pdrb()
{
    return view('pages.indikator.pdrb');
}

public function giniRatio()
{
    return view('pages.indikator.gini-ratio');
}

public function ketenagakerjaan()
{
    return view('pages.indikator.ketenagakerjaan');
}

public function pembangunanManusia()
{
    return view('pages.indikator.pembangunan-manusia');
}

public function indeksIndeks()
{
    return view('pages.indikator.indeks-indeks');
}

// ===== KEPENDUDUKAN =====
public function kependudukanKonsep() { return view('pages.indikator.kependudukan.konsep');}

public function kependudukanJenisKelamin()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1550688871";

    $data = array_map('str_getcsv', file($url));

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
public function kependudukanKelompokUmur()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=577966239";

    $data = array_map('str_getcsv', file($url));

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
public function kemiskinanKonsep() { return view('pages.indikator.kemiskinan.konsep'); }
public function kemiskinanGaris()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1027468071";

    $data = array_map('str_getcsv', file($url));

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
public function kemiskinanJumlah()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1059408719";

    $data = array_map('str_getcsv', file($url));

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
public function kemiskinanPersentase()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=997920258";

    $data = array_map('str_getcsv', file($url));

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
public function kemiskinanKedalaman()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1870800698";

    $data = array_map('str_getcsv', file($url));

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
public function kemiskinanKeparahan()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1810548027";

    $data = array_map('str_getcsv', file($url));

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

// ===== PDRB =====
public function pdrbKonsep() { return view('pages.indikator.pdrb.konsep'); }
public function pdrbPerkapita()
{
    // PDRB Perkapita
    $urlPdrb = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=809516038";

    $dataPdrb = array_map('str_getcsv', file($urlPdrb));

    $headerPdrb = array_shift($dataPdrb);

    $pdrb = [];

    foreach ($dataPdrb as $row) {

        if(count($headerPdrb) == count($row)){

            $pdrb[] = array_combine($headerPdrb, $row);

        }

    }

    // LPE
    $urlLpe = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=467430730";

    $dataLpe = array_map('str_getcsv', file($urlLpe));

    $headerLpe = array_shift($dataLpe);

    $lpe = [];

    foreach ($dataLpe as $row) {

        if(count($headerLpe) == count($row)){

            $lpe[] = array_combine($headerLpe, $row);

        }

    }

    return view(
        'pages.indikator.pdrb.perkapita-laju',
        compact('pdrb', 'lpe')
    );
}

// ===== GINI RATIO =====
public function giniKonsep() { return view('pages.indikator.gini-ratio.konsep'); }
public function giniData()
{
    $url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vRkOoduh1jnZEK9TKDF1kFj_Jc_lvnvRGUL6i_hp7TeJ8YLanrdNuKP27ZE3q7_7DEcEsiZN0uPs9td/pub?output=csv";

    $response = Http::get($url);

    $rows = array_map('str_getcsv', explode("\n", $response->body()));

    $gini = [];

    for ($i = 1; $i < count($rows); $i++) {

        if(count($rows[$i]) >= 2){

            $gini[] = [
                'Tahun' => $rows[$i][0] ?? '',
                'Gini Ratio' => $rows[$i][1] ?? '',
            ];

        }

    }

    return view(
        'pages.indikator.gini-ratio.data',
        compact('gini')
    );
}
// ===== KETENAGAKERJAAN =====
public function ketenagakerjaanKonsep() { return view('pages.indikator.ketenagakerjaan.konsep'); }
public function ketenagakerjaanData()
{
    // ANGKATAN KERJA
    $urlAngkatan = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1274743605";

    $responseAngkatan = Http::get($urlAngkatan);

    $rowsAngkatan = array_map('str_getcsv', explode("\n", $responseAngkatan->body()));

    $angkatan = [];

    for ($i = 1; $i < count($rowsAngkatan); $i++) {

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

    for ($i = 1; $i < count($rowsBukan); $i++) {

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
public function ketenagakerjaanTpt() { return view('pages.indikator.ketenagakerjaan.tpt-tpak'); }

// ===== PEMBANGUNAN MANUSIA =====
public function pmKonsep() { return view('pages.indikator.pembangunan-manusia.konsep'); }
public function pmUhh()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=680249460";

    $data = array_map('str_getcsv', file($url));

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
public function pmEys()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1627103762";

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
public function pmMys()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=235472709";

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
public function pmPpp()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=525184302";

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
public function pmIpm()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1391712310";

    $data = array_map('str_getcsv', file($url));

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
public function pmPertumbuhan()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1361098060";

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
public function indeksKonsep() { return view('pages.indikator.indeks-indeks.konsep'); }
public function indeksPenyusunan()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=90813308";

    $data = array_map('str_getcsv', file($url));

    $header = $data[1];

    $penyusunan = [];

    for ($i = 2; $i < count($data); $i++) {

        if(count($data[$i]) >= 6){

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

    return view(
        'pages.indikator.indeks-indeks.penyusunan-ipm',
        compact('penyusunan')
    );
}
public function indeksGender()
{
    // ===== IKG =====
    $urlIkg = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=965902695";

    $responseIkg = Http::get($urlIkg);

    $rowsIkg = array_map('str_getcsv', explode("\n", $responseIkg->body()));

    $ikg = [];

    for ($i = 2; $i < count($rowsIkg); $i++) {

        if (count($rowsIkg[$i]) >= 3) {

            $ikg[] = [
                'variabel'   => $rowsIkg[$i][0] ?? '',
                'tahun2022'  => $rowsIkg[$i][1] ?? '',
                'tahun2023'  => $rowsIkg[$i][2] ?? '',
            ];
        }
    }

    // ===== IPG =====
    $urlIpg = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=311668744";

    $responseIpg = Http::get($urlIpg);

    $rowsIpg = array_map('str_getcsv', explode("\n", $responseIpg->body()));

    $ipg = [];

    for ($i = 2; $i < count($rowsIpg); $i++) {

        if (count($rowsIpg[$i]) >= 3) {

            $ipg[] = [
                'variabel'   => $rowsIpg[$i][0] ?? '',
                'tahun2022'  => $rowsIpg[$i][1] ?? '',
                'tahun2023'  => $rowsIpg[$i][2] ?? '',
            ];
        }
    }

    return view(
        'pages.indikator.indeks-indeks.gender',
        compact('ikg', 'ipg')
    );
}

// ===== SEPUTAR KUNINGAN =====
public function skDaftarDesa()    { return view('pages.seputar-kuningan.daftar-desa'); }
public function skHariJadi()      { return view('pages.seputar-kuningan.hari-jadi'); }
public function skPemerintahan()  { return view('pages.seputar-kuningan.pemerintahan'); }
public function skGeografis()     { return view('pages.seputar-kuningan.geografis'); }
public function skBupati()        { return view('pages.seputar-kuningan.bupati'); }
public function skRumahSakit()    { return view('pages.seputar-kuningan.rumah-sakit'); }
public function skPendidikan()    { return view('pages.seputar-kuningan.pendidikan'); }

// ===== PARIWISATA =====
public function pwAalam()         { return view('pages.pariwisata.wisata-alam'); }
public function pwSeniBudaya()    { return view('pages.pariwisata.seni-budaya'); }
public function pwBuatan()        { return view('pages.pariwisata.wisata-buatan'); }
public function pwSejarah()       { return view('pages.pariwisata.wisata-sejarah'); }
public function pwKuliner()       { return view('pages.pariwisata.wisata-kuliner'); }
public function pwHotel()         { return view('pages.pariwisata.hotel'); }

// ===== LINK SEPUTAR KUNINGAN =====
public function linkSeputar() { return view('pages.link-seputar'); }
}

