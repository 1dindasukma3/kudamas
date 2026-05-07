<aside class="sidebar" id="sidebar">

    <nav class="sidebar-nav" style="padding-top: 12px;">
        <div class="nav-label">Menu</div>

        <a href="{{ route('home') }}" class="nav-link-1 {{ request()->routeIs('home') ? 'active' : '' }}">
            <i class="bi bi-grid-fill icon"></i> Menu Utama
        </a>

        <a href="{{ route('beranda') }}" class="nav-link-1 {{ request()->routeIs('beranda') ? 'active' : '' }}">
            <i class="bi bi-house-fill icon"></i> Beranda
        </a>

        {{-- INDIKATOR STATISTIK --}}
        <div class="nav-link-1 {{ request()->routeIs('indikator*','kependudukan*','kemiskinan*','pdrb*','gini-ratio*','ketenagakerjaan*','pm*','indeks*') ? 'open' : '' }}"
             onclick="toggleNav('indikator', this)">
            <i class="bi bi-bar-chart-fill icon"></i>
            <span>Indikator Statistik</span>
            <i class="bi bi-chevron-right arrow"></i>
        </div>
        <div class="nav-sub {{ request()->routeIs('indikator*','kependudukan*','kemiskinan*','pdrb*','gini-ratio*','ketenagakerjaan*','pm*','indeks*') ? 'show' : '' }}"
             id="sub-indikator">

            <div class="nav-link-2 {{ request()->routeIs('kependudukan*') ? 'open' : '' }}"
                 onclick="toggleNav('kependudukan', this)">
                <span>Kependudukan</span><i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub {{ request()->routeIs('kependudukan*') ? 'show' : '' }}" id="sub-kependudukan">
                <a href="{{ route('kependudukan.konsep') }}" class="nav-link-3 {{ request()->routeIs('kependudukan.konsep') ? 'active' : '' }}">Konsep</a>
                <a href="{{ route('kependudukan.jenis-kelamin') }}" class="nav-link-3 {{ request()->routeIs('kependudukan.jenis-kelamin') ? 'active' : '' }}">Menurut Jenis Kelamin</a>
                <a href="{{ route('kependudukan.kelompok-umur') }}" class="nav-link-3 {{ request()->routeIs('kependudukan.kelompok-umur') ? 'active' : '' }}">Menurut Kelompok Umur</a>
            </div>

            <div class="nav-link-2 {{ request()->routeIs('kemiskinan*') ? 'open' : '' }}"
                 onclick="toggleNav('kemiskinan', this)">
                <span>Kemiskinan</span><i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub {{ request()->routeIs('kemiskinan*') ? 'show' : '' }}" id="sub-kemiskinan">
                <a href="{{ route('kemiskinan.konsep') }}" class="nav-link-3 {{ request()->routeIs('kemiskinan.konsep') ? 'active' : '' }}">Konsep</a>
                <a href="{{ route('kemiskinan.garis') }}" class="nav-link-3 {{ request()->routeIs('kemiskinan.garis') ? 'active' : '' }}">Garis Kemiskinan</a>
                <a href="{{ route('kemiskinan.jumlah') }}" class="nav-link-3 {{ request()->routeIs('kemiskinan.jumlah') ? 'active' : '' }}">Jumlah Penduduk Miskin</a>
                <a href="{{ route('kemiskinan.persentase') }}" class="nav-link-3 {{ request()->routeIs('kemiskinan.persentase') ? 'active' : '' }}">Persentase Penduduk Miskin</a>
                <a href="{{ route('kemiskinan.kedalaman') }}" class="nav-link-3 {{ request()->routeIs('kemiskinan.kedalaman') ? 'active' : '' }}">Indeks Kedalaman Miskin</a>
                <a href="{{ route('kemiskinan.keparahan') }}" class="nav-link-3 {{ request()->routeIs('kemiskinan.keparahan') ? 'active' : '' }}">Indeks Keparahan Kemiskinan</a>
            </div>

            <div class="nav-link-2 {{ request()->routeIs('pdrb*') ? 'open' : '' }}"
                 onclick="toggleNav('pdrb', this)">
                <span>PDRB</span><i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub {{ request()->routeIs('pdrb*') ? 'show' : '' }}" id="sub-pdrb">
                <a href="{{ route('pdrb.konsep') }}" class="nav-link-3 {{ request()->routeIs('pdrb.konsep') ? 'active' : '' }}">Konsep</a>
                <a href="{{ route('pdrb.perkapita') }}" class="nav-link-3 {{ request()->routeIs('pdrb.perkapita') ? 'active' : '' }}">PDRB Perkapita & Laju</a>
            </div>

            <div class="nav-link-2 {{ request()->routeIs('gini-ratio*') ? 'open' : '' }}"
                 onclick="toggleNav('gini', this)">
                <span>Gini Ratio</span><i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub {{ request()->routeIs('gini-ratio*') ? 'show' : '' }}" id="sub-gini">
                <a href="{{ route('gini-ratio.konsep') }}" class="nav-link-3 {{ request()->routeIs('gini-ratio.konsep') ? 'active' : '' }}">Konsep</a>
                <a href="{{ route('gini-ratio.data') }}" class="nav-link-3 {{ request()->routeIs('gini-ratio.data') ? 'active' : '' }}">Gini Ratio</a>
            </div>

            <div class="nav-link-2 {{ request()->routeIs('ketenagakerjaan*') ? 'open' : '' }}"
                 onclick="toggleNav('tenaga', this)">
                <span>Ketenagakerjaan</span><i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub {{ request()->routeIs('ketenagakerjaan*') ? 'show' : '' }}" id="sub-tenaga">
                <a href="{{ route('ketenagakerjaan.konsep') }}" class="nav-link-3 {{ request()->routeIs('ketenagakerjaan.konsep') ? 'active' : '' }}">Konsep</a>
                <a href="{{ route('ketenagakerjaan.data') }}" class="nav-link-3 {{ request()->routeIs('ketenagakerjaan.data') ? 'active' : '' }}">Ketenagakerjaan</a>
                <a href="{{ route('ketenagakerjaan.tpt-tpak') }}" class="nav-link-3 {{ request()->routeIs('ketenagakerjaan.tpt-tpak') ? 'active' : '' }}">TPT dan TPAK</a>
            </div>

            <div class="nav-link-2 {{ request()->routeIs('pm*') ? 'open' : '' }}"
                 onclick="toggleNav('pm', this)">
                <span>Pembangunan Manusia</span><i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub {{ request()->routeIs('pm*') ? 'show' : '' }}" id="sub-pm">
                <a href="{{ route('pm.konsep') }}" class="nav-link-3 {{ request()->routeIs('pm.konsep') ? 'active' : '' }}">Konsep</a>
                <a href="{{ route('pm.uhh') }}" class="nav-link-3 {{ request()->routeIs('pm.uhh') ? 'active' : '' }}">UHH</a>
                <a href="{{ route('pm.eys') }}" class="nav-link-3 {{ request()->routeIs('pm.eys') ? 'active' : '' }}">EYS</a>
                <a href="{{ route('pm.mys') }}" class="nav-link-3 {{ request()->routeIs('pm.mys') ? 'active' : '' }}">MYS</a>
                <a href="{{ route('pm.ppp') }}" class="nav-link-3 {{ request()->routeIs('pm.ppp') ? 'active' : '' }}">PPP</a>
                <a href="{{ route('pm.ipm') }}" class="nav-link-3 {{ request()->routeIs('pm.ipm') ? 'active' : '' }}">IPM</a>
                <a href="{{ route('pm.pertumbuhan') }}" class="nav-link-3 {{ request()->routeIs('pm.pertumbuhan') ? 'active' : '' }}">Pertumbuhan IPM</a>
            </div>

            <div class="nav-link-2 {{ request()->routeIs('indeks*') ? 'open' : '' }}"
                 onclick="toggleNav('indeks', this)">
                <span>Indeks-Indeks</span><i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub {{ request()->routeIs('indeks*') ? 'show' : '' }}" id="sub-indeks">
                <a href="{{ route('indeks.konsep') }}" class="nav-link-3 {{ request()->routeIs('indeks.konsep') ? 'active' : '' }}">Konsep</a>
                <a href="{{ route('indeks.penyusunan') }}" class="nav-link-3 {{ request()->routeIs('indeks.penyusunan') ? 'active' : '' }}">Indeks Penyusunan IPM</a>
                <a href="{{ route('indeks.gender') }}" class="nav-link-3 {{ request()->routeIs('indeks.gender') ? 'active' : '' }}">Indeks Gender</a>
            </div>

        </div>

        {{-- SEPUTAR KUNINGAN --}}
        <div class="nav-link-1 {{ request()->routeIs('seputar-kuningan*','sk.*') ? 'open' : '' }}"
             onclick="toggleNav('seputar', this)">
            <i class="bi bi-file-text-fill icon"></i>
            <span>Seputar Kuningan</span>
            <i class="bi bi-chevron-right arrow"></i>
        </div>
        <div class="nav-sub {{ request()->routeIs('seputar-kuningan*','sk.*') ? 'show' : '' }}"
             id="sub-seputar">
            <a href="{{ route('seputar-kuningan') }}" class="nav-link-2 {{ request()->routeIs('seputar-kuningan') ? 'active' : '' }}">
                <i class="bi bi-grid-fill" style="font-size:0.7rem;"></i>
                <span>Semua Menu</span>
            </a>
            <a href="{{ route('sk.daftar-desa') }}" class="nav-link-2 {{ request()->routeIs('sk.daftar-desa') ? 'active' : '' }}">
                <span>Daftar Nama Desa</span>
            </a>
            <a href="{{ route('sk.hari-jadi') }}" class="nav-link-2 {{ request()->routeIs('sk.hari-jadi') ? 'active' : '' }}">
                <span>Hari Jadi / Sejarah</span>
            </a>
            <a href="{{ route('sk.pemerintahan') }}" class="nav-link-2 {{ request()->routeIs('sk.pemerintahan') ? 'active' : '' }}">
                <span>Pemerintahan</span>
            </a>
            <a href="{{ route('sk.geografis') }}" class="nav-link-2 {{ request()->routeIs('sk.geografis') ? 'active' : '' }}">
                <span>Kondisi Geografis</span>
            </a>
            <a href="{{ route('sk.bupati') }}" class="nav-link-2 {{ request()->routeIs('sk.bupati') ? 'active' : '' }}">
                <span>Bupati Kab. Kuningan</span>
            </a>
            <a href="{{ route('sk.rumah-sakit') }}" class="nav-link-2 {{ request()->routeIs('sk.rumah-sakit') ? 'active' : '' }}">
                <span>Rumah Sakit</span>
            </a>
            <a href="{{ route('sk.pendidikan') }}" class="nav-link-2 {{ request()->routeIs('sk.pendidikan') ? 'active' : '' }}">
                <span>Informasi Pendidikan</span>
            </a>
        </div>

        {{-- PARIWISATA --}}
        <div class="nav-link-1 {{ request()->routeIs('pariwisata*','pw.*') ? 'open' : '' }}"
             onclick="toggleNav('pariwisata', this)">
            <i class="bi bi-image-fill icon"></i>
            <span>Pariwisata</span>
            <i class="bi bi-chevron-right arrow"></i>
        </div>
        <div class="nav-sub {{ request()->routeIs('pariwisata*','pw.*') ? 'show' : '' }}"
             id="sub-pariwisata">
            <a href="{{ route('pariwisata') }}" class="nav-link-2 {{ request()->routeIs('pariwisata') ? 'active' : '' }}">
                <i class="bi bi-grid-fill" style="font-size:0.7rem;"></i>
                <span>Semua Menu</span>
            </a>
            <a href="{{ route('pw.alam') }}" class="nav-link-2 {{ request()->routeIs('pw.alam') ? 'active' : '' }}">
                <span>Wisata Alam</span>
            </a>
            <a href="{{ route('pw.seni-budaya') }}" class="nav-link-2 {{ request()->routeIs('pw.seni-budaya') ? 'active' : '' }}">
                <span>Seni Budaya</span>
            </a>
            <a href="{{ route('pw.buatan') }}" class="nav-link-2 {{ request()->routeIs('pw.buatan') ? 'active' : '' }}">
                <span>Wisata Buatan</span>
            </a>
            <a href="{{ route('pw.sejarah') }}" class="nav-link-2 {{ request()->routeIs('pw.sejarah') ? 'active' : '' }}">
                <span>Wisata Sejarah & Religi</span>
            </a>
            <a href="{{ route('pw.kuliner') }}" class="nav-link-2 {{ request()->routeIs('pw.kuliner') ? 'active' : '' }}">
                <span>Wisata Kuliner</span>
            </a>
            <a href="{{ route('pw.hotel') }}" class="nav-link-2 {{ request()->routeIs('pw.hotel') ? 'active' : '' }}">
                <span>Hotel & Penginapan</span>
            </a>
        </div>

        {{-- LINK SEPUTAR KUNINGAN --}}
        <div class="nav-link-1 {{ request()->routeIs('link-seputar') ? 'open' : '' }}"
             onclick="toggleNav('link-seputar', this)">
            <i class="bi bi-box-arrow-up-right icon"></i>
            <span>Link Seputar Kuningan</span>
            <i class="bi bi-chevron-right arrow"></i>
        </div>
        <div class="nav-sub {{ request()->routeIs('link-seputar') ? 'show' : '' }}"
             id="sub-link-seputar">

            <a href="{{ route('link-seputar') }}" class="nav-link-2 {{ request()->routeIs('link-seputar') ? 'active' : '' }}">
                <i class="bi bi-grid-fill" style="font-size:0.7rem;"></i>
                <span>Semua Link</span>
            </a>

            <a href="https://kuningankab.go.id" target="_blank" class="nav-link-2">
                <span>Pemda Kab. Kuningan</span>
                <i class="bi bi-box-arrow-up-right" style="margin-left:auto;font-size:0.6rem;opacity:0.5;"></i>
            </a>
            <a href="https://polreskubu.com" target="_blank" class="nav-link-2">
                <span>Polres Kuningan</span>
                <i class="bi bi-box-arrow-up-right" style="margin-left:auto;font-size:0.6rem;opacity:0.5;"></i>
            </a>
            <a href="https://diskominfo.kuningankab.go.id" target="_blank" class="nav-link-2">
                <span>Diskominfo</span>
                <i class="bi bi-box-arrow-up-right" style="margin-left:auto;font-size:0.6rem;opacity:0.5;"></i>
            </a>
            <a href="https://pn-kuningan.go.id" target="_blank" class="nav-link-2">
                <span>Pengadilan Negeri</span>
                <i class="bi bi-box-arrow-up-right" style="margin-left:auto;font-size:0.6rem;opacity:0.5;"></i>
            </a>
            <a href="https://pa-kuningan.go.id" target="_blank" class="nav-link-2">
                <span>Pengadilan Agama</span>
                <i class="bi bi-box-arrow-up-right" style="margin-left:auto;font-size:0.6rem;opacity:0.5;"></i>
            </a>
            <a href="https://disdukcapil.kuningankab.go.id" target="_blank" class="nav-link-2">
                <span>Disdukcapil</span>
                <i class="bi bi-box-arrow-up-right" style="margin-left:auto;font-size:0.6rem;opacity:0.5;"></i>
            </a>
            <a href="https://disporapar.kuningankab.go.id" target="_blank" class="nav-link-2">
                <span>Disporapar</span>
                <i class="bi bi-box-arrow-up-right" style="margin-left:auto;font-size:0.6rem;opacity:0.5;"></i>
            </a>

        </div>

        {{-- MEDIA SOSIAL BPS --}}
        <div class="nav-link-1 {{ request()->routeIs('media-sosial') ? 'open' : '' }}"
             onclick="toggleNav('sosmed', this)">
            <i class="bi bi-share-fill icon"></i>
            <span>Media Sosial BPS</span>
            <i class="bi bi-chevron-right arrow"></i>
        </div>
        <div class="nav-sub {{ request()->routeIs('media-sosial') ? 'show' : '' }}"
             id="sub-sosmed">

            <a href="{{ route('media-sosial') }}" class="nav-link-2 {{ request()->routeIs('media-sosial') ? 'active' : '' }}">
                <i class="bi bi-grid-fill" style="font-size:0.7rem;"></i>
                <span>Semua Media Sosial</span>
            </a>

            {{-- BPS RI --}}
            <div class="nav-link-2" onclick="toggleNav('sosmed-ri', this)">
                <span>BPS Republik Indonesia</span>
                <i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub" id="sub-sosmed-ri">
                <a href="https://bps.go.id" target="_blank" class="nav-link-3">
                    <i class="bi bi-globe" style="margin-right:4px;"></i> Website
                </a>
                <a href="https://facebook.com/bpsgoid" target="_blank" class="nav-link-3">
                    <i class="bi bi-facebook" style="margin-right:4px;color:#1877F2;"></i> Facebook
                </a>
                <a href="https://twitter.com/bpsgoid" target="_blank" class="nav-link-3">
                    <i class="bi bi-twitter-x" style="margin-right:4px;"></i> Twitter/X
                </a>
                <a href="https://instagram.com/bpsgoid" target="_blank" class="nav-link-3">
                    <i class="bi bi-instagram" style="margin-right:4px;color:#E1306C;"></i> Instagram
                </a>
                <a href="https://youtube.com/@bpsgoid" target="_blank" class="nav-link-3">
                    <i class="bi bi-youtube" style="margin-right:4px;color:#FF0000;"></i> YouTube
                </a>
            </div>

            {{-- BPS JABAR --}}
            <div class="nav-link-2" onclick="toggleNav('sosmed-jabar', this)">
                <span>BPS Prov. Jawa Barat</span>
                <i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub" id="sub-sosmed-jabar">
                <a href="https://jabar.bps.go.id" target="_blank" class="nav-link-3">
                    <i class="bi bi-globe" style="margin-right:4px;"></i> Website
                </a>
                <a href="https://facebook.com/bpsjabar" target="_blank" class="nav-link-3">
                    <i class="bi bi-facebook" style="margin-right:4px;color:#1877F2;"></i> Facebook
                </a>
                <a href="https://twitter.com/bpsjabar" target="_blank" class="nav-link-3">
                    <i class="bi bi-twitter-x" style="margin-right:4px;"></i> Twitter/X
                </a>
                <a href="https://instagram.com/bpsjabar" target="_blank" class="nav-link-3">
                    <i class="bi bi-instagram" style="margin-right:4px;color:#E1306C;"></i> Instagram
                </a>
                <a href="https://youtube.com/@bpsjabar" target="_blank" class="nav-link-3">
                    <i class="bi bi-youtube" style="margin-right:4px;color:#FF0000;"></i> YouTube
                </a>
            </div>

            {{-- BPS KUNINGAN --}}
            <div class="nav-link-2" onclick="toggleNav('sosmed-kuningan', this)">
                <span>BPS Kab. Kuningan</span>
                <i class="bi bi-chevron-right arrow"></i>
            </div>
            <div class="nav-subsub" id="sub-sosmed-kuningan">
                <a href="https://kuningankab.bps.go.id" target="_blank" class="nav-link-3">
                    <i class="bi bi-globe" style="margin-right:4px;"></i> Website
                </a>
                <a href="https://facebook.com/bps3208" target="_blank" class="nav-link-3">
                    <i class="bi bi-facebook" style="margin-right:4px;color:#1877F2;"></i> Facebook
                </a>
                <a href="https://twitter.com/bps3208" target="_blank" class="nav-link-3">
                    <i class="bi bi-twitter-x" style="margin-right:4px;"></i> Twitter/X
                </a>
                <a href="https://instagram.com/bps3208" target="_blank" class="nav-link-3">
                    <i class="bi bi-instagram" style="margin-right:4px;color:#E1306C;"></i> Instagram
                </a>
                <a href="https://youtube.com/@bps3208" target="_blank" class="nav-link-3">
                    <i class="bi bi-youtube" style="margin-right:4px;color:#FF0000;"></i> YouTube
                </a>
            </div>

        </div>

    </nav>

    <div class="sidebar-footer">
        <div class="footer-title">Kontak & Info</div>
        <div class="contact-item">
            <i class="bi bi-geo-alt-fill"></i>
            <span>Jl. Siliwangi No. 2, Kuningan, Jawa Barat 45511</span>
        </div>
        <div class="contact-item">
            <i class="bi bi-telephone-fill"></i>
            <a href="tel:+62232871014">(0232) 871014</a>
        </div>
        <div class="contact-item">
            <i class="bi bi-envelope-fill"></i>
            <a href="mailto:bps3208@bps.go.id">bps3208@bps.go.id</a>
        </div>
        <div class="contact-item">
            <i class="bi bi-globe"></i>
            <a href="https://kuningankab.bps.go.id" target="_blank">kuningankab.bps.go.id</a>
        </div>
        <div class="copyright">© {{ date('Y') }} BPS Kabupaten Kuningan</div>
    </div>

</aside>