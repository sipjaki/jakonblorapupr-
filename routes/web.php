<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DatajakonController;
use App\Http\Controllers\FedashboardController;
use App\Http\Controllers\AgendaskkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\SettingmenuController;
use App\Http\Controllers\BujkkontraktorController;
use App\Http\Controllers\BujkkonsultanController;
use App\Http\Controllers\DatastatistikajakonbloraController;
use App\Http\Controllers\SkktenagakerjabloraController;
use App\Http\Controllers\PembinaanController;
use App\Http\Controllers\PengawasanbujkController;
use App\Http\Controllers\KecelakaankerjamasjakiController;
use App\Http\Controllers\TertibjasakonstruksiController;
use App\Http\Controllers\RantaipasokbloraController;
use App\Http\Controllers\TokobangunanbloraController;
use App\Http\Controllers\ShstbloraController;
use App\Http\Controllers\SatuanhargamaterialController;
use App\Http\Controllers\BeritajakonController;
use App\Http\Controllers\KritikdansaranController;
use App\Http\Controllers\AllskktenagakerjabloraController;
use App\Http\Controllers\PaketpekerjaanmasjakiController;
// MAS JAKI

// atas
use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ------------------------- FRONTEND HALAMAN UTAMA MAS JAKI BLORA  --------------------------
// ==========================================================================================================================================
// ---------------------- BAGIAN 01 BERANDA HALAMAN DEPAN -----------------------//
// ==========================================================================================================================================
Route::get('/', [FedashboardController::class, 'index']);

Route::get('/404', function () {
    // return view('welcome');
    return view('404', [
        'title' => 'Under Constructions',
    ]);
});

Route::get('/kritikdansaran', [KritikdansaranController::class, 'index']);

// ==========================================================================================================================================
// ---------------------- BAGIAN 02 KELEMBAGAAN FRONTEND -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU 1-----------------------------------------------------
Route::get('/profil/struktur', [StrukturController::class, 'strukturdpuprkabblora']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2-----------------------------------------------------
Route::get('/profil/rencanastrategis', [StrukturController::class, 'rencanastrategisdpuprkabblora']);

// ---------------------- MENU 2-----------------------------------------------------
Route::get('/profil/tupoksi', [StrukturController::class, 'tupoksifekbb']);
// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 03 BERITA FRONTEND -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU PERATURAN -----------------------------------------------------
// -------- BAGIAN 1 ---------------------------------
Route::get('/peraturan/undangundang', [PeraturanController::class, 'feundangundang']);
Route::get('/peraturan/undangundang/{judul}', [PeraturanController::class, 'undangundangshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 2 ---------------------------------
Route::get('/peraturan/pemerintah', [PeraturanController::class, 'fepemerintah']);
Route::get('/peraturan/pemerintah/{judul}', [PeraturanController::class, 'pemerintahshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 3 ---------------------------------
Route::get('/peraturan/presiden', [PeraturanController::class, 'fepresiden']);
Route::get('/peraturan/presiden/{judul}', [PeraturanController::class, 'presidenshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 4 ---------------------------------
Route::get('/peraturan/menteri', [PeraturanController::class, 'fementeri']);
Route::get('/peraturan/menteri/{judul}', [PeraturanController::class, 'fementerishowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 5 ---------------------------------
Route::get('/peraturan/keputusanmenteri', [PeraturanController::class, 'feskmenteri']);
Route::get('/peraturan/keputusanmenteri/{judul}', [PeraturanController::class, 'feskmenterishowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 6 ---------------------------------
Route::get('/peraturan/suratedaranmenteri', [PeraturanController::class, 'suratedaranmenteri']);
Route::get('/peraturan/suratedaranmenteri/{judul}', [PeraturanController::class, 'suratedaranmenterishowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 7 ---------------------------------
Route::get('/peraturan/referensi', [PeraturanController::class, 'fereferensi']);
Route::get('/peraturan/referensi/{judul}', [PeraturanController::class, 'referensishowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 8 ---------------------------------
Route::get('/peraturan/daerah', [PeraturanController::class, 'feperdaerah']);
Route::get('/peraturan/daerah/{judul}', [PeraturanController::class, 'feperdaerahshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 9 ---------------------------------
Route::get('/peraturan/peraturangubernur', [PeraturanController::class, 'feperaturangubernur']);
Route::get('/peraturan/gubernur/{judul}', [PeraturanController::class, 'gubernurshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 10 ---------------------------------
Route::get('/peraturan/walikotadanbupati', [PeraturanController::class, 'feperbupatiwalikota']);
Route::get('/peraturan/walikotadanbupati/{judul}', [PeraturanController::class, 'feperbupatiwalikotashowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 11 ---------------------------------
Route::get('/peraturan/suratkeputusan', [PeraturanController::class, 'fesuratkeputusan']);
Route::get('/peraturan/suratkeputusan/{judul}', [PeraturanController::class, 'fesuratkeputusanshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- STANDAR BIAYA UMUM ---------------------------------
Route::get('/standarbiayaumummasjaki', [DatajakonController::class, 'newstandarbiayaumum']);
Route::get('/standarbiayaumummasjaki/{judul}', [DatajakonController::class, 'standarbiayaumumshowbyjudul']);
Route::get('/standarbiayaumumsbu1/{judul}', [DatajakonController::class, 'standarbiayaumumshowbyjudul1']);
Route::get('/standarbiayaumumsbu2/{judul}', [DatajakonController::class, 'standarbiayaumumshowbyjudul2']);
Route::get('/standarbiayaumumsbu3/{judul}', [DatajakonController::class, 'standarbiayaumumshowbyjudul3']);

Route::get('/datajakon/fesbulampiran3', [DatajakonController::class, 'fesbulampiran3']);
Route::get('/datajakon/fesbulampiran3/{judul}', [DatajakonController::class, 'fesbulampiran3showbyjudulfe']);

Route::get('/datajakon/fesbulampiran2', [DatajakonController::class, 'fesbulampiran2']);
Route::get('/datajakon/fesbulampiran2/{judul}', [DatajakonController::class, 'fesbulampiran2showbyjudulfe']);

Route::get('/datajakon/fesbulampiran1', [DatajakonController::class, 'fesbulampiran1']);
Route::get('/datajakon/fesbulampiran1/{judul}', [DatajakonController::class, 'fesbulampiran1showbyjudulfe']);
// ___________________________________________________________________________________________________________________________________


// ---------------------- MENU 2 BERITA JAKON -----------------------------------------------------
Route::get('/beritajakon', [BeritajakonController::class, 'index']);
Route::get('/beritajakon/{judulberita}', [BeritajakonController::class, 'showjudulberita']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 ARTIKEL JAKON -----------------------------------------------------
Route::get('/artikeljakon', [BeritajakonController::class, 'artikeljakon']);
Route::get('/artikeljakon/{judul}', [BeritajakonController::class, 'artikeljakonshow']);
// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 04 DATA JAKON  -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU DATA BUJK KONTRAKTOR DAN KONSULTAN  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 BUJK KONTRAKTOR -----------------------------------------------------
Route::get('/datajakon/bujkkontraktor', [BujkkontraktorController::class, 'bujkkontraktor'])->name('bujkkontraktor');
Route::get('/datajakon/bujkkontraktor/{namalengkap}', [BujkkontraktorController::class, 'bujkkontraktorshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 BUJK KONSULTAN -----------------------------------------------------
Route::get('/datajakon/bujkkonsultan', [BujkkonsultanController::class, 'bujkkonsultan']);
Route::get('/datajakon/bujkkonsultan/{namalengkap}', [BujkkonsultanController::class, 'bujkkonsultanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 ASOSIASI MASJAKI  -----------------------------------------------------
Route::get('/datajakon/bujk', [BujkkontraktorController::class, 'index']);
Route::get('/datajakon/asosiasimasjaki', [BujkkontraktorController::class, 'asosiasimasjaki']);
Route::get('/datajakon/asosiasikonstruksi/{namaasosiasi}', [BujkkontraktorController::class, 'asosiasikonstruksishow']);
Route::get('/datajakon/asosiasikonsultan/{namaasosiasi}', [BujkkontraktorController::class, 'asosiasikonsultanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 4 DATA STATISTIK BUJK   -----------------------------------------------------
Route::get('/datajakon/statistikabujkblora', [DatastatistikajakonbloraController::class, 'databujk']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU DATA TENAGA KERJA KONSTRUKSI  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 SKK TENAGA KERJA DPUPR  -----------------------------------------------------
Route::get('/datajakon/skktenagakerja', [SkktenagakerjabloraController::class, 'index']);
Route::get('/datajakon/skktenagakerjablora', [SkktenagakerjabloraController::class, 'listskktenagakerjablora']);
Route::get('/datajakon/skktenagakerjablora/{nama}', [SkktenagakerjabloraController::class, 'listskktenagakerjablorashow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 SEMUA SKK TENAGA KERJA   -----------------------------------------------------
Route::get('/datajakon/skktenagakerjabloralist', [SkktenagakerjabloraController::class, 'datalistskktenagakerjablora']);
Route::get('/datajakon/skktenagakerjabloralist/{nama}', [SkktenagakerjabloraController::class, 'datalistskktenagakerjablorashow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 DATA STATISTIKA   -----------------------------------------------------
Route::get('/datajakon/statistikaskktenagakerjablora', [DatastatistikajakonbloraController::class, 'statistikaskktenagakerjablora']);
Route::get('/datajakon/statistikaskktenagakerjabloralist', [DatastatistikajakonbloraController::class, 'datastatistikaskktenagakerjablora']);

Route::get('/datajakon/statistikdatajenjang1', [DatastatistikajakonbloraController::class, 'datajenjang1']);
Route::get('/datajakon/statistikdatajenjang2', [DatastatistikajakonbloraController::class, 'datajenjang2']);
Route::get('/datajakon/statistikdatajenjang3', [DatastatistikajakonbloraController::class, 'datajenjang3']);
Route::get('/datajakon/statistikdatajenjang4', [DatastatistikajakonbloraController::class, 'datajenjang4']);
Route::get('/datajakon/statistikdatajenjang5', [DatastatistikajakonbloraController::class, 'datajenjang5']);
Route::get('/datajakon/statistikdatajenjang6', [DatastatistikajakonbloraController::class, 'datajenjang6']);
Route::get('/datajakon/statistikdatajenjang7', [DatastatistikajakonbloraController::class, 'datajenjang7']);
Route::get('/datajakon/statistikdatajenjang8', [DatastatistikajakonbloraController::class, 'datajenjang8']);
Route::get('/datajakon/statistikdatajenjang9', [DatastatistikajakonbloraController::class, 'datajenjang9']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU DATA PROFIL PAKET PEKERJAAN  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 PROFIL PAKET PEKERJAAN   -----------------------------------------------------
Route::get('/datajakon/profilpaketpekerjaan', [PaketpekerjaanmasjakiController::class, 'paketpekerjaanmasjaki']);
Route::get('/datajakon/profilpaketpekerjaan/{namapekerjaan}', [PaketpekerjaanmasjakiController::class, 'paketpekerjaanshow']);
// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 05 PEMBINAA  -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU 1 AGENDA PELATIHAN  -----------------------------------------------------
Route::get('/agendapembinaan', [PembinaanController::class, 'index']);
Route::get('/agendapembinaan/{namakegiatan}', [PembinaanController::class, 'namakegiatandaftar']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 DAFTAR PESERTA PELATIHAN  -----------------------------------------------------
Route::get('/daftarpesertapelatihan', [PembinaanController::class, 'daftarpesertapelatihan']);
Route::get('/daftarpesertapelatihans/{namakegiatan}', [PembinaanController::class, 'daftarpesertapelatihanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 DAFTAR SKK BIMBINGAN TEKNIS  -----------------------------------------------------
Route::get('/agendaskk', [AgendaskkController::class, 'index']);
Route::get('/agendaskk/{namakegiatan}', [AgendaskkController::class, 'daftaragendaskk']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 4 DAFTAR PESERTA SKK -----------------------------------------------------
Route::get('/daftarpesertaskk', [AgendaskkController::class, 'daftarpesertaskk']);
Route::get('/daftarpesertaskks/{namakegiatan}', [AgendaskkController::class, 'daftarpesertaskkshow']);
// _______ ALTERNATIF DATA YANG SUDAH DI BUATKAN ____________________________________________________________________________________________________________________________
Route::get('/skktenagakerjablora', [AllskktenagakerjabloraController::class, 'index']);
Route::get('/daftarskkblora/{nik}', [AllskktenagakerjabloraController::class, 'skktenagakerjablorashow']);
// ___________________________________________________________________________________________________________________________________

// ==========================================================================================================================================
// ---------------------- BAGIAN 06 PENGAWASAN  -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU TERTIB JASA KONSTRUKSI  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 TERTIB JAKON USAHA -----------------------------------------------------
Route::get('/tertibjasakonstruksilist', [TertibjasakonstruksiController::class, 'tertibjasakonstruksilist']);
Route::get('/tertibjasakonstruksilist/{namabadanusaha}', [TertibjasakonstruksiController::class, 'tertibjasakonstruksishow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 TERTIB JAKON PEMANFAATAN -----------------------------------------------------
Route::get('/tertibjasakonstruksipemanfaatan', [TertibjasakonstruksiController::class, 'tertibjasakonstruksipemanfaatan']);
Route::get('/tertibjasakonstruksipemanfaatan/{namabangunan}', [TertibjasakonstruksiController::class, 'tertibjasakonstruksipemanfaatanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 TERTIB JAKON PENYELENGGARAAN -----------------------------------------------------
Route::get('/tertibjasakonstruksipenyelenggaraan', [TertibjasakonstruksiController::class, 'tertibjasakonstruksipenyelenggaraan']);
Route::get('/tertibjasakonstruksipenyelenggaraan/{kegiatankonstruksi}', [TertibjasakonstruksiController::class, 'tertibjasakonstruksipenyelenggaraanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 4 DATA STATISTIKA JAKON BLORA  -----------------------------------------------------
Route::get('/statistiktertibjakonblora', [DatastatistikajakonbloraController::class, 'tertibjakonblora']);
// ___________________________________________________________________________________________________________________________________



// ---------------------- MENU PENGAWASAN BUJK  -----------------------//
// ==========================================================================================================================================
Route::get('/pengawasanbujk', [PengawasanbujkController::class, 'index']);
Route::get('/pengawasanbujkshow/{namaperusahaan}', [PengawasanbujkController::class, 'bujkpengwasanshowmasjaki']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU KECELAKAAN KERJA  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 DATA KECELAKAAN KERJA -----------------------------------------------------
Route::get('/kecelakaankerja', [KecelakaankerjamasjakiController::class, 'index']);
Route::get('/kecelakaankerjalist', [KecelakaankerjamasjakiController::class, 'kecelakaankerjalist']);
Route::get('/kecelakaankerjalist/{namapaketpekerjaan}', [KecelakaankerjamasjakiController::class, 'kecelakaankerjashow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 DATA STATISTIKA KECELAKAAN KERJA -----------------------------------------------------

// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 07 AHSP HARGA KONSTRUKSI   -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU AHSP KECIPTAKARYAAN  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU SATUAN HARGA DASAR  -----------------------//
// ==========================================================================================================================================


// ---------------------- MENU 1 SATUAN HARGA DASAR MATERIAL  -----------------------------------------------------
Route::get('/satuanhargamaterial', [SatuanhargamaterialController::class, 'index']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 SATUAN HARGA DASAR UPAH TENAGA KERJA  -----------------------------------------------------
Route::get('/satuanhargaupahtenaga', [SatuanhargamaterialController::class, 'satuanhargaupah']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 SATUAN HARGA DASAR PERALATAN  -----------------------------------------------------
Route::get('/satuanhargaperalatan', [SatuanhargamaterialController::class, 'satuanhargaperalatan']);
// ___________________________________________________________________________________________________________________________________


// ---------------------- HSP KONSTRUKSI UMUM  -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU HSP DIVISI 1 SAMPAI 9 -----------------------------------------------------

Route::get('/hspdivisi1', [SatuanhargamaterialController::class, 'hspdivisi1']);
Route::get('/satuanhargadivisi1/{id}', [SatuanhargamaterialController::class, 'hspdivisi1show']);

Route::get('/hspdivisi2', [SatuanhargamaterialController::class, 'hspdivisi2']);
Route::get('/satuanhargadivisi2/{id}', [SatuanhargamaterialController::class, 'hspdivisi2show']);

Route::get('/hspdivisi3', [SatuanhargamaterialController::class, 'hspdivisi3']);
Route::get('/satuanhargadivisi3/{id}', [SatuanhargamaterialController::class, 'hspdivisi3show']);

Route::get('/hspdivisi4', [SatuanhargamaterialController::class, 'hspdivisi4']);
Route::get('/satuanhargadivisi4/{id}', [SatuanhargamaterialController::class, 'hspdivisi4show']);

Route::get('/hspdivisi5', [SatuanhargamaterialController::class, 'hspdivisi5']);
Route::get('/satuanhargadivisi5/{id}', [SatuanhargamaterialController::class, 'hspdivisi5show']);

Route::get('/hspdivisi6', [SatuanhargamaterialController::class, 'hspdivisi6']);
Route::get('/satuanhargadivisi6/{id}', [SatuanhargamaterialController::class, 'hspdivisi6show']);

Route::get('/hspdivisi7', [SatuanhargamaterialController::class, 'hspdivisi7']);
Route::get('/satuanhargadivisi7/{id}', [SatuanhargamaterialController::class, 'hspdivisi7show']);

Route::get('/hspdivisi8', [SatuanhargamaterialController::class, 'hspdivisi8']);
Route::get('/satuanhargadivisi8/{id}', [SatuanhargamaterialController::class, 'hspdivisi8show']);

Route::get('/hspdivisi9', [SatuanhargamaterialController::class, 'hspdivisi9']);
Route::get('/satuanhargadivisi9/{id}', [SatuanhargamaterialController::class, 'hspdivisi9show']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU SHST KAB BLORA  -----------------------//
// ==========================================================================================================================================
Route::get('/shstblora', [ShstbloraController::class, 'index']);
// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 08 RANTAI PASOK   -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU 1 RANTAI PASOK ASURANSI KONSTRUKSI  -----------------------------------------------------
// BELUM DIBUAT

// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 RANTAI PASOK MATERIAL BAHAN BANGUNAN  -----------------------------------------------------
Route::get('/rantaipasokmaterial', [RantaipasokbloraController::class, 'index']);
Route::get('/rantaipasokmaterial/{distributor}', [RantaipasokbloraController::class, 'rantaipasokblorashow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 RANTAI PASOK PERALATAN  -----------------------------------------------------
Route::get('/peralatankonstruksi', [RantaipasokbloraController::class, 'peralatankonstruksi']);
Route::get('/peralatankonstruksi/{namabadanusaha}', [RantaipasokbloraController::class, 'peralatankonstruksishow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 4 RANTAI PASOK TOKO BANGUNAN   -----------------------------------------------------
Route::get('/tokobangunanblora', [TokobangunanbloraController::class, 'index']);
Route::get('/tokobangunanblora/{kecamatanblora}', [TokobangunanbloraController::class, 'tokobangunanblorashow']);
Route::get('/tokobangunanbloralist/{namatokobangunan}', [TokobangunanbloraController::class, 'tokobangunanbloralistdetails']);
// ___________________________________________________________________________________________________________________________________

// ================================================================================================================================================
// ================================================================================================================================================
// BACKEND MENU APLIKASI SIPJAKI DINAS PUPR PEMERINTAH KABUPATEN BLORA PROVINSI JAWA TENGAH
// ================================================================================================================================================

Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth');

// ======================================= BERANDA WEB -------------------------------------------------------------
// ---------------------- MENU 2 BERANDA  -----------------------------------------------------
// ---------------------- MENU 1 HEADER -----------------------------------------------------
Route::get('/header', [AdminDashboardController::class, 'header'])->middleware('auth');
Route::get('/header/update', [AdminDashboardController::class, 'headerupdate'])->middleware('auth');
// Route::get('/header/delete/{judul}', [AdminDashboardController::class, 'headerdelete'])->middleware('auth');
Route::delete('/header/delete/{judul}', [AdminDashboardController::class, 'headerdelete'])->middleware('auth');

// ___________________________________________________________________________________________________________________________________



// ======================================= KELEMBAGAAN BACKEND -------------------------------------------------------------
// ---------------------- MENU 1 STRUKTUR ORGANISASI  -----------------------------------------------------
Route::get('/bestrukturdinas', [StrukturController::class, 'strukturkedinasan'])->middleware('auth');
// Route::get('/header/update', [AdminDashboardController::class, 'headerupdate'])->middleware('auth');
// Route::delete('/header/delete/{judul}', [AdminDashboardController::class, 'headerdelete'])->middleware('auth');

// ---------------------- MENU 2 PROFIL JASA KONSTRUKSI MAS JAKI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beprofiljakon', [StrukturController::class, 'beprofiljakon'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/beinformasiopd', [StrukturController::class, 'beinformasiopd'])->middleware('auth');
Route::get('/beinformasiopd/update/{judul}', [StrukturController::class, 'beinformasiopdupdate'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/beinfoopd', [StrukturController::class, 'beinfoopd'])->middleware('auth');
Route::get('/beinfoopd/update/{judul}', [StrukturController::class, 'beinfoopdupdate'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/bekepaladinas', [StrukturController::class, 'bekepaladinas'])->middleware('auth');
Route::get('/bekepaladinas/update/{namalengkap}', [StrukturController::class, 'bekepaladinasupdate'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/bekabid', [StrukturController::class, 'bekabidbaru'])->middleware('auth');
Route::get('/bekabid/update/{namalengkap}', [StrukturController::class, 'bekabidshow'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/besubbid', [StrukturController::class, 'besubbid'])->middleware('auth');
Route::get('/besubbid/update/{namalengkap}', [StrukturController::class, 'besubbidupdate'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/beinformasi', [StrukturController::class, 'beinformasi'])->middleware('auth');
Route::get('/beinformasi/update/{id}', [StrukturController::class, 'beinformasiupdate'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/besipjaki', [StrukturController::class, 'besipjaki'])->middleware('auth');
Route::get('/besipjaki/update/{id}', [StrukturController::class, 'besipjakiupdate'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/bejabatan', [StrukturController::class, 'bejabatan'])->middleware('auth');
Route::get('/bejabatan/update/{id}', [StrukturController::class, 'bejabatanupdate'])->middleware('auth');
Route::delete('/bejabatan/delete/{namalengkap}', [StrukturController::class, 'bejabatandelete'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 TUPOKSI PROGRAM MAS JAKI -----------------------------------------------------
Route::get('/betupoksi', [StrukturController::class, 'betupoksi'])->middleware('auth');
Route::get('/betupoksi/update/{id}', [StrukturController::class, 'betupoksiupdate'])->middleware('auth');


// ======================================= BERITA JAKON BACKEND -------------------------------------------------------------
// ---------------------- MENU 1 DAFTAR BERITA MAS JAKI JAKON   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beberitajakon', [BeritajakonController::class, 'beberitajakon'])->middleware('auth');
// Route::get('/beberitajakon/create', [BeritajakonController::class, 'beberitajakoncreate'])->middleware('auth');
// Route::get('/beberitajakon/update/{judulberita}', [BeritajakonController::class, 'beberitajakonupdate'])->middleware('auth');
Route::delete('/beberitajakon/delete/{judulberita}', [BeritajakonController::class, 'beberitajakondelete'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 ARTIKEL JAKON MAS JAKI BLORA   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beartikeljakon', [BeritajakonController::class, 'beartikeljakon'])->middleware('auth');
// Route::get('/beberitajakon/create', [BeritajakonController::class, 'beberitajakoncreate'])->middleware('auth');
// Route::get('/beberitajakon/update/{judulberita}', [BeritajakonController::class, 'beberitajakonupdate'])->middleware('auth');
Route::delete('/beartikeljakon/delete/{judulberita}', [BeritajakonController::class, 'beartikeljakondelete'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________


// ======================================= DATA JAKON BACKEND -------------------------------------------------------------
// ---------------------- MENU 01 BUJK KONSTRUKSI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/bebujkjakon', [BujkkontraktorController::class, 'bebujkjakon'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 1 BUJK KONSTRUKSI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/bebujkkonstruksi', [BujkkontraktorController::class, 'bebujkkonstruksi'])->middleware('auth');
Route::get('/bebujkkonstruksi/show/{namalengkap}', [BujkkontraktorController::class, 'bebujkkonstruksishow'])->middleware('auth');
Route::get('/bebujkkonstruksi/showsubklasifikasi/{namalengkap}', [BujkkontraktorController::class, 'bebujkkonstruksiklasifikasi'])->middleware('auth');

Route::delete('/bebujkkonstruksi/delete/{namalengkap}', [BujkkontraktorController::class, 'bebujkkonstruksidelete'])->middleware('auth');
Route::delete('/bebujkkonstruksiklasifikasi/delete/{id}', [BujkkontraktorController::class, 'bebujkkonstruksiklasifikasidelete'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 BUJK KONSULTASI KONSTRUKSI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/bebujkkonsultan', [BujkkonsultanController::class, 'bebujkkonsultan'])->middleware('auth');
Route::get('/bebujkkonsultan/show/{namalengkap}', [BujkkonsultanController::class, 'bebujkkonsultanshow'])->middleware('auth');
Route::get('/bebujkkonsultan/showsubklasifikasi/{namalengkap}', [BujkkonsultanController::class, 'bebujkkonsultanshowklasifikasi'])->middleware('auth');

Route::delete('/bebujkkonsultan/delete/{namalengkap}', [BujkkonsultanController::class, 'bebujkkonsultanshowdelete'])->middleware('auth');
Route::delete('/bebujkkonsultanklasifikasi/delete/{id}', [BujkkonsultanController::class, 'bebujkkonsultanshowklasifikasidelete'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 DATA ASOSIASI JASA KONSTRUKSI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beasosiasi', [BujkkontraktorController::class, 'beasosiasi'])->middleware('auth');
Route::get('/beasosiasi/show/{namaasosiasi}', [BujkkontraktorController::class, 'beasosiasishow'])->middleware('auth');
Route::delete('/beasosiasi/delete/{id}', [BujkkontraktorController::class, 'beasosiasidelete'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________


// ---------------------- MENU 02 DATA SKK TENAGA KERJA DISELENGGARAKAN DPUPR KABUPATEN BLORA -----------------------------------------------------
// ________________________________________________________________________________________________________________
// ---------------------- MENU 1 DATA SKK TENAGA KERJA DISELENGGARAKAN DPUPR KABUPATEN BLORA -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beskkdpupr', [SkktenagakerjabloraController::class, 'beskkdpupr'])->middleware('auth');
Route::get('/beskkdpupr/show/{nama}', [SkktenagakerjabloraController::class, 'beskkdpuprshow'])->middleware('auth');
Route::delete('/beskkdpupr/delete/{nama}', [SkktenagakerjabloraController::class, 'beskkdpuprdelete'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________

// ________________________________________________________________________________________________________________
// ---------------------- MENU 2 DATA SEMUA SKK TENAGA KERJA KABUPATEN BLORA -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beskkallblora', [SkktenagakerjabloraController::class, 'beskkall'])->middleware('auth');
Route::get('/beskkallblora/show/{nama}', [SkktenagakerjabloraController::class, 'beskkallshow'])->middleware('auth');
Route::delete('/beskkallblora/delete/{nama}', [SkktenagakerjabloraController::class, 'beskkalldelete'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________

// ________________________________________________________________________________________________________________
// ---------------------- MENU 3 PROFIL PAKET PEKERJAAN -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/bepaketpekerjaan', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaan'])->middleware('auth');
Route::get('/bepaketpekerjaan/show/{namapekerjaan}', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaanshow'])->middleware('auth');
Route::delete('/bepaketpekerjaan/delete/{namapekerjaan}', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaandelete'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________


// ======================================= MENU AGENDA PEMBINAAN  -------------------------------------------------------------
// ---------------------- MENU 01 AGENDA PELATIHAN   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beagendapelatihan', [PembinaanController::class, 'beagendapelatihan'])->middleware('auth');
Route::get('/beagendapelatihan/show/{namakegiatan}', [PaketpekerjaanmasjakiController::class, 'beagendapelatihanshow'])->middleware('auth');
Route::delete('/beagendapelatihan/delete/{namakegiatan}', [PaketpekerjaanmasjakiController::class, 'beagendapelatihandelete'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________












// ------------------- BACKEND BAGIAN HIMBAUAN DINAS ---------------------------

// -------- BAGIAN 01 BACKEND PROFIL ---------------------------------
Route::get('/struktur', [StrukturController::class, 'index'])->middleware('auth');
Route::get('/struktur/update/{judul}', [StrukturController::class, 'updatestruktur'])->middleware('auth')->name('update.struktur');
Route::post('/struktur/{judul}', [StrukturController::class, 'createupdatestruktur'])->middleware('auth')->name('updatestore.struktur');

Route::get('/renstra', [StrukturController::class, 'renstra'])->middleware('auth');
Route::get('/renstra/update/{judul}', [StrukturController::class, 'updaterenstra'])->middleware('auth')->name('update.renstra');
Route::post('/renstra/{judul}', [StrukturController::class, 'createupdaterenstra'])->middleware('auth')->name('updatestore.renstra');

Route::get('/tupoksi', [StrukturController::class, 'tupoksi'])->middleware('auth');
Route::get('/tupoksi/update/{judul}', [StrukturController::class, 'updatetupoksi'])->middleware('auth')->name('update.tupoksi');
Route::post('/tupoksi/{judul}', [StrukturController::class, 'createupdatetupoksi'])->middleware('auth')->name('updatestore.tupoksi');

// ----------------------------------- STANDAR BIAYA UMUM
Route::get('/standarbiayaumum', [StrukturController::class, 'standarbiayaumum'])->middleware('auth');
Route::get('/standarbiayaumum/{judul}', [StrukturController::class, 'standarbiayaumumshowbyjudul'])->middleware('auth');
Route::get('/standarbiayaumum/update/{judul}', [StrukturController::class, 'updatestandarbiayaumum'])->middleware('auth')->name('update.standarbiayaumum');
Route::post('/standarbiayaumum/{judul}', [StrukturController::class, 'createupdatestandarbiayaumum'])->middleware('auth')->name('updatestore.standarbiayaumum');
Route::get('/standarbiayaumumcreate', [StrukturController::class, 'createstandarbiayaumum'])->middleware('auth');
Route::post('/standarbiayaumumstore', [StrukturController::class, 'createstorestandarbiayaumum'])->middleware('auth')->name('create.standarbiayaumum');

Route::post('/standarbiayaumumdelete/{judul}', [StrukturController::class, 'deletestandarbiayaumum'])
->middleware('auth')
->name('delete.standarbiayaumum');


// SBU LAMPIRAN 1
Route::get('/sbulampiran1', [StrukturController::class, 'sbulampiran1'])->middleware('auth');
Route::get('/sbulampiran1/{judul}', [StrukturController::class, 'sbulampiran1showbyjudul'])->middleware('auth');

// SBU LAMPIRAN 2
Route::get('/sbulampiran2', [StrukturController::class, 'sbulampiran2'])->middleware('auth');
Route::get('/sbulampiran2/{judul}', [StrukturController::class, 'sbulampiran2showbyjudul'])->middleware('auth');

// SBU LAMPIRAN 3
Route::get('/sbulampiran3', [StrukturController::class, 'sbulampiran3'])->middleware('auth');
Route::get('/sbulampiran3/{judul}', [StrukturController::class, 'sbulampiran3showbyjudul'])->middleware('auth');


// -------- BAGIAN 14 BACKEND PERATURAN UNDANGUNDANG ---------------------------------
Route::get('/peruud', [PeraturanController::class, 'undangundang'])->middleware('auth')->name('peruud.index');
Route::get('/peruud/{judul}', [PeraturanController::class, 'updateundangundang'])->middleware('auth')->name('peruud.show');
Route::post('/peruud/{judul}', [PeraturanController::class, 'createupdateundangundang'])->middleware('auth')->name('peruud.update');


Route::get('/perpemerintah', [PeraturanController ::class, 'pemerintah'])->middleware('auth');
Route::get('/perpemerintah/{judul}', [PeraturanController::class, 'updateperpemerintah'])->middleware('auth')->name('peruud.showperpemerintah');
Route::post('/perpemerintah/{judul}', [PeraturanController::class, 'createupdateperpemerintah'])->middleware('auth')->name('peruud.updateperpemerintah');


Route::get('/perpresiden', [PeraturanController::class, 'presiden'])->middleware('auth');
Route::get('/perpresiden/{judul}', [PeraturanController::class, 'updateperpresiden'])->middleware('auth')->name('peruud.showperpresiden');
Route::post('/perpresiden/{judul}', [PeraturanController::class, 'createupdateperpresiden'])->middleware('auth')->name('peruud.updateperpresiden');

// PERATURAN MENTERI
Route::get('/permenteri', [PeraturanController::class, 'menteri'])->middleware('auth');
Route::get('/permenteri/{judul}', [PeraturanController::class, 'menterishowByJudul'])->middleware('auth');
Route::get('/permenteri/update/{judul}', [PeraturanController::class, 'updateshowpermenteri'])->middleware('auth')->name('peruud.showpermenteri');
Route::post('/permenteri/{judul}', [PeraturanController::class, 'createupdatepermenteri'])->middleware('auth')->name('peruud.updatepermenteri');
// CREATE DATA PER MENTERI
Route::get('/permentericreate', [PeraturanController::class, 'createpermenteri'])->middleware('auth');
Route::post('/permenteristore', [PeraturanController::class, 'createstorepermenteri'])->middleware('auth')->name('peruud.createpermenteri');
Route::post('/permenteridelete/{judul}', [PeraturanController::class, 'deleterpermenteri'])
->middleware('auth')
->name('peruud.deletepermenteri');

// SURAT KEPUTUSAN MENTERI
Route::get('/skmenteri', [PeraturanController::class, 'skmenteri'])->middleware('auth');
Route::get('/skmenteri/{judul}', [PeraturanController::class, 'skmenterishowByJudul'])->middleware('auth');
Route::get('/skmenteri/update/{judul}', [PeraturanController::class, 'updateshowskmenteri'])->middleware('auth')->name('peruud.showskmenteri');
Route::post('/skmenteri/{judul}', [PeraturanController::class, 'createupdateskmenteri'])->middleware('auth')->name('peruud.updateskmenteri');
Route::get('/skmentericreate', [PeraturanController::class, 'createskmenteri'])->middleware('auth');
Route::post('/skmenteristore', [PeraturanController::class, 'createstoreskmenteri'])->middleware('auth')->name('peruud.createskmenteri');
Route::post('/skmenteridelete/{judul}', [PeraturanController::class, 'deleteskmenteri'])
->middleware('auth')
->name('peruud.deleteskmenteri');

// SURAT EDARAN MENTERI
Route::get('/suratedaran', [PeraturanController::class, 'suratedaran'])->middleware('auth');
Route::get('/suratedaran/{judul}', [PeraturanController::class, 'suratedaranshowByJudul'])->middleware('auth');
Route::get('/suratedaran/update/{judul}', [PeraturanController::class, 'updateshowsuratedaran'])->middleware('auth')->name('peruud.showsuratedaran');
Route::post('/suratedaran/{judul}', [PeraturanController::class, 'createupdatesuratedaran'])->middleware('auth')->name('peruud.updatesuratedaran');
Route::get('/suratedarancreate', [PeraturanController::class, 'createsuratedaran'])->middleware('auth');
Route::post('/suratedaranstore', [PeraturanController::class, 'createstoresuratedaran'])->middleware('auth')->name('peruud.createsuratedaran');
Route::post('/suratedarandelete/{judul}', [PeraturanController::class, 'deletesuratedaran'])
->middleware('auth')
->name('peruud.deletesuratedaran');

Route::get('/referensi', [PeraturanController::class, 'referensi'])->middleware('auth')->name('peruud.referensi');
Route::get('/referensi/{judul}', [PeraturanController::class, 'updatereferensi'])->middleware('auth')->name('peruud.showreferensi');
Route::post('/referensi/{judul}', [PeraturanController::class, 'createupdatereferensi'])->middleware('auth')->name('peruud.updatereferensi');

// SURAT PERATURAN DAERAH
Route::get('/perdaerah', [PeraturanController::class, 'suratperdaerah'])->middleware('auth');
Route::get('/perdaerah/{judul}', [PeraturanController::class, 'suratperdaerahshowByJudul'])->middleware('auth');
Route::get('/perdaerah/update/{judul}', [PeraturanController::class, 'updateshowperdaerah'])->middleware('auth')->name('peruud.showperdaerah');
Route::post('/perdaerah/{judul}', [PeraturanController::class, 'createupdateperdaerah'])->middleware('auth')->name('peruud.updateperdaerah');
Route::get('/perdaerahcreate', [PeraturanController::class, 'createperdaerah'])->middleware('auth');
Route::post('/perdaerahstore', [PeraturanController::class, 'createstoreperdaerah'])->middleware('auth')->name('peruud.createperdaerah');
Route::post('/perdaerahdelete/{judul}', [PeraturanController::class, 'deleteperdaerah'])
->middleware('auth')
->name('peruud.deleteperdaerah');

// SURAT PERATURAN GUBERNUR
Route::get('/pergubernur', [PeraturanController::class, 'suratpergubernur'])->middleware('auth');
Route::get('/pergubernur/{judul}', [PeraturanController::class, 'pergubernurshowByJudul'])->middleware('auth');
Route::get('/pergubernur/update/{judul}', [PeraturanController::class, 'updateshowpergubernur'])->middleware('auth')->name('peruud.showpergubernur');
Route::post('/pergubernur/{judul}', [PeraturanController::class, 'createupdatepergubernur'])->middleware('auth')->name('peruud.updatepergubernur');
Route::get('/pergubernurcreate', [PeraturanController::class, 'createpergubernur'])->middleware('auth');
Route::post('/pergubernurstore', [PeraturanController::class, 'createstorepergubernur'])->middleware('auth')->name('peruud.createpergubernur');
Route::post('/pergubernurdelete/{judul}', [PeraturanController::class, 'deletepergubernur'])
->middleware('auth')
->name('peruud.deletepergubernur');


// SURAT PERATURAN GUBERNUR
Route::get('/perwalikotabupati', [PeraturanController::class, 'suratperwalikotabupati'])->middleware('auth');
Route::get('/perwalikotabupati/{judul}', [PeraturanController::class, 'perwalikotabupatishowByJudul'])->middleware('auth');
Route::get('/perwalikotabupati/update/{judul}', [PeraturanController::class, 'updateshowperwalikotabupati'])->middleware('auth')->name('peruud.showperwalikotabupati');
Route::post('/perwalikotabupati/{judul}', [PeraturanController::class, 'createupdateperwalikotabupati'])->middleware('auth')->name('peruud.updateperwalikotabupati');
Route::get('/perwalikotabupaticreate', [PeraturanController::class, 'createperwalikotabupati'])->middleware('auth');
Route::post('/perwalikotabupatistore', [PeraturanController::class, 'createstoreperwalikotabupati'])->middleware('auth')->name('peruud.createperwalikotabupati');
Route::post('/perwalikotabupatidelete/{judul}', [PeraturanController::class, 'deleteperwalikotabupati'])
->middleware('auth')
->name('peruud.deleteperwalikotabupati');

// SURAT KEPUTUSAN TENTANG JASA KONSTRUKSI
Route::get('/keputusan', [PeraturanController::class, 'keputusan'])->middleware('auth');
Route::get('/keputusanbaru/{judul}', [PeraturanController::class, 'keputusanshowbyjudul'])->middleware('auth');
Route::get('/keputusan/update/{judul}', [PeraturanController::class, 'updateshowkeputusan'])->middleware('auth')->name('peruud.showkeputusan');
Route::post('/keputusan/{judul}', [PeraturanController::class, 'createupdatekeputusan'])->middleware('auth')->name('peruud.updatekeputusan');
Route::get('/keputusancreate', [PeraturanController::class, 'createkeputusan'])->middleware('auth');
Route::post('/keputusanstore', [PeraturanController::class, 'createstorekeputusan'])->middleware('auth')->name('peruud.createkeputusan');
Route::post('/keputusandelete/{judul}', [PeraturanController::class, 'deletekeputusan'])
->middleware('auth')
->name('peruud.deletekeputusan');

// ====================================== ====================================== ====================================== ======================================
// BAGIAN 15 ADMINISTRATOR MENU BACKEND
// ====================================== ====================================== ====================================== ======================================
// SURAT KEPUTUSAN TENTANG JASA KONSTRUKSI
Route::get('/administrator', [AdministratorController::class, 'index'])->middleware('auth');
Route::get('/administrator/{name}', [AdministratorController::class, 'administratorshowbyname'])->middleware('auth');
Route::get('/administrator/update/{name}', [AdministratorController::class, 'updateadministrator'])->middleware('auth')->name('updateshow.administrator');
Route::put('/administrator/{name}', [AdministratorController::class, 'createupdateadministrator'])
->middleware('auth')
->name('update.dataadministrator');

Route::post('/administrator/{name}', [AdministratorController::class, 'deleteadministrator'])
->middleware('auth')
->name('administrator.deleteadministrator');


// KATEGORI ADMIN
Route::get('/kategoriadmin', [AdministratorController::class, 'kategoriadmin'])->middleware('auth');
Route::get('/kategoriadmincreate', [AdministratorController::class, 'createkategoriadmin'])->middleware('auth');
Route::post('/kategoriadminstore', [AdministratorController::class, 'createstorekategoriadmin'])->middleware('auth')->name('create.kategoriadmin');

Route::post('/kategoriadmin/{id}', [AdministratorController::class, 'deletekategoriadmin'])
->middleware('auth')
->name('delete.deletekategoriadmin');

// -------------------------- ROUTE UNTUK SETTINGS DATA MENU JASA KONSTRUKSI ============================================
Route::get('/settingsalldata', [SettingmenuController::class, 'alldata'])->middleware('auth');

// 01 SETTINGS MENU STATUS ADMIN
Route::get('/settingstatusadmin', [SettingmenuController::class, 'statusadmin'])->middleware('auth');
Route::get('/settingstatusadmincreate', [SettingmenuController::class, 'createstatusadmin'])->middleware('auth');
Route::post('/settingstatusadminstore', [SettingmenuController::class, 'createstorestatusadmin'])->middleware('auth')->name('create.statusadminnewbaru');
Route::post('/settingstatusadmin/{id}', [SettingmenuController::class, 'deletestatusadmin'])
->middleware('auth')
->name('delete.statusadmin');


Route::get('/masuk', [LoginController::class, 'loginmasuk'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


require __DIR__.'/auth.php';



