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

    $rows = array_map('str_getcsv', file($url));

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
        return view('pages.pariwisata.wisata-buatan');
    }

    public function pwSejarah()
    {
        return view('pages.pariwisata.wisata-sejarah');
    }

    public function pwKuliner()
    {
        return view('pages.pariwisata.wisata-kuliner');
    }

    public function pwHotel()
    {
        return view('pages.pariwisata.hotel');
    }
}