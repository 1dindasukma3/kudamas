<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    $data = array_map('str_getcsv', file($url));

    $header = array_shift($data);

    $gini = [];

    foreach ($data as $row) {

        $gini[] = array_combine($header, $row);

    }

    return view('pages.indikator.gini-ratio.data', compact('gini'));
}

// ===== KETENAGAKERJAAN =====
public function ketenagakerjaanKonsep() { return view('pages.indikator.ketenagakerjaan.konsep'); }
public function ketenagakerjaanData()
{
    // ANGKATAN KERJA
    $urlAngkatan = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1274743605";

    $csvAngkatan = array_map('str_getcsv', file($urlAngkatan));

    $angkatan = [];

    for ($i = 1; $i < count($csvAngkatan); $i++) {

        $angkatan[] = [
            'kegiatan' => $csvAngkatan[$i][0] ?? '',
            'laki' => $csvAngkatan[$i][1] ?? '',
            'perempuan' => $csvAngkatan[$i][2] ?? '',
            'jumlah' => $csvAngkatan[$i][3] ?? '',
        ];
    }

    // BUKAN ANGKATAN KERJA
    $urlBukan = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1360793945";

    $csvBukan = array_map('str_getcsv', file($urlBukan));

    $bukanAngkatan = [];

    for ($i = 1; $i < count($csvBukan); $i++) {

        $bukanAngkatan[] = [
            'kegiatan' => $csvBukan[$i][0] ?? '',
            'laki' => $csvBukan[$i][1] ?? '',
            'perempuan' => $csvBukan[$i][2] ?? '',
            'jumlah' => $csvBukan[$i][3] ?? '',
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
public function pmUhh() { return view('pages.indikator.pembangunan-manusia.uhh'); }
public function pmEys() { return view('pages.indikator.pembangunan-manusia.eys'); }
public function pmMys() { return view('pages.indikator.pembangunan-manusia.mys'); }
public function pmPpp() { return view('pages.indikator.pembangunan-manusia.ppp'); }
public function pmIpm() { return view('pages.indikator.pembangunan-manusia.ipm'); }
public function pmPertumbuhan() { return view('pages.indikator.pembangunan-manusia.pertumbuhan-ipm'); }

// ===== INDEKS-INDEKS =====
public function indeksKonsep() { return view('pages.indikator.indeks-indeks.konsep'); }
public function indeksPenyusunan() { return view('pages.indikator.indeks-indeks.penyusunan-ipm'); }
public function indeksGender() { return view('pages.indikator.indeks-indeks.gender'); }

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

