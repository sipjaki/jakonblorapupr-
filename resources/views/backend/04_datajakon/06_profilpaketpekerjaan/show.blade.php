<style>
/* Container for the timeline */

.timeline {
    position: relative;
    width: 100%;
    max-width: 800px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.circle {
    width: 30px;
    height: 30px;
    background-color: #4CAF50;
    border-radius: 50%;
    position: relative;
    z-index: 2;
}

.line {
    height: 10px;
    width: 100px;
    background-color: #ff5722;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease;
}

.line:before {
    content: "";
    position: absolute;
    top: -5px;
    left: -10px;
    width: 120%;
    height: 3px;
    background-color: #ff5722;
    box-shadow: 0 0 10px rgba(255, 87, 34, 0.7);
}

.circle:nth-child(1) { margin-left: 0; }
.circle:nth-child(3) { margin-left: 50px; }
.circle:nth-child(5) { margin-left: 50px; }
.circle:nth-child(7) { margin-left: 50px; }
.circle:nth-child(9) { margin-left: 50px; }

.timeline .line:nth-child(2), .timeline .line:nth-child(4), .timeline .line:nth-child(6), .timeline .line:nth-child(8) {
    background-color: #ff5722;
}


</style>

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

            <!-- Menyertakan FontAwesome untuk ikon -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h2 class="card-title" style="color: black;">
                            Data Details :
                            <button class="btn btn-success"
                                    style="background-color: #1d643b; border-color: #1d643b; font-weight: bold; padding: 10px 20px;
                                           border-radius: 5px; font-size: 16px; margin-right: 10px;"
                                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#000000'; this.style.borderColor='#1d643b';"
                                    onmouseout="this.style.backgroundColor='#1d643b'; this.style.color='#ffffff'; this.style.borderColor='#1d643b';">
                                {{ $data->namapekerjaan }}
                            </button>
                        </h2>
                        <button id="status-{{ $data->id }}" class="btn btn-sm"></button>

                        <script>
                            function updateStatus() {
                                let now = new Date().getTime();
                                let tanggalHabis = new Date("{{ \Carbon\Carbon::parse($data->bulanselesai)->format('Y-m-d H:i:s') }}").getTime();
                                let statusButton = document.getElementById("status-{{ $data->id }}");

                                // CSS yang digunakan pada tombol
                                let buttonStyle = "font-weight: bold; padding: 10px 20px; border-radius: 5px; font-size: 16px; margin-right: 10px;";

                                if (now > tanggalHabis) {
                                    statusButton.innerText = "ON PROGRESS";
                                    statusButton.setAttribute("style", buttonStyle + " background-color: blue; border-color: blue; color: white;"); // Set to red for "TIDAK BERLAKU"
                                    statusButton.className = "btn btn-primary btn-sm"; // Update class for 'danger' status

                                    // Hover effect: keep background white on hover
                                    statusButton.onmouseover = function() {
                                        statusButton.style.backgroundColor = '#ffffff';
                                        statusButton.style.color = '#000000'; // Color becomes black when hovered
                                        statusButton.style.borderColor = 'blue'; // Keep red border
                                    };
                                    statusButton.onmouseout = function() {
                                        statusButton.style.backgroundColor = 'blue';
                                        statusButton.style.color = 'white'; // Keep white text when mouse out
                                        statusButton.style.borderColor = 'blue'; // Keep red border
                                    };
                                } else {
                                    statusButton.innerText = "SELESAI";
                                    statusButton.setAttribute("style", buttonStyle + " background-color: #1d643b; border-color: #1d643b; color: white;");
                                    statusButton.className = "btn btn-success btn-sm"; // Update class for 'success' status

                                    // Hover effect: keep background white on hover
                                    statusButton.onmouseover = function() {
                                        statusButton.style.backgroundColor = '#ffffff';
                                        statusButton.style.color = '#000000'; // Color becomes black when hovered
                                        statusButton.style.borderColor = '#1d643b'; // Keep original border color
                                    };
                                    statusButton.onmouseout = function() {
                                        statusButton.style.backgroundColor = '#1d643b';
                                        statusButton.style.color = 'white'; // Keep white text when mouse out
                                        statusButton.style.borderColor = '#1d643b'; // Keep original border color
                                    };
                                }
                            }

                            // Jalankan pertama kali saat halaman dimuat
                            updateStatus();

                            // Update setiap 1 detik untuk realtime
                            setInterval(updateStatus, 1000);
                        </script>

                    </div>
                    <div class="timeline">
                        <div class="circle" id="circle-1"></div>
                        <div class="line" id="line-1"></div>
                        <div class="circle" id="circle-2"></div>
                        <div class="line" id="line-2"></div>
                        <div class="circle" id="circle-3"></div>
                        <div class="line" id="line-3"></div>
                        <div class="circle" id="circle-4"></div>
                        <div class="line" id="line-4"></div>
                        <div class="circle" id="circle-5"></div>
                    </div>
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <div class="card card-primary card-outline mb-6">
                            <form>
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Left Column (6/12) -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-clipboard-data" style="margin-right: 8px; color: navy;"></i>Nama Pekerjaan
                                                </label>
                                                <input class="form-control" value="{{$data->namapekerjaan}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-tools" style="margin-right: 8px; color: navy;"></i>Jenis Pekerjaan
                                                </label>
                                                <input class="form-control" value="{{$data->profiljenispekerjaan->jenispekerjaan}}" readonly />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-check-circle-fill" style="margin-right: 8px; color: navy;"></i>Status Pekerjaan
                                                </label>
                                                <input class="form-control" value="{{$data->paketstatuspekerjaan->paketstatuspekerjaan}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-bank" style="margin-right: 8px; color: navy;"></i>Sumber Dana
                                                </label>
                                                <input class="form-control" value="{{$data->sumberdana->sumberdana}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-calendar-date" style="margin-right: 8px; color: navy;"></i>Tahun Pelaksanaan
                                                </label>
                                                <input class="form-control" value="{{$data->tahunpilihan->tahunpilihan}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-building" style="margin-right: 8px; color: navy;"></i>CV/PT
                                                </label>
                                                <input class="form-control" value="{{$data->cvptpenyedia}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-person-badge" style="margin-right: 8px; color: navy;"></i>Nomor Induk Berusaha
                                                </label>
                                                <input class="form-control" value="{{$data->nib}}" readonly/>
                                            </div>
                                        </div>
                                            <!-- End Left Column -->
                                        <!-- Right Column (6/12) -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-file-earmark-ruled" style="margin-right: 8px; color: navy;"></i>Nilai Kontrak
                                                </label>
                                                <input class="form-control" value="{{$data->nilaikontrak}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-file-earmark-text-fill" style="margin-right: 8px; color: navy;"></i>Jenis Kontrak
                                                </label>
                                                <input class="form-control" value="{{$data->jeniskontrak}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-file-earmark-lock-fill" style="margin-right: 8px; color: navy;"></i>Karakteristik Kontrak
                                                </label>
                                                <input class="form-control" value="{{$data->karakteristikkontrak}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-calendar-event-fill" style="margin-right: 8px; color: navy;"></i>Mulai
                                                </label>
                                                <input class="form-control" value="{{ \Carbon\Carbon::parse($data->bulanmulai)->translatedFormat('d F Y') }}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-calendar-x-fill" style="margin-right: 8px; color: navy;"></i>Selesai
                                                </label>
                                                <input class="form-control" value="{{ \Carbon\Carbon::parse($data->bulanselesai)->translatedFormat('d F Y') }}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-pie-chart-fill" style="margin-right: 8px; color: navy;"></i>Progress Pekerjaan
                                                </label>

                                                <!-- Progress bar -->
                                                <div style="width: 100%; background-color: #ddd; border-radius: 10px; height: 20px; position: relative;">
                                                    <!-- Teks persentase yang ditimpa di atas progress bar -->
                                                    <div style="position: absolute; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; color: black; font-weight: bold;">
                                                        {{$data->progress}}%
                                                    </div>
                                                    <!-- Progress bar yang berubah warna berdasarkan persentase -->
                                                    <div
                                                        style="width: {{$data->progress}}%;
                                                               background-color:
                                                               @if($data->progress < 25)
                                                                   red;
                                                               @elseif($data->progress < 50)
                                                                   orange;
                                                               @elseif($data->progress < 75)
                                                                   lightblue;
                                                               @elseif($data->progress < 100)
                                                                   lightgreen;
                                                               @else
                                                                   green;
                                                               @endif
                                                               height: 100%;
                                                               border-radius: 10px;">
                                                    </div>
                                                </div>

                                                <!-- Input with readonly to show the value -->
                                                <input class="form-control mt-2" value="{{$data->progress}}%" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-house-door-fill" style="margin-right: 8px; color: navy;"></i>Dinas
                                                </label>
                                                <input class="form-control" value="{{$data->dinas}}" readonly/>
                                            </div>
                                        </div>

                                    </div> <!-- end row -->
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Quick Example-->

                    </div>
                    <!-- /.card -->
                    <!-- Button Section -->
                    <br><br>
                    <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
                        <a href="/404">
                            <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#22C55E'; this.style.color='white';"
                            style="background-color: #22C55E; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Kembali -->
                            <i class="fa fa-file" style="margin-right: 8px;"></i>
                            Update
                        </button>
                        </a>
                        <a href="/bepaketpekerjaan">
                            <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                            style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Kembali -->
                            <i class="fa fa-arrow-left" style="margin-right: 8px;"></i>
                            Kembali
                        </button>
                    </a>
                </div>

                    </div>
                    <!--end::Row-->
                    </div>

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
