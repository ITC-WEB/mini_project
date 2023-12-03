@extends('admin.layout.app')
@section('title')
Data Peminjaman
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Peminjaman</h4>
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
                                        {{ $pinjams->biaya }}
                                    </td>
                                    <td>
                                        @if ($pinjams->status == 'selesai')
                                        <a href="{{ route('edit',['id' => $pinjams->id])}}"><button type="submit" style="border: none;" class="badge badge-success">{{ $pinjams->status }}</button></a>
                                        @elseif ($pinjams->status == 'sedangdisewa')
                                        <a href="{{ route('edit',['id' => $pinjams->id])}}"><button type="submit" style="border: none;" class="badge badge-warning">{{ $pinjams->status }}</button></a>
                                        @else
                                        <a href="{{ route('edit',['id' => $pinjams->id])}}"><button type="submit" style="border: none;" class="badge badge-danger">{{ $pinjams->status }}</button></a>
                                        @endif
                                        <a href="{{ route('detail_pinjam',['id' => $pinjams->id]) }}"><button type="submit" style="border: none;" class="badge badge-success"><i class="icon-eye menu-icon"></i></button></a>
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