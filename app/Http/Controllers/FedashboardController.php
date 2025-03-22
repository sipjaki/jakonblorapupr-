<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\berita; // Pastikan namespace model sesuai dengan struktur direktori
use App\Models\beritaagenda;
use App\Models\beritajakon;
use App\Models\himbauandinas;
use App\Models\kegiatanjaskon;
use App\Models\laporankegiatan;
use App\Models\layanankami;
use App\Models\pengawasanlokasi;
use App\Models\artikeljakonmasjaki;
use App\Models\headerberanda;
use App\Models\qapertanyaan;
use App\Models\qasebagai;
use App\Models\qa;
use App\Models\sertifikasiagenda;
use App\Models\skktenagakerja; // Pastikan namespace model sesuai dengan struktur direktori

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class FedashboardController extends Controller
{
    public function index()
    {
        $data = beritajakon::orderBy('created_at', 'desc')->get(); //
        $dataartikel = artikeljakonmasjaki::orderBy('created_at', 'desc')->get(); //
        $dataheaderberanda = headerberanda::orderBy('created_at', 'desc')->get(); //


        $user = Auth::user();


        // return view('frontend.00_full.index', [
        return view('404', [
        // return view('frontend.00_approve.00_utama.index', [
            'title' => 'Mas Jaki DPUPR Blora | Sistem Informasi Pembina Jasa Konstruksi ',
            'data' => $data, // Mengirimkan data paginasi ke view
            'dataartikel' => $dataartikel, // Mengirimkan data paginasi ke view
            'dataheaderberanda' => $dataheaderberanda, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
            // 'databerita' => $databerita, // Mengirimkan data paginasi ke view
        ]);
    }

    // public function createstorepertanyaanpublik(Request $request)
    //         {
    //             // Validasi input
    //             $request->validate([
    //                 'qasebagai_id' => 'required|integer|exists:qasebagai,id',
    //                 'qapertanyaan_id' => 'required|integer|exists:qapertanyaan,id',
    //                 'nama_lengkap' => 'required|string|max:255',
    //                 'email' => 'required|email|max:255',
    //                 'telepon' => 'required|string|max:20',
    //             ]);

    //             // Buat entri baru di database
    //             qa::create([
    //                 'qasebagai_id' => $request->input('qasebagai_id'),
    //                 'qapertanyaan_id' => $request->input('qapertanyaan_id'),
    //                 'nama_lengkap' => $request->input('nama_lengkap'),
    //                 'email' => $request->input('email'),
    //                 'telepon' => $request->input('telepon'),
    //             ]);

    //             // Menyimpan pesan flash untuk umpan balik
    //             session()->flash('pertanyaan', 'Pertanyaan Anda Berhasil Dikirim !');

    //             // Redirect ke halaman yang sesuai
    //             return redirect('/');
    //         }



    public function portalberitashowByJudul($judul)
    {


        $data_berita = berita::all(); //
        $data = berita::where('judul', $judul)->firstOrFail();

        $databeritaagenda = beritaagenda::orderBy('created_at', 'desc')->get(); //

        $user = Auth::user();

        return view('frontend.02_berita.01_portalberita.showindex', [
            'data' => $data,
            'data_berita' => $data_berita,
            'dataagenda' => $databeritaagenda,
            'user' => $user,
            'title' => 'Portal Berita Sipjaki KBB',
        ]);
    }

    public function navbarberita()
    {
        $data= berita::orderBy('created_at', 'desc')->get();; //

        $user = Auth::user();


        return view('frontend.02_berita.01_portalberita.navbarberita', [
            'title' => 'Berita Jasa Konstruksi Kabupaten Blora',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }


    public function kegiatansertifikasi()
    {
        $data = berita::orderBy('created_at', 'desc')->get(); //
        $data_kegiatanjaskon = kegiatanjaskon::orderBy('created_at', 'desc')->get(); //


        $user = Auth::user();

        return view('frontend.02_berita.02_sertifikasi.index', [
            'title' => 'Kegiatan Sertifikasi oleh Pemerintah Kabupaten Blora',
            'data' => $data, // Mengirimkan data paginasi ke view
            'data_jaskon' => $data_kegiatanjaskon, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }


    public function kegiatansertifikasishowByJudul($judul_kegiatan)
    {
        $data_berita = berita::first(); //

        $kegiatanjaskon = kegiatanjaskon::where('judul_kegiatan', $judul_kegiatan)->first();

        if (!$kegiatanjaskon) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        // $datalaporankegiatan = laporankegiatan::where('kegiatanjaskon_id', $kegiatanjaskon->id)->paginate(10);

        $user = Auth::user();

        return view('frontend.02_berita.02_sertifikasi.show', [
            'data' => $kegiatanjaskon,
            'data_berita' => $data_berita,
            // 'data_laporankegiatan' => $data_laporankegiatan,
            'user' => $user,
                'title' => 'Kegiatan Sertifikasi',
        ]);
    }

    public function detailskegiatanshowByJudul($jabatan)
    {
        $data_berita = berita::first(); //
        $user = Auth::user();

        return view('frontend.02_berita.02_sertifikasi.showdetails', [
            // 'data_kegiatanjaskon' => $data_kegiatanjaskon,
            'data_berita' => $data_berita,
            // 'data_layanankami' => $data_layanankami,
            'user' => $user,
                'title' => 'Kegiatan Sertifikasi Para Pekerja',
        ]);
    }


    // -================================================================================

    public function feagendasertifikasipekerja()
    {
        $data = beritaagenda::paginate(8);
        $datapengawasanlokasi = pengawasanlokasi::all();

        $user = Auth::user();

        return view('frontend.02_berita.03_agendasertifikasi.index', [
            'title' => 'Agenda Sertifikasi Pekerja Konstruksi Pemerintah Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datapengawasanlokasi' => $datapengawasanlokasi, // Mengirimkan data paginasi ke view
        ]);
    }





}

