@extends('frontend.layout.app')
@section('title')
Detail
@endsection
@section('content')
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col p-0 pl-3 pl-lg-0">
          <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" aria-current="page ">Paket Rental</li>
              <li class="breadcrumb-item active" aria-current="page ">Details</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details">
            <h1>{{ $mobil->name }}</h1>
            <p>Malang Indonesia</p>
            <div class="gallery">
              <div class="xzoom-container">
                <img class="xzoom" id="xzoom-default " src="{{asset('storage/'.$mobil->gambar)}}" xoriginal="{{asset('storage/'.$mobil->gambar)}}" />

              </div>
              <div class="container mt-4">
                <div class="row justify-content-between">
                  <div class="col-6">
                    <h1 class="font-weight-bold">Spesifikasi</h1>
                    <h2>Nomer Kendaraan</h2>
                    <p class="ml-3">{{ $mobil->noplat }}</p>
                    <h2>Tahun Pembuatan</h2>
                    <p class="ml-3">{{ $mobil->tahun }}</p>
                    <h2>Jenis Bahan Bakar</h2>
                    <p class="ml-3">{{ $mobil->bahan_bakar }}</p>
                    <h2>Kapasitas Mesin</h2>
                    <p class="ml-3">{{ $mobil->kapasitas_mesin }}</p>
                  </div>
                  <div class="col-6 fiturtersedia my-2">
                    <h1 class="font-weight-bold">Fitur Tersedia</h1>
                    <h2 class=" "><i class="fas fa-check"></i> Air conditioner</h2>
                    <h2 class=" "><i class="fas fa-check"></i> Aux-in, Radio, DVD, CD, MP3</h2>
                    <h2 class=" "><i class="fas fa-check"></i> Reverse Parking Camera</h2>
                    <h2 class=" "><i class="fas fa-check"></i> Reclining Seat</h2>
                    <h2 class=" "><i class="fas fa-check"></i> Port Charge</h2>
                    <h2 class=" "><i class="fas fa-check"></i> Side Impact Beam</h2>
                    <h2 class=" "><i class="fas fa-check"></i> Anti-lock Braking System</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Informasi Mobil</h2>
            <hr />

            <table class="trip-informations">
              <tr>
                <th width="50% ">Mobil</th>
                <td width="50% " class="text-right">{{$mobil->name}}</td>
              </tr>
              <tr>
                <th width="50% ">Type</th>
                <td width="50% " class="text-right">{{ $mobil->type }}</td>
              </tr>
              <tr>
                <th width="50% ">Capasitas Orang</th>
                <td width="50% " class="text-right">{{ $mobil->kapasitas_orang }} Orang</td>
              </tr>
              <tr>
                <th width="50% ">Harga Sewa Perhari</th>
                <td width="50% " class="text-right">Rp.{{ $mobil->harga_sewa }}</td>
              </tr>
            </table>
          </div>
          <div class="join-container">
            <a href="{{ route('peminjaman',['id' => $mobil->id]) }}" class="btn btn-block btn-join-now mt-3 py-2">Check-Out Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/xzoom/dist/xzoom.css')}}" />
@endpush
@push('addon-scripts')
<script src="{{ url('frontend/libraries/xzoom/dist/xzoom.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $(".xzoom, .xzoom-gallery ").xzoom({
      zoomWidth: 500,
      title: false,
      tint: "#333 ",
      Xoffset: 15,
    });
  });
</script>
@endpush