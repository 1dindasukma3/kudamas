<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SeputarKuninganController extends Controller
{
    public function daftarDesa()
    {
        $url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vRkOoduh1jnZEK9TKDF1kFj_Jc_lvnvRGUL6i_hp7TeJ8YLanrdNuKP27ZE3q7_7DEcEsiZN0uPs9td/pubhtml?gid=183407791&single=true";

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
        return view('pages.seputar-kuningan.rumah-sakit');
    }

    public function pendidikan()
    {
        return view('pages.seputar-kuningan.pendidikan');
    }
}