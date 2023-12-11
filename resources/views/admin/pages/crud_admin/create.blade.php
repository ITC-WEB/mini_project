@extends('admin.layout.app')
@section('title')
Create Data Admin
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="/add-admin">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </a>
                    <h4 class="card-title">Tambah Data Admin</h4>
                    <form class="forms-sample" method="POST" action="/create">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Lengkap <span class="text-danger">*</span></label>
                            <input name="name" type="text" class="form-control rounded-pill" id="exampleInputName1" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email <span class="text-danger">*</span></label>
                            <input name="email" type="email" class="form-control rounded-pill" id="exampleInputEmail3" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Password <span class="text-danger">*</span></label>
                            <input name="password" type="password" class="form-control rounded-pill" id="exampleInputPassword4" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Jenis Kelamin <span class="text-danger">*</span></label>
                            <select class="custom-select rounded-pill" name="gender" id="inputGroupSelect01" required>
                                <option>---Pilih---</option>
                                <option name="male" value="male">Laki - Laki</option>
                                <option name="female" value="female">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Nomor Hp/WhatsApp <span class="text-danger">*</span></label>
                            <input name="phone" type="text" class="form-control rounded-pill" id="exampleInputName1" placeholder="0876XXXXXXXX" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Alamat <span class="text-danger">*</span></label>
                            <input name="alamat" type="text" class="form-control rounded-pill" id="exampleInputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Role</label>
                            <input name="role_id" type="text" class="form-control rounded-pill" id="exampleInputEmail3" placeholder="Admin" disabled>
                        </div>
                        <button type="submit" class="btn mr-2" style="background-color: #FD5D3B;color:#fff">SUBMIT</button>
                        <a href="/add-admin" class="btn border" style="background-color: #fff;color:#000000">CLOSE</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection