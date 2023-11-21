@extends('admin.layout.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                                        Nomer Kendaraan
                                    </th>
                                    <th>
                                        Name Mobil
                                    </th>
                                    <th>
                                        Merek
                                    </th>
                                    <th>
                                        Harga Sewa
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Action
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
                                    <!-- <td>
                                        <img src="{{asset('storage/public/mobil/'.$mobils->gambar)}}" style="width: 140px;height:80px;border-radius: 10px;" alt="Mobil">
                                    </td> -->
                                    <td>
                                        <a href="mobil/{{ $mobils->id}}" class="btn btn-sm btn-{{ $mobils->status ? 'success' : 'warning'  }}">
                                            {{ $mobils->status ? 'tersedia' : 'disewa' }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('edit-mobil',['id' => $mobils->id])}}"><button type="submit" style="border: none;" class="badge badge-primary">Edit</button></a>
                                        <a href="{{ route('show-mobil',['id' => $mobils->id])}}"><button type="submit" style="border: none;" class="badge badge-success"><i class="icon-eye menu-icon"></i></button></a>
                                        <form action="{{ route('delete-mobil', $mobils->id) }}" method="POST" id="delete-form-{{ $mobils->id }}" class="d-inline">
                                            @csrf
                                            <button type="button" class="badge badge-danger delete" style="border:none;" data-id="{{ $mobils->id }}">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="d-flex justify-content-end my-5">
                        {{ $mobil->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @include('admin.includes.sweetalert')
    @endsection