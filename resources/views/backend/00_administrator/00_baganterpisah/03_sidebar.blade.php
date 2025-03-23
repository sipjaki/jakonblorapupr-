<style>
    /* Efek hover saat menu utama di-hover */
/* Efek hover saat menu utama di-hover */
.nav-item > .nav-link:hover {
    background-color: #ffd100 !important; /* Warna latar belakang hover */
    color: black !important; /* Warna teks saat hover */
    transition: background-color 0.3s ease-in-out;
}

/* Mengubah warna ikon dan teks saat di-hover */
.nav-item > .nav-link:hover i,
.nav-item > .nav-link:hover p {
    color: black !important; /* Warna ikon dan teks berubah menjadi hitam */
}

/* Efek saat menu utama aktif (dipilih/diklik) */
.nav-item > .nav-link.active {
    background-color: #ffd100 !important;
    color: black !important;
}

/* Mengubah warna ikon dan teks saat menu aktif */
.nav-item > .nav-link.active i,
.nav-item > .nav-link.active p {
    color: black !important;
}

</style>


      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="/assets/icon/logokabupatenblora.png"
              alt="Logo Kabupaten Blora"
              class="brand-image opacity-75 shadow"
              style="margin-right:5px;"
            />
            <img
              src="/assets/icon/pupr.png"
              alt="Logo Kabupaten Blora"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Masjaki Blora</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer text-success"></i>
                  <p style="color: white">
                    Dashboard
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="/" target="_blank" class="nav-link">
                          <!-- Ikon untuk Halaman Web (Rumah) -->
                          <i class="nav-icon bi bi-house-door text-warning"></i>
                          <p style="color: white;">Halaman Web</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/dashboard" class="nav-link">
                          <!-- Ikon untuk Administrator (Person atau Shield) -->
                          <i class="nav-icon bi bi-person-lock text-warning"></i>
                          <p style="color: white">Administrator</p>
                        </a>
                      </li>

                </ul>
              </li>



              <li class="nav-header" style="color: white;">BERANDA WEB</li>

              <li class="nav-item">

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk Beranda -->
                    <i class="nav-icon bi bi-house-door text-success"></i>
                    <p style="color: white">
                      Beranda
                      <!-- Ikon panah kanan (Chevron) -->
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>

                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="/header" class="nav-link">
                          <!-- Ikon untuk Header -->
                          <i class="nav-icon bi bi-house-door text-warning"></i>
                          <p style="color: white">Header</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Informasi Kantor -->
                          <i class="nav-icon bi bi-building text-warning"></i>
                          <p style="color: white">Informasi Kantor</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Sosial Media -->
                          <i class="nav-icon bi bi-facebook text-warning"></i> <!-- Bisa diganti dengan bi-twitter atau bi-instagram sesuai kebutuhan -->
                          <p style="color: white">Sosial Media</p>
                        </a>
                      </li>

                </ul>
              </li>

              <li class="nav-header" style="color: white;">MAIN MENU</li>

              <li class="nav-item">

                    <li class="nav-item">
                    <a href="#" class="nav-link">
                    <!-- Ikon untuk Beranda -->
                    <i class="nav-icon bi bi-house-door text-success"></i>
                    <p style="color: white">
                      Kelembagaan
                      <!-- Ikon panah kanan (Chevron) -->
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>

                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="/bestrukturdinas" class="nav-link">
                          <!-- Ikon untuk Header -->
                          <i class="nav-icon bi bi-house-door text-warning"></i>
                          <p style="color:white">Struktur Organisasi</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/beprofiljakon" class="nav-link">
                          <!-- Ikon untuk Informasi Kantor -->
                          <i class="nav-icon bi bi-building text-warning"></i>
                          <p style="color: white">Profil Jakon</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/betupoksi" class="nav-link">
                          <!-- Ikon untuk Sosial Media -->
                          <i class="nav-icon bi bi-facebook text-warning"></i> <!-- Bisa diganti dengan bi-twitter atau bi-instagram sesuai kebutuhan -->
                          <p style="color: white">Tupoksi Jakon</p>
                        </a>
                      </li>

                </ul>
            </li>

            {{-- ===================================== MENU BERITA  --}}
              <li class="nav-item">

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <!-- Ikon untuk Berita Jakon (Newspaper) -->
                            <i class="nav-icon bi bi-newspaper text-success"></i>
                            <p style="color: white">
                              Berita Jakon
                              <!-- Ikon panah kanan (Chevron) -->
                              <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                          </a>

                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="/beberitajakon" class="nav-link">
                          <!-- Ikon untuk Berita Jakon -->
                          <i class="nav-icon bi bi-newspaper text-warning"></i>
                          <p style="color: white">Berita Jakon</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/beartikeljakon" class="nav-link">
                          <!-- Ikon untuk Artikel Jakon -->
                          <i class="nav-icon bi bi-journal-text text-warning"></i>
                          <p style="color: white">Artikel Jakon</p>
                        </a>
                      </li>

                </ul>
            </li>

            {{-- ========================== --}}

            {{-- ===================================== MENU DATA JAKON   --}}

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk Data Jakon -->
                    <i class="nav-icon bi bi-bar-chart text-success"></i>
                    <p style="color: white">
                      Data Jakon
                      <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>

                <ul class="nav nav-treeview">

                  <!-- Badan Usaha Jasa Konstruksi -->
                  <li class="nav-item">
                    <a href="/bebujkjakon" class="nav-link">
                      <i class="nav-icon bi bi-building text-warning"></i> <!-- Ikon untuk Badan Usaha Jasa Konstruksi -->
                      <p style="color: white">BUJK</p>
                    </a>
                  </li>

                  <!-- Tenaga Kerja Konstruksi -->
                  <li class="nav-item">
                    <a href="/beskkdpupr" class="nav-link">
                      <i class="nav-icon bi bi-person-workspace text-warning"></i> <!-- Ikon untuk Tenaga Kerja Konstruksi -->
                      <p style="color: white">TKK DPUPR</p>
                    </a>
                  </li>

                  <!-- Tenaga Kerja Konstruksi (Duplicate) -->
                  <li class="nav-item">
                    <a href="/beskkallblora" class="nav-link">
                      <i class="nav-icon bi bi-person-workspace text-warning"></i> <!-- Ikon untuk Tenaga Kerja Konstruksi -->
                      <p style="color: white">Semua TKK</p>
                    </a>
                  </li>

                  <!-- Profil Paket Pekerjaan Konstruksi -->
                  <li class="nav-item">
                    <a href="/bepaketpekerjaan" class="nav-link">
                      <i class="nav-icon bi bi-tools text-warning"></i> <!-- Ikon untuk Profil Paket Pekerjaan Konstruksi -->
                      <p style="color: white">Profil Paket Pekerjaan</p>
                    </a>
                  </li>

                  <!-- Profil Paket Pekerjaan Konstruksi -->
                  {{-- <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-bar-chart-line text-warning"></i> <!-- Ikon untuk Data Statistik -->
                      <p style="color: white">Data Statistik</p>
                    </a>
                  </li> --}}


                </ul>
              </li>

            {{-- ========================== --}}

            {{-- ===================================== MENU DATA PEMBINAAN   --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- Ikon untuk Pembinaan -->
                  <i class="nav-icon bi bi-person-check text-success"></i>
                  <p style="color: white">
                    Pembinaan
                    <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                  <!-- Agenda Pelatihan -->
                  <li class="nav-item">
                    <a href="/beagendapelatihan" class="nav-link">
                      <i class="nav-icon bi bi-calendar-event text-warning"></i> <!-- Ikon untuk Agenda Pelatihan -->
                      <p style="color: white">Agenda Pelatihan</p>
                    </a>
                  </li>

                  <!-- Peserta Pelatihan -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-person-lines-fill text-warning"></i> <!-- Ikon untuk Peserta Pelatihan -->
                      <p style="color: white">Peserta Pelatihan</p>
                    </a>
                  </li>

                  <!-- Agenda SKK -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-calendar-check text-warning"></i> <!-- Ikon untuk Agenda SKK -->
                      <p style="color: white">Agenda SKK</p>
                    </a>
                  </li>

                  <!-- Peserta SKK -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-person-badge text-warning"></i> <!-- Ikon untuk Peserta SKK -->
                      <p style="color: white">Peserta SKK</p>
                    </a>
                  </li>
                </ul>
              </li>


            {{-- ========================== --}}

            {{-- ===================================== MENU DATA PENGWASAN   --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- Ikon untuk Pengawasan -->
                  <i class="nav-icon bi bi-eye text-success"></i> <!-- Ikon untuk pengawasan -->
                  <p style="color: white">
                    Pengawasan
                    <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                  <!-- Tertib Jasa Konstruksi -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-check-circle text-warning"></i> <!-- Ikon untuk Tertib Jasa Konstruksi -->
                      <p style="color: white">Tertib Jasa Konstruksi</p>
                    </a>
                  </li>

                  <!-- Pengawasan BUJk -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-shield-lock text-warning"></i> <!-- Ikon untuk Pengawasan BUJk -->
                      <p style="color: white">Pengawasan BUJK</p>
                    </a>
                  </li>

                  <!-- Kecelakaan Kerja -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-emoji-dizzy text-warning"></i> <!-- Ikon untuk Kecelakaan Kerja -->
                      <p style="color: white">Kecelakaan Kerja</p>
                    </a>
                  </li>
                </ul>
              </li>

            {{-- ========================== --}}

            {{-- ===================================== MENU DATA AHSP   --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- Ikon untuk AHSP Keciptakaryaan -->
                  <i class="nav-icon bi bi-clipboard-check text-success"></i> <!-- Ikon untuk AHSP Keciptakaryaan -->
                  <p style="color: white">
                    AHSP Keciptakaryaan
                    <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                  <!-- Satuan Harga Material -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-archive text-warning"></i> <!-- Ikon untuk Satuan Harga Material -->
                      <p style="color: white">Satuan Harga Material</p>
                    </a>
                  </li>

                  <!-- Satuan Harga Bahan -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-droplet text-warning"></i> <!-- Ikon untuk Satuan Harga Bahan -->
                      <p style="color: white">Satuan Harga Bahan</p>
                    </a>
                  </li>

                  <!-- Satuan Harga Peralatan -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-tools text-warning"></i> <!-- Ikon untuk Satuan Harga Peralatan -->
                      <p style="color: white">Satuan Harga Peralatan</p>
                    </a>
                  </li>
                </ul>
              </li>

            {{-- ========================== --}}

            {{-- ===================================== MENU DATA HSP Konstruksi UMum   --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- Ikon untuk HSP Konstruksi Umum -->
                  <i class="nav-icon bi bi-building text-success"></i> <!-- Ikon untuk Konstruksi Umum -->
                  <p style="color: white">
                    HSP Konstruksi Umum
                    <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                  <!-- Divisi I -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi I -->
                      <p style="color: white">Divisi I</p>
                    </a>
                  </li>

                  <!-- Divisi II -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi II -->
                      <p style="color: white">Divisi II</p>
                    </a>
                  </li>

                  <!-- Divisi III -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi III -->
                      <p style="color: white">Divisi III</p>
                    </a>
                  </li>

                  <!-- Divisi IV -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi IV -->
                      <p style="color: white">Divisi IV</p>
                    </a>
                  </li>

                  <!-- Divisi V -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi V -->
                      <p style="color: white">Divisi V</p>
                    </a>
                  </li>

                  <!-- Divisi VI -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi VI -->
                      <p style="color: white">Divisi VI</p>
                    </a>
                  </li>

                  <!-- Divisi VII -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi VII -->
                      <p style="color: white">Divisi VII</p>
                    </a>
                  </li>

                  <!-- Divisi VIII -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi VIII -->
                      <p style="color: white">Divisi VIII</p>
                    </a>
                  </li>

                  <!-- Divisi IX -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi IX -->
                      <p style="color: white">Divisi IX</p>
                    </a>
                  </li>
                </ul>
              </li>

            {{-- ========================== --}}


            {{-- ===================================== MENU DATA SHST BLORA   --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk SHST Kab Blora -->
                    <i class="nav-icon bi bi-file-earmark-text text-success"></i> <!-- Ikon untuk SHST Kab Blora -->
                    <p style="color: white">
                      SHST Kab Blora
                      <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>


                {{-- <ul class="nav nav-treeview">
                  <!-- Satuan Harga Material -->

                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-archive text-warning"></i> <!-- Ikon untuk Satuan Harga Material -->
                      <p style="color: white">Satuan Harga Material</p>
                    </a>
                  </li>

                </ul> --}}
              </li>

            {{-- ========================== --}}

            {{-- ===================================== MENU DATA AHSP BINA MARGA    --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk AHSP Bina Marga -->
                    <i class="nav-icon bi bi-archive text-success"></i> <!-- Ikon alternatif untuk AHSP Bina Marga -->
                    <p style="color: white">
                      AHSP Bina Marga
                      <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                      {{-- <i class="nav-arrow bi bi-chevron-right"></i> --}}
                    </p>
                  </a>


                {{-- <ul class="nav nav-treeview">
                  <!-- Satuan Harga Material -->

                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-archive text-warning"></i> <!-- Ikon untuk Satuan Harga Material -->
                      <p style="color: white">Satuan Harga Material</p>
                    </a>
                  </li>

                </ul> --}}
              </li>

            {{-- ========================== --}}

            {{-- ===================================== MENU DATA AHSP SUMBER DAYA AIR    --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk AHSP Sumber Daya Air -->
                    <i class="nav-icon bi bi-droplet text-success"></i> <!-- Ikon untuk Sumber Daya Air -->
                    <p style="color: white">
                      AHSP Sumber Daya Air
                      <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                      {{-- <i class="nav-arrow bi bi-chevron-right"></i> --}}
                    </p>
                  </a>

                {{-- <ul class="nav nav-treeview">
                  <!-- Satuan Harga Material -->

                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-archive text-warning"></i> <!-- Ikon untuk Satuan Harga Material -->
                      <p style="color: white">Satuan Harga Material</p>
                    </a>
                  </li>

                </ul> --}}
              </li>

            {{-- ========================== --}}

            {{-- ===================================== MENU DATA RANTAI PASOK    --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk Rantai Pasok (Sumber Daya Air) -->
                    <i class="nav-icon bi bi-droplet text-success"></i> <!-- Ikon untuk Sumber Daya Air -->
                    <p style="color: white">
                        Rantai Pasok
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    <!-- Asuransi Konstruksi -->
                    <li class="nav-item">
                        <a href="/404" class="nav-link">
                            <i class="nav-icon bi bi-shield-lock text-warning"></i> <!-- Ikon untuk Asuransi Konstruksi -->
                            <p style="color: white">Asuransi Konstruksi</p>
                        </a>
                    </li>

                    <!-- Suplier Material -->
                    <li class="nav-item">
                        <a href="/404" class="nav-link">
                            <i class="nav-icon bi bi-box text-warning"></i> <!-- Ikon untuk Suplier Material -->
                            <p style="color: white">Suplier Material</p>
                        </a>
                    </li>

                    <!-- Suplier Peralatan -->
                    <li class="nav-item">
                        <a href="/404" class="nav-link">
                            <i class="nav-icon bi bi-cogs text-warning"></i> <!-- Ikon untuk Suplier Peralatan -->
                            <p style="color: white">Suplier Peralatan</p>
                        </a>
                    </li>

                    <!-- Toko Bangunan -->
                    <li class="nav-item">
                        <a href="/404" class="nav-link">
                            <i class="nav-icon bi bi-shop text-warning"></i> <!-- Ikon untuk Toko Bangunan -->
                            <p style="color: white">Toko Bangunan</p>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- ========================== --}}

            <li class="nav-header" style="color: white;">PERATURAN JASA KONSTRUKSI</li>

            <li class="nav-item">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <!-- Ikon untuk Peraturan -->
                      <i class="nav-icon bi bi-file-earmark-text text-success"></i> <!-- Ikon untuk Peraturan -->
                      <p style="color: white">
                        Peraturan
                        <!-- Ikon panah kanan (Chevron) -->
                        <i class="nav-arrow bi bi-chevron-right"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Undang-undang -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Undang-undang</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Peraturan Pemerintah -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Peraturan Pemerintah</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Peraturan Presiden -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Peraturan Presiden</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Peraturan Menteri -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Peraturan Menteri</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Keputusan Menteri -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Keputusan Menteri</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Surat Edaran Menteri -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Surat Edaran Menteri</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Referensi -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Referensi</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Peraturan Daerah -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Peraturan Daerah</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Peraturan Gubernur -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Peraturan Gubernur</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Peraturan Walikota/Bupati -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Peraturan Walikota/Bupati</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Surat Keputusan -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Surat Keputusan</p>
                        </a>
                      </li>

                    </ul>
                  </li>
            <li class="nav-header" style="color: white;" >ADMINISTRATOR DATABASE</li>

            <li class="nav-item">

          <li class="nav-item">
              <a href="#" class="nav-link">
                  <!-- Ikon untuk Beranda -->
                  <i class="nav-icon bi bi-house-door text-success"></i>
                  <p style="color: white">
                    Admin
                    <!-- Ikon panah kanan (Chevron) -->
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>

              <ul class="nav nav-treeview">

                  <li class="nav-item">
                      <a href="/404" class="nav-link">
                        <!-- Ikon untuk Header -->
                        <i class="nav-icon bi bi-house-door text-warning"></i>
                        <p style="color: white">Admin</p>
                      </a>
                    </li>


              </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk Berita -->
                    <i class="nav-icon bi bi-newspaper text-success"></i> <!-- Ikon untuk Berita -->
                    <p style="color: white">
                        Berita
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk Kelembagaan -->
                    <i class="nav-icon bi bi-person-workspace text-success"></i> <!-- Ikon untuk Kelembagaan -->
                    <p style="color: white">
                        Kelembagaan
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk Data Jakon -->
                    <i class="nav-icon bi bi-table text-success"></i> <!-- Ikon untuk Data Jakon -->
                    <p style="color: white">
                        Data Jakon
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk Pembinaan -->
                    <i class="nav-icon bi bi-people text-success"></i> <!-- Ikon untuk Pembinaan -->
                    <p style="color: white">
                        Pembinaan
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk Pengawasan -->
                    <i class="nav-icon bi bi-eye text-success"></i> <!-- Ikon untuk Pengawasan -->
                    <p style="color: white">
                        Pengawasan
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk AHSP -->
                    <i class="nav-icon bi bi-clipboard-check text-success"></i> <!-- Ikon untuk AHSP -->
                    <p style="color: white">
                        AHSP
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk Rantai Pasok -->
                    <i class="nav-icon bi bi-arrow-repeat text-success"></i> <!-- Ikon untuk Rantai Pasok -->
                    <p style="color: white">
                        Rantai Pasok
                    </p>
                </a>
            </li>


            {{-- ---------------------------------------------  --}}

            <li class="nav-header" style="color: white;">LOGOUT</li>

            <li class="nav-item">
                {{-- <li class="nav-item"> --}}
                    <li class="nav-item">
                        <form action="/logout" method="POST" style="display: inline;">
                            @csrf  <!-- This is for CSRF protection -->
                            <button type="submit" class="nav-link" style="background: none; border: none; color: red;">
                                <!-- Ikon untuk Logout -->
                                <i class="nav-icon bi bi-box-arrow-right text-danger"></i> <!-- Ikon untuk Logout -->
                                <p style="color: red">Logout</p>
                            </button>
                        </form>
                    </li>

                  {{-- </li> --}}
                  </li>

            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->

      <script>
        // Toggle sub-menu saat item Dashboard diklik
        $(".nav-item > a").click(function (e) {
          // Pastikan kita hanya menampilkan sub-menu yang terkait dengan item yang diklik
          var $this = $(this).next(".nav-treeview");

          // Cek apakah sub-menu sudah terbuka
          if ($this.is(":visible")) {
            $this.slideUp(); // Tutup jika terbuka
          } else {
            $(".nav-treeview").slideUp(); // Tutup semua sub-menu lainnya
            $this.slideDown(); // Buka sub-menu yang diklik
          }
        });
      </script>
