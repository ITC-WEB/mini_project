@extends('admin.layout.app')
@section('title')
Edit Data
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{ route('sopir.update', ['id' => $sopir->id]) }}" enctype="multipart/form-data">
                        @csrf

                        <h3 class="mb-3">Edit Driver</h3>
                        <hr>

                        <div class="form-group">
                            <label for="exampleInputName1">Nama Lengkap</label>
                            <input name="name" type="text" class="form-control rounded-pill" id="exampleInputName1" value="{{ $sopir->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Nomer Hanphone/WhatsApp </label>
                            <input name="phone" type="text" class="form-control rounded-pill" id="exampleInputEmail3" value="{{ $sopir->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Jenis Kelamin</label>
                            <select class="custom-select rounded-pill" name="gender" value="{{$sopir->gender}}" id="inputGroupSelect01" required>
                                <option name="male" value="male">Laki-laki</option>
                                <option name="female" value="female">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Usia</label>
                            <input name="usia" type="text" class="form-control rounded-pill" id="exampleInputName1" value="{{ $sopir->usia }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Tarif Perhari</label>
                            <input name="tarif" type="text" class="form-control rounded-pill" id="exampleInputName1" value="{{ $sopir->tarif }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Alamat</label>
                            <input name="alamat" type="text" class="form-control rounded-pill" id="exampleInputName1" value="{{ $sopir->alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Foto KTP <span class="text-danger">*</span></label>
                            <input name="ktp" type="file" class="form-control-file" id="ktp" accept="image/" required>
                            <img src="" class="mt-2" id="img-view" style="width: 100px;">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Foto SIM <span class="text-danger">*</span></label>
                            <input name="sim" type="file" class="form-control-file" id="sim" accept="image/" required>
                            <img src="" class="mt-2" id="img-view" style="width: 100px;">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <a href="/add-sopir" class="btn btn-light">Close</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @endsection