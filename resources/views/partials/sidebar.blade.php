<aside class="sidebar" id="sidebar">

    <nav class="sidebar-nav" style="padding-top: 12px;">
        <div class="nav-label">Menu</div>

        <a href="{{ route('home') }}" class="nav-link-1 {{ request()->routeIs('home') ? 'active' : '' }}">
            <i class="bi bi-grid-fill icon"></i> Menu Utama
        </a>

        <a href="{{ route('beranda') }}" class="nav-link-1 {{ request()->routeIs('beranda') ? 'active' : '' }}">
            <i class="bi bi-house-fill icon"></i> Beranda
        </a>

        <div class="nav-link-1 {{ request()->routeIs('indikator*','kependudukan*','kemiskinan*','pdrb*','gini-ratio*','ketenagakerjaan*','pm*','indeks*') ? 'open' : '' }}"
             onclick="toggleNav('indikator', this)">
            <i class="bi bi-bar-chart-fill icon"></i>
            <span>Indikator Statistik</span>
            <i class="bi bi-chevron-right arrow"></i>
        </div>
        <div class="nav-sub {{ request()->routeIs('indikator*','kependudukan*','kemiskinan*','pdrb*','gini-ratio*','ketenagakerjaan*','pm*','indeks*') ? 'show' : '' }}" id="sub-indikator">

            <div class="nav-link-2 {{ request()->routeIs('kependudukan*') ? 'open' : '' }}" onclick="toggleNav('kependudukan', this)">
                <span>Kependudukan</span><i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub {{ request()->routeIs('kependudukan*') ? 'show' : '' }}" id="sub-kependudukan">
                <a href="{{ route('kependudukan.konsep') }}" class="nav-link-3 {{ request()->routeIs('kependudukan.konsep') ? 'active' : '' }}">Konsep</a>
                <a href="{{ route('kependudukan.jenis-kelamin') }}" class="nav-link-3 {{ request()->routeIs('kependudukan.jenis-kelamin') ? 'active' : '' }}">Menurut Jenis Kelamin</a>
                <a href="{{ route('kependudukan.kelompok-umur') }}" class="nav-link-3 {{ request()->routeIs('kependudukan.kelompok-umur') ? 'active' : '' }}">Menurut Kelompok Umur</a>
            </div>

            <div class="nav-link-2 {{ request()->routeIs('kemiskinan*') ? 'open' : '' }}" onclick="toggleNav('kemiskinan', this)">
                <span>Kemiskinan</span><i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub {{ request()->routeIs('kemiskinan*') ? 'show' : '' }}" id="sub-kemiskinan">
                <a href="{{ route('kemiskinan.konsep') }}" class="nav-link-3">Konsep</a>
                <a href="{{ route('kemiskinan.garis') }}" class="nav-link-3">Garis Kemiskinan</a>
                <a href="{{ route('kemiskinan.jumlah') }}" class="nav-link-3">Jumlah Penduduk Miskin</a>
                <a href="{{ route('kemiskinan.persentase') }}" class="nav-link-3">Persentase Penduduk Miskin</a>
                <a href="{{ route('kemiskinan.kedalaman') }}" class="nav-link-3">Indeks Kedalaman Miskin</a>
                <a href="{{ route('kemiskinan.keparahan') }}" class="nav-link-3">Indeks Keparahan Kemiskinan</a>
            </div>

            <div class="nav-link-2 {{ request()->routeIs('pdrb*') ? 'open' : '' }}" onclick="toggleNav('pdrb', this)">
                <span>PDRB</span><i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub {{ request()->routeIs('pdrb*') ? 'show' : '' }}" id="sub-pdrb">
                <a href="{{ route('pdrb.konsep') }}" class="nav-link-3">Konsep</a>
                <a href="{{ route('pdrb.perkapita') }}" class="nav-link-3">PDRB Perkapita & Laju</a>
            </div>

            <div class="nav-link-2 {{ request()->routeIs('gini-ratio*') ? 'open' : '' }}" onclick="toggleNav('gini', this)">
                <span>Gini Ratio</span><i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub {{ request()->routeIs('gini-ratio*') ? 'show' : '' }}" id="sub-gini">
                <a href="{{ route('gini-ratio.konsep') }}" class="nav-link-3">Konsep</a>
                <a href="{{ route('gini-ratio.data') }}" class="nav-link-3">Gini Ratio</a>
            </div>

            <div class="nav-link-2 {{ request()->routeIs('ketenagakerjaan*') ? 'open' : '' }}" onclick="toggleNav('tenaga', this)">
                <span>Ketenagakerjaan</span><i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub {{ request()->routeIs('ketenagakerjaan*') ? 'show' : '' }}" id="sub-tenaga">
                <a href="{{ route('ketenagakerjaan.konsep') }}" class="nav-link-3">Konsep</a>
                <a href="{{ route('ketenagakerjaan.data') }}" class="nav-link-3">Ketenagakerjaan</a>
                <a href="{{ route('ketenagakerjaan.tpt-tpak') }}" class="nav-link-3">TPT dan TPAK</a>
            </div>

            <div class="nav-link-2 {{ request()->routeIs('pm*') ? 'open' : '' }}" onclick="toggleNav('pm', this)">
                <span>Pembangunan Manusia</span><i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub {{ request()->routeIs('pm*') ? 'show' : '' }}" id="sub-pm">
                <a href="{{ route('pm.konsep') }}" class="nav-link-3">Konsep</a>
                <a href="{{ route('pm.uhh') }}" class="nav-link-3">UHH</a>
                <a href="{{ route('pm.eys') }}" class="nav-link-3">EYS</a>
                <a href="{{ route('pm.mys') }}" class="nav-link-3">MYS</a>
                <a href="{{ route('pm.ppp') }}" class="nav-link-3">PPP</a>
                <a href="{{ route('pm.ipm') }}" class="nav-link-3">IPM</a>
                <a href="{{ route('pm.pertumbuhan') }}" class="nav-link-3">Pertumbuhan IPM</a>
            </div>

            <div class="nav-link-2 {{ request()->routeIs('indeks*') ? 'open' : '' }}" onclick="toggleNav('indeks', this)">
                <span>Indeks-Indeks</span><i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub {{ request()->routeIs('indeks*') ? 'show' : '' }}" id="sub-indeks">
                <a href="{{ route('indeks.konsep') }}" class="nav-link-3">Konsep</a>
                <a href="{{ route('indeks.penyusunan') }}" class="nav-link-3">Indeks Penyusunan IPM</a>
                <a href="{{ route('indeks.gender') }}" class="nav-link-3">Indeks Gender</a>
            </div>

        </div>

        <a href="{{ route('seputar-kuningan') }}" class="nav-link-1 {{ request()->routeIs('seputar-kuningan') ? 'active' : '' }}">
            <i class="bi bi-file-text-fill icon"></i> Seputar Kuningan
        </a>

        <a href="{{ route('pariwisata') }}" class="nav-link-1 {{ request()->routeIs('pariwisata') ? 'active' : '' }}">
            <i class="bi bi-image-fill icon"></i> Pariwisata
        </a>

        <a href="{{ route('media-sosial') }}" class="nav-link-1 {{ request()->routeIs('media-sosial') ? 'active' : '' }}">
            <i class="bi bi-share-fill icon"></i> Media Sosial BPS
        </a>

    </nav>

    <div class="sidebar-footer">
        <div class="footer-title">Kontak & Info</div>
        <div class="contact-item"><i class="bi bi-geo-alt-fill"></i><span>Jl. Siliwangi No. 2, Kuningan, Jawa Barat 45511</span></div>
        <div class="contact-item"><i class="bi bi-telephone-fill"></i><a href="tel:+62232871014">(0232) 871014</a></div>
        <div class="contact-item"><i class="bi bi-envelope-fill"></i><a href="mailto:bps3208@bps.go.id">bps3208@bps.go.id</a></div>
        <div class="contact-item"><i class="bi bi-globe"></i><a href="https://kuningankab.bps.go.id" target="_blank">kuningankab.bps.go.id</a></div>
        <div class="copyright">© {{ date('Y') }} BPS Kabupaten Kuningan</div>
    </div>

</aside>