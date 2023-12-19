@extends('admin.layout.app')
@section('title')
Data Admin
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Admin</h4>
                    <a href="/create" class="card-title btn btn-sm btn-primary  text-white" style="font-size: 15px;"> + Tambah Data</a>
                    @if (Session::has('status'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <table id="dataAdmin" class="display table" style="width:100%">
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
                                    <a href="{{route('editadmin',['id' => $item->id])}}"><button type="submit" style="border: none;" class="badge badge-primary"><i class="bi bi-pencil-square"></i></button></a>
                                    <form action="{{ route('delete', $item->id) }}" method="POST" id="delete-form-{{ $item->id }}" class="d-inline">
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    @endpush

    @push('addon-script')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
        new DataTable('#dataAdmin');
    </script>
    @endpush