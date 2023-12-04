@extends('admin.layout.app')
@section('title')
Detail Peminjam
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-11 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="py-5">
                        <div class="row">

                            <div class="col-lg-8 mb-4">
                                <h3 class="font-weight-bold">Data Pengajuan Peminjaman</h3>
                                <div class="card mb-4">
                                    <div class="card-body font-weight-bold">

                                        <div class="row mb-2">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Name Peminjam</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class=" mb-0">: {{$dataPinjam->user->name}}</p>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class=" mb-0">: {{ $dataPinjam->user->email }}</p>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Nomer Hp</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class=" mb-0">: {{ $dataPinjam->user->phone }}</p>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Jenis Kelamin</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class=" mb-0">: {{ $dataPinjam->user->gender }}</p>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Alamat Lengkap</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class=" mb-0 text-truncate" style="max-width: 300px;white-space: normal;">: {{ $dataPinjam->user->alamat }}</p>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Data KTP</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <a href="{{url('storage/'.$dataPinjam->user->data->ktp)}}" class="text-decoration-none mb-0">: <span class=" mb-0 font-weight-bold text-danger">Lihat Data</span></a>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Data SIM</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <a href="{{url('storage/'.$dataPinjam->user->data->sim)}}" class="text-decoration-none mb-0">: <span class=" mb-0 font-weight-bold text-danger">Lihat Data</span></a>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-12">
                                                <p class="mb-0">Bukti Pembayaran</p>
                                            </div>
                                            @if ($dataPinjam->bukti_id != NULL)
                                            <div class="col-sm-12 mx-4"><br>
                                                <a href="{{url('storage/'.$dataPinjam->bukti->bukti)}}" class="mb-0 text-primary"><i class="bi bi-file-earmark-richtext-fill" style="font-size: 4rem;"></i></a>
                                            </div>
                                            @else
                                            <div class="col-sm-12 mx-4"><br>
                                                <a href="" class="mb-0 text-danger"><i class="bi bi-file-earmark-richtext-fill" style="font-size: 4rem;"></i></a>
                                            </div>
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4">
                                <div class="card py-4 ">
                                    <div class="card-body text-center">
                                        <img src="{{asset('admin/images/faces/face2.jpg') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 250px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center ">
                            <a href="/data-pinjam"><button type="button" class="btn" style="background-color: #FD5D3B;color:#fff">CLOSE</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

        @push('prepend-style')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        @endpush