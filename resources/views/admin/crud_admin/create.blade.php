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
                    <h4 class="card-title">Tambah Data Admin</h4>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="forms-sample" method="POST" action="/create">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Role</label>
                            <input name="role_id" type="text" class="form-control" id="exampleInputEmail3" placeholder="Admin" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="custom-select" name="gender" id="inputGroupSelect01">
                                <option>---Pilih---</option>
                                <option name="male" value="male">Male</option>
                                <option name="female" value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Phone</label>
                            <input name="phone" type="text" class="form-control" id="exampleInputName1" placeholder="0876XXXXXXXX">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Address</label>
                            <input name="alamat" type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/add-admin" class="btn btn-light">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection