@extends('admin.layout.app')
@section('title')
@if (Auth::user()->role_id == '1')
Super
@endif
Admin
@endsection
@section('content')
<div class="main-panel">
    @include('sweetalert::alert')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card card-dark-blue">
                    <div class="card-people  ">
                        <div class="d-flex">
                            <div class="mx-4 text-white">
                                <h1 class="mb-4 font-weight-bold ">Intermedia <br>Trans</h1>
                                <h2 class="font-weight-normal" id="tanggalContainer"> </h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <a href="/data-pinjam" style="color:#ffff;text-decoration:none;">
                                    <p class="mb-4">Pesanan Masuk</p>
                                    <p class="fs-30 mb-2">{{ $boking }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card " style="background-color: #0094FE;">
                            <div class="card-body">
                                <a href="/data-pinjam" style="color:#ffff;text-decoration:none;">
                                    <p class="mb-4">Butuh Validasi</p>
                                    <p class="fs-30 mb-2">{{ $validasi }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <a href="/data-pinjam" style="color:#ffff;text-decoration:none;">
                                    <p class="mb-4">Sedang Di Sewa</p>
                                    <p class="fs-30 mb-2">{{ $disewa }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <a href="/data-pinjam" style="color:#ffff;text-decoration:none;">
                                    <p class="mb-4">Sewa Selesai</p>
                                    <p class="fs-30 mb-2">{{ $selesai }}</p>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Statistik Penyewaan 1 Tahun</h4>
                        <canvas id="areaChart" height="100px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('addon-script')
    <script>
        // Membuat objek Date yang merepresentasikan tanggal hari ini
        var hariIni = new Date();

        // Mendapatkan informasi tahun, bulan, dan tanggal
        var tahun = hariIni.getFullYear();
        var bulan = hariIni.getMonth() + 1; // Ingat, bulan dimulai dari 0
        var tanggal = hariIni.getDate();

        // Format informasi tanggal
        var tanggalFormatted = tanggal + "/" + bulan + "/" + tahun;

        // Menampilkan informasi tanggal dalam elemen HTML
        var elemenTanggal = document.getElementById("tanggalContainer");
        elemenTanggal.innerHTML = "Hari ini: " + tanggalFormatted;
    </script>
    @endpush