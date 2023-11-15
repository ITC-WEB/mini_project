<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Peminjaman</title>
    @include('frontend.includes.style')
</head>

<body>
    <!-- Semantic elements -->
    <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

    <!-- Bootstrap navbar example -->
    <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
                <a class="navbar-brand" href="index.html">
                    <img src="frontend/images/logo itc.png" alt="" />
                </a>
            </div>
            <ul class="navbar-nav mr-auto d-none d-lg-block">
                <li>
                    <span class="text-muted">| &nbsp; Beyond the explorer of the world</span>
                </li>
            </ul>
        </nav>
    </div>
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0 pl-3 pl-lg-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Paket Rental</li>
                                <li class="breadcrumb-item" aria-current="page">Details</li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details mb-3">
                            <h1>ITC Trans</h1>
                            <p>Malang, Indonesia</p>
                            <div class="member mt-3">
                                <form method="POST" action="/peminjaman">
                                    @csrf
                                    <div class="form-group">
                                        <label for="inputUsername" class="font-weight-bold">Nama </label>
                                        <input type="text" class="form-control" id="inputUsername" value="{{ Auth::user()->name }}" />
                                    </div>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="harga_sewa" value="{{ $mobil->harga_sewa }}">
                                    <input type="hidden" name="mobil_id" value="{{ $mobil->id }}">
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-6 mb-3">
                                            <label for="inputEmail" class="font-weight-bold">Email </label>
                                            <input type="email" class="form-control" id="inputEmail" value="{{ Auth::user()->email }}" />
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label for="inputPhone" class="font-weight-bold">Phone </label>
                                            <input type="tel" class="form-control" id="inputPhone" value="{{ Auth::user()->phone }}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-6 mb-3">
                                            <label for="tanggalMulai" class="font-weight-bold">Tanggal Mulai</label>
                                            <div class="input-group">
                                                <input type="text" name="tanggal_mulai" class="form-control" id="mystartdate" placeholder="Tanggal Mulai" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 mb-3">
                                            <label for="tanggalSelesai" class="font-weight-bold">Tanggal Selesai</label>
                                            <div class="input-group">
                                                <input type="text" name="tanggal_selesai" class="form-control" id="myenddate" placeholder="Tanggal Selesai" />
                                            </div>
                                        </div>
                                        <input type="hidden" name="biaya" class="num_nights" readonly>
                                    </div>
                                    <div class="form-group">
                                        <div class="join-container mt-5">
                                            <a href="{{ route('pembayaran',['id' => $mobil->id]) }}"><button type="submit" class="btn btn-block btn-join-now mt-3 py-2">Pesan</button></a>
                                        </div>
                                        <div class="text-center mt-3">
                                            <a href="#" class="text-muted">Cancel Booking</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Checkout Information</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Mobil</th>
                                    <td width="50%" class="text-right">{{ $mobil->name }}</td>
                                </tr>

                                <tr>
                                    <th width="50%">Supir</th>
                                    <td width="50%" class="text-right">0</td>
                                </tr>
                                <tr>
                                    <th width="50%">Harga</th>
                                    <td width="50%" class="text-right"> Rp.{{ $mobil->harga_sewa }}/Hari</td>
                                </tr>
                                <tr>
                                    <th width="50%">Total</th>
                                    <td width="50%" class="text-right"><input type="text" style="border-style:none;" class="num_nights" readonly></td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('frontend.includes.footer')
    @include('frontend.includes.script')

</body>

</html>