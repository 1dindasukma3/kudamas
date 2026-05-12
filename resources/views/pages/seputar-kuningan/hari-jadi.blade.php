@extends('layouts.page')
@section('title', 'Hari Jadi / Sejarah')
@section('page-title', 'Hari Jadi / Sejarah Kuningan')

@section('page-content')

{{-- Hero card --}}
<div class="position-relative overflow-hidden rounded-4 p-4 mb-4 text-white"
     style="background: linear-gradient(135deg,#1B3A6B,#2563EB);">
    <div class="position-absolute top-0 end-0 opacity-10"
         style="font-size:7rem;transform:translate(20%,-10%);">🏛️</div>
    <div class="d-flex align-items-center gap-3 position-relative">
        <div class="rounded-circle d-flex justify-content-center align-items-center flex-shrink-0"
             style="width:70px;height:70px;background:rgba(255,255,255,0.15);font-size:2rem;">
            📜
        </div>
        <div>
            <div style="font-size:0.75rem;letter-spacing:1px;text-transform:uppercase;opacity:0.8;">
                Sejarah Kabupaten Kuningan
            </div>
            <div style="font-size:1.6rem;font-weight:800;line-height:1.2;">
                Hari Jadi Kuningan
            </div>
            <div style="font-size:0.85rem;opacity:0.8;margin-top:4px;">
                Berdasarkan Peraturan Daerah Nomor 21/DP.003/XII/1978
            </div>
        </div>
    </div>
</div>

{{-- Konten utama --}}
<div class="bg-white shadow-sm rounded-4 p-4">

    <h4 class="fw-bold text-center mb-4" style="color:#1B3A6B;letter-spacing:1px;">
        SEJARAH KABUPATEN KUNINGAN
    </h4>

    <p style="text-align:justify;line-height:1.9;color:#555;">
        Pemerintah Kabupaten Daerah Tingkat II Kuningan telah menetapkan Peraturan Daerah
        Nomor: 21/DP.003/XII/1978 tanggal 14 Desember 1978 tentang Sejarah dan Hari Jadi
        Kuningan. Berdasarkan peraturan daerah tersebut, sejarah Kuningan disusun sejak mulai
        ada tanda-tanda pemukiman atau perkampungan yang telah mempunyai pemerintahan hingga
        perkembangannya sampai sekarang.
    </p>

    {{-- Box kutipan --}}
    <div class="rounded-4 p-4 my-4" style="background:#F4F7FB;border-left:5px solid #2563EB;">
        <h5 class="fw-bold mb-3" style="color:#1B3A6B;">"SEJARAH HARI JADI KUNINGAN"</h5>
        <p style="text-align:justify;line-height:1.9;color:#555;margin:0;">
            Merupakan ringkasan peraturan daerah tersebut dengan lampirannya yang secara garis
            besar sebagai berikut: kira-kira 3500 tahun sebelum masehi, tanda-tanda yang
            memberitahukan bahwa di Kuningan sudah ada pemukiman masyarakat yang sudah mencapai
            tingkat kebudayaan yang relatif maju. Hal ini berdasarkan atas hasil peninggalannya
            yang ditemukan di wilayah Kuningan.
        </p>
    </div>

    {{-- Timeline --}}
    <div class="timeline-history">

        <div class="history-item mb-4 p-3 rounded-4"
             style="background:#fff;border:1px solid #E5E7EB;">
            <div class="fw-bold mb-2" style="color:#2563EB;font-size:1rem;">
                📅 Tahun 1175 Masehi
            </div>
            <p class="mb-0" style="text-align:justify;line-height:1.8;color:#555;">
                Pada tanggal 22 Juli 1175 Masehi Kuningan dijadikan pusat pemerintahan Kerajaan
                Sunda di bawah Rakean Darmasiksa putra ke-12 Rahiang Banga. Setelah bertahta
                selama 12 tahun di Saunggalah, kemudian keraton dipindahkan oleh Rakean Darmasiksa
                ke Pakuan Pajajaran.
            </p>
        </div>

        <div class="history-item mb-4 p-3 rounded-4"
             style="background:#fff;border:1px solid #E5E7EB;">
            <div class="fw-bold mb-2" style="color:#2563EB;font-size:1rem;">
                👑 Masa Kerajaan Pajajaran
            </div>
            <p class="mb-0" style="text-align:justify;line-height:1.8;color:#555;">
                Selanjutnya Kuningan merupakan bagian dari Kerajaan Pajajaran dan namanya berganti
                menjadi Kajene yang ada di bawah kekuasaan Aria Kamuning. Kajene artinya "kuning"
                atau "emas".
            </p>
        </div>

        <div class="history-item mb-4 p-3 rounded-4"
             style="background:#fff;border:1px solid #E5E7EB;">
            <div class="fw-bold mb-2" style="color:#2563EB;font-size:1rem;">
                🎂 Penetapan Hari Jadi
            </div>
            <p class="mb-0" style="text-align:justify;line-height:1.8;color:#555;">
                Pada masa berdirinya Kerajaan Kuningan di bawah pimpinan Adipati Kuningan, pada
                saat tanggal penobatannya daerah yang semula bernama Kajene dikembalikan lagi ke
                nama aslinya yaitu "Kuningan". Dan sejak saat itulah tanggal
                <strong>1 September ditetapkan sebagai Hari Jadi Kuningan</strong>.
            </p>
        </div>

        <div class="history-item mb-4 p-3 rounded-4"
             style="background:#fff;border:1px solid #E5E7EB;">
            <div class="fw-bold mb-2" style="color:#2563EB;font-size:1rem;">
                🇮🇩 Masa Penjajahan Hindia Belanda
            </div>
            <p class="mb-0" style="text-align:justify;line-height:1.8;color:#555;">
                Berkat nilai-nilai luhur jiwa juang para leluhur Kuningan yang diwariskan kepada
                anak cucunya, pada zaman Hindia Belanda karena perlawanannya seorang ulama besar
                dari Lengkong yaitu Eyang Hasan Maolani oleh Pemerintah Hindia Belanda telah
                dibuang/diasingkan ke Gorontalo Sulawesi Utara dan meninggal di Gorontalo.
            </p>
        </div>

        <div class="history-item mb-4 p-3 rounded-4"
             style="background:#fff;border:1px solid #E5E7EB;">
            <div class="fw-bold mb-2" style="color:#2563EB;font-size:1rem;">
                🤝 Perundingan Linggarjati
            </div>
            <p class="mb-0" style="text-align:justify;line-height:1.8;color:#555;">
                Di dalam usaha mempertahankan kemerdekaan, pemerintah Indonesia mengadakan
                serangkaian perundingan dengan Belanda. Salah satu perundingan dilakukan di
                Linggarjati yang pada saat itu belum dikuasai Belanda. Pemilihan Linggarjati
                sebagai tempat perundingan merupakan pilihan yang tepat, baik dilihat dari segi
                politis maupun dari segi keindahan alamnya. Dengan adanya perundingan tersebut
                maka nama Linggarjati tidak hanya dikenal di Indonesia, melainkan juga dikenal
                di seluruh dunia.
            </p>
        </div>

        <div class="history-item p-3 rounded-4"
             style="background:#fff;border:1px solid #E5E7EB;">
            <div class="fw-bold mb-2" style="color:#2563EB;font-size:1rem;">
                🏙️ Perkembangan Wilayah
            </div>
            <p class="mb-0" style="text-align:justify;line-height:1.8;color:#555;">
                Dalam perkembangannya, Kabupaten Kuningan telah mengalami berbagai perubahan
                sistem pemerintahan sejak zaman kerajaan, kolonial Belanda, hingga era
                kemerdekaan. Saat ini Kabupaten Kuningan terdiri dari
                <strong>32 kecamatan</strong> dan <strong>361 desa/kelurahan</strong>,
                dengan luas wilayah sekitar <strong>1.195,71 km²</strong>.
            </p>
        </div>

    <div class="mt-3 text-center">
        <small class="text-muted">Sumber: Pemerintah Kabupaten Kuningan</small>
    </div>

</div>

@endsection