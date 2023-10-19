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
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="forms-sample" method="POST" action="/create-mobil" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Noplat</label>
                            <input name="noplat" type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail3">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Merek</label>
                            <select class="custom-select" name="merek_id" id="inputGroupSelect01">
                                <option selected>---Pilih---</option>
                                <option value="1">Honda</option>
                                <option value="2">Toyota</option>
                                <option value="3">Suzuki</option>
                                <option value="4">Daihatsu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tahun Dibuat</label>
                            <input name="tahun" type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Harga Sewa</label>
                            <input name="harga_sewa" type="text" class="form-control" id="exampleInputName1">
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input name="gambar" type="file" class="form-control" id="gambar" accept="image/">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/data-mobil" class="btn btn-light">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection