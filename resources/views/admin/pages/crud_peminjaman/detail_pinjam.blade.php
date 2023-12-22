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
                                            <div class="col-sm-6">
                                                <p class="mb-0">Name Peminjam</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class=" mb-0">: {{$dataPinjam->user->name}}</p>
                                            </div>
                                        </div>
                                        @if ($dataPinjam->sopir !=NULL)
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <p class="mb-0">Memakai Jasa Sopir</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- Button trigger modal -->
                                                <p class="text-primary" data-toggle="modal" data-target="#sopir" style="cursor: pointer;">
                                                    : {{ $dataPinjam->sopir->name }}
                                                </p>

                                                <!-- Modal -->
                                                <div class="modal fade" id="sopir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="sopir">Nama Sopir</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="forms-sample" method="POST" action="">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <select class="custom-select" name="sopir_id" id="inputGroupSelect2">
                                                                            <option value="{{ $dataPinjam->sopir->id }}">{{ $dataPinjam->sopir->name }}</option>
                                                                            @if ($dataPinjam->sopir->name == 'Bagus')
                                                                            <option value="2">Blabur</option>
                                                                            <option value="3">Riyan</option>
                                                                            <option value="4">Anton</option>
                                                                            @elseif ($dataPinjam->sopir->name == 'Blabur')
                                                                            <option value="1">Bagus</option>
                                                                            <option value="3">Riyan</option>
                                                                            <option value="4">Anton</option>
                                                                            @elseif ($dataPinjam->sopir->name == 'Riyan')
                                                                            <option value="1">Bagus</option>
                                                                            <option value="2">Blabur</option>
                                                                            <option value="4">Anton</option>
                                                                            @else
                                                                            <option value="1">Bagus</option>
                                                                            <option value="2">Blabur</option>
                                                                            <option value="3">Riyan</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-sm btn-primary mr-2">Simpan</button>
                                                                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                                                                </form>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @endif

                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class=" mb-0">: {{ $dataPinjam->user->email }}</p>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <p class="mb-0">Nomer Hp</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class=" mb-0">: {{ $dataPinjam->user->phone }}</p>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <p class="mb-0">Jenis Kelamin</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class=" mb-0">: {{ $dataPinjam->user->gender }}</p>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <p class="mb-0">Alamat Lengkap</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class=" mb-0 text-truncate" style="max-width: 300px;white-space: normal;">: {{ $dataPinjam->user->alamat }}</p>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <p class="mb-0">Data KTP</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="{{url('storage/'.$dataPinjam->user->data->ktp)}}" target="_blank" class="text-decoration-none mb-0">: <span class=" mb-0 font-weight-bold text-primary">Lihat Data</span></a>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <p class="mb-0">Data SIM</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="{{url('storage/'.$dataPinjam->user->data->sim)}}" target="_blank" class="text-decoration-none mb-0">: <span class=" mb-0 font-weight-bold text-primary">Lihat Data</span></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <p class="mb-0">Bukti Pembayaran</p>
                                            </div>
                                            @if ($dataPinjam->bukti_id != NULL)
                                            <div class="col-sm-6">
                                                <a href="{{url('storage/'.$dataPinjam->bukti->bukti)}}" target="_blank" class="mb-0 text-primary"><i class="bi bi-file-earmark-richtext-fill" style="font-size: 2rem;"></i></a>
                                            </div>
                                            @else
                                            <div class="col-sm-6">
                                                <button type="button" class="text-danger" style="border: none;background-color:#ffff;" data-toggle="tooltip" data-placement="right" title="File Kosong">
                                                    <i class="bi bi-file-earmark-richtext-fill" style="font-size: 2rem;"></i>
                                                </button>
                                            </div>
                                            @endif

                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <p class="mb-0">Status</p>
                                            </div>
                                            <!-- Button trigger modal -->
                                            @if ($dataPinjam->status == 'belumbayar')
                                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">
                                                {{ $dataPinjam->status }}
                                            </button>
                                            @elseif ($dataPinjam->status == 'sedangdisewa')
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                {{ $dataPinjam->status }}
                                            </button>
                                            @elseif ($dataPinjam->status == 'tidakvalid')
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                {{ $dataPinjam->status }}
                                            </button>
                                            @elseif ($dataPinjam->status == 'terlambat')
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal">
                                                {{ $dataPinjam->status }}
                                            </button>
                                            @else
                                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal">
                                                {{ $dataPinjam->status }}
                                            </button>
                                            @endif

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Validasi</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="forms-sample" method="POST" action="{{ route('update', ['id' => $dataPinjam->id]) }}" enctype="multipart/form-data">
                                                                @csrf

                                                                <div class="form-group">
                                                                    <label for="">Status Peminjaman</label>
                                                                    <select class="custom-select" name="status" id="inputGroupSelect01">
                                                                        <option value="{{ $dataPinjam->status }}">{{ $dataPinjam->status }}</option>
                                                                        @if ($dataPinjam->status == 'sedangdisewa')
                                                                        <option value="belumbayar">Belum Bayar</option>
                                                                        <option value="tidakvalid">Tidak Valid</option>
                                                                        <option value="terlambat">Terlambat</option>
                                                                        <option value="selesai">Selesai</option>
                                                                        @elseif ($dataPinjam->status == 'selesai')
                                                                        <option value="sedangdisewa">Sedang Di Sewa</option>
                                                                        <option value="belumbayar">Belum Bayar</option>
                                                                        <option value="tidakvalid">Tidak Valid</option>
                                                                        <option value="terlambat">Terlambat</option>
                                                                        @elseif ($dataPinjam->status == 'tidakvalid')
                                                                        <option value="sedangdisewa">Sedang Di Sewa</option>
                                                                        <option value="belumbayar">Belum Bayar</option>
                                                                        <option value="selesai">Selesai</option>
                                                                        <option value="terlambat">Terlambat</option>
                                                                        @elseif ($dataPinjam->status == 'terlambat')
                                                                        <option value="sedangdisewa">Sedang Di Sewa</option>
                                                                        <option value="belumbayar">Belum Bayar</option>
                                                                        <option value="selesai">Selesai</option>
                                                                        <option value="tidakvalid">Tidak Valid</option>
                                                                        @else
                                                                        <option value="selesai">Selesai</option>
                                                                        <option value="tidakvalid">Tidak Valid</option>
                                                                        <option value="terlambat">Terlambat</option>
                                                                        <option value="sedangdisewa">Sedang Di Sewa</option>
                                                                        @endif
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Status Mobil</label>
                                                                    <select class="custom-select" name="status_mobil" id="inputGroupSelect01">
                                                                        <option value="{{ $dataPinjam->mobil->status_mobil }}">{{ $dataPinjam->mobil->status_mobil }}</option>
                                                                        @if ($dataPinjam->mobil->status_mobil == 'tersedia')
                                                                        <option value="disewa">disewa</option>
                                                                        @else
                                                                        <option value="tersedia">tersedia</option>
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                                <button type="submit" class="btn btn-sm btn-primary mr-2">Simpan</button>
                                                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4">
                                <div class="card py-4 ">
                                    <div class="card-body text-center">
                                        @if($dataPinjam->user->data->photo != NULL )
                                        <img src="{{asset('storage/'.$dataPinjam->user->data->photo) }}" alt="avatar" class="rounded-circle img-fluid" style="width: 250px; height: 250px;">
                                        @elseif($dataPinjam->user->gender == 'male' )
                                        <img src="{{asset('frontend/images/man.png') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 250px;">
                                        @else
                                        <img src="{{asset('frontend/images/woman.png') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 250px;">
                                        @endif
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