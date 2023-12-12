@extends('admin.layout.app')
@section('title')
Data Customer
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Customer</h4>
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
                                        Nama
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Jenis Kelamin
                                    </th>
                                    <th>
                                        Nomor HP/WhatsApp
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
                                @foreach ($data as $item )
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="text-truncate" style="min-width: 100px;white-space: normal;">
                                        {{ $item->name }}
                                    </td>
                                    <td>
                                        {{ $item->email }}
                                    </td>

                                    <td>
                                        {{ $item->gender }}
                                    </td>
                                    <td>
                                        {{ $item->phone }}
                                    </td>
                                    <td class="text-truncate" style="min-width: 200px;white-space: normal;">
                                        {{ $item->alamat }}
                                    </td>
                                    <td>
                                        <a href="{{ route('show',['id' => $item->id]) }}"><button type="submit" style="border: none;" class="badge badge-success"><i class="icon-eye menu-icon"></i></button></a>
                                        <form action="{{ route('delete-customer', $item->id) }}" method="POST" id="delete-form-{{ $item->id }}" class="d-inline">
                                            @csrf
                                            <button type="button" class="badge badge-danger delete" style="border:none;" data-id="{{ $item->id }}"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center my-5">
                        {{ $data->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
        @endsection

        @push('addon-style')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        @endpush