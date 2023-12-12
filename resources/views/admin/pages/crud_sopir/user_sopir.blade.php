@extends('admin.layout.app')
@section('title')
Data Driver
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Driver</h4>
                    <a href="/create-sopir" class="card-title btn btn-primary text-white" style="font-size: 15px;"> +
                        Tambah Data</a>
                    @if (Session::has('status'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Nama Lengkap
                                    </th>
                                    <th>
                                        Nomor Hp/WhataApp
                                    </th>
                                    <th>
                                        Jenis Kelamin
                                    </th>
                                    <th>
                                        Usia
                                    </th>
                                    <th>
                                        Alamat Lengkap
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $item->name }}
                                    </td>
                                    <td>
                                        {{ $item->phone }}
                                    </td>
                                    <td>
                                        {{ $item->gender }}
                                    </td>
                                    <td>
                                        {{ $item->usia }}
                                    </td>
                                    <td>
                                        {{ $item->alamat }}
                                    </td>
                                    <td>
                                        <a href="{{ route('edit-sopir', ['id' => $item->id]) }}"><button type="submit" style="border: none;" class="badge badge-primary"><i class="bi bi-pencil-square"></i></button></a>
                                        <a href="{{ route('data-sopir', ['id' => $item->id]) }}"><button type="submit" style="border: none;" class="badge badge-success"><i class="icon-eye menu-icon"></i></button></a>
                                        <form action="{{ route('delete-sopir', $item->id) }}" method="POST" id="delete-form-{{ $item->id }}" class="d-inline">
                                            @csrf
                                            <button type="button" class="badge badge-danger delete" style="border:none;" data-id="{{ $item->id }}"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endsection

        @push('addon-style')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        @endpush