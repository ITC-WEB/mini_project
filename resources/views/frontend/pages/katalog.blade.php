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
    @if (!Auth::user())
    <a href="{{url('/log')}}" class="btn btn-get-started px-4 mt-4 ml-5"> Get Start </a>
    @else
    <a href="" class="px-4 mt-4 ml-5"></a>
    @endif
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
                    Kapasitas Penumpang
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
                        <input type="hidden" name="cari" value="manual">
                        <button class="dropdown-item" type="submit">
                            Manual
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
    <div class="row text-left justify-content-between" data-aos="fade-up"
    data-aos-duration="900">
        @foreach ($mobil as $mobils)
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 cardkatalog  ">
            <!-- Added margin-bottom -->
            <div class="shadow  p-4 cardku">
                <!-- Added padding -->

                @if ($mobils->status != '1')
                <div class="item">
                    <img src="{{asset('storage/'.$mobils->gambar) }}" alt="" class="img-fluid">
                    <div class="info">
                        <h3><b>{{ $mobils->name }}</b></h3>
                        <div class="descripsi">
                            <div class="row justify-content-between">
                                <div class="col-6 des-a">Status </div>
                                <div class="col-4 des-b"><i class="fas fa-user  icons1"></i> : {{$mobils->kapasitas_orang}}</div>
                            </div>
                        </div>
                        <div class="descripsi1">
                            <div class="row justify-content-between">
                                <div class="col-6 des-a1 btn"><b>SEDANG DI SEWA</b></div>

                                <div class="col-4 des-b text-capitalize"><i class="bi bi-car-front-fill"></i> : {{ $mobils->type }}</div>
                            </div>
                        </div>
                        <!-- Corrected typo -->
                    </div>
                </div>
                @else
                <div class="item">
                    <a href="{{ route('detail', ['id' => $mobils->id]) }}" class="">
                        <img src="{{asset('storage/'.$mobils->gambar) }}" alt="" class="img-fluid">
                    </a>
                    <div class="info">
                        <a href="{{ route('detail', ['id' => $mobils->id]) }}">
                            <h3><b>{{ $mobils->name }}</b></h3>
                            <div class="descripsi">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a">Starting From </div>
                                    <div class="col-4 des-b"><i class="fas fa-user  icons1"></i> : {{$mobils->kapasitas_orang}}</div>
                                </div>
                            </div>
                            <div class="descripsi1">
                                <div class="row justify-content-between">
                                    <div class="col-6 des-a1"><b><span class="harga">{{ $mobils->harga_sewa }} / Hari </span></b></div>
                                    <div class="col-4 des-b text-capitalize"><i class="bi bi-car-front-fill"></i> : {{ $mobils->type }}</div>
                                </div>
                            </div>
                            <!-- Corrected typo -->
                        </a>
                    </div>
                </div>
                @endif

            </div>
        </div>
        @endforeach
    </div>
</div>
<!---catalog1 -->
<!--pagination-->
<div class="d-flex justify-content-center">
    {{ $mobil->withQueryString()->links() }}
</div>
<!--end pagination-->
@endsection

@push('prepend-style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
@endpush
@push('addon-scripts')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.1/accounting.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Mendapatkan semua elemen dengan kelas 'harga'
        const hargaElements = document.querySelectorAll('.harga');

        // Mengubah setiap elemen dengan kelas 'harga' menjadi format uang Rupiah
        hargaElements.forEach(function(elem) {
            // Memastikan nilai dapat diubah menjadi angka
            const numericValue = parseFloat(elem.textContent);

            if (!isNaN(numericValue)) {
                // Menggunakan accounting.js untuk memformat angka
                elem.textContent = accounting.formatMoney(numericValue, {
                    symbol: 'Rp ',
                    precision: 0,
                    thousand: '.',
                    decimal: ','
                });
            } else {
                console.error('Nilai tidak valid untuk elemen dengan kelas "harga"');
            }
        });
    });
</script>



@endpush