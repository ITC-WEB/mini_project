@extends('frontend.layout.app')

@section('title')
ProfileCustumer
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="py-5">
                        <div class="row ">
                            <div class="col-lg-4">
                                <div class="card-body ml-5 d-flex flex-column align-items-center">
                                    <a href="/">
                                        @if (Auth::user()->gender == 'male')
                                        <img src="{{asset('frontend/images/man.png') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                        @else
                                        <img src="{{asset('frontend/images/woman.png') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                        @endif

                                    </a>
                                    <h5 class="my-3">
                                        {{ Auth::user()->name }}
                                    </h5>
                                    <div class="mb-2">
                                        <a href="{{ route('edit.customer',['id' => Auth::user()->id])}}">
                                            <button type="button" class="btn" style="background-color: #FD5D3B;color:#fff">EDIT</button>
                                        </a>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Username</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Gender</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->gender }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Phone</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->phone }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Address</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">{{ Auth::user()->alamat }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">KTP </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">
                                                    <a href="{{url('storage/'. Auth::user()->data->ktp)}}" style="color: blue">Lihat Selengkapnya</a>
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">SIM</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">
                                                    @if (Auth::user()->data->sim != NUll)
                                                    <a href="{{url('storage/'. Auth::user()->data->sim)}}" style="color: blue">Lihat Selengkapnya</a>
                                                    @else
                                                    <a href="#" style="color: red">Lihat Selengkapnya</a>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection