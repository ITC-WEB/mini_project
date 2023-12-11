@extends('frontend.layout.app')

@section('title')
editcustomer
@endsection

@section('content')
<div class="main-panel">
  <div class="contetnt-wrapper">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title font-weight-bold">Edit Customer</h4>
          <form class="forms-sample" method="POST" action="{{ route('update.customer', ['id' => Auth::user()->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputName1">Username</label>
              <input name="name" value="{{Auth::user()->name}}" type="text" class="form-control rounded-pill" id="exampleInputName1" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Email address</label>
              <input name="email" value="{{Auth::user()->email}}" type="email" class="form-control rounded-pill" id="exampleInputEmail3" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleSelectGender">Jenis Kelamin</label>
              <select class="custom-select rounded-pill" name="gender" value="{{Auth::user()->gender}}" id="inputGroupSelect01">
                <option selected>{{Auth::user()->gender}}</option>
                <option name="male" value="male">Male</option>
                <option name="female" value="female">Female</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Nomer HP</label>
              <input name="phone" value="{{Auth::user()->phone}}" type="text" class="form-control rounded-pill" id="exampleInputEmail3">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Alamat Lengkap</label>
              <input name="alamat" value="{{Auth::user()->alamat}}" type="text" class="form-control rounded-pill" id="exampleInputEmail3" placeholder="Alamat">
            </div>
            <div class="form-group1 mb-3">
              <label for="exampleInputEmail3">Upload KTP</label>
              <input type="file" class="form-control  rounded-pill" name="ktp" id="inputGroupFile02">
            </div>
            <div class="form-group1 mb-3">
              <label for="exampleInputEmail3">Upload SIM</label>
              <input type="file" class="form-control  rounded-pill" name="sim" id="inputGroupFile02">
            </div>
            <div class="form-group1 mb-3">
              <label for="exampleInputEmail3">Upload Photo</label>
              <input type="file" class="form-control  rounded-pill" name="photo" id="inputGroupFile02">
            </div>
            <button type="submit" class="btn mr-2" style="background-color: #FD5D3B;color:#fff">UPDATE</button>
            <a href="{{ url('/profilecustumer') }}" class="btn border" style="background-color: #fff;color:#000000">CLOSE</a>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection