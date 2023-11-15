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
                    <a href="/create" class="card-title btn btn-primary text-white" style="font-size: 15px;"> + Tambah Data</a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Gender
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                    <th class="text-truncate" style="max-width: 200px;white-space: normal;"> >
                                        Alamat
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item )
                                <tr>
                                    <td class="py-2">
                                        <img src="{{asset('admin/images/faces/face2.jpg')}}" alt="image" />
                                    </td>
                                    <td>
                                        {{ $item->name }}
                                    </td>
                                    <td>
                                        {{ $item->email }}
                                    </td>
                                    <td>
                                        {{ $item->role->name }}
                                    </td>
                                    <td>
                                        {{ $item->gender }}
                                    </td>
                                    <td>
                                        {{ $item->phone }}
                                    </td>
                                    <td>
                                        {{ $item->alamat }}
                                    </td>

                                    <td>
                                        <label class="badge badge-success">Active</label>
                                        <form action="{{ route('delete', $item->id) }}" method="POST" id="delete-form-{{ $item->id }}" class="d-inline">
                                            @csrf
                                            <button type="button" class="badge badge-danger delete" style="border:none;" data-id="{{ $item->id }}">Delete</button>
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
    </div>
    @include('admin.includes.sweetalert')
    @endsection