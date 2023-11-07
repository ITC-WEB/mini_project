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
                        <p>{{ $mobil->merek->name }}</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img class="xzoom" id="xzoom-default " src="{{asset('storage/mobil/'.$mobil->gambar)}} " xoriginal="{{asset('storage/mobil/'.$mobil->gambar)}} " />
                                <!-- <div class="xzoom-thumbs">
                                    <a href="frontend/images/details-1.jpg "><img class="xzoom-gallery" width="128 " src="frontend/images/details-1.jpg " xpreview="frontend/images/details-1.jpg " /></a>
                                    <a href="frontend/images/details-1.jpg "><img class="xzoom-gallery" width="128 " src="frontend/images/details-1.jpg " xpreview="frontend/images/details-1.jpg " /></a>
                                    <a href="frontend/images/details-1.jpg "><img class="xzoom-gallery" width="128 " src="frontend/images/details-1.jpg " xpreview="frontend/images/details-1.jpg " /></a>
                                    <a href="frontend/images/details-1.jpg "><img class="xzoom-gallery" width="128 " src="frontend/images/details-1.jpg " xpreview="frontend/images/details-1.jpg " /></a>
                                    <a href="frontend/images/details-1.jpg "><img class="xzoom-gallery" width="128 " src="frontend/images/details-1.jpg " xpreview="frontend/images/details-1.jpg " /></a>
                                </div> -->
                            </div>
                            <h2>Deskripsi</h2>
                            <p>
                                {{ $mobil->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Informsi Mobil</h2>
                        <hr />

                        <table class="trip-informations">
                            <tr>
                                <th width="50% ">Mobil</th>
                                <td width="50% " class="text-right">{{ $mobil->name }}</td>
                            </tr>

                            <tr>
                                <th width="50% ">Merek</th>
                                <td width="50% " class="text-right">{{ $mobil->merek->name }}</td>
                            </tr>
                            <tr>
                                <th width="50% ">Type</th>
                                <td width="50% " class="text-right">{{ $mobil->type }}</td>
                            </tr>
                            <tr>
                                <th width="50% ">Capasitas</th>
                                <td width="50% " class="text-right">{{ $mobil->kapasitas }}</td>
                            </tr>
                            <tr>
                                <th width="50% ">Harga Sewa</th>
                                <td width="50% " class="text-right">Rp.{{ $mobil->harga_sewa }}/hari</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{ route('peminjaman',['id' => $mobil->id]) }}" class="btn btn-block btn-join-now mt-3 py-2">CheckOut Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="{{ asset('frontend/libraries/retina/retina.js ') }}"></script>
<script src="{{asset('frontend/libraries/jquery/jquery-3.4.1.min.js ') }}"></script>
<script src="{{asset('frontend/libraries/bootstrap/js/bootstrap.js')}} "></script>
<script src="{{asset('frontend/libraries/xzoom/dist/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $(".xzoom, .xzoom-gallery").xzoom({
            zoomWidth: 500,
            title: false,
            tint: "#333",
            Xoffset: 15,
        });
    });
</script>
@endsection