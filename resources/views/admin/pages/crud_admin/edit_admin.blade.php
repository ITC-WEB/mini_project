@extends('admin.layout.app')
@section('title')
Edit Admin
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Admin</h4>
                    <form class="forms-sample" method="POST" action="{{route('updating',['id' => $item->id])}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input name="name" value="{{$item->name}}" type="text" class="form-control rounded-pill" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input name="email" value="{{$item->email}}" type="email" class="form-control rounded-pill" id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Role</label>
                            <input name="role_id" type="text" value="{{$item->role->name}}" class="form-control rounded-pill" id="exampleInputEmail3" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="custom-select rounded-pill" name="gender" value="{{$item->gender}}" id="inputGroupSelect01">
                                <option name="male" value="male">Male</option>
                                <option name="female" value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Phone</label>
                            <input name="phone" value="{{$item->phone}}" type="text" class="form-control rounded-pill" id="exampleInputEmail3">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Address</label>
                            <input name="alamat" value="{{$item->alamat}}" type="text" class="form-control rounded-pill" id="exampleInputEmail3" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input name="password" type="password" class="form-control rounded-pill" id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <button type="submit" class="btn mr-2" style="background-color: #FD5D3B;color:#fff">UPDATE</button>
                        <a href="/add-admin" class="btn border" style="background-color: #fff;color:#000000">CLOSE</a>
                    </form>
                </div>
            </div>
        </div>
        @endsection