@extends('admin.layout.app')
@section('title')
Show
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="py-5">
                        <h3 class="font-weight-bold">View Mobil</h3>
                        <div class="row ">

                            <div class="col-lg-12 mb-2 ">
                                <img src="{{asset('storage/'.$detail_mobil->gambar)}}" class="card-img-top " style="width:50%;display:block;margin:0 auto;" alt="...">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <h3 style="text-decoration: underline;text-decoration-color: #FD5D3B;text-decoration-thickness: 4px;">{{$detail_mobil->name}}</h3>
                            </div>
                            <div class="col-lg-6 border-right ">
                                <h6 class="mb-3">Nomer Kendaraan: <span class="font-weight-bold">{{$detail_mobil->noplat}}</span></h6>
                                <h6 class="mb-3">Merek: <span class="font-weight-bold"> {{$detail_mobil->merek->name}}</span></h6>
                                <h6 class="mb-3">Kapasitas Penumpang: <span class="font-weight-bold">{{$detail_mobil->kapasitas_orang}} Orang</span></h6>
                                <h6 class="mb-3">Kapasitas Mesin: <span class="font-weight-bold"> {{$detail_mobil->kapasitas_mesin}}</span></h6>
                            </div>

                            <div class="col-lg-5 mx-4">
                                <h6 class="text-capitalize mb-3">Bahan Bakar: <span class="font-weight-bold">{{$detail_mobil->bahan_bakar}}</span></h6>
                                <h6 class="text-capitalize mb-3">Tipe Transmisi: <span class="font-weight-bold">{{$detail_mobil->type}}</span></h6>
                                <h6 class="card-text mb-3">Fitur Tersedia :<span class="font-weight-bold"> {{ $detail_mobil->fitur_tersedia }}</h6>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <h3>Harga Sewa/Hari: <span class="font-weight-bold" style="color:#0094FE">Rp.{{$detail_mobil->harga_sewa}}</span></h3>
                                <p>Data Diupdate: {{$detail_mobil->created_at}}</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="/data-mobil" class="btn btn-md mt-4" style="background-color: #FD5D3B; color:#fff">CLOSE</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endsection