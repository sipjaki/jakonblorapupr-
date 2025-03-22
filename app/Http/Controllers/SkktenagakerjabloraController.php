<?php

namespace App\Http\Controllers;

use App\Models\asosiasimasjaki;
use App\Models\skktenagakerjablora;
use App\Models\namasekolah;
use App\Models\jenjangpendidikan;
use App\Models\jurusan;
use App\Models\jabatankerja;
use App\Models\jenjang;
use App\Models\lpspenerbit;
use App\Models\skktenagakerjabloralist;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SkktenagakerjabloraController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.index', [
            'title' => 'Tenaga Kerja Konstruksi Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

    public function listskktenagakerjablora(Request $request)
    {
        $user = Auth::user();

        // $data = skktenagakerjablora::paginate(10);
        $datanamasekolah = namasekolah::all();
        $datajenjangpendidikan = jenjangpendidikan::all();
        $datajurusan = jurusan::all();
        $datajabatankerja = jabatankerja::all();
        $datajenjang = jenjang::all();
        $datalpspenerbit = lpspenerbit::all();

        $perPage = $request->input('perPage', 10);
            $search = $request->input('search');

            $query = skktenagakerjablora::query();

            if ($search) {
                $query->where('nama', 'LIKE', "%{$search}%")
                      ->orWhere('alamat', 'LIKE', "%{$search}%")
                      ->orWhere('tahunlulus', 'LIKE', "%{$search}%")
                      ->orWhereHas('jabatankerja', function ($q) use ($search) {
                          $q->where('jabatankerja', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                      })
                      ->orWhereHas('jenjang', function ($q) use ($search) {
                          $q->where('jenjang', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                      });
            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.partials.table', compact('data'))->render()
                ]);
            }

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.tenagakerjakonstruksi', [
            'title' => 'SKK Tenaga Konstruksi Di Selenggarakan DPUPR Kab Blora',
            'user' => $user, // Mengirimkan data paginasi ke view

            'data' => $data, // Mengirimkan data paginasi ke view
            'datanamasekolah' => $datanamasekolah, // Mengirimkan data paginasi ke view
            'datajenjangpendidikan' => $datajenjangpendidikan, // Mengirimkan data paginasi ke view
            'datajurusan' => $datajurusan, // Mengirimkan data paginasi ke view
            'datajabatankerja' => $datajabatankerja, // Mengirimkan data paginasi ke view
            'datajenjang' => $datajenjang, // Mengirimkan data paginasi ke view
            'datalpspenerbit' => $datalpspenerbit, // Mengirimkan data paginasi ke view
        ]);
    }

    public function listskktenagakerjablorashow($nama)
    {
        $dataskk = skktenagakerjablora::where('nama', $nama)->first();

        $datanamasekolah = namasekolah::all();
        $datajenjangpendidikan = jenjangpendidikan::all();
        $datajurusan = jurusan::all();
        $datajabatankerja = jabatankerja::all();
        $datajenjang = jenjang::all();
        $datalpspenerbit = lpspenerbit::all();


        // Ambil data user saat ini
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.tenagakerjakonstruksishow', [
            'title' => 'Data SKK Tenaga Konstruksi',

            'data' => $dataskk, // Mengirimkan data paginasi ke view
            'datanamasekolah' => $datanamasekolah, // Mengirimkan data paginasi ke view
            'datajenjangpendidikan' => $datajenjangpendidikan, // Mengirimkan data paginasi ke view
            'datajurusan' => $datajurusan, // Mengirimkan data paginasi ke view
            'datajabatankerja' => $datajabatankerja, // Mengirimkan data paginasi ke view
            'datajenjang' => $datajenjang, // Mengirimkan data paginasi ke view
            'datalpspenerbit' => $datalpspenerbit, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view

    ]);


    }

// MENU BACKEND DATA SKK TENAGA KERJA KABUPATEN BLORA DI SELENGGARAKAN OLEH DPUPR KABUPATEN BLORA
// --------------------------------------------------------------------------------------------------------------------

public function beskkdpupr(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    $query = skktenagakerjablora::query();

    if ($search) {
        $query->where('nama', 'LIKE', "%{$search}%")
              ->orWhere('alamat', 'LIKE', "%{$search}%")
              ->orWhere('tahunlulus', 'LIKE', "%{$search}%")
              ->orWhere('tanggalterbit', 'LIKE', "%{$search}%")
              ->orWhere('tanggalhabis', 'LIKE', "%{$search}%")
              ->orWhere('statusterbit', 'LIKE', "%{$search}%")
// -------------------------------------------------------------------------------
              ->orWhereHas('namasekolah', function ($q) use ($search) {
                $q->where('namasekolah', 'LIKE', "%{$search}%");
            })

              ->orWhereHas('jenjangpendidikan', function ($q) use ($search) {
                $q->where('jenjangpendidikan', 'LIKE', "%{$search}%");
            })

              ->orWhereHas('jabatankerja', function ($q) use ($search) {
                $q->where('jabatankerja', 'LIKE', "%{$search}%");
            })

              ->orWhereHas('jenjang', function ($q) use ($search) {
                $q->where('jenjang', 'LIKE', "%{$search}%");
            })

              ->orWhereHas('lpspenerbit', function ($q) use ($search) {
                $q->where('lpspenerbit', 'LIKE', "%{$search}%");
            })

            // ->orWhereHas('asosiasimasjaki', function ($q) use ($search) {
            //     $q->where('namaasosiasi', 'LIKE', "%{$search}%");
            // })

              ->orWhereHas('jurusan', function ($q) use ($search) {
                $q->where('jurusan', 'LIKE', "%{$search}%");
            });
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.04_datajakon.04_tkkdpupr.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.04_datajakon.04_tkkdpupr.index', [
        'title' => 'TKK Diselenggarakan DPUPR Kabupaten Blora',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

// TKK DPUPR BLORA SHOW

public function beskkdpuprshow($nama)
{
    $dataskkdpupr = skktenagakerjablora::where('nama', $nama)->first();
// Ambil data user saat ini
    $user = Auth::user();

return view('backend.04_datajakon.04_tkkdpupr.show', [
    'title' => 'Data TKK Di Selenggarakan DPUPR Kab Blora',
    'data' => $dataskkdpupr,
]);
}


public function beskkdpuprdelete($nama)
{
// Cari item berdasarkan judul
$entry = skktenagakerjablora::where('nama', $nama)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/beskkdpupr')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}



// BATAS MENU TKK DPUPR BLORA

    // =============================================================================

    public function datalistskktenagakerjablora(Request $request)
    {
        $user = Auth::user();

        // $data = skktenagakerjablora::paginate(10);
        $datanamasekolah = namasekolah::all();
        $datajenjangpendidikan = jenjangpendidikan::all();
        $datajurusan = jurusan::all();
        $datajabatankerja = jabatankerja::all();
        $datajenjang = jenjang::all();
        $datalpspenerbit = lpspenerbit::all();
        $dataasosiasimasjaki = asosiasimasjaki::all();

        $perPage = $request->input('perPage', 10);
            $search = $request->input('search');

            $query = skktenagakerjabloralist::query();

            if ($search) {
                $query->where('nama', 'LIKE', "%{$search}%")
                      ->orWhere('alamat', 'LIKE', "%{$search}%")
                      ->orWhere('tahunlulus', 'LIKE', "%{$search}%")
                      ->orWhereHas('jabatankerja', function ($q) use ($search) {
                          $q->where('jabatankerja', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                      })
                      ->orWhereHas('jenjang', function ($q) use ($search) {
                          $q->where('jenjang', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                      });
            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.partials.table', compact('data'))->render()
                ]);
            }

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.listtenagakerjakonstruksi', [
            'title' => 'SKK Tenaga Konstruksi Seluruh Kab Blora',
            'user' => $user, // Mengirimkan data paginasi ke view

            'data' => $data, // Mengirimkan data paginasi ke view
            'datanamasekolah' => $datanamasekolah, // Mengirimkan data paginasi ke view
            'datajenjangpendidikan' => $datajenjangpendidikan, // Mengirimkan data paginasi ke view
            'datajurusan' => $datajurusan, // Mengirimkan data paginasi ke view
            'datajabatankerja' => $datajabatankerja, // Mengirimkan data paginasi ke view
            'datajenjang' => $datajenjang, // Mengirimkan data paginasi ke view
            'datalpspenerbit' => $datalpspenerbit, // Mengirimkan data paginasi ke view
            'dataasosiasimasjaki' => $dataasosiasimasjaki, // Mengirimkan data paginasi ke view
        ]);
    }

    public function datalistskktenagakerjablorashow($nama)
    {
        $dataskklist = skktenagakerjabloralist::where('nama', $nama)->first();

        $datanamasekolah = namasekolah::all();
        $datajenjangpendidikan = jenjangpendidikan::all();
        $datajurusan = jurusan::all();
        $datajabatankerja = jabatankerja::all();
        $datajenjang = jenjang::all();
        $datalpspenerbit = lpspenerbit::all();
        $dataasosiasimasjaki = asosiasimasjaki::all();


        // Ambil data user saat ini
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.listtenagakerjakonstruksishow', [
            'title' => 'Data SKK Tenaga Konstruksi',

            'data' => $dataskklist, // Mengirimkan data paginasi ke view
            'datanamasekolah' => $datanamasekolah, // Mengirimkan data paginasi ke view
            'datajenjangpendidikan' => $datajenjangpendidikan, // Mengirimkan data paginasi ke view
            'datajurusan' => $datajurusan, // Mengirimkan data paginasi ke view
            'datajabatankerja' => $datajabatankerja, // Mengirimkan data paginasi ke view
            'datajenjang' => $datajenjang, // Mengirimkan data paginasi ke view
            'datalpspenerbit' => $datalpspenerbit, // Mengirimkan data paginasi ke view
            'dataasosiasimasjaki' => $dataasosiasimasjaki, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view

        ]);


    }


    // MENU BACKEND DATA ALL SKK TENAGA KERJA SELURUH KABUPATEN BLORA JAWA TENGAH
// --------------------------------------------------------------------------------------------------------------------

    public function beskkall(Request $request)
    {
            $perPage = $request->input('perPage', 15);
            $search = $request->input('search');

            $query = skktenagakerjabloralist::query();

            if ($search) {
                $query->where('nama', 'LIKE', "%{$search}%")
                    ->orWhere('alamat', 'LIKE', "%{$search}%")
                    ->orWhere('tahunlulus', 'LIKE', "%{$search}%")
                    ->orWhere('tanggalterbit', 'LIKE', "%{$search}%")
                    ->orWhere('tanggalhabis', 'LIKE', "%{$search}%")
                    ->orWhere('statusterbit', 'LIKE', "%{$search}%")
        // -------------------------------------------------------------------------------
                    ->orWhereHas('namasekolah', function ($q) use ($search) {
                        $q->where('namasekolah', 'LIKE', "%{$search}%");
                    })

                    ->orWhereHas('jenjangpendidikan', function ($q) use ($search) {
                        $q->where('jenjangpendidikan', 'LIKE', "%{$search}%");
                    })

                    ->orWhereHas('jabatankerja', function ($q) use ($search) {
                        $q->where('jabatankerja', 'LIKE', "%{$search}%");
                    })

                    ->orWhereHas('jenjang', function ($q) use ($search) {
                        $q->where('jenjang', 'LIKE', "%{$search}%");
                    })

                    ->orWhereHas('lpspenerbit', function ($q) use ($search) {
                        $q->where('lpspenerbit', 'LIKE', "%{$search}%");
                    })

                    // ->orWhereHas('asosiasimasjaki', function ($q) use ($search) {
                    //     $q->where('namaasosiasi', 'LIKE', "%{$search}%");
                    // })

                    ->orWhereHas('jurusan', function ($q) use ($search) {
                        $q->where('jurusan', 'LIKE', "%{$search}%");
                    });
            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('backend.04_datajakon.05_alltkkblora.partials.table', compact('data'))->render()
                ]);
            }

            return view('backend.04_datajakon.05_alltkkblora.index', [
                'title' => 'Semua TKK Kabupaten Blora',
                'data' => $data,
                'perPage' => $perPage,
                'search' => $search
            ]);
    }

    // TKK DPUPR BLORA SHOW

    public function beskkallshow($nama)
    {
            $dataallskkblora = skktenagakerjabloralist::where('nama', $nama)->first();
        // Ambil data user saat ini
            $user = Auth::user();

        return view('backend.04_datajakon.05_alltkkblora.show', [
            'title' => 'Data TKK Di Selenggarakan DPUPR Kab Blora',
            'data' => $dataallskkblora,
        ]);
    }


        public function beskkalldelete($nama)
        {
        // Cari item berdasarkan judul
            $entry = skktenagakerjabloralist::where('nama', $nama)->first();

            if ($entry) {
            // Jika ada file header yang terdaftar, hapus dari storage
            // if (Storage::disk('public')->exists($entry->header)) {
                //     Storage::disk('public')->delete($entry->header);
            // }

            // Hapus entri dari database
            $entry->delete();

            // Redirect atau memberi respons sesuai kebutuhan
            return redirect('/beskkallblora')->with('delete', 'Data Berhasil Di Hapus !');

            }

        return redirect()->back()->with('error', 'Item not found');
        }



// BATAS MENU TKK DPUPR BLORA

}

