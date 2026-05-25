<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SeputarKuninganController extends Controller
{
    public function daftarDesa()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=183407791";

        $rows = array_map('str_getcsv', file($url));

        $header = array_map('trim', array_shift($rows));

        $data = [];

        foreach ($rows as $row) {

            if(count($header) == count($row)) {

                $item = array_combine($header, $row);

                $kecamatan = trim($item['kecamatan']);

                if (!isset($data[$kecamatan])) {

                    $data[$kecamatan] = [
                        'kode' => trim($item['kode']),
                        'nama' => $kecamatan,
                        'desa' => [],
                        'jumlah_desa' => 0,
                        'jumlah_kelurahan' => 0
                    ];
                }

                // Hitung desa & kelurahan
                if (strtolower(trim($item['status'])) == 'kelurahan') {

                    $data[$kecamatan]['jumlah_kelurahan']++;

                } else {

                    $data[$kecamatan]['jumlah_desa']++;
                }

                // Simpan data
                $data[$kecamatan]['desa'][] = [
                    'kd_desa'  => trim($item['kd_desa']),
                    'nama'     => trim($item['desa']),
                    'kategori' => trim($item['kategori']),
                    'status'   => trim($item['status'])
                ];
            }
        }

        return view(
            'pages.seputar-kuningan.daftar-desa',
            [
                'kecamatan' => $data
            ]
        );
    }

    public function hariJadi()
    {
        return view('pages.seputar-kuningan.hari-jadi');
    }

    public function Pemerintahan()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=887110616";

    $response = Http::get($url);

    $csv = $response->body();

    $rows = array_map('str_getcsv', explode("\n", $csv));

    array_shift($rows);

    $opd = [];

    foreach ($rows as $row) {

        if (count($row) >= 2) {

            $opd[] = [
                'no' => trim($row[0]),
                'nama' => trim($row[1]),
            ];
        }
    }

    return view(
        'pages.seputar-kuningan.pemerintahan',
        compact('opd')
    );
}

    public function geografis()
    {
        return view('pages.seputar-kuningan.geografis');
    }

    public function Bupati()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1107923714";

    $response = Http::get($url);

    $csv = $response->body();

    $rows = array_map('str_getcsv', explode("\n", $csv));

    $header = array_shift($rows);

    $bupati = [];

    foreach ($rows as $row) {

        if(count($row) >= 3){

            $bupati[] = [
                'No' => trim($row[0]),
                'Nama Bupati' => trim($row[1]),
                'Masa Jabatan' => trim($row[2]),
            ];
        }
    }

    return view(
        'pages.seputar-kuningan.bupati',
        compact('bupati')
    );
}
    public function rumahSakit()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1382886338";

        $response = Http::get($url);

        $rows = array_map('str_getcsv', explode("\n", $response->body()));

        array_shift($rows);

        $rumahsakit = [];

        foreach ($rows as $row) {

            if(count($row) < 3) continue;

            $rumahsakit[] = [
                'nama'   => trim($row[0]),
                'alamat' => trim($row[1]),
                'telp'   => trim($row[2]),
            ];
        }

        return view(
            'pages.seputar-kuningan.rumah-sakit',
            compact('rumahsakit')
        );
    }

    public function pendidikan()
    {
        return view('pages.seputar-kuningan.pendidikan');
    }
    public function linkSeputar()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=931452637";

        $rows = array_map('str_getcsv', file($url));

        $header = array_map('trim', array_shift($rows));

        $links = [];

        foreach ($rows as $row) {

            if(count($header) == count($row)) {

                $links[] = array_combine($header, $row);
            }
        }

        return view(
            'pages.link-seputar',
            compact('links')
        );
    }
}