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
                        <h2 style="color: black;" class="card-title">Data Details : <button class="btn btn-success" style="background-color: #1d643b; border-color: #1d643b; font-weight: bold;"
                            onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#000000'; this.style.borderColor='#1d643b';"
                            onmouseout="this.style.backgroundColor='#1d643b'; this.style.color='#ffffff'; this.style.borderColor='#1d643b';">
                            {{ $data->namalengkap }}
                        </button>
                        </h2>

                    </div>

                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <div class="card card-primary card-outline mb-6">
                            <!--begin::Header-->
                            {{-- <div class="card-header"><div class="card-title">Quick Example</div></div> --}}
                            <!--end::Header-->
                            <!--begin::Form-->

                            <form>
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Left Column (6/12) -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-people-fill" style="margin-right: 8px; color: navy;"></i>Nama Asosiasi
                                                </label>
                                                <input class="form-control" value="{{$data->asosiasimasjaki->namaasosiasi}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-building" style="margin-right: 8px; color: navy;"></i>Badan Usaha Jasa Konstruksi
                                                </label>
                                                <input class="form-control" value="{{$data->namalengkap}}" readonly />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-geo-alt-fill" style="margin-right: 8px; color: navy;"></i>Alamat
                                                </label>
                                                <input class="form-control" value="{{$data->alamat}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-telephone-fill" style="margin-right: 8px; color: navy;"></i>No Telepon
                                                </label>
                                                <input class="form-control" value="{{$data->no_telepon}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-envelope-fill" style="margin-right: 8px; color: navy;"></i>Email
                                                </label>
                                                <input class="form-control" value="{{$data->email}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-card-checklist" style="margin-right: 8px; color: navy;"></i>Nomor Induk Berusaha
                                                </label>
                                                <input class="form-control" value="{{$data->nomorindukberusaha}}" readonly/>
                                            </div>
                                        </div>
                                        <!-- End Left Column -->
<!-- Right Column (6/12) -->
<div class="col-md-6">

    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-person-badge-fill" style="margin-right: 8px; color: navy;"></i>Penanggung Jawab Umum
        </label>
        <input class="form-control" value="{{$data->pju}}" readonly/>
    </div>

    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-file-earmark-text-fill" style="margin-right: 8px; color: navy;"></i>No Akte
        </label>
        <input class="form-control" value="{{$data->no_akte}}" readonly/>
    </div>

    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-calendar-event-fill" style="margin-right: 8px; color: navy;"></i>Tanggal Terbit
        </label>
        <input class="form-control" value="{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('d F Y') }}" readonly/>
    </div>

    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-person-vcard-fill" style="margin-right: 8px; color: navy;"></i>Notaris
        </label>
        <input class="form-control" value="{{$data->nama_notaris}}" readonly/>
    </div>

    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-check-circle-fill" style="margin-right: 8px; color: navy;"></i>Pengesahan
        </label>
        <input class="form-control" value="{{$data->no_pengesahan}}" readonly/>
    </div>

</div>
<!-- End Right Column -->


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
                        <a href="/bebujkkonstruksi">
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
