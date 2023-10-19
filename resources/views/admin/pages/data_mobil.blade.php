@extends('admin.layout.app')
@section('title')
Data Mobil
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Mobil</h4>
                    <a href="/create-mobil" class="card-title btn btn-primary text-white" style="font-size: 15px;"> + Tambah Data</a>
                    <div class="my-2 col-8">
                        <form action="" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" name="cari" placeholder="Cari">
                                <button class="input-group-text btn-primary">Search</button>
                            </div>
                        </form>
                    </div>

                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Noplat
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Merek
                                    </th>
                                    <th>
                                        Harga Sewa
                                    </th>
                                    <th>
                                        Gambar
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mobil as $mobils )
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $mobils->noplat }}
                                    </td>
                                    <td>
                                        {{ $mobils->name }}
                                    </td>
                                    <td>
                                        {{ $mobils->merek->name }}
                                    </td>
                                    <td>
                                        Rp. {{ $mobils->harga_sewa }}
                                    </td>
                                    <td>
                                        <img src="{{asset('storage/mobil/'.$mobils->gambar)}}" style="width: 140px;height:80px;border-radius: 10px;" alt="Mobil">
                                    </td>
                                    <td>
                                        <button type="submit" style="border: none;" class="badge badge-primary">Edit</button>
                                        <form action="/delete-mobil/{{ $mobils->id }}" method="post" class="d-inline">
                                            @csrf
                                            <button type="submit" style="border: none;" class="badge badge-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="my-5">
                            {{ $mobil->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection