<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Splash screen (halaman pertama)
Route::get('/', [PageController::class, 'splash'])->name('splash');

// Menu utama
Route::get('/home', [PageController::class, 'home'])->name('home');

// Halaman konten
Route::get('/beranda', [PageController::class, 'beranda'])->name('beranda');
Route::get('/indikator-statistik', [PageController::class, 'indikator'])->name('indikator');
Route::get('/seputar-kuningan', [PageController::class, 'seputarKuningan'])->name('seputar-kuningan');
Route::get('/pariwisata', [PageController::class, 'pariwisata'])->name('pariwisata');
Route::get('/media-sosial', [PageController::class, 'mediaSosial'])->name('media-sosial');

// Sub-menu Indikator Statistik
Route::get('/indikator-statistik/kependudukan', [PageController::class, 'kependudukan'])->name('kependudukan');
// Sub-menu Kependudukan
Route::get('/indikator-statistik/kependudukan/konsep', [PageController::class, 'kependudukanKonsep'])->name('kependudukan.konsep');
Route::get('/indikator-statistik/kependudukan/jenis-kelamin', [PageController::class, 'kependudukanJenisKelamin'])->name('kependudukan.jenis-kelamin');
Route::get('/indikator-statistik/kependudukan/kelompok-umur', [PageController::class, 'kependudukanKelompokUmur'])->name('kependudukan.kelompok-umur');



Route::get('/indikator-statistik/kemiskinan', [PageController::class, 'kemiskinan'])->name('kemiskinan');
// Sub-menu Kemiskinan
Route::get('/indikator-statistik/kemiskinan/konsep', [PageController::class, 'kemiskinanKonsep'])->name('kemiskinan.konsep');
Route::get('/indikator-statistik/kemiskinan/garis-kemiskinan', [PageController::class, 'kemiskinanGaris'])->name('kemiskinan.garis');
Route::get('/indikator-statistik/kemiskinan/jumlah-penduduk-miskin', [PageController::class, 'kemiskinanJumlah'])->name('kemiskinan.jumlah');
Route::get('/indikator-statistik/kemiskinan/persentase-penduduk-miskin', [PageController::class, 'kemiskinanPersentase'])->name('kemiskinan.persentase');
Route::get('/indikator-statistik/kemiskinan/indeks-kedalaman', [PageController::class, 'kemiskinanKedalaman'])->name('kemiskinan.kedalaman');
Route::get('/indikator-statistik/kemiskinan/indeks-keparahan', [PageController::class, 'kemiskinanKeparahan'])->name('kemiskinan.keparahan');

// ===== PDRB =====
Route::get('/indikator-statistik/pdrb', [PageController::class, 'pdrb'])->name('pdrb');
Route::get('/indikator-statistik/pdrb/konsep', [PageController::class, 'pdrbKonsep'])->name('pdrb.konsep');
Route::get('/indikator-statistik/pdrb/perkapita-laju', [PageController::class, 'pdrbPerkapita'])->name('pdrb.perkapita');

// ===== GINI RATIO =====
Route::get('/indikator-statistik/gini-ratio', [PageController::class, 'giniRatio'])->name('gini-ratio');
Route::get('/indikator-statistik/gini-ratio/konsep', [PageController::class, 'giniKonsep'])->name('gini-ratio.konsep');
Route::get('/indikator-statistik/gini-ratio/data', [PageController::class, 'giniData'])->name('gini-ratio.data');

// ===== KETENAGAKERJAAN =====
Route::get('/indikator-statistik/ketenagakerjaan', [PageController::class, 'ketenagakerjaan'])->name('ketenagakerjaan');
Route::get('/indikator-statistik/ketenagakerjaan/konsep', [PageController::class, 'ketenagakerjaanKonsep'])->name('ketenagakerjaan.konsep');
Route::get('/indikator-statistik/ketenagakerjaan/data', [PageController::class, 'ketenagakerjaanData'])->name('ketenagakerjaan.data');
Route::get('/indikator-statistik/ketenagakerjaan/tpt-tpak', [PageController::class, 'ketenagakerjaanTpt'])->name('ketenagakerjaan.tpt-tpak');

Route::get('/indikator-statistik/pembangunan-manusia', [PageController::class, 'pembangunanManusia'])->name('pembangunan-manusia');
Route::get('/indikator-statistik/indeks-indeks', [PageController::class, 'indeksIndeks'])->name('indeks-indeks');

// ===== PEMBANGUNAN MANUSIA =====
Route::get('/indikator-statistik/pembangunan-manusia/konsep', [PageController::class, 'pmKonsep'])->name('pm.konsep');
Route::get('/indikator-statistik/pembangunan-manusia/uhh', [PageController::class, 'pmUhh'])->name('pm.uhh');
Route::get('/indikator-statistik/pembangunan-manusia/eys', [PageController::class, 'pmEys'])->name('pm.eys');
Route::get('/indikator-statistik/pembangunan-manusia/mys', [PageController::class, 'pmMys'])->name('pm.mys');
Route::get('/indikator-statistik/pembangunan-manusia/ppp', [PageController::class, 'pmPpp'])->name('pm.ppp');
Route::get('/indikator-statistik/pembangunan-manusia/ipm', [PageController::class, 'pmIpm'])->name('pm.ipm');
Route::get('/indikator-statistik/pembangunan-manusia/pertumbuhan-ipm', [PageController::class, 'pmPertumbuhan'])->name('pm.pertumbuhan');

// ===== INDEKS-INDEKS =====
Route::get('/indikator-statistik/indeks-indeks/konsep', [PageController::class, 'indeksKonsep'])->name('indeks.konsep');
Route::get('/indikator-statistik/indeks-indeks/penyusunan-ipm', [PageController::class, 'indeksPenyusunan'])->name('indeks.penyusunan');
Route::get('/indikator-statistik/indeks-indeks/gender', [PageController::class, 'indeksGender'])->name('indeks.gender');

// ===== SEPUTAR KUNINGAN =====
Route::get('/seputar-kuningan/daftar-desa', [PageController::class, 'skDaftarDesa'])->name('sk.daftar-desa');
Route::get('/seputar-kuningan/hari-jadi', [PageController::class, 'skHariJadi'])->name('sk.hari-jadi');
Route::get('/seputar-kuningan/pemerintahan', [PageController::class, 'skPemerintahan'])->name('sk.pemerintahan');
Route::get('/seputar-kuningan/geografis', [PageController::class, 'skGeografis'])->name('sk.geografis');
Route::get('/seputar-kuningan/bupati', [PageController::class, 'skBupati'])->name('sk.bupati');
Route::get('/seputar-kuningan/rumah-sakit', [PageController::class, 'skRumahSakit'])->name('sk.rumah-sakit');
Route::get('/seputar-kuningan/pendidikan', [PageController::class, 'skPendidikan'])->name('sk.pendidikan');

// ===== PARIWISATA =====
Route::get('/pariwisata/wisata-alam', [PageController::class, 'pwAalam'])->name('pw.alam');
Route::get('/pariwisata/seni-budaya', [PageController::class, 'pwSeniBudaya'])->name('pw.seni-budaya');
Route::get('/pariwisata/wisata-buatan', [PageController::class, 'pwBuatan'])->name('pw.buatan');
Route::get('/pariwisata/wisata-sejarah', [PageController::class, 'pwSejarah'])->name('pw.sejarah');
Route::get('/pariwisata/wisata-kuliner', [PageController::class, 'pwKuliner'])->name('pw.kuliner');
Route::get('/pariwisata/hotel', [PageController::class, 'pwHotel'])->name('pw.hotel');

// ===== LINK SEPUTAR KUNINGAN =====
Route::get('/link-seputar-kuningan', [PageController::class, 'linkSeputar'])->name('link-seputar');



