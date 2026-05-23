<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PariwisataKuninganController extends Controller
{
    // ===== PARIWISATA =====

    public function pwAalam()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=191964697";

    $response = Http::get($url);

    $rows = array_map('str_getcsv', explode("\n", $response->body()));

    $header = array_map('trim', array_shift($rows));

    $alam = [];

    foreach ($rows as $row) {

        if(count($header) == count($row)) {

            $alam[] = array_combine($header, $row);

        }
    }

    return view(
        'pages.pariwisata.wisata-alam',
        compact('alam')
    );
}
    public function pwSeniBudaya()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1906661929";

        $rows = array_map('str_getcsv', file($url));

$header = array_map('trim', array_shift($rows));

$seni = [];

foreach ($rows as $row) {

    if(count($header) == count($row)) {

        $seni[] = array_combine($header, $row);

    }
}

        return view(
            'pages.pariwisata.seni-budaya',
            compact('seni')
        );
    }

    public function pwBuatan()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1390232862";

        $rows = array_map('str_getcsv', file($url));

        $header = array_map('trim', array_shift($rows));

        $wisata = [];

        foreach ($rows as $row) {

            if(count($header) == count($row)) {

                $wisata[] = array_combine($header, $row);

                $wisata[count($wisata)-1]['tags'] =
                    explode(',', $wisata[count($wisata)-1]['tags']);
            }
        }

        return view(
            'pages.pariwisata.wisata-buatan',
            compact('wisata')
        );
    }
    public function pwSejarah()
{
    $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1338656171";

    $rows = array_map('str_getcsv', file($url));

    $header = array_map('trim', array_shift($rows));

    $sejarah = [];

    foreach ($rows as $row) {

        if(count($header) == count($row)) {

            $sejarah[] = array_combine($header, $row);

        }
    }

    return view(
        'pages.pariwisata.wisata-sejarah',
        compact('sejarah')
    );
}

    public function pwKuliner()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=2118676981";

        $rows = array_map('str_getcsv', file($url));

        $header = array_map('trim', array_shift($rows));

        $kuliner = [];

        foreach ($rows as $row) {

            if(count($header) == count($row)) {

                $kuliner[] = array_combine($header, $row);

                $kuliner[count($kuliner)-1]['tags'] =
                    explode(',', $kuliner[count($kuliner)-1]['tags']);
            }
        }

        return view(
            'pages.pariwisata.wisata-kuliner',
            compact('kuliner')
        );
    }

    public function pwHotel()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1712060302";

        $response = Http::get($url);

        $rows = array_map('str_getcsv', explode("\n", $response->body()));

        array_shift($rows);

        $hotel = [];

        foreach ($rows as $row) {

            if(count($row) < 10) continue;

            $hotel[] = [
                'no'      => trim($row[0]),
                'nama'    => trim($row[1]),
                'foto'    => trim($row[2]),
                'emoji'   => trim($row[3]),
                'bg'      => trim($row[4]),
                'alamat'  => trim($row[5]),
                'telp'    => trim($row[6]),
                'website' => trim($row[7]),
                'email'   => trim($row[8]),
                'tags'    => explode(',', trim($row[9])),
            ];
        }

        return view(
            'pages.pariwisata.hotel',
            compact('hotel')
        );
    }
}