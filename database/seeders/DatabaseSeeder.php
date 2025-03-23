<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// namespace App\Models;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\peraturan;
use App\Models\agendaskk;
use App\Models\pesertapelatihan;
use App\Models\permenteri;
use App\Models\perpemerintah;
use App\Models\perpresiden;
use App\Models\keputusanmenteri;
use App\Models\perbupatiwalikota;
use App\Models\perdaerah;
use App\Models\referensi;
use App\Models\suratedaran;
use App\Models\pergubernur;
use App\Models\suratkeputusan;
use App\Models\paketpekerjaanmasjaki;
use App\Models\paketstatuspekerjaan;
use App\Models\renstra;
use App\Models\sbulampiran1;
use App\Models\sbulampiran2;
use App\Models\sbulampiran3;

// use App\Models\sertifikasiagenda;
use App\Models\standarbiayaumum;
use App\Models\statusadmin;
use App\Models\strukturdinas;
use App\Models\tahunpilihan;
use App\Models\tupoksi;
use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use App\Models\bujkkonsultan;
use App\Models\bujkkonsultansub;
use App\Models\namasekolah;
use App\Models\jenjangpendidikan;
use App\Models\jurusan;
use App\Models\jabatankerja;
use App\Models\jenjang;
use App\Models\lpspenerbit;
use App\Models\skktenagakerjablora;
use App\Models\skktenagakerjabloralist;
use App\Models\asosiasimasjaki;
use App\Models\prosespaket;
use App\Models\pengawasanbujk;
use App\Models\kecelakaankerjamasjaki;
use App\Models\penyediastatustertibjakon;
use App\Models\tertibjasakonstruksi;
use App\Models\tertibjakonpemanfaatan;
use App\Models\tertibjakonpenyelenggaraan;
use App\Models\kecamatanblora;
use App\Models\rantaipasokblora;
use App\Models\peralatankonstruksi;
use App\Models\alatberat;
use App\Models\tokobangunanblora;
use App\Models\shstblora;
use App\Models\profiljenispekerjaan;
use App\Models\sumberdana;
use App\Models\satuanhargamaterial;
use App\Models\satuanhargaupahtenagakerja;
use App\Models\satuanhargaperalatan;
use App\Models\hspdivisi;
use App\Models\hsppaket;
use App\Models\hspkodepekerjaan;
use App\Models\hspkonstruksiumum;
use App\Models\beritajakon;
use App\Models\allskktenagakerjablora;
use App\Models\profiljakonidentitasopd;
use App\Models\profiljakonkepaladinas;
use App\Models\profiljakonkabid;
use App\Models\profiljakonsubkoordinator;
use App\Models\profiljakoninformasi;
use App\Models\profiljakonsipjaki;
use App\Models\profiljakonpersonil;
// use App\Models\artikeljakon;

// atasan
// hsp harga divisi 1
use App\Models\artikeljakonmasjaki;
use App\Models\kategoripelatihan;
use App\Models\agendapelatihan;
use App\Models\subhargadiv1;
use App\Models\subhargadiv1bahan;
use App\Models\subhargadiv1peralatan;

// hsp harga divisi 2
use App\Models\hsppaket2;
use App\Models\hspkodepekerjaan2;
use App\Models\hspkonstruksiumum2;
use App\Models\subhargadiv2;
use App\Models\subhargadiv2bahan;
use App\Models\subhargadiv2peralatan;

// hsp harga divisi 3
use App\Models\hsppaket3;
use App\Models\hspkodepekerjaan3;
use App\Models\hspkonstruksiumum3;
use App\Models\subhargadiv3;
use App\Models\subhargadiv3bahan;
use App\Models\subhargadiv3peralatan;

// hsp harga divisi 4
use App\Models\hsppaket4;
use App\Models\hspkodepekerjaan4;
use App\Models\hspkonstruksiumum4;
use App\Models\subhargadiv4;
use App\Models\subhargadiv4bahan;
use App\Models\subhargadiv4perlatan;

// hsp harga divisi 5
use App\Models\hsppaket5;
use App\Models\hspkodepekerjaan5;
use App\Models\hspkonstruksiumum5;
use App\Models\subhargadiv5;
use App\Models\subhargadiv5bahan;
use App\Models\subhargadiv5peralatan;

// hsp harga divisi 6
use App\Models\hsppaket6;
use App\Models\hspkodepekerjaan6;
use App\Models\hspkonstruksiumum6;
use App\Models\subhargadiv6;
use App\Models\subhargadiv6bahan;
use App\Models\subhargadiv6peralatan;

// hsp harga divisi 7
use App\Models\hsppaket7;
use App\Models\hspkodepekerjaan7;
use App\Models\hspkonstruksiumum7;
use App\Models\subhargadiv7;
use App\Models\subhargadiv7bahan;
use App\Models\subhargadiv7peralatan;

// hsp harga divisi 8
use App\Models\hsppaket8;
use App\Models\hspkodepekerjaan8;
use App\Models\hspkonstruksiumum8;
use App\Models\subhargadiv8;
use App\Models\subhargadiv8bahan;
use App\Models\subhargadiv8peralatan;

// hsp harga divisi 9
use App\Models\hsppaket9;
use App\Models\hspkodepekerjaan9;
use App\Models\hspkonstruksiumum9;
use App\Models\subhargadiv9;
use App\Models\subhargadiv9bahan;
use App\Models\subhargadiv9peralatan;

// -=============================
use App\Models\headerberanda;


// modelbaru

// use App\Models\paketpekerjaan;
use Database\Factories\SkktenagakerjaFactory;
// use Carbon\Carbon;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Asosiasipengusaha::factory(15)->create();
        // Paketpekerjaan::factory(15)->create();
        // Penanggungjawabteknis::factory(15)->create();
        // Ketertiban::factory(15)->create();
        // Beritaagenda::factory(15)->create();
        // User::factory(15)->create();
        // // \App\Models\sertifikasiagenda::factory(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // asosiasipengusaha::factory(15)->create();
        // paketpekerjaan::factory(15)->create();
        // penanggungjawabteknis::factory(15)->create();
        // ketertiban::factory(15)->create();
        // beritaagenda::factory(15)->create();
        // Qa::factory(15)->create();
        // BAHAN TUKANG TERAMPIL BLORA
        // Tukangterampil::factory(994)->create();


// =============== DATABASE HEADER BERANDA
headerberanda::create([
    'judul'  => 'Sistem Informasi <br> Pembina Jasa Konstruksi DPUPR Kabupaten Blora',
    'header'  => '00_beranda/00_tampilanmuka/jakon4.jpeg',
]);

headerberanda::create([
    'judul'  => 'Sasarengan mBangun Blora Unggul dan <br> Berdaya Saing',
    'header'  => '00_beranda/00_tampilanmuka/masjaki2.png',
]);

headerberanda::create([
    'judul'  => 'Blora Mustika <br> Cacana Jaya Kerta Bhumi',
    'header'  => '00_beranda/00_tampilanmuka/petaindonesiabaru.png',
]);


// =========================================================
        User::create([
            'id'  => 1,
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigit',
            'statusadmin_id' => '1',
            'avatar' => 'user/avatar/sigit.jpg',
            'email' => 'sigitseptiadi1@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'id'  => 2,
            'name'  => 'Anex Fachrian, ST. MT',
            'username' => 'Anex',
            'statusadmin_id' => '1',
            'avatar' => 'user/avatar/foto4.png',
            'email' => 'sipjakiblora@gmail.com',
            'password' => bcrypt('adminadmin321')
        ]);

        User::create([
            'id'  => 3,
            'name'  => 'Miftahunnuril Anam',
            'username' => 'Anam',
            'statusadmin_id' => '1',
            'avatar' => 'user/avatar/foto4.png',
            'email' => 'masjakiblora@gmail.com',
            'password' => bcrypt('adminadmin123')
        ]);

        User::create([
            'id'  => 4,
            'name'  => 'Rahmat Irianto',
            'username' => 'Sigitpekerja',
            'statusadmin_id' => '3',
            'avatar' => 'user/avatar/sigit.jpg',
            'email' => 'sigitpekerja@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'id'  => 5,
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigitsupppabrik',
            'statusadmin_id' => '4',
            'avatar' => 'user/avatar/sigit.jpg',
            'email' => 'sigitsupp_pabrik@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'id'  => 6,
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigitsupppabrik',
            'statusadmin_id' => '5',
            'avatar' => 'user/avatar/sigit.jpg',
            'email' => 'sigitsupp_peralatan@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'id'  => 7,
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigitsupppabrik',
            'statusadmin_id' => '6',
            'avatar' => 'user/avatar/sigit.jpg',
            'email' => 'sigitsupp_tokobangunan@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'id'  => 8,
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigitsupppabrik',
            'statusadmin_id' => '7',
            'avatar' => 'user/avatar/sigit.jpg',
            'email' => 'sigitlpspenerbit@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'id'  => 9,
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigitsupppabrik',
            'statusadmin_id' => '8',
            'avatar' => 'user/avatar/sigit.jpg',
            'email' => 'sigitoperator@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'id'  => 10,
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigitsupppabrik',
            'statusadmin_id' => '9',
            'avatar' => 'user/avatar/sigit.jpg',
            'email' => 'sigitdinas@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        // =================================================================
        statusadmin::create([
            'id'  => '1',
            'statusadmin'  => 'super_admin',
        ]);

        statusadmin::create([
            'id'  => '2',
            'statusadmin'  => 'admin',
        ]);

        statusadmin::create([
            'id'  => '3',
            'statusadmin'  => 'pekerja',
        ]);

        statusadmin::create([
            'id'  => '4',
            'statusadmin'  => 'supp_pabrik',
        ]);

        statusadmin::create([
            'id'  => '5',
            'statusadmin'  => 'supp_peralatan',
        ]);

        statusadmin::create([
            'id'  => '6',
            'statusadmin'  => 'supp_tokobangunan',
        ]);

        statusadmin::create([
            'id'  => '7',
            'statusadmin'  => 'lpspenerbit',
        ]);

        statusadmin::create([
            'id'  => '8',
            'statusadmin'  => 'operator',
        ]);

        statusadmin::create([
            'id'  => '9',
            'statusadmin'  => 'dinas',
        ]);


//======================== ===================================================================================
//======================== ===================================================================================
strukturdinas::create([
    'judul' => 'Struktur Organisasi Dinas Pekerjaan Umum Dan Penataan Ruang Pemerintah Kabupaten Blora',
    'peraturan' => '01_kelembagaan/01_dinas/Struktur_Organisasi_PUPR_Blora.pdf',
    'keterangan' => 'Dinas Pekerjaan Umum dan Penataan Ruang (PUPR) Pemerintah Kabupaten Blora memiliki peran vital dalam pengelolaan infrastruktur dan penataan ruang yang mendukung pembangunan daerah. Dinas ini bertanggung jawab dalam merencanakan, melaksanakan, serta mengawasi pembangunan berbagai infrastruktur seperti jalan, jembatan, dan gedung, serta fasilitas publik lainnya. Selain itu, Dinas PUPR juga berperan dalam penataan ruang yang berfokus pada pengembangan wilayah yang terencana dan berkelanjutan. Struktur organisasi Dinas PUPR Kabupaten Blora dibangun dengan sistem yang terstruktur dan terorganisir guna memastikan efektivitas dalam pelaksanaan tugas-tugasnya.',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
renstra::create([
    'judul' => 'Profil Jakon Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten BLora Provinsi Jawa Tengah',
    'keterangan' => 'OPD yang menangani Bina Jasa Konstruksi di DPUPR Kab Blora setara dengan Eselon IV di bawah Bidang Bangunan Gedung. Pada Bidang Bangunan Gedung terdapat 2 Sub Koordinator yaitu Sub Koordinator Bangunan dan Lingkungan serta Sub Koordinator Bina Jasa Konstruksi. Hal tersebut tertuang dalam Peraturan Bupati No 66 Tahun 2021 Tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi, Serta Tata Kerja Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Blora. Sub Koordinator Bina Jasa Konstruksi mempunyai 4 Personil Jabatan Fungsional Bina Jasa Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljakonidentitasopd::create([
    'namaopd' => 'Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora',
    'alamatopd' => 'Jl. Nusantara No. 62',
    'rtrw' => null,
    'kodepos' => '58214',
    'kelurahan' => 'Jetis',
    'kecamatan' => 'Blora',
    'kota' => 'Blora',
    'provinsi' => 'Jawa Tengah',
    'negara' => 'Indonesia',
    'posisigeografis' => '-6.976853 Lintang, 111.410894 Bujur',
    'tipedinas' => 'B',
]);

profiljakonkepaladinas::create([
    'namalengkap' => 'Nidzamudin Al Hudaa, ST',
    'nip' => null,
    'ttl' => null,
    'pangkatgolongan' => null,
    'jabatan' => 'Plt. Kepala Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora',
    'perangkatdaerah' => 'Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora',
    'pendidikanterakhir' => 'Strata 1 (S1)',
]);

profiljakonkabid::create([
    'namalengkap' => 'Mohamad Arif Hidayat, ST',
    'nip' => null,
    'ttl' => null,
    'pangkatgolongan' => null,
    'jabatan' => 'Kepala Bidang Bangunan Gedung Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora',
    'perangkatdaerah' => 'Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora',
    'pendidikanterakhir' => 'Strata 1 (S1)',
]);

profiljakonsubkoordinator::create([
    'namalengkap' => '	Anex Fachrian ST, MT',
    'nip' => null,
    'ttl' => null,
    'pangkatgolongan' => null,
    'jabatan' => 'Subkoordinator Bina Jasa Konstruksi Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora',
    // 'perangkatdaerah' => 'Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora',
    'pendidikanterakhir' => 'Magister (S2)',
]);

profiljakoninformasi::create([
    'informasiopd' => 'OPD yang menangani Bina Jasa Konstruksi di DPUPR Kabupaten Blora setara dengan eselon IV, dibawah Bidang Bangunan Gedung. Pada Bidang Bangunan Gedung terdapat dua subkoordinator yaitu Subkoordinator Bangunan dan Lingkungan serta Subkoordinator Bina Jasa Konstruksi, hal tersebut tertuang dalam Perbup Nomor 66 Tahun 2021 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi Serta Tata Kerja Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Blora.',
    'notelepon' => '(0296) 531004',
    'instagram' => 'dpuprblora',
    'tiktok' => 'bangunan.gedung.dpupr',
    'email' => 'bid.bangunan.gedung.blora@gmail.com',
]);

profiljakonsipjaki::create([
    'nomor' => '900/008.A/2024 tanggal 2 Januari 2024',
    'operator1' => 'Miftahunnuril Anam, SE',
    'operator2' => 'Muhammad Yusuf Zaqi Efendi, SE',
    'operator3' => null,
    'operator4' => null,
]);

profiljakonpersonil::create([
    'jabatan' => 'Ahli Muda Bina Jasa Konstruksi',
    'namalengkap' => 'Anex Fachrian, ST, MT',
]);

profiljakonpersonil::create([
    'jabatan' => 'Ahli Pertama - Jasa Konstruksi',
    'namalengkap' => 'Miftahunnuril Anam, SE',
]);

profiljakonpersonil::create([
    'jabatan' => 'Ahli Pertama - Jasa Konstruksi',
    'namalengkap' => 'Maretha Riantiarni, SE',
]);

profiljakonpersonil::create([
    'jabatan' => 'Ahli Pertama - Jasa Konstruksi',
    'namalengkap' => 'Yudha Prasetyowidadi, SE',
]);



// makan
//======================== ===================================================================================
tupoksi::create([
    'judul' => 'Tupoksi Program Dan Jasa Konstruksi Dinas Pekerjan Umum dan Penataan Ruang Kabupaten Blora',
    'keterangan' => 'Dinas Pekerjaan Umum dan Penataan Ruang (DPUPR) Kabupaten Blora memiliki peran strategis dalam pembinaan jasa konstruksi guna mendukung pembangunan infrastruktur yang berkualitas. DPUPR bertugas menyusun kebijakan teknis, mengembangkan sistem informasi konstruksi, serta meningkatkan kapasitas badan usaha konstruksi agar lebih kompetitif dan profesional. Selain itu, DPUPR juga berperan dalam pengawasan dan penjaminan mutu konstruksi, penyuluhan serta bimtek kepada para pelaku jasa konstruksi, serta pengembangan pasar dan kerja sama konstruksi. Dengan pendekatan berbasis regulasi dan inovasi, DPUPR terus berupaya menciptakan ekosistem konstruksi yang tertib, berdaya saing, dan mendukung pertumbuhan ekonomi Kabupaten Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


// MAS JAKI DATA JASA KONSTRUKSI
//======================== ===================================================================================
bujkkontraktor::create([
    'id' => 1, // Ganti dengan ID yang sesuai
    'bujkkontraktorsub_id' => 1, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'Mandra Kanta Unggul',
    'alamat' => 'Desa Tawangrejo 003/005 Kunduran Kab. Blora Jawa Tengah',
    'no_telepon' => '082324908547',
    'email' => 'mandrakantaunggul@gmail.com',
    'nomorindukberusaha' => '0208220001109',
    'pju' => 'WINARSIH',
    'no_akte' => '25',
    'tanggal' => '2024-07-21',
    'nama_notaris' => 'DIAH TRIMURTI SALEH S.E., S.H., M.KN',
    'no_pengesahan' => 'AHU-0049177-AH.01.14',
    // 'tahunpilihan_id' => 4, // Ganti dengan ID yang sesuai
]);

// -----------------------
bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'Muhammad Abdul Rozak',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Lainnya',
    'kode' => 'BG-009',
    'kualifikasi' => 'Kecil',
    'penerbit' => ' LSBU GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2024-05-08',
    'masa_berlaku' => '2026-05-07',
    'nama_psjk' => 'Nizar Sandy Saputra',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Lainnya'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'Muhammad Abdul Rozak',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG-006',
    'kualifikasi' => 'Kecil',
    'penerbit' => ' LSBU GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2024-05-27',
    'masa_berlaku' => '2026-05-26',
    'nama_psjk' => 'Nizar Sandy Saputra',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'Muhammad Abdul Rozak',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'BS-001',
    'kualifikasi' => 'Kecil',
    'penerbit' => ' LSBU GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2024-05-08',
    'masa_berlaku' => '2026-05-07',
    'nama_psjk' => 'Agus Rizqi Arfianto',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jalan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'Muhammad Abdul Rozak',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'BG-002',
    'kualifikasi' => 'Kecil',
    'penerbit' => ' LSBU GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2024-06-28',
    'masa_berlaku' => '2026-06-27',
    'nama_psjk' => 'Nizar Sandy Saputra',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Perkantoran'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'Muhammad Abdul Rozak',
    'sub_klasifikasi_layanan' => 'Konstruksi Jaringan Irigasi dan Drainase',
    'kode' => 'BS-004',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Gamana Krida Bhakti (GAPENSI)',
    'tanggal_terbit' => '2024-05-13',
    'masa_berlaku' => '2026-05-12',
    'nama_psjk' => 'Agus Rizqi Arfianto',
    'sub_kualifikasi_bu' => 'Konstruksi Jaringan Irigasi dan Drainase'
]);

bujkkontraktorsub::create([
    'bujkkontraktor_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => null, // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => null,
    'penerbit' => null,
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => null,
    'sub_kualifikasi_bu' => null
]);

// ---------------

bujkkontraktor::create([
    'id' => 2, // Ganti dengan ID yang sesuai
    'bujkkontraktorsub_id' => 2, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'Ramai Jaya Bumi',
    'alamat' => 'Jl. Gajah Mada No. 24A 000/000 Cepu Kab. Blora Jawa Tengah',
    'no_telepon' => '02965104662',
    'email' => 'ramaijayaabadi18@gmail.com',
    'nomorindukberusaha' => '9120004380419',
    'pju' => 'LINDA CRISTIYAWATI',
    'no_akte' => null,
    'tanggal' => null,
    'nama_notaris' => null,
    'no_pengesahan' => null,
    // 'tahunpilihan_id' => 4,
]);

// -----------------------

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'OKTAVIA COKRODIHARJO',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'BS001',
    'kualifikasi' => 'Menengah',
    'penerbit' => 'LSBU KONSTRUKSI INDONESIA (ASPEKINDO)',
    'tanggal_terbit' => '2024-04-22',
    'masa_berlaku' => '2027-04-21',
    'nama_psjk' => 'MUHAMMAD KHAFID SAHRONI',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jalan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'OKTAVIA COKRODIHARJO',
    'sub_klasifikasi_layanan' => 'Instalasi Minyak Dan Gas',
    'kode' => 'IN004',
    'kualifikasi' => 'Spesialis',
    'penerbit' => 'LSBU KONSTRUKSI INDONESIA (ASPEKINDO)',
    'tanggal_terbit' => '2023-07-14',
    'masa_berlaku' => '2026-07-13',
    'nama_psjk' => 'Dedi Setyawan',
    'sub_kualifikasi_bu' => 'Instalasi Minyak Dan Gas'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'OKTAVIA COKRODIHARJO',
    'sub_klasifikasi_layanan' => 'Instalasi Mekanikal',
    'kode' => 'IN001',
    'kualifikasi' => 'Spesialis',
    'penerbit' => 'LSBU KONSTRUKSI INDONESIA (ASPEKINDO)',
    'tanggal_terbit' => '2023-07-24',
    'masa_berlaku' => '2026-07-23',
    'nama_psjk' => 'Dedi Setyawan',
    'sub_kualifikasi_bu' => 'Instalasi Mekanikal'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Pengerukan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Hunian',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Industri',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Lainnya',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jembatan, Jalan Layang, Fly Over, dan Underpass',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);


bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Instalasi Elektronika',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Minyak dan Gas Bumi',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Penyewaan Alat Konstruksi Dengan Operator',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Aktivitas Keinsinyuran dan Konsultasi Teknis YBDI',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Penyiapan Lahan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Pertambangan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Panas Bumi',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Pembongkaran',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Pemasangan Pondasi Dan Tiang Pancang',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Khusus Lainnya Ytdl',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Instalasi Saluran Air (Plambing)',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Pengerjaan Lantai, Dinding, Peralatan Saniter Dan Plafon',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Pengecatan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Penyelesaian Konstruksi Bangunan Lainnya',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Dekorasi Eksterior',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Khusus Lainnya Ytdl',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Aktivitas Arsitektur',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Jalan Rel',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

// ----------------------------
bujkkontraktor::create([
    'id' => 3, // Ganti dengan ID yang sesuai
    'bujkkontraktorsub_id' => 3, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'TRIBAKTI BINTANG SEJAHTERA',
    'alamat' => 'BERAN 001/003 Blora Kab. Blora Jawa Tengah',
    'no_telepon' => null,
    'email' => 'cvtribaktibintangsejahtera@gmail.com',
    'nomorindukberusaha' => '2601230022904',
    'pju' => 'IRHAM MUHDLORIN',
    'no_akte' => '21',
    'tanggal' => '2024-02-05',
    'nama_notaris' => 'YANI DWI RAHAYU S.H., M.Kn.',
    'no_pengesahan' => 'AHU-0006809-AH.01.16',
    // 'tahunpilihan_id' => 4,
]);


bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 3, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'ASKIA AZAMZAMI',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'BS001',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Gamana Krida Bhakti (GAPENSI)',
    'tanggal_terbit' => '2023-04-16',
    'masa_berlaku' => '2026-04-15',
    'nama_psjk' => 'WAWAN SUWANDI',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jalan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 3, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'ASKIA AZAMZAMI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'BG005',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Gamana Krida Bhakti (GAPENSI)',
    'tanggal_terbit' => '2024-08-07',
    'masa_berlaku' => '2027-08-06',
    'nama_psjk' => 'AHMAD FAIZAL ABADI',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Kesehatan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 3, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'ASKIA AZAMZAMI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG006',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Gamana Krida Bhakti (GAPENSI)',
    'tanggal_terbit' => '2024-08-07',
    'masa_berlaku' => '2027-08-07',
    'nama_psjk' => 'AHMAD FAIZAL ABADI',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);


bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 3, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Lainnya',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 3, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 3, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Jaringan Irigasi dan Drainase',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

// ----------------------------
bujkkontraktor::create([
    'id' => 4, // Ganti dengan ID yang sesuai
    'bujkkontraktorsub_id' => 4, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'DIZA PERMATA HATI',
    'alamat' => 'DESA BANDUNGROJO RT. 001 RW. 001, Ngawen,Kab. Blora',
    'no_telepon' => '082138576435',
    'email' => 'diza_permatahati@yahoo.com',
    'nomorindukberusaha' => '9120004152754',
    'pju' => 'MOHAMAD RIDWAN',
    'no_akte' => '7',
    'tanggal' => null,
    'nama_notaris' => 'ERLY MAIDA, SH., M.KN',
    'no_pengesahan' => 'AHU-0005350-AH.01.17',
    // 'tahunpilihan_id' => 4,
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD KHOLIL',
    'sub_klasifikasi_layanan' => 'Konstruksi Jaringan Irigasi dan Drainase',
    'kode' => 'BS004',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-10-20',
    'masa_berlaku' => '2026-10-19',
    'nama_psjk' => 'RAHMAT MAULANA',
    'sub_kualifikasi_bu' => 'Konstruksi Jaringan Irigasi dan Drainase'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD KHOLIL',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Prasarana Sumber Daya Air',
    'kode' => 'BS010',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-04-30',
    'masa_berlaku' => '2026-10-19',
    'nama_psjk' => 'SUPARMAN',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Prasarana Sumber Daya Air'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD KHOLIL',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'BS001',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-04-30',
    'masa_berlaku' => '2025-04-29',
    'nama_psjk' => 'RAHMAT MAULANA',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jalan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD KHOLIL',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'BG002',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2022-04-30',
    'masa_berlaku' => '2025-04-29',
    'nama_psjk' => 'IMAM MARUF',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Perkantoran'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD KHOLIL',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jembatan, Jalan Layang, Fly Over, dan Underpass',
    'kode' => 'BS002',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2024-02-28',
    'masa_berlaku' => '2027-02-27',
    'nama_psjk' => 'RAHMAT MAULANA',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jembatan, Jalan Layang, Fly Over, dan Underpass'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Pengolahan Air Bersih',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Prasarana dan Sarana Sistem Pengolahan Limbah Padat, Cair, dan Gas',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Lainnya',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Jalan Rel',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Terowongan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Hunian',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

// ---- DATA 5 -----------------
bujkkontraktor::create([
    'id' => 5, // Ganti dengan ID yang sesuai
    'bujkkontraktorsub_id' => 5, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'TUNGGAL GUNA KARYA',
    'alamat' => 'DESA GENENG 003/001 Jepon Kab. Blora Jawa Tengah',
    'no_telepon' => '082314931935',
    'email' => 'cvtunggalgunakarya@gmail.com',
    'nomorindukberusaha' => '2507220064975',
    'pju' => 'CUNCUN BRIONO',
    'no_akte' => '360',
    'tanggal' => '2022-06-20',
    'nama_notaris' => 'NIKEN SUKMAWATI S.H., M.KN.',
    'no_pengesahan' => 'AHU-0042025-AH.01.14',
    // 'tahunpilihan_id' => 4,
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'CUNCUN BRIONO',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG006',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2022-08-20',
    'masa_berlaku' => '2025-08-19',
    'nama_psjk' => 'SRI LESTARI',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'CUNCUN BRIONO',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'BS001',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2022-08-20',
    'masa_berlaku' => '2025-08-19',
    'nama_psjk' => 'DWI FINGKI SAPUTRO',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jalan'
]);


bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Hunian',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Industri',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Tempat Hiburan dan Olahraga',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jembatan, Jalan Layang, Fly Over, dan Underpass',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Jaringan Irigasi dan Drainase',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Pengolahan Air Bersih',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Prasarana dan Sarana Sistem Pengolahan Limbah Padat, Cair, dan Gas',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

// ---- DATA 6 -----------------
bujkkontraktor::create([
    'id' => 6, // Ganti dengan ID yang sesuai
    'bujkkontraktorsub_id' => 6, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'TRI GRAHA MEGAH JAYA',
    'alamat' => 'DESA PATALAN 003/005 Kab. Blora Jawa Tengah',
    'no_telepon' => '081325225577',
    'email' => 'cvtrigrahamegahjayapatalan@yahoo.com',
    'nomorindukberusaha' => '220102311534',
    'pju' => 'SUTRISNO',
    'no_akte' => '413',
    'tanggal' => '2022-02-21',
    'nama_notaris' => 'NIKEN SUKMAWATI S.H., M.Kn.',
    'no_pengesahan' => 'AHU-0011469-AH.01.16',
    // 'tahunpilihan_id' => 4,
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'SUTRISNO',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'BG005',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Gamana Krida Bhakti (GAPENSI)',
    'tanggal_terbit' => '2023-03-07',
    'masa_berlaku' => '2026-03-06',
    'nama_psjk' => 'BANGKIT DWI CAHYO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Kesehatan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'SUTRISNO',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'BG002',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Gamana Krida Bhakti (GAPENSI)',
    'tanggal_terbit' => '2023-03-07',
    'masa_berlaku' => '2026-03-06',
    'nama_psjk' => 'BANGKIT DWI CAHYO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Perkantoran'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'SUTRISNO',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG006',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Gamana Krida Bhakti (GAPENSI)',
    'tanggal_terbit' => '2023-02-23',
    'masa_berlaku' => '2026-06-22',
    'nama_psjk' => 'BANGKIT DWI CAHYO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Hunian',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Lainnya',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Tempat Hiburan dan Olahraga',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Jaringan Irigasi dan Drainase',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Pengolahan Air Bersih',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Pembuatan/Pengeboran Sumur Air Tanah',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Prasarana Sumber Daya Air',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

// ---- DATA 7 BUJK KONTRAKTOR -----------------
bujkkontraktor::create([
    'id' => 7, // Ganti dengan ID yang sesuai
    'bujkkontraktorsub_id' => 7, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'BERKAH HPL MANDIRI',
    'alamat' => 'DESA PENGKOLREJO 001/004 Japah Kab. Blora Jawa Tengah',
    'no_telepon' => '08122607371',
    'email' => 'cvberkahhplmandiri@gmail.com',
    'nomorindukberusaha' => '1305230017493',
    'pju' => 'RUSMADI',
    'no_akte' => '16',
    'tanggal' => '2023-01-16',
    'nama_notaris' => 'DIAH TRIMURTI SALEH S.E., S.H., M.KN.',
    'no_pengesahan' => 'AHU-0004908-AH.01.14',
    // 'tahunpilihan_id' => 4,
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 7, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'RUSMADI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'BG002',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-06-12',
    'masa_berlaku' => '2026-06-11',
    'nama_psjk' => 'MUKHSIN BUDI IRWANTO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Perkantoran'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 7, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'RUSMADI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG006',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-06-12',
    'masa_berlaku' => '2026-06-11',
    'nama_psjk' => 'MUKHSIN BUDI IRWANTO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 7, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'RUSMADI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Lainnya',
    'kode' => 'BG009',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-06-12',
    'masa_berlaku' => '2026-06-11',
    'nama_psjk' => 'MUKHSIN BUDI IRWANTO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Lainnya'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 7, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'RUSMADI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'BG005',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-06-12',
    'masa_berlaku' => '2026-06-11',
    'nama_psjk' => 'MUKHSIN BUDI IRWANTO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Kesehatan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 7, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'RUSMADI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perbelanjaan',
    'kode' => 'BG004',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2024-02-27',
    'masa_berlaku' => '2026-02-26',
    'nama_psjk' => 'MUKHSIN BUDI IRWANTO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Perbelanjaan'
]);

// ---- DATA 8 BUJK KONTRAKTOR -----------------
bujkkontraktor::create([
    'id' => 8, // Ganti dengan ID yang sesuai
    'bujkkontraktorsub_id' => 8, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'KARYA DWI PUTRI',
    'alamat' => 'DESA TODANAN, Desa/Kelurahan Todanan, Kec. Todanan, Kab. Blora, Provinsi Jawa Tengah',
    'no_telepon' => '085212848598',
    'email' => 'cvkaryadwiputri2023@gmail.com',
    'nomorindukberusaha' => '9120007580891',
    'pju' => 'SRI WAHYUNI',
    'no_akte' => '17',
    'tanggal' => null,
    'nama_notaris' => 'DIAH TRIMURTI SALEH S.E., S.H., M.Kn.',
    'no_pengesahan' => 'AHU-0022831-AH.01.16',
    // 'tahunpilihan_id' => 4,
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'SRI WAHYUNI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG006',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2023-07-21',
    'masa_berlaku' => '2026-07-20',
    'nama_psjk' => 'RISQI PUTRA AGUS NUR ALIF',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'SRI WAHYUNI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Lainnya',
    'kode' => 'BG009',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2023-07-21',
    'masa_berlaku' => '2026-07-20',
    'nama_psjk' => 'RISQI PUTRA AGUS NUR ALIF',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Lainnya'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'SRI WAHYUNI',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'BS001',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2023-07-21',
    'masa_berlaku' => '2026-07-20',
    'nama_psjk' => 'RISQI PUTRA AGUS NUR ALIF',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jalan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'SRI WAHYUNI',
    'sub_klasifikasi_layanan' => 'Konstruksi Jaringan Irigasi dan Drainase',
    'kode' => 'BS004',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2023-07-21',
    'masa_berlaku' => '2026-07-20',
    'nama_psjk' => 'RISQI PUTRA AGUS NUR ALIF',
    'sub_kualifikasi_bu' => 'Konstruksi Jaringan Irigasi dan Drainase'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Prasarana Sumber Daya Air',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Landasan Pacu Pesawat Terbang',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Jembatan Dan Jalan Layang',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

// ---- DATA 9 BUJK KONTRAKTOR -----------------
bujkkontraktor::create([
    'id' => 9, // Ganti dengan ID yang sesuai
    'bujkkontraktorsub_id' => 9, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'CV. DHA YASA MULIA',
    'alamat' => 'DUKUH KALISANGKU, Desa/Kelurahan Gempolrejo, Kec. Tunjungan, Kab. Blora, Provinsi Jawa Tengah',
    'no_telepon' => '81326704319',
    'email' => 'dhayasamulia@yahoo.co.id',
    'nomorindukberusaha' => '9120008500283',
    'pju' => 'MOHAMAD YASIM EFENDI',
    'no_akte' => '93',
    'tanggal' => '2023-03-09',
    'nama_notaris' => 'YANI DWI RAHAYU S.H., M.Kn.',
    'no_pengesahan' => 'AHU-0012312-AH.01.16',
    // 'tahunpilihan_id' => 4,
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 9, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD YASIM EFENDI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'BG005',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2024-05-03',
    'masa_berlaku' => '2026-05-02',
    'nama_psjk' => 'ISHLAH YUDHA AHMAD NUYA EFENDI',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Kesehatan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 9, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD YASIM EFENDI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG006',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2023-03-02',
    'masa_berlaku' => '2026-03-01',
    'nama_psjk' => 'DJUMAIN',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 9, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD YASIM EFENDI',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'BS001',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2023-05-31',
    'masa_berlaku' => '2026-05-30',
    'nama_psjk' => 'AHMAD JUARI',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jalan'
]);

// ---- DATA 10 BUJK KONTRAKTOR -----------------
bujkkontraktor::create([
    'id' => 10, // Ganti dengan ID yang sesuai
    'bujkkontraktorsub_id' => 10, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'RASI SINAR RAYA',
    'alamat' => 'DK. KALISANGKU, Desa/Kelurahan Gempolrejo, Kec. Tunjungan, Kab. Blora, Provinsi Jawa Tengah',
    'no_telepon' => '085218340935',
    'email' => 'rasinaraya@yahoo.com',
    'nomorindukberusaha' => '9120202322819',
    'pju' => 'WIJI LESTIYOWATI',
    'no_akte' => null,
    'tanggal' => '2018-06-06',
    'nama_notaris' => 'ELIZABETH ESTININGSIH, S.H.',
    'no_pengesahan' => '72/CV/2018/PN.BLA',
    // 'tahunpilihan_id' => 4,
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 10, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'WIJI LESTIYOWATI ',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG006',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'LSBU GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-05-08',
    'masa_berlaku' => '2026-05-07',
    'nama_psjk' => 'EKO SETYO NUGROHO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 10, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'WIJI LESTIYOWATI ',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Pengolahan Air Bersih',
    'kode' => 'BS005',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'LSBU GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-05-08',
    'masa_berlaku' => '2026-05-07',
    'nama_psjk' => 'EDI AGUS SETIAWAN, ST',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Pengolahan Air Bersih'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 10, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 10, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 10, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jembatan, Jalan Layang, Fly Over, dan Underpass',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

// bujkkontraktorsub ::create([
//     'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
//     'nama_pengurus' => '-',
//     'sub_klasifikasi_layanan' => 'Konstruksi Gedung Hunian',
//     'kode' => 'Persyaratan Belum Lengkap (OSS)',
//     'kualifikasi' => '-',
//     'penerbit' => '-',
//     'tanggal_terbit' => null,
//     'masa_berlaku' => null,
//     'nama_psjk' => '-',
//     'sub_kualifikasi_bu' => '-'
// ]);


// DATA BUJK KONSULTAN MAS JAKI APLIKASI
//======================== ===================================================================================
bujkkonsultan::create([
    'id' => 1, // Ganti dengan ID yang sesuai
    'bujkkonsultansub_id' => 1, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1,
    'namalengkap' => 'Tiara Energi',
    'alamat' => 'Desa Gersi, Desa/Kelurahan Gersi, Kec. Jepon, Kab. Blora, Provinsi Jawa Tengah',
    'no_telepon' => '081325657254',
    'email' => 'tiarasinergi@gmail.com ',
    'nomorindukberusaha' => '9120312062216',
    'pju' => 'MOCHAMAD ARIANTO',
    'no_akte' => '03',
    'tanggal' => '2024-06-10',
    'nama_notaris' => 'Selamet Mulyono M.Kn.',
    'no_pengesahan' => 'AHU-0030674-AH.01.16 Tahun 2022'
]);
//

bujkkonsultansub ::create([
    'bujkkonsultan_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOCHAMAD ARIANTO',
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian',
    'kode' => ' RK001',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2024-12-23',
    'masa_berlaku' => '2026-12-22',
    'nama_psjk' => 'SITI JUMROK ATUN MUALIMAH, ST',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => null, // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Aktivitas Arsitektur',
    'kode' => null,
    'kualifikasi' => 'Belum Memenuhi Syarat',
    'penerbit' => null,
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => null,
    'sub_kualifikasi_bu' => null
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => null, // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Aktivitas Keinsinyuran dan Konsultasi Teknis YBDI',
    'kode' => null,
    'kualifikasi' => 'Belum Memenuhi Syarat',
    'penerbit' => null,
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => null,
    'sub_kualifikasi_bu' => null
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => null, // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Aktivitas Desain Interior',
    'kode' => null,
    'kualifikasi' => 'Belum Memenuhi Syarat',
    'penerbit' => null,
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => null,
    'sub_kualifikasi_bu' => null
]);

//======================== ===================================================================================
// DATA 2 BUJK KONSULTAN
bujkkonsultan::create([
    'id' => 2, // Ganti dengan ID yang sesuai
    'bujkkonsultansub_id' => 2, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 5,
    'namalengkap' => 'KARYA INTI KONSULTAN',
    'alamat' => 'DUKUH SENDANG KLAMPOK, Desa/Kelurahan Tempurejo, Kec. Blora, Kab. Blora, Provinsi Jawa Tengah ',
    'no_telepon' => '082133220199',
    'email' => 'karyaintikonsultan@gmail.com',
    'nomorindukberusaha' => '2101230013886',
    'pju' => 'AHMAD FAHRUDIN',
    'no_akte' => '55',
    'tanggal' => '2021-01-11',
    'nama_notaris' => 'YANI DWI RAHAYU S.H., M.KN.',
    'no_pengesahan' => 'AHU-0004201-AH.01.14'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'AHMAD FAHRUDIN', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian',
    'kode' =>  'RK001',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2023-05-16',
    'masa_berlaku' => '2026-05-15',
    'nama_psjk' => 'BAGUS SETIYO BUDI, S.T',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'AHMAD FAHRUDIN', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi',
    'kode' =>  'RK003',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2023-04-05',
    'masa_berlaku' => '2026-04-04',
    'nama_psjk' => 'BAGUS SETIYO BUDI, S.T',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi'
]);


//======================== ===================================================================================
// DATA 3 BUJK KONSULTAN
bujkkonsultan::create([
    'id' => 3, // Ganti dengan ID yang sesuai
    'bujkkonsultansub_id' => 3, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 4,
    'namalengkap' => 'BEGAWAN ABIYOSO',
    'alamat' => ' DUKUH WUNI, Desa/Kelurahan Balong, Kec. Jepon, Kab. Blora, Provinsi Jawa Tengah ',
    'no_telepon' => '085292559491',
    'email' => 'begawanabiyoso2023@gmail.com ',
    'nomorindukberusaha' => '220001632033',
    'pju' => 'TEJO',
    'no_akte' => '72',
    'tanggal' => '2020-06-15',
    'nama_notaris' => 'YANI DWI RAHAYU S.H., M.KN.',
    'no_pengesahan' => 'AHU-0019129-AH.01.16'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 3, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'TEJO, S.T., M.M. ', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi',
    'kode' =>  'RK003',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2022-05-22',
    'masa_berlaku' => '2026-05-21',
    'nama_psjk' => 'FERONIKA MIVONIA, ST',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi'
]);



//======================== ===================================================================================
// DATA 4 BUJK KONSULTAN
bujkkonsultan::create([
    'id' => 4, // Ganti dengan ID yang sesuai
    'bujkkonsultansub_id' => 4, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 2,
    'namalengkap' => 'GRAHACIPTA PERKASA',
    'alamat' => ' Ds. Tambahrejo, Desa/Kelurahan Tambahrejo, Kec. Tunjungan, Kab. Blora, Provinsi Jawa Tengah',
    'no_telepon' => '081327421757',
    'email' => 'grahaciptaperkasa@yahoo.co.id',
    'nomorindukberusaha' => '9120404852668',
    'pju' => 'TEGUH PRIYANTO',
    'no_akte' => '152',
    'tanggal' => '2010-10-23',
    'nama_notaris' => 'ELIZABETH ESTININGSIH, S.H.',
    'no_pengesahan' => '14 / CV / 2011 / PN.Bla'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'TEGUH PRIYANTO, ST.,MT', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian',
    'kode' =>  'RK001',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2022-10-07',
    'masa_berlaku' => '2025-10-06',
    'nama_psjk' => 'SULTON ERBOWO, ST ',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'TEGUH PRIYANTO, ST.,MT', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air',
    'kode' =>  'RK002',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2023-06-14',
    'masa_berlaku' => '2026-06-13',
    'nama_psjk' => 'EDDY SAPTONO, ST ',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'TEGUH PRIYANTO, ST.,MT', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi',
    'kode' =>  'RK003',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2022-07-10',
    'masa_berlaku' => NULL,
    'nama_psjk' => 'YOGA ALDI DWI LAKSONO',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi'
]);


//======================== ===================================================================================
// DATA 5 BUJK KONSULTAN
bujkkonsultan::create([
    'id' => 5, // Ganti dengan ID yang sesuai
    'bujkkonsultansub_id' => 5, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 3,
    'namalengkap' => 'BEKONS',
    'alamat' => 'Dukuh Bengir, Desa/Kelurahan Keser, Kec. Tunjungan, Kab. Blora, Provinsi Jawa Tengah ',
    'no_telepon' => '085326420963',
    'email' => 'gapuro_ireng@yahoo.com ',
    'nomorindukberusaha' => '220004621089',
    'pju' => 'UTOMO, SARJANA',
    'no_akte' => '34',
    'tanggal' => '2016-03-16',
    'nama_notaris' => 'BAMBANG HARIJANTO, SH., M.KN',
    'no_pengesahan' => 'AHU-0028069-AH.01.15 Tahun 2020'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'UTOMO, ST', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Arsitektural Bangunan Gedung Hunian dan Non Hunian',
    'kode' =>  'AR001',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2023-08-09',
    'masa_berlaku' => '2026-08-08',
    'nama_psjk' => 'AGNIE SWASTIKA NINGRUM, S.Ars',
    'sub_kualifikasi_bu' => 'Jasa Arsitektural Bangunan Gedung Hunian dan Non Hunian'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'UTOMO, ST', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian',
    'kode' =>  ' RK001 ',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2022-11-16',
    'masa_berlaku' => '2025-11-17',
    'nama_psjk' => 'SETYO NIHANTORO, S.T. ',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'UTOMO, ST', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air',
    'kode' =>  'RK002',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2022-11-18',
    'masa_berlaku' => '2025-11-17',
    'nama_psjk' => 'LARTO KUNDARTO, ST',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air'
]);



//======================== ===================================================================================
// DATA NAMA SEKOLAH MAS JAKI BLORA
profiljenispekerjaan::create([
    'id' => '1',
    'jenispekerjaan' => 'Checkdam',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '2',
    'jenispekerjaan' => 'Belanja Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '3',
    'jenispekerjaan' => 'Drainase',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '4',
    'jenispekerjaan' => 'Embung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '5',
    'jenispekerjaan' => 'Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '6',
    'jenispekerjaan' => 'Irigasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '7',
    'jenispekerjaan' => 'Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '8',
    'jenispekerjaan' => 'Jembatan   ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '9',
    'jenispekerjaan' => 'Pasar',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '10',
    'jenispekerjaan' => 'Ruang Terbuka Hijau',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '11',
    'jenispekerjaan' => 'SPAM',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '12',
    'jenispekerjaan' => 'Bangunan Air',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '13',
    'jenispekerjaan' => 'Belanja Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '14',
    'jenispekerjaan' => 'Fasilitas Umum',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '15',
    'jenispekerjaan' => 'Pipanisasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '16',
    'jenispekerjaan' => 'Sumur',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '17',
    'jenispekerjaan' => 'Talud',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== ===================================================================================
// DATA NAMA SEKOLAH MAS JAKI BLORA
sumberdana::create([
    'id' => '1',
    'sumberdana' => 'APBN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sumberdana::create([
    'id' => '2',
    'sumberdana' => 'APBD',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== ===================================================================================
// DATA NAMA SEKOLAH MAS JAKI BLORA

allskktenagakerjablora::create([
    'agendaskk_id'            => 1,
    'user_id'                       => 1,
    'jabatankerja' => 'Personil Keselamatan dan Kesehatan Kerja Jenjang 4',
    'tempatlahir' => 'Bojonegoro',
    'ttl' => '1989-04-14',
    'jeniskelamin' => 'Laki-laki',
    'nik' => '3522251404890001',
    'alamat' => 'RT 5 RW 7 dukuh cepu kidul,kelurahan cepu,kec.cepu,kab.blora,jateng',
    'notelepon' => '087730573343',
    'email' => 'arifwahyudicc548@gmail.com',
    'jenjangpendidikan_id' => 3,
    'namasekolah_id' => 23,
    'tahunlulus' => '2007',
    'tahunpilihan_id' => 5,
    'uploadktp' => 'https://drive.google.com/open?id=1N_6cVJ44YPAzK8Kr5qCQuiCfSXTkB9n6',
    'uploadfoto' => 'https://drive.google.com/open?id=1FNHTKVU6oowro4CJlzLpj3FG-YdRi6ki',
    'uploadijazah' => 'https://drive.google.com/open?id=14IoOuj_gp6LDGGnsrha11DARikUWnDHe',
    'uploadpengalaman' => 'https://drive.google.com/open?id=1rWXn8FTSBirY94dqrT-T8au7R5bWaFrL',
    'uploadnpwp' => 'https://drive.google.com/open?id=1-3gPp9RYiRCWu1fjqskNzdIFtnzFcBH4',
    'uploaddaftarriwayathidup' => 'https://drive.google.com/open?id=1plhsgum_GVs_HLtVu--Ke7bku8eKfDEU',
    'namaasosiasi' => 'Perorangan',
    'punyaskk' => 'TIDAK',
    'punyasiki' => 'TIDAK',
    'siappatuh' => 'BERSEDIA',
    'verifikasipu' => 'LULUS',
    'verifikasilps' => 'LULUS',
]);

allskktenagakerjablora::create([
    'agendaskk_id'            => 1,
    'user_id'                       => 2,
    'jabatankerja' => 'Personil Keselamatan dan Kesehatan Kerja Jenjang 4',
    'tempatlahir' => 'Bojonegoro',
    'ttl' => '1989-04-14',
    'jeniskelamin' => 'Laki-laki',
    'nik' => '3522251404890034',
    'alamat' => 'RT 5 RW 7 dukuh cepu kidul,kelurahan cepu,kec.cepu,kab.blora,jateng',
    'notelepon' => '087730573343',
    'email' => 'arifwahyudicc548@gmail.com',
    'jenjangpendidikan_id' => 3,
    'namasekolah_id' => 23,
    'tahunlulus' => '2007',
    'tahunpilihan_id' => 5,
    'uploadktp' => 'https://drive.google.com/open?id=1N_6cVJ44YPAzK8Kr5qCQuiCfSXTkB9n6',
    'uploadfoto' => 'https://drive.google.com/open?id=1FNHTKVU6oowro4CJlzLpj3FG-YdRi6ki',
    'uploadijazah' => 'https://drive.google.com/open?id=14IoOuj_gp6LDGGnsrha11DARikUWnDHe',
    'uploadpengalaman' => 'https://drive.google.com/open?id=1rWXn8FTSBirY94dqrT-T8au7R5bWaFrL',
    'uploadnpwp' => 'https://drive.google.com/open?id=1-3gPp9RYiRCWu1fjqskNzdIFtnzFcBH4',
    'uploaddaftarriwayathidup' => 'https://drive.google.com/open?id=1plhsgum_GVs_HLtVu--Ke7bku8eKfDEU',
    'namaasosiasi' => 'Perorangan',
    'punyaskk' => 'TIDAK',
    'punyasiki' => 'TIDAK',
    'siappatuh' => 'BERSEDIA',
    'verifikasipu' => 'LULUS',
    'verifikasilps' => 'TIDAK LULUS',
]);

allskktenagakerjablora::create([
    'agendaskk_id'            => 1,
    'user_id'                       => 3,
    'jabatankerja' => 'Personil Keselamatan dan Kesehatan Kerja Jenjang 4',
    'tempatlahir' => 'Bojonegoro',
    'ttl' => '1989-04-14',
    'jeniskelamin' => 'Laki-laki',
    'nik' => '3522251404890043',
    'alamat' => 'RT 5 RW 7 dukuh cepu kidul,kelurahan cepu,kec.cepu,kab.blora,jateng',
    'notelepon' => '087730573343',
    'email' => 'arifwahyudicc548@gmail.com',
    'jenjangpendidikan_id' => 3,
    'namasekolah_id' => 23,
    'tahunlulus' => '2007',
    'tahunpilihan_id' => 5,
    'uploadktp' => 'https://drive.google.com/open?id=1N_6cVJ44YPAzK8Kr5qCQuiCfSXTkB9n6',
    'uploadfoto' => 'https://drive.google.com/open?id=1FNHTKVU6oowro4CJlzLpj3FG-YdRi6ki',
    'uploadijazah' => 'https://drive.google.com/open?id=14IoOuj_gp6LDGGnsrha11DARikUWnDHe',
    'uploadpengalaman' => 'https://drive.google.com/open?id=1rWXn8FTSBirY94dqrT-T8au7R5bWaFrL',
    'uploadnpwp' => 'https://drive.google.com/open?id=1-3gPp9RYiRCWu1fjqskNzdIFtnzFcBH4',
    'uploaddaftarriwayathidup' => 'https://drive.google.com/open?id=1plhsgum_GVs_HLtVu--Ke7bku8eKfDEU',
    'namaasosiasi' => 'Perorangan',
    'punyaskk' => 'TIDAK',
    'punyasiki' => 'TIDAK',
    'siappatuh' => 'BERSEDIA',
    'verifikasipu' => 'TIDAK LULUS',
    'verifikasilps' => 'TIDAK LULUS',
]);

// fort
//======================== ===================================================================================
// DATA NAMA SEKOLAH MAS JAKI BLORA
namasekolah::create([
    'id' => '1',
    'namasekolah' => 'Akademi Teknologi Ronggolawe',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '2',
    'namasekolah' => 'Institut Teknologi Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '3',
    'namasekolah' => 'Khozinatul Ulum Todanan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '4',
    'namasekolah' => 'MA Al-Falah Tanakan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '5',
    'namasekolah' => 'MA Khozinatul Ulum',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '6',
    'namasekolah' => 'MA Padangan Bojonegoro',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '7',
    'namasekolah' => 'MAN Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '8',
    'namasekolah' => 'PKBM Ngudi Luhur Bojonegoro',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '9',
    'namasekolah' => 'Politeknik Negeri Semarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '10',
    'namasekolah' => 'SMK Ma`arif Tunjungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '11',
    'namasekolah' => 'Sekolah Teknologi Ronggolawe Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '12',
    'namasekolah' => 'SKB Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '13',
    'namasekolah' => 'SMA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '14',
    'namasekolah' => 'SMA 1 Ngawen',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '15',
    'namasekolah' => 'SMA Muhammadiyah 1 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '16',
    'namasekolah' => 'SMA Muhammadiyah Prambanan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '17',
    'namasekolah' => 'SMA Negeri 1 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '18',
    'namasekolah' => 'SMA Negeri 1 Jepon',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '19',
    'namasekolah' => 'SMA Negeri 2 Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '20',
    'namasekolah' => 'SMA Negeri 1 Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '21',
    'namasekolah' => 'SMA Negeri 1 Randublatung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '22',
    'namasekolah' => 'SMA Negeri 2 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '23',
    'namasekolah' => 'SMA Negeri 1 Kasiman Bojonegoro',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '24',
    'namasekolah' => 'SMA PGRI 1 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '25',
    'namasekolah' => 'SMA PGRI Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '26',
    'namasekolah' => 'SMEA Negeri Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '27',
    'namasekolah' => 'SMK Katolik Santo Plus Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '28',
    'namasekolah' => 'SMK Khozinatul Ulum Todanan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '29',
    'namasekolah' => 'SMK Kristen Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '30',
    'namasekolah' => 'SMK Migas Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '31',
    'namasekolah' => 'SMK Muhammadiyah 1 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '32',
    'namasekolah' => 'SMK Muhammadiyah Rembang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '33',
    'namasekolah' => 'SMK Muhammadiyah Todanan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '34',
    'namasekolah' => 'SMK Negeri 1 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '35',
    'namasekolah' => 'SMK Negeri 1 Kunduran',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '36',
    'namasekolah' => 'SMK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '37',
    'namasekolah' => 'SMK Negeri 1 Pekalongan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '38',
    'namasekolah' => 'SMK Negeri Ngraho',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '39',
    'namasekolah' => 'STM Migas Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '40',
    'namasekolah' => 'STM Negeri 1 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '41',
    'namasekolah' => 'STM Negeri 1 Rembang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '42',
    'namasekolah' => 'STM Pemda Tingkat II Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '43',
    'namasekolah' => 'STMIK El-Rahma',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '44',
    'namasekolah' => 'STTR Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '45',
    'namasekolah' => 'Universitas An Nuur Purwodadi ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '46',
    'namasekolah' => 'Universitas Dipenogoro',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '47',
    'namasekolah' => 'Universitas Islam Sultan Agung Semarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


namasekolah::create([
    'id' => '48',
    'namasekolah' => 'Universitas Muhammadiyah Surakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '49',
    'namasekolah' => 'Universitas Negeri Malang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '50',
    'namasekolah' => 'Universitas Negeri Semarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '51',
    'namasekolah' => 'Universitas Pembangunan Nasional',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '52',
    'namasekolah' => 'Universitas Sam Ratulangi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '53',
    'namasekolah' => 'Universitas Semarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '54',
    'namasekolah' => 'Universitas Terbuka',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '55',
    'namasekolah' => 'Yayasan Yohanes Gabrel',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '56',
    'namasekolah' => 'Sekolah Tinggi Teknologi Nasional Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '57',
    'namasekolah' => 'Institut Adhi Thama Surabaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '58',
    'namasekolah' => 'Institut Keguruan Dan Ilmu Pendidikan Veteran Semarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '59',
    'namasekolah' => 'Institut Sains Dan Teknologi Akprind Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '60',
    'namasekolah' => 'Institut Teknologi Nasional Malang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '61',
    'namasekolah' => 'Institut Teknologi PLN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '62',
    'namasekolah' => 'Institut Teknologi Sepuluh Nopember Surabaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '63',
    'namasekolah' => 'Institut Teknologi Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '64',
    'namasekolah' => 'Institut Teknologi Pembangunan Surabaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '65',
    'namasekolah' => 'Katholik Santo Yosef Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '66',
    'namasekolah' => 'MA Negeri Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '67',
    'namasekolah' => 'MA Al-Hidayah',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '68',
    'namasekolah' => 'MA As Syakur Banjarejo',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '69',
    'namasekolah' => 'Universitas Gadjah Mada',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '70',
    'namasekolah' => 'Non Pendidikan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '71',
    'namasekolah' => 'Paket C',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '72',
    'namasekolah' => 'PGRI 5 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '73',
    'namasekolah' => 'Politeknik Negeri Bandung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '75',
    'namasekolah' => 'SD Negeri Karangboyo',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '76',
    'namasekolah' => 'SMK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '77',
    'namasekolah' => 'Sekolah Teknologi Menengah Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '78',
    'namasekolah' => 'Sekolah Teknologi Negeri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '79',
    'namasekolah' => 'STAI Al-Muhammad Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '80',
    'namasekolah' => 'STAI Muhammadiyah Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '81',
    'namasekolah' => 'Sekolah Tinggi Arsitektur YKPN Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '82',
    'namasekolah' => 'Sekolah Tinggi Teknik Malang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '83',
    'namasekolah' => 'Sekolah Tinggi Teknik Malang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '84',
    'namasekolah' => 'Sekolah Vokasi ITS',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '85',
    'namasekolah' => 'SMA Negeri 9 Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '86',
    'namasekolah' => 'SMA Darul Ulum 6 Baureno',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '87',
    'namasekolah' => 'SMA Islam Sultan Agung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '88',
    'namasekolah' => 'SMA MAD Negeri Lasem',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '89',
    'namasekolah' => 'SMA Miftahul Ulum Ngawen',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '90',
    'namasekolah' => 'SMA Muhamadiyah Kabupaten Sleman',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '91',
    'namasekolah' => 'SMA Muhamadiyah 5 Todanan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '92',
    'namasekolah' => 'SMA Negeri 2 Ngawen',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '93',
    'namasekolah' => 'SMA Negeri 1 Tunjungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '94',
    'namasekolah' => 'SMA Negeri 1 Ngawen',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '95',
    'namasekolah' => 'SMA Negeri 1 Tunjungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '96',
    'namasekolah' => 'SMA Negeri 1 Toroh',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '97',
    'namasekolah' => 'SMA Negeri Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '98',
    'namasekolah' => 'SMA Negeri Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '99',
    'namasekolah' => 'SMA Negeri Padangan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '100',
    'namasekolah' => 'SMA PEMDA Wirosari Grobogan ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '101',
    'namasekolah' => 'SMEA Negeri Cepu ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '102',
    'namasekolah' => 'SMEA Negeri Blora ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '103',
    'namasekolah' => 'SMK Al Alif Tunjungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '104',
    'namasekolah' => 'SMK Al-Ghazali Jiken',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '105',
    'namasekolah' => 'SMK Al-Hikmah Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '106',
    'namasekolah' => 'SMK Bhakti Husada PGRI Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '107',
    'namasekolah' => 'SMK Katholik Santo Pius Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '108',
    'namasekolah' => 'SMK Muhammadiyah 2 Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '109',
    'namasekolah' => 'SMK Negeri 1 Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '110',
    'namasekolah' => 'SMA Negeri 1 Kunduran ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '111',
    'namasekolah' => 'SMA Negeri 1 Surabaya ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '112',
    'namasekolah' => 'SMK Negeri 2 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '113',
    'namasekolah' => 'SMK Negeri 2 Bojonegoro',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '114',
    'namasekolah' => 'SMK Negeri 2 Purwodadi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '115',
    'namasekolah' => 'SMK Negeri Rembang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '117',
    'namasekolah' => 'SMK NU Tunjungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '118',
    'namasekolah' => 'SMK Pesantren Sabili Muttaqien Randublatung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '119',
    'namasekolah' => 'SMK Sultan Agung Ngawen',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '120',
    'namasekolah' => 'SMK Muhammadiyah 1 Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '121',
    'namasekolah' => 'SMK Pancasila',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '122',
    'namasekolah' => 'SMP Negeri 1 Menden',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '123',
    'namasekolah' => 'SMP Negeri 2 Kedungtuban',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '124',
    'namasekolah' => 'SMA Negeri 1 Ngraho',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '125',
    'namasekolah' => 'SMA Negeri 1 Tunjungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '126',
    'namasekolah' => 'SMA Negeri 16 Bandung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '127',
    'namasekolah' => 'SMU NU 3 Mallimin Weleri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '128',
    'namasekolah' => 'SMU ST. Louis Randublatung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '130',
    'namasekolah' => 'SMU Katholik Wijayakusuma Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '131',
    'namasekolah' => 'STIE Dharma Putra',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '132',
    'namasekolah' => 'STM Berbau Tuan ST Yosep Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '133',
    'namasekolah' => 'STM Kudus',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '134',
    'namasekolah' => 'STM Negeri Tunjungan Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '135',
    'namasekolah' => 'STM Negeri Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '136',
    'namasekolah' => 'STM Negeri Rembang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '137',
    'namasekolah' => 'STM Magetan 1 YKP',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '138',
    'namasekolah' => 'Universitas Dian Nuswantoro',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '139',
    'namasekolah' => 'Universitas 17 Agustus 1945 Semarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '140',
    'namasekolah' => 'Universitas Atmajaya Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '141',
    'namasekolah' => 'Universitas Brawijaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '142',
    'namasekolah' => 'Universitas Cokroaminoto Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '143',
    'namasekolah' => 'Universitas Darul Ulum Islamic Center Sudirman Guppi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '144',
    'namasekolah' => 'Universitas DR. Soetomo Surabaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '145',
    'namasekolah' => 'Universitas Gresik',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '146',
    'namasekolah' => 'Universitas Islam Indonesia Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '147',
    'namasekolah' => 'Universitas Khatolik Soegijapranata',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '148',
    'namasekolah' => 'Universitas Krisnadwipayana',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '149',
    'namasekolah' => 'Universitas Muhammadiyah Malang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '150',
    'namasekolah' => 'Universitas Muhammadiyah Surabaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '151',
    'namasekolah' => 'Universitas Muhammadiyah Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '152',
    'namasekolah' => 'Universitas Meria Kudus',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '153',
    'namasekolah' => 'Universitas Negeri Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '154',
    'namasekolah' => 'Universitas Nusa Cendana',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '155',
    'namasekolah' => 'Universitas Padjadjaran',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '156',
    'namasekolah' => 'Universitas Persatuan Guru Republik Indonesia Semarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '157',
    'namasekolah' => 'Universitas Sebelas Maret Surakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '158',
    'namasekolah' => 'Universitas Sunan Giri Surabaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '159',
    'namasekolah' => 'Universitas Surakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '160',
    'namasekolah' => 'Universitas Teknologi Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '161',
    'namasekolah' => 'Universitas Trisakti',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '162',
    'namasekolah' => 'Universitas Tunas Pembangunan Surakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '163',
    'namasekolah' => 'Universitas Veteran Bangun Nusantara Sukoharjo',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '164',
    'namasekolah' => 'Universitas Widya Gama',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '165',
    'namasekolah' => 'Universitas Wijaya Kusuma Surabaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
// JENJANG PENDIDIKAN MASA JAKI BLORA
jenjangpendidikan::create([
    'id' => '1',
    'jenjangpendidikan' => 'Diploma 3',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '2',
    'jenjangpendidikan' => 'Strata 1',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '3',
    'jenjangpendidikan' => 'SMA/MA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '4',
    'jenjangpendidikan' => 'SMK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '5',
    'jenjangpendidikan' => 'Diploma 1',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '6',
    'jenjangpendidikan' => 'Diploma 2',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '7',
    'jenjangpendidikan' => 'Diploma 4',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '8',
    'jenjangpendidikan' => 'Profesi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '9',
    'jenjangpendidikan' => 'Strata 2 ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '10',
    'jenjangpendidikan' => 'SD/MI/Sederajat',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '11',
    'jenjangpendidikan' => 'STM',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '12',
    'jenjangpendidikan' => 'Non Pendidikan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '13',
    'jenjangpendidikan' => 'SMP/Mts/Sederajat',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== ===================================================================================
// JURUSAN MASA JAKI BLORA
jurusan::create([
    'id' => '1',
    'jurusan' => 'Akuntansi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '2',
    'jurusan' => 'Bangunan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '3',
    'jurusan' => 'Bangunan Air/Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '4',
    'jurusan' => 'Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '5',
    'jurusan' => 'IPA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '6',
    'jurusan' => 'IPS',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '7',
    'jurusan' => 'Ekonomi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '8',
    'jurusan' => 'Keperawatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '9',
    'jurusan' => '(PGSD) Pendidikan Guru Sekolah Dasar',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '10',
    'jurusan' => 'Sistem Informasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '11',
    'jurusan' => 'Tata Niaga',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '12',
    'jurusan' => 'Teknik Audio & Video',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '13',
    'jurusan' => 'Teknik Bangunan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '14',
    'jurusan' => 'Teknik Elektro',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '15',
    'jurusan' => 'Teknik Geografi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '16',
    'jurusan' => 'Teknik Industri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '17',
    'jurusan' => 'Teknik Lingkungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '18',
    'jurusan' => 'Teknik Mesin',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '19',
    'jurusan' => 'Teknik Otomotif',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '20',
    'jurusan' => 'Teknik Perminyakan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '21',
    'jurusan' => 'Teknik Sipil',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '22',
    'jurusan' => 'Teknik Survey dan Pemetaan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '23',
    'jurusan' => 'Administrasi Perkantoran',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '24',
    'jurusan' => 'Agrobisnis',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '25',
    'jurusan' => 'Teknik Arsitektur',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '26',
    'jurusan' => 'Bahasa',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '27',
    'jurusan' => 'Bisnis dan Manajemen',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '28',
    'jurusan' => 'Desain dan Arsitektur',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '29',
    'jurusan' => 'Geomatika',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '30',
    'jurusan' => 'Hukum',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '31',
    'jurusan' => 'Biologi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '32',
    'jurusan' => 'Kesehatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '33',
    'jurusan' => 'Keuangan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '34',
    'jurusan' => 'Konstruksi Batu dan Beton',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '35',
    'jurusan' => 'Konstruksi Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '36',
    'jurusan' => 'Konstruksi Sipil',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '37',
    'jurusan' => 'Listrik',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '38',
    'jurusan' => 'Magister Ilmu Lingkungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '39',
    'jurusan' => 'Magister Teknik Sipil',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '40',
    'jurusan' => 'Teknik Mekanik Otomotif',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '41',
    'jurusan' => 'Multimedia',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '42',
    'jurusan' => 'Pendidikan Agama Islam',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '43',
    'jurusan' => 'Pendidikan Guru Taman Kanak-kanak',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '44',
    'jurusan' => 'Pendidikan Teknik Bangunan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '45',
    'jurusan' => 'Pendidikan Teknik Sipil dan Perencanaan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '46',
    'jurusan' => 'Perkantoran',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '47',
    'jurusan' => 'Magister Teknik Mesin',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '48',
    'jurusan' => 'Profesi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '49',
    'jurusan' => 'Teknik Geologi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '50',
    'jurusan' => 'Surket Tukang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '51',
    'jurusan' => 'Teknik Gambar Bangunan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '52',
    'jurusan' => 'Teknik Geodesi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '53',
    'jurusan' => 'Teknik Kendaraan Ringan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '54',
    'jurusan' => 'Teknik Listrik',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '55',
    'jurusan' => 'Teknik Kimi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '56',
    'jurusan' => 'Teknik Komputer dan Jaringan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '57',
    'jurusan' => 'Teknik Konstruksi Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '58',
    'jurusan' => 'Teknik Konstruksi Kayu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '59',
    'jurusan' => 'Teknik Perawatan dan Perbaikan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '60',
    'jurusan' => 'Teknik Perencanaan Wilayah dan Kota',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '61',
    'jurusan' => 'Teknik Perawatan Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);



//======================== ===================================================================================
// JABATAN KERJA JAKI BLORA
jabatankerja::create([
    'id' => '1',
    'jabatankerja' => 'Pelaksana Konstruksi Bangunan Unit Distribusi SPAM',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '2',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Bangunan Air Limbah Permukiman (setempat dan terpusat)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '3',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Drainase Perkotaan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '4',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '5',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '6',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Pemasangan Pipa Leachate (Lindi) dan Pipa Gas/Ventilasi Di TPA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '7',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Saluran Irigasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '8',
    'jabatankerja' => 'Pelaksana Lapangan Perkerasan Jalan Beton Muda',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '9',
    'jabatankerja' => 'Personil Keselamatan dan Kesehatan Kerja',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '10',
    'jabatankerja' => 'Ahli Geodesi Dan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '11',
    'jabatankerja' => 'Ahli Madya Bidang Keahlian Manajemen Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '12',
    'jabatankerja' => 'Ahli Madya Bidang Keahlian Teknik Mekanikal',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '13',
    'jabatankerja' => 'Ahli Madya Bidang Keahlian Teknik Sumber Daya Air',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '14',
    'jabatankerja' => 'Ahli Madya Geoteknik',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '15',
    'jabatankerja' => 'Ahli Madya K3 Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '16',
    'jabatankerja' => 'Ahli Madya Perencana Struktur Jalan Rel',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '17',
    'jabatankerja' => 'Ahli Madya Survei Terestris',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '18',
    'jabatankerja' => 'Ahli Madya Teknik Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '19',
    'jabatankerja' => 'Ahli Madya Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '20',
    'jabatankerja' => 'Ahli Madya Teknik Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '21',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Manajemen Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '22',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '23',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Teknik Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '24',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Teknik Mekanikal',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '25',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Teknik Sumber Daya Air',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '26',
    'jabatankerja' => 'Ahli Muda Elektrikal Konstruksi Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '27',
    'jabatankerja' => 'Ahli Muda Geoteknik',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '28',
    'jabatankerja' => 'Ahli Muda K3 Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '29',
    'jabatankerja' => 'Ahli Muda Pemeliharaan Jalan Dan Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '30',
    'jabatankerja' => 'Ahli Muda Pengukuran Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '31',
    'jabatankerja' => 'Ahli Muda Perawatan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '32',
    'jabatankerja' => 'Ahli Muda Perencana Beton Pracetak Untuk Struktur Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '33',
    'jabatankerja' => 'Ahli Muda Perencana Irigasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '34',
    'jabatankerja' => 'Ahli Muda Quantity Surveyor',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '35',
    'jabatankerja' => 'Ahli Muda Teknik Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '36',
    'jabatankerja' => 'Ahli Muda Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '37',
    'jabatankerja' => 'Ahli Muda Teknik Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '38',
    'jabatankerja' => 'Ahli Pelaksana Teknik Plambing',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '39',
    'jabatankerja' => 'Ahli Teknik Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '40',
    'jabatankerja' => 'Ahli Utama Bidang Keahlian Manajemen Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '41',
    'jabatankerja' => 'Ahli Utama Bidang Keahlian Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '42',
    'jabatankerja' => 'Ahli Utama Bidang Keahlian Teknik Sumber Daya Air',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '43',
    'jabatankerja' => 'Ahli Utama K3 Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '44',
    'jabatankerja' => 'Ahli Utama Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '45',
    'jabatankerja' => 'Ahli Utama Teknik Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '46',
    'jabatankerja' => 'Juru Gambar Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '47',
    'jabatankerja' => 'Juru Gambar Pekerjaan Jalan dan Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '48',
    'jabatankerja' => 'Juru Ukur (Surveyor)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '49',
    'jabatankerja' => 'Kepala Pengelola Lingkungan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '50',
    'jabatankerja' => 'Manajer Lapangan Pelaksanaan Pekerjaan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '51',
    'jabatankerja' => 'Manajer Pelaksana Konstruksi Sistem Produksi Air Minum (SPAM)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '52',
    'jabatankerja' => 'Manajer Pelaksanaan Pekerjaan Jalan/ Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '53',
    'jabatankerja' => 'Manajer pengelolaan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '54',
    'jabatankerja' => 'Manajer Produksi Campuran Aspal Panas (Asphalt Mixing Plant Manager)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '55',
    'jabatankerja' => 'Operator Scaffolding',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '56',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Gedung Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '57',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Jalan Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '58',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Pemasangan Jembatan Rangka Baja Standar Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '59',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Pemasangan Jembatan Rangka Baja Standar Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '60',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Saluran Irigasi Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '61',
    'jabatankerja' => 'Pelaksana Pekerjaan Pemeliharaan Jaringan Irigasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '62',
    'jabatankerja' => 'Pelaksana Pekerjaan Pemeliharaan Sungai Muda',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '63',
    'jabatankerja' => 'Pelaksana Pemeliharaan Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '64',
    'jabatankerja' => 'Pelaksana Pemeliharaan Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '65',
    'jabatankerja' => 'Pelaksana Pemeliharaan Jembatan Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '66',
    'jabatankerja' => 'Pelaksana Pemeliharaan Jembatan Muda',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '67',
    'jabatankerja' => 'Pemasang Perancah Dan Acuan/Cetakan Beton',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '68',
    'jabatankerja' => 'Pengawas Lapangan Pekerjaan Drainase Perkotaan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '69',
    'jabatankerja' => 'Pengawas Pekerjaan Struktur Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '70',
    'jabatankerja' => 'Pengawas Pekerjaan Struktur Bangunan Gedung Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '71',
    'jabatankerja' => 'Petugas Keselamatan dan Kesehatan Kerja (K3) Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '72',
    'jabatankerja' => 'Petugas Keselamatan Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '73',
    'jabatankerja' => 'Supervisor K3 Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '74',
    'jabatankerja' => 'Teknisi Laboratorium Beton Aspal',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '75',
    'jabatankerja' => 'Teknisi Scaffolding',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '76',
    'jabatankerja' => 'Tukang Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '77',
    'jabatankerja' => 'Tukang Besi Beton',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '78',
    'jabatankerja' => 'Tukang Kayu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '79',
    'jabatankerja' => 'Tukang Pasang Rangka Atap Baja Ringan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '80',
    'jabatankerja' => 'Tukang Plester Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
// DATA ASOSIAS KABUPATEN BLORA JAWA TENGAH
asosiasimasjaki::create([
    'id' => '1',
    'namaasosiasi' => 'AK3L',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '2',
    'namaasosiasi' => 'ASDAMKINDO',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '3',
    'namaasosiasi' => 'ASTEKINDO',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '4',
    'namaasosiasi' => 'ASTTATINDO',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '5',
    'namaasosiasi' => 'ATAKI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '6',
    'namaasosiasi' => 'ATAKNAS',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '7',
    'namaasosiasi' => 'ATAKSI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '8',
    'namaasosiasi' => 'GATAKI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '9',
    'namaasosiasi' => 'GATENSI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '10',
    'namaasosiasi' => 'HATSINDO',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '11',
    'namaasosiasi' => 'HPJI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '12',
    'namaasosiasi' => 'IAKI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '13',
    'namaasosiasi' => 'LPJK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '14',
    'namaasosiasi' => 'PAKKI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '15',
    'namaasosiasi' => 'PARABI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '16',
    'namaasosiasi' => 'PASTALI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '17',
    'namaasosiasi' => 'PASTI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '18',
    'namaasosiasi' => 'PERPAKOM',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '19',
    'namaasosiasi' => 'PERTAHKINDO',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '20',
    'namaasosiasi' => 'PERTAMA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '21',
    'namaasosiasi' => 'PERTAPIN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '22',
    'namaasosiasi' => 'PETAKINDO',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '23',
    'namaasosiasi' => 'PETAKOM',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== ===================================================================================
// JENJANG PEKERJAAN MAS JAKI BLORA
jenjang::create([
    'id' => '1',
    'jenjang' => '1',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '2',
    'jenjang' => '2',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '3',
    'jenjang' => '3',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '4',
    'jenjang' => '4',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '5',
    'jenjang' => '5',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '6',
    'jenjang' => '6',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '7',
    'jenjang' => '7',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '8',
    'jenjang' => '8',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '9',
    'jenjang' => '9',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
// LPS PENERBIT MAS JAKI BLORA

lpspenerbit::create([
    'id' => '1',
    'lpspenerbit' => 'Lembaga Sertifikasi Profesi Ataknas Profesional Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '2',
    'lpspenerbit' => 'Bina Konstruksi Nusantara',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '3',
    'lpspenerbit' => 'Infrastruktur Jalan dan Jembatan Indonesia',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '4',
    'lpspenerbit' => 'LSP ASTEKINDO Konstruksi Mandiri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '5',
    'lpspenerbit' => 'LSP Gataki Konstruksi Mandiri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '6',
    'lpspenerbit' => 'LSP GATENSI Karya Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '7',
    'lpspenerbit' => 'LSP HATSINDO Indoensia Teknik',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '8',
    'lpspenerbit' => 'LSP K3 Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '9',
    'lpspenerbit' => 'LSP Keselamatan Kesehatan Kerja',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '10',
    'lpspenerbit' => 'LSP Petakindo Konstruksi Mandiri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '11',
    'lpspenerbit' => 'LSP Sertifikasi Konstruksi Teknik IAKI (LSP SAKTI)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '12',
    'lpspenerbit' => 'LSP Sumber Daya Manusia Konstruksi Indonesia',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '13',
    'lpspenerbit' => 'PT LSP PERTAHKINDO Konstruksi Nasional',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '14',
    'lpspenerbit' => 'PT. ATAKI Konstruksi Indonesia',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '15',
    'lpspenerbit' => 'PT.Sertifikasi Profesi Konstruksi Asttatindo',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//

//======================== ===================================================================================
// DAFTAR TENAGA KERJA MAS JAKI BLORA

skktenagakerjabloralist::create([
    'nama' => 'SUGIYANTO', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 66,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 6,
    'tahunlulus' => null,
    'jabatankerja_id' => 77,
    'jenjang_id' => 1,
    'asosiasimasjaki_id' => 1,
    'lpspenerbit_id' => 2,
    'tanggalterbit' => '2023-10-08',
    'tanggalhabis' => '2028-12-07',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'ANAS FARIDZ ZAMZAMY', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 5,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 6,
    'tahunlulus' => null,
    'jabatankerja_id' => 76,
    'jenjang_id' => 2,
    'asosiasimasjaki_id' => 13,
    'lpspenerbit_id' => 2,
    'tanggalterbit' => '2023-10-08',
    'tanggalhabis' => '2028-12-28',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'MOH. MUHTAR', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 86,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 6,
    'tahunlulus' => null,
    'jabatankerja_id' => 67,
    'jenjang_id' => 3,
    'asosiasimasjaki_id' => 1,
    'lpspenerbit_id' => 2,
    'tanggalterbit' => '2023-10-08',
    'tanggalhabis' => '2028-12-07',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'BAHARUDDIN YUSUF HABIBI', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 50,
    'jenjangpendidikan_id' => 2,
    'jurusan_id' => 1,
    'tahunlulus' => 2010,
    'jabatankerja_id' => 1,
    'jenjang_id' => 4,
    'asosiasimasjaki_id' => 1,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => null,
    'tanggalhabis' => null,
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'PATONI', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 34,
    'jenjangpendidikan_id' => 11,
    'jurusan_id' => 2,
    'tahunlulus' => null,
    'jabatankerja_id' => 57,
    'jenjang_id' => 5,
    'asosiasimasjaki_id' => 6,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2023-10-08',
    'tanggalhabis' => '2028-07-24',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'AGUS FAUZAN', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 47,
    'jenjangpendidikan_id' => 2,
    'jurusan_id' => 21,
    'tahunlulus' => null,
    'jabatankerja_id' => 50,
    'jenjang_id' => 6,
    'asosiasimasjaki_id' => 6,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2023-08-10',
    'tanggalhabis' => '2028-04-18',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'LAILA NURAINI', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 11,
    'jenjangpendidikan_id' => 2,
    'jurusan_id' => 21,
    'tahunlulus' => null,
    'jabatankerja_id' => 35,
    'jenjang_id' => 7,
    'asosiasimasjaki_id' => 3,
    'lpspenerbit_id' => 2,
    'tanggalterbit' => '2023-08-10',
    'tanggalhabis' => '2028-01-12',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'MUHAMMAD KHAFID SAHRONI', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 159,
    'jenjangpendidikan_id' => 2,
    'jurusan_id' => 21,
    'tahunlulus' => null,
    'jabatankerja_id' => 19,
    'jenjang_id' => 8,
    'asosiasimasjaki_id' => 2,
    'lpspenerbit_id' => 4,
    'tanggalterbit' => '2023-08-10',
    'tanggalhabis' => '2028-07-05',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'HARYANTO', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 62,
    'jenjangpendidikan_id' => 2,
    'jurusan_id' => 52,
    'tahunlulus' => null,
    'jabatankerja_id' => 10,
    'jenjang_id' => 9,
    'asosiasimasjaki_id' => 3,
    'lpspenerbit_id' => 4,
    'tanggalterbit' => '2023-08-10',
    'tanggalhabis' => '2027-05-19',
    'statusterbit' => 'TERBIT',
]);



//======================== ===================================================================================
// PAKET KONSULTASI TENDER MAS JAKI BLORA

satuanhargamaterial::create([
    'uraian' => 'Agregat Pokok',
    'satuan' => 'M3',
    'besaran' => '322200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Agregat Pengunci',
    'satuan' => 'M3',
    'besaran' => '322200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Agregat Penutup',
    'satuan' => 'Kg',
    'besaran' => '239',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Angkur M16 panjang 50 cm',
    'satuan' => 'Buah',
    'besaran' => '28600',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Asbes gelombang',
    'satuan' => 'Lembar',
    'besaran' => '112200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Baja L 40.40.4',
    'satuan' => 'Kg',
    'besaran' => '18000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Banner plastik 0,6 x 0,8 m2',
    'satuan' => 'M2',
    'besaran' => '133900',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Batu kerikil uk. 2-3 cm, 4-5 cm dan 5-7 cm',
    'satuan' => 'M3',
    'besaran' => '329200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Bentonite',
    'satuan' => 'Kg',
    'besaran' => '3960',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Besi strip',
    'satuan' => 'Kg',
    'besaran' => '17600',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Cuka Bibit',
    'satuan' => 'Liter',
    'besaran' => '26800',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Dinding triplek 4mm',
    'satuan' => 'Lembar',
    'besaran' => '70700',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Dolken kayu φ 8- 10/400 cm',
    'satuan' => 'M1',
    'besaran' => '14600',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Floor lantai (Beton lantai kerja)',
    'satuan' => 'M3',
    'besaran' => '915506',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Fondasi pasangan batu',
    'satuan' => 'M3',
    'besaran' => '803126',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Frame allum L.10.1',
    'satuan' => 'Kg',
    'besaran' => '17600',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Frame besi Kaca Nako',
    'satuan' => 'Daun',
    'besaran' => '20460',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Frame besi L.30.30.3',
    'satuan' => 'Kg',
    'besaran' => '17600',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Geomembran t = 1,5 mm',
    'satuan' => 'M2',
    'besaran' => '11550',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Geosynthetic Liner (GCL)',
    'satuan' => 'M2',
    'besaran' => '11550',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Geotextil (> 100 s/d 400 gr/m2)',
    'satuan' => 'M2',
    'besaran' => '11550',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'GRC pelat, t=4mm, uk 122x244 cm',
    'satuan' => 'Lembar',
    'besaran' => '70000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Jendela naco',
    'satuan' => 'Buah',
    'besaran' => '80300',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kaca Polos tebal 5 mm',
    'satuan' => 'M2',
    'besaran' => '133900',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kaso 5/7 kayu kelas II (Perancah)',
    'satuan' => 'M3',
    'besaran' => '1976000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kawat Duri Silet BTO 30',
    'satuan' => 'M1',
    'besaran' => '47200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kawat jaring panjang 2,4 m dan aksesoris',
    'satuan' => 'Lembar',
    'besaran' => '92800',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kawat seng 3mm',
    'satuan' => 'Kg',
    'besaran' => '26800',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kayu papan 3/20 cm',
    'satuan' => 'M3',
    'besaran' => '1976000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kayu perancah',
    'satuan' => 'M3',
    'besaran' => '1976000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Tiang kayu 5/7 (II) T= 3 m',
    'satuan' => 'M3',
    'besaran' => '1976000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kerikil (Maks 30mm)',
    'satuan' => 'Kg',
    'besaran' => '244',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kolom beton pracetak',
    'satuan' => 'Batang',
    'besaran' => '370000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Koral Beton',
    'satuan' => 'M3',
    'besaran' => '329200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Makadam (batu pecah 5/7)',
    'satuan' => 'M3',
    'besaran' => '301600',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Marmer graphir 12x12 cm',
    'satuan' => 'Buah',
    'besaran' => '532200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Multiplek tebal 18 mm',
    'satuan' => 'Lembar',
    'besaran' => '208333',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Multiplek tebal 9 mm',
    'satuan' => 'Lembar',
    'besaran' => '123700',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku',
    'satuan' => 'Kg',
    'besaran' => '25200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku 5 inch',
    'satuan' => 'Kg',
    'besaran' => '16400',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku 5 inci',
    'satuan' => 'Kg',
    'besaran' => '16400',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku 7 cm',
    'satuan' => 'Kg',
    'besaran' => '16400',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku asbes',
    'satuan' => 'Kg',
    'besaran' => '21800',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku biasa',
    'satuan' => 'Kg',
    'besaran' => '17600',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku campuran 2cm dan 5 cm',
    'satuan' => 'Kg',
    'besaran' => '20500',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku campuran 5cm + 7cm',
    'satuan' => 'Kg',
    'besaran' => '16400',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku payung',
    'satuan' => 'Kg',
    'besaran' => '21800',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku seng',
    'satuan' => 'Kg',
    'besaran' => '21800',
]);

satuanhargamaterial::create([
    'uraian' => 'Panel beton pracetak',
    'satuan' => 'Lembar',
    'besaran' => '170000',
]);

satuanhargamaterial::create([
    'uraian' => 'Papan  Kayu  ukuran 2/20 cm',
    'satuan' => 'M3',
    'besaran' => '1976000',
]);
// 51

satuanhargamaterial::create([
    'uraian' => 'Pasangan batu ukuran 20/50, t=40cm',
    'satuan' => 'M3',
    'besaran' => '775762',
]);

satuanhargamaterial::create([
    'uraian' => 'Pasir urug',
    'satuan' => 'M3',
    'besaran' => '244200',
]);

satuanhargamaterial::create([
    'uraian' => 'Pasir urug (kg)',
    'satuan' => 'Kg',
    'besaran' => '174',
]);

satuanhargamaterial::create([
    'uraian' => 'Patok ukur kayu 5/7',
    'satuan' => 'M3',
    'besaran' => '1976000',
]);

satuanhargamaterial::create([
    'uraian' => 'Pen kuningan titik acuan',
    'satuan' => 'Buah',
    'besaran' => '130000',
]);

satuanhargamaterial::create([
    'uraian' => 'Pintu Double teakwood rangka kayu',
    'satuan' => 'M2',
    'besaran' => '730157',
]);

satuanhargamaterial::create([
    'uraian' => 'Plywood 4mm',
    'satuan' => 'Lembar',
    'besaran' => '112000',
]);

satuanhargamaterial::create([
    'uraian' => 'Residu',
    'satuan' => 'Liter',
    'besaran' => '5400',
]);

satuanhargamaterial::create([
    'uraian' => 'Seng gelombang',
    'satuan' => 'Lembar',
    'besaran' => '55700',
]);

satuanhargamaterial::create([
    'uraian' => 'Seng gelombang BJLS-30 (t=0,05) 0,9mx1,8 m’',
    'satuan' => 'Lembar',
    'besaran' => '74750',
]);

satuanhargamaterial::create([
    'uraian' => 'Seng pelat',
    'satuan' => 'Lembar',
    'besaran' => '64000',
]);

satuanhargamaterial::create([
    'uraian' => 'Sirtu',
    'satuan' => 'M3',
    'besaran' => '301000',
]);

satuanhargamaterial::create([
    'uraian' => 'Tanah Biasa',
    'satuan' => 'M3',
    'besaran' => '78800',
]);

satuanhargamaterial::create([
    'uraian' => 'Tanah Biasa Berpasir',
    'satuan' => 'M3',
    'besaran' => '122100',
]);

satuanhargamaterial::create([
    'uraian' => 'Tanah liat (lempung)',
    'satuan' => 'M3',
    'besaran' => '112500',
]);

satuanhargamaterial::create([
    'uraian' => 'Tiang kayu 8/12 kelas II, tinggi 4m',
    'satuan' => 'M3',
    'besaran' => '1976000',
]);

satuanhargamaterial::create([
    'uraian' => 'Lapis Fondasi Agregat',
    'satuan' => 'M3',
    'besaran' => '322200',
]);

satuanhargamaterial::create([
    'uraian' => 'Aspal',
    'satuan' => 'Kg',
    'besaran' => '16700',
]);

satuanhargamaterial::create([
    'uraian' => 'Aspal Emulsi CSS-1  atau SS-1',
    'satuan' => 'Liter',
    'besaran' => '14600',
]);

satuanhargamaterial::create([
    'uraian' => 'Bahan Bakar Bensin',
    'satuan' => 'Liter',
    'besaran' => '9000',
]);


satuanhargamaterial::create([
    'uraian' => 'Bahan Bakar Solar',
    'satuan' => 'Liter',
    'besaran' => '16150',
]);

satuanhargamaterial::create([
    'uraian' => 'Minyak Pelumas',
    'satuan' => 'Liter',
    'besaran' => '42000',
]);

satuanhargamaterial::create([
    'uraian' => 'Kawat jaring panjang 2,4 dan aksesoris',
    'satuan' => 'Lembar',
    'besaran' => '92800',
]);

satuanhargamaterial::create([
    'uraian' => 'Batu Kerikil uk. 2-3 cm',
    'satuan' => 'M3',
    'besaran' => '329200',
]);

satuanhargamaterial::create([
    'uraian' => 'Tanah Subur',
    'satuan' => 'M3',
    'besaran' => '150000',
]);

satuanhargamaterial::create([
    'uraian' => 'Agregat kasar',
    'satuan' => 'Kg',
    'besaran' => '244',
]);

satuanhargamaterial::create([
    'uraian' => 'Air',
    'satuan' => 'Liter',
    'besaran' => '50',
]);

satuanhargamaterial::create([
    'uraian' => 'Air bersih',
    'satuan' => 'Liter',
    'besaran' => '50',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat penyambung balok Δ 28 cm',
    'satuan' => 'Buah',
    'besaran' => '100000',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat penyambung beton 20 x 20 cm',
    'satuan' => 'Buah',
    'besaran' => '75000',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat penyambung beton 30 x 30 cm',
    'satuan' => 'Buah',
    'besaran' => '125000',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat penyambung beton 35 x 35 cm',
    'satuan' => 'Buah',
    'besaran' => '150000',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat penyambung beton 40 x 40 cm',
    'satuan' => 'Buah',
    'besaran' => '175000',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat penyambung beton 45 x 45 cm',
    'satuan' => 'Buah',
    'besaran' => '200000',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat penyambung beton 50 x 50 cm',
    'satuan' => 'Buah',
    'besaran' => '225000',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat penyambung beton ø 30',
    'satuan' => 'Buah',
    'besaran' => '125000',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat penyambung beton ø 35',
    'satuan' => 'Buah',
    'besaran' => '150000',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat penyambung beton ø 40',
    'satuan' => 'Buah',
    'besaran' => '175000',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat penyambung beton ø 45',
    'satuan' => 'Buah',
    'besaran' => '200000',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat penyambung beton ø 50',
    'satuan' => 'Buah',
    'besaran' => '225000',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat penyambung beton ø 60',
    'satuan' => 'Buah',
    'besaran' => '250000',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat sambung dolken ø6-8 cm',
    'satuan' => 'Buah',
    'besaran' => '10000',
]);

satuanhargamaterial::create([
    'uraian' => 'Alat sambung kayu terbuat dari baja ø 18-20 cm',
    'satuan' => 'Buah',
    'besaran' => '25000',
]);

satuanhargamaterial::create([
    'uraian' => 'Angkur',
    'satuan' => 'Kg',
    'besaran' => '27000',
]);

satuanhargamaterial::create([
    'uraian' => 'Anyaman bambu (geribig)',
    'satuan' => 'Lembar',
    'besaran' => '15000',
]);

satuanhargamaterial::create([
    'uraian' => 'Bahan Pilihan (Ex Grosok Tahunan)',
    'satuan' => 'M3',
    'besaran' => '156000',
]);

satuanhargamaterial::create([
    'uraian' => 'Baja Profil',
    'satuan' => 'Kg',
    'besaran' => '18000',
]);

satuanhargamaterial::create([
    'uraian' => 'Baja ringan dingin C75',
    'satuan' => 'Batang',
    'besaran' => '148500',
]);

satuanhargamaterial::create([
    'uraian' => 'Balok Kayu (Jati Kelas I)',
    'satuan' => 'M3',
    'besaran' => '14996800',
]);

satuanhargamaterial::create([
    'uraian' => 'Balok Kayu (Jati Kelas II)',
    'satuan' => 'M3',
    'besaran' => '12854400',
]);

satuanhargamaterial::create([
    'uraian' => 'Balok Kayu (Jati Kelas III)',
    'satuan' => 'M3',
    'besaran' => '9640800',
]);

satuanhargamaterial::create([
    'uraian' => 'Balok kayu kelas II (Perancah)',
    'satuan' => 'M3',
    'besaran' => '1976000',
]);

//======================== ===================================================================================
// SATUAN HARGA UPAH MAS JAKI BLORA
satuanhargaupahtenagakerja::create([
    'uraian' => 'Pekerja',
    'kode' => 'L.01',
    'satuan' => 'Orang/Hari',
    'besaran' => '96000',
    'besaranperjam' => '13714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang batu/tembok',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang kayu',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang besi/besi beton',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang cat/pelitur',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang pipa',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang penganyam bronjong',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang tebas',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang las',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang las geotextile',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang listrik/ elektronik',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang alumunium',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang kaca',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang Ereksi',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang tanam',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang pemelihara taman',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Kepala tukang',
    'kode' => 'L.03',
    'satuan' => 'Orang/Hari',
    'besaran' => '122000.00',
    'besaranperjam' => '17429.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Mandor',
    'kode' => 'L.04',
    'satuan' => 'Orang/Hari',
    'besaran' => '133000.00',
    'besaranperjam' => '19000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Juru ukur',
    'kode' => 'L.05',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000.00',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Pembantu juru ukur',
    'kode' => 'L.06',
    'satuan' => 'Orang/Hari',
    'besaran' => '96000.00',
    'besaranperjam' => '13714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Mekanik alat berat',
    'kode' => 'L.07',
    'satuan' => 'Orang/Hari',
    'besaran' => '122000.00',
    'besaranperjam' => '17429.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Operator alat berat',
    'kode' => 'L.08',
    'satuan' => 'Orang/Hari',
    'besaran' => '122000.00',
    'besaranperjam' => '17429.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Pembantu operator',
    'kode' => 'L.09',
    'satuan' => 'Orang/Hari',
    'besaran' => '96000.00',
    'besaranperjam' => '13714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Supir truk',
    'kode' => 'L.10',
    'satuan' => 'Orang/Hari',
    'besaran' => '122000.00',
    'besaranperjam' => '17429.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Kenek truk',
    'kode' => 'L.11',
    'satuan' => 'Orang/Hari',
    'besaran' => '96000.00',
    'besaranperjam' => '13714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga ahli utama',
    'kode' => 'L.12a',
    'satuan' => 'Orang/Hari',
    'besaran' => '300000.00',
    'besaranperjam' => '42857.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga ahli madya',
    'kode' => 'L.12b',
    'satuan' => 'Orang/Hari',
    'besaran' => '234000.00',
    'besaranperjam' => '33429.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga ahli muda',
    'kode' => 'L.12c',
    'satuan' => 'Orang/Hari',
    'besaran' => '130000.00',
    'besaranperjam' => '18571.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga ahli pratama',
    'kode' => 'L.12d',
    'satuan' => 'Orang/Hari',
    'besaran' => '120000.00',
    'besaranperjam' => '17143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Narasumber pejabat eselon II',
    'kode' => 'L.13a',
    'satuan' => 'Orang/Hari',
    'besaran' => '7000000.00',
    'besaranperjam' => '1000000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Narasumber pejabat eselon III',
    'kode' => 'L.13b',
    'satuan' => 'Orang/Hari',
    'besaran' => '6300000.00',
    'besaranperjam' => '900000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Narasumber praktisi',
    'kode' => 'L.13c',
    'satuan' => 'Orang/Hari',
    'besaran' => '11900000.00',
    'besaranperjam' => '1700000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga terampil teknisi',
    'kode' => 'L.14a',
    'satuan' => 'Orang/Hari',
    'besaran' => '110000.00',
    'besaranperjam' => '15714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga terampil operator',
    'kode' => 'L.14b',
    'satuan' => 'Orang/Hari',
    'besaran' => '110000.00',
    'besaranperjam' => '15714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga terampil operator',
    'kode' => 'L.14c',
    'satuan' => 'Orang/Hari',
    'besaran' => '110000.00',
    'besaranperjam' => '15714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Lainnya',
    'kode' => 'L.15',
    'satuan' => 'Orang/Hari',
    'besaran' => '110000.00',
    'besaranperjam' => '15714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);


//======================== ===================================================================================
// SATUAN HARGA PERALATAN MAS JAKI BLORA
satuanhargaperalatan::create([
    'uraian' => 'Linggis (baja keras)/bh',
    'kode' => null,
    'satuan' => 'Buah',
    'besaran' => '50000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pahat beton (baja keras)',
    'kode' => null,
    'satuan' => 'Buah',
    'besaran' => '50000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Palu/godam (baja keras)/bh',
    'kode' => null,
    'satuan' => 'Buah',
    'besaran' => '50000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa pipe support',
    'kode' => null,
    'satuan' => 'Buah',
    'besaran' => '1900',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa scaffolding',
    'kode' => null,
    'satuan' => 'Buah',
    'besaran' => '10000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat Pancang Mini Pile Driver (Vibrator) Hammer 500 kg (10 HP)',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '413228.39',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat Pancang Mini Pile Driver (Vibratory) Hammer 50 kg (1 HP)',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '413228.39',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bender baja beton',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '268819.47',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bor: Auger ∅ 20 cm',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '100000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bor: Auger ∅ 30 cm',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '100000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bor: Auger ∅ 40 cm',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '100000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bor: Auger ∅ 50 cm',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '100000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Concrete Cutter',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '325462.24',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane Truck 3 T',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '3773717.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Cutter besi beton',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '268819.47',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Cutter baja beton',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '268819.47',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Flat deck truck kap 7 ton',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '1991352.50',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Gergaji Besi (Baja Keras)',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '50000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Jack  Hammer  Drill- 1,5  KW  +  Genset  3 KWH',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '286000.86',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Jack  Hammer  Drill 2,5  KW  +  Genset  5 KW',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '286000.86',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Jack hammer',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '286000.86',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Jack hammer (5 KW)+ Genset (12 HP)',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '286000.86',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Jack hammer dan genset; 12 HP',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '286000.86',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Kunci momen',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '286000.86',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Linggis (baja keras)',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '50000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Las Geotextile',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '894923.85',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Molen 1m3',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '554168.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mobile crane  ≤  3 ton',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '3773717.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Molen 0,35 m3',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '554168.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Molen/Beton 0,35 m3 + Bahan',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '554168.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Molen 0,35 m3 + Automatic feeder',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '554168.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Molen kapasitas 0,35 m3 termasuk feeder',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '554168.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Molen/Beton mixer 0,35 m3',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '554168.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Molen/Beton mixer 0,35 m3 dilengkapi Automatic Feeder',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '554168.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Palu/godam',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '50000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Peralatan potong pipa T1/manual (gergaji) / saw',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '1900.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Peralatan potong pipa T2/mekanik / cilinder saw',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '1900.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa    beton   ∅3", 140KW; 180 bar, T = 75 m / H =150',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '6311421.79',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa  beton  ∅2,5", 20KW; 20 bar, T = 18 m',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '6311421.79',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa beton ∅  2,5", 75KW; 120 bar, T= 50 m/H=80 m',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '6311421.79',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa beton φ 1,5"; 5 KW; 8 bar; T = 5 m',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '6311421.79',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa  sedot  pasir, diesel 7,5 KW; 5',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '370190.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa lumpur diesel 10 KW; 5"',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '370190.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa lumpur diesel 7,5 KW; 4"',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '370190.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Alat Pemasangan',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '10000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa  Tripot/Tackel  & handle crane 2T',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '345000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa crane 2 T',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '3773717.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa excavator type 225 kapasitas 0,5 - 1,0 m3',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '2762325.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa excavator type kapasitas 0,5 -1,0 m3',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '2762325.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Genset 5 KW',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '2206866.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Mesin Hydroseeding 2000L',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '264164.10',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Pompa Sedot  Ø 5”',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '370190.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Tripot/Tackel',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '345000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Water Truck*)',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '2284246.61',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stamper  Kodok  150 kg',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '339533.36',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stamper D-Drum 550 kg',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '339533.36',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stamper Kuda 70 kg',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '339533.36',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stamper Smooth Drum 1,5 Ton',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '339533.36',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stang bor, batang bor diameter 1 1/4"',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '105000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stang bor, batang bor diameter 4"',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '105000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stang bor, batang bor diameter 8"',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '110000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tandon Air kap. 2 m3',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '10000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Theodolit',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '100000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tower crane arm 30 m',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '3773717.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tripod tinggi 7 m kap 2 ton',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '345000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Vibrator',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '357769.29',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Waterpass',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '100000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bull Dozer',
    'kode' => 'E04',
    'satuan' => 'Jam',
    'besaran' => '651069.74',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Compressor',
    'kode' => 'E05',
    'satuan' => 'Jam',
    'besaran' => '157118.99',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump Truck',
    'kode' => 'E09',
    'satuan' => 'Jam',
    'besaran' => '229571.18',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Motor Grader',
    'kode' => 'E13',
    'satuan' => 'Jam',
    'besaran' => '404725.97',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Track Loader',
    'kode' => 'E14',
    'satuan' => 'Jam',
    'besaran' => '372272.12',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Wheel Loader',
    'kode' => 'E15',
    'satuan' => 'Jam',
    'besaran' => '472750.77',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tandem Roller',
    'kode' => 'E17',
    'satuan' => 'Jam',
    'besaran' => '378192.54',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Vibratory Roller',
    'kode' => 'E19a',
    'satuan' => 'Jam',
    'besaran' => '74796.56',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Water Tanker',
    'kode' => 'E23',
    'satuan' => 'Jam',
    'besaran' => '326320.94',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Asp. Distributor',
    'kode' => 'E41',
    'satuan' => 'Jam',
    'besaran' => '316602.16',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat las Listrik',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '127846.26',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat pancang Hidraulik Pile Driver 2 ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '59032.63',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat pancang Hidraulik Pile Driver 3 ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '59032.63',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'AMP',
    'kode' => 'E01a',
    'satuan' => 'Jam',
    'besaran' => '8809318.35',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Asphalt Distributor',
    'kode' => 'E41',
    'satuan' => 'Jam',
    'besaran' => '316602.16',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Asphalt Finisher',
    'kode' => 'E02',
    'satuan' => 'Jam',
    'besaran' => '1560100.19',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bored Pile Machine (Hidraulik) Auger ø 100 cm',
    'kode' => 'E50',
    'satuan' => 'Jam',
    'besaran' => '441754.72',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bored Pile Machine (Hidraulik) Auger ø 120 cm',
    'kode' => 'E50',
    'satuan' => 'Jam',
    'besaran' => '441754.72',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bored Pile Machine (Hidraulik) Auger ø 60 cm',
    'kode' => 'E50',
    'satuan' => 'Jam',
    'besaran' => '441754.72',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bored Pile Machine (Hidraulik) Auger ø 80 cm',
    'kode' => 'E50',
    'satuan' => 'Jam',
    'besaran' => '441754.72',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin pengeboran',
    'kode' => 'E50',
    'satuan' => 'Jam',
    'besaran' => '441754.72',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Chainsaw 20”; 5,5HP',
    'kode' => 'E87',
    'satuan' => 'Jam',
    'besaran' => '36946.35',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Chainsaw 30”; 10 HP',
    'kode' => 'E87',
    'satuan' => 'Jam',
    'besaran' => '36946.35',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Chainsaw 30”; 7,5HP',
    'kode' => 'E87',
    'satuan' => 'Jam',
    'besaran' => '36946.35',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Compressor',
    'kode' => 'E05',
    'satuan' => 'Jam',
    'besaran' => '157118.99',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Concrete Pump',
    'kode' => 'E28',
    'satuan' => 'Jam',
    'besaran' => '901631.68',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Concrete Vibrator',
    'kode' => 'E20',
    'satuan' => 'Jam',
    'besaran' => '47167.54',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane Mobile 7 ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane truck 10 Ton, Winch 12 Ton *)',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane truck 3 Ton, Winch 5 Ton *)',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane truck 5 Ton, Winch 8 Ton *)',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane truck 8 Ton, Winch 10 Ton *)',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crawler Crane 10 Ton + ladder 14 ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crawler Crane 20 Ton + ladder 14 ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Driver Hammer 1 Ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '132527.17',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Driver Hammer 2 Ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '132527.17',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Driver Hammer 3 Ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '132527.17',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump Truck',
    'kode' => 'E08',
    'satuan' => 'Jam',
    'besaran' => '229571.18',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump Truck 1',
    'kode' => 'E08',
    'satuan' => 'Jam',
    'besaran' => '229571.18',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump Truck 2',
    'kode' => 'E08',
    'satuan' => 'Jam',
    'besaran' => '229571.18',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump Truck 3',
    'kode' => 'E08',
    'satuan' => 'Jam',
    'besaran' => '229571.18',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Excavator  (Std.);  Bucket 0,55 m3; 95 HP *)',
    'kode' => 'E10',
    'satuan' => 'Jam',
    'besaran' => '394617.93',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Genset',
    'kode' => 'E12',
    'satuan' => 'Jam',
    'besaran' => '315266.70',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin bor',
    'kode' => 'E71',
    'satuan' => 'Jam',
    'besaran' => '100000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Las listrik 150 A',
    'kode' => 'E58',
    'satuan' => 'Jam',
    'besaran' => '127846.26',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Las listrik 250 A',
    'kode' => 'E58',
    'satuan' => 'Jam',
    'besaran' => '127846.26',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Las listrik 350 A',
    'kode' => 'E58',
    'satuan' => 'Jam',
    'besaran' => '127846.26',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Las listrik 500 A',
    'kode' => 'E58',
    'satuan' => 'Jam',
    'besaran' => '127846.26',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mobil sedot lumpur kapasitas 3 m3',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '229571.18',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'P. Tyre Roller',
    'kode' => 'E18',
    'satuan' => 'Jam',
    'besaran' => '478124.71',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pressure Grout machine 30 KW; 60 - 75 bar (D)',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '157118.99',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa crane kapasitas 1 ton',
    'kode' => 'E07',
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tandem Roller',
    'kode' => 'E17',
    'satuan' => 'Jam',
    'besaran' => '37819254',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Three Wheel Roller',
    'kode' => 'E16',
    'satuan' => 'Jam',
    'besaran' => '198152.67',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Wheel Loader',
    'kode' => 'E15',
    'satuan' => 'Jam',
    'besaran' => '472750.77',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Casing Pipa Baja Diameter 30 cm',
    'kode' => null,
    'satuan' => 'm1',
    'besaran' => '10000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Casing Pipa Baja Diameter 40 cm',
    'kode' => null,
    'satuan' => 'm1',
    'besaran' => '10000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Casing Pipa Baja Diameter 50 cm',
    'kode' => null,
    'satuan' => 'm1',
    'besaran' => '10000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Casing PVC Diameter 20 cm',
    'kode' => null,
    'satuan' => 'm1',
    'besaran' => '10000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Lahan',
    'kode' => null,
    'satuan' => 'm2',
    'besaran' => '50000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa crane',
    'kode' => null,
    'satuan' => 'Unit/Hari',
    'besaran' => '3773717.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Poles',
    'kode' => null,
    'satuan' => 'Unit/Hari',
    'besaran' => '150000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);


// garut

//======================== ===================================================================================
// PAKET KONSULTASI TENDER MAS JAKI BLORA
hspdivisi::create([
    'id' => 1,
    'hspdivisi' => 'Persiapan Lapangan/Site Work',
]);

hspdivisi::create([
    'id' => 2,
    'hspdivisi' => 'Pekerjaan Struktur',
]);

hspdivisi::create([
    'id' => 3,
    'hspdivisi' => 'Pekerjaan Arsitektur',
]);

hspdivisi::create([
    'id' => 4,
    'hspdivisi' => 'Pekerjaan Lansekap',
]);

hspdivisi::create([
    'id' => 5,
    'hspdivisi' => 'Pekerjaan Mekanikal Elektrikal',
]);

hspdivisi::create([
    'id' => 6,
    'hspdivisi' => 'Pekerjaan Plambing',
]);

hspdivisi::create([
    'id' => 7,
    'hspdivisi' => 'Jalan Pada Permukiman',
]);

hspdivisi::create([
    'id' => 8,
    'hspdivisi' => 'Drainase Jalan',
]);

hspdivisi::create([
    'id' => 9,
    'hspdivisi' => 'Pekerjaan Jaringan Pipa di Luar Bangunan Gedung',
]);



//======================== ===================================================================================
// HSP PAKET HARGA MAS JAKI BLORA

//======================== ===================================================================================
// HSP PAKET DIVISI 1
hsppaket::create([
    'id' => 1,
    'hspdivisi_id' => 1,
    'hsppaket' => 'Pekerjaan Persiapan',
]);

hsppaket::create([
    'id' => 2,
    'hspdivisi_id' => 1,
    'hsppaket' => 'Pekerjaan Galian Tanah',
]);

hsppaket::create([
    'id' => 3,
    'hspdivisi_id' => 1,
    'hsppaket' => 'PEKERJAAN TIMBUNAN DAN PEMADATAN (TERMASUK PERATAAN DAN PERAPIHAN)',
]);

hsppaket::create([
    'id' => 4,
    'hspdivisi_id' => 1,
    'hsppaket' => 'PEKERJAAN ANGKUTAN MATERIAL DAN/ATAU HASIL GALIAN',
]);

hsppaket::create([
    'id' => 5,
    'hspdivisi_id' => 1,
    'hsppaket' => 'PEKERJAAN GEOTEKSTIL DAN GEOMEMBRAN',
]);

hsppaket::create([
    'id' => 6,
    'hspdivisi_id' => 1,
    'hsppaket' => 'PEKERJAAN PEMBONGKARAN',
]);



//======================== ===================================================================================
// HSP PAKET PEKERJAAN DIVISI 1
hspkodepekerjaan::create([
    'id' => 1,
    'hsppaket_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pembuatan pagar proyek',
]);

hspkodepekerjaan::create([
    'id' => 2,
    'hsppaket_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Alat dan/atau sarana penunjang',
]);

hspkodepekerjaan::create([
    'id' => 3,
    'hsppaket_id' => 1,
    'kodepekerjaan' => '3',
    'namapekerjaan' => 'Pembersihan dan pengupasan permukaan tanah',
]);

hspkodepekerjaan::create([
    'id' => 4,
    'hsppaket_id' => 1,
    'kodepekerjaan' => '4',
    'namapekerjaan' => 'Pengukuran dan pasangan bouwplank',
]);

//======================== ===================================================================================
// AHSP KONSTRUKSI UMUM DIVISI 1 DAN DATA LAIN LAIN NYA
//======================== ===================================================================================
// HSP PAKET HARGA MAS JAKI BLORA
hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 1,
    'kode' => '1',
    'subhargadiv1_id' => 1,
    'subhargadiv1bahan_id' => 1,
    'subhargadiv1peralatan_id' => 1,
    'jenispekerjaan' => 'Pembuatan 1 m’ pagar sementara dari kayu tinggi 2 meter',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '380843.37',
]);

subhargadiv1::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => 'Pekerja',
    'kode' => 'L.01',
    'satuan' => 'OH',
    'koefisien' => 0.600,
    'hargasatuan' => 96000.00,
    'jumlah_pagu' => '57600', // **Manual tanpa perhitungan**
]);

subhargadiv1::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => 'Tukang Kayu',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'koefisien' => 0.200,
    'hargasatuan' => 106000.00,
    'jumlah_pagu' => '21200',
]);

subhargadiv1::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => 'Tukang batu/tembok',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'koefisien' => 0.200,
    'hargasatuan' => 106000.00,
    'jumlah_pagu' => '21200',
]);

subhargadiv1::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => 'Kepala Tukang',
    'kode' => 'L.03',
    'satuan' => 'OH',
    'koefisien' => 0.040,
    'hargasatuan' => 122000.00,
    'jumlah_pagu' => '4880',
]);

subhargadiv1::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => 'Mandor',
    'kode' => 'L.04',
    'satuan' => 'OH',
    'koefisien' => 0.013,
    'hargasatuan' => 133000.00,
    'jumlah_pagu' => '1729',
]);

subhargadiv1bahan::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => 'Kaso 5/7 kayu kelas II (Perancah)',
    'kode' => null,
    'satuan' => 'm3',
    'koefisien' => 0.039,
    'hargasatuan' => 1976000.00    ,
    'jumlah_pagu' => '76471.20',
]);

subhargadiv1bahan::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => 'Papan  Kayu  ukuran 2/20 cm',
    'kode' => null,
    'satuan' => 'm3',
    'koefisien' => 0.040,
    'hargasatuan' => 1976000.00    ,
    'jumlah_pagu' => '78249.60',
]);

subhargadiv1bahan::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => 'Paku 5 inci',
    'kode' => null,
    'satuan' => 'kg',
    'koefisien' => 0.587,
    'hargasatuan' => 16400.00,
    'jumlah_pagu' => '9630.08',
]);

subhargadiv1bahan::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => 'Semen Portland',
    'kode' => null,
    'satuan' => 'kg',
    'koefisien' => 26.406,
    'hargasatuan' => 1450.00,
    'jumlah_pagu' => '38288.70',
]);

subhargadiv1bahan::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => 'Pasir Beton (kg)',
    'kode' => null,
    'satuan' => 'kg',
    'koefisien' => 61.560,
    'hargasatuan' => 221.00    ,
    'jumlah_pagu' => '13604.76',
]);

subhargadiv1bahan::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => 'Kerikil (Maks 30mm)',
    'kode' => null,
    'satuan' => 'kg',
    'koefisien' => 83.349    ,
    'hargasatuan' => 244.00    ,
    'jumlah_pagu' => '20337.16',
]);

subhargadiv1bahan::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => 'Air',
    'kode' => null,
    'satuan' => 'liter',
    'koefisien' => 17.415    ,
    'hargasatuan' => 50.00    ,
    'jumlah_pagu' => '870.75',
]);

subhargadiv1bahan::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => 'Residu',
    'kode' => null,
    'satuan' => 'liter',
    'koefisien' => 0.400    ,
    'hargasatuan' => 5400.00    ,
    'jumlah_pagu' => '2160.00',
]);

subhargadiv1peralatan::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => null,
    'kode' => null,
    'satuan' => null,
    'koefisien' => null,
    'hargasatuan' => null,
    'jumlah_pagu' => null,
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 1,
    'kode' => '2',
    'subhargadiv1_id' => 2,
    'subhargadiv1bahan_id' => 2,
    'subhargadiv1peralatan_id' => 2,
    'jenispekerjaan' => 'Pembuatan 1 m’ pagar sementara dari seng gelombang rangka kayu tinggi 2 meter ',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '295990.26',
]);
hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 1,
    'kode' => '3',
    'subhargadiv1_id' => 3,
    'subhargadiv1bahan_id' => 3,
    'subhargadiv1peralatan_id' => 3,
    'jenispekerjaan' => 'Pembuatan 1 m’ pagar sementara dari kawat duri tinggi 2 meter',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '1254695.60',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 1,
    'kode' => '4',
    'subhargadiv1_id' => 4,
    'subhargadiv1bahan_id' => 4,
    'subhargadiv1peralatan_id' => 4,
    'jenispekerjaan' => 'Pembuatan 1 m’ pagar sementara seng gelombang rangka baja L.40.40.4, tinggi pagar 1,8 m’ ',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '550180.75',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 1,
    'kode' => '5',
    'subhargadiv1_id' => 5,
    'subhargadiv1bahan_id' => 5,
    'subhargadiv1peralatan_id' => 5,
    'jenispekerjaan' => 'Pembuatan 1 m2 pagar BRC galvanis’ ',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '11395.20',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 1,
    'kode' => '6',
    'subhargadiv1_id' => 6,
    'subhargadiv1bahan_id' => 6,
    'subhargadiv1peralatan_id' => 6,
    'jenispekerjaan' => 'Pemasangan 1 m2  Panel Beton Pracetak 50x50x240 untuk Pagar',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '605010.56',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 2,
    'kode' => '1',
    'subhargadiv1_id' => 8,
    'subhargadiv1bahan_id' => 8,
    'subhargadiv1peralatan_id' => 8,
    'jenispekerjaan' => '1 buah papan nama pekerjaan ukuran 0,8x1,2 menggunakan multiflex 18 mm, frame besi siku dan tiang kayu 8/12',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '1028388.41',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 2,
    'kode' => '2',
    'subhargadiv1_id' => 9,
    'subhargadiv1bahan_id' => 9,
    'subhargadiv1peralatan_id' => 9,
    'jenispekerjaan' => '1 buah papan nama pekerjaan ukuran 0,6x0,8 menggunakan multiplex 10 mm, frame allumunium siku & tiang kayu 5/7, printing banner plastik',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '488860.90',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 2,
    'kode' => '3',
    'subhargadiv1_id' => 10,
    'subhargadiv1bahan_id' => 10,
    'subhargadiv1peralatan_id' => 10,
    'jenispekerjaan' => 'Pembuatan 1 m2 kantor sementara/rumah jaga/gudang semen dan peralatan lantai plesteran, dinding setengah tembok',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '1336764.00',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 2,
    'kode' => '4',
    'subhargadiv1_id' => 11,
    'subhargadiv1bahan_id' => 11,
    'subhargadiv1peralatan_id' => 11,
    'jenispekerjaan' => 'Pembuatan 1 m2 direksi keet (Kantor), los kerja dan gudang*)',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '2265024.65',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 2,
    'kode' => '5',
    'subhargadiv1_id' => 12,
    'subhargadiv1bahan_id' => 12,
    'subhargadiv1peralatan_id' => 12,
    'jenispekerjaan' => 'Pembuatan 1 m2 Jalan sementara Lapis Macadam',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '2262393.94',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 3,
    'kode' => '1',
    'subhargadiv1_id' => 13,
    'subhargadiv1bahan_id' => 13,
    'subhargadiv1peralatan_id' => 13,
    'jenispekerjaan' => '1 m2 pembersihan dan pengupasan permukaan tanah (striping) s.d. tanaman ∅ 2 cm ',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '11291.50',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 3,
    'kode' => '2',
    'subhargadiv1_id' => 14,
    'subhargadiv1bahan_id' => 14,
    'subhargadiv1peralatan_id' => 14,
    'jenispekerjaan' => 'Tebas tebang 1 m2 tanaman/tumbuhan ∅ < 5 cm ',
    'satuanmaterial' => 'Batang',
    'hargasatuan' => '3606.90',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 3,
    'kode' => '3',
    'subhargadiv1_id' => 15,
    'subhargadiv1bahan_id' => 15,
    'subhargadiv1peralatan_id' => 15,
    'jenispekerjaan' => 'Tebas tebang 1 m2  tanaman/tumbuhan ∅  >5 s.d. 15 cm',
    'satuanmaterial' => 'Batang',
    'hargasatuan' => '6011.50',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 3,
    'kode' => '4',
    'subhargadiv1_id' => 15,
    'subhargadiv1bahan_id' => 15,
    'subhargadiv1peralatan_id' => 15,
    'jenispekerjaan' => 'Tebas tebang 1 batang pohon/tumbuhan ∅  >15 s.d. 30 cm',
    'satuanmaterial' => 'Batang',
    'hargasatuan' => '6011.50',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 3,
    'kode' => '5',
    'subhargadiv1_id' => 16,
    'subhargadiv1bahan_id' => 16,
    'subhargadiv1peralatan_id' => 16,
    'jenispekerjaan' => 'Tebas tebang 1 batang pohon/tumbuhan ∅ > 30 s.d 50 cm ',
    'satuanmaterial' => 'Batang',
    'hargasatuan' => '3982.82',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 3,
    'kode' => '5',
    'subhargadiv1_id' => 17,
    'subhargadiv1bahan_id' => 17,
    'subhargadiv1peralatan_id' => 17,
    'jenispekerjaan' => 'Tebas  tebang  1  batang  pohon/tumbuhan  ∅   >  50  s.d  75  cm (diameter pohon diukur 1 m di atas permukaan tanah) ',
    'satuanmaterial' => 'Batang',
    'hargasatuan' => '23690.38',
]);


//======================== ===================================================================================
// AHSP KONSTRUKSI UMUM DIVISI 1 DAN DATA LAIN LAIN NYA
//======================== ===================================================================================
hsppaket2::create([
    'id' => 1,
    'hspdivisi_id' => 2,
    'hsppaket2' => 'Pekerjaan Rangka Atap',
]);

hsppaket2::create([
    'id' => 2,
    'hspdivisi_id' => 2,
    'hsppaket2' => 'Pekerjaan Struktur Beton',
]);

hsppaket2::create([
    'id' => 3,
    'hspdivisi_id' => 2,
    'hsppaket2' => 'Pekerjaan Struktur Baja',
]);

hsppaket2::create([
    'id' => 4,
    'hspdivisi_id' => 2,
    'hsppaket2' => 'Pekerjaan Struktur Beton Pracetak',
]);

hsppaket2::create([
    'id' => 5,
    'hspdivisi_id' => 2,
    'hsppaket2' => 'Pekerjaan Struktur Beton Prategang',
]);

hsppaket2::create([
    'id' => 6,
    'hspdivisi_id' => 2,
    'hsppaket2' => 'Pekerjaan Struktur Kayu',
]);

hsppaket2::create([
    'id' => 7,
    'hspdivisi_id' => 2,
    'hsppaket2' => 'Pekerjaan Dinding Penahan Tanah',
]);


hspkodepekerjaan2::create([
    'id' => 1,
    'hsppaket2_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Rangka Atap Baja Ringan',
]);

hspkodepekerjaan2::create([
    'id' => 2,
    'hsppaket2_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Rangka Atap Kayu',
]);

// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 2 ===========================

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 1,
    'kode' => '1',
    'subhargadiv2_id' => 1,
    'subhargadiv2bahan_id' => 1,
    'subhargadiv2peralatan_id' => 1,
    'jenispekerjaan' => 'Pemasangan 1 m2  Atap Pelana Rangka Atap Baja Ringan (Canai Dingin) profil C75',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '333267.61',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 1,
    'kode' => '2',
    'subhargadiv2_id' => 2,
    'subhargadiv2bahan_id' => 2,
    'subhargadiv2peralatan_id' => 2,
    'jenispekerjaan' => 'Pemasangan 1 m2  Atap Jurai/Limasan Rangka Atap Baja Ringan (Canai Dingin) Profil C75',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '339726.48',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 1,
    'kode' => '2.a',
    'subhargadiv2_id' => 3,
    'subhargadiv2bahan_id' => 3,
    'subhargadiv2peralatan_id' => 3,
    'jenispekerjaan' => 'Pemasangan 1 m2 Usuk dan Reng Rangka Baja Ringan',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '221558.70',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 2,
    'kode' => '1',
    'subhargadiv2_id' => 4,
    'subhargadiv2bahan_id' => 4,
    'subhargadiv2peralatan_id' => 4,
    'jenispekerjaan' => 'Pemasangan  1  m3   Konstruksi  Kuda-kuda  Konvensional,  Kayu Kelas I, II dan III Bentang Sampai Dengan 6 Meter',
    'satuanmaterial' => 'M3',
    'hargasatuan' => '17986408.00',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 2,
    'kode' => '2',
    'subhargadiv2_id' => 5,
    'subhargadiv2bahan_id' => 5,
    'subhargadiv2peralatan_id' => 5,
    'jenispekerjaan' => 'Pemasangan 1 m3 Konstruksi Kuda-kuda Expose, Kayu Kelas I',
    'satuanmaterial' => 'M3',
    'hargasatuan' => '23606143.00',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 2,
    'kode' => '3',
    'subhargadiv2_id' => 6,
    'subhargadiv2bahan_id' => 6,
    'subhargadiv2peralatan_id' => 6,
    'jenispekerjaan' => 'Pemasangan 1 m3 Konstruksi Gordeng, Kayu kelas II',
    'satuanmaterial' => 'M3',
    'hargasatuan' => '17123040.00',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 2,
    'kode' => '4',
    'subhargadiv2_id' => 7,
    'subhargadiv2bahan_id' => 7,
    'subhargadiv2peralatan_id' => 7,
    'jenispekerjaan' => 'Pemasangan 1 m2 Rangka Atap Genteng Keramik, Kayu kelas II',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '267844.39',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 2,
    'kode' => '5',
    'subhargadiv2_id' => 8,
    'subhargadiv2bahan_id' => 8,
    'subhargadiv2peralatan_id' => 8,
    'jenispekerjaan' => 'Pemasangan 1 m2 Rangka Atap Genteng Beton, Kayu Kelas II',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '296395.99',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 2,
    'kode' => '6',
    'subhargadiv2_id' => 9,
    'subhargadiv2bahan_id' => 9,
    'subhargadiv2peralatan_id' => 9,
    'jenispekerjaan' => 'Pemasangan 1 m2 Rangka Atap Sirap, Kayu Kelas II',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '43684.30',
]);

// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 3 ===========================
hsppaket3::create([
    'id' => 1,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Penutup Atap',
]);

hsppaket3::create([
    'id' => 2,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Insulasi',
]);

hsppaket3::create([
    'id' => 3,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Aksesoris Atap',
]);

hsppaket3::create([
    'id' => 4,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Waterproofing',
]);

hsppaket3::create([
    'id' => 5,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Langit-langit (Plafon)',
]);

hsppaket3::create([
    'id' => 6,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Pasangan Dinding',
]);

hsppaket3::create([
    'id' => 7,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Plesteran dan Acian',
]);

hsppaket3::create([
    'id' => 8,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Pengecatan dan Pelituran',
]);

hsppaket3::create([
    'id' => 9,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Penutup Lantai',
]);

hsppaket3::create([
    'id' => 10,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Penutup Dinding',
]);

hsppaket3::create([
    'id' => 11,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Pintu dan Jendela',
]);

hsppaket3::create([
    'id' => 12,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Kaca',
]);

hsppaket3::create([
    'id' => 13,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Besi dan Alumunium',
]);

hsppaket3::create([
    'id' => 14,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Kayu',
]);

hsppaket3::create([
    'id' => 16,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Signage',
]);

hsppaket3::create([
    'id' => 18,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Sanitair',
]);

hspkodepekerjaan3::create([
    'id' => 1,
    'hsppaket3_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Atap Genteng',
]);

hspkodepekerjaan3::create([
    'id' => 2,
    'hsppaket3_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Atap Serat Semen Gelombang',
]);

hspkodepekerjaan3::create([
    'id' => 3,
    'hsppaket3_id' => 1,
    'kodepekerjaan' => '3',
    'namapekerjaan' => 'Penutup Atap Lainnya',
]);

hspkodepekerjaan3::create([
    'id' => 4,
    'hsppaket3_id' => 5,
    'kodepekerjaan' => '4',
    'namapekerjaan' => 'Langit=langit (Plafon) Akustik',
]);

hspkodepekerjaan3::create([
    'id' => 5,
    'hsppaket3_id' => 5,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Langit-langit PLAFON) Lainnya',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '1',
'subhargadiv3_id' => 1,
'subhargadiv3bahan_id' => 1,
'subhargadiv3peralatan_id' => 1,
'jenispekerjaan' => 'Pemasangan 1 m2 Atap Genteng Palentong Kecil',
'satuanmaterial' => 'M2',
'hargasatuan' => '104607.25',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '2',
    'subhargadiv3_id' => 2,
    'subhargadiv3bahan_id' => 2,
    'subhargadiv3peralatan_id' => 2,
    'jenispekerjaan' => 'Pemasangan 1 m2 Atap Genteng Kodok Glazuur',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '100207.25',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '3.a',
    'subhargadiv3_id' => 3,
    'subhargadiv3bahan_id' => 3,
    'subhargadiv3peralatan_id' => 3,
    'jenispekerjaan' => 'Pemasangan 1 m2 Atap Genteng Palentong Besar Uk. 32,5 cm x 23,5 cm Jarak Reng 26 cm',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '145505.25',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '4',
    'subhargadiv3_id' => 4,
    'subhargadiv3bahan_id' => 4,
    'subhargadiv3peralatan_id' => 4,
    'jenispekerjaan' => 'Pemasangan 1 m2 Atap Genteng Beton',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '162235.59',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '5',
    'subhargadiv3_id' => 5,
    'subhargadiv3bahan_id' => 5,
    'subhargadiv3peralatan_id' => 5,
    'jenispekerjaan' => 'Pemasangan 1 m’ Nok/Bubung Genteng Palentong Kecil',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '138056.05',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '6',
    'subhargadiv3_id' => 6,
    'subhargadiv3bahan_id' => 6,
    'subhargadiv3peralatan_id' => 6,
    'jenispekerjaan' => 'Pemasangan 1 m’ Nok/Bubung Genteng Kodok Glazuur',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '147076.05',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '7',
    'subhargadiv3_id' => 7,
    'subhargadiv3bahan_id' => 7,
    'subhargadiv3peralatan_id' => 7,
    'jenispekerjaan' => 'Pemasangan 1 m’ Nok/Bubung Genteng Palentong Besar',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '162256.05',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '8',
    'subhargadiv3_id' => 8,
    'subhargadiv3bahan_id' => 8,
    'subhargadiv3peralatan_id' => 8,
    'jenispekerjaan' => 'Pemasangan 1 m’ Nok/Bubung Genteng Beton',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '137970.80',
]);

// HANYA PERCOBAAN
hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 5,
    'hspkodepekerjaan3_id' => 5,
    'kode' => '1',
    'subhargadiv3_id' => 9,
    'subhargadiv3bahan_id' => 9,
    'subhargadiv3peralatan_id' => 9,
    'jenispekerjaan' => 'Pemasangan 1 m2 Langit-langit (Plafon) Akustik Ukuran 30 x 30 cm',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '76874.60',
]);

// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 4 ===========================
hsppaket4::create([
    'id' => 1,
    'hspdivisi_id' => 4,
    'hsppaket4' => 'Pekerjaan Penanaman Tanaman',
]);

hsppaket4::create([
    'id' => 2,
    'hspdivisi_id' => 4,
    'hsppaket4' => 'Pekerjaan Pemeliharaan Tanaman',
]);

hspkodepekerjaan4::create([
    'id' => 1,
    'hsppaket4_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Penanaman Pohon',
]);

hspkodepekerjaan4::create([
    'id' => 2,
    'hsppaket4_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Penyiraman Pada Masa Pemeliharaan',
]);

hspkonstruksiumum4::create([
    'hspdivisi_id' => 4,
    'hsppaket4_id' => 1,
    'hspkodepekerjaan4_id' => 1,
    'kode' => '3',
    'subhargadiv4_id' => 1,
    'jenispekerjaan' => 'Penanaman 1 buah pohon sedang Ketapang Kencana (Terminalia mantaly) Diameter 3-5 cm, tinggi 3-6 meter, polybag 50 L',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '947274.90',
]);

hspkonstruksiumum4::create([
    'hspdivisi_id' => 4,
    'hsppaket4_id' => 1,
    'hspkodepekerjaan4_id' => 1,
    'kode' => '4',
    'subhargadiv4_id' => 2,
    'jenispekerjaan' => 'Penanaman 1 buah pohon besar Kamboja (Plumeria sp.) Diameter 7-15 cm, tinggi diatas 6 meter, polybag 100 L',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '2010149.55',
]);

hspkonstruksiumum4::create([
    'hspdivisi_id' => 4,
    'hsppaket4_id' => 2,
    'hspkodepekerjaan4_id' => 2,
    'kode' => '1',
    'subhargadiv4_id' => 3,
    'jenispekerjaan' => 'Penyiraman 1m2 area tanam untuk 1 hari (dengan selang plastik 3/4 inch)',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '317.24',
]);

// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 5 ===========================
hsppaket5::create([
    'id' => 1,
    'hspdivisi_id' => 5,
    'hsppaket5' => 'Pekerjaan Sistem Distribusi Jaringan Listrik',
]);

hsppaket5::create([
    'id' => 2,
    'hspdivisi_id' => 5,
    'hsppaket5' => 'Pekerjaan Sistem Proteksi Petir',
]);

hsppaket5::create([
    'id' => 3,
    'hspdivisi_id' => 5,
    'hsppaket5' => 'Pekerjaan Sistem Pencahayaan',
]);

hsppaket5::create([
    'id' => 4,
    'hspdivisi_id' => 5,
    'hsppaket5' => 'Pekerjaan Sistem Elektronik',
]);

hsppaket5::create([
    'id' => 5,
    'hspdivisi_id' => 5,
    'hsppaket5' => 'Pekerjaan Sistem Tata Udara',
]);

hsppaket5::create([
    'id' => 6,
    'hspdivisi_id' => 5,
    'hsppaket5' => 'Pekerjaan Sistem Proteksi Kebakaran',
]);

// ============================================= AHSP KONSTRUKSI UMUM DIVISI 5 ===========================
// ===================================================================
hspkodepekerjaan5::create([
    'id' => 1,
    'hsppaket5_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pemasangan kabel arus kuat (kabel, kabel tray/ladder)',
]);

hspkodepekerjaan5::create([
    'id' => 2,
    'hsppaket5_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Kabel Tray / Ladder',
]);

hspkodepekerjaan5::create([
    'id' => 3,
    'hsppaket5_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Pemasangan panel listrik',
]);

hspkodepekerjaan5::create([
    'id' => 4,
    'hsppaket5_id' => 1,
    'kodepekerjaan' => '5',
    'namapekerjaan' => 'Pemasangan saklar dan stop kontak',
]);

hspkodepekerjaan5::create([
    'id' => 5,
    'hsppaket5_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pemasangan lampu dan armatur',
]);

hspkodepekerjaan5::create([
    'id' => 6,
    'hsppaket5_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Sistem alarm kebakaran',
]);

hspkodepekerjaan5::create([
    'id' => 7,
    'hsppaket5_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Sistem CCTV',
]);

hspkodepekerjaan5::create([
    'id' => 8,
    'hsppaket5_id' => 1,
    'kodepekerjaan' => '3',
    'namapekerjaan' => 'Sistem tata suara',
]);

hspkodepekerjaan5::create([
    'id' => 9,
    'hsppaket5_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pemasangan unit AC',
]);

hspkodepekerjaan5::create([
    'id' => 10,
    'hsppaket5_id' => 1,
    'kodepekerjaan' => '4',
    'namapekerjaan' => 'Pemasangan perpipaan',
]);

hspkodepekerjaan5::create([
    'id' => 11,
    'hsppaket5_id' => 1,
    'kodepekerjaan' => '3',
    'namapekerjaan' => 'APAR',
]);

// ============================================= AHSP KONSTRUKSI UMUM DIVISI 5 ===========================
hspkonstruksiumum5::create([
    'id' => 1,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.26',
    'subhargadiv5_id' => 1,
    'subhargadiv5bahan_id' => 1,
    'subhargadiv5peralatan_id' => 1,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 3 x 4 mm²',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '38717.80',
]);

hspkonstruksiumum5::create([
    'id' => 2,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.35',
    'subhargadiv5_id' => 2,
    'subhargadiv5bahan_id' => 2,
    'subhargadiv5peralatan_id' => 2,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 4 mm²',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '69457.30',
]);

hspkonstruksiumum5::create([
    'id' => 3,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.36',
    'subhargadiv5_id' => 3,
    'subhargadiv5bahan_id' => 3,
    'subhargadiv5peralatan_id' => 3,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 6 mm²',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '93365.80',
]);

hspkonstruksiumum5::create([
    'id' => 4,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.37',
    'subhargadiv5_id' => 4,
    'subhargadiv5bahan_id' => 4,
    'subhargadiv5peralatan_id' => 4,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 10 mm²',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '145479.40',
]);

hspkonstruksiumum5::create([
    'id' => 5,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.38',
    'subhargadiv5_id' => 5,
    'subhargadiv5bahan_id' => 5,
    'subhargadiv5peralatan_id' => 5,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 16 mm²',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '209235.40',
]);

hspkonstruksiumum5::create([
    'id' => 6,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.39',
    'subhargadiv5_id' => 6,
    'subhargadiv5bahan_id' => 6,
    'subhargadiv5peralatan_id' => 6,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 25 mm²',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '318876.80',
]);

hspkonstruksiumum5::create([
    'id' => 7,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.40',
    'subhargadiv5_id' => 7,
    'subhargadiv5bahan_id' => 7,
    'subhargadiv5peralatan_id' => 7,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 35 mm²',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '432682.80',
]);

hspkonstruksiumum5::create([
    'id' => 8,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.41',
    'subhargadiv5_id' => 8,
    'subhargadiv5bahan_id' => 8,
    'subhargadiv5peralatan_id' => 8,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 50 mm²',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '571313.60',
]);

hspkonstruksiumum5::create([
    'id' => 9,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.42',
    'subhargadiv5_id' => 9,
    'subhargadiv5bahan_id' => 9,
    'subhargadiv5peralatan_id' => 9,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 70 mm²',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '812174.00',
]);

hspkonstruksiumum5::create([
    'id' => 10,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.43',
    'subhargadiv5_id' => 10,
    'subhargadiv5bahan_id' => 10,
    'subhargadiv5peralatan_id' => 10,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 94 mm²',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '1116916.90',
]);

hspkonstruksiumum5::create([
    'id' => 11,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 2,
    'kode' => '12.4',
    'subhargadiv5_id' => 11,
    'subhargadiv5bahan_id' => 11,
    'subhargadiv5peralatan_id' => 11,
    'jenispekerjaan' => 'Pemasangan 1 Unit Kabel Tray (Horizontal) 300 x 100 mm',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '401790.40',
]);

hspkonstruksiumum5::create([
    'id' => 12,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '4.a',
    'subhargadiv5_id' => 12,
    'subhargadiv5bahan_id' => 12,
    'subhargadiv5peralatan_id' => 12,
    'jenispekerjaan' => 'Pemasangan 1 Unit Main Distribution Panel (MDP) Wall Mounted ukuran 60 x 100 x 25 Cm',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '3829710.50',
]);

hspkonstruksiumum5::create([
    'id' => 13,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '4.b',
    'subhargadiv5_id' => 13,
    'subhargadiv5bahan_id' => 13,
    'subhargadiv5peralatan_id' => 13,
    'jenispekerjaan' => 'Pemasangan 1 Unit Main Distribution Panel (MDP) Wall Mounted ukuran 80 x 120 x 30 Cm',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '6446940.50',
]);

hspkonstruksiumum5::create([
    'id' => 14,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '6.a',
    'subhargadiv5_id' => 14,
    'subhargadiv5bahan_id' => 14,
    'subhargadiv5peralatan_id' => 14,
    'jenispekerjaan' => 'Pemasangan 1 Unit Sub Distribution Panel (SDP) Wall Mounted ukuran 30 x 40 x 20 Cm',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1283029.00',
]);

hspkonstruksiumum5::create([
    'id' => 15,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '6.b',
    'subhargadiv5_id' => 15,
    'subhargadiv5bahan_id' => 15,
    'subhargadiv5peralatan_id' => 15,
    'jenispekerjaan' => 'Pemasangan 1 Unit Sub Distribution Panel (SDP) Wall Mounted ukuran  40 x 60 x 25 Cm',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1832974.00',
]);

hspkonstruksiumum5::create([
    'id' => 16,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '6.c',
    'subhargadiv5_id' => 16,
    'subhargadiv5bahan_id' => 16,
    'subhargadiv5peralatan_id' => 16,
    'jenispekerjaan' => 'Pemasangan 1 Unit Sub Distribution Panel (SDP) Wall Mounted ukuran  50 x 70 x 25 Cm',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '2410144.00',
]);

hspkonstruksiumum5::create([
    'id' => 17,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '6.d',
    'subhargadiv5_id' => 17,
    'subhargadiv5bahan_id' => 17,
    'subhargadiv5peralatan_id' => 17,
    'jenispekerjaan' => 'Pemasangan 1 Unit Sub Distribution Panel (SDP) Wall Mounted ukuran  60 x 80 x 25 Cm',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '2846954.00',
]);

hspkonstruksiumum5::create([
    'id' => 18,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24',
    'subhargadiv5_id' => 18,
    'subhargadiv5bahan_id' => 18,
    'subhargadiv5peralatan_id' => 18,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCB Box',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '317902.20',
]);

hspkonstruksiumum5::create([
    'id' => 19,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.1',
    'subhargadiv5_id' => 19,
    'subhargadiv5bahan_id' => 19,
    'subhargadiv5peralatan_id' => 19,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCB 6 A; 4,5 KA (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '116284.85',
]);

hspkonstruksiumum5::create([
    'id' => 20,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.2',
    'subhargadiv5_id' => 20,
    'subhargadiv5bahan_id' => 20,
    'subhargadiv5peralatan_id' => 20,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCB 10 A / 6 KA (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '153617.20',
]);

hspkonstruksiumum5::create([
    'id' => 21,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.3',
    'subhargadiv5_id' => 21,
    'subhargadiv5bahan_id' => 21,
    'subhargadiv5peralatan_id' => 21,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCB 20 A / 10 KA (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '236552.80',
]);

hspkonstruksiumum5::create([
    'id' => 22,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.4',
    'subhargadiv5_id' => 22,
    'subhargadiv5bahan_id' => 22,
    'subhargadiv5peralatan_id' => 22,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCCB 10 A / 18 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '861572.25',
]);

hspkonstruksiumum5::create([
    'id' => 23,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.5',
    'subhargadiv5_id' => 23,
    'subhargadiv5bahan_id' => 23,
    'subhargadiv5peralatan_id' => 23,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCCB 16 A / 18 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '861572.25',
]);

hspkonstruksiumum5::create([
    'id' => 24,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.6',
    'subhargadiv5_id' => 24,
    'subhargadiv5bahan_id' => 24,
    'subhargadiv5peralatan_id' => 24,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCCB 20 A / 18 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1007955.85',
]);

hspkonstruksiumum5::create([
    'id' => 25,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.7',
    'subhargadiv5_id' => 25,
    'subhargadiv5bahan_id' => 25,
    'subhargadiv5peralatan_id' => 25,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCCB 25 A / 18 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1007955.85',
]);

hspkonstruksiumum5::create([
    'id' => 26,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.8',
    'subhargadiv5_id' => 26,
    'subhargadiv5bahan_id' => 26,
    'subhargadiv5peralatan_id' => 26,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCCB 35 A / 18 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1105337.20',
]);

hspkonstruksiumum5::create([
    'id' => 27,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.9',
    'subhargadiv5_id' => 27,
    'subhargadiv5bahan_id' => 27,
    'subhargadiv5peralatan_id' => 27,
    'jenispekerjaan' => 'Pemasangan 1 Unit  MCCB 40 A / 18 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1105337.20',
]);

hspkonstruksiumum5::create([
    'id' => 28,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.10',
    'subhargadiv5_id' => 28,
    'subhargadiv5bahan_id' => 28,
    'subhargadiv5peralatan_id' => 28,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCCB 50 A / 25 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1337602.20',
]);

hspkonstruksiumum5::create([
    'id' => 29,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.11',
    'subhargadiv5_id' => 29,
    'subhargadiv5bahan_id' => 29,
    'subhargadiv5peralatan_id' => 29,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCCB 60 A / 25 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1337602.20',
]);

hspkonstruksiumum5::create([
    'id' => 30,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.12',
    'subhargadiv5_id' => 30,
    'subhargadiv5bahan_id' => 30,
    'subhargadiv5peralatan_id' => 30,
    'jenispekerjaan' => 'Pemasangan 1 Unit  MCCB 80 A / 25 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1394252.20',
]);

hspkonstruksiumum5::create([
    'id' => 31,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.13',
    'subhargadiv5_id' => 31,
    'subhargadiv5bahan_id' => 31,
    'subhargadiv5peralatan_id' => 31,
    'jenispekerjaan' => 'Pemasangan 1 Unit  MCCB 100 A / 25 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1543921.50',
]);

hspkonstruksiumum5::create([
    'id' => 32,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.14',
    'subhargadiv5_id' => 32,
    'subhargadiv5bahan_id' => 32,
    'subhargadiv5peralatan_id' => 32,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCCB 125 A / 25 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1614960.60',
]);

hspkonstruksiumum5::create([
    'id' => 33,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.15',
    'subhargadiv5_id' => 33,
    'subhargadiv5bahan_id' => 33,
    'subhargadiv5peralatan_id' => 33,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCCB 140 A / 25 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1682260.80',
]);

hspkonstruksiumum5::create([
    'id' => 34,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.16',
    'subhargadiv5_id' => 34,
    'subhargadiv5bahan_id' => 34,
    'subhargadiv5peralatan_id' => 34,
    'jenispekerjaan' => 'Pemasangan 1 Unit  MCCB 160 A / 25 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1682260.80',
]);

hspkonstruksiumum5::create([
    'id' => 35,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.17',
    'subhargadiv5_id' => 35,
    'subhargadiv5bahan_id' => 35,
    'subhargadiv5peralatan_id' => 35,
    'jenispekerjaan' => 'Pemasangan 1 Unit  MCCB 200 A / 36 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '2073599.00',
]);

hspkonstruksiumum5::create([
    'id' => 36,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.18',
    'subhargadiv5_id' => 36,
    'subhargadiv5bahan_id' => 36,
    'subhargadiv5peralatan_id' => 36,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCCB 250 A / 36 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '2073599.00',
]);

hspkonstruksiumum5::create([
    'id' => 37,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.19',
    'subhargadiv5_id' => 37,
    'subhargadiv5bahan_id' => 37,
    'subhargadiv5peralatan_id' => 37,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCCB 300 A / 36 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '3430819.70',
]);

hspkonstruksiumum5::create([
    'id' => 38,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.20',
    'subhargadiv5_id' => 38,
    'subhargadiv5bahan_id' => 38,
    'subhargadiv5peralatan_id' => 38,
    'jenispekerjaan' => 'Pemasangan 1 Unit  MCCB 350 A / 50 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '4000152.20',
]);

hspkonstruksiumum5::create([
    'id' => 39,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.21',
    'subhargadiv5_id' => 39,
    'subhargadiv5bahan_id' => 39,
    'subhargadiv5peralatan_id' => 39,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCCB 400 A / 50 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '4369283.60',
]);

hspkonstruksiumum5::create([
    'id' => 40,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.22',
    'subhargadiv5_id' => 40,
    'subhargadiv5bahan_id' => 40,
    'subhargadiv5peralatan_id' => 40,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCCB 500 A / 50 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '8811719.95',
]);


hspkonstruksiumum5::create([
    'id' => 41,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 3,
    'kode' => '24.23',
    'subhargadiv5_id' => 41,
    'subhargadiv5bahan_id' => 41,
    'subhargadiv5peralatan_id' => 41,
    'jenispekerjaan' => 'Pemasangan 1 Unit MCCB 1000 A / 50 KA, 3P (Eks. Schneider / setara)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '19862152.20',
]);

hspkonstruksiumum5::create([
    'id' => 42,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => 1,
    'subhargadiv5_id' => 42,
    'subhargadiv5bahan_id' => 42,
    'subhargadiv5peralatan_id' => 42,
    'jenispekerjaan' => 'Pemasangan 1 Unit Saklar Tunggal',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '32080.40',
]);

hspkonstruksiumum5::create([
    'id' => 43,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => 2,
    'subhargadiv5_id' => 43,
    'subhargadiv5bahan_id' => 43,
    'subhargadiv5peralatan_id' => 43,
    'jenispekerjaan' => 'Pemasangan 1 Unit Saklar Ganda',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '34500.40',
]);

hspkonstruksiumum5::create([
    'id' => 44,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => 9,
    'subhargadiv5_id' => 44,
    'subhargadiv5bahan_id' => 44,
    'subhargadiv5peralatan_id' => 44,
    'jenispekerjaan' => 'Pemasangan 1 Unit Stop Kontak 1 P, 10 A, 200 W',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '41229.10',
]);

hspkonstruksiumum5::create([
    'id' => 45,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => 12,
    'subhargadiv5_id' => 45,
    'subhargadiv5bahan_id' => 45,
    'subhargadiv5peralatan_id' => 45,
    'jenispekerjaan' => 'Pemasangan 1 Unit Stop Kontak AC',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '109373.00',
]);

hspkonstruksiumum5::create([
    'id' => 46,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => 13,
    'subhargadiv5_id' => 46,
    'subhargadiv5bahan_id' => 46,
    'subhargadiv5peralatan_id' => 46,
    'jenispekerjaan' => 'Pemasangan 1 titik Instalasi Stop Kontak',
    'satuanmaterial' => 'Titik',
    'hargasatuan' => '277676.30',
]);

hspkonstruksiumum5::create([
    'id' => 47,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => '13.a',
    'subhargadiv5_id' => 47,
    'subhargadiv5bahan_id' => 47,
    'subhargadiv5peralatan_id' => 47,
    'jenispekerjaan' => 'Pemasangan 1 titik Instalasi Stop Kontak AC',
    'satuanmaterial' => 'Titik',
    'hargasatuan' => '342466.30',
]);

hspkonstruksiumum5::create([
    'id' => 48,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => '1',
    'subhargadiv5_id' => 48,
    'subhargadiv5bahan_id' => 48,
    'subhargadiv5peralatan_id' => 48,
    'jenispekerjaan' => 'Pemasangan 1 Va Daya PLN',
    'satuanmaterial' => 'Daya',
    'hargasatuan' => '1650.00',
]);

hspkonstruksiumum5::create([
    'id' => 49,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => '2',
    'subhargadiv5_id' => 49,
    'subhargadiv5bahan_id' => 49,
    'subhargadiv5peralatan_id' => 49,
    'jenispekerjaan' => '1 bh Pasang Pilot lamp',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '52023.40',
]);

hspkonstruksiumum5::create([
    'id' => 50,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => '3',
    'subhargadiv5_id' => 50,
    'subhargadiv5bahan_id' => 50,
    'subhargadiv5peralatan_id' => 50,
    'jenispekerjaan' => '1 bh Pasang Fuse 2A',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '19136.70',
]);

hspkonstruksiumum5::create([
    'id' => 51,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => '4',
    'subhargadiv5_id' => 51,
    'subhargadiv5bahan_id' => 51,
    'subhargadiv5peralatan_id' => 51,
    'jenispekerjaan' => '1 bh Pasang CT',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '112636.70',
]);

hspkonstruksiumum5::create([
    'id' => 52,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => '5',
    'subhargadiv5_id' => 52,
    'subhargadiv5bahan_id' => 52,
    'subhargadiv5peralatan_id' => 52,
    'jenispekerjaan' => '1 m1 Pasang Pertanahan / Arde BC 50 mm2 3 ohm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '136092.00',
]);

hspkonstruksiumum5::create([
    'id' => 53,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => '6',
    'subhargadiv5_id' => 53,
    'subhargadiv5bahan_id' => 53,
    'subhargadiv5peralatan_id' => 53,
    'jenispekerjaan' => '1 unit Ground 5/8  Panjang 4 meter1',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '2131404.00',
]);

hspkonstruksiumum5::create([
    'id' => 54,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => '7',
    'subhargadiv5_id' => 54,
    'subhargadiv5bahan_id' => 54,
    'subhargadiv5peralatan_id' => 54,
    'jenispekerjaan' => '1 bh Pasang Ampere meter + CT 0 - 1000 A',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '463478.40',
]);

hspkonstruksiumum5::create([
    'id' => 55,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => '8',
    'subhargadiv5_id' => 55,
    'subhargadiv5bahan_id' => 55,
    'subhargadiv5peralatan_id' => 55,
    'jenispekerjaan' => '1 bh Pasang Volt meter ',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '490978.40',
]);

hspkonstruksiumum5::create([
    'id' => 56,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 4,
    'kode' => '9',
    'subhargadiv5_id' => 56,
    'subhargadiv5bahan_id' => 56,
    'subhargadiv5peralatan_id' => 56,
    'jenispekerjaan' => '1 bh Pasang Selektor 380v/220v',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '272989.20',
]);

hspkonstruksiumum5::create([
    'id' => 57,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 2,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1',
    'subhargadiv5_id' => 57,
    'subhargadiv5bahan_id' => 57,
    'subhargadiv5peralatan_id' => 57,
    'jenispekerjaan' => 'Pemasangan 1 Set Penangkal Petir Sangkar Faraday Radius ± 120 ',
    'satuanmaterial' => 'Set',
    'hargasatuan' => '15212242.10',
]);

hspkonstruksiumum5::create([
    'id' => 58,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 3,
    'hspkodepekerjaan5_id' => 5,
    'kode' => '1',
    'subhargadiv5_id' => 58,
    'subhargadiv5bahan_id' => 58,
    'subhargadiv5peralatan_id' => 58,
    'jenispekerjaan' => 'Pemasangan 1 titik Instalasi Lampu',
    'satuanmaterial' => 'Titik',
    'hargasatuan' => '243611.50',
]);

hspkonstruksiumum5::create([
    'id' => 59,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 3,
    'hspkodepekerjaan5_id' => 5,
    'kode' => '3',
    'subhargadiv5_id' => 59,
    'subhargadiv5bahan_id' => 59,
    'subhargadiv5peralatan_id' => 59,
    'jenispekerjaan' => 'Pemasangan 1 Unit Downlight 5 Inch 14,5 Watt LED',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '202796.00',
]);

hspkonstruksiumum5::create([
    'id' => 60,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 3,
    'hspkodepekerjaan5_id' => 5,
    'kode' => '8',
    'subhargadiv5_id' => 60,
    'subhargadiv5bahan_id' => 60,
    'subhargadiv5peralatan_id' => 60,
    'jenispekerjaan' => 'Pemasangan 1 Unit RM TKI 2 x 16 Watt LED',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '526533.70',
]);

hspkonstruksiumum5::create([
    'id' => 61,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 3,
    'hspkodepekerjaan5_id' => 5,
    'kode' => '9',
    'subhargadiv5_id' => 61,
    'subhargadiv5bahan_id' => 61,
    'subhargadiv5peralatan_id' => 61,
    'jenispekerjaan' => 'Pemasangan 1 Unit Lampu Sorot LED 100 Watt',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1252533.70',
]);

hspkonstruksiumum5::create([
    'id' => 62,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 3,
    'hspkodepekerjaan5_id' => 5,
    'kode' => '10',
    'subhargadiv5_id' => 62,
    'subhargadiv5bahan_id' => 62,
    'subhargadiv5peralatan_id' => 62,
    'jenispekerjaan' => 'Pemasangan 1 Unit Lampu Sorot RGB 30 Watt untuk Outdoor',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '581533.70',
]);

hspkonstruksiumum5::create([
    'id' => 63,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 4,
    'hspkodepekerjaan5_id' => 6,
    'kode' => '6',
    'subhargadiv5_id' => 63,
    'subhargadiv5bahan_id' => 63,
    'subhargadiv5peralatan_id' => 63,
    'jenispekerjaan' => 'Pemasangan 1 Unit Terminal Box Fire Alarm (Lengkap Dengan Modul)',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '2750926.20',
]);

hspkonstruksiumum5::create([
    'id' => 64,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 4,
    'hspkodepekerjaan5_id' => 6,
    'kode' => '7',
    'subhargadiv5_id' => 64,
    'subhargadiv5bahan_id' => 64,
    'subhargadiv5peralatan_id' => 64,
    'jenispekerjaan' => 'Pemasangan 1 Unit Smoke Detector Addressable',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '262450.10',
]);

hspkonstruksiumum5::create([
    'id' => 65,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 4,
    'hspkodepekerjaan5_id' => 6,
    'kode' => '13',
    'subhargadiv5_id' => 65,
    'subhargadiv5bahan_id' => 65,
    'subhargadiv5peralatan_id' => 65,
    'jenispekerjaan' => 'Pemasangan 1 Unit Lamp Indicator',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '483296.00',
]);

hspkonstruksiumum5::create([
    'id' => 66,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 4,
    'hspkodepekerjaan5_id' => 7,
    'kode' => '2',
    'subhargadiv5_id' => 66,
    'subhargadiv5bahan_id' => 66,
    'subhargadiv5peralatan_id' => 66,
    'jenispekerjaan' => 'Pemasangan 1 Unit Wiring Management',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '2582750.50',
]);

hspkonstruksiumum5::create([
    'id' => 67,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 4,
    'hspkodepekerjaan5_id' => 7,
    'kode' => '9',
    'subhargadiv5_id' => 67,
    'subhargadiv5bahan_id' => 67,
    'subhargadiv5peralatan_id' => 67,
    'jenispekerjaan' => 'Pemasangan 1 Unit Indoor Fix Dome IP Camera',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '2026546.50',
]);

hspkonstruksiumum5::create([
    'id' => 68,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 4,
    'hspkodepekerjaan5_id' => 8,
    'kode' => '14',
    'subhargadiv5_id' => 68,
    'subhargadiv5bahan_id' => 68,
    'subhargadiv5peralatan_id' => 68,
    'jenispekerjaan' => 'Pemasangan 1 Unit Ceilling Speaker',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '181600.10',
]);

hspkonstruksiumum5::create([
    'id' => 69,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 4,
    'hspkodepekerjaan5_id' => 8,
    'kode' => '15',
    'subhargadiv5_id' => 69,
    'subhargadiv5bahan_id' => 69,
    'subhargadiv5peralatan_id' => 69,
    'jenispekerjaan' => 'Pemasangan 1 Unit Wall Speaker',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '199833.70',
]);

hspkonstruksiumum5::create([
    'id' => 70,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 5,
    'hspkodepekerjaan5_id' => 9,
    'kode' => '1',
    'subhargadiv5_id' => 70,
    'subhargadiv5bahan_id' => 70,
    'subhargadiv5peralatan_id' => 70,
    'jenispekerjaan' => 'Pemasangan 1 Unit AC Wall Mounted Kap : 5.000 BTUH',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '5091970.40',
]);

hspkonstruksiumum5::create([
    'id' => 71,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 5,
    'hspkodepekerjaan5_id' => 9,
    'kode' => '2',
    'subhargadiv5_id' => 71,
    'subhargadiv5bahan_id' => 71,
    'subhargadiv5peralatan_id' => 71,
    'jenispekerjaan' => 'Pemasangan 1 Unit AC Wall Mounted Kap : 6.500 BTUH',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '6345462.20',
]);

hspkonstruksiumum5::create([
    'id' => 72,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 5,
    'hspkodepekerjaan5_id' => 9,
    'kode' => '4',
    'subhargadiv5_id' => 72,
    'subhargadiv5bahan_id' => 72,
    'subhargadiv5peralatan_id' => 72,
    'jenispekerjaan' => 'Pemasangan 1 Unit AC Wall Mounted Kap : 9.000 BTUH',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '8160462.20',
]);

hspkonstruksiumum5::create([
    'id' => 73,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 5,
    'hspkodepekerjaan5_id' => 9,
    'kode' => '5',
    'subhargadiv5_id' => 73,
    'subhargadiv5bahan_id' => 73,
    'subhargadiv5peralatan_id' => 73,
    'jenispekerjaan' => 'Pemasangan 1 Unit AC Wall Mounted Kap : 12.000 BTUH',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '9370462.20',
]);

hspkonstruksiumum5::create([
    'id' => 74,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 5,
    'hspkodepekerjaan5_id' => 10,
    'kode' => '2',
    'subhargadiv5_id' => 74,
    'subhargadiv5bahan_id' => 74,
    'subhargadiv5peralatan_id' => 74,
    'jenispekerjaan' => 'Pemasangan 1 m Pipa Tembaga B280 Dia. 9,5 mm (3/8")',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '146985.30',
]);

hspkonstruksiumum5::create([
    'id' => 75,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 5,
    'hspkodepekerjaan5_id' => 10,
    'kode' => '3',
    'subhargadiv5_id' => 75,
    'subhargadiv5bahan_id' => 75,
    'subhargadiv5peralatan_id' => 75,
    'jenispekerjaan' => 'Pemasangan 1 m Pipa Tembaga B280 Dia. 12,7 mm (1/2")',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '213422.00',
]);

hspkonstruksiumum5::create([
    'id' => 76,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 5,
    'hspkodepekerjaan5_id' => 10,
    'kode' => '4',
    'subhargadiv5_id' => 76,
    'subhargadiv5bahan_id' => 76,
    'subhargadiv5peralatan_id' => 76,
    'jenispekerjaan' => 'Pemasangan 1 m Pipa Tembaga B280 Dia. 15,9 mm (5/8")',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '301530.90',
]);

hspkonstruksiumum5::create([
    'id' => 77,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 5,
    'hspkodepekerjaan5_id' => 10,
    'kode' => '5',
    'subhargadiv5_id' => 77,
    'subhargadiv5bahan_id' => 77,
    'subhargadiv5peralatan_id' => 77,
    'jenispekerjaan' => 'Pemasangan 1 m Pipa Tembaga B280 Dia. 19,1 mm (3/4")',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '363826.10',
]);

hspkonstruksiumum5::create([
    'id' => 78,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 5,
    'hspkodepekerjaan5_id' => 10,
    'kode' => '6',
    'subhargadiv5_id' => 78,
    'subhargadiv5bahan_id' => 78,
    'subhargadiv5peralatan_id' => 78,
    'jenispekerjaan' => 'Pemasangan 1 m Pipa Tembaga B280 Dia. 22,2 mm (7/8")',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '446985.00',
]);

hspkonstruksiumum5::create([
    'id' => 79,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 5,
    'hspkodepekerjaan5_id' => 10,
    'kode' => '7',
    'subhargadiv5_id' => 79,
    'subhargadiv5bahan_id' => 79,
    'subhargadiv5peralatan_id' => 79,
    'jenispekerjaan' => 'Pemasangan 1 m Pipa Tembaga B280 Dia. 25,4 mm (1")',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '556409.70',
]);

hspkonstruksiumum5::create([
    'id' => 80,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 5,
    'hspkodepekerjaan5_id' => 10,
    'kode' => '8',
    'subhargadiv5_id' => 80,
    'subhargadiv5bahan_id' => 80,
    'subhargadiv5peralatan_id' => 80,
    'jenispekerjaan' => 'Pemasangan 1 m Pipa Tembaga B280 Dia. 28,6 mm (1-1/8")',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '627235.40',
]);

hspkonstruksiumum5::create([
    'id' => 81,
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 5,
    'hspkodepekerjaan5_id' => 11,
    'kode' => '2',
    'subhargadiv5_id' => 81,
    'subhargadiv5bahan_id' => 81,
    'subhargadiv5peralatan_id' => 81,
    'jenispekerjaan' => 'Pemasangan 1 Unit Fire Extinguisher 5 Kg',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '1364869.00',
]);

//======================== ===================================================================================
// AHSP KONSTRUKSI UMUM DIVISI 6 DAN DATA LAIN LAIN NYA

// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 6 ===========================
hsppaket6::create([
    'id' => 1,
    'hspdivisi_id' => 6,
    'hsppaket6' => 'Sistem Air Minum',
]);

hsppaket6::create([
    'id' => 2,
    'hspdivisi_id' => 6,
    'hsppaket6' => 'Grease trap',
]);

hsppaket6::create([
    'id' => 3,
    'hspdivisi_id' => 6,
    'hsppaket6' => 'Bak Kontrol',
]);

hsppaket6::create([
    'id' => 4,
    'hspdivisi_id' => 6,
    'hsppaket6' => 'Sistem Perpipaan Dalam Gedung',
]);

hsppaket6::create([
    'id' => 5,
    'hspdivisi_id' => 6,
    'hsppaket6' => 'Aksesoris Pipa',
]);

hsppaket6::create([
    'id' => 6,
    'hspdivisi_id' => 6,
    'hsppaket6' => 'Valve',
]);

// ================================================
hspkodepekerjaan6::create([
    'id' => 1,
    'hsppaket6_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Roof water tank',
]);

hspkodepekerjaan6::create([
    'id' => 2,
    'hsppaket6_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Pompa transfer dan booster',
]);

hspkodepekerjaan6::create([
    'id' => 3,
    'hsppaket6_id' => 2,
    'kodepekerjaan' => '3',
    'namapekerjaan' => 'Grease trap',
]);

hspkodepekerjaan6::create([
    'id' => 4,
    'hsppaket6_id' => 3,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Bak Kontrol',
]);

hspkodepekerjaan6::create([
    'id' => 5,
    'hsppaket6_id' => 4,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pipa PVC',
]);

hspkodepekerjaan6::create([
    'id' => 6,
    'hsppaket6_id' => 4,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Pipa Galvanis',
]);

hspkodepekerjaan6::create([
    'id' => 7,
    'hsppaket6_id' => 4,
    'kodepekerjaan' => '3',
    'namapekerjaan' => 'Pipa PPR (PolyPropylene Random)',
]);

hspkodepekerjaan6::create([
    'id' => 8,
    'hsppaket6_id' => 4,
    'kodepekerjaan' => '4',
    'namapekerjaan' => 'Pipa BS (Black Steel)',
]);

hspkodepekerjaan6::create([
    'id' => 9,
    'hsppaket6_id' => 6,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Gate valve',
]);

hspkodepekerjaan6::create([
    'id' => 10,
    'hsppaket6_id' => 6,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Ball valve',
]);

hspkodepekerjaan6::create([
    'id' => 11,
    'hsppaket6_id' => 6,
    'kodepekerjaan' => '3',
    'namapekerjaan' => 'Check valve',
]);

hspkodepekerjaan6::create([
    'id' => 12,
    'hsppaket6_id' => 6,
    'kodepekerjaan' => '11',
    'namapekerjaan' => 'Water Meter',
]);

hspkodepekerjaan6::create([
    'id' => 13,
    'hsppaket6_id' => 6,
    'kodepekerjaan' => '13',
    'namapekerjaan' => 'Roof Drain',
]);

hspkodepekerjaan6::create([
    'id' => 14,
    'hsppaket6_id' => 6,
    'kodepekerjaan' => '19',
    'namapekerjaan' => 'Water Level Control (WLC) & pengkabelan',
]);

hspkodepekerjaan6::create([
    'id' => 15,
    'hsppaket6_id' => 6,
    'kodepekerjaan' => '24',
    'namapekerjaan' => 'Dop PVC',
]);

//======================== ===================================================================================
// HSP PAKET DIVISI 6  HARGA MAS JAKI BLORA

hspkonstruksiumum6::create([
    'id' => 1,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 1,
    'kode' => '7',
    'subhargadiv6_id' => 1,
    'subhargadiv6bahan_id' => 1,
    'subhargadiv6peralatan_id' => 1,
    'jenispekerjaan' => 'Pemasangan 1 buah Tangki Toren Kap. 0,7 m3',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '1781487.40',
]);

hspkonstruksiumum6::create([
    'id' => 2,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 1,
    'kode' => '8',
    'subhargadiv6_id' => 2,
    'subhargadiv6bahan_id' => 2,
    'subhargadiv6peralatan_id' => 2,
    'jenispekerjaan' => 'Pemasangan 1 buah Tangki Toren Kap. 1,5 m3',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '1781487.40',
]);

hspkonstruksiumum6::create([
    'id' => 3,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 1,
    'kode' => '10',
    'subhargadiv6_id' => 3,
    'subhargadiv6bahan_id' => 3,
    'subhargadiv6peralatan_id' => 3,
    'jenispekerjaan' => 'Pemasangan 1 buah Tangki Toren Kap. 3 m3',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '6334704.20',
]);

hspkonstruksiumum6::create([
    'id' => 4,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 1,
    'kode' => '12',
    'subhargadiv6_id' => 4,
    'subhargadiv6bahan_id' => 4,
    'subhargadiv6peralatan_id' => 4,
    'jenispekerjaan' => 'Pemasangan 1 buah Tangki Toren Kap. 5 m3',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '11434304.20',
]);

hspkonstruksiumum6::create([
    'id' => 5,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 2,
    'kode' => '3',
    'subhargadiv6_id' => 5,
    'subhargadiv6bahan_id' => 5,
    'subhargadiv6peralatan_id' => 5,
    'jenispekerjaan' => 'Pemasangan 1 Unit Pompa Booster 150 lpm; Vertical In Line –',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '58170080.10',
]);

hspkonstruksiumum6::create([
    'id' => 6,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 2,
    'kode' => '4',
    'subhargadiv6_id' => 6,
    'subhargadiv6bahan_id' => 6,
    'subhargadiv6peralatan_id' => 6,
    'jenispekerjaan' => 'Pemasangan 1 Unit Pompa Jet 27 lpm',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '49861724.00',
]);

hspkonstruksiumum6::create([
    'id' => 7,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 2,
    'kode' => '6',
    'subhargadiv6_id' => 7,
    'subhargadiv6bahan_id' => 7,
    'subhargadiv6peralatan_id' => 7,
    'jenispekerjaan' => 'Pemasangan 1 Unit Pompa Jet 100 lpm',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '4728724.00',
]);

hspkonstruksiumum6::create([
    'id' => 8,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 2,
    'kode' => '8.a',
    'subhargadiv6_id' => 8,
    'subhargadiv6bahan_id' => 8,
    'subhargadiv6peralatan_id' => 8,
    'jenispekerjaan' => 'Pemasangan  1  Unit  Pompa  Sumbmersible ( Speed For Pump data = 10700 rpm, rateflow 5 m3/h, ratehead = 73 - 100 m  )',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '21030786.70',
]);

hspkonstruksiumum6::create([
    'id' => 9,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 2,
    'hspkodepekerjaan6_id' => 3,
    'kode' => '2',
    'subhargadiv6_id' => 9,
    'subhargadiv6bahan_id' => 9,
    'subhargadiv6peralatan_id' => 9,
    'jenispekerjaan' => 'Pemasangan 1 Unit Grease Trap Portable Stainless, Kap. 30 Liter',
    'satuanmaterial' => 'Unit',
    'hargasatuan' => '623877.10',
]);

hspkonstruksiumum6::create([
    'id' => 10,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 3,
    'hspkodepekerjaan6_id' => 4,
    'kode' => 1,
    'subhargadiv6_id' => 10,
    'subhargadiv6bahan_id' => 10,
    'subhargadiv6peralatan_id' => 10,
    'jenispekerjaan' => 'Pemasangan 1 buah Bak Kontrol Pasangan Bata 30 cm x 30 cm Tinggi 35 cm dengan Tutup Beton',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '550029.70',
]);

hspkonstruksiumum6::create([
    'id' => 11,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 3,
    'hspkodepekerjaan6_id' => 4,
    'kode' => 2,
    'subhargadiv6_id' => 11,
    'subhargadiv6bahan_id' => 11,
    'subhargadiv6peralatan_id' => 11,
    'jenispekerjaan' => 'Pemasangan 1 buah Bak Kontrol Pasangan Bata 45 cm x 45 cm Tinggi 50 cm dengan Tutup Beton',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '770319.00',
]);

hspkonstruksiumum6::create([
    'id' => 12,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 3,
    'hspkodepekerjaan6_id' => 4,
    'kode' => 3,
    'subhargadiv6_id' => 12,
    'subhargadiv6bahan_id' => 12,
    'subhargadiv6peralatan_id' => 12,
    'jenispekerjaan' => 'Pemasangan 1 buah Bak Kontrol Pasangan Bata 60 cm x 60 cm Tinggi 65 cm dengan Tutup Beton',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '935755.04',
]);

hspkonstruksiumum6::create([
    'id' => 13,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 5,
    'kode' => 1,
    'subhargadiv6_id' => 13,
    'subhargadiv6bahan_id' => 13,
    'subhargadiv6peralatan_id' => 13,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PVC AW, Dia. 1/2" (15 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '27141.40',
]);

hspkonstruksiumum6::create([
    'id' => 14,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 5,
    'kode' => 3,
    'subhargadiv6_id' => 14,
    'subhargadiv6bahan_id' => 14,
    'subhargadiv6peralatan_id' => 14,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PVC AW, Dia. 1/2" (15 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '46187.90',
]);

hspkonstruksiumum6::create([
    'id' => 15,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 5,
    'kode' => 5,
    'subhargadiv6_id' => 15,
    'subhargadiv6bahan_id' => 15,
    'subhargadiv6peralatan_id' => 15,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PVC AW, Dia. 1-1/2" (40 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '71588.00',
]);

hspkonstruksiumum6::create([
    'id' => 16,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 5,
    'kode' => 6,
    'subhargadiv6_id' => 16,
    'subhargadiv6bahan_id' => 16,
    'subhargadiv6peralatan_id' => 16,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PVC AW, Dia. 2" (50 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '82366.35',
]);

hspkonstruksiumum6::create([
    'id' => 17,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 5,
    'kode' => 8,
    'subhargadiv6_id' => 17,
    'subhargadiv6bahan_id' => 17,
    'subhargadiv6peralatan_id' => 17,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PVC AW, Dia. 3" (80 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '134786.30',
]);

hspkonstruksiumum6::create([
    'id' => 18,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 5,
    'kode' => 11,
    'subhargadiv6_id' => 18,
    'subhargadiv6bahan_id' => 18,
    'subhargadiv6peralatan_id' => 18,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PVC AW, Dia. 6" (150 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '463218.80',
]);

hspkonstruksiumum6::create([
    'id' => 19,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 5,
    'kode' => 12,
    'subhargadiv6_id' => 19,
    'subhargadiv6bahan_id' => 19,
    'subhargadiv6peralatan_id' => 19,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PVC AW, Dia. 8" (200 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '711183.00',
]);

hspkonstruksiumum6::create([
    'id' => 20,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 5,
    'kode' => 19,
    'subhargadiv6_id' => 20,
    'subhargadiv6bahan_id' => 20,
    'subhargadiv6peralatan_id' => 20,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PVC D, Dia. 2" (50 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '49270.10',
]);

hspkonstruksiumum6::create([
    'id' => 21,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 5,
    'kode' => 21,
    'subhargadiv6_id' => 21,
    'subhargadiv6bahan_id' => 21,
    'subhargadiv6peralatan_id' => 21,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PVC D, Dia. 3" (80 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '81752.55',
]);

hspkonstruksiumum6::create([
    'id' => 22,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 5,
    'kode' => 22,
    'subhargadiv6_id' => 22,
    'subhargadiv6bahan_id' => 22,
    'subhargadiv6peralatan_id' => 22,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PVC D, Dia. 4" (100 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '159415.30',
]);

hspkonstruksiumum6::create([
    'id' => 23,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 6,
    'kode' => 1,
    'subhargadiv6_id' => 23,
    'subhargadiv6bahan_id' => 23,
    'subhargadiv6peralatan_id' => 23,
    'jenispekerjaan' => 'Pemasangan 1 m Pipa Galvanis MED CLASS Dia. 1/2" (15 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '32731.60',
]);

hspkonstruksiumum6::create([
    'id' => 24,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 6,
    'kode' => 5,
    'subhargadiv6_id' => 24,
    'subhargadiv6bahan_id' => 24,
    'subhargadiv6peralatan_id' => 24,
    'jenispekerjaan' => 'Pemasangan 1 m Pipa Galvanis MED CLASS, Dia. 1-1/2" (40 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '70858.70',
]);

hspkonstruksiumum6::create([
    'id' => 25,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 6,
    'kode' => 6,
    'subhargadiv6_id' => 25,
    'subhargadiv6bahan_id' => 25,
    'subhargadiv6peralatan_id' => 25,
    'jenispekerjaan' => 'Pemasangan 1 m Pipa Galvanis MED CLASS, Dia. 2" (50 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '108476.50',
]);

hspkonstruksiumum6::create([
    'id' => 26,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 6,
    'kode' => 7,
    'subhargadiv6_id' => 26,
    'subhargadiv6bahan_id' => 26,
    'subhargadiv6peralatan_id' => 26,
    'jenispekerjaan' => 'Pemasangan 1 m Pipa Galvanis MED CLASS, Dia. 2-1/2" (65 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '136247.10',
]);

hspkonstruksiumum6::create([
    'id' => 27,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 6,
    'kode' => 8,
    'subhargadiv6_id' => 27,
    'subhargadiv6bahan_id' => 27,
    'subhargadiv6peralatan_id' => 27,
    'jenispekerjaan' => 'Pemasangan 1 m Pipa Galvanis MED CLASS, Dia. 3" (80 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '226221.60',
]);

hspkonstruksiumum6::create([
    'id' => 28,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 7,
    'kode' => 1,
    'subhargadiv6_id' => 28,
    'subhargadiv6bahan_id' => 28,
    'subhargadiv6peralatan_id' => 28,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PPR PN 10, Dia. 1/2" (15 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '26712.68',
]);

hspkonstruksiumum6::create([
    'id' => 29,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 7,
    'kode' => 3,
    'subhargadiv6_id' => 29,
    'subhargadiv6bahan_id' => 29,
    'subhargadiv6peralatan_id' => 29,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PPR PN 10, Dia. 1" (25 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '56216.88',
]);

hspkonstruksiumum6::create([
    'id' => 30,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 7,
    'kode' => 5,
    'subhargadiv6_id' => 30,
    'subhargadiv6bahan_id' => 30,
    'subhargadiv6peralatan_id' => 30,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PPR PN 10, Dia. 1-1/2", (40 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '124191.65',
]);

hspkonstruksiumum6::create([
    'id' => 31,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 7,
    'kode' => 6,
    'subhargadiv6_id' => 31,
    'subhargadiv6bahan_id' => 31,
    'subhargadiv6peralatan_id' => 31,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PPR PN 10, Dia. 2", (50 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '188267.06',
]);

hspkonstruksiumum6::create([
    'id' => 32,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 7,
    'kode' => 8,
    'subhargadiv6_id' => 32,
    'subhargadiv6bahan_id' => 32,
    'subhargadiv6peralatan_id' => 32,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PPR PN 10, Dia. 3", (80 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '371361.93',
]);

hspkonstruksiumum6::create([
    'id' => 33,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 7,
    'kode' => 9,
    'subhargadiv6_id' => 33,
    'subhargadiv6bahan_id' => 33,
    'subhargadiv6peralatan_id' => 33,
    'jenispekerjaan' => 'Pemasangan 1 m pipa PPR PN 10, Dia. 4", (100 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '545368.86',
]);

hspkonstruksiumum6::create([
    'id' => 34,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 8,
    'kode' => 1,
    'subhargadiv6_id' => 34,
    'subhargadiv6bahan_id' => 34,
    'subhargadiv6peralatan_id' => 34,
    'jenispekerjaan' => 'Pemasangan 1 m pipa BS MED CLASS Dia. 1/2" (15 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '51538.85',
]);

hspkonstruksiumum6::create([
    'id' => 35,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 8,
    'kode' => 3,
    'subhargadiv6_id' => 35,
    'subhargadiv6bahan_id' => 35,
    'subhargadiv6peralatan_id' => 35,
    'jenispekerjaan' => 'Pemasangan 1 m pipa BS MED CLASS, Dia. 1" (25 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '98994.50',
]);

hspkonstruksiumum6::create([
    'id' => 36,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 8,
    'kode' => 6,
    'subhargadiv6_id' => 36,
    'subhargadiv6bahan_id' => 36,
    'subhargadiv6peralatan_id' => 36,
    'jenispekerjaan' => 'Pemasangan 1 m pipa BS MED CLASS, Dia. 2" (50 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '202446.75',
]);

hspkonstruksiumum6::create([
    'id' => 37,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 8,
    'kode' => 8,
    'subhargadiv6_id' => 37,
    'subhargadiv6bahan_id' => 37,
    'subhargadiv6peralatan_id' => 37,
    'jenispekerjaan' => 'Pemasangan 1 m pipa BS MED CLASS, Dia. 3" (80 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '336939.35',
]);

hspkonstruksiumum6::create([
    'id' => 38,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 4,
    'hspkodepekerjaan6_id' => 8,
    'kode' => 9,
    'subhargadiv6_id' => 38,
    'subhargadiv6bahan_id' => 38,
    'subhargadiv6peralatan_id' => 38,
    'jenispekerjaan' => 'Pemasangan 1 m pipa BS MED CLASS, Dia. 4" (100 mm)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '478289.17',
]);

hspkonstruksiumum6::create([
    'id' => 39,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 9,
    'kode' => 1,
    'subhargadiv6_id' => 39,
    'subhargadiv6bahan_id' => 39,
    'subhargadiv6peralatan_id' => 39,
    'jenispekerjaan' => 'Pemasangan 1 buah gate valve 10 K, Dia. 1/2" (15 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '126704.60',
]);

hspkonstruksiumum6::create([
    'id' => 40,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 9,
    'kode' => 3,
    'subhargadiv6_id' => 40,
    'subhargadiv6bahan_id' => 40,
    'subhargadiv6peralatan_id' => 40,
    'jenispekerjaan' => 'Pemasangan 1 buah gate valve 10 K, Dia. 1" (25 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '312805.90',
]);

hspkonstruksiumum6::create([
    'id' => 41,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 9,
    'kode' => 5,
    'subhargadiv6_id' => 41,
    'subhargadiv6bahan_id' => 41,
    'subhargadiv6peralatan_id' => 41,
    'jenispekerjaan' => 'Pemasangan 1 buah gate valve 10 K, Dia. 1-1/2" (40 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '551463.00',
]);

hspkonstruksiumum6::create([
    'id' => 42,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 9,
    'kode' => 6,
    'subhargadiv6_id' => 42,
    'subhargadiv6bahan_id' => 42,
    'subhargadiv6peralatan_id' => 42,
    'jenispekerjaan' => 'Pemasangan 1 buah gate valve 10 K, Dia. 2" (50 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '688212.80',
]);

hspkonstruksiumum6::create([
    'id' => 43,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 9,
    'kode' => 8,
    'subhargadiv6_id' => 43,
    'subhargadiv6bahan_id' => 43,
    'subhargadiv6peralatan_id' => 43,
    'jenispekerjaan' => 'Pemasangan 1 buah gate valve 10 K, Dia. 3" (80 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '2060374.80',
]);

hspkonstruksiumum6::create([
    'id' => 44,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 9,
    'kode' => 9,
    'subhargadiv6_id' => 44,
    'subhargadiv6bahan_id' => 44,
    'subhargadiv6peralatan_id' => 44,
    'jenispekerjaan' => 'Pemasangan 1 buah gate valve 10 K, Dia. 4" (100 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '2628935.10',
]);

hspkonstruksiumum6::create([
    'id' => 45,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 10,
    'kode' => 1,
    'subhargadiv6_id' => 45,
    'subhargadiv6bahan_id' => 45,
    'subhargadiv6peralatan_id' => 45,
    'jenispekerjaan' => 'Pemasangan 1 buah ball valve, Dia. 1/2" (15 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '169082.10',
]);

hspkonstruksiumum6::create([
    'id' => 46,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 10,
    'kode' => 3,
    'subhargadiv6_id' => 46,
    'subhargadiv6bahan_id' => 46,
    'subhargadiv6peralatan_id' => 46,
    'jenispekerjaan' => 'Pemasangan 1 buah ball valve, Dia. 1" (25 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '293830.90',
]);

hspkonstruksiumum6::create([
    'id' => 47,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 10,
    'kode' => 5,
    'subhargadiv6_id' => 47,
    'subhargadiv6bahan_id' => 47,
    'subhargadiv6peralatan_id' => 47,
    'jenispekerjaan' => 'Pemasangan 1 buah ball valve, Dia. 1-1/2" (40 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '631158.00',
]);

hspkonstruksiumum6::create([
    'id' => 48,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 10,
    'kode' => 6,
    'subhargadiv6_id' => 48,
    'subhargadiv6bahan_id' => 48,
    'subhargadiv6peralatan_id' => 48,
    'jenispekerjaan' => 'Pemasangan 1 buah ball valve, Dia. 2" (50 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '1244812.80',
]);

hspkonstruksiumum6::create([
    'id' => 49,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 10,
    'kode' => 8,
    'subhargadiv6_id' => 49,
    'subhargadiv6bahan_id' => 49,
    'subhargadiv6peralatan_id' => 49,
    'jenispekerjaan' => 'Pemasangan 1 buah ball valve, Dia. 3" (80 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '4438464.80',
]);

hspkonstruksiumum6::create([
    'id' => 50,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 10,
    'kode' => 9,
    'subhargadiv6_id' => 50,
    'subhargadiv6bahan_id' => 50,
    'subhargadiv6peralatan_id' => 50,
    'jenispekerjaan' => 'Pemasangan 1 buah ball valve, Dia. 4" (100 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '8287802.60',
]);

hspkonstruksiumum6::create([
    'id' => 51,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 11,
    'kode' => 1,
    'subhargadiv6_id' => 51,
    'subhargadiv6bahan_id' => 51,
    'subhargadiv6peralatan_id' => 51,
    'jenispekerjaan' => 'Pemasangan 1 buah check valve 10 K, Dia. 1/2" (15 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '156432.10',
]);

hspkonstruksiumum6::create([
    'id' => 52,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 11,
    'kode' => 3,
    'subhargadiv6_id' => 52,
    'subhargadiv6bahan_id' => 52,
    'subhargadiv6peralatan_id' => 52,
    'jenispekerjaan' => 'Pemasangan 1 buah check valve 10 K, Dia. 1" (25 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '370110.40',
]);

hspkonstruksiumum6::create([
    'id' => 53,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 11,
    'kode' => 5,
    'subhargadiv6_id' => 53,
    'subhargadiv6bahan_id' => 53,
    'subhargadiv6peralatan_id' => 53,
    'jenispekerjaan' => 'Pemasangan 1 buah check valve 10 K, Dia. 1-1/2" (40 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '583088.00',
]);

hspkonstruksiumum6::create([
    'id' => 54,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 11,
    'kode' => 6,
    'subhargadiv6_id' => 54,
    'subhargadiv6bahan_id' => 54,
    'subhargadiv6peralatan_id' => 54,
    'jenispekerjaan' => 'Pemasangan 1 buah check valve 10 K, Dia. 2" (50 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '1133492.80',
]);

hspkonstruksiumum6::create([
    'id' => 55,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 11,
    'kode' => 8,
    'subhargadiv6_id' => 55,
    'subhargadiv6bahan_id' => 55,
    'subhargadiv6peralatan_id' => 55,
    'jenispekerjaan' => 'Pemasangan 1 buah check valve 10 K, Dia. 3" (80 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '2515114.80',
]);

hspkonstruksiumum6::create([
    'id' => 56,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 11,
    'kode' => 9,
    'subhargadiv6_id' => 56,
    'subhargadiv6bahan_id' => 56,
    'subhargadiv6peralatan_id' => 56,
    'jenispekerjaan' => 'Pemasangan 1 buah check valve 10 K, Dia. 4" (100 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '3386077.20',
]);

hspkonstruksiumum6::create([
    'id' => 57,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 11,
    'kode' => 11,
    'subhargadiv6_id' => 57,
    'subhargadiv6bahan_id' => 57,
    'subhargadiv6peralatan_id' => 57,
    'jenispekerjaan' => 'Pemasangan 1 buah check valve 10 K, Dia. 6" (150 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '7835928.10',
]);

hspkonstruksiumum6::create([
    'id' => 58,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 12,
    'kode' => '1.a',
    'subhargadiv6_id' => 58,
    'subhargadiv6bahan_id' => 58,
    'subhargadiv6peralatan_id' => 58,
    'jenispekerjaan' => 'Pemasangan 1 buah Water Meter Kuningan, Dia. 1/2" (15 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '491657.10',
]);

hspkonstruksiumum6::create([
    'id' => 59,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 13,
    'kode' => '1',
    'subhargadiv6_id' => 59,
    'subhargadiv6bahan_id' => 59,
    'subhargadiv6peralatan_id' => 59,
    'jenispekerjaan' => 'Pemasangan 1 buah roof drain, Dia. 2" (50 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '381118.10',
]);

hspkonstruksiumum6::create([
    'id' => 60,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 13,
    'kode' => '3',
    'subhargadiv6_id' => 60,
    'subhargadiv6bahan_id' => 60,
    'subhargadiv6peralatan_id' => 60,
    'jenispekerjaan' => 'Pemasangan 1 buah roof drain, Dia. 3" (80 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '488076.60',
]);

hspkonstruksiumum6::create([
    'id' => 61,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 13,
    'kode' => '4',
    'subhargadiv6_id' => 61,
    'subhargadiv6bahan_id' => 61,
    'subhargadiv6peralatan_id' => 61,
    'jenispekerjaan' => 'Pemasangan 1 buah roof drain, Dia. 4" (100 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '530075.70',
]);

hspkonstruksiumum6::create([
    'id' => 62,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 14,
    'kode' => '1',
    'subhargadiv6_id' => 62,
    'subhargadiv6bahan_id' => 62,
    'subhargadiv6peralatan_id' => 62,
    'jenispekerjaan' => 'Pemasangan 1 buah WLC & pengkabelan',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '3528344.60',
]);

hspkonstruksiumum6::create([
    'id' => 63,
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 6,
    'hspkodepekerjaan6_id' => 15,
    'kode' => '1.a',
    'subhargadiv6_id' => 63,
    'subhargadiv6bahan_id' => 63,
    'subhargadiv6peralatan_id' => 63,
    'jenispekerjaan' => 'Pemasangan 1 buah DOP PVC, Dia. 3" (80 mm)',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '20603.00',
]);


//======================== ===================================================================================
// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 7 ===========================
hsppaket7::create([
    'id' => 1,
    'hspdivisi_id' => 7,
    'hsppaket7' => 'Jalan Paving Block',
]);

hspkodepekerjaan7::create([
    'id' => 1,
    'hsppaket7_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pemasangan Paving Block',
]);

hspkodepekerjaan7::create([
    'id' => 2,
    'hsppaket7_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Pemasangan Kanstin',
]);


//======================== ===================================================================================
// AHSP KONSTRUKSI UMUM DIVISI 7 DAN DATA LAIN LAIN NYA

hspkonstruksiumum7::create([
    'id' => 1,
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '1',
    'subhargadiv7_id' => 1,
    'subhargadiv7bahan_id' => 1,
    'subhargadiv7peralatan_id' => 1,
    'jenispekerjaan' => 'Pemasangan 1 m2 Paving block (Blok Beton) Natural Tebal 6 cm fc 20 MPa untuk Jalan Lingkungan (Jalan Lokal) secara manual',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '140093.25',
]);

hspkonstruksiumum7::create([
    'id' => 2,
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '1.a',
    'subhargadiv7_id' => 2,
    'subhargadiv7bahan_id' => 2,
    'subhargadiv7peralatan_id' => 2,
    'jenispekerjaan' => 'Pemasangan 1 m2 Pengunci Topi Uskup Tebal 6 cm fc 20 MPa untuk Jalan Lingkungan (Jalan Lokal) secara manual',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '193509.25',
]);

hspkonstruksiumum7::create([
    'id' => 3,
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '2',
    'subhargadiv7_id' => 3,
    'subhargadiv7bahan_id' => 3,
    'subhargadiv7peralatan_id' => 3,
    'jenispekerjaan' => 'Pemasangan 1 m2 Paving block (Blok Beton) Natural Tebal 6 cm 25 MPa untuk Jalan Akses/Penghubung (Jalan Kolektor) secara manual ',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '142403.25',
]);

hspkonstruksiumum7::create([
    'id' => 4,
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '2.a',
    'subhargadiv7_id' => 4,
    'subhargadiv7bahan_id' => 4,
    'subhargadiv7peralatan_id' => 4,
    'jenispekerjaan' => 'Pemasangan 1 m2 Pengunci Topi Uskup Tebal 6 cm 25 MPa dan Pengunci Topi Uskup untuk Jalan Akses/Penghubung (Jalan Kolektor) secara manual ',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '248509.25',
]);

hspkonstruksiumum7::create([
    'id' => 5,
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '3',
    'subhargadiv7_id' => 5,
    'subhargadiv7bahan_id' => 5,
    'subhargadiv7peralatan_id' => 5,
    'jenispekerjaan' => 'Pemasangan 1 m2 Paving block (Blok Beton) Natural Tebal 6 cm fc 20 MPa untuk Jalan Lingkungan (Jalan Lokal) secara semi mekanis',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '144481.72',
]);

hspkonstruksiumum7::create([
    'id' => 6,
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '3.a',
    'subhargadiv7_id' => 6,
    'subhargadiv7bahan_id' => 6,
    'subhargadiv7peralatan_id' => 6,
    'jenispekerjaan' => 'Pemasangan 1 m2 Pengunci Topi Uskup Tebal 6 cm fc 20 MPa untuk Jalan Lingkungan (Jalan Lokal) secara semi mekanis',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '197897.72',
]);

hspkonstruksiumum7::create([
    'id' => 7,
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '4',
    'subhargadiv7_id' => 7,
    'subhargadiv7bahan_id' => 7,
    'subhargadiv7peralatan_id' => 7,
    'jenispekerjaan' => 'Pemasangan 1 m2 Paving block (Blok Beton) Natural Tebal 6 cm 25 MPa untuk Jalan Akses/Penghubung (Jalan Kolektor) secara semi mekanis',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '146791.72',
]);

hspkonstruksiumum7::create([
    'id' => 8,
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '4.a',
    'subhargadiv7_id' => 8,
    'subhargadiv7bahan_id' => 8,
    'subhargadiv7peralatan_id' => 8,
    'jenispekerjaan' => 'Pemasangan 1 m2 Pengunci Topi Uskup Tebal 6 cm fc 25 MPa untuk Jalan Akses/Penghubung (Jalan Kolektor) secara semi mekanis',
    'satuanmaterial' => 'M2',
    'hargasatuan' => '252897.72',
]);

hspkonstruksiumum7::create([
    'id' => 9,
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 2,
    'kode' => '1',
    'subhargadiv7_id' => 9,
    'subhargadiv7bahan_id' => 9,
    'subhargadiv7peralatan_id' => 9,
    'jenispekerjaan' => 'Pemasangan  1  m1  Kanstin,  tebal  10x18x40  cm  untuk  Jalan Lingkungan (Jalan Lokal)',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '60570.37',
]);


//======================== ===================================================================================
// AHSP KONSTRUKSI UMUM DIVISI 8 DAN DATA LAIN LAIN NYA

// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 8 ===========================
hsppaket8::create([
    'id' => 1,
    'hspdivisi_id' => 8,
    'hsppaket8' => null,
]);

hsppaket8::create([
    'id' => 2,
    'hspdivisi_id' => 8,
    'hsppaket8' => 'Saluran Buis Beton',
]);

hspkodepekerjaan8::create([
    'id' => 1,
    'hsppaket8_id' => 2,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Saluran Buis Beton',
]);

hspkonstruksiumum8::create([
    'id' => 1,
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '1',
    'subhargadiv8_id' => 1,
    'subhargadiv8bahan_id' => 1,
    'subhargadiv8peralatan_id' => 1,
    'jenispekerjaan' => '1 m’ Buis Beton 1/2 D 30 - 100 cm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '73291.41',
]);

hspkonstruksiumum8::create([
    'id' => 2,
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '2',
    'subhargadiv8_id' => 2,
    'subhargadiv8bahan_id' => 2,
    'subhargadiv8peralatan_id' => 2,
    'jenispekerjaan' => '1 m’ Buis Beton 1/2 D 40 - 100 cm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '95929.28',
]);

hspkonstruksiumum8::create([
    'id' => 3,
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '3',
    'subhargadiv8_id' => 3,
    'subhargadiv8bahan_id' => 3,
    'subhargadiv8peralatan_id' => 3,
    'jenispekerjaan' => '1 m’ Buis Beton 1/2 D 50 - 100 cm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '136723.65',
]);

hspkonstruksiumum8::create([
    'id' => 4,
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '4',
    'subhargadiv8_id' => 4,
    'subhargadiv8bahan_id' => 4,
    'subhargadiv8peralatan_id' => 4,
    'jenispekerjaan' => '1 m’ Buis Beton 1/2 D 60 - 100 cm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '204680.03',
]);

hspkonstruksiumum8::create([
    'id' => 5,
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '5',
    'subhargadiv8_id' => 5,
    'subhargadiv8bahan_id' => 5,
    'subhargadiv8peralatan_id' => 5,
    'jenispekerjaan' => '1 m’ Buis Beton 1/2 D 80 - 100 cm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '227324.33',
]);

hspkonstruksiumum8::create([
    'id' => 6,
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '6',
    'subhargadiv8_id' => 6,
    'subhargadiv8bahan_id' => 6,
    'subhargadiv8peralatan_id' => 6,
    'jenispekerjaan' => '1 m’ Buis Beton 1/2 D 100 - 100 cm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '248192.04',
]);

hspkonstruksiumum8::create([
    'id' => 7,
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '7',
    'subhargadiv8_id' => 7,
    'subhargadiv8bahan_id' => 7,
    'subhargadiv8peralatan_id' => 7,
    'jenispekerjaan' => '1 m’ Buis Beton D 30 - 100 cm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '139304.64',
]);

hspkonstruksiumum8::create([
    'id' => 8,
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '8',
    'subhargadiv8_id' => 8,
    'subhargadiv8bahan_id' => 8,
    'subhargadiv8peralatan_id' => 8,
    'jenispekerjaan' => '1 m’ Buis Beton D 40 - 100 cm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '196589.22',
]);

hspkonstruksiumum8::create([
    'id' => 9,
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '9',
    'subhargadiv8_id' => 9,
    'subhargadiv8bahan_id' => 9,
    'subhargadiv8peralatan_id' => 9,
    'jenispekerjaan' => '1 m’ Buis Beton D 50 - 100 cm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '287201.75',
]);

hspkonstruksiumum8::create([
    'id' => 10,
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '10',
    'subhargadiv8_id' => 10,
    'subhargadiv8bahan_id' => 10,
    'subhargadiv8peralatan_id' => 10,
    'jenispekerjaan' => '1 m’ Buis Beton D 60 - 100 cm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '381067.98',
]);

hspkonstruksiumum8::create([
    'id' => 11,
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '11',
    'subhargadiv8_id' => 11,
    'subhargadiv8bahan_id' => 11,
    'subhargadiv8peralatan_id' => 11,
    'jenispekerjaan' => '1 m’ Buis Beton D 80 - 100 cm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '405534.38',
]);

hspkonstruksiumum8::create([
    'id' => 12,
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '12',
    'subhargadiv8_id' => 12,
    'subhargadiv8bahan_id' => 12,
    'subhargadiv8peralatan_id' => 12,
    'jenispekerjaan' => '1 m’ Buis Beton D 100 - 100 cm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '485505.48',
]);


//======================== ===================================================================================
// AHSP KONSTRUKSI UMUM DIVISI 9 DAN DATA LAIN LAIN NYA

hsppaket9::create([
    'id' => 1,
    'hspdivisi_id' => 9,
    'hsppaket9' => 'Pipa PVC',
]);

hsppaket9::create([
    'id' => 2,
    'hspdivisi_id' => 9,
    'hsppaket9' => 'Pipa Galvanis',
]);

hsppaket9::create([
    'id' => 3,
    'hspdivisi_id' => 9,
    'hsppaket9' => 'Pipa HDPE/PE',
]);

hsppaket9::create([
    'id' => 7,
    'hspdivisi_id' => 9,
    'hsppaket9' => 'Aksesoris Pipa',
]);

// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 9 ===========================
hspkodepekerjaan9::create([
    'id' => 1,
    'hsppaket9_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pemasangan Pipa PVC',
]);

hspkodepekerjaan9::create([
    'id' => 2,
    'hsppaket9_id' => 2,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pemasangan Pipa Galvanis',
]);

hspkodepekerjaan9::create([
    'id' => 3,
    'hsppaket9_id' => 3,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pemasangan Pipa HDPE',
]);

hspkodepekerjaan9::create([
    'id' => 4,
    'hsppaket9_id' => 7,
    'kodepekerjaan' => '3',
    'namapekerjaan' => 'Pasangan Aksesoris Tee',
]);


//======================== ===================================================================================
// AHSP KONSTRUKSI UMUM DIVISI 9 DAN DATA LAIN LAIN NYA
hspkonstruksiumum9::create([
    'id' => 1,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 1,
    'hspkodepekerjaan9_id' => 1,
    'kode' => '1.a',
    'subhargadiv9_id' => 1,
    'subhargadiv9bahan_id' => 1,
    'subhargadiv9peralatan_id' => 1,
    'jenispekerjaan' => 'Pasangan 1 m Pipa PVC Ø 12,5 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '29354.60',
]);

hspkonstruksiumum9::create([
    'id' => 2,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 1,
    'hspkodepekerjaan9_id' => 1,
    'kode' => '1.b',
    'subhargadiv9_id' => 2,
    'subhargadiv9bahan_id' => 2,
    'subhargadiv9peralatan_id' => 2,
    'jenispekerjaan' => 'Pasangan 1 m Pipa PVC Ø 25 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '39254.60',
]);

hspkonstruksiumum9::create([
    'id' => 3,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 1,
    'hspkodepekerjaan9_id' => 1,
    'kode' => '1.c',
    'subhargadiv9_id' => 3,
    'subhargadiv9bahan_id' => 3,
    'subhargadiv9peralatan_id' => 3,
    'jenispekerjaan' => 'Pasangan 1 m Pipa PVC Ø 37,5 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '53004.60',
]);

hspkonstruksiumum9::create([
    'id' => 4,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 1,
    'hspkodepekerjaan9_id' => 1,
    'kode' => '1.d',
    'subhargadiv9_id' => 4,
    'subhargadiv9bahan_id' => 4,
    'subhargadiv9peralatan_id' => 4,
    'jenispekerjaan' => 'Pasangan 1 m Pipa PVC Ø 50 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '56854.60',
]);

hspkonstruksiumum9::create([
    'id' => 5,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 1,
    'hspkodepekerjaan9_id' => 1,
    'kode' => '1.e',
    'subhargadiv9_id' => 5,
    'subhargadiv9bahan_id' => 5,
    'subhargadiv9peralatan_id' => 5,
    'jenispekerjaan' => 'Pasangan 1 m Pipa PVC Ø 75 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '86004.60',
]);

hspkonstruksiumum9::create([
    'id' => 6,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 1,
    'hspkodepekerjaan9_id' => 1,
    'kode' => '2.a',
    'subhargadiv9_id' => 6,
    'subhargadiv9bahan_id' => 6,
    'subhargadiv9peralatan_id' => 6,
    'jenispekerjaan' => 'Pasangan 1 m Pipa PVC Ø 100 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '200973.30',
]);

hspkonstruksiumum9::create([
    'id' => 7,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 2,
    'hspkodepekerjaan9_id' => 2,
    'kode' => '1.a',
    'subhargadiv9_id' => 7,
    'subhargadiv9bahan_id' => 7,
    'subhargadiv9peralatan_id' => 7,
    'jenispekerjaan' => 'Pasangan 1 m Pipa Galvanis Ø 12,5 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '82788.57',
]);

hspkonstruksiumum9::create([
    'id' => 8,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 2,
    'hspkodepekerjaan9_id' => 2,
    'kode' => '1.c',
    'subhargadiv9_id' => 8,
    'subhargadiv9bahan_id' => 8,
    'subhargadiv9peralatan_id' => 8,
    'jenispekerjaan' => 'Pasangan 1 m Pipa Galvanis Ø 37,5 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '93055.23',
]);

hspkonstruksiumum9::create([
    'id' => 9,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 2,
    'hspkodepekerjaan9_id' => 2,
    'kode' => '1.d',
    'subhargadiv9_id' => 9,
    'subhargadiv9bahan_id' => 9,
    'subhargadiv9peralatan_id' => 9,
    'jenispekerjaan' => 'Pasangan 1 m Pipa Galvanis Ø 50 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '110655.23',
]);

hspkonstruksiumum9::create([
    'id' => 10,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 2,
    'hspkodepekerjaan9_id' => 2,
    'kode' => '1',
    'subhargadiv9_id' => 10,
    'subhargadiv9bahan_id' => 10,
    'subhargadiv9peralatan_id' => 10,
    'jenispekerjaan' => 'Pasangan 1 m Pipa Galvanis Ø 63 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '121838.57',
]);

hspkonstruksiumum9::create([
    'id' => 11,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 2,
    'hspkodepekerjaan9_id' => 2,
    'kode' => '1.e',
    'subhargadiv9_id' => 11,
    'subhargadiv9bahan_id' => 11,
    'subhargadiv9peralatan_id' => 11,
    'jenispekerjaan' => 'Pasangan 1 m Pipa Galvanis Ø 75 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '167121.90',
]);

hspkonstruksiumum9::create([
    'id' => 12,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 3,
    'hspkodepekerjaan9_id' => 3,
    'kode' => '1.a',
    'subhargadiv9_id' => 12,
    'subhargadiv9bahan_id' => 12,
    'subhargadiv9peralatan_id' => 12,
    'jenispekerjaan' => 'Pasangan 1 m Pipa HDPE Ø 12,5 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '21027.60',
]);

hspkonstruksiumum9::create([
    'id' => 13,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 3,
    'hspkodepekerjaan9_id' => 3,
    'kode' => '1.b',
    'subhargadiv9_id' => 13,
    'subhargadiv9bahan_id' => 13,
    'subhargadiv9peralatan_id' => 13,
    'jenispekerjaan' => 'Pasangan 1 m Pipa HDPE Ø 37,5 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '44677.60',
]);

hspkonstruksiumum9::create([
    'id' => 14,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 3,
    'hspkodepekerjaan9_id' => 3,
    'kode' => '1.c',
    'subhargadiv9_id' => 14,
    'subhargadiv9bahan_id' => 14,
    'subhargadiv9peralatan_id' => 14,
    'jenispekerjaan' => 'Pasangan 1 m Pipa HDPE Ø 50 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '53807.60',
]);

hspkonstruksiumum9::create([
    'id' => 15,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 3,
    'hspkodepekerjaan9_id' => 3,
    'kode' => '1.d',
    'subhargadiv9_id' => 15,
    'subhargadiv9bahan_id' => 15,
    'subhargadiv9peralatan_id' => 15,
    'jenispekerjaan' => 'Pasangan 1 m Pipa HDPE Ø 75 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '95827.60',
]);

hspkonstruksiumum9::create([
    'id' => 16,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 3,
    'hspkodepekerjaan9_id' => 3,
    'kode' => '2',
    'subhargadiv9_id' => 16,
    'subhargadiv9bahan_id' => 16,
    'subhargadiv9peralatan_id' => 16,
    'jenispekerjaan' => 'Pasangan 1 m Pipa HDPE Ø 100 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '137661.70',
]);

hspkonstruksiumum9::create([
    'id' => 17,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 3,
    'hspkodepekerjaan9_id' => 3,
    'kode' => '4',
    'subhargadiv9_id' => 17,
    'subhargadiv9bahan_id' => 17,
    'subhargadiv9peralatan_id' => 17,
    'jenispekerjaan' => 'Pasangan 1 m Pipa HDPE  Ø 150 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '277630.10',
]);

hspkonstruksiumum9::create([
    'id' => 18,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.a',
    'subhargadiv9_id' => 18,
    'subhargadiv9bahan_id' => 18,
    'subhargadiv9peralatan_id' => 18,
    'jenispekerjaan' => 'Pasangan 1 Buah Tee galvanish Ø 12,5 mm',
    'satuanmaterial' => 'M1',
    'hargasatuan' => '51608.70',
]);

hspkonstruksiumum9::create([
    'id' => 19,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.b',
    'subhargadiv9_id' => 19,
    'subhargadiv9bahan_id' => 19,
    'subhargadiv9peralatan_id' => 19,
    'jenispekerjaan' => 'Pasangan 1 Buah Valve socket Ø 12,5 mm',
    'satuanmaterial' => 'Buah',
    // 'satuanmaterial' => 'M1',
    'hargasatuan' => '51608.70',
]);

hspkonstruksiumum9::create([
    'id' => 20,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.c',
    'subhargadiv9_id' => 20,
    'subhargadiv9bahan_id' => 20,
    'subhargadiv9peralatan_id' => 20,
    'jenispekerjaan' => 'Pasangan 1 Buah Clam sadle 2x 1,5 "',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '73608.70',
]);

hspkonstruksiumum9::create([
    'id' => 21,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.d',
    'subhargadiv9_id' => 21,
    'subhargadiv9bahan_id' => 21,
    'subhargadiv9peralatan_id' => 21,
    'jenispekerjaan' => 'Pasangan 1 Buah Knee galvanish 0,5"',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '51608.70',
]);

hspkonstruksiumum9::create([
    'id' => 22,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.e',
    'subhargadiv9_id' => 22,
    'subhargadiv9bahan_id' => 22,
    'subhargadiv9peralatan_id' => 22,
    'jenispekerjaan' => 'Pasangan 1 Buah Water moor kuningan 0,5"',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '54358.70',
]);

hspkonstruksiumum9::create([
    'id' => 23,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.f',
    'subhargadiv9_id' => 23,
    'subhargadiv9bahan_id' => 23,
    'subhargadiv9peralatan_id' => 23,
    'jenispekerjaan' => 'Pasangan 1 Buah Double nippel galvanish 0,5"',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '51608.70',
]);

hspkonstruksiumum9::create([
    'id' => 24,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.g',
    'subhargadiv9_id' => 24,
    'subhargadiv9bahan_id' => 24,
    'subhargadiv9peralatan_id' => 24,
    'jenispekerjaan' => 'Pasangan 1 Buah Fouket socket galvanish 0,5"',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '68108.70',
]);

hspkonstruksiumum9::create([
    'id' => 25,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.h',
    'subhargadiv9_id' => 25,
    'subhargadiv9bahan_id' => 25,
    'subhargadiv9peralatan_id' => 25,
    'jenispekerjaan' => 'Pasangan 1 Buah Fouket socket galvanish 0,5"',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '57108.70',
]);

hspkonstruksiumum9::create([
    'id' => 26,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.i',
    'subhargadiv9_id' => 26,
    'subhargadiv9bahan_id' => 26,
    'subhargadiv9peralatan_id' => 26,
    'jenispekerjaan' => 'Pasangan 1 Buah Fit kran kuningan 0,5"',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '51608.70',
]);

hspkonstruksiumum9::create([
    'id' => 27,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.j',
    'subhargadiv9_id' => 27,
    'subhargadiv9bahan_id' => 27,
    'subhargadiv9peralatan_id' => 27,
    'jenispekerjaan' => 'Pasangan 1 Buah Bok meter air + Logo',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '194608.70',
]);

hspkonstruksiumum9::create([
    'id' => 28,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.k',
    'subhargadiv9_id' => 28,
    'subhargadiv9bahan_id' => 28,
    'subhargadiv9peralatan_id' => 28,
    'jenispekerjaan' => 'Pasangan 1 Buah Katup searah kuningan 0,5"',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '111008.70',
]);

hspkonstruksiumum9::create([
    'id' => 29,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.l',
    'subhargadiv9_id' => 29,
    'subhargadiv9bahan_id' => 29,
    'subhargadiv9peralatan_id' => 29,
    'jenispekerjaan' => 'Pasangan 1 Buah Plug kran kuningan 0,5"',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '117608.70',
]);

hspkonstruksiumum9::create([
    'id' => 30,
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.m',
    'subhargadiv9_id' => 30,
    'subhargadiv9bahan_id' => 30,
    'subhargadiv9peralatan_id' => 30,
    'jenispekerjaan' => 'Pasangan 1 Buah Fouket elbow galvanish 0,5"',
    'satuanmaterial' => 'Buah',
    'hargasatuan' => '51608.70',
]);



// BATAS DATABASE AHSP

paketstatuspekerjaan::create([
    'id' => 1,
    'paketstatuspekerjaan' => 'Pekerjaan Konstruksi Tender',
]);

paketstatuspekerjaan::create([
    'id' => 2,
    'paketstatuspekerjaan' => 'Pekerjaan Konstruksi Non Tender',
]);

paketstatuspekerjaan::create([
    'id' => 3,
    'paketstatuspekerjaan' => 'Pekerjaan Konsultasi Konstruksi Tender',
]);

paketstatuspekerjaan::create([
    'id' => 4,
    'paketstatuspekerjaan' => 'Pekerjaan Konsultasi Konstruksi Non Tender',
]);


//==========================================================================================================
// DATA PAKET PEERJAAN MASJAKI
paketpekerjaanmasjaki::create([
    'prosespaket_id'            => 1,
    'profiljenispekerjaan_id'    => 1,
    'paketstatuspekerjaan_id'    => 1,
    'namapekerjaan'              => 'Rehabilitasi Checkdam Talokwohmojo Kec Ngawen Lanjutan',
    'tahunpilihan_id'            => 4,
    'cvptpenyedia'               => 'CV Restu Bumi Mustika',
    'nib'                        => '1105240037134',
    'nilaikontrak'               => 691260716.59,
    'sumberdana_id'              => 2,
    'jeniskontrak'               => 'Harga Satuan',
    'karakteristikkontrak'       => 'Tahun Tunggal', // Duplikat dihapus
    'bulanmulai'                 => '2024-08-01',
    'bulanselesai'               => '2024-12-01',
    'progress'                   => 50,
    'dinas'                      => 'Dinas Pekerjaan Umum dan Penataan Ruang'
]);

paketpekerjaanmasjaki::create([
    'prosespaket_id'            => 1,
    'profiljenispekerjaan_id'    => 1,
    'paketstatuspekerjaan_id'    => 2,
    'namapekerjaan'              => 'BELANJA MODAL BANGUNAN KESEHATAN-BELANJA MODAL PAGAR',
    'tahunpilihan_id'            => 4,
    'cvptpenyedia'               => 'CV. REZEKY MUJI KONSTRUKSI',
    'nib'                        => '3011220047491',
    'nilaikontrak'               => 857589920.00,
    'sumberdana_id'              => 2,
    'jeniskontrak'               => 'Harga Satuan',
    'karakteristikkontrak'       => 'Tahun Tunggal', // Duplikat dihapus
    'bulanmulai'                 => '2024-10-01',
    'bulanselesai'               => '2024-12-01',
    'progress'                   => 50,
    'dinas'                      => 'Dinas Pekerjaan Umum dan Penataan Ruang'
]);

paketpekerjaanmasjaki::create([
    'prosespaket_id'            => 1,
    'profiljenispekerjaan_id'    => 1,
    'paketstatuspekerjaan_id'    => 3,
    'namapekerjaan'              => 'Pembangunan Saluran Pengendali Banjir Kecamatan Cepu Lanjutan',
    'tahunpilihan_id'            => 4,
    'cvptpenyedia'               => 'CV. KINAN KARYA GEMILANG',
    'nib'                        => '0260010050988',
    'nilaikontrak'               => 763241000.00,
    'sumberdana_id'              => 2,
    'jeniskontrak'               => 'Harga Satuan',
    'karakteristikkontrak'       => 'Tahun Tunggal', // Duplikat dihapus
    'bulanmulai'                 => '2024-07-01',
    'bulanselesai'               => '2024-12-01',
    'progress'                   => 50,
    'dinas'                      => 'Dinas Pekerjaan Umum dan Penataan Ruang'
]);

paketpekerjaanmasjaki::create([
    'prosespaket_id'            => 1,
    'profiljenispekerjaan_id'    => 1,
    'paketstatuspekerjaan_id'    => 3,
    'namapekerjaan'              => 'Pembangunan Saluran Pengendali Banjir Ruas Jalan Sonokidul Kecamatan Kunduran',
    'tahunpilihan_id'            => 4,
    'cvptpenyedia'               => 'CV Restu Bumi Mustika',
    'nib'                        => '1105240037134',
    'nilaikontrak'               => 451076000.00,
    'sumberdana_id'              => 2,
    'jeniskontrak'               => 'Harga Satuan',
    'karakteristikkontrak'       => 'Tahun Tunggal', // Duplikat dihapus
    'bulanmulai'                 => '2024-08-01',
    'bulanselesai'               => '2024-12-01',
    'progress'                   => 50,
    'dinas'                      => 'Dinas Pekerjaan Umum dan Penataan Ruang'
]);

paketpekerjaanmasjaki::create([
    'prosespaket_id'            => 1,
    'profiljenispekerjaan_id'    => 1,
    'paketstatuspekerjaan_id'    => 3,
    'namapekerjaan'              => 'PEMBANGUNAN SARANA DAN PRASARANA DRAINASE LINGKUNGAN PERMUKIMAN KUMUH DRAINASE LINGKUNGAN RT 2 RW 9 KELURAHAN CEPU KECAMATAN CEPU KAB. BLORA',
    'tahunpilihan_id'            => 4,
    'cvptpenyedia'               => 'CV.KEMBAR DUA',
    'nib'                        => '0246000912019',
    'nilaikontrak'               => 161453878.91,
    'sumberdana_id'              => 2,
    'jeniskontrak'               => 'Harga Satuan',
    'karakteristikkontrak'       => 'Tahun Tunggal', // Duplikat dihapus
    'bulanmulai'                 => '2024-08-01',
    'bulanselesai'               => '2024-11-01',
    'progress'                   => 50,
    'dinas'                      => 'DINAS PERUMAHAN PEMUKIMAN DAN PERHUBUNGAN'
]);

paketpekerjaanmasjaki::create([
    'prosespaket_id'            => 1,
    'profiljenispekerjaan_id'    => 1,
    'paketstatuspekerjaan_id'    => 3,
    'namapekerjaan'              => 'Pembangunan Saluran Pengendali Banjir Kel. Kunduran Kec. Kunduran Lanjutan',
    'tahunpilihan_id'            => 4,
    'cvptpenyedia'               => 'CV. WIRATAMA GEMILANG',
    'nib'                        => 'N/A',
    'nilaikontrak'               =>  421000000.00,
    'sumberdana_id'              => 2,
    'jeniskontrak'               => 'Harga Satuan',
    'karakteristikkontrak'       => 'Tahun Tunggal', // Duplikat dihapus
    'bulanmulai'                 => '2024-08-01',
    'bulanselesai'               => '2024-12-01',
    'progress'                   => 50,
    'dinas'                      => 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG'
]);

//==========================================================================================================
// DATA PESERTA PELATIHAN KAB BLORA JASA KONSTRUSI
pesertapelatihan::create([
    'agendapelatihan_id'            => 1,
    'user_id'                       => 1,
    'jenjangpendidikan_id'          => 2,
    'nik'                 => '3205270107200023',
    'jeniskelamin'                 => 'Laki-laki',
    'tanggallahir'                 => '2000-07-01',
    'notelepon'                 => '081321455855',
    'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    // 'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    'sertifikat'                 => null,
    'verifikasi'                 => 'SETUJU',
]);
pesertapelatihan::create([
    'agendapelatihan_id'            => 2,
    'user_id'                       => 2,
    'jenjangpendidikan_id'          => 2,
    'nik'                 => '3205270107200023',
    'jeniskelamin'                 => 'Laki-laki',
    'tanggallahir'                 => '2000-07-01',
    'notelepon'                 => '081321455855',
    'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    // 'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    'sertifikat'                 => null,
    'verifikasi'                 => 'SETUJU',
]);
pesertapelatihan::create([
    'agendapelatihan_id'            => 3,
    'user_id'                       => 3,
    'jenjangpendidikan_id'          => 2,
    'nik'                 => '3205270107200023',
    'jeniskelamin'                 => 'Laki-laki',
    'tanggallahir'                 => '2000-07-01',
    'notelepon'                 => '081321455855',
    'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    // 'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    'sertifikat'                 => null,
    'verifikasi'                 => 'SETUJU',
]);
pesertapelatihan::create([
    'agendapelatihan_id'            => 1,
    'user_id'                       => 2,
    'jenjangpendidikan_id'          => 2,
    'nik'                 => '3205270107200023',
    'jeniskelamin'                 => 'Laki-laki',
    'tanggallahir'                 => '2000-07-01',
    'notelepon'                 => '081321455855',
    'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    // 'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    'sertifikat'                 => null,
    'verifikasi'                 => 'SETUJU',
]);
pesertapelatihan::create([
    'agendapelatihan_id'            => 1,
    'user_id'                       => 3,
    'jenjangpendidikan_id'          => 2,
    'nik'                 => '3205270107200023',
    'jeniskelamin'                 => 'Laki-laki',
    'tanggallahir'                 => '2000-07-01',
    'notelepon'                 => '081321455855',
    'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    // 'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    'sertifikat'                 => null,
    'verifikasi'                 => 'SETUJU',
]);



//==========================================================================================================
// DATA BERITA

beritajakon::create([
    'user_id' => '3',
    'judulberita' => 'Pelatihan dan Uji Kompetensi SKK Jenjang 4 bagi Tenaga Kerja Konstruksi di Kabupaten Blora',
    'tanggal' => '2025-03-05',
    'keterangan' => 'Blora, Dinas PUPR Kabupaten Blora menggelar Pelatihan dan Uji Kompetensi Sertifikat Kompetensi Kerja (SKK) Jenjang 4 bagi tenaga kerja konstruksi untuk meningkatkan kualitas dan profesionalisme sesuai standar nasional. Kegiatan ini diikuti oleh puluhan peserta dari berbagai sektor konstruksi dengan pembekalan teori dan praktik oleh instruktur serta asesor kompetensi bersertifikat. Kepala Dinas PUPR Kabupaten Blora, menegaskan pentingnya sertifikasi ini dalam meningkatkan daya saing tenaga kerja konstruksi, sejalan dengan regulasi pemerintah yang mewajibkan kepemilikan SKK. Salah satu peserta,  menyatakan bahwa pelatihan ini sangat bermanfaat dalam meningkatkan pemahaman dan keterampilannya di bidang konstruksi. Uji kompetensi dilakukan secara ketat untuk menilai pemahaman terhadap standar konstruksi, keselamatan kerja, dan kemampuan teknis. Dengan pelatihan ini, diharapkan tenaga kerja konstruksi di Blora semakin berkualitas dan siap bersaing dalam industri nasional.',
    'foto' => '00_beranda/01_berita/berita1.JPG',
]);

beritajakon::create([
    'user_id' => '3',
    'judulberita' => 'Meningkatkan Kualitas Tenaga Kerja: Pelatihan dan Uji Kompetensi SKK Digelar di Blora',
    'tanggal' => '2025-03-05',
    'keterangan' => 'Blora, Dinas PUPR Kabupaten Blora mengadakan Pelatihan dan Uji Kompetensi Sertifikat Kompetensi Kerja (SKK) Jenjang 4 bagi tenaga kerja konstruksi guna meningkatkan profesionalisme dan daya saing mereka. Kegiatan ini diikuti oleh puluhan peserta dari berbagai sektor konstruksi yang mendapatkan pembekalan teori serta praktik langsung oleh instruktur dan asesor kompetensi bersertifikat. Kepala Dinas PUPR Kabupaten Blora, menegaskan pentingnya sertifikasi ini dalam mendukung standar nasional dan meningkatkan peluang kerja tenaga konstruksi di berbagai proyek. Salah satu peserta,  menyatakan bahwa pelatihan ini sangat membantu dalam meningkatkan keterampilan dan kepercayaan diri menghadapi dunia kerja. Dengan terselenggaranya kegiatan ini, diharapkan tenaga kerja konstruksi di Blora semakin berkualitas dan mampu bersaing dalam industri nasional.',
    'foto' => '00_beranda/01_berita/berita2.JPG',
]);

beritajakon::create([
    'user_id' => '3',
    'judulberita' => 'Puluhan Tenaga Konstruksi Blora Ikuti Sertifikasi Kompetensi Kerja Jenjang 4',
    'tanggal' => '2025-03-05',
    'keterangan' => 'Blora, Dinas PUPR Kabupaten Blora menggelar Pelatihan dan Uji Kompetensi Sertifikat Kompetensi Kerja (SKK) Jenjang 4 untuk meningkatkan kualitas tenaga kerja konstruksi sesuai standar nasional. Kegiatan ini diikuti oleh puluhan peserta dari berbagai sektor konstruksi yang mendapatkan pembekalan teori dan praktik langsung dari instruktur serta asesor bersertifikat. Kepala Dinas PUPR Kabupaten Blora, menyampaikan bahwa sertifikasi ini penting untuk meningkatkan daya saing tenaga kerja dan membuka peluang kerja lebih luas di sektor konstruksi. Salah satu peserta, mengaku pelatihan ini sangat bermanfaat dalam meningkatkan keterampilan dan kepercayaan diri di dunia kerja. Dengan adanya kegiatan ini, diharapkan tenaga kerja konstruksi di Blora semakin kompeten dan siap bersaing dalam industri nasional',
    'foto' => '00_beranda/01_berita/berita3.JPG',
]);

beritajakon::create([
    'user_id' => '3',
    'judulberita' => 'Dorong Profesionalisme, Dinas PUPR Blora Selenggarakan Uji Kompetensi SKK Konstruksi',
    'tanggal' => '2025-03-05',
    'keterangan' => 'Blora, Dinas PUPR Kabupaten Blora mengadakan Pelatihan dan Sertifikasi Sertifikat Kompetensi Kerja (SKK) Jenjang 4 sebagai langkah strategis dalam meningkatkan standar tenaga kerja konstruksi di daerah ini. Kegiatan ini diikuti oleh puluhan peserta dari berbagai sektor yang mendapatkan pembekalan teori dan praktik langsung oleh instruktur serta asesor bersertifikat. Kepala Dinas PUPR Kabupaten Blora, menyatakan bahwa sertifikasi ini bertujuan untuk memastikan tenaga kerja konstruksi memiliki kompetensi sesuai standar nasional dan mampu bersaing di industri konstruksi. Salah satu peserta, menyampaikan bahwa pelatihan ini sangat bermanfaat dalam meningkatkan keterampilan dan peluang kerja di sektor konstruksi. Dengan adanya program ini, diharapkan tenaga kerja konstruksi di Blora semakin profesional dan berkontribusi dalam pembangunan yang berkualitas.',
    'foto' => '00_beranda/01_berita/berita4.JPG',
]);

beritajakon::create([
    'user_id' => '3',
    'judulberita' => 'Pelatihan dan Sertifikasi SKK di Blora: Upaya Meningkatkan Standar Tenaga Konstruksi',
    'tanggal' => '2025-03-05',
    'keterangan' => 'Blora, Dinas PUPR Kabupaten Blora mengadakan Pelatihan dan Sertifikasi Sertifikat Kompetensi Kerja (SKK) Jenjang 4 untuk meningkatkan standar tenaga kerja konstruksi di daerah tersebut. Kegiatan ini diikuti oleh puluhan peserta yang mendapatkan pembekalan teori dan praktik langsung dari instruktur serta asesor bersertifikat. Kepala Dinas PUPR Kabupaten Blora, menyatakan bahwa sertifikasi ini penting untuk memastikan tenaga kerja memiliki kompetensi sesuai standar nasional dan dapat bersaing di industri konstruksi. Salah satu peserta, mengungkapkan bahwa pelatihan ini sangat membantu dalam meningkatkan keterampilan dan peluang kerja. Dengan adanya program ini, diharapkan tenaga kerja konstruksi di Blora semakin profesional dan berkontribusi dalam pembangunan infrastruktur yang berkualitas.',
    'foto' => '00_beranda/01_berita/berita5.jpg',
]);

beritajakon::create([
    'user_id' => '3',
    'judulberita' => 'Dinas PUPR Blora Gelar Pelatihan dan Uji Kompetensi SKK Jenjang 4 bagi Tenaga Konstruksi',
    'tanggal' => '2025-03-05',
    'keterangan' => 'Blora, Dinas PUPR Kabupaten Blora menyelenggarakan Pelatihan dan Uji Kompetensi Sertifikat Kompetensi Kerja (SKK) Jenjang 4 untuk meningkatkan kualitas tenaga kerja konstruksi di daerah tersebut. Kegiatan ini diikuti oleh puluhan peserta dari berbagai sektor yang mendapatkan pembekalan teori dan praktik dari instruktur serta asesor bersertifikat. Kepala Dinas PUPR Kabupaten Blora, menyampaikan bahwa sertifikasi ini bertujuan untuk memastikan tenaga kerja memiliki kompetensi sesuai standar nasional dan siap bersaing di industri konstruksi. Salah satu peserta, mengungkapkan bahwa pelatihan ini sangat membantu dalam meningkatkan keterampilan dan peluang kerja. Dengan adanya program ini, diharapkan tenaga kerja konstruksi di Blora semakin profesional dan mampu mendukung pembangunan infrastruktur yang berkualitas.',
    'foto' => '00_beranda/01_berita/berita6.JPG',
]);

//======================== ===================================================================================
// DATA ARTIKEL JAKON MAS JAKI
artikeljakonmasjaki::create([
    'user_id' => '3',
    'judul' => 'Mengenal Sistem Informasi Jasa Konstruksi: Manfaat dan Implementasinya',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto3' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    'tanggal' => null,
    'keterangan' => 'Sistem informasi dalam jasa konstruksi memberikan berbagai manfaat, termasuk peningkatan efisiensi, transparansi, serta pengelolaan proyek yang lebih baik. Artikel ini membahas bagaimana implementasi sistem ini dapat membantu industri konstruksi berkembang lebih optimal.',
]);

artikeljakonmasjaki::create([
    'user_id' => '3',
    'judul' => 'Digitalisasi Manajemen Proyek: Peran Sistem Informasi dalam Jasa Konstruksi',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto3' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    'tanggal' => null,
    'keterangan' => 'Dalam era digital, manajemen proyek konstruksi semakin bergantung pada sistem informasi untuk meningkatkan efisiensi, akurasi data, dan pengambilan keputusan yang lebih baik. Artikel ini mengulas berbagai manfaat digitalisasi dalam pengelolaan proyek.',
]);

artikeljakonmasjaki::create([
    'user_id' => '3',
    'judul' => 'Panduan Memilih Sistem Informasi yang Tepat untuk Perusahaan Konstruksi',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto3' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    'tanggal' => null,
    'keterangan' => 'Pemilihan sistem informasi yang tepat sangat penting bagi perusahaan konstruksi agar operasional berjalan lebih efektif dan efisien. Artikel ini memberikan panduan dalam menentukan sistem yang sesuai dengan kebutuhan perusahaan.',
]);

artikeljakonmasjaki::create([
    'user_id' => '3',
    'judul' => 'Keamanan Data dalam Sistem Informasi Jasa Konstruksi: Tantangan dan Solusi',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto3' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    'tanggal' => null,
    'keterangan' => 'Keamanan data dalam sistem informasi jasa konstruksi menjadi tantangan utama di era digital. Artikel ini membahas berbagai risiko keamanan dan solusi untuk melindungi data dari ancaman siber serta kebocoran informasi.',
]);

artikeljakonmasjaki::create([
    'user_id' => '3',
    'judul' => 'Meningkatkan Produktivitas Konstruksi dengan Sistem Manajemen Informasi',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto3' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    'tanggal' => null,
    'keterangan' => 'Penggunaan sistem manajemen informasi dalam industri konstruksi dapat meningkatkan produktivitas, mempercepat proses kerja, dan mengurangi kesalahan manusia. Artikel ini mengulas bagaimana teknologi ini membantu sektor konstruksi berkembang lebih baik.',
]);

artikeljakonmasjaki::create([
    'user_id' => '3',
    'judul' => 'Tren Digital dalam Industri Konstruksi: Integrasi BIM dan Sistem Informasi',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto3' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    'tanggal' => null,
    'keterangan' => 'Integrasi Building Information Modeling (BIM) dengan sistem informasi membuka peluang baru dalam industri konstruksi. Artikel ini membahas tren digitalisasi dan bagaimana teknologi ini mengoptimalkan proses pembangunan.',
]);

artikeljakonmasjaki::create([
    'user_id' => '3',
    'judul' => 'Regulasi dan Standar dalam Sistem Informasi Jasa Konstruksi di Indonesia',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto3' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    'tanggal' => null,
    'keterangan' => 'Di Indonesia, penggunaan sistem informasi jasa konstruksi harus mematuhi regulasi dan standar yang telah ditetapkan. Artikel ini mengulas aturan yang berlaku serta pentingnya kepatuhan dalam implementasi sistem tersebut.',
]);

artikeljakonmasjaki::create([
    'user_id' => '3',
    'judul' => 'Strategi Implementasi Sistem Informasi untuk Optimalisasi Pengelolaan Proyek Konstruksi',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto3' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    'tanggal' => null,
    'keterangan' => 'Implementasi sistem informasi dalam pengelolaan proyek konstruksi dapat meningkatkan efisiensi, mengurangi biaya, dan mempercepat penyelesaian proyek. Artikel ini membahas strategi terbaik dalam penerapannya.',
]);

// ARIS AKHIR
// ===============================
// DATA TAHUN PILIHAN

tahunpilihan::create([
    'id' => 1,
    'tahunpilihan' => '2021',
]);

tahunpilihan::create([
    'id' => 2,
    'tahunpilihan' => '2022',
]);

tahunpilihan::create([
    'id' => 3,
    'tahunpilihan' => '2023',
]);

tahunpilihan::create([
    'id' => 4,
    'tahunpilihan' => '2024',
]);

tahunpilihan::create([
    'id' => 5,
    'tahunpilihan' => '2025',
]);

tahunpilihan::create([
    'id' => 6,
    'tahunpilihan' => '2026',
]);

tahunpilihan::create([
    'id' => 7,
    'tahunpilihan' => '2027',
]);

// ===============================
// DATA KATEGORI PELATIHAN

kategoripelatihan::create([
    'id' => 1,
    'kategoripelatihan' => 'Workshop',
]);

kategoripelatihan::create([
    'id' => 2,
    'kategoripelatihan' => 'Pelatihan',
]);

kategoripelatihan::create([
    'id' => 3,
    'kategoripelatihan' => 'Sosialisasi',
]);

// ===============================
// DATA AGENDA PELATIHAN
// ===============================
// DATA AGENDA PELATIHAN
agendapelatihan::create([
    'id' => 1,
    'user' => 1,
    'kategoripelatihan_id' => '1',
    'namakegiatan' => 'Pelatihan Manajemen Konstruksi',
    'penyelenggara' => 'Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora',
    // 'jenjang_id' => '4',
    'penutupan' => '2025-02-13',
    'waktupelaksanaan' => '2025-02-15',
    'jumlahpeserta' => 40,
    'lokasi' => 'Jln Blora No. 10',
    'Keterangan' => 'Pelatihan untuk meningkatkan kualitas tenaga kerja konstruksi.',
    'isiagenda' => 'Pelatihan ini bertujuan untuk meningkatkan kemampuan manajemen konstruksi bagi tenaga kerja di bidang konstruksi. Materi yang diberikan mencakup perencanaan proyek, pengendalian biaya, dan strategi pengawasan yang efektif. Dengan pelatihan ini, diharapkan para peserta dapat lebih profesional dalam mengelola proyek konstruksi secara efisien.',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
    'materi' => null,
]);

agendapelatihan::create([
    'id' => 2,
    'kategoripelatihan_id' => '2',
    'namakegiatan' => 'Pelatihan Ahli K3 Konstruksi',
    'penyelenggara' => 'Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora',
    // 'jenjang_id' => '5',
    'penutupan' => '2025-02-08',
    'waktupelaksanaan' => '2025-02-10',
    'jumlahpeserta' => 30,
    'lokasi' => 'Balai Latihan Kerja Blora',
    'Keterangan' => 'Pelatihan sertifikasi ahli K3 di bidang konstruksi.',
    'isiagenda' => 'Pelatihan ini ditujukan bagi tenaga kerja konstruksi yang ingin mendapatkan sertifikasi Ahli K3. Materi meliputi identifikasi risiko kerja, prosedur keselamatan, serta penerapan standar K3 dalam proyek konstruksi. Dengan mengikuti pelatihan ini, peserta diharapkan mampu meningkatkan keselamatan dan kesehatan kerja di lingkungan konstruksi.',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
    'materi' => null,
]);

agendapelatihan::create([
    'id' => 3,
    'kategoripelatihan_id' => '3',
    'namakegiatan' => 'Workshop Teknologi Konstruksi',
    'penyelenggara' => 'Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora',
    // 'jenjang_id' => '4',
    'penutupan' => '2025-02-26', // Tanggal 30 diubah ke 28 agar valid
    'waktupelaksanaan' => '2025-02-28', // Tanggal 30 diubah ke 28 agar valid
    'jumlahpeserta' => 50,
    'lokasi' => 'Hotel Blora Indah',
    'Keterangan' => 'Pengenalan teknologi terbaru dalam konstruksi.',
    'isiagenda' => 'Workshop ini akan membahas perkembangan terbaru dalam teknologi konstruksi, termasuk penggunaan material inovatif, teknik pembangunan modern, dan pemanfaatan digitalisasi dalam proyek konstruksi. Para peserta akan mendapatkan wawasan langsung dari para ahli di bidang konstruksi dan inovasi teknologi.',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
    'materi' => null,
]);

agendapelatihan::create([
    'id' => 4,
    'kategoripelatihan_id' => '1',
    'namakegiatan' => 'Pelatihan Pengawasan Proyek',
    'penyelenggara' => 'Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora',
    // 'jenjang_id' => '4',
    'penutupan' => '2025-05-10',
    'waktupelaksanaan' => '2025-05-12',
    'jumlahpeserta' => 25,
    'lokasi' => 'Gedung Serbaguna Blora',
    'Keterangan' => 'Pelatihan bagi tenaga pengawas proyek konstruksi.',
    'isiagenda' => 'Pelatihan ini memberikan pemahaman mendalam mengenai metode pengawasan proyek konstruksi, termasuk teknik inspeksi, pemantauan jadwal proyek, serta pengelolaan risiko di lapangan. Peserta akan mendapatkan studi kasus nyata untuk memperdalam pemahaman mereka dalam bidang ini.',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
    'materi' => null,
]);

agendapelatihan::create([
    'id' => 5,
    'kategoripelatihan_id' => '2',
    'namakegiatan' => 'Bimbingan Teknis Konstruksi',
    'penyelenggara' => 'Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora',
    // 'jenjang_id' => '4',
    'penutupan' => '2025-06-18',
    'waktupelaksanaan' => '2025-06-20',
    'jumlahpeserta' => 60,
    'lokasi' => 'Aula Kantor PU Blora',
    'Keterangan' => 'Bimtek peningkatan kapasitas tenaga konstruksi.',
    'isiagenda' => 'Bimbingan teknis ini bertujuan untuk meningkatkan kompetensi tenaga kerja konstruksi dengan memberikan pemahaman tentang regulasi, teknik pelaksanaan, serta manajemen proyek konstruksi. Para peserta akan dilatih secara langsung oleh tenaga ahli berpengalaman.',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
    'materi' => null,
]);

agendapelatihan::create([
    'id' => 6,
    'kategoripelatihan_id' => '3',
    'namakegiatan' => 'Seminar Keselamatan Kerja',
    'penyelenggara' => 'Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora',
    // 'jenjang_id' => '4',
    'penutupan' => '2025-07-13',
    'waktupelaksanaan' => '2025-07-15',
    'jumlahpeserta' => 35,
    'lokasi' => 'Universitas Blora',
    'Keterangan' => 'Seminar terkait pentingnya keselamatan kerja dalam konstruksi.',
    'isiagenda' => 'Seminar ini akan membahas pentingnya keselamatan kerja dalam industri konstruksi, mencakup strategi pencegahan kecelakaan, peraturan keselamatan yang berlaku, serta studi kasus insiden kerja. Tujuannya adalah untuk meningkatkan kesadaran dan penerapan standar keselamatan dalam proyek konstruksi.',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
    'materi' => null,
]);

// 'foto' => '00_dokmasjaki/03_datajakon/agendapelatihan.jpg',
// iqlima
// profilpaketkonsultasi::create([
    //     'prosespaketkonsultasi_id' => 1,
    //     'jenispekerjaan' => 'Pekerjaan Pembangunan Pasar Tradisional',
//     'namapekerjaan' => 'Pembangunan Pasar Tradisional Blora',
//     'tahunpelaksanaan' => 2025,
//     'cvptpenyedia' => 'PT. Pasar Makmur',
//     'nib' => '8899001122',
//     'nilaikontrak' => 800000000.00,
//     'sumberdana' => 'APBD',
//     'jeniskontrak' => 'Kontrak Pembangunan',
//     'karakteristikkontrak' => 'Pembangunan Pasar Tradisional Modern',
//     'bulanmulai' => '2025-03-01',
//     'bulanselesai' => '2025-09-30',
//     'dinas' => 'Dinas Perdagangan Blora',
// ]);

//======================== ===================================================================================
// AGENDA SKK TENAGA KERJA KONSTRUKSI
agendaskk::create([
    'id' => 1,
    'namakegiatan' => 'Sertifikasi Keahlian Tenaga Kerja Konstruksi Bangunan Gedung - Jenjang 4',
    'penyelenggara' => 'Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora',
    'penutupan' => '2025-02-13',
    'waktupelaksanaan' => '2025-02-15',
    'jumlahpeserta' => 40,
    'lokasi' => 'Jln Blora No. 10',
    'Keterangan' => 'Pelatihan dan sertifikasi tenaga kerja konstruksi bangunan gedung.',
    'isiagenda' => 'Peserta akan diberikan pemahaman mendalam tentang konstruksi bangunan gedung...',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);

agendaskk::create([
    'id' => 2,
    'namakegiatan' => 'Sertifikasi Keterampilan Tukang Bangunan Sipil - Jenjang 6',
    'penyelenggara' => 'Balai Jasa Konstruksi Wilayah IV Surabaya',
    'penutupan' => '2025-03-10',
    'waktupelaksanaan' => '2025-03-12',
    'jumlahpeserta' => 50,
    'lokasi' => 'Jln Raya Semarang No. 22',
    'Keterangan' => 'Pelatihan dan sertifikasi tenaga kerja di bidang tukang bangunan sipil.',
    'isiagenda' => 'Materi meliputi teknik pemasangan struktur beton dan perawatan bangunan...',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);

agendaskk::create([
    'id' => 3,
    'namakegiatan' => 'Sertifikasi Tenaga Ahli Struktur Baja dalam Konstruksi - Jenjang 7',
    'penyelenggara' => 'Kementerian PUPR',
    'penutupan' => '2025-04-05',
    'waktupelaksanaan' => '2025-04-07',
    'jumlahpeserta' => 35,
    'lokasi' => 'Jln Solo No. 18',
    'Keterangan' => 'Pelatihan dan sertifikasi tenaga ahli struktur baja dalam konstruksi.',
    'isiagenda' => 'Peserta akan belajar teknik perhitungan beban dan pemasangan struktur baja...',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);

agendaskk::create([
    'id' => 4,
    'namakegiatan' => 'Sertifikasi Pengawas Konstruksi Bangunan dan Jalan - Jenjang 8',
    'penyelenggara' => 'Asosiasi Kontraktor Indonesia',
    'penutupan' => '2025-05-20',
    'waktupelaksanaan' => '2025-05-22',
    'jumlahpeserta' => 45,
    'lokasi' => 'Jln Bandung No. 5',
    'Keterangan' => 'Pelatihan dan sertifikasi pengawas konstruksi bangunan dan jalan.',
    'isiagenda' => 'Peserta akan dibekali keterampilan dalam pengawasan proyek konstruksi...',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);

agendaskk::create([
    'id' => 5,
    'namakegiatan' => 'Sertifikasi Ahli Keselamatan dan Kesehatan Kerja Konstruksi - Jenjang 9',
    'penyelenggara' => 'Universitas Teknologi Bandung',
    'penutupan' => '2025-06-15',
    'waktupelaksanaan' => '2025-06-17',
    'jumlahpeserta' => 30,
    'lokasi' => 'Jln Cirebon No. 8',
    'Keterangan' => 'Pelatihan tentang standar keselamatan kerja dalam proyek konstruksi.',
    'isiagenda' => 'Peserta akan memahami prosedur keselamatan dalam setiap tahap konstruksi...',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);


subhargadiv2::create([
    'hspkonstruksiumum2_id' => 1,
    'uraian' => 'Pekerja',
    'kode' => 'L.01',
    'satuan' => 'OH',
    'koefisien' => 0.600,
    'hargasatuan' => 96000.00,
    'jumlah_pagu' => '57600', // **Manual tanpa perhitungan**
]);


subhargadiv3::create([
    'hspkonstruksiumum3_id' => 1,
    'uraian' => 'Pekerja',
    'kode' => 'L.01',
    'satuan' => 'OH',
    'koefisien' => 0.600,
    'hargasatuan' => 96000.00,
    'jumlah_pagu' => '57600', // **Manual tanpa perhitungan**
]);



// profilpaketkonsultasinontender::create([
//     'prosespaketkonsultasinontender_id' => 1,
//     'jenispekerjaan' => 'Pekerjaan Studi Medis',
//     'namapekerjaan' => 'Kajian Pengadaan Alat Medis Puskesmas',
//     'tahunpelaksanaan' => 2026,
//     'cvptpenyedia' => 'PT. Medika Konsultan',
//     'nib' => '5566778899',
//     'nilaikontrak' => 120000000.00,
//     'sumberdana' => 'DAK',
//     'jeniskontrak' => 'Kontrak Konsultasi',
//     'karakteristikkontrak' => 'Analisis Kebutuhan dan Spesifikasi Alat Medis',
//     'bulanmulai' => '2026-01-01',
//     'bulanselesai' => '2026-06-30',
//     'dinas' => 'Dinas Kesehatan Blora',
// ]);


// =========================================================
// PROSES PAKET PEKERJAAN TENDER
prosespaket::create([
    'profilpaketpekerjaanblora_id' => 1, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 2, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 3, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 4, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 5, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 6, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 7, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 8, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 9, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 10, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

//======================== ===================================================================================
// PENGAWASAN BUJK MAS JAKI BLORA
// kecelakaankerjamasjaki::create([
//     'namapaketpekerjaan' => 'PAKET PEKERJAAN KONSTRUKSI PEMBANGUNAN BENDUNGAN RANDUGUNTING',
//     'tahun' => '2022',
//     'namaperusahaan' => 'WIJAYA KARYA 2022',
//     'namatenagakerja' => 'MISLANI',
//     'lokasikecelakaan' => 'AREA PEKERJAAN BENDUNGAN RANDUGUNTING',
//     'waktukecelakaan' => '2024-08-12',
//     'keterangan' => 'PEKERJA',
//     'nilaikerugian' => ' Rp825.031 ',
// ]);

kecelakaankerjamasjaki::create([
    'namapaketpekerjaan' => 'PAKET PEKERJAAN KONSTRUKSI PEMBANGUNAN BENDUNGAN RANDUGUNTING',
    'tahun' => 2022,  // Menggunakan angka tahun, bukan string
    'namaperusahaan' => 'WIJAYA KARYA 2022',
    'namatenagakerja' => 'MISLANI',
    'lokasikecelakaan' => 'AREA PEKERJAAN BENDUNGAN RANDUGUNTING',
    'waktukecelakaan' => '2024-08-12',  // Format datetime lengkap
    'keterangan' => 'PEKERJA',
    'nilaikerugian' => 825031.00,  // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecelakaankerjamasjaki::create([
    'namapaketpekerjaan' => 'PAKET PEKERJAAN KONSTRUKSI PEMBANGUNAN BENDUNGAN RANDUGUNTING',
    'tahun' => 2022,  // Menggunakan angka tahun, bukan string
    'namaperusahaan' => 'WIJAYA KARYA 2022',
    'namatenagakerja' => 'EKO WILO ANDRIANTO',
    'lokasikecelakaan' => 'AREA PEKERJAAN BENDUNGAN RANDUGUNTING',
    'waktukecelakaan' => '2024-08-12',  // Format datetime lengkap
    'keterangan' => 'PEKERJA',
    'nilaikerugian' => 825031.00,  // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);


//======================== ===================================================================================
// PENYEDIA STATUS TERTIB JAKON MAS JAKI BLORA
penyediastatustertibjakon::create([
    'id' => '1',
    'penyedia' => 'PU',
]);

penyediastatustertibjakon::create([
    'id' => '2',
    'penyedia' => 'NON-PU',
]);

penyediastatustertibjakon::create([
    'id' => '3',
    'penyedia' => 'SWASTA',
]);

//======================== ===================================================================================
// TERTIB JAKON BIDAN USAHA MAS JAKI BLORA
tertibjasakonstruksi::create([
    'penyediastatustertibjakon_id' => '1',
    'nib' => '0208220001109',
    'namapekerjaan' => null,
    'namabadanusaha' => 'CV MANDRA KANTA UNGGUL',
    'pjbu' => 'Muhammad Abdul Rozak',
    'sesuai_jenis' => 'TERTIB',
    'sesuai_sifat' => 'TERTIB',
    'sesuai_klasifikasi' => 'TERTIB',
    'sesuai_layanan' => 'TERTIB',
    'segmentasipasar_bentuk' => 'TERTIB',
    'segmentasipasar_kualifikasi' => 'TERTIB',
    'syarat_SBU' => 'TERTIB',
    'syarat_NIB' => 'TERTIB',
    'pelaksanaanpengembangan' => 'TERTIB',      // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

tertibjasakonstruksi::create([
    'penyediastatustertibjakon_id' => '2',
    'nib' => '0911220321514',
    'namapekerjaan' => null,
    'namabadanusaha' => 'CV. ADITIYA JAYA PERKASA',
    'pjbu' => 'Agus Supriadi',
    'sesuai_jenis' => 'TERTIB',
    'sesuai_sifat' => 'TERTIB',
    'sesuai_klasifikasi' => 'TERTIB',
    'sesuai_layanan' => 'TERTIB',
    'segmentasipasar_bentuk' => 'TERTIB',
    'segmentasipasar_kualifikasi' => 'TERTIB',
    'syarat_SBU' => 'TERTIB',
    'syarat_NIB' => 'TERTIB',
    'pelaksanaanpengembangan' => 'TERTIB',      // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

tertibjasakonstruksi::create([
    'penyediastatustertibjakon_id' => '3',
    'nib' => '1261000381957',
    'namapekerjaan' => null,
    'namabadanusaha' => 'CV. ADHI KARYA MANDIRI',
    'pjbu' => 'Santoso',
    'sesuai_jenis' => 'TERTIB',
    'sesuai_sifat' => 'TERTIB',
    'sesuai_klasifikasi' => 'TERTIB',
    'sesuai_layanan' => 'TERTIB',
    'segmentasipasar_bentuk' => 'TERTIB',
    'segmentasipasar_kualifikasi' => 'TERTIB',
    'syarat_SBU' => 'TERTIB',
    'syarat_NIB' => 'TERTIB',
    'pelaksanaanpengembangan' => 'TERTIB',      // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

//======================== ===================================================================================
// TERTIB JAKON PEMANFAATAN MAS JAKI

tertibjakonpemanfaatan::create([
    'penyediastatustertibjakon_id' => '1',
    'namapekerjaan' => null,
    'namabangunan' => 'Kawasan Taman Budaya Cepu',
    'nomorkontrak' => '640/BG.080/2023',
    'lokasi' => 'Kec. Cepu Kab. Blora',
    'tanggalpembangunan' => '2023-07-06',
    'tanggalpemanfaatan' => '2023-11-02',
    'umurkonstruksi' => '5',
    'peruntukan_fungsi' => 'TERTIB',
    'peruntukan_lokasi' => 'TERTIB',
    'rencanaumur' => 'TERTIB',
    'kapasitasdanbeban' => 'BELUM TERTIB',
    'pemeliharaan_konstruksi' => 'BELUM TERTIB',
    'pemeliharaan_struktur' => 'BELUM TERTIB',
    // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

tertibjakonpemanfaatan::create([
    'penyediastatustertibjakon_id' => '2',
    'namapekerjaan' => null,
    'namabangunan' => 'RSUD Randublatung Type D Blora',
    'nomorkontrak' => '050/03.1/RS.RAN/2020',
    'lokasi' => 'Gang Kabayan RT 06 RW 01',
    'tanggalpembangunan' => '2020-06-06',
    'tanggalpemanfaatan' => '2020-12-20',
    'umurkonstruksi' => '5',
    'peruntukan_fungsi' => 'TERTIB',
    'peruntukan_lokasi' => 'TERTIB',
    'rencanaumur' => 'TERTIB',
    'kapasitasdanbeban' => 'BELUM TERTIB',
    'pemeliharaan_konstruksi' => 'BELUM TERTIB',
    'pemeliharaan_struktur' => 'BELUM TERTIB',
    // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

tertibjakonpemanfaatan::create([
    'penyediastatustertibjakon_id' => '3',
    'namapekerjaan' => null,
    'namabangunan' => 'KANTOR PT POS PROPERTI INDONESIA',
    'nomorkontrak' => '-',
    'lokasi' => 'Jl. Ronggolawe No. 37',
    'tanggalpembangunan' => '2024-01-25',
    'tanggalpemanfaatan' => '2024-06-25',
    'umurkonstruksi' => '5',
    'peruntukan_fungsi' => 'TERTIB',
    'peruntukan_lokasi' => 'TERTIB',
    'rencanaumur' => 'TERTIB',
    'kapasitasdanbeban' => 'BELUM TERTIB',
    'pemeliharaan_konstruksi' => 'BELUM TERTIB',
    'pemeliharaan_struktur' => 'BELUM TERTIB',
    // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

// DATA TERTIB JASA KONSTRUKSI PENYELENGGARAAN MAS JAKI BLORA
// ================================================================================================
tertibjakonpenyelenggaraan::create([
    'penyediastatustertibjakon_id' => '1',
    'namapekerjaan' => null,
    'kegiatankonstruksi' => 'Peningkatan Jalan Adirejo - Sembungin - Karangtalun',
    'nomorkontrak' => '620/BM.827/2024',
    'bujk' => 'CV. TRIBHAKTI',
    'prosespemilihan' => 'TERTIB',
    'pengawasan_standarkontrak' => 'TERTIB',
    'pengawasan_tenagakerja' => 'TERTIB',
    'pengawasan_penunjang' => 'TERTIB',
    'pengawasan_dokumenk4' => 'TERTIB',
    'pengawasan_smkk' => 'TERTIB',
    'pengawasan_kecelakaankerja' => 'TERTIB',

    // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

tertibjakonpenyelenggaraan::create([
    'penyediastatustertibjakon_id' => '2',
    'namapekerjaan' => null,
    'kegiatankonstruksi' => 'Rehabilitasi Ruang Kelas SMPN 2 BLORA',
    'nomorkontrak' => '12894257/SPK/02.0014/DAU/2024',
    'bujk' => 'CV. ANUGERAH ABADI',
    'prosespemilihan' => 'TERTIB',
    'pengawasan_standarkontrak' => 'TERTIB',
    'pengawasan_tenagakerja' => 'TERTIB',
    'pengawasan_penunjang' => 'TERTIB',
    'pengawasan_dokumenk4' => 'TERTIB',
    'pengawasan_smkk' => 'TERTIB',
    'pengawasan_kecelakaankerja' => 'TERTIB',

    // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

tertibjakonpenyelenggaraan::create([
    'penyediastatustertibjakon_id' => '3',
    'namapekerjaan' => null,
    'kegiatankonstruksi' => 'KANTOR PT POS PROPERTI INDONESIA',
    'nomorkontrak' => '-',
    'bujk' => 'CV. CRYSTAL DESIGN',
    'prosespemilihan' => 'BELUM TERTIB',
    'pengawasan_standarkontrak' => 'BELUM TERTIB',
    'pengawasan_tenagakerja' => 'BELUM TERTIB',
    'pengawasan_penunjang' => 'BELUM TERTIB',
    'pengawasan_dokumenk4' => 'TERTIB',
    'pengawasan_smkk' => 'BELUM',
    'pengawasan_kecelakaankerja' => 'BELUM TERTIB',

    // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);


// DATA RANTAI PASOK MATERIL BANGUNAN MAS JAKI
rantaipasokblora::create([
    'distributor' => 'PT. VARIA USAHA UNIT BLORA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'SEMEN',
    'submaterialproduk' => 'PCC',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Semen Indonesia',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'PT. VARIA USAHA UNIT BLORA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'SEMEN',
    'submaterialproduk' => 'PCC',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Semen Indonesia',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'PT. SEMEN HOLCIM',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'SEMEN',
    'submaterialproduk' => 'OPC',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Holcim',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'UD. TIGA PUTRA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'PASIR',
    'submaterialproduk' => 'PASIR SUNGAI',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Lokal',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'CV. ANUGERAH MAKMUR',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'BATU SPLIT',
    'submaterialproduk' => '5-10 MM',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Lokal',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'PT. BAJA MAJU SEJAHTERA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'BAJA',
    'submaterialproduk' => 'WF',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Gunung Garuda',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'CV. SUKSES ABADI',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'BATU BATA',
    'submaterialproduk' => 'MERAH',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Lokal',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'UD. JAYA BETON',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'BETON READY MIX',
    'submaterialproduk' => 'K-225',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'SCG',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'PT. KERAMIK MEGAH JAYA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'KERAMIK',
    'submaterialproduk' => '60x60 cm',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Roman',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'CV. CAT WARNA INDAH',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'CAT',
    'submaterialproduk' => 'EKSTERIOR',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Dulux',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'UD. RANGKAI BESI',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'BESI BETON',
    'submaterialproduk' => 'D 10',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Krakatau Steel',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'UD. RANGKAI BESI',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'BESI BETON',
    'submaterialproduk' => 'D 10',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Krakatau Steel',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'PT. TEKNIK ATAP SEJAHTERA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'ATAP',
    'submaterialproduk' => 'SPANDREL',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'BjLS',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'CV. PINTU KARYA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'PINTU',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'submaterialproduk' => 'KAYU JATI',
    'merkproduk' => 'Lokal',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'UD. KACA MULIA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'KACA',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'submaterialproduk' => 'TEMPERED',
    'merkproduk' => 'Asahimas',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

//======================== ===================================================================================
// PERALATAN KONSTRUKSI MAS JAKI BLORA
peralatankonstruksi::create([
    'kecamatanblora_id' => '14',
    'alatberat_id' => '1',
    'namabadanusaha' => 'CV. Anugrah Jaya Makmur',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'nib' => '4765753435',
    'notelepon' => '081321455855',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '2',
    'alatberat_id' => '2',
    'namabadanusaha' => 'PT. Djawa Murni Kontraktor',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

//======================== ===================================================================================
// PENGAWASAN BUJK MAS JAKI BLORA
    alatberat::create([
    'peralatankonstruksi_id' => '1',
    'alatberat' => '',
    'jumlahalatberat' => '7',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '1',
        'alatberat' => 'Excavator',
        'jumlahalatberat' => 7,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '1',
        'alatberat' => 'Bulldozer',
        'jumlahalatberat' => 4,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '1',
        'alatberat' => 'Crane',
        'jumlahalatberat' => 3,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '1',
        'alatberat' => 'Dump Truck',
        'jumlahalatberat' => 10,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '2',
        'alatberat' => 'Motor Grader',
        'jumlahalatberat' => 2,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '2',
        'alatberat' => 'Vibro Roller',
        'jumlahalatberat' => 5,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '2',
        'alatberat' => 'Concrete Pump',
        'jumlahalatberat' => 3,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '3',
        'alatberat' => 'Tower Crane',
        'jumlahalatberat' => 2,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '4',
        'alatberat' => 'Hydraulic Breaker',
        'jumlahalatberat' => 1,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '3',
        'alatberat' => 'Asphalt Paver',
        'jumlahalatberat' => 2,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '3',
        'alatberat' => 'Skid Steer Loader',
        'jumlahalatberat' => 3,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '3',
        'alatberat' => 'Wheel Loader',
        'jumlahalatberat' => 2,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '3',
        'alatberat' => 'Backhoe Loader',
        'jumlahalatberat' => 4,
    ]);

    //======================== ===================================================================================
    // PENGAWASAN BUJK MAS JAKI BLORA
    tokobangunanblora::create([
        'kecamatanblora_id' => '1',
        'namatokobangunan' => 'Toko Bangunan Sumber Jaya',
        'pemilik' => 'Budi Santoso',
        'alamat' => 'Jl. Pemuda No. 10, Blora',
        'notelepon' => '081234567890',
        'email' => 'sumberjaya@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Menyediakan bahan bangunan lengkap dengan layanan antar',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '1',
        'namatokobangunan' => 'Toko Bangunan Makmur',
        'pemilik' => 'Siti Rohmah',
        'alamat' => 'Jl. Raya Randublatung No. 25, Blora',
        'notelepon' => '082112345678',
        'email' => 'tokomakmur@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Melayani pembelian dalam jumlah besar dan kecil',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '2',
        'namatokobangunan' => 'Toko Bangunan Sejahtera',
        'pemilik' => 'Agus Wijaya',
        'alamat' => 'Jl. Blora Cepu KM 7, Blora',
        'notelepon' => '085678901234',
        'email' => 'sejahtera_bangunan@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Tersedia berbagai jenis kayu dan material finishing',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '2',
        'namatokobangunan' => 'Toko Bangunan Maju Jaya',
        'pemilik' => 'Hendro Prasetyo',
        'alamat' => 'Jl. Ronggolawe No. 45, Blora',
        'notelepon' => '087876543210',
        'email' => 'tokomajujaya@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Menyediakan bahan material konstruksi berat',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '3',
        'namatokobangunan' => 'Toko Bangunan Sentosa',
        'pemilik' => 'Rina Kartika',
        'alamat' => 'Jl. Veteran No. 15, Blora',
        'notelepon' => '081356789012',
        'email' => 'tokosentosa@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Diskon spesial untuk pembelian partai besar',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '3',
        'namatokobangunan' => 'Toko Bangunan Jaya Abadi',
        'pemilik' => 'Slamet Riyadi',
        'alamat' => 'Jl. Sukarno Hatta No. 11, Blora',
        'notelepon' => '081245678901',
        'email' => 'jayaabadi@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Melayani pembelian eceran dan grosir',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '4',
        'namatokobangunan' => 'Toko Bangunan Cipta Karya',
        'pemilik' => 'Teguh Prasetyo',
        'alamat' => 'Jl. Gajah Mada No. 22, Blora',
        'notelepon' => '081356789013',
        'email' => 'ciptakarya@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/contohtokobangunan.jpg',
        'keterangan' => 'Spesialis dalam material finishing rumah',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '4',
        'namatokobangunan' => 'Toko Bangunan Mitra Sejati',
        'pemilik' => 'Rudi Hartanto',
        'alamat' => 'Jl. Pemuda No. 77, Blora',
        'notelepon' => '082312345678',
        'email' => 'mitrasejati@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/contohtokobangunan.jpg',
        'keterangan' => 'Menyediakan layanan konsultasi bahan bangunan',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '5',
        'namatokobangunan' => 'Toko Bangunan Bina Karya',
        'pemilik' => 'Hadi Susanto',
        'alamat' => 'Jl. Kartini No. 5, Blora',
        'notelepon' => '083112345678',
        'email' => 'binakarya@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Diskon untuk kontraktor dan proyek besar',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '5',
        'namatokobangunan' => 'Toko Bangunan Sukses Mandiri',
        'pemilik' => 'Dian Setiawan',
        'alamat' => 'Jl. Raden Patah No. 33, Blora',
        'notelepon' => '085267890123',
        'email' => 'suksesmandiri@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Menyediakan bahan interior dan eksterior',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '6',
        'namatokobangunan' => 'Toko Bangunan Mulia Jaya',
        'pemilik' => 'Eka Putra',
        'alamat' => 'Jl. Sultan Agung No. 19, Blora',
        'notelepon' => '081278901234',
        'email' => 'muliajaya@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Pusat bahan konstruksi interior dan eksterior',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '6',
        'namatokobangunan' => 'Toko Bangunan Sejahtera Baru',
        'pemilik' => 'Sri Hartini',
        'alamat' => 'Jl. Diponegoro No. 55, Blora',
        'notelepon' => '081345678912',
        'email' => 'sejahterabaru@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Menjual berbagai jenis paving berkualitas',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '7',
        'namatokobangunan' => 'Toko Bangunan Lancar Jaya',
        'pemilik' => 'Sutrisno',
        'alamat' => 'Jl. Jendral Sudirman No. 88, Blora',
        'notelepon' => '085678912345',
        'email' => 'lancarjaya@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Bahan material dasar bangunan tersedia lengkap',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '7',
        'namatokobangunan' => 'Toko Bangunan Berkah Mulia',
        'pemilik' => 'Siti Aminah',
        'alamat' => 'Jl. KH. Ahmad Dahlan No. 17, Blora',
        'notelepon' => '082345678901',
        'email' => 'berkahmulia@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Menjual produk berkualitas dengan harga terjangkau',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '8',
        'namatokobangunan' => 'Toko Bangunan Mandiri Jaya',
        'pemilik' => 'Teguh Santoso',
        'alamat' => 'Jl. Kyai Mojo No. 42, Blora',
        'notelepon' => '083456789012',
        'email' => 'mandirijaya@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Banyak pilihan motif keramik dan granit tersedia',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '8',
        'namatokobangunan' => 'Toko Bangunan Citra Abadi',
        'pemilik' => 'Rina Sari',
        'alamat' => 'Jl. Pattimura No. 60, Blora',
        'notelepon' => '081289012345',
        'email' => 'citraabadi@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Spesialis bahan bangunan interior rumah',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '9',
        'namatokobangunan' => 'Toko Bangunan Putra Bangsa',
        'pemilik' => 'Andi Wijaya',
        'alamat' => 'Jl. Wahid Hasyim No. 14, Blora',
        'notelepon' => '081567890123',
        'email' => 'putrabangsa@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Menjual berbagai perlengkapan finishing rumah',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '9',
        'namatokobangunan' => 'Toko Bangunan Karya Sejati',
        'pemilik' => 'Bambang Setiawan',
        'alamat' => 'Jl. Ahmad Yani No. 32, Blora',
        'notelepon' => '081678901234',
        'email' => 'karyasejati@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Harga grosir dan eceran tersedia',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '10',
        'namatokobangunan' => 'Toko Bangunan Gemilang',
        'pemilik' => 'Yuni Rahmawati',
        'alamat' => 'Jl. Letjen Suprapto No. 99, Blora',
        'notelepon' => '081789012345',
        'email' => 'tokogemilang@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Melayani pengiriman ke seluruh wilayah Blora',
    ]);




    //======================== ===================================================================================
    // PENGAWASAN BUJK MAS JAKI BLORA
    shstblora::create([
        'kabupaten' => 'Blora',
        'bangunankantortidaksederhana' => '6080000',
        'bangunankantorsederhana' => '5050000',
        'rumahnegaratipea' => '5940000',
        'rumahnegaratipeb' => '5370000',
        'rumahnegaratipecde' => '4630000',
        'pagarrumahdepan' => '2730000',
        'pagarrumahbelakang' => '2090000',
        'pagarrumahsamping' => '1440000',
        'pagarrumahnegaradepan' => '2310000',
        'pagarrumahnegarabelakang' => '2030000',
        'pagarrumahnegarasamping' => '1380000',
    ]);


//======================== ===================================================================================
// PENGAWASAN BUJK MAS JAKI BLORA
kecamatanblora::create([
    'id' => '1',
    'kecamatanblora' => 'BANJAREJO 58253',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '2',
    'kecamatanblora' => 'BLORA (BLORA KOTA) 58211 - 58219',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '3',
    'kecamatanblora' => 'BOGOREJO 58262',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '4',
    'kecamatanblora' => 'CEPU 58311',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '5',
    'kecamatanblora' => 'JAPAH 58257',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '6',
    'kecamatanblora' => 'JATI 58384',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '7',
    'kecamatanblora' => 'JEPON 58261',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '8',
    'kecamatanblora' => 'JIKEN 58372',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '9',
    'kecamatanblora' => 'KEDUNGTUBAN 58381',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '10',
    'kecamatanblora' => 'KRADENAN 58383',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '11',
    'kecamatanblora' => 'KUNDURAN 58255',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '12',
    'kecamatanblora' => 'NGAWEN 58254',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '13',
    'kecamatanblora' => 'RANDUBLATUNG 58382',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '14',
    'kecamatanblora' => 'SAMBONG 58371',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '15',
    'kecamatanblora' => 'TODANAN 58256',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '16',
    'kecamatanblora' => 'TUNJUNGAN 58252',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

//======================== ===================================================================================
// PENGAWASAN BUJK MAS JAKI BLORA

pengawasanbujk::create([
      'kodeproyek' => '202011-0312-2806-8464-555',
            'namaperusahaan' => 'AGUSTINUS SETYAWAN',
            'alamatperusahaan' => 'JL MR ISKANDAR 70',
            'statusmodal' => 'Penanaman Modal Dalam Negeri (PMDN)',
            'jenisperusahaan' => 'Perorangan',
            'nib' => '9120001950836',
            'kbli' => '23953(KBLI 2017)',
            'uraiankbli' => 'INDUSTRI BARANG DARI SEMEN DAN KAPUR UNTUK KONSTRUKSI',
            'sektor' => ' Perindustrian',
            'alamatproyek' => 'Jl. Kamolan ',
            'wilayah' => 'Kab. Blora',
            'luastanah' => 1300.25,  // Menggunakan tipe data decimal
            'tki_lakilaki' => 2,    // Jumlah TKI laki-laki
            'tki_perempuan' => 33,   // Jumlah TKI perempuan
            'tka_lakilaki' => 0,    // Jumlah TKA laki-laki
            'tka_perempuan' => 0,    // Jumlah TKA perempuan
            'resiko' => 'Tinggi',
            'sumberdata' => 'OSS Migrasi1.1',
            'investasi' => 50000000.00,  // Nilai investasi
            'skalausahaperusahaan' => 'Kecil',
            'skalausahaproyek' => 'Menengah',
            'kewenangankoordinator' => 'DPMPTSP Kab. Blora',
            'kewenanganpengawas' => 'OPD Pengawas Kab. Blora (Sektor Perindustrian)',
            'PSN' => 'Tidak',

]);

//======================== ===================================================================================
// SKK TENAGA KERJA MAS JAKI BLORA
skktenagakerjablora::create([
    'nama' => 'AFILIA NANDA DWI NOVIANTI', // Ganti dengan ID yang sesuai
    'alamat' => 'Dk.sendang klampok rt.01 rw.09 tempurejo blora',
    'namasekolah_id' => 53,
    'jenjangpendidikan_id' => 2,
    'jurusan_id' => 21,
    'tahunlulus' => 2023,
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'asosiasimasjaki_id' => null,
    'tanggalterbit' => '2024-03-11',
    'tanggalhabis' => '2024-03-10',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'AHMAD FAHRUDIN', // Ganti dengan ID yang sesuai
    'alamat' => 'Dk.sendang klampok rt.01 rw.09 tempurejo blora',
    'namasekolah_id' => 34,
    'jenjangpendidikan_id' => 4,
    'jurusan_id' => 13,
    'tahunlulus' => 2010,
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'asosiasimasjaki_id' => null,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'ALFINO WILIAM PUTRA', // Ganti dengan ID yang sesuai
    'alamat' => 'RT 10 RW 2 DUKUH SORONINI DESA SONOKULON KECAMATAN TODANAN KABUPATEN BLORA',
    'namasekolah_id' => 33,
    'jenjangpendidikan_id' => 4,
    'jurusan_id' => 19,
    'tahunlulus' => 2019,
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'asosiasimasjaki_id' => null,
    'tanggalterbit' => '2024-03-11',
    'tanggalhabis' => '2029-03-10',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'ANDI SUSANTO', // Ganti dengan ID yang sesuai
    'alamat' => 'JL. CAMAR II NO. 2 RT 009 RW 005 KEL. KARANGJATI KEC. BLORA KAB. BLORA',
    'namasekolah_id' => 44,
    'jenjangpendidikan_id' => 2,
    'jurusan_id' => 21,
    'tahunlulus' => 2015,
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'asosiasimasjaki_id' => null,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'BAGUS SUTRISNO', // Ganti dengan ID yang sesuai
    'alamat' => 'RT01/06 Dk.Krabyakan Ds.Temurejo Kec.Blora Kab.Blora Provinsi Jawa Tengah',
    'namasekolah_id' => 24,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 5,
    'tahunlulus' => 1994,
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'asosiasimasjaki_id' => null,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'BANU SULISTIYONO', // Ganti dengan ID yang sesuai
    'alamat' => 'Dk. Ketangar RT 002 RW 001 Karangjati Blora',
    'namasekolah_id' => 17,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 5,
    'tahunlulus' => 1990,
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'asosiasimasjaki_id' => null,
    'tanggalterbit' => '2024-03-11',
    'tanggalhabis' => '2029-03-10',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'EKO ZAINUL ARIFIN', // Ganti dengan ID yang sesuai
    'alamat' => 'Gang Swadaya Rt 01/Rw 11 Balun cepu',
    'namasekolah_id' => 30,
    'jenjangpendidikan_id' => 4,
    'jurusan_id' => 14,
    'tahunlulus' => 2004,
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'asosiasimasjaki_id' => null,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'HERU PUJIYANTO', // Ganti dengan ID yang sesuai
    'alamat' => 'JL. BERINGIN TIMUR RT 008 RW 003 KEL. MLANGSEN KEC. BLORA KAB. BLORA',
    'namasekolah_id' => 31,
    'jenjangpendidikan_id' => 4,
    'jurusan_id' => 18,
    'tahunlulus' => 2002,
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'asosiasimasjaki_id' => null,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'ILHAM KRISTUAJI', // Ganti dengan ID yang sesuai
    'alamat' => 'RT 002/RW 001 Dk. Ketangar Kel. Karangjati Kec. Blora Kab. Blora',
    'namasekolah_id' => 34,
    'jenjangpendidikan_id' => 4,
    'jurusan_id' => 18,
    'tahunlulus' => 2019,
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'asosiasimasjaki_id' => null,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'IRIYANTO', // Ganti dengan ID yang sesuai
    'alamat' => 'RT 003 RW 004 Jl. Jenderal Sudirman No. 177 Kel. Bangkle Kec. Blora Kab. Blora',
    'namasekolah_id' => 34,
    'jenjangpendidikan_id' => 4,
    'jurusan_id' => 3,
    'tahunlulus' => 1982,
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'asosiasimasjaki_id' => null,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'AGUS KURNIAWAN', // Ganti dengan ID yang sesuai
    'alamat' => 'Dk. Pesantren Rt.01/04 Ds. Sembongin Banjarejo Blora',
    'namasekolah_id' => 5,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 5,
    'tahunlulus' => 2009,
    'jabatankerja_id' => 5,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'asosiasimasjaki_id' => null,
    'tanggalterbit' => '2024-03-11',
    'tanggalhabis' => '2029-03-10',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'PUJI SUBIANTORO', // Ganti dengan ID yang sesuai
    'alamat' => 'DS. TAMBAKSARI RT 001 RW 001 DESA TAMBAKSARI BLORA',
    'namasekolah_id' => 22,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 6,
    'tahunlulus' => 2008,
    'jabatankerja_id' => 7,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'asosiasimasjaki_id' => null,
    'tanggalterbit' => '2024-03-30',
    'tanggalhabis' => '2029-03-29',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'REYHAN WIDYA PERMANA', // Ganti dengan ID yang sesuai
    'alamat' => 'RT 5 RW 3 Dukuh karangnongkp Desa Buluroto Kec. banjarejo Kabupaten Blora Provinsi Jawa Tengah',
    'namasekolah_id' => 34,
    'jenjangpendidikan_id' => 4,
    'jurusan_id' => 22,
    'tahunlulus' => 2015,
    'jabatankerja_id' => 3,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'asosiasimasjaki_id' => null,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

//======================== ===================================================================================
//======================== ===================================================================================
//======================== ===================================================================================
standarbiayaumum::create([
    'judul' => 'Permen PUPR Nomor 08 Tahun 2023',
    'peraturan' => 'standarbiayaumum/Permen_PUPR_Nomor_8_Tahun_2023.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

standarbiayaumum::create([
    'judul' => 'Permen PUPR Nomor 14 Tahun 2020',
    'peraturan' => 'standarbiayaumum/Permen_PUPR_Nomor_14_Tahun_2020.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);
//======================== ===================================================================================

//======================== ===================================================================================
sbulampiran1::create([
    'judul' => '0_COVER_LAMPIRAN_I_PL',
    'peraturan' => 'standarbiayaumum/lampiran1/0_COVER_LAMPIRAN_I_PL.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran1::create([
    'judul' => 'A_SDP_Pengadaan_Langsung_JKK_Perorangan',
    'peraturan' => 'standarbiayaumum/lampiran1/A_SDP_Pengadaan_Langsung_JKK_Perorangan.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran1::create([
    'judul' => 'B_SDP_Pengadaan_Langsung_JKK_BUJK',
    'peraturan' => 'standarbiayaumum/lampiran1/B_SDP_Pengadaan_Langsung_JKK_BUJK.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran1::create([
    'judul' => 'C_SDP_Pengadaan_Langsung_PK_Perorangan',
    'peraturan' => 'standarbiayaumum/lampiran1/C_SDP_Pengadaan_Langsung_PK_Perorangan.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran1::create([
    'judul' => 'D_SDP_Pengadaan_Langsung_PK_BUJK',
    'peraturan' => 'standarbiayaumum/lampiran1/D_SDP_Pengadaan_Langsung_PK_BUJK.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
sbulampiran2::create([
    'judul' => '0_COVER_LAMPIRAN_II_JK',
    'peraturan' => 'standarbiayaumum/lampiran2/0_COVER_LAMPIRAN_II_JK.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'A_Dok_Kualifikasi',
    'peraturan' => 'standarbiayaumum/lampiran2/A_Dok_Kualifikasi.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'B_Seleksi_Kualitas_Biaya_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/B_Seleksi_Kualitas_Biaya_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'C_Seleksi_BU_Kualitas_Biaya_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/C_Seleksi_BU_Kualitas_Biaya_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'D_Seleksi_BU_Kualitas_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/D_Seleksi_BU_Kualitas_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'E_Seleksi_BU_Kualitas_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/E_Seleksi_BU_Kualitas_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'F_Seleksi_BU_Pagu_Anggaran_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/F_Seleksi_BU_Pagu_Anggaran_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'G_Seleksi_BU_Pagu_Anggaran_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/G_Seleksi_BU_Pagu_Anggaran_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'H_Seleksi_BU_Biaya_Terendah_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/H_Seleksi_BU_Biaya_Terendah_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'I_Seleksi_BU_Biaya_Terendah_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/I_Seleksi_BU_Biaya_Terendah_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'J_Seleksi_TA_Kualitas_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/J_Seleksi_TA_Kualitas_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'K_Seleksi_TA_Kualitas_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/K_Seleksi_TA_Kualitas_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
sbulampiran3::create([
    'judul' => '0_COVER_LAMPIRAN_III_PK',
    'peraturan' => 'standarbiayaumum/lampiran3/0_COVER_LAMPIRAN_III_PK.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'A_SDP_PK_Pasca_Harga_Terendah_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/A_SDP_PK_Pasca_Harga_Terendah_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'B_SDP_PK_Pasca_Harga_Terendah_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/B_SDP_PK_Pasca_Harga_Terendah_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'C_SDP_PK_Pasca_Harga_Terendah_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/C_SDP_PK_Pasca_Harga_Terendah_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'D_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/D_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'E_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/E_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'F_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/F_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'G_SDP_PK_Pasca_Sistem_Nilai_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/G_SDP_PK_Pasca_Sistem_Nilai_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'H_SDP_PK_Pasca_Sistem_Nilai_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/H_SDP_PK_Pasca_Sistem_Nilai_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'I_SDP_PK_Pasca_Sistem_Nilai_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/I_SDP_PK_Pasca_Sistem_Nilai_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'J_SDP_PK_Prakualifikasi',
    'peraturan' => 'standarbiayaumum/lampiran3/J_SDP_PK_Prakualifikasi.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'K_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/K_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'L_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/L_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'M_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/M_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'N_SDP_PK_Pra_Sistem_Nilai_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/N_SDP_PK_Pra_Sistem_Nilai_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'O_SDP_PK_Pra_Sistem_Nilai_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/O_SDP_PK_Pra_Sistem_Nilai_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'P_SDP_PK_Pra_Sistem_Nilai_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/P_SDP_PK_Pra_Sistem_Nilai_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);



//  ================================================================


        peraturan::create([
            'judul' => 'UNDANG- UNDANG JASA KONSTRUKSI',
            'peraturan' => 'peraturan/01_uud/UU_NO_02_TAHUN_2017.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ======================================================
        perpemerintah::create([
            'judul' => 'PERATURAN PEMERINTAH NOMOR 29 TAHUN 2000',
            'peraturan' => 'peraturan/02_pemerintah/PERATURAN_PEMERINTAH_NO_29_TAHUN_2000.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        // ======================================================
        perpresiden::create([
            'judul' => 'PERATURAN PRESIDEN NOMOR 12 TAHUN 2021',
            'peraturan' => 'peraturan/03_presiden/PERATURAN_PRESIDEN_NOMOR_12_TAHUN_2021.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

// ==========================================================================================
// ==========================================================================================

        permenteri::create([
            'judul' => 'LAMPIRAN_1_A_COVER_LAMPIRAN_I_PL',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_A_COVER_LAMPIRAN_I_PL.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_A_SDP_PENGADAAN_LANGSUNG_JKK_PERORANGAN',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_A_SDP_PENGADAAN_LANGSUNG_JKK_PERORANGAN.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_B_SDP_PENGADAAN_LANGSUNG_JKK_BUJK',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_B_SDP_PENGADAAN_LANGSUNG_JKK_BUJK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_C_SDP_PENGADAAN_LANGSUNG_PK_PERORANGAN',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_C_SDP_PENGADAAN_LANGSUNG_PK_PERORANGAN.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_D_SDP_PENGADAAN_LANGSUNG_PK_BUJK',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_D_SDP_PENGADAAN_LANGSUNG_PK_BUJK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_A_COVER_LAMPIRAN_II_JK',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_A_COVER_LAMPIRAN_II_JK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_B_DOK_KUALIFIKASI',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_B_DOK_KUALIFIKASI.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_C_SELEKSI_KUALITAS_BIAYA_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_C_SELEKSI_KUALITAS_BIAYA_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_D_SELEKSI_BU_KUALITAS_BIAYA_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_D_SELEKSI_BU_KUALITAS_BIAYA_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_E_SELEKSI_BU_KUALITAS_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_E_SELEKSI_BU_KUALITAS_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_F_SELEKSI_BU_KUALITAS_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_F_SELEKSI_BU_KUALITAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_G_SELEKSI_BU_PAGU_ANGGARAN_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_G_SELEKSI_BU_PAGU_ANGGARAN_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_H_SELEKSI_BU_PAGU_ANGGARAN_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_H_SELEKSI_BU_PAGU_ANGGARAN_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_I_SELEKSI_BU_BIAYA_TERENDAH_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_I_SELEKSI_BU_BIAYA_TERENDAH_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_J_SELEKSI_BU_BIAYA_TERENDAH_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_J_SELEKSI_BU_BIAYA_TERENDAH_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_K_SELEKSI_TA_KUALITAS_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_K_SELEKSI_TA_KUALITAS_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_L_SELEKSI_TA_KUALITAS_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_L_SELEKSI_TA_KUALITAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_A_COVER_LAMPIRAN_III_PK',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_A_COVER_LAMPIRAN_III_PK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_B_SDP_PK_PASCA_HARGA_TERENDAH_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_B_SDP_PK_PASCA_HARGA_TERENDAH_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_C_SDP_PK_PASCA_HARGA_TERENDAH_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_C_SDP_PK_PASCA_HARGA_TERENDAH_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_D_SDP_PK_PASCA_HARGA_TERENDAH_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_D_SDP_PK_PASCA_HARGA_TERENDAH_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_E_SDP_PK_PASCA_HARGA_TERENDA_AMBANG_BATAS_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_E_SDP_PK_PASCA_HARGA_TERENDA_AMBANG_BATAS_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_F_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_F_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_G_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_G_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_H_SDP_PK_PASCA_SISTEM_NILAI_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_H_SDP_PK_PASCA_SISTEM_NILAI_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_I_SDP_PK_PASCA_SISTEM_NILAI_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_I_SDP_PK_PASCA_SISTEM_NILAI_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_J_SDP_PK_PASCA_SISTEM_NILAI_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_J_SDP_PK_PASCA_SISTEM_NILAI_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_K_SDP_PK_PRAKUALIFIKASI',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_K_SDP_PK_PRAKUALIFIKASI.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_L_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_L_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_M_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_M_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_N_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_N_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_O_SDP_PK_PRA_SISTEM_NILAI_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_O_SDP_PK_PRA_SISTEM_NILAI_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_P_SDP_PK_PRA_SISTEM_NILAI_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_P_SDP_PK_PRA_SISTEM_NILAI_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_Q_SDP_PK_PRA_SISTEM_NILAI_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_Q_SDP_PK_PRA_SISTEM_NILAI_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

// ============================================================================================================
        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_DIRJEN_BINAKOS_NO_89_PENETAPAN_STANDAR_SKEMA_SERTIFIKAT_BUJK',
            'peraturan' => 'peraturan/05_keputusanmenteri/KEPUTUSAN_DIRJEN_BINAKOS_NO_89_PENETAPAN_STANDAR_SKEMA_SERTIFIKAT_BUJK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_DIRJEN_PENETAPAN_SKEMA_BUJK_NOMOR_144_TAHUN_2022',
            'peraturan' => 'peraturan/05_keputusanmenteri/KEPUTUSAN_DIRJEN_PENETAPAN_SKEMA_BUJK_NOMOR_144_TAHUN_2022.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_MENTERI_PUPR_NO_713_TAHUN_2022',
            'peraturan' => 'peraturan/05_keputusanmenteri/KEPUTUSAN_MENTERI_PUPR_NO_713_TAHUN_2022.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_MENTERI_PUPR_NO_1410_KPTS_M_2020',
            'peraturan' => 'peraturan/05_keputusanmenteri/KEPUTUSAN_MENTERI_PUPR_NO_1410_KPTS_M_2020.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ====================================================================================================================================================================================
        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_BINKON_NO_54_TAHUN_2024',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_BINKON_NO_54_TAHUN_2024.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_BK_NOMOR_33_TAHUN_2023',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_BK_NOMOR_33_TAHUN_2023.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_KEMENTERIAN_2022_SE_DJB_TATA_CARA_PELAKSANAAN_SERTIFIKASI_KOMPETENSI_FINAL',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_KEMENTERIAN_2022_SE_DJB_TATA_CARA_PELAKSANAAN_SERTIFIKASI_KOMPETENSI_FINAL.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        suratedaran::create([
            'judul' => 'SURAT_EDARAN_PENCABUTAN_DIRJEN_BK_NO_59_2022',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_PENCABUTAN_DIRJEN_BK_NO_59_2022.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_BINKON_NO_73_TAHUN_2023',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_BINKON_NO_73_TAHUN_2023.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ===========================================================================================================================================================

        referensi::create([
            'judul' => 'PERATURAN_PEMERINTAH_NOMOR_22_TAHUN_2020',
            'peraturan' => 'peraturan/07_suratreferensi/PERATURAN_PEMERINTAH_NOMOR_22_TAHUN_2020.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ===========================================================================================================================================================

        perdaerah::create([
            'judul' => 'PERATURAN_DAERAH_NO_11-TAHUN_2019',
            'peraturan' => 'peraturan/08_daerah/PERATURAN_DAERAH_NO_11-TAHUN_2019.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        perdaerah::create([
            'judul' => 'PERATURAN_DAERAH_NOMOR_01_TAHUN_2021_OCR',
            'peraturan' => 'peraturan/08_daerah/PERATURAN_DAERAH_NOMOR_01_TAHUN_2021_OCR.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);


// ===========================================================================================================================================================

pergubernur::create([
    'judul' => 'PERATURAN_GUBERNUR_NOMOR_99_TAHUN_2009',
    'peraturan' => 'peraturan/09_gubernur/PERATURAN_GUBERNUR_NOMOR_99_TAHUN_2009.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


// ===========================================================================================================================================================

perbupatiwalikota::create([
    'judul' => 'PERATURAN_BUPATI_NOMOR_71_TAHUN_2023',
    'peraturan' => 'peraturan/10_bupatiwalikota/PERATURAN_BUPATI_NOMOR_71_TAHUN_2023.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

perbupatiwalikota::create([
    'judul' => 'PERATURAN_BUPATI_NOMOR_72_TAHUN_2023_LANJUTAN',
    'peraturan' => 'peraturan/10_bupatiwalikota/PERATURAN_BUPATI_NOMOR_72_TAHUN_2023_LANJUTAN.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


// ===========================================================================================================================================================

suratkeputusan::create([
    'judul' => 'PERATURAN MENTERI PEKERJAAN UMUM DAN PERUMAHAN RAKYAT REPUBLIK INDONESIA NOMOR 8 TAHUN 2022 TENTANG TATA CARA PELAKSANAAN PEMENUHAN SERTIFIKAT STANDAR JASA KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/01.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'PERATURAN MENTERI PEKERJAAN UMUM DAN PERUMAHAN RAKYAT REPUBLIK INDONESIA NOMOR 8 TAHUN 2022 TENTANG TATA CARA PELAKSANAAN PEMENUHAN SERTIFIKAT STANDAR JASA KONSTRUKSI DALAM RANGKA MENDUKUNG KEMUDAHAN PERIZINAN BERUSAHA BAGI PELAKU USAHA JASA KONSTRUKSI - RELAKSASI',
    'peraturan' => 'peraturan/11_keputusan/02.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'PERMEN PUPR NO. 8 TAHUN 2022 TENTANG TATA CARA PELAKSANAAN PEMENUHAN SERTIFIKAT STANDAR JASA KONSTRUKSI DALAM RANGKA MENDUKUNG KEMUDAHAN PERIZINAN BERUSAHA BAGI PELAKU USAHA JASA KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/03.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


suratkeputusan::create([
    'judul' => 'SURAT EDARAN LPJK NOMOR : 07/SE/LPJK/2022 TENTANG PEDOMAN PEMBERIAN REKOMENDASI LISENSI LSP, PENCATATAN LSP TERLISENSI, SERTA DAFTAR PENYESUAIAN STANDAR KOMPETENSI DAN JABKER KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/04.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'KEPUTUSAN DIRJEN BIKON NO. 12.1/KPTS/Dk/2022 - TENTANG PENETAPAN JABATAN KERJA DAN KONVERSI JABATAN KERJA EKSISTING SERTA JENJANG KUALIFIKASI BIDANG JASA KONSTRUKSI - TAHUN 2022',
    'peraturan' => 'peraturan/11_keputusan/05.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'KEPUTUSAN DIREKTUR JENDERAL BINA KONSTRUKSI, KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT NOMOR 144/KPTS/DK/2022 TENTANG PENETAPAN STANDAR SKEMA SERTIFIKASI BADAN USAHA JASA KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/06.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'SE MENTERI PUPR NO. 05 TAHUN 2022 PERUBAHAN ATAS SE NO. 03/SE/M/2022 TENTANG PEDOMAN PERPANJANGAN MASA BERLAKU SKK JASA KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/07.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'SE MENTERI PUPR NO. 02 TAHUN 2021 TENTANG PERUBAHAN SE MENTERI PUPR NO. 30 TAHUN 2020',
    'peraturan' => 'peraturan/11_keputusan/08.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'KEPUTUSAN NO. 89 DIREKTUR JENDERAL DJBK PUPR TAHUN 2021',
    'peraturan' => 'peraturan/11_keputusan/09.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);



// uijk::create([
//     'nama_perusahaan' => '',
//     'kategori_perusahaan' => '',
//     'klasifikasi_bidang_usaha' => '',
//     'sub_klasifikasi_bidang_usaha' => '',
//     'keterangan' => '2018',
//     'created_at' => Carbon::now(),
//     'updated_at' => Carbon::now(),
// ]);

// kegiatanjaskon::create([
//                 // 'laporankegiatan_id' => 2, // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                 'id' => 2,           // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                 'user_id' => 1,           // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                 'judul_kegiatan' => '2 - 3 DESEMBER 2024, KECAMATAN CIKALONG WETAN BIMBINGAN TEKNIS KESELAMATAN DAN KESEHATAN KERJA PARA PEKERJA KONSTRUKSI',
//                 'alamat_kegiatan' => 'DESA CISOMANG BARAT 40556 JAWA BARAT INDONESIA',
//                 'pengawasanlokasi_id' => '11',
//                 'tanggal' => '',
//                 'berita1' => 'dokumentasipelatihan/new/01_CB.jpg',
//                 'berita2' => 'dokumentasipelatihan/new/02_CB.jpg',
//                 'berita3' => 'dokumentasipelatihan/new/03_CB.jpg',
//                 'berita4' => 'dokumentasipelatihan/new/04_CB.jpg',
//                 'berita5' => 'dokumentasipelatihan/new/05_CB.jpg',
//                 'berita6' => 'dokumentasipelatihan/new/06_CB.jpg',
//                 'berita7' => 'dokumentasipelatihan/new/07_CB.jpg',
//                 'berita8' => 'dokumentasipelatihan/new/08_CB.jpg',
//                 'berita9' => 'dokumentasipelatihan/new/09_CB.jpg',
//                 'berita10' => 'dokumentasipelatihan/new/10_CB.jpg',
//                 'berita11' => 'dokumentasipelatihan/new/11_CB.jpg',
//                 'berita12' => 'dokumentasipelatihan/new/12_CB.jpg',
//                 'berita13' => 'dokumentasipelatihan/new/13_CB.jpg',
//                 'berita14' => 'dokumentasipelatihan/new/14_CB.jpg',
//                 'berita15' => 'dokumentasipelatihan/new/15_CB.jpg',
//                 'berita16' => 'dokumentasipelatihan/new/16_CB.jpg',
//                 'berita17' => 'dokumentasipelatihan/new/17_CB.jpg',
//                 'berita18' => 'dokumentasipelatihan/new/18_CB.jpg',
//                 'berita19' => 'dokumentasipelatihan/new/19_CB.jpg',
//                 'berita20' => 'dokumentasipelatihan/new/20_CB.jpg',

//                 'tanggal' => '2024-12-02', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
// ]);


// ==========================================================================================================
// DATA YANG DIRUBAH DARI PEMERINTAH KABUPATEN BANDUNG BARAT
// laporankegiatan::create([
//                     // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                 'kegiatanjaskon_id' => '1',
//                 'user_id' => '1',
//                 'judul_kegiatan' => 'sambutan oleh bapak sekdis pupr kabupaten bandung barat  ',
//                 'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//                 'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//                 'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//                 'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
// ]);

// laporankegiatan::create([
//                     // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                     'kegiatanjaskon_id' => '1',
//                     'user_id' => '1',
//                     'judul_kegiatan' => 'sambutan oleh camat cililin kabupaten bandung barat  ',
//                 'jabatan' => 'camat kecamatan cililin kabupaten bandung barat',
//                 'gambar' => 'acarasertifikasi/beritaacara/PA_CAMAT.jpeg',
//                 'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Camat Cililin, dalam sambutannya, mengapresiasi penyelenggaraan acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diadakan di Desa Batulayang. Acara ini merupakan inisiatif penting dari Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) untuk mendukung peningkatan kualitas dan keselamatan dalam proyek-proyek konstruksi di wilayah kami. Dengan adanya bimbingan teknis ini, diharapkan semua pihak dapat memahami dan menerapkan standar keselamatan yang tinggi serta mengikuti semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Camat Cililin menegaskan betapa pentingnya implementasi standar K3 dalam sektor konstruksi untuk mencegah risiko dan kecelakaan kerja. Pelatihan ini dirancang untuk memberi peserta pengetahuan mendalam tentang praktik terbaik dalam keselamatan kerja dan bagaimana cara mengelola risiko secara efektif. Peserta diharapkan tidak hanya mendapatkan informasi teoritis, tetapi juga keterampilan praktis yang berguna dalam menghadapi tantangan di lapangan.</p>

// <p>Selama bimbingan, berbagai topik teknis yang berkaitan dengan keselamatan konstruksi dibahas secara mendetail. Narasumber yang berpengalaman diundang untuk memberikan wawasan dan solusi terhadap berbagai masalah yang sering muncul dalam proyek konstruksi. Tujuan dari kegiatan ini adalah untuk meningkatkan kesadaran dan kemampuan semua peserta sehingga dapat menciptakan lingkungan kerja yang lebih aman dan produktif di wilayah Kecamatan Cililin.</p>

// <p>Di akhir acara, Camat Cililin menyampaikan terima kasih kepada semua pihak yang telah berkontribusi dalam pelaksanaan bimbingan teknis ini. Diharapkan bahwa pelatihan ini memberikan manfaat besar dan dapat diterapkan dalam setiap proyek konstruksi yang dilakukan. Komitmen bersama untuk mencapai standar keselamatan yang tinggi akan mendukung kesuksesan proyek dan meningkatkan keselamatan kerja di Kabupaten Bandung Barat.</p>



// ',
//                 'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
// ]);

// laporankegiatan::create([
//                     // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                     'kegiatanjaskon_id' => '1',
//                     'user_id' => '1',
//                     'judul_kegiatan' => 'sambutan oleh bpk yuyu yuhana, ST., MM pembina jasa konstruksi ahli muda pemerintah kabupaten bandung barat',
//                 'jabatan' => 'kepala putr kabupaten bandung barat',
//                 'gambar' => 'acarasertifikasi/beritaacara/PA_YUYU.jpeg',
//                 'keterangan_berita' => '
// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Kepala Dinas Pekerjaan Umum dan Tata Ruang (PUTR) Kabupaten Bandung Barat, dalam sambutannya, mengapresiasi pelaksanaan acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diselenggarakan di Desa Batulayang. Acara ini merupakan bagian dari upaya berkelanjutan Dinas PUTR untuk meningkatkan kualitas dan keselamatan di sektor konstruksi. Kegiatan ini bertujuan memastikan bahwa semua aspek pekerjaan konstruksi dilakukan sesuai dengan standar yang tinggi dan mematuhi regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Kepala Dinas PUTR menekankan betapa pentingnya penerapan standar K3 dalam industri konstruksi untuk mencegah risiko dan kecelakaan di tempat kerja. Bimbingan teknis ini dirancang untuk memberikan peserta pengetahuan mendalam mengenai praktik terbaik dalam keselamatan kerja serta cara-cara efektif untuk mengelola risiko. Harapannya, peserta dapat memperoleh keterampilan praktis yang diperlukan untuk menghadapi berbagai tantangan di lapangan dan mencegah terjadinya kecelakaan.</p>

// <p>Selama sesi bimbingan, berbagai topik teknis yang berkaitan dengan keselamatan dalam konstruksi akan dibahas secara komprehensif. Narasumber berpengalaman akan berbagi wawasan dan solusi terkait tantangan dalam pelaksanaan proyek konstruksi. Kegiatan ini bertujuan untuk meningkatkan kesadaran dan kompetensi semua pihak terkait, sehingga dapat menciptakan lingkungan kerja yang lebih aman dan produktif.</p>

// <p>Penutupan acara ditandai dengan ucapan terima kasih dari Kepala Dinas PUTR kepada semua pihak yang telah berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, hasil dari pelatihan ini akan memberikan manfaat yang signifikan dan dapat diterapkan dalam setiap proyek konstruksi. Komitmen bersama untuk mencapai standar keselamatan yang tinggi merupakan langkah penting menuju kesuksesan dan keamanan dalam industri konstruksi di Kabupaten Bandung Barat.</p>


// ',
//                 'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
// ]);

// laporankegiatan::create([
//                     // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                     'kegiatanjaskon_id' => '1',
//                     'user_id' => '1',
//                     'judul_kegiatan' => 'Sambutan oleh bpk Laswono, ST PEMBEKALAN PEKERJA/TUKANG KONSTRUKSI REGULASI SERTIFIKASI KOMPETENSI KERJA (SKK) ',
//                 'jabatan' => 'Pembina Jasa Konstruksi Ahli Muda Dinas Bina Marga dan Tata Ruang Provinsi Jawa Barat',
//                 'gambar' => 'acarasertifikasi/beritaacara/PA_LASWONO.jpeg',
//                 'keterangan_berita' => '
// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Pembina Jasa Konstruksi Ahli Muda Dinas Bina Marga dan Tata Ruang Provinsi Jawa Barat, Bapak Laswono, ST, memberikan sambutan pada acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diselenggarakan di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini merupakan bagian dari upaya Dinas Bina Marga dan Tata Ruang Provinsi Jawa Barat untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa semua pekerjaan konstruksi dilakukan dengan mematuhi standar yang tinggi dan regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Bapak Laswono menekankan pentingnya penerapan regulasi dan sertifikasi kompetensi kerja (SKK) dalam industri konstruksi. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama bimbingan, berbagai topik teknis yang berkaitan dengan keselamatan dalam konstruksi dan regulasi SKK akan dibahas secara mendalam. Narasumber berpengalaman akan memberikan wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Kegiatan ini bertujuan untuk meningkatkan kesadaran dan kompetensi semua pihak terkait sehingga dapat menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih dari Bapak Laswono kepada semua pihak yang telah berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, pelatihan dan bimbingan ini akan memberikan manfaat yang signifikan dan dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan dan kualitas yang tinggi di Kabupaten Bandung Barat.</p>

// ',
//                 'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
// ]);

// laporankegiatan::create([
//                     // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                     'kegiatanjaskon_id' => '1',
//                     'user_id' => '1',
//                     'judul_kegiatan' => 'sambutan oleh ibu Dra. Fauzia Mulyawati, ST., MT tentang Pembekalan Pekerja/Tukang Konstruksi Terkait Keselamatan Kerja dan Kesehatan (K3)',
//                 'jabatan' => 'Dosen Universitas Langlangbuana Bandung',
//                 'gambar' => 'acarasertifikasi/beritaacara/BU_FAUZIA.jpeg',
//                 'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dra. Fauzia Mulyawati, ST., MT, Dosen Universitas Langlangbuana Bandung, memberikan bimbingan dan pengarahan pada acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diselenggarakan di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini merupakan bagian dari upaya untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini bertujuan memastikan bahwa semua pekerjaan konstruksi dilakukan dengan mematuhi standar tinggi dan regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Dra. Fauzia Mulyawati menekankan pentingnya pemahaman mengenai Keselamatan Kerja dan Kesehatan (K3) di sektor konstruksi. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai penerapan praktik K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko serta menerapkan standar keselamatan dan kesehatan di lokasi kerja.</p>

// <p>Selama bimbingan, berbagai topik teknis terkait K3 akan dibahas secara mendalam. Narasumber berpengalaman akan memberikan wawasan dan solusi mengenai tantangan dalam penerapan K3 serta praktik keselamatan yang efektif di industri konstruksi. Kegiatan ini bertujuan untuk meningkatkan kesadaran dan kompetensi semua pihak terkait, sehingga dapat menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih dari Dra. Fauzia Mulyawati kepada semua pihak yang telah berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, pelatihan dan bimbingan ini akan memberikan manfaat signifikan dan dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan dan kesehatan kerja yang tinggi di Kabupaten Bandung Barat.</p>

// ',
//                 'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
// ]);

// laporankegiatan::create([
//                     // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                     'kegiatanjaskon_id' => '1',
//                     'user_id' => '1',
//                     'judul_kegiatan' => 'sambutan oleh ibu Rosita, SE., MM tentang Pembekalan Pekerja/Tukang Konstruksi Terkait Regulasi Badan Penjaminan Jaminan Sosial (BPJS) Ketenagakerjaan',
//                 'jabatan' => 'Badan Penyelenggara Jaminan Sosial',
//                 'gambar' => 'acarasertifikasi/beritaacara/BU_ROSITA.jpg',
//                 'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Ibu Rosita, SE., MM, dari BPJS Ketenagakerjaan, memberikan bimbingan dan pengarahan dalam acara bimbingan teknis mengenai Regulasi Badan Penjaminan Jaminan Sosial (BPJS) Ketenagakerjaan yang diselenggarakan di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini merupakan bagian dari komitmen untuk meningkatkan pemahaman tentang regulasi dan jaminan sosial di sektor konstruksi, serta memastikan bahwa setiap pekerja konstruksi memahami hak dan kewajiban mereka di bawah BPJS Ketenagakerjaan.</p>

// <p>Dalam sambutannya, Ibu Rosita menekankan pentingnya pemahaman mengenai regulasi BPJS Ketenagakerjaan untuk pekerja dan tukang konstruksi. Bimbingan ini dirancang untuk memberikan informasi mendalam mengenai cara BPJS Ketenagakerjaan berfungsi dan bagaimana pekerja dapat memanfaatkan jaminan sosial untuk perlindungan mereka. Peserta diharapkan memperoleh pengetahuan dan keterampilan yang diperlukan untuk mengelola dan memanfaatkan manfaat BPJS secara efektif.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait regulasi BPJS Ketenagakerjaan akan dibahas secara rinci. Ibu Rosita akan membagikan wawasan mengenai hak-hak pekerja, prosedur klaim, serta mekanisme perlindungan yang disediakan oleh BPJS. Tujuan utama dari kegiatan ini adalah untuk meningkatkan pemahaman dan kesadaran semua pihak terkait, sehingga mereka dapat memanfaatkan perlindungan sosial dengan maksimal.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih dari Ibu Rosita kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan ini. Diharapkan, pelatihan dan bimbingan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung kepatuhan terhadap regulasi BPJS Ketenagakerjaan di Kabupaten Bandung Barat.</p>

// ',
//                 'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
//             ]);

// ============== ============== ============== ============== ============== ============== ==============
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);



//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);

            // ================= =====================================================================================




    }
 /**
     * Menghitung usia berdasarkan tanggal lahir.
     *
     * @param  string  $birthDate
     * @return int
     */
    protected function calculateAge($birthDate)
    {
        return Carbon::parse($birthDate)->age;
    }


    // PEMERINTAH KABUPATEN BLORA PROVINSI JAWA TENGAH


}
