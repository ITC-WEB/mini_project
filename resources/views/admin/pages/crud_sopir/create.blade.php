@extends('admin.layout.app')
@section('title')
    Create Data Sopir
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data Sopir</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="forms-sample" method="POST" action="/create-sopir" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Lengkap</label>
                                <input name="name" type="text" class="form-control rounded-pill"
                                    id="exampleInputName1" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Nomor HP/Whatsapp</label>
                                <input name="phone" type="number" class="form-control rounded-pill"
                                    id="exampleInputEmail3" placeholder="Phone" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Jenis Kelamin</label>
                                <select class="custom-select rounded-pill" name="gender" id="inputGroupSelect01" required>
                                    <option>---Pilih---</option>
                                    <option name="male" value="male">Male</option>
                                    <option name="female" value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Usia</label>
                                <input name="usia" type="number" class="form-control rounded-pill"
                                    id="exampleInputName1" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Alamat</label>
                                <input name="alamat" type="text" class="form-control rounded-pill"
                                    id="exampleInputName1" required>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Foto KTP<span class="text-danger">*</span></label>
                                <input name="gambar" type="file" class="form-control-file" required>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Foto SIM<span class="text-danger">*</span></label>
                                <input name="gambar" type="file" class="form-control-file" required>
                            </div>
                            <button type="submit" class="btn mr-2"
                                style="background-color: #FD5D3B;color:#fff">SUBMIT</button>
                            <a href="/add-admin" class="btn border" style="background-color: #fff;color:#000000">CLOSE</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
