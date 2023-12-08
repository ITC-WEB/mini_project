@extends('admin.layout.app')
@section('title')
Edit Data
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{ route('update', ['id' => $pinjam->id]) }}" enctype="multipart/form-data">
                        @csrf

                        <h3 class="mb-3">Edit Validasi</h3>
                        <div class="form-group">
                            <label for="exampleSelectGender">Validasi</label>
                            <select class="custom-select" name="status" id="inputGroupSelect01">
                                <option value="{{ $pinjam->status }}">{{ $pinjam->status }}</option>
                                @if ($pinjam->status == 'sedangdisewa')
                                <option value="belumbayar">Belum Bayar</option>
                                <option value="selesai">Selesai</option>
                                @elseif ($pinjam->status == 'selesai')
                                <option value="sedangdisewa">Sedang Di Sewa</option>
                                <option value="belumbayar">Belum Bayar</option>
                                @else
                                <option value="selesai">Selesai</option>
                                <option value="sedangdisewa">Sedang Di Sewa</option>
                                @endif
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @endsection