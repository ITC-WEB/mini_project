@extends('admin.layout.app')
@section('title')
Data Sopir
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Sopir</h4>
                    <a href="/create-sopir" class="card-title btn btn-primary text-white" style="font-size: 15px;"> + Tambah Data</a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                    <th>
                                        Gender
                                    </th>
                                    <th>
                                        Usia
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
                                        <label class="badge badge-success">Active</label>
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