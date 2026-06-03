<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SeputarKuninganController extends Controller
{
    /**
     * Menampilkan daftar desa dan kelurahan
     * yang dikelompokkan berdasarkan kecamatan.
     */
    public function daftarDesa()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=183407791";

        // Mengambil data CSV dari Google Spreadsheet
        $rows = array_map('str_getcsv', file($url));

        // Mengambil header kolom
        $header = array_map('trim', array_shift($rows));

        $data = [];

        foreach ($rows as $row) {

            // Pastikan jumlah kolom sesuai dengan header
            if (count($header) == count($row)) {

                $item = array_combine($header, $row);

                $kecamatan = trim($item['kecamatan']);

                // Membuat grup kecamatan jika belum ada
                if (!isset($data[$kecamatan])) {

                    $data[$kecamatan] = [
                        'kode' => trim($item['kode']),
                        'nama' => $kecamatan,
                        'desa' => [],
                        'jumlah_desa' => 0,
                        'jumlah_kelurahan' => 0
                    ];
                }

                // Menghitung jumlah desa dan kelurahan
                if (strtolower(trim($item['status'])) == 'kelurahan') {
                    $data[$kecamatan]['jumlah_kelurahan']++;
                } else {
                    $data[$kecamatan]['jumlah_desa']++;
                }

                // Menyimpan data desa ke dalam kecamatan terkait
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
            ['kecamatan' => $data]
        );
    }

    /**
     * Halaman Hari Jadi Kabupaten Kuningan
     */
    public function hariJadi()
    {
        return view('pages.seputar-kuningan.hari-jadi');
    }

    /**
     * Menampilkan daftar OPD Pemerintah Kabupaten Kuningan
     */
    public function Pemerintahan()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=887110616";

        $response = Http::get($url);

        $rows = array_map(
            'str_getcsv',
            explode("\n", $response->body())
        );

        // Menghapus header
        array_shift($rows);

        $opd = [];

        foreach ($rows as $row) {

            if (count($row) >= 2) {

                $opd[] = [
                    'no'   => trim($row[0]),
                    'nama' => trim($row[1])
                ];
            }
        }

        return view(
            'pages.seputar-kuningan.pemerintahan',
            compact('opd')
        );
    }

    /**
     * Halaman informasi geografis Kabupaten Kuningan
     */
    public function geografis()
    {
        return view('pages.seputar-kuningan.geografis');
    }

    /**
     * Menampilkan daftar Bupati Kabupaten Kuningan
     */
    public function Bupati()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1107923714";

        $response = Http::get($url);

        $rows = array_map(
            'str_getcsv',
            explode("\n", $response->body())
        );

        // Menghapus header
        array_shift($rows);

        $bupati = [];

        foreach ($rows as $row) {

            if (count($row) >= 3) {

                $bupati[] = [
                    'No'           => trim($row[0]),
                    'Nama Bupati'  => trim($row[1]),
                    'Masa Jabatan' => trim($row[2]),
                ];
            }
        }

        return view(
            'pages.seputar-kuningan.bupati',
            compact('bupati')
        );
    }

    /**
     * Menampilkan daftar rumah sakit di Kabupaten Kuningan
     */
    public function rumahSakit()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1382886338";

        $response = Http::get($url);

        $rows = array_map(
            'str_getcsv',
            explode("\n", $response->body())
        );

        // Menghapus header
        array_shift($rows);

        $rumahsakit = [];

        foreach ($rows as $row) {

            // Lewati data yang tidak lengkap
            if (count($row) < 3) {
                continue;
            }

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

    /**
     * Menampilkan data pendidikan (APS)
     */
    public function pendidikan()
    {
        $gid = '1071199460';

        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=1071199460";

        $response = Http::get($url);

        $rows = array_map(
            'str_getcsv',
            explode("\n", $response->body())
        );

        // Mengambil header dan mengubah menjadi lowercase
        $header = array_map(
            fn($h) => strtolower(trim($h)),
            array_shift($rows)
        );

        $aps = [];

        foreach ($rows as $row) {

            // Lewati baris kosong
            if (count($row) < 2 || empty(trim($row[0]))) {
                continue;
            }

            // Pastikan jumlah kolom sesuai
            if (count($header) !== count($row)) {
                continue;
            }

            $item = array_combine($header, $row);

            $aps[] = [
                'keterangan' => trim($item['keterangan'] ?? $row[0]),
                'laki'       => trim($item['laki'] ?? $row[1] ?? '-'),
                'perempuan'  => trim($item['perempuan'] ?? $row[2] ?? '-'),
                'total'      => trim($item['total'] ?? $row[3] ?? '-'),
            ];
        }

        return view(
            'pages.seputar-kuningan.pendidikan',
            compact('aps')
        );
    }

    /**
     * Menampilkan daftar link penting seputar Kuningan
     */
    public function linkSeputar()
    {
        $url = "https://docs.google.com/spreadsheets/d/1WmnAGk-5fXNCCPcjjw_f9OkVJ0A6v1JnLo23QJJIagY/export?format=csv&gid=931452637";

        // Mengambil data CSV
        $rows = array_map('str_getcsv', file($url));

        // Mengambil header
        $header = array_map('trim', array_shift($rows));

        $links = [];

        foreach ($rows as $row) {

            if (count($header) == count($row)) {

                $links[] = array_combine($header, $row);
            }
        }

        return view(
            'pages.link-seputar',
            compact('links')
        );
    }
}