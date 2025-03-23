@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
{{-- ---------------------------------------------------------------------- --}}

      @include('backend.00_administrator.00_baganterpisah.03_sidebar')

      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">

              <div class="col-sm-12"><h3 class="mb-0">Selamat datang ! <span style="color: black; font-weight:800;" > {{ Auth::user()->name }}</span> di Dashboard <span style="color: black; font-weight:800;"> {{ Auth::user()->statusadmin->statusadmin }} </span>  Sistem Informasi Pembina Jasa Konstruksi Kab Blora</h3></div>

            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>

        <br>
        <!-- Menampilkan pesan sukses -->

        {{-- ======================================================= --}}
        {{-- ALERT --}}

        @include('backend.00_administrator.00_baganterpisah.06_alert')

        {{-- ======================================================= --}}

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        <div style="
                    margin-bottom:10px;
                    font-weight: 900;
                    font-size: 16px;
                    text-align: center;
                    background: linear-gradient(135deg, #166534, #22C55E);
                    color: white;
                    padding: 10px 25px;
                    border-radius: 10px;
                    display: inline-block;
                    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
                    width: 100%;
                ">
                    📌 View Sub Data Klasifikasi Layanan : {{$data->namalengkap}}
                </div>


                <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">

                    <a href="/beagendapelatihan">
                         <button
                         onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                         onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                         style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                         <!-- Ikon Kembali -->
                         <i class="fa fa-arrow-left" style="margin-right: 8px;"></i> Kembali

                     </button>
                     </a>
                     <a href="/404">
                         <button
                         onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                         onmouseout="this.style.backgroundColor='#166534'; this.style.color='white';"
                         style="background-color: #166534; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                         <!-- Ikon Kembali -->
                         <i class="fa fa-plus" style="margin-right: 8px;"></i>
                         Create
                     </button>
                     </a>
                 </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px; text-align:center;">No</th>
                                        <th style="width: 300px; text-align:center;">Nama Lengkap</th>
                                        <th style="width: 300px; text-align:center;">Jenjang Pendidikan</th>
                                        <th style="width: 100px; text-align:center;">Nik</th>
                                        <th style="width: 200px; text-align:center;">Tanggal Lahir</th>
                                        <th style="width: 200px; text-align:center;">No Telepon </th>
                                        <th style="width: 100px; text-align:center;">Instansi</th>
                                        <th style="width: 100px; text-align:center;">Sertifikat</th>
                                        <th style="width: 200px; text-align:center;">Verifikasi</th>
                                        <th style="width: 200px; text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($datapeserta as $item )
                                    <tr class="align-middle">
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        <td style="text-align: left;">{{ $item->user->name }}</td>
                                        {{-- <td style="text-align: left;">{{ $item->jenjangpendidikan->jenjangpendidikan}}</td> --}}
                                        <td style="text-align: center;">{{ $item->nik }}</td>
                                        <td style="text-align: center;">{{ $item->jeniskelamin }}</td>
                                        <td style="text-align: center;">
                                            {{ \Carbon\Carbon::parse($item->tanggallahir)->translatedFormat('d F Y') }}
                                        </td>
                                        <td style="text-align: left;">{{ $item->notelepon }}</td>
                                        <td style="text-align: left;">{{ $item->instansi }}</td>

                                        <td style="text-align: center; gap:10px;">
                                            <object data="{{ asset('storage/' . $item->sertifikat) }}" type="application/pdf" width="300" height="200">
                                                <p>Sertifikat Belum Terbit</p>
                                            </object>
                                        </td>

                                        <td style="text-align: left;">{{ $item->verifikasi }}</td>


                                        <td style="text-align: center;">
                                            <!-- Show Icon -->
                                         {{-- <a href="/404" class="btn btn-sm btn-info me-2" title="Show">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <!-- Update Icon --> --}}
                                            {{-- <a href="/404" class="btn btn-sm btn-warning me-2" title="Update">
                                                <i class="bi bi-pencil-square"></i>
                                            </a> --}}
                                            <!-- Delete Icon -->
                                            <!-- Tombol Delete -->
                                            <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            data-judul="{{ $item->id }}" onclick="setDeleteUrl(this)">
                                            <i class="bi bi-trash"></i>
                                        </a>

                                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                                                        <h5 class="modal-title" id="deleteModalLabel">DPUPR Kabupaten Blora</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Anda Ingin Menghapus Data : <span id="itemName"></span>?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <form id="deleteForm" method="POST" action="">
                                                            @csrf
                                                            @method('DELETE') <!-- Menetapkan metode DELETE untuk penghapusan -->
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <script>
                                        function setDeleteUrl(button) {
                                            // Ambil data judul dari elemen yang diklik
                                            var id = button.getAttribute('data-judul');

                                            // Perbarui teks di dalam modal dengan nama item
                                            document.getElementById('itemName').innerText = id;

                                            // Atur URL penghapusan
                                            var deleteUrl = "/beagendapelatihanpeserta/delete/" + encodeURIComponent(id);
                                            document.getElementById('deleteForm').action = deleteUrl;
                                        }


                                        </script>

                                            <style>
                                                /* Hover effect */
                                                .btn-info:hover, .btn-warning:hover, .btn-danger:hover {
                                                    background-color: #fff !important; /* Keep the background white on hover */
                                                    color: black !important; /* Change text color to black on hover */
                                                }

                                                .btn-info:hover i, .btn-warning:hover i, .btn-danger:hover i {
                                                    color: black !important; /* Ensure the icon color changes to black */
                                                }
                                            </style>
                                        </td>

                                    </tr>
                                        @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!--end::Row-->
        </div>
                  <!--end::Container-->
        <!--end::App Content Header-->
        <!--begin::App Content-->
          <!--end::App Content-->
      </main>
      <!--end::App Main-->
    </div>
    </div>


      @include('backend.00_administrator.00_baganterpisah.02_footer')
