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
                        <div class="row justify-content-center">
                            <div class="card" style="width: 50rem;">
                                <img src="{{asset('storage/'.$detail_mobil->gambar)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5>Name Mobil: <span class="font-weight-bold">{{ $detail_mobil->name }}</span></h5>
                                    <hr>
                                    <h6>Nomer Kendaraan: <span class="font-weight-bold">{{$detail_mobil->noplat}}</span></h6>
                                    <hr>
                                    <h6>Merek: <span class="font-weight-bold">{{$detail_mobil->merek->name}}</span></h6>
                                    <hr>
                                    <h6>Kapasitas Penumpang: <span class="font-weight-bold">{{$detail_mobil->kapasitas_orang}} Orang</span></h6>
                                    <hr>
                                    <h6>Kapasitas Mesin: <span class="font-weight-bold">{{$detail_mobil->kapasitas_mesin}}</span></h6>
                                    <hr>
                                    <h6 class="text-capitalize">Bahan Bakar: <span class="font-weight-bold">{{$detail_mobil->bahan_bakar}}</span></h6>
                                    <hr>
                                    <h6 class="text-capitalize">Tipe Tranmisi: <span class="font-weight-bold">{{$detail_mobil->type}}</span></h6>
                                    <hr>
                                    <h6 class="card-text">Fitur Tersedia : {{ $detail_mobil->fitur_tersedia }}</h6>
                                    <hr>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <h3 class="list-group-item">Harga Sewa: <span class="font-weight-bold">Rp.{{$detail_mobil->harga_sewa}}</span></h3>
                                    <li class="list-group-item">Data Diupdate: <br>{{$detail_mobil->created_at}}</li>
                                </ul>
                                <a href="/data-mobil" class="btn btn-primary">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection