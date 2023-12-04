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
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="{{ asset('admin/images/dashboard/poeple-bg.svg') }}" height="200px" alt="people">
                        <div class="weather-info font-weight-bold text-dark">
                            <div class="d-flex">
                                <div>
                                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                                </div>
                                <div class="ml-2">
                                    <h4 class="location font-weight-normal">Bangalore</h4>
                                    <h6 class="font-weight-normal">India</h6>
                                </div>
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
                        <div class="card card-dark-blue">
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