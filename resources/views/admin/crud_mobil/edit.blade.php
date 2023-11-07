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
                    <form class="forms-sample" method="POST" action="{{ route('mobil.update', ['id' => $mobil->id]) }}" enctype="multipart/form-data">
                        @csrf

                        <h3 class="mb-3">Edit Mobil</h3>
                        <hr>
                        <div class="form-group">
                            <label for="exampleInputName1">Noplat</label>
                            <input name="noplat" type="text" class="form-control" id="exampleInputName1" value="{{ $mobil->noplat }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail3" value="{{ $mobil->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Merek</label>
                            <select class="custom-select" name="merek_id" id="inputGroupSelect01">
                                <option value="{{ $mobil->merek->id }}">{{ $mobil->merek->name }}</option>
                                <option value="1">honda</option>
                                <option value="2">toyota</option>
                                <option value="3">suzuki</option>
                                <option value="4">daihatsu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tahun Dibuat</label>
                            <input name="tahun" type="text" class="form-control" id="exampleInputName1" value="{{ $mobil->tahun }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Kapasitas</label>
                            <input name="kapasitas" type="text" class="form-control" id="exampleInputName1" value="{{ $mobil->kapasitas }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="5">{{$mobil->deskripsi}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Type</label>
                            <select class="custom-select" name="type" id="inputGroupSelect01">
                                <option value="{{$mobil->type}}">{{ $mobil->type }}</option>
                                @if ($mobil->type == 'matic')
                                <option value="persneling">persneling</option>
                                @else
                                <option value="matic">matic</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Harga Sewa</label>
                            <input name="harga_sewa" type="text" class="form-control" id="exampleInputName1" value="{{$mobil->harga_sewa}}">
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input name="gambar" type="file" class="form-control-file" id="gambar" accept="image/">
                            <input type="hidden" name="current_image" value="{{ $mobil->gambar }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Status</label>
                            <select class="custom-select" name="status" id="inputGroupSelect01">
                                <option value="{{ $mobil->status }}">{{$mobil->status}}</option>
                                @if ($mobil->status == 'disewa')
                                <option value="tersedia">tersedia</option>
                                @else
                                <option value="disewa">disewa</option>
                                @endif
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