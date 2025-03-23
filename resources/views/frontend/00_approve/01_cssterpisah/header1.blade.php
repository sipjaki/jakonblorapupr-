

<header class="header">
	<div class="topbar" style="background: #2ECC71;>
		<div class="topbar-inner" style="background: #2ECC71 " >
			<div class="topbar-left" style="background: #2ECC71 ">
				<div class="topbar-socials">
                    <a href="#"><i class="fa-brands fa-tiktok" style="font-size: 24px;"></i></a>
                    {{-- <a href="#"><i class="fa-solid fa-envelope" style="font-size: 25px;"></i></a> --}}
                    <a href="#"><i class="fa-brands fa-instagram" style="font-size: 24px; "></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp" style="font-size: 24px; "></i></a>
                    <a href="#"><i class="fa-brands fa-facebook" style="font-size: 24px; "></i></a>
				</div><!--topbar-socials-->
				<div class="topbar-info">
					<ul>
						<li>
							{{-- <div class="topbar-a">
								<i class="fa-solid fa-database"></i>
							</div><!-- topbar-icon --> --}}
							<div class="topbar-text" style="margin-right: 20px;
                            border-radius: 20px;
                            background-color: white;
                            color: green;
                            padding: 8px;
                            overflow: hidden;
                            font-size:25px;
                            white-space: nowrap;
                            display: inline-block;
                            animation: scrolling-text 3s linear infinite;
                            width: 100%;">

                            <marquee behavior="scroll" direction="left" style="width: 950px; margin-top:-10px;">
                                <a href="#" style="color: navy; text-decoration: none;">
                                Selamat Datang di Mas Jaki DPUPR Kab Blora Sistem Informasi Pembina Jasa Konstruksi Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Blora Provinsi Jawa Tengah
                                </a>
                            </marquee>

                            </div>

                            {{-- <div class="btn d-flex align-items-center" style="background: white; border: none; padding: 5px; border-radius:20px;">
                                <div class="topbar-icon" style="background: white; padding: 5px; border-radius: 5px;">
                                    <i class="fa-solid fa-envelope" style="color: black;"></i>
                                </div>
                                <div class="topbar-text" style="background: white; padding: 5px; border-radius: 5px;">
                                    <a href="#" style="color: black; text-decoration: none;">konstruksi@masjakidpuprblora.co.id</a>
                                </div>
                            </div> --}}

                            </li><!-- li -->
						<li>
							{{-- <div class="btn d-flex align-items-center" style="background: white; border: none; padding: 5px; border-radius:20px;">
                                <div class="topbar-icon" style="background: white; padding: 5px; border-radius: 5px;">
                                    <i class="fa-solid fa-clock" style="color: black;"></i>
                                </div>
                                <div class="topbar-text" style="background: white; padding: 5px; border-radius: 5px;">
                                    <a href="#" style="color: black; text-decoration: none;">Senin - Jum`at 09.00 - 15.00 </a>
                                </div>
                            </div> --}}

						</li><!-- li -->
						<li>

                            {{-- <div class="container" style="margin-top:20px;">
                                <div id="clock-container" style="
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                height: 6vh;
                                font-family: Arial, sans-serif;">
                                <p id="jam" style="
                                    font-size: 14px;
                                    background: black;
                                    color: #fff;
                                    padding: 10px 10px;
                                    border-radius: 15px;
                                    text-align: center;"></p>

                                        </div>

                            <script>
                                function updateClock() {
                                    const now = new Date();
                                    const hours = now.getHours().toString().padStart(2, '0');
                                    const minutes = now.getMinutes().toString().padStart(2, '0');
                                    const seconds = now.getSeconds().toString().padStart(2, '0');
                                    const day = now.getDate().toString().padStart(2, '0');
                                    const month = (now.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-based
                                    const year = now.getFullYear();

                                    const timeString = `${hours}:${minutes}:${seconds}`;
                                    const dateString = `${day}/${month}/${year}`;
                                    document.getElementById('jam').textContent = `${dateString} ${timeString}`;
                                }

                                setInterval(updateClock, 1000); // Update every second
                                updateClock(); // Initial call to set the time immediately
                            </script>
 --}}

                                                </li><!-- li -->

					</ul><!-- ul -->
				</div><!--topbar-info-->
			</div><!-- topbar-left -->
		</div><!-- topbar-inner -->
	</div><!--topbar-->

	<div class="main-menu sticky-header" style="background: #1d1d1b">
    <br>
                <div class="header-container">
                    <img src="/assets/icon/logokabupatenblora.png" alt="Logo PUPR" class="header-logo">
                    <img src="/assets/icon/pupr.png" alt="Logo PUPR" class="header-logo">
                    <div class="header-text">
                        <h1 class="header-title">
                            <span class="header-title-white">MASJAKI</span>
                            <span class="header-title-green">BLORA</span>
                        </h1>
                        <p class="header-description">
                            Dinas Pekerjaan Umum & Penataan Ruang Kabupaten Blora
                        </p>
                    </div>
                </div>

                <style>
                    .header-container {
                        display: flex;
                        align-items: center;
                        margin-left: 100px;
                    }

                    .header-logo {
                        width: 80px;
                        height: 80px;
                        object-fit: cover;
                    }

                    .header-text {
                        margin-left: 10px;
                        display: flex;
                        flex-direction: column;
                    }

                    .header-title {
                        display: flex;
                        gap: 5px;
                        margin: 0;
                        padding: 0;
                        font-size: 32px;
                        font-weight: bold;
                        align-items: center;
                    }

                    .header-title-white {
                        color: white;
                        font-style: italic;
                    }

                    .header-title-green {
                        color: green;
                        font-style: italic;
                    }

                    .header-description {
                        margin: 0;
                        font-size: 24px;
                        color: white;
                        font-weight: 600;
                    }

                    /* Responsif untuk Tablet dan Ponsel */
                    @media (max-width: 768px) {
                        .header-container {
                            margin-left: 20px;
                        }
                        .header-logo {
                            width: 48px; /* 40% lebih kecil dari 80px */
                            height: 48px;
                        }
                        .header-title {
                            font-size: 19px; /* 40% lebih kecil dari 32px */
                        }
                        .header-description {
                            font-size: 14px; /* 40% lebih kecil dari 24px */
                        }
                    }

                    @media (max-width: 480px) {
                        .header-container {
                            margin-left: 10px;
                        }
                        .header-logo {
                            width: 48px;
                            height: 48px;
                        }
                        .header-title {
                            font-size: 19px;
                        }
                        .header-description {
                            font-size: 14px;
                        }
                    }
                </style>


		<div class="main-menu-inner">
			<div class="main-menu-left">
				<div class="navigation" style="margin-left: 100px;">
					<ul class="main-menu-list list-unstyled">
                        <li><a href="/" style="color: white;">BERANDA</a>

						<li class="has-dropdown">
							<a href="#" style="color: white;" >KELEMBAGAAN</a>
							<ul class="list-unstyled">
								<li><a href="/profil/struktur">Struktur DPUPR Blora</a></li>
								<li><a href="/profil/rencanastrategis">Profil Jakon DPUPR BLora</a></li>
								<li><a href="/profil/tupoksi">Tupoksi Jakon DPUPR Blora</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->

						<li class="has-dropdown">
							<a href="#" style="color: white;">BERITA</a>
							<ul class="list-unstyled">
								<li><a href="#">Peraturan</a>
                                    <ul class="list-unstyled">
                                        <li><a href="/standarbiayaumummasjaki">Standar Biaya Umum </a></li>
                                        <li><a href="/peraturan/undangundang">Undang - Undang </a></li>
                                        <li><a href="/peraturan/pemerintah">Peraturan Pemerintah</a></li>
                                        <li><a href="/peraturan/presiden">Peraturan Presiden</a></li>
                                        <li><a href="/peraturan/menteri">Peraturan Menteri</a></li>
                                        <li><a href="/peraturan/keputusanmenteri">Keputusan Menteri</a></li>
                                        <li><a href="/peraturan/suratedaranmenteri">Surat Edaran Menteri</a></li>
                                        <li><a href="/peraturan/referensi">Referensi</a></li>
                                        <li><a href="/peraturan/daerah">Peraturan Daerah</a></li>
                                        <li><a href="/peraturan/peraturangubernur">Peraturan Gubernur</a></li>
                                        <li><a href="/peraturan/walikotadanbupati">Peraturan Walikota/Bupati</a></li>
                                        <li><a href="/peraturan/suratkeputusan">Surat Keputusan</a></li>
                                    </ul><!-- list-unstyled -->
                                </li>
                                <li><a href="/beritajakon">Berita Jakon</a></li>
								<li><a href="/artikeljakon">Artikel Jakon</a></li>


								{{-- <li><a href="/404">Agenda Sertifikasi</a></li> --}}
							</ul><!-- list-unstyled -->

						</li><!--has-dropdown-->

                        <li class="has-dropdown">
							<a href="#" style="color: white;">DATA JAKON</a>
							<ul class="list-unstyled">
								<li><a href="#">Badan Usaha Jasa Konstruksi</a>
                                    <ul class="list-unstyled">
                                        <li><a href="/datajakon/bujkkontraktor">BUJK Konstruksi</a></li>
                                        <li><a href="/datajakon/bujkkonsultan">BUJK Konsultan</a></li>
                                        <li><a href="/datajakon/asosiasimasjaki">Asosiasi Konstruksi</a></li>
                                        <li><a href="/datajakon/statistikabujkblora">Data Statistik BUJK</a></li>
                                    </ul>
                                </li>
								<li><a href="#">Tenaga Kerja Konstruksi</a>
                                    <ul class="list-unstyled">
                                    <li><a href="/datajakon/skktenagakerjablora">TKK Diselenggarakan DPUPR</a></li>
                                    <li><a href="/datajakon/skktenagakerjabloralist">TKK Kabupaten Blora</a></li>
                                    <li><a href="/datajakon/statistikaskktenagakerjabloralist">Data Statistik TKK</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Profil Paket Pekerjaan Konstruksi & Konsultasi</a>
                                <ul class="list-unstyled">
                                        <li><a href="/datajakon/profilpaketpekerjaan">Profil Paket Pekerjaan</a></li>
                                        <li><a href="/404">Data Statistik</a></li>
                                    </ul>
                                </li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->

                        <li class="has-dropdown">
							<a href="#" style="color: white;">PEMBINAAN</a>
							<ul class="list-unstyled">
								<li><a href="/agendapembinaan">Agenda Pelatihan</a></li>
								<li><a href="/daftarpesertapelatihan">Daftar Peserta Pelatihan</a></li>
								<li><a href="/agendaskk">Agenda Sertifikasi TKK</a></li>
								<li><a href="/daftarpesertaskk">Daftar Peserta SKK </a></li>
								{{-- <li><a href="/skktenagakerjablora">SKK Tenaga Kerja Konstruksi</a></li> --}}
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->

                        <li class="has-dropdown">
							<a href="#" style="color: white;">PENGAWASAN</a>
							<ul class="list-unstyled">
								{{-- <li><a href="/tertibjasakonstruksi">Tertib Jasa Konstruksi</a></li> --}}
                                <li><a href="#">Tertib Jasa Konstruksi</a>
									<ul class="list-unstyled">
										<li><a href="/tertibjasakonstruksilist">Tertib Usaha Jakon</a></li>
										<li><a href="/tertibjasakonstruksipemanfaatan">Tertib Pemanfaatan Jakon</a></li>
										<li><a href="/tertibjasakonstruksipenyelenggaraan">Tertib Penyelenggaraan Jakon</a></li>
										<li><a href="/statistiktertibjakonblora">Data Statistik Tertib Jakon</a></li>
                                    </ul><!-- list-unstyled -->
								</li>
                                <li><a href="/pengawasanbujk">Pengawasan BUJK</a></li>
								<li><a href="#">Kecelakaan Kerja</a>
                                    <ul class="list-unstyled">
                                        <li><a href="/kecelakaankerjalist">Data Kecelakaan</a></li>
                                        <li><a href="/404">Data Statistik Kecelakaan</a></li>
                                    </ul>
                                </li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->


                        <li class="has-dropdown">
							<a href="#" style="color: white;">AHSP</a>
							<ul class="list-unstyled">
                                <li><a href="#">AHSP Keciptakaryaan, Bangunan Gedung dan Perumahan</a>
									<ul class="list-unstyled">
                                        <li><a href="#">Satuan Harga Dasar</a>
                                            <ul class="list-unstyled">
                                                <li><a href="/satuanhargamaterial">Harga Satuan Material</a></li>
                                                <li><a href="/satuanhargaupahtenaga">Harga Satuan Upah Tenaga Kerja</a></li>
                                                <li><a href="/satuanhargaperalatan">Harga Satuan Peralatan</a></li>
                                            </ul>
                                        </li>
										<li><a href="#">HSP Konstruksi Umum</a>
                                            <ul class="list-unstyled">
                                                <li><a href="/hspdivisi1">Divisi I Persiapan Pekerjaan</a></li>
                                                <li><a href="/hspdivisi2">Divisi II Pekerjaan Struktur</a></li>
                                                <li><a href="/hspdivisi3">Divisi III Pekerjaan Arsitektur</a></li>
                                                <li><a href="/hspdivisi4">Divisi IV Pekerjaan Lansekap</a></li>
                                                {{-- <li><a href="/hspdivisi5">Divisi IV Pekerjaan Lansekap</a></li> --}}
                                                <li><a href="/hspdivisi5">Divisi V Pekerjaan Mekanikal & Elektrikal</a></li>
                                                <li><a href="/hspdivisi6">Divisi VI Pekerjaan Plambing</a></li>
                                                <li><a href="/hspdivisi7">Divisi VII Jalan Pada Permukiman</a></li>
                                                <li><a href="/hspdivisi8">Divisi VIII Drainase Jalan</a></li>
                                                <li><a href="/hspdivisi9">Divisi IX Pekerjaan Jaringan Pipa Di Luar Gedung</a></li>
                                            </ul>
                                        </li>
										<li><a href="/shstblora">SHST 2025</a></li>
                                    </ul><!-- list-unstyled -->
								</li>
                                <li><a href="/404">AHSP Bina Marga </a></li>
                                <li><a href="/404">AHSP Sumber Daya Air </a></li>
								{{-- <li><a href="/hspkonstruksiumum">HSP Konstruksi Umum </a></li>
								<li><a href="/shstblora">SHST Konstruksi</a></li> --}}
								{{-- <li><a href="/404">Daftar Material</a></li> --}}
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->


                        <li class="has-dropdown">
							<a href="#" style="color: white;">RANTAI PASOK</a>
							<ul class="list-unstyled">
								<li><a href="/404">Asuransi Konstruksi </a></li>
								<li><a href="/rantaipasokmaterial">Material Bangunan/ Distributor/ Supplier Bangunan </a></li>
								<li><a href="/peralatankonstruksi">Peralatan Konstruksi</a></li>
								<li><a href="/tokobangunanblora">Toko Bangunan Kab Blora</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->

					</ul><!-- main-menu-list -->
				</div><!--navigation-->
			</div><!--main-menu-left-->
			<div class="main-menu-right">
				<div class="mobile-menu-button mobile-nav-toggler">
					<span></span>
					<span></span>
					<span></span>
				</div><!-- mobile-menu-button -->
				{{-- <div class="search-box">
					<a href="#" class="search-toggler">
						<i class="flaticon-search-interface-symbol"></i>
					</a><!-- search-toggler -->
				</div><!-- search-box --> --}}


                <style>
                    .masuk-admin {
                        display: flex;
                        justify-content: space-between;
                        width: 100%;
                        max-width: 400px;
                        margin-top: 20px;
                        margin-bottom: 25px;
                        margin-right: 20px;
                        margin-left: 10px;
                        gap: 10px;
                    }
                    .masuk-admin a {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: 8px;
                        text-decoration: none;
                        background-color: #28a745;
                        color: white;
                        padding: 8px 12px;
                        border-radius: 8px;
                        font-size: 14px;
                        font-weight: bold;
                        transition: all 0.3s ease-in-out;
                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                    }
                    .masuk-admin a:hover {
                        background-color: white;
                        color: black;
                        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
                    }
                    @media (max-width: 768px) {
                        .masuk-admin {
                            width: 90%;
                            margin-bottom: 10px;
                            margin-left: 2px;

                        }
                    }
                </style>

                <div class="masuk-admin">
                    <a href="/404" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Daftar
                    </a>
                    <a href="/login" class="btn btn-primary">
                        <i class="fas fa-sign-in-alt"></i> Masuk
                    </a>
                </div>


            </div><!--main-menu-right-->
		</div><!--main-menu-inner-->
	</div><!--main-menu-->
</header><!--header-->
