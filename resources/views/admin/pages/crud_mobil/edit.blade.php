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
                    <form class="forms-sample" method="POST" action="{{ route('mobil.update', ['id' => $mobil->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="oldPhoto" value="{{ $mobil->gambar }}">
                        <h3 class="mb-3">Edit Mobil</h3>
                        <hr>
                        <div class="form-group">
                            <label for="exampleInputName1">Noplat</label>
                            <input name="noplat" type="text" class="form-control" id="exampleInputName1" value="{{ $mobil->noplat }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail3" value="{{ $mobil->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Merek</label>
                            <select class="custom-select" name="merek_id" id="inputGroupSelect01">
                                <option value="{{ $mobil->merek->id }}">{{ $mobil->merek->name }}</option>
                                <option value="1">honda</option>
                                <option value="2">toyota</option>
                                <option value="3">suzuki</option>
                                <option value="4">daihatsu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tahun Dibuat</label>
                            <input name="tahun" type="text" class="form-control" id="exampleInputName1" value="{{ $mobil->tahun }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Kapasitas Orang</label>
                            <input name="kapasitas_orang" type="text" class="form-control" id="exampleInputName1" value="{{ $mobil->kapasitas_orang }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleSelectGender">Kapasitas Mesin</label>
                            <input name="kapasitas_mesin" type="text" class="form-control" id="exampleInputName1" value="{{ $mobil->kapasitas_mesin }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Fitur Tersedia<span class="text-danger">*</span></label><br>
                            <label for="pilihan1">
                                <input type="checkbox" id="pilihan1" name="fitur_tersedia[]" value="Air Conditioner"> Air Conditioner
                            </label>

                            <label for="pilihan2">
                                <input type="checkbox" id="pilihan2" name="fitur_tersedia[]" value="Reverse Parking Camera"> Reverse Parking Camera
                            </label>
                            <label for="pilihan3">
                                <input type="checkbox" id="pilihan1" name="fitur_tersedia[]" value="Post Change"> Post Change
                            </label>

                            <label for="pilihan4">
                                <input type="checkbox" id="pilihan2" name="fitur_tersedia[]" value="Anti-lock Breaking System"> Anti-lock Breaking System
                            </label>
                            <label for="pilihan5">
                                <input type="checkbox" id="pilihan1" name="fitur_tersedia[]" value="Aux-in,Radio,DVD,CD,Mp3"> Aux-in,Radio,DVD,CD,Mp3
                            </label>

                            <label for="pilihan6">
                                <input type="checkbox" id="pilihan2" name="fitur_tersedia[]" value="Reclining Seat"> Reclining Seat
                            </label>

                            <label for="pilihan7">
                                <input type="checkbox" id="pilihan2" name="fitur_tersedia[]" value="Side Impact Beam"> Side Impact Beam
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="exampleSelectGender">Type Transmisi</label>
                            <select class="custom-select" name="type" id="inputGroupSelect01">
                                <option value="{{$mobil->type}}">{{ $mobil->type }}</option>
                                @if ($mobil->type == 'matic')
                                <option value="manual">manual</option>
                                @else
                                <option value="matic">matic</option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleSelectGender">Bahan Bakar</label>
                            <select class="custom-select" name="bahan_bakar" id="inputGroupSelect01">
                                <option value="{{$mobil->bahan_bakar}}">{{ $mobil->bahan_bakar }}</option>
                                @if ($mobil->bahan_bakar == 'pertalite')
                                <option value="pertamax">pertamax</option>
                                <option value="solar">solar</option>
                                @elseif($mobil->bahan_bakar == 'pertamax')
                                <option value="pertalite">pertalite</option>
                                <option value="solar">solar</option>
                                @else
                                <option value="pertalite">pertalite</option>
                                <option value="pertamax">pertamax</option>
                                @endif

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Harga Sewa</label>
                            <input name="harga_sewa" type="text" class="form-control" id="exampleInputName1" value="{{$mobil->harga_sewa}}">
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar <span class="text-danger">*</span></label>
                            <input name="gambar" type="file" class="form-control-file" id="gambar" accept="image/">
                            <img src="" class="mt-2" id="img-view" style="width: 100px;">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/data-mobil" class="btn btn-light">Close</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @endsection
    @push('after-script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    <script>
        $("#gambar").change(function() {
            previewImage(this);
        });

        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $("#img-view").attr("src", e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    @endpush