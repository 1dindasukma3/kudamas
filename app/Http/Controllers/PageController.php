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
public function kependudukanJenisKelamin() { return view('pages.indikator.kependudukan.jenis-kelamin'); }
public function kependudukanKelompokUmur() { return view('pages.indikator.kependudukan.kelompok-umur');}

// ===== KEMISKINAN =====
public function kemiskinanKonsep() { return view('pages.indikator.kemiskinan.konsep'); }
public function kemiskinanGaris() { return view('pages.indikator.kemiskinan.garis-kemiskinan'); }
public function kemiskinanJumlah() { return view('pages.indikator.kemiskinan.jumlah-penduduk-miskin'); }
public function kemiskinanPersentase() { return view('pages.indikator.kemiskinan.persentase-penduduk-miskin'); }
public function kemiskinanKedalaman() { return view('pages.indikator.kemiskinan.indeks-kedalaman'); }
public function kemiskinanKeparahan() { return view('pages.indikator.kemiskinan.indeks-keparahan'); }

// ===== PDRB =====
public function pdrbKonsep() { return view('pages.indikator.pdrb.konsep'); }
public function pdrbPerkapita() { return view('pages.indikator.pdrb.perkapita-laju'); }

// ===== GINI RATIO =====
public function giniKonsep() { return view('pages.indikator.gini-ratio.konsep'); }
public function giniData() { return view('pages.indikator.gini-ratio.data'); }

// ===== KETENAGAKERJAAN =====
public function ketenagakerjaanKonsep() { return view('pages.indikator.ketenagakerjaan.konsep'); }
public function ketenagakerjaanData() { return view('pages.indikator.ketenagakerjaan.data'); }
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
}

