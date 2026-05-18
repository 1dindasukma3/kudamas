@extends('layouts.page')
@section('title', 'Daftar Nama Desa')
@section('page-title', 'Daftar Nama Desa')

@push('styles')
<style>
    .kec-summary {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
        margin-bottom: 24px;
    }
    .kec-stat {
        background: linear-gradient(135deg, #1B3A6B, #2563EB);
        border-radius: 14px; padding: 14px;
        text-align: center; color: white;
    }
    .kec-stat .val { font-size: 1.6rem; font-weight: 800; line-height: 1.1; }
    .kec-stat .lbl { font-size: 0.68rem; opacity: 0.8; margin-top: 3px; text-transform: uppercase; letter-spacing: 0.5px; }

    /* ACCORDION KECAMATAN */
    .kec-accordion { display: flex; flex-direction: column; gap: 8px; }

    .kec-item { border-radius: 12px; overflow: hidden; border: 1px solid var(--border); }

    .kec-header {
        background: #1B3A6B;
        color: white;
        padding: 14px 18px;
        font-weight: 700;
        font-size: 0.88rem;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        user-select: none;
        transition: background 0.18s;
    }

    .kec-header:hover { background: #1e40af; }
    .kec-header.open  { background: #1e3a8a; }

    .kec-header .kec-left { display: flex; align-items: center; gap: 10px; }

    .kec-kode {
        background: rgba(255,255,255,0.18);
        font-size: 0.72rem; font-weight: 800;
        padding: 2px 8px; border-radius: 6px;
        letter-spacing: 0.5px;
    }

    .kec-arrow {
        font-size: 0.75rem;
        transition: transform 0.22s cubic-bezier(.4,0,.2,1);
    }
    .kec-header.open .kec-arrow { transform: rotate(180deg); }

    .kec-body {
        display: none;
        background: #F8FAFC;
        padding: 14px;
    }
    .kec-body.show { display: block; }

    .desa-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 7px;
    }

    .desa-item {
        background: white;
        border: 1px solid var(--border);
        border-radius: 8px;
        padding: 7px 11px;
        font-size: 0.8rem;
        color: var(--text);
        display: flex;
        align-items: center;
        gap: 7px;
        transition: all 0.15s;
    }
    .desa-item:hover {
        border-color: rgba(37,99,235,0.3);
        background: #EFF6FF;
        color: var(--biru);
    }
    .desa-item::before {
        content: '';
        width: 6px; height: 6px;
        background: var(--biru-muda);
        border-radius: 50%;
        flex-shrink: 0;
    }

    .desa-count {
        font-size: 0.68rem;
        color: rgba(255,255,255,0.65);
        margin-left: 4px;
    }

    @media (max-width: 576px) {
        .kec-summary { gap: 8px; }
        .kec-stat .val { font-size: 1.2rem; }
        .desa-grid { grid-template-columns: repeat(2, 1fr); }
    }
</style>
@endpush

@section('page-content')

{{-- STATS --}}
<div class="kec-summary">
    <div class="kec-stat">
        <div class="val">32</div>
        <div class="lbl">Kecamatan</div>
    </div>
    <div class="kec-stat">
        <div class="val">361</div>
        <div class="lbl">Desa / Kelurahan</div>
    </div>
    <div class="kec-stat">
        <div class="val">15</div>
        <div class="lbl">Kelurahan</div>
    </div>
</div>

<p style="color:var(--muted);font-size:0.85rem;margin-bottom:18px;">
    Klik kecamatan untuk melihat daftar desa. Kabupaten Kuningan terdiri dari
    <strong>32 kecamatan</strong> dengan <strong>361 desa/kelurahan</strong>.
</p>

@php
$kecamatan = [
    ['kode'=>'010','nama'=>'DARMA','desa'=>['CIMENGA','TUGUMULYA','CAGEUR','SAKERTA TIMUR','SAKERTA BARAT','SUKARASA','PANINGGARAN','CIPASUNG','KAWAH MANUK','CIKUPA','PARUNG','DARMA','JAGARA','BAKOM','KARANGANYAR','GUNUNGSIRAH','SITUSARI','KARANGSARI','SAGARAHIANG']],
    ['kode'=>'020','nama'=>'KADUGEDE','desa'=>['MARGABAKTI','SINDANGJAWA','KADUGEDE','CIKETAK','NANGKA','WINDUJANTEN','CIPONDOK','BABATAN','BAYUNING','CIHERANG','TINGGAR','CISUKADANA']],
    ['kode'=>'021','nama'=>'NUSAHERANG','desa'=>['HAURKUNING','KERTAYUGA','WINDUSARI','NUSAHERANG','KERTAWIRAMA','CIKADU','JAMBAR','CIASIH']],
    ['kode'=>'030','nama'=>'CINIRU','desa'=>['GUNUNGMANIK','PINARA','CIPEDES','PAMUPUKAN','CIJEMIT','CINIRU','RAMBATAN','LONGKEWANG','MUNGKALDATAR']],
    ['kode'=>'031','nama'=>'HANTARA','desa'=>['TUNDAGAN','BUNIGEULIS','HANTARA','CIKONDANG','PASIRAGUNG','CITAPEN','PAKAPASAN HILIR','PAKAPASAN GIRANG']],
    ['kode'=>'040','nama'=>'SELAJAMBE','desa'=>['CANTILAN','SELAJAMBE','CIBERUNG','KUTAWARINGIN','BAGAWAT','JAMBERAMA','PADAHURIP']],
    ['kode'=>'050','nama'=>'SUBANG','desa'=>['TANGKOLO','PAMULIHAN','JATISARI','SUBANG','BANGUN JAYA','GUNUNGACI','SITUGEDE']],
    ['kode'=>'051','nama'=>'CILEBAK','desa'=>['MANDAPAJAYA','LEGOKHERANG','BUNGURBERES','CILEBAK','JALATRANG','PATALA','CILIMUSARI']],
    ['kode'=>'060','nama'=>'CIWARU','desa'=>['CITUNDUN','SAGARANTEN','SUMBERJAYA','LEBAKHERANG','CILAYUNG','CIWARU','LINGGA JAYA','KARANGBARU','GARAJATI','BAOK','ANDAMUI','CITUKUR']],
    ['kode'=>'061','nama'=>'KARANGKANCANA','desa'=>['MARGACINA','JABRANTI','KARANGKANCANA','KADUAGUNG','SEGONG','TANJUNGKERTA','SUKASARI','SIMPAYJAYA','CIHANJARO']],
    ['kode'=>'070','nama'=>'CIBINGBIN','desa'=>['CIANGIR','CIPONDOK','SUKAHARJA','SINDANGJAWA','SUKAMAJU','CIBINGBIN','CITENJO','DUKUHBADAG','CISAAT','BANTARPANJANG']],
    ['kode'=>'071','nama'=>'CIBEUREUM','desa'=>['CIMARA','KAWUNGSARI','SUKARAPIH','SUMUR WIRU','CIBEUREUM','RANDUSARI','SUKADANA','TARIKOLOT']],
    ['kode'=>'080','nama'=>'LURAGUNG','desa'=>['WALAHARCAGEUR','DUKUHPICUNG','WILANAGARA','SINDANGSARI','CIGEDANG','LURAGUNG TONGGOH','MARGASARI','CIRAHAYU','SINDANGSUKA','CIKANDAN','PANYOSOGAN','GUNUNG KARUNG','DUKUHMAJA','LURAGUNG LANDEUH','CIKADUWETAN','BENDA']],
    ['kode'=>'081','nama'=>'CIMAHI','desa'=>['CILEUYA','MARGAMUKTI','CIMULYA','GUNUNGSARI','CIMAHI','KANANGA','CIKEUSAL','MULYAJAYA','SUKAJAYA','MEKARJAYA']],
    ['kode'=>'090','nama'=>'CIDAHU','desa'=>['CIHIDEUNG GIRANG','CIHIDEUNG HILIR','CIDAHU','KERTAWINANGUNG','DATAR','BUNDER','LEGOK','CIEURIH','NANGGELA','CIBULAN','CIKEUSIK','JATIMULYA']],
    ['kode'=>'091','nama'=>'KALIMANGGIS','desa'=>['KALIMANGGIS KULON','KALIMANGGIS WETAN','CIPANCUR','PARTAWINANGUN','KERTAWANA','WANASARAYA']],
    ['kode'=>'100','nama'=>'CIAWIGEBANG','desa'=>['CIJAGAMULYA','CIOMAS','SIDARAJA','PAJAWANLOW','LEBAKSIUH','KERAMATMULYA','GERESIK','CIPUTAT','KAPANDAYAN','DUKUHDALEM','PANGKALAN','CIAWIGEBANG','KADURAMA','PAMIJAHAN','KARANGKAMULYA','CIAWILOR','CIHAUR','CIGARUKGAK','MEKARJAYA','SUKARAJA','PADARAMA','SUKADANA','CIKUBANGMULYA','CIHIRUP']],
    ['kode'=>'101','nama'=>'CIPICUNG','desa'=>['CIPICUNG','KAROYA','SUSUKAN','SUKAMUKTI','CIPICUNG','MEKARSARI','CIMARANTEN','PAMULIHAN','SALAREUMA','SUGANANGAN']],
    ['kode'=>'110','nama'=>'LEBAKWANGI','desa'=>['CINAGARA','CINEUMBEUY','CIPETIR','LEBAKWANGI','MANCAGAR','LANGSEB','PAJAWANKIDUL','PAGUNDAN','MANGGARI','PASAYANGAN','SINDANG','BENDUNGAN','MEKARWANGI']],
    ['kode'=>'111','nama'=>'MALEBER','desa'=>['CIPAKEM','GIRIWARINGIN','GARAHAJI','GALAHERANG','MEKARSARI','PADAMULYA','CIKAHURIPAN','PARAKAN','KUTAMANDAKAN','MALEBER','KARANGTENGAH','DUKUHTENGAH','BUNIASIH','CIPORANG','KUTARAJA','MANDALAJAYA']],
    ['kode'=>'120','nama'=>'GARAWANGI','desa'=>['CIRUKEM','GEWOK','KUTAKEMBARAN','PAKEMBANGAN','KADATUAN','TEMBONG','LENGKONG','PURWASARI','KARAMATMULYA','SUKAIMUT','CIKANANGA','TAMBAKBAYA','MEKARMULYA','SUKAMULYA','MANCAGAR','CITIUSARI']],
    ['kode'=>'121','nama'=>'SINDANGAGUNG','desa'=>['KERTAUNGGARAN','KADUAGUNG','SINDANGSARI','KERTAWANGUNAN','SINDANGAGUNG','BALONG','MEKARMUKTI','KERTAYASA','TIRTAWANGUNAN','BABAKANREUMA','DUKUHLOR','TARAJU']],
    ['kode'=>'130','nama'=>'KUNINGAN','desa'=>['CIBINUANG','CITANGTU','KARANGTAWANG','WINDUHAJI','KUNINGAN','PURWAWINANGUN','CIGINTUNG','CIJOHO','WINDUSENGKAHAN','CIPORANG','ANCARAN','KEDUNGARUM','CIRENDANG','AWIRARANGAN','KASTURI','PADAREK']],
    ['kode'=>'140','nama'=>'CIGUGUR','desa'=>['CIGADUNG','SUKAMULYA','CILEULEUY','PUNCAK','BABAKANMULYA','CISANTANA','CIGUGUR','WINDUHERANG','GUNUNGKELING','CIPARI']],
    ['kode'=>'150','nama'=>'KRAMATMULYA','desa'=>['PAJAMBON','RAGAWACANA','CILOWA','GEREBA','CIKUBANGSARI','WIDARASARI','CILAJA','BOJONG','CIKASO','KRAMATMULYA','CIBENTANG','GANDASOLI','KALAPAGUNUNG','KARANGMANGU']],
    ['kode'=>'160','nama'=>'JALAKSANA','desa'=>['SUKAMUKTI','SIDAMULYA','JALAKSANA','BABAKANMULYA','SANGKANERANG','SAYANA','PEUSING','SEMBAWA','CINIRU','MANIS KIDUL','MANIS LOR','PADAMENAK','SADAMANTRA','SINDANGBARANG','NAGGERANG']],
    ['kode'=>'161','nama'=>'JAPARA','desa'=>['CENGAL','CIKELANG','CITAPEN','DUKUHDALEM','GARATENGAH','JAPARA','KALIMATI','RAJADANU','SINGKUP','WANO']],
    ['kode'=>'170','nama'=>'CILIMUS','desa'=>['BANDORASA KULON','BANDORASA WETAN','BOJONG','CARACAS','CIBEURREUM','CILIMUS','KALIAREN','LINGGAINDAH','LINGGAMEKAR','LINGGARJATI','LINGGASANA','SAMPORA','SETIANEGARA']],
    ['kode'=>'171','nama'=>'CIGANDAMEKAR','desa'=>['SANGKANURIP','SANGKANMULYA','KARANGMUNCANG','KOREAK','JAMBUGEULIS','BUNIGEULIS','BABAKAN JATI','TIMBANG','PANAWUAN','INDRAPATRA','CIBUNTU']],
    ['kode'=>'180','nama'=>'MANDIRANCAN','desa'=>['TRIJAYA','RANDOBAWAGIRANG','SALAKADOMAS','PAKEMBANGAN','RAANDOBAWAILIR','KERATWINANGUN','SEDA','NAGGERANGJAYA','SUKASARI','CIREA','NAGGELA','MANDIRANCANG']],
    ['kode'=>'181','nama'=>'PANCALANG','desa'=>['SILEBU','KAHIYANGAN','PATALAGAN','SUMBAHKELING','DANALAMPAH','SINDANGKEMPENG','PANCALANG','TAJURBUNTUA','RAJAWETAN','MEKARJAYA','TENJOLAYAR','TARIKOLOT','SAREWU']],
    ['kode'=>'190','nama'=>'PASAWAHAN','desa'=>['CIBUNTU','PANIIS','SINGKUP','CIDAHU','PASAWAHAN','PADABEUNGHAR','KADUELA','PADAMATANG','CIWIRU','CIMARA']],
];
@endphp

<div class="kec-accordion" id="kecAccordion">
    @foreach($kecamatan as $i => $kec)
    <div class="kec-item">

        <div class="kec-header" onclick="toggleKec('kec-{{ $i }}', this)">
            <div class="kec-left">
                <span class="kec-kode">{{ $kec['kode'] }}</span>
                <span>{{ $kec['nama'] }}</span>
                <span class="desa-count">({{ count($kec['desa']) }} desa)</span>
            </div>
            <i class="bi bi-chevron-down kec-arrow"></i>
        </div>

        <div class="kec-body" id="kec-{{ $i }}">
            <div class="desa-grid">
                @foreach($kec['desa'] as $desa)
                <div class="desa-item">{{ $desa }}</div>
                @endforeach
            </div>
        </div>

    </div>
    @endforeach
</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">
    Sumber: BPS Kabupaten Kuningan
</p>

@endsection

@push('scripts')
<script>
    function toggleKec(id, header) {
        const body = document.getElementById(id);
        const isOpen = body.classList.contains('show');

        // Tutup semua
        document.querySelectorAll('.kec-body.show').forEach(el => el.classList.remove('show'));
        document.querySelectorAll('.kec-header.open').forEach(el => el.classList.remove('open'));

        // Buka yang diklik (jika belum open)
        if (!isOpen) {
            body.classList.add('show');
            header.classList.add('open');

            // Scroll ke header kecamatan yang dibuka
            setTimeout(() => {
                header.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 100);
        }
    }
</script>
@endpush