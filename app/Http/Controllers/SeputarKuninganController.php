<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SeputarKuninganController extends Controller
{
    public function daftarDesa()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=183407791";

        $response = Http::get($url);

        $rows = array_map('str_getcsv', explode("\n", $response->body()));

        array_shift($rows);

        $data = [];

        foreach ($rows as $row) {

            if(count($row) < 4) continue;

            $kode      = trim($row[0]);
            $kecamatan = trim($row[1]);
            $desa      = trim($row[2]);
            $kategori  = trim($row[3]);

            if (!isset($data[$kecamatan])) {

                $data[$kecamatan] = [
                    'kode' => $kode,
                    'nama' => $kecamatan,
                    'desa' => []
                ];

            }

            $data[$kecamatan]['desa'][] = [
                'nama' => $desa,
                'kategori' => $kategori
            ];
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

    public function pemerintahan()
    {
        return view('pages.seputar-kuningan.pemerintahan');
    }

    public function geografis()
    {
        return view('pages.seputar-kuningan.geografis');
    }

    public function bupati()
    {
        return view('pages.seputar-kuningan.bupati');
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
}