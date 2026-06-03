<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PariwisataKuninganController extends Controller
{
    // ===== PARIWISATA =====
    // Controller ini digunakan untuk mengambil data pariwisata dari Google Spreadsheet
    // lalu mengirimkan data tersebut ke masing-masing halaman view.

    public function pwAalam()
    {
        // URL data CSV untuk wisata alam
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=191964697";

        // Mengambil data dari URL menggunakan HTTP request
        $response = Http::get($url);

        // Mengubah isi CSV menjadi array baris
        $rows = array_map('str_getcsv', explode("\n", $response->body()));

        // Mengambil baris pertama sebagai header dan membersihkan spasi
        $header = array_map('trim', array_shift($rows));

        $alam = [];

        // Menggabungkan header dengan isi data setiap baris
        foreach ($rows as $row) {
            if (count($header) == count($row)) {
                $alam[] = array_combine($header, $row);
            }
        }

        // Mengirim data wisata alam ke view
        return view(
            'pages.pariwisata.wisata-alam',
            compact('alam')
        );
    }

    public function pwSeniBudaya()
    {
        // URL data CSV untuk seni budaya
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1906661929";

        // Mengambil dan mengubah data CSV menjadi array
        $rows = array_map('str_getcsv', file($url));

        // Mengambil header dari baris pertama
        $header = array_map('trim', array_shift($rows));

        $seni = [];

        // Menggabungkan header dan isi data seni budaya
        foreach ($rows as $row) {
            if (count($header) == count($row)) {
                $seni[] = array_combine($header, $row);
            }
        }

        // Mengirim data seni budaya ke view
        return view(
            'pages.pariwisata.seni-budaya',
            compact('seni')
        );
    }

    public function pwBuatan()
    {
        // URL data CSV untuk wisata buatan
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1390232862";

        // Mengambil dan mengubah data CSV menjadi array
        $rows = array_map('str_getcsv', file($url));

        // Mengambil header dari baris pertama
        $header = array_map('trim', array_shift($rows));

        $wisata = [];

        // Menggabungkan header dengan isi data wisata buatan
        foreach ($rows as $row) {
            if (count($header) == count($row)) {
                $wisata[] = array_combine($header, $row);

                // Mengubah data tags dari string menjadi array
                $wisata[count($wisata) - 1]['tags'] =
                    explode(',', $wisata[count($wisata) - 1]['tags']);
            }
        }

        // Mengirim data wisata buatan ke view
        return view(
            'pages.pariwisata.wisata-buatan',
            compact('wisata')
        );
    }

    public function pwSejarah()
    {
        // URL data CSV untuk wisata sejarah
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1338656171";

        // Mengambil dan mengubah data CSV menjadi array
        $rows = array_map('str_getcsv', file($url));

        // Mengambil header dari baris pertama
        $header = array_map('trim', array_shift($rows));

        $sejarah = [];

        // Menggabungkan header dengan isi data wisata sejarah
        foreach ($rows as $row) {
            if (count($header) == count($row)) {
                $sejarah[] = array_combine($header, $row);
            }
        }

        // Mengirim data wisata sejarah ke view
        return view(
            'pages.pariwisata.wisata-sejarah',
            compact('sejarah')
        );
    }

    public function pwKuliner()
    {
        // URL data CSV untuk wisata kuliner
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=2118676981";

        // Mengambil dan mengubah data CSV menjadi array
        $rows = array_map('str_getcsv', file($url));

        // Mengambil header dari baris pertama
        $header = array_map('trim', array_shift($rows));

        $kuliner = [];

        // Menggabungkan header dengan isi data wisata kuliner
        foreach ($rows as $row) {
            if (count($header) == count($row)) {
                $kuliner[] = array_combine($header, $row);

                // Mengubah data tags dari string menjadi array
                $kuliner[count($kuliner) - 1]['tags'] =
                    explode(',', $kuliner[count($kuliner) - 1]['tags']);
            }
        }

        // Mengirim data wisata kuliner ke view
        return view(
            'pages.pariwisata.wisata-kuliner',
            compact('kuliner')
        );
    }

    public function pwHotel()
    {
        // URL data CSV untuk hotel
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1712060302";

        // Mengambil data dari URL menggunakan HTTP request
        $response = Http::get($url);

        // Mengubah isi CSV menjadi array baris
        $rows = array_map('str_getcsv', explode("\n", $response->body()));

        // Menghapus baris header
        array_shift($rows);

        $hotel = [];

        // Menyusun data hotel secara manual berdasarkan urutan kolom CSV
        foreach ($rows as $row) {
            if (count($row) < 10) {
                continue;
            }

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

        // Mengirim data hotel ke view
        return view(
            'pages.pariwisata.hotel',
            compact('hotel')
        );
    }
}