@extends('frontend.layout.app')

@section('title')
Katalog
@endsection
@section('content')
<header class="text-left headerkatalog">
    <h1 class="ml-5">
        Nikmati Perjalanan Anda
        <br />Dengan Fasilitas Terbaik dari Kami
    </h1>
    <p class="mt-3 ml-5">
        Kendaraan Teraman dan Harga Terbaik
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4 ml-5"> Get Start </a>
</header>
<!-- Hero -->
<!--conten catalog -->
<div class="container mt-5  p-5">
    <h2 class="text-center font-weight-bold bestcatalog">Best of The Best <br> Katalog Intermdia Trans</h2>
</div>
<!--end catalog -->

<!--form filter -->
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-8">
            <div class="form-group">
                <form action="" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control formfilter p-lg-4" name="cari" placeholder="Cari">
                        <button class="input-group-text btn-primary">Search</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!--end form filter -->
<!--button -->
<div class="container">
    <div class="row mb-3">

        <div class="col-lg-12 col-sm-12 col-md-12 d-flex justify-content-center flex-wrap pt-3  ">

            <div class="dropdown ml-2 mr-2  my-3 ">
                <form action="" method="GET">
                    <input type="hidden" class="form-control formfilter p-lg-4" name="cari" placeholder="Cari">
                    <button class="btn btn-outline btndrop" type="submit">
                        Semua
                    </button>
                </form>
            </div>

            <div class="dropdown ml-2 mr-2 my-3">
                <button class="btn btn-outline btndrop" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Jenis Mobil
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <a class="dropdown-item text-decoration-none" href="#">Mobil </a>
                    <a class="dropdown-item text-decoration-none" href="#">Travel </a>
                </div>
            </div>

            <div class="dropdown ml-2 mr-2 my-3">
                <button class="btn btn-outline btndrop" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kapasitas
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <form method="GET">
                        <input type="hidden" name="cari" value="4">
                        <button class="dropdown-item" type="submit">
                            4 Orang
                        </button>
                    </form>
                    <form method="GET">
                        <input type="hidden" name="cari" value="6">
                        <button class="dropdown-item" type="submit">
                            6 Orang
                        </button>
                    </form>
                    <form method="GET">
                        <input type="hidden" name="cari" value="8">
                        <button class="dropdown-item" type="submit">
                            8 Orang
                        </button>
                    </form>

                </div>

            </div>

            <div class="dropdown ml-2 mr-2 my-3">
                <button class="btn btn-outline btndrop" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tipe Kendaraan
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <form method="GET">
                        <input type="hidden" name="cari" value="matic">
                        <button class="dropdown-item" type="submit">
                            Matic
                        </button>
                    </form>
                    <form method="GET">
                        <input type="hidden" name="cari" value="persneling">
                        <button class="dropdown-item" type="submit">
                            Persneling
                        </button>
                    </form>

                </div>
            </div>
            <div class="dropdown ml-2 mr-2 my-3">
                <button class="btn btn-outline btndrop" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Merek
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <form method="GET">
                        <input type="hidden" name="cari" value="honda">
                        <button class="dropdown-item" type="submit">
                            Honda
                        </button>
                    </form>
                    <form method="GET">
                        <input type="hidden" name="cari" value="toyota">
                        <button class="dropdown-item" type="submit">
                            Toyota
                        </button>
                    </form>
                    <form method="GET">
                        <input type="hidden" name="cari" value="suzuki">
                        <button class="dropdown-item" type="submit">
                            Suzuki
                        </button>
                    </form>
                    <form method="GET">
                        <input type="hidden" name="cari" value="daihatsu">
                        <button class="dropdown-item" type="submit">
                            Daihatsu
                        </button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
<!--end button-->
<!--catalog1 -->
<div class="container mt-5 p-5">
    <div class="row text-left justify-content-between">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 cardkatalog  ">
            <!-- Added margin-bottom -->
            <div class="shadow  p-4 cardku">
                <!-- Added padding -->
                <div class="item">
                    <a href="details.html" class="">
                        <img src="frontend/images/brio.png" alt="" class="img-fluid">
                    </a>
                    <div class="info">
                        <a href="details.html" class=>
                            <h3>Honda Brio </h3>
                            <div class="descripsi">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a">Starting From </div>
                                    <div class="col-4 des-b"><i class="fas fa-user  icons1"></i> : 4</div>
                                </div>
                            </div>
                            <div class="descripsi1">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a1">Rp. 300.000 / Hari </div>
                                    <div class="col-4 des-b"><i class="fas fa-suitcase  icons2"></i> : 2</div>
                                </div>
                            </div>
                            <!-- Corrected typo -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 cardkatalog ">
            <!-- Added margin-bottom -->
            <div class="shadow   p-4 cardku">
                <!-- Added padding -->
                <div class="item">
                    <a href="details.html" class="">
                        <img src="frontend/images/HondaJazz.png" alt="" class="img-fluid">
                    </a>
                    <div class="info">
                        <a href="details.html" class=>
                            <h3>Honda Jazz </h3>
                            <div class="descripsi">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a">Starting From </div>
                                    <div class="col-4 des-b"><i class="fas fa-user  icons1"></i> : 4</div>
                                </div>
                            </div>
                            <div class="descripsi1">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a1">Rp. 300.000 / Hari </div>
                                    <div class="col-4 des-b"><i class="fas fa-suitcase  icons2"></i> : 2</div>
                                </div>
                            </div>
                            <!-- Corrected typo -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 cardkatalog ">
            <!-- Added margin-bottom -->
            <div class="shadow p-4 cardku">
                <!-- Added padding -->
                <div class="item">
                    <a href="details.html" class="">
                        <img src="frontend/images/HondaCRV.png" alt="" class="img-fluid">
                    </a>
                    <div class="info">
                        <a href="details.html" class=>
                            <h3>Honda CRV </h3>
                            <div class="descripsi">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a">Starting From </div>
                                    <div class="col-4 des-b"><i class="fas fa-user  icons1"></i> : 8</div>
                                </div>
                            </div>
                            <div class="descripsi1">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a1">Rp. 400.000 / Hari </div>
                                    <div class="col-4 des-b"><i class="fas fa-suitcase  icons2"></i> : 4</div>
                                </div>
                            </div>
                            <!-- Corrected typo -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 cardkatalog ">
            <!-- Added margin-bottom -->
            <div class="shadow  p-4 cardku">
                <!-- Added padding -->
                <div class="item">
                    <a href="details.html" class="">
                        <img src="frontend/images/HondaHRV.png" alt="" class="img-fluid">
                    </a>
                    <div class="info">
                        <a href="details.html" class=>
                            <h3>Honda HRV </h3>
                            <div class="descripsi">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a">Starting From </div>
                                    <div class="col-4 des-b"><i class="fas fa-user  icons1"></i> : 4</div>
                                </div>
                            </div>
                            <div class="descripsi1">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a1">Rp. 300.000 / Hari </div>
                                    <div class="col-4 des-b"><i class="fas fa-suitcase  icons2"></i> : 3</div>
                                </div>
                            </div>
                            <!-- Corrected typo -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 cardkatalog ">
            <!-- Added margin-bottom -->
            <div class="shadow p-4 cardku">
                <!-- Added padding -->
                <div class="item">
                    <a href="details.html" class="">
                        <img src="frontend/images/ToyotaRush.png" alt="" class="img-fluid">
                    </a>
                    <div class="info">
                        <a href="details.html" class=>
                            <h3>Toyota Rush </h3>
                            <div class="descripsi">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a">Starting From </div>
                                    <div class="col-4 des-b"><i class="fas fa-user  icons1"></i> : 8</div>
                                </div>
                            </div>
                            <div class="descripsi1">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a1">Rp. 300.000 / Hari </div>
                                    <div class="col-4 des-b"><i class="fas fa-suitcase  icons2"></i> : 4</div>
                                </div>
                            </div>
                            <!-- Corrected typo -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 cardkatalog ">
            <!-- Added margin-bottom -->
            <div class="shadow  p-4 cardku">
                <!-- Added padding -->
                <div class="item">
                    <a href="details.html" class="">
                        <img src="frontend/images/ToyotaAvanza.png" alt="" class="img-fluid">
                    </a>
                    <div class="info">
                        <a href="details.html" class=>
                            <h3>Toyota Avanza </h3>
                            <div class="descripsi">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a">Starting From </div>
                                    <div class="col-4 des-b"><i class="fas fa-user  icons1"></i> : 8</div>
                                </div>
                            </div>
                            <div class="descripsi1">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a1">Rp. 300.000 / Hari </div>
                                    <div class="col-4 des-b"><i class="fas fa-suitcase  icons2"></i> : 4</div>
                                </div>
                            </div>
                            <!-- Corrected typo -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 cardkatalog ">
            <!-- Added margin-bottom -->
            <div class="shadow  p-4 cardku">
                <!-- Added padding -->
                <div class="item">
                    <a href="details.html" class="">
                        <img src="frontend/images/Toyot Yaris.png" alt="" class="img-fluid">
                    </a>
                    <div class="info">
                        <a href="details.html" class=>
                            <h3>Toyota Yaris</h3>
                            <div class="descripsi">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a">Starting From </div>
                                    <div class="col-4 des-b"><i class="fas fa-user  icons1"></i> : 4</div>
                                </div>
                            </div>
                            <div class="descripsi1">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a1">Rp. 300.000 / Hari </div>
                                    <div class="col-4 des-b"><i class="fas fa-suitcase  icons2"></i> : 3</div>
                                </div>
                            </div>
                            <!-- Corrected typo -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 cardkatalog ">
            <!-- Added margin-bottom -->
            <div class="shadow p-4 cardku">
                <!-- Added padding -->
                <div class="item">
                    <a href="details.html" class="">
                        <img src="frontend/images/karimun.png" alt="" class="img-fluid">
                    </a>
                    <div class="info">
                        <a href="details.html" class=>
                            <h3>Suzuki Karimun </h3>
                            <div class="descripsi">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a">Starting From </div>
                                    <div class="col-4 des-b"><i class="fas fa-user  icons1"></i> : 4</div>
                                </div>
                            </div>
                            <div class="descripsi1">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a1">Rp. 300.000 / Hari </div>
                                    <div class="col-4 des-b"><i class="fas fa-suitcase  icons2"></i> : 2</div>
                                </div>
                            </div>
                            <!-- Corrected typo -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 cardkatalog ">
            <!-- Added margin-bottom -->
            <div class="shadow p-4 cardku">
                <!-- Added padding -->
                <div class="item">
                    <a href="details.html" class="">
                        <img src="frontend/images/ertiga.png" alt="" class="img-fluid">
                    </a>
                    <div class="info">
                        <a href="details.html" class=>
                            <h3>Suzuki Ertiga </h3>
                            <div class="descripsi">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a">Starting From </div>
                                    <div class="col-4 des-b"><i class="fas fa-user  icons1"></i> : 4</div>
                                </div>
                            </div>
                            <div class="descripsi1">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a1">Rp. 300.000 / Hari </div>
                                    <div class="col-4 des-b"><i class="fas fa-suitcase  icons2"></i> : 3</div>
                                </div>
                            </div>
                            <!-- Corrected typo -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---catalog1 -->
<!--pagination-->
<div class="container">
    <ul class="pagination justify-content-center">
        <li class="page-item mx-2"><a class="page-link" href="#">1</a></li>
        <li class="page-item mx-2"><a class="page-link" href="#">2</a></li>
        <li class="page-item mx-2"><a class="page-link" href="#">3</a></li>
        <li class="page-item mx-2"><a class="page-link" href="#">4</a></li>
        <li class="page-item mx-2"><a class="page-link" href="#">5</a></li>
    </ul>
</div>
<!--end pagination-->
@endsection


@push('addon-scripts')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endpush