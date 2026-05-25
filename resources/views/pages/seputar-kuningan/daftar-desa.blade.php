@extends('layouts.page')
@section('title', 'Daftar Nama Desa')
@section('page-title', 'Daftar Nama Desa dan Klasifikasinya')

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
        border-radius: 10px;
        padding: 10px 12px;
        font-size: 0.8rem;
        color: var(--text);
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        transition: all 0.15s;
    }

    .desa-item:hover {
        border-color: rgba(37,99,235,0.3);
        background: #EFF6FF;
    }

    .desa-info {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .desa-info::before {
        content: '';
        width: 6px;
        height: 6px;
        background: var(--biru-muda);
        border-radius: 50%;
        flex-shrink: 0;
    }
    .desa-kd {
        font-size: 0.65rem;
        font-weight: 690;
        color: #2563EB;
        background: #DBEAFE;
        padding: 2px 5px;
        border-radius: 6px;
        min-width: 25px;
        text-align: center;
        flex-shrink: 0;
    }

    .desa-nama {
        font-weight: 600;
    }

    .desa-badge {
        font-size: 0.65rem;
        font-weight: 700;
        padding: 4px 8px;
        border-radius: 99px;
        white-space: nowrap;
    }

    .badge-desa {
        background: #DCFCE7;
        color: #166534;
    }

    .badge-kota {
        background: #DBEAFE;
        color: #1D4ED8;
    }
    .desa-item:hover {
        border-color: rgba(37,99,235,0.3);
        background: #EFF6FF;
        color: var(--biru);
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
        <div class="val">{{ collect($kecamatan)->sum(fn($kec) => $kec['jumlah_kelurahan']) }}</div>
        <div class="lbl">Kelurahan</div>
    </div>
</div>

<p style="color:var(--muted);font-size:0.85rem;margin-bottom:18px;">
    Klik kecamatan untuk melihat daftar desa. Kabupaten Kuningan terdiri dari
    <strong>32 kecamatan</strong> dengan <strong>361 desa/kelurahan</strong>.
</p>

<div class="kec-accordion" id="kecAccordion">
    @foreach($kecamatan as $i => $kec)
    <div class="kec-item">

        <div class="kec-header" onclick="toggleKec('kec-{{ $i }}', this)">
            <div class="kec-left">
                <span class="kec-kode">{{ $kec['kode'] }}</span>
                <span>{{ $kec['nama'] }}</span>
                <span class="desa-count">
                    (
                    {{ $kec['jumlah_desa'] }} Desa
                    @if($kec['jumlah_kelurahan'] > 0)
                        / {{ $kec['jumlah_kelurahan'] }} Kelurahan
                    @endif
                    )
                </span>
            </div>
            <i class="bi bi-chevron-down kec-arrow"></i>
        </div>

        <div class="kec-body" id="kec-{{ $i }}">
            <div class="desa-grid">
                @foreach($kec['desa'] as $desa)
                <div class="desa-item">
                    <div class="desa-info">
                    <span class="desa-kd">
                        {{ $desa['kd_desa'] }}
                    </span>
                    <span class="desa-nama">
                        {{ $desa['nama'] }}
                    </span>
                </div>
                    <span class="desa-badge 
                        {{ strtolower($desa['kategori']) == 'perkotaan' ? 'badge-kota' : 'badge-desa' }}">
                        {{ $desa['kategori'] }}
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