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
                    <a href="/create-customer" class="card-title btn btn-primary text-white" style="font-size: 15px;"> + Tambah Data</a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        User
                                    </th>
                                    <th>
                                        Full Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Role
                                    </th>
                                    <th>
                                        Gender
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                    <th>
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
                                        <img src="{{asset('admin/images/faces/face6.jpg')}}" alt="image" />
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
                                        <form action="/show/{{ $item->id }}" method="Get" class="d-inline">
                                            @csrf
                                            <button type="submit" style="border: none;" class="badge badge-primary"><i class="icon-eye menu-icon"></i></button>
                                        </form>
                                        <form action="/delete-customer/{{ $item->id }}" method="post" class="d-inline">
                                            @csrf
                                            <button type="submit" style="border: none;" class="badge badge-danger">Delete</button>
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