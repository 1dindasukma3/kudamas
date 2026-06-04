@extends('layouts.page')
@section('title', 'Daftar Nama Desa')
@section('page-title', 'Daftar Nama Desa dan Klasifikasinya')

@push('styles')
<style>
    /* SUMMARY STATS */
    .kec-summary {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
        margin-bottom: 20px;
    }
    .kec-stat {
        background: linear-gradient(135deg, #1B3A6B, #2563EB);
        border-radius: 12px; padding: 14px;
        text-align: center; color: white;
        box-shadow: 0 4px 6px rgba(27,58,107,0.08);
    }
    .kec-stat .val { font-size: 1.5rem; font-weight: 800; line-height: 1.1; }
    .kec-stat .lbl { font-size: 0.65rem; opacity: 0.9; margin-top: 3px; text-transform: uppercase; letter-spacing: 0.5px; }

    /* ALERT INFO BOX */
    .info-note {
        background: #FFFBEB;
        border: 1px solid #FEF3C7;
        border-radius: 10px;
        padding: 10px 14px;
        font-size: 0.78rem;
        color: #78350F;
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 16px;
        line-height: 1.4;
    }
    .info-note i {
        font-size: 0.95rem;
        color: #D97706;
        margin-top: 2px;
    }
    .badge-label-oranye {
        background: #FEF3C7;
        color: #D97706;
        padding: 1px 5px;
        border-radius: 4px;
        font-weight: 700;
        font-size: 0.68rem;
    }
    .badge-label-biru {
        background: #DBEAFE;
        color: #2563EB;
        padding: 1px 5px;
        border-radius: 4px;
        font-weight: 700;
        font-size: 0.68rem;
    }

    /* SEARCH INPUT STYLE */
    .search-box-wrap {
        margin-bottom: 20px;
    }
    .search-box-wrap .input-group {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        border: 1px solid #CBD5E1;
    }
    .search-box-wrap .form-control {
        border: none;
        font-size: 0.85rem;
        padding: 10px 14px;
    }
    .search-box-wrap .form-control:focus {
        box-shadow: none;
    }
    .search-box-wrap .input-group-text {
        background: white;
        border: none;
        color: #64748B;
        padding-left: 14px;
    }

    /* ACCORDION KECAMATAN */
    .kec-accordion { display: flex; flex-direction: column; gap: 8px; }
    .kec-item { border-radius: 12px; overflow: hidden; border: 1px solid var(--border); background: white; }

    .kec-header {
        background: #1B3A6B;
        color: white;
        padding: 12px 16px;
        font-weight: 700;
        font-size: 0.83rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        user-select: none;
        transition: background 0.18s;
    }
    .kec-header:hover { background: #1e40af; }
    .kec-header.open { background: #1e3a8a; }
    .kec-header .kec-left { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; }

    .kec-kode {
        background: rgba(255,255,255,0.18);
        font-size: 0.72rem; font-weight: 800;
        padding: 2px 6px; border-radius: 4px;
    }

    .kec-arrow {
        font-size: 0.75rem;
        transition: transform 0.22s;
    }
    .kec-header.open .kec-arrow { transform: rotate(180deg); }

    .kec-body {
        display: none;
        background: #F8FAFC;
        padding: 12px;
    }
    .kec-body.show { display: block; }

    /* FILIRAN BARIS ATAU DESA FLOW PERTAMA: TOP-TO-BOTTOM (MAKSIMAL 8 BARIS) */
    @media (min-width: 768px) {
        .desa-grid {
            display: grid;
            grid-auto-flow: column; /* Mengalir dari atas ke bawah sebelum melipat ke kanan */
            grid-template-rows: repeat(8, auto); /* Membatasi tinggi maksimal 8 item/baris */
            gap: 10px;
        }
    }

    @media (max-width: 767px) {
        .desa-grid {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
    }

    .desa-item {
        background: white;
        border: 1px solid var(--border);
        border-radius: 8px;
        padding: 8px 10px;
        font-size: 0.78rem;
        color: var(--text);
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 8px;
        transition: all 0.15s;
    }

    .desa-item:hover {
        border-color: rgba(37,99,235,0.25);
        background: #EFF6FF;
    }

    .desa-info {
        display: flex;
        align-items: center;
        gap: 6px;
        min-width: 0;
    }

    /* KODE KELURAHAN (ORANYE) */
    .desa-kd.kd-kelurahan {
        font-size: 0.65rem;
        font-weight: 700;
        color: #D97706;
        background: #FEF3C7;
        border: 1px solid #FFE4E6;
        padding: 2px 5px;
        border-radius: 4px;
        min-width: 25px;
        text-align: center;
        flex-shrink: 0;
    }

    /* KODE DESA (BIRU) */
    .desa-kd.kd-desa {
        font-size: 0.65rem;
        font-weight: 700;
        color: #2563EB;
        background: #DBEAFE;
        padding: 2px 5px;
        border-radius: 4px;
        min-width: 25px;
        text-align: center;
        flex-shrink: 0;
    }

    .desa-nama {
        font-weight: 600;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        text-transform: uppercase;
    }

    /* KATEGORI BADGE */
    .desa-badge {
        font-size: 0.62rem;
        font-weight: 700;
        padding: 2px 6px;
        border-radius: 4px;
        white-space: nowrap;
    }
    .badge-desa { background: #DCFCE7; color: #166534; }
    .badge-kota { background: #DBEAFE; color: #1D4ED8; }

    .desa-count {
        font-size: 0.68rem;
        color: rgba(255,255,255,0.7);
    }

    @media (max-width: 576px) {
        .kec-summary { gap: 8px; }
        .kec-stat .val { font-size: 1.2rem; }
    }
</style>
@endpush

@section('main-content')

{{-- STATS --}}
<div class="kec-summary">
    <div class="kec-stat">
        <div class="val">{{ count($kecamatan) }}</div>
        <div class="lbl">Kecamatan</div>
    </div>
    <div class="kec-stat">
        <div class="val">
            {{ collect($kecamatan)->sum(fn($kec) => count($kec['desa'])) }}
        </div>
        <div class="lbl">Desa / Kelurahan</div>
    </div>
    <div class="kec-stat">
        <div class="val">
            {{ collect($kecamatan)->sum(fn($kec) => collect($kec['desa'])->where('status', 'kelurahan')->count()) }}
        </div>
        <div class="lbl">Kelurahan</div>
    </div>
</div>

{{-- CATATAN WARNA BARU DI ATAS SEARCH BAR --}}
<div class="info-note">
    <i class="bi bi-info-circle-fill"></i>
    <span>
        Catatan: Kode wilayah yang berwarna <span class="badge-label-oranye">Orange</span> adalah Kelurahan.
    </span>
</div>

{{-- KOTAK PENCARIAN REAL-TIME --}}
<div class="search-box-wrap">
    <div class="input-group">
        <span class="input-group-text"><i class="bi bi-search"></i></span>
        <input type="text" id="kecSearch" class="form-control" placeholder="Cari nama kecamatan, desa, kelurahan, atau kode wilayah..." onkeyup="filterData()">
    </div>
</div>

<p style="color:var(--muted);font-size:0.8rem;margin-bottom:12px;">
    Gunakan bilah pencarian jika ingin mencari cepat, atau klik nama kecamatan untuk memperluas daftar desa di bawah ini:
</p>

{{-- ACCORDION KECAMATAN --}}
<div class="kec-accordion" id="kecAccordion">
    @foreach($kecamatan as $i => $kec)
    <div class="kec-item" id="kec-item-{{ $i }}">

        {{-- Set Default Terbuka hanya untuk item pertama --}}
        <div class="kec-header {{ $i == 0 ? 'open' : '' }}" onclick="toggleKec('kec-{{ $i }}', this)">
            <div class="kec-left">
                <span class="kec-kode">{{ $kec['kode'] }}</span>
                <span class="kec-nama" style="font-weight: 700;">{{ $kec['nama'] }}</span>
                <span class="desa-count">
                    ( {{ count($kec['desa']) }} Wilayah )
                </span>
            </div>
            <i class="bi bi-chevron-down kec-arrow"></i>
        </div>

        <div class="kec-body {{ $i == 0 ? 'show' : '' }}" id="kec-{{ $i }}">
            <div class="desa-grid">
                @foreach($kec['desa'] as $desa)
                @php
                    $isKelurahan = strtolower($desa['status'] ?? $desa['jenis'] ?? '') == 'kelurahan';
                @endphp
                <div class="desa-item" data-nama="{{ strtolower($desa['nama']) }}" data-kd="{{ $desa['kd_desa'] }}">
                    <div class="desa-info">
                        <span class="desa-kd {{ $isKelurahan ? 'kd-kelurahan' : 'kd-desa' }}">
                            {{ $desa['kd_desa'] }}
                        </span>
                        <span class="desa-nama">
                            {{ $desa['nama'] }}
                        </span>
                    </div>
                    <span class="desa-badge {{ strtolower($desa['kategori'] ?? '') == 'perkotaan' ? 'badge-kota' : 'badge-desa' }}">
                        {{ $desa['kategori'] ?? 'Perdesaan' }}
                    </span>
                </div>
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
    // FUNGSI TOGGLE ACCORDION
    function toggleKec(id, header) {
        const body = document.getElementById(id);
        const isOpen = body.classList.contains('show');

        // Tutup semua kecamatan lain yang sedang terbuka
        document.querySelectorAll('.kec-body.show').forEach(el => el.classList.remove('show'));
        document.querySelectorAll('.kec-header.open').forEach(el => el.classList.remove('open'));

        // Buka yang sedang diklik jika sebelumnya tertutup
        if (!isOpen) {
            body.classList.add('show');
            header.classList.add('open');
            
            // Scroll otomatis yang ramah pengguna
            setTimeout(() => {
                header.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 150);
        }
    }

    // FUNGSI PENCARIAN REAL-TIME
    function filterData() {
        const query = document.getElementById('kecSearch').value.toLowerCase().trim();
        const kecItems = document.querySelectorAll('.kec-item');

        kecItems.forEach(item => {
            const header = item.querySelector('.kec-header');
            const kecNama = header.querySelector('.kec-nama').textContent.toLowerCase();
            const kecKode = header.querySelector('.kec-kode').textContent.toLowerCase();
            const body = item.querySelector('.kec-body');
            const desaItems = body.querySelectorAll('.desa-item');
            
            let matchCount = 0;

            desaItems.forEach(desa => {
                const desaNama = desa.getAttribute('data-nama');
                const desaKd = desa.getAttribute('data-kd');

                // Cocok jika nama desa kata kunci ada di nama desa atau kode desanya
                if (desaNama.includes(query) || desaKd.includes(query)) {
                    desa.style.display = 'flex';
                    matchCount++;
                } else {
                    desa.style.display = 'none';
                }
            });

            const isKecMatch = kecNama.includes(query) || kecKode.includes(query);

            if (query === '') {
                // Saat query kosong, kembalikan ke kondisi asali (hanya baris pertama yang terbuka)
                item.style.display = 'block';
                body.classList.remove('show');
                header.classList.remove('open');
                
                if (item.id === 'kec-item-0') {
                    body.classList.add('show');
                    header.classList.add('open');
                }
            } else {
                if (isKecMatch || matchCount > 0) {
                    item.style.display = 'block';
                    // Jika kecamatan cocok penuh, tampilkan semua desa didalamnya
                    if (isKecMatch) {
                        desaItems.forEach(desa => desa.style.display = 'flex');
                    }
                    body.classList.add('show');
                    header.classList.add('open');
                } else {
                    item.style.display = 'none';
                }
            }
        });
    }
</script>
@endpush