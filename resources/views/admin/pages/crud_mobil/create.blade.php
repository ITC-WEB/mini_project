@extends('admin.layout.app')
@section('title')
Create Data
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="/data-mobil">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </a>

                    <h4 class="card-title">Tambah Data Mobil</h4>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="forms-sample" method="POST" action="/create-mobil" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nomer Kendaraan<span class="text-danger">*</span></label>
                            <input name="noplat" type="text" class="form-control rounded-pill" id="exampleInputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Name / Jenis Mobil<span class="text-danger">*</span></label>
                            <input name="name" type="text" class="form-control  rounded-pill" id="exampleInputEmail3" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Merek Mobil<span class="text-danger">*</span></label>
                            <select class="custom-select  rounded-pill" name="merek_id" id="inputGroupSelect01" required>
                                <option selected>---Pilih---</option>
                                <option value="1">Honda</option>
                                <option value="2">Toyota</option>
                                <option value="3">Suzuki</option>
                                <option value="4">Daihatsu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tahun Pembuatan<span class="text-danger">*</span></label>
                            <input name="tahun" type="text" class="form-control  rounded-pill" id="exampleInputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Kapasitas Penumpang<span class="text-danger">*</span></label>
                            <input name="kapasitas_orang" type="text" class="form-control  rounded-pill" id="exampleInputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Type Transmisi<span class="text-danger">*</span></label>
                            <select class="custom-select  rounded-pill" name="type" id="inputGroupSelect01" required>
                                <option selected>---Pilih---</option>
                                <option value="matic">Matic</option>
                                <option value="manual">Manual</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Jenis Bahan Bakar<span class="text-danger">*</span></label>
                            <select class="custom-select  rounded-pill" name="bahan_bakar" id="inputGroupSelect01" required>
                                <option selected>---Pilih---</option>
                                <option value="pertalite">Pertalite</option>
                                <option value="pertamax">Pertamax</option>
                                <option value="solar">Solar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Kapasitas Mesin<span class="text-danger">*</span></label>
                            <input name="kapasitas_mesin" type="text" class="form-control  rounded-pill" id="exampleInputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Harga Sewa/Hari<span class="text-danger">*</span></label>
                            <input name="harga_sewa" type="text" class="form-control  rounded-pill" id="exampleInputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Fitur Tersedia<span class="text-danger">*</span></label><br>
                            <label for="pilihan1">
                                <input type="checkbox" id="pilihan1" name="fitur_tersedia[]" value="Air Conditioner"> Air Conditioner
                            </label>

                            <label for="pilihan2">
                                <input type="checkbox" id="pilihan2" name="fitur_tersedia[]" value="Reverse Parking Camera"> Reverse Parking Camera
                            </label>
                            <label for="pilihan3">
                                <input type="checkbox" id="pilihan1" name="fitur_tersedia[]" value="Post Change"> Post Change
                            </label>

                            <label for="pilihan4">
                                <input type="checkbox" id="pilihan2" name="fitur_tersedia[]" value="Anti-lock Breaking System"> Anti-lock Breaking System
                            </label>
                            <label for="pilihan5">
                                <input type="checkbox" id="pilihan1" name="fitur_tersedia[]" value="Aux-in,Radio,DVD,CD,Mp3"> Aux-in,Radio,DVD,CD,Mp3
                            </label>

                            <label for="pilihan6">
                                <input type="checkbox" id="pilihan2" name="fitur_tersedia[]" value="Reclining Seat"> Reclining Seat
                            </label>

                            <label for="pilihan7">
                                <input type="checkbox" id="pilihan2" name="fitur_tersedia[]" value="Side Impact Beam"> Side Impact Beam
                            </label>
                        </div>
                        <div class="form-group">

                            <label for="gambar">Gambar Mobil<span class="text-danger">*</span></label>
                            <input name="gambar" type="file" class="form-control-file" required>

                        </div>
                        <button type="submit" class="btn mr-2" style="background-color: #FD5D3B;color:#fff">SUBMIT</button>
                        <a href="/data-mobil" class="btn border" style="background-color: #fff;color:#000000">CLOSE</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection