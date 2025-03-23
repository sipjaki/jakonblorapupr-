<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\agendapelatihan;
use App\Models\jenjang;
use App\Models\kategoripelatihan;
use App\Models\pembinaan;
use App\Models\pesertapelatihan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class PembinaanController extends Controller
{
    //
    // public function index()
    // {
    //     $data = agendapelatihan::paginate(15);
    //     $user = Auth::user();
    //     $datasub = jenjang::all();
    //     $datasubkategori = kategoripelatihan::all();

    //     return view('frontend.04_pembinaan.01_agendapembinaan.index', [
    //         'title' => 'Agenda Pembinaan',
    //         'user' => $user,
    //         'data' => $data,
    //         'datasub' => $datasub,
    //         'datasubkategori' => $datasubkategori,
    //     ]);
    // }

    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = agendapelatihan::query();

        if ($search) {
            $query->where('namakegiatan', 'LIKE', "%{$search}%")
                  ->orWhere('penyelenggara', 'LIKE', "%{$search}%")
                  ->orWhere('lokasi', 'LIKE', "%{$search}%")
                  ->orWhere('keterangan', 'LIKE', "%{$search}%")
                  ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                      $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
                  });

        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.04_pembinaan.01_agendapembinaan.partials.table', compact('data'))->render()
            ]);
        }

        $user = Auth::user();
        $datasub = jenjang::all();
        $datasubkategori = kategoripelatihan::all();


        return view('frontend.04_pembinaan.01_agendapembinaan.index', [
            'title' => 'Agenda Pelatihan Konstruksi Kab Blora',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search,
            'datasub' => $datasub,
            'datasubkategori' => $datasubkategori,
            'user' => $user
        ]);
    }



    public function namakegiatandaftar($namakegiatan)
    {
        $dataagendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

        // if (!$databujkkontraktor) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(50);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.04_pembinaan.01_agendapembinaan.show', [
        'title' => 'Agenda Pelatihan',
        'data' => $dataagendapelatihan,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }


// DAFTAR PESERTA PELATIHAN AGENDA PELATIHAN WORKSHOP DAN LAINLAIN

    public function daftarpesertapelatihan(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = agendapelatihan::query();

        if ($search) {
            $query->where('namakegiatan', 'LIKE', "%{$search}%")
                  ->orWhere('keterangan', 'LIKE', "%{$search}%")
                  ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                      $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
                  });

        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.04_pembinaan.01_agendapembinaan.partials.table', compact('data'))->render()
            ]);
        }

        $user = Auth::user();

        return view('frontend.04_pembinaan.01_agendapembinaan.daftaragenda', [
            'title' => 'Daftar Agenda Pelatihan Jakon Blora',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search,
            'user' => $user
        ]);
    }

    public function daftarpesertapelatihanshow(Request $request, $namakegiatan)
    {
        $perPage = $request->input('perPage', 50);
        $search = $request->input('search');

        $query = pesertapelatihan::query();

        if ($search) {
            $query->where('jeniskelamin', 'LIKE', "%{$search}%")
                  ->orWhere('instansi', 'LIKE', "%{$search}%")
                  ->orWhereHas('user', function ($q) use ($search) {
                      $q->where('user', 'LIKE', "%{$search}%");
                  });

        }

        $datapesertapelatihan = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.04_pembinaan.01_agendapembinaan.partials.table', compact('data'))->render()
            ]);
        }

        $agendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

        // Jika asosiasi tidak ditemukan, tampilkan 404
        if (!$agendapelatihan) {
            return abort(404, 'Asosiasi tidak ditemukan');
        }

        $user = Auth::user();

            $datapesertapelatihan = PesertaPelatihan::where('agendapelatihan_id', $agendapelatihan->id)
                        ->select(['id', 'user_id', 'jeniskelamin', 'instansi'])
                        ->paginate(25);

        $dataagendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();
        // $datauser = user::all();

        // Ambil data user saat ini
        $user = Auth::user();


        return view('frontend.04_pembinaan.01_agendapembinaan.daftarpesertashow', [
            'title' => 'Daftar Peserta Agenda',
            'data' => $dataagendapelatihan,
            'datapeserta' => $datapesertapelatihan,
            'perPage' => $perPage,
            'search' => $search,
            'user' => $user,
            // 'datapeserta' => $datauser
        ]);
    }



    // MENU BACKEND PROFIL PAKET PEKERJAAN


    public function beagendapelatihan(Request $request)
    {
            $perPage = $request->input('perPage', 15);
            $search = $request->input('search');

            $query = agendapelatihan::query();

            if ($search) {
                $query->where('namakegiatan', 'LIKE', "%{$search}%")
                    ->orWhere('penyelenggara', 'LIKE', "%{$search}%")
                    ->orWhere('penutupan', 'LIKE', "%{$search}%")
                    ->orWhere('waktupelaksanaan', 'LIKE', "%{$search}%")
                    ->orWhere('jumlahpeserta', 'LIKE', "%{$search}%")
                    ->orWhere('lokasi', 'LIKE', "%{$search}%")
                    ->orWhere('keterangan', 'LIKE', "%{$search}%")
                    ->orWhere('isiagenda', 'LIKE', "%{$search}%")
                    ->orWhere('foto', 'LIKE', "%{$search}%")
                    ->orWhere('materi', 'LIKE', "%{$search}%")
        // -------------------------------------------------------------------------------
                    ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                        $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
                    });

            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('backend.05_agendapembinaan.01_agendapelatihan.partials.table', compact('data'))->render()
                ]);
            }

            return view('backend.05_agendapembinaan.01_agendapelatihan.index', [
                'title' => 'Agenda Pelatihan',
                'data' => $data,
                'perPage' => $perPage,
                'search' => $search
            ]);
    }

    // TKK DPUPR BLORA SHOW

    public function beagendapelatihanshow($namakegiatan)
    {
            $dataagendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();
        // Ambil data user saat ini
            $user = Auth::user();

        return view('backend.04_datajakon.06_profilpaketpekerjaan.show', [
            'title' => 'Data Details Agenda Pelatihan',
            'data' => $dataagendapelatihan,
        ]);
    }


        public function beagendapelatihandelete($namakegiatan)
        {
        // Cari item berdasarkan judul
            $entry = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

            if ($entry) {
            // Jika ada file header yang terdaftar, hapus dari storage
            // if (Storage::disk('public')->exists($entry->header)) {
                //     Storage::disk('public')->delete($entry->header);
            // }

            // Hapus entri dari database
            $entry->delete();

            // Redirect atau memberi respons sesuai kebutuhan
            return redirect('/beagendapelatihan')->with('delete', 'Data Berhasil Di Hapus !');

            }

        return redirect()->back()->with('error', 'Item not found');
        }


}

