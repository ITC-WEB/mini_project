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
                            <img src="{{ asset('storage/public/ktp/'. $detail->data->ktp) }}" class="col-6" style="width:300px;height:auto; border-radius:40px" alt="ktp">
                            <img src="{{ asset('storage/public/sim/'. $detail->data->sim) }}" class="col-6" style="width: 300px;height:auto;border-radius:40px" alt="sim">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($detail->data->bukti_transfer !== NULL)
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="py-5">
                        <div class="row">
                            <img src="#" class="col-6" style="width:300px;height:auto; border-radius:40px" alt="bukti tranfer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <p>Belum Ada Transaksi Sewa</p>
        @endif

        @endsection