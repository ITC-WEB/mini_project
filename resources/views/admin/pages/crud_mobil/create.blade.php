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
                            <label for="exampleInputName1">Noplat</label>
                            <input name="noplat" type="text" class="form-control" id="exampleInputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail3" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Merek</label>
                            <select class="custom-select" name="merek_id" id="inputGroupSelect01" required>
                                <option selected>---Pilih---</option>
                                <option value="1">honda</option>
                                <option value="2">toyota</option>
                                <option value="3">suzuki</option>
                                <option value="4">daihatsu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tahun Dibuat</label>
                            <input name="tahun" type="text" class="form-control" id="exampleInputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Kapasitas</label>
                            <input name="kapasitas" type="text" class="form-control" id="exampleInputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Type</label>
                            <select class="custom-select" name="type" id="inputGroupSelect01" required>
                                <option selected>---Pilih---</option>
                                <option value="matic">matic</option>
                                <option value="persneling">persneling</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Harga Sewa</label>
                            <input name="harga_sewa" type="text" class="form-control" id="exampleInputName1" required>
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input name="gambar" type="file" class="form-control-file" id="gambar" accept="image/">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Status</label>
                            <select class="custom-select" name="status" id="inputGroupSelect01">
                                <option selected>---Pilih---</option>
                                <option value="1">tersedia</option>
                                <option value="0">disewa</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/data-mobil" class="btn btn-light">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection