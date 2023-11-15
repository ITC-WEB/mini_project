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
                    <form class="forms-sample" method="POST" action="/create-sopir">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Phone</label>
                            <input name="phone" type="number" class="form-control" id="exampleInputEmail3" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="custom-select" name="gender" id="inputGroupSelect01" required>
                                <option>---Pilih---</option>
                                <option name="male" value="male">Male</option>
                                <option name="female" value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Usia</label>
                            <input name="usia" type="number" class="form-control" id="exampleInputName1" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Address</label>
                            <input name="alamat" type="text" class="form-control" id="exampleInputName1" required>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/add-admin" class="btn btn-light">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection