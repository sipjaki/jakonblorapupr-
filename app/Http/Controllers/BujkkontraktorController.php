<?php

namespace App\Http\Controllers;

use App\Models\asosiasimasjaki;
use App\Models\bujkkonsultan;
use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class BujkkontraktorController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.01_bujkkontraktor.index', [
            'title' => 'BUJK Konstruksi & Konsultasi Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

    public function asosiasimasjaki(Request $request)
    {

        $databujkkontraktor = bujkkontraktor::select('asosiasimasjaki_id', DB::raw('count(*) as jumlah'))
        ->groupBy('asosiasimasjaki_id')
        ->with('asosiasimasjaki') // Pastikan ada relasi ke tabel asosiasi
        ->get();

        $databujkkonsultan = bujkkonsultan::select('asosiasimasjaki_id', DB::raw('count(*) as jumlah'))
        ->groupBy('asosiasimasjaki_id')
        ->with('asosiasimasjaki') // Pastikan ada relasi ke tabel asosiasi
        ->get();

        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $user = Auth::user();
        // $data = asosiasimasjaki::paginate(15);

        $databujkkontraktorpaginate = bujkkontraktor::paginate(15);
        $databujkkonsultanpaginate = bujkkonsultan::paginate(15);

        $query = bujkkonsultan::query();
        $query = bujkkontraktor::query();

        if ($search) {
            $query->where('namaasosiasi', 'LIKE', "%{$search}%");
                //   ->orWhere('alamat', 'LIKE', "%{$search}%")
                //   ->orWhere('email', 'LIKE', "%{$search}%")
                //   ->orWhere('nib', 'LIKE', "%{$search}%");
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.03_masjaki_jakon.05_asosiasimasjaki.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.03_masjaki_jakon.05_asosiasimasjaki.index', [
            'title' => 'Asosiasi Konstruksi dan Konsultasi Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'perPage' => $perPage,
            'search' => $search,
            'databujkkontraktor' => $databujkkontraktor,
            'databujkkontraktorpaginate' => $databujkkontraktorpaginate,
            'databujkkonsultanpaginate' => $databujkkonsultanpaginate,
            'databujkkonsultan' => $databujkkonsultan,
        ]);
    }

    // MENU BACKEND JASA KONSTRUKSI
    // ------------------------------------------------------------------------------------------------
            public function beasosiasi(Request $request)
        {
            $perPage = $request->input('perPage', 15);
            $search = $request->input('search');

            $query = asosiasimasjaki::query();

            if ($search) {
                $query->where('namaasosiasi', 'LIKE', "%{$search}%");

            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('backend.04_datajakon.03_asosiasimasjaki.partials.table', compact('data'))->render()
                ]);
            }

            return view('backend.04_datajakon.03_asosiasimasjaki.index', [
                'title' => 'Asosiasi Mas Jaki Blora',
                'data' => $data,
                'perPage' => $perPage,
                'search' => $search
            ]);
        }

        // BACKEND ASOSIASI SHOW

        public function beasosiasishow($namaasosiasi)
        {
            $datasosiasi = asosiasimasjaki::where('namaasosiasi', $namaasosiasi)->first();
        // Ambil data user saat ini
            $user = Auth::user();

        return view('backend.04_datajakon.01_bujkkonstruksi.show', [
            'title' => 'Data Asosiasi Mas Jaki',
            'data' => $datasosiasi,
        ]);
        }

        public function beasosiasidelete($namaasosiasi)
            {
            // Cari item berdasarkan judul
            $entry = asosiasimasjaki::where('namaasosiasi', $namaasosiasi)->first();

            if ($entry) {
            // Jika ada file header yang terdaftar, hapus dari storage
            // if (Storage::disk('public')->exists($entry->header)) {
                //     Storage::disk('public')->delete($entry->header);
            // }

            // Hapus entri dari database
            $entry->delete();

            // Redirect atau memberi respons sesuai kebutuhan
            return redirect('/beasosiasi')->with('delete', 'Data Berhasil Di Hapus !');

            }

            return redirect()->back()->with('error', 'Item not found');
            }



// HALAMAN FRONTEND MENU BUJK KONTRAKTOR
    public function bujkkontraktor(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');

    $query = bujkkontraktor::query();

    if ($search) {
        $query->where('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('alamat', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('nib', 'LIKE', "%{$search}%");
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.03_masjaki_jakon.01_bujkkontraktor.partials.table', compact('data'))->render()
        ]);
    }


    return view('frontend.03_masjaki_jakon.01_bujkkontraktor.bujkkontraktor', [
        'title' => 'BUJK Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    public function bujkkontraktorshow($namalengkap)
    {
        $databujkkontraktor = bujkkontraktor::where('namalengkap', $namalengkap)->first();

        if (!$databujkkontraktor) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(50);

          // Menghitung nomor urut mulai
            $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.03_masjaki_jakon.01_bujkkontraktor.bujkkontraktorshow', [
        'title' => 'Data Bujk Konstruksi',
        'data' => $databujkkontraktor,
        'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        'start' => $start,
    ]);
}


public function asosiasikonstruksishow($namaasosiasi)
{
    // Cari asosiasi berdasarkan namaasosiasi
    $asosiasi = asosiasimasjaki::where('namaasosiasi', $namaasosiasi)->first();

    // Jika asosiasi tidak ditemukan, tampilkan 404
    if (!$asosiasi) {
        return abort(404, 'Asosiasi tidak ditemukan');
    }

    $user = Auth::user();
        // Ambil semua data dari tabel bujkkontraktor berdasarkan asosiasi_id
        $databujkkontraktor = bujkkontraktor::where('asosiasimasjaki_id', $asosiasi->id)->get(['id', 'namalengkap', 'no_telepon']);
        // $databujkkontraktorpaginate = bu::where('asosiasimasjaki_id', $asosiasi->id)->paginate(10);


        // Return ke view dengan format yang diminta
        return view('frontend.03_masjaki_jakon.05_asosiasimasjaki.showasosiasikontraktor', [
            'title' => 'Asosiasi Konstruksi dan Konsultasi Konstruksi',
            'user' => $user,
            'data' => $databujkkontraktor,
       ]);
    }


public function asosiasikonsultanshow($namaasosiasi)
{
    // Cari asosiasi berdasarkan namaasosiasi
    $asosiasi = asosiasimasjaki::where('namaasosiasi', $namaasosiasi)->first();

    // Jika asosiasi tidak ditemukan, tampilkan 404
    if (!$asosiasi) {
        return abort(404, 'Asosiasi tidak ditemukan');
    }

    $user = Auth::user();
        // Ambil semua data dari tabel bujkkontraktor berdasarkan asosiasi_id
        $databujkkonsultan = bujkkonsultan::where('asosiasimasjaki_id', $asosiasi->id)->get(['id', 'namalengkap', 'no_telepon']);
        // $databujkkontraktorpaginate = bu::where('asosiasimasjaki_id', $asosiasi->id)->paginate(10);


        // Return ke view dengan format yang diminta
        return view('frontend.03_masjaki_jakon.05_asosiasimasjaki.showasosiasikonsultan', [
            'title' => 'Asosiasi Konstruksi dan Konsultasi Konstruksi',
            'user' => $user,
            'data' => $databujkkonsultan,
       ]);
    }

// ------------------------------------------------------------------------------------------
// MENU BACKEND BUJK KONSTRUKSI DAN KONSULTASI

public function bebujkjakon()
{

    $user = Auth::user();

    return view('backend.04_datajakon.index', [
        'title' => 'Data BUJK Konstruksi dan Konsultasi Konstruksi ',
        // 'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}



// MENU 1 BUJK KONSTRUKSI

// public function bebujkkonstruksi()
// {
//     $data = bujkkontraktor::paginate(15); // Menggunakan paginate() untuk pagination
//     $user = Auth::user();

//     return view('backend.04_datajakon.01_bujkkonstruksi.index', [
//         'title' => 'Data BUJK Konstruksi',
//         'data' => $data, // Mengirimkan data paginasi ke view
//         'user' => $user, // Mengirimkan data paginasi ke view

//     ]);
// }

public function bebujkkonstruksi(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    $query = bujkkontraktor::query();

    if ($search) {
        $query->where('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('alamat', 'LIKE', "%{$search}%")
              ->orWhere('no_telepon', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('nomorindukberusaha', 'LIKE', "%{$search}%")
              ->orWhere('pju', 'LIKE', "%{$search}%")
              ->orWhere('no_akte', 'LIKE', "%{$search}%")
              ->orWhere('tanggal', 'LIKE', "%{$search}%")
              ->orWhere('nama_notaris', 'LIKE', "%{$search}%")
              ->orWhere('no_pengesahan', 'LIKE', "%{$search}%")
              ->orWhereHas('bujkkontraktorsub', function ($q) use ($search) {
                $q->where('nama_pengurus', 'LIKE', "%{$search}%");
            })
            ->orWhereHas('asosiasimasjaki', function ($q) use ($search) {
                $q->where('namaasosiasi', 'LIKE', "%{$search}%");
            });
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.04_datajakon.01_bujkkonstruksi.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.04_datajakon.01_bujkkonstruksi.index', [
        'title' => 'BUJK Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}





// BUJKKONTRAKTOR SHOW

public function bebujkkonstruksishow($namalengkap)
{
    $databujkkontraktor = bujkkontraktor::where('namalengkap', $namalengkap)->first();
// Ambil data user saat ini
    $user = Auth::user();

return view('backend.04_datajakon.01_bujkkonstruksi.show', [
    'title' => 'Data Bujk Konstruksi',
    'data' => $databujkkontraktor,
]);
}


// DATA SHOW SUB KLASIFIKASI LAYANAN
public function bebujkkonstruksiklasifikasi($namalengkap)
{
    $databujk = bujkkontraktor::where('namalengkap', $namalengkap)->first();

    if (!$databujk) {
        return abort(404, 'Data sub-klasifikasi tidak ditemukan');
    }

        // Menggunakan paginate() untuk pagination
        $datasublayanan = bujkkontraktorsub::where('bujkkontraktor_id', $databujk->id)->paginate(50);

    return view('backend.04_datajakon.01_bujkkonstruksi.showklasifikasi', [
        'title' => 'Data Klasifikasi Layanan',
        'subdata' => $datasublayanan,
        'data' => $databujk,
        'user' => Auth::user()
    ]);
}


public function bebujkkonstruksidelete($namalengkap)
{
// Cari item berdasarkan judul
$entry = bujkkontraktor::where('namalengkap', $namalengkap)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/bebujkkonstruksi')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}


public function bebujkkonstruksiklasifikasidelete($id)
{
// Cari item berdasarkan judul
$entry = bujkkontraktorsub::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database

$parentId = $entry->bujkkontraktor_id; // Sesuaikan dengan nama kolom di database
$entry->delete();

return redirect()->route('bebujkkonstruksi.showsubklasifikasi', ['id' => $parentId])
    ->with('delete', 'Data Berhasil Dihapus!');

}

return redirect()->back()->with('error', 'Item not found');
}



}


