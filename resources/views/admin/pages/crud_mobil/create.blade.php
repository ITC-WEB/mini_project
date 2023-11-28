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
                    <h4 class="card-title">Tambah Data Mobil</h4>
                    <form class="forms-sample" method="POST" action="/create-mobil" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nomer Kendaraan</label>
                            <input name="noplat" type="text" class="form-control rounded-pill" id="exampleInputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Name / Jenis Mobil</label>
                            <input name="name" type="text" class="form-control  rounded-pill" id="exampleInputEmail3" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Merek Mobil</label>
                            <select class="custom-select  rounded-pill" name="merek_id" id="inputGroupSelect01" required>
                                <option selected>---Pilih---</option>
                                <option value="1">honda</option>
                                <option value="2">toyota</option>
                                <option value="3">suzuki</option>
                                <option value="4">daihatsu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tahun Pembuatan</label>
                            <input name="tahun" type="text" class="form-control  rounded-pill" id="exampleInputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Kapasitas Penumpang</label>
                            <input name="kapasitas_orang" type="text" class="form-control  rounded-pill" id="exampleInputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Type Transmisi</label>
                            <select class="custom-select  rounded-pill" name="type" id="inputGroupSelect01" required>
                                <option selected>---Pilih---</option>
                                <option value="matic">matic</option>
                                <option value="manual">manual</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Jenis Bahan Bakar</label>
                            <select class="custom-select  rounded-pill" name="bahan_bakar" id="inputGroupSelect01" required>
                                <option selected>---Pilih---</option>
                                <option value="pertalite">pertalite</option>
                                <option value="pertamax">pertamax</option>
                                <option value="solar">solar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Kapasitas Mesin</label>
                            <input name="kapasitas_mesin" type="text" class="form-control  rounded-pill" id="exampleInputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Harga Sewa</label>
                            <input name="harga_sewa" type="text" class="form-control  rounded-pill" id="exampleInputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Fitur Tersedia</label><br>
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

                            <label for="gambar">Gambar Mobil</label>
                            <input name="gambar" type="file" class="form-control rounded-pill">

                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/data-mobil" class="btn btn-light">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection