@extends('admin.layout.app')
@section('title')
Show
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="py-5">
                        <div class="row">
                            @if ($bukti->bukti !== NULL)
                            <img src="#" class="col-6" style="width:300px;height:auto; border-radius:40px" alt="bukti_transfer">
                            @else
                            <div class="col-md-12 text-center">
                                <h3 class="font-weight-bold">Belum ada Bukti Transfer</h3>
                            </div>

                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection