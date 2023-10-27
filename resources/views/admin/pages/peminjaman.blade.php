@extends('admin.layout.app')
@section('title')
Data Peminjam
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
                                        Username
                                    </th>
                                    <th>
                                        Mobil
                                    </th>
                                    <th>
                                        Tanggal Mulai
                                    </th>
                                    <th>
                                        Tanggal Selesai
                                    </th>
                                    <th>
                                        Biaya
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($pinjam as $pinjams )
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $pinjams->user->name }}
                                    </td>
                                    <td>
                                        {{ $pinjams->mobil->name }}
                                    </td>
                                    <td>
                                        {{ $pinjams->tanggal_mulai }}
                                    </td>
                                    <td>
                                        {{ $pinjams->tanggal_selesai }}
                                    </td>
                                    <td>
                                        Rp.{{ $pinjams->biaya }}
                                    </td>
                                    <td>
                                        <button type="submit" style="border: none;" class="badge badge-danger">Belum Bayar</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection