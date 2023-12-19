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
                    <table id="dataCustomer" class="display table">
                        <thead>
                            <tr class="bg-primary text-light">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jenis Kelamin</th>
                                <th>Nomor Hp</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td> {{ $item->gender }}</td>
                                <td>{{ $item->phone }}</td>
                                <td class="text-truncate" style="max-width: 150px;white-space: normal;">{{ $item->alamat }}</td>
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
            </div>
        </div>
        @endsection
        @push('addon-style')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
        @endpush

        @push('addon-script')
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script>
            new DataTable('#dataCustomer');
        </script>
        @endpush