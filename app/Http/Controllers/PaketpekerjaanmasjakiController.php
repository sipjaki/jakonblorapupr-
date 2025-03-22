<?php

namespace App\Http\Controllers;

use App\Models\paketpekerjaanmasjaki;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaketpekerjaanmasjakiController extends Controller
{
    //

    public function paketpekerjaanmasjaki(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = paketpekerjaanmasjaki::query();

        if ($search) {
            $query->where('namapekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('cvptpenyedia', 'LIKE', "%{$search}%")
                  ->orWhere('dinas', 'LIKE', "%{$search}%")
                  ->orWhereHas('profiljenispekerjaan', function ($q) use ($search) {
                      $q->where('jenispekerjaan', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })
                  ->orWhereHas('tahunpilihan', function ($q) use ($search) {
                      $q->where('tahunpilihan', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })
                  ->orWhereHas('sumberdana', function ($q) use ($search) {
                      $q->where('sumberdana', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  });
        }


        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.00_paketpekerjaan.partials.table', compact('data'))->render()
            ]);
        }


        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.00_paketpekerjaan.index', [
            'title' => 'Profil Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

    public function paketpekerjaanshow($namapekerjaan)
    {
        // Pastikan model dan nama tabel sudah benar
        $datapaketpekerjaan = paketpekerjaanmasjaki::where('namapekerjaan', $namapekerjaan)->first();
        // $datasub = prosespaket::all();
        // if (!$datapaketpekerjaan) {
        //     // Jika data tidak ditemukan, arahkan kembali dengan pesan error
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = prosespaket::where('prosespaket_id', $datapaketpekerjaan->id)->paginate(5);

        // Ambil data user saat ini
        $user = Auth::user();

        // Kirim variabel ke view
        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.00_paketpekerjaan.show', [
            'title' => 'Profil Paket Pekerjaan Konstruksi & Konsultasi Kabupaten Blora',
            'data' => $datapaketpekerjaan,
            'user' => $user,
            // 'datasub' => $datasub,
            // 'datasub' => $subdata,
            // 'start' => $start,  // Pastikan start diteruskan jika dibutuhkan di view
        ]);
    }


    // MENU BACKEND PROFIL PAKET PEKERJAAN


    public function bepaketpekerjaan(Request $request)
    {
            $perPage = $request->input('perPage', 15);
            $search = $request->input('search');

            $query = paketpekerjaanmasjaki::query();

            if ($search) {
                $query->where('namapekerjaan', 'LIKE', "%{$search}%")
                    ->orWhere('cvptpenyedia', 'LIKE', "%{$search}%")
                    ->orWhere('nib', 'LIKE', "%{$search}%")
                    ->orWhere('nilaikontrak', 'LIKE', "%{$search}%")
                    ->orWhere('jeniskontrak', 'LIKE', "%{$search}%")
                    ->orWhere('karakteristikkontrak', 'LIKE', "%{$search}%")
                    ->orWhere('bulanmulai', 'LIKE', "%{$search}%")
                    ->orWhere('bulanselesai', 'LIKE', "%{$search}%")
                    ->orWhere('dinas', 'LIKE', "%{$search}%")
        // -------------------------------------------------------------------------------
                    ->orWhereHas('profiljenispekerjaan', function ($q) use ($search) {
                        $q->where('jenispekerjaan', 'LIKE', "%{$search}%");
                    })

                    ->orWhereHas('paketstatuspekerjaan', function ($q) use ($search) {
                        $q->where('paketstatuspekerjaan', 'LIKE', "%{$search}%");
                    })

                    ->orWhereHas('sumberdana', function ($q) use ($search) {
                        $q->where('sumberdana', 'LIKE', "%{$search}%");
                    })

                    ->orWhereHas('tahunpilihan', function ($q) use ($search) {
                        $q->where('tahunpilihan', 'LIKE', "%{$search}%");
                    });

            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('backend.04_datajakon.06_profilpaketpekerjaan.partials.table', compact('data'))->render()
                ]);
            }

            return view('backend.04_datajakon.06_profilpaketpekerjaan.index', [
                'title' => 'Profil Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
                'data' => $data,
                'perPage' => $perPage,
                'search' => $search
            ]);
    }

    // TKK DPUPR BLORA SHOW

    public function bepaketpekerjaanshow($namapekerjaan)
    {
            $datapaketpekerjaan = paketpekerjaanmasjaki::where('namapekerjaan', $namapekerjaan)->first();
        // Ambil data user saat ini
            $user = Auth::user();

        return view('backend.04_datajakon.06_profilpaketpekerjaan.show', [
            'title' => 'Data Details Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
            'data' => $datapaketpekerjaan,
        ]);
    }


        public function bepaketpekerjaandelete($namapekerjaan)
        {
        // Cari item berdasarkan judul
            $entry = paketpekerjaanmasjaki::where('namapekerjaan', $namapekerjaan)->first();

            if ($entry) {
            // Jika ada file header yang terdaftar, hapus dari storage
            // if (Storage::disk('public')->exists($entry->header)) {
                //     Storage::disk('public')->delete($entry->header);
            // }

            // Hapus entri dari database
            $entry->delete();

            // Redirect atau memberi respons sesuai kebutuhan
            return redirect('/bepaketpekerjaan')->with('delete', 'Data Berhasil Di Hapus !');

            }

        return redirect()->back()->with('error', 'Item not found');
        }




}
