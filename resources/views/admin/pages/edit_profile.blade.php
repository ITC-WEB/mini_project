@extends('admin.layout.app')
@section('title')
@if (Auth::user()->role_id == '1')
Edit Super
@elseif (Auth::user()->role_id == '2')
Edit Admin
@endif
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if (Auth::user()->role_id == '1')
                    <h4 class="card-title">Edit Data Super Admin</h4>
                    @elseif (Auth::user()->role_id == '2')
                    <h4 class="card-title">Edit Data Admin</h4>
                    @endif
                    <form class="forms-sample" method="POST" action="/update">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input name="name" value="{{ Auth::user()->name }}" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input name="email" value="{{ Auth::user()->email }}" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Role</label>
                            <input name="role_id" type="text" class="form-control" id="exampleInputEmail3" placeholder="Admin" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="custom-select" name="gender" value="{{ Auth::user()->gender }}" id="inputGroupSelect01">
                                <option name="male" value="male">Male</option>
                                <option name="female" value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Phone</label>
                            <input name="phone" value="{{ Auth::user()->phone }}" type="text" class="form-control" id="exampleInputEmail3">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Address</label>
                            <input name="alamat" value="{{ Auth::user()->alamat }}" type="text" class="form-control" id="exampleInputEmail3" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" disabled>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                        <a href="/profile" class="btn btn-light">Close</a>
                    </form>
                </div>
            </div>
        </div>
        @endsection