@extends('frontend.layout.app')

@section('title')
Halaman Utama
@endsection
@section('content')
<header class="text-left ">
    <h1 class="ml-5">
        Nikmati Perjalanan Anda
        <br />Dengan Fasilitas Terbaik dari Kami
    </h1>
    <p class="mt-3 ml-5">
        Kendaraan Teraman dan Harga Terbaik
    </p>
    <a href="index.html" class="btn btn-get-started px-4 mt-4 ml-5"> Get Start </a>
</header>
<!-- Hero -->

<!-- 3 Poluler  -->
<main>
    <div class="container ">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>{{ $jmlMobil }}</h2>
                <p>car</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>{{ $jmlSopir }}</h2>
                <p>driver</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>{{ $jmlUser }}</h2>
                <p>customer</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>10</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>
    <!-- 3 Poluler  -->
    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Mobil Popular</h2>
                    <p>
                        Eksplorasi Tanpa Batas, Dengan Mobil
                        <br /> Sewaan
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    @foreach ($mobil as $mobils)
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/populer1.png')">
                        <div class="travel-country">Kabupaten Malang</div>
                        <div class="travel-location">{{ $mobils->name }}</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail', ['id' => $mobils->id]) }}" class="btn btn-travel-details px-4"> View Details </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--end 3 Poluler  -->
    <!--patner kami -->
    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>
                        Companies are trusted us
                        <br /> more than just a trip
                    </p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{ asset('frontend/images/partner.png') }}" class="img-patner" />
                </div>
            </div>
        </div>
    </section>
    <!--end patner kami -->

    <!--menagapa memilih kami  -->
    <section class=" mengapamimilihkami  mt-5 mb-5" id="">
        <div class="container mengapamimilihkami" id="mengapamimilihkami">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mt-6 mb-5 text-center">
                        <img src="{{ asset('frontend/images/mengapamelih kami .jpg') }}" class="about-image rounded">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-4">
                    <div class="text-lg-left text-center">
                        <h5 class="rental ">
                            Rental mobil
                        </h5>
                        <h1 class=" main-title">
                            Mengapa Memilih Perusahaan Kami ?
                        </h1>
                        <p class=" main-content">
                            Keamanan Anda adalah prioritas utama kami. Semua kendaraan kami menjalani pemeliharaan
                            berkala dan pemeriksaan ketat sehingga Anda dapat mengemudi dengan percaya diri. Kami selalu
                            berkomitmen untuk memberikan kualitas terbaik kepada Anda.
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <!--end mengapa memilih kami  -->
    <!--testimonial -->
    <section class="section-testimonials-heading" id="testimonialsHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>
                        Moments were giving them
                        <br /> the best experience
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-testimonials-content pb-5 " id="testimonialsContent">
        <div class="container mb-5">
            <div class="section-popular-travel row justify-content-center match-height">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{ asset('frontend/images/avatar-1.png') }}" alt="" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Angga Risky</h3>
                            <p class="testimonials">"Saya sangat puas dengan pelayanan intermedia Trans. Mobil yang saya
                                sewa sangat bersih dan terawat dengan baik."</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{ asset('frontend/images/avatar-2.png') }}" alt="" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Shayna</h3>
                            <p class="testimonials">“ Layanan intermedia Trans selalu konsisten, dan stafnya sangat
                                ramah. Saya merasa aman dan percaya diri ketika mengemudi mobil mereka. “</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content mb-auto">
                            <img src="{{ asset('frontend/images/avatar-3.png') }}" alt="" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Shabrina</h3>
                            <p class="testimonials">“intermedia Trans memberikan solusi yang cepat dan Saya sangat
                                menghargai keramahan dan kerja keras tim mereka. ”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- end testimonial -->
    <!-- accordion -->

    <section class="mt-5 pt-5">
        <div class="container ">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-3">
                    <h1 class="accordion1">
                        Frequently Asked Questions
                    </h1>
                    <h2 class="accordion2">
                        Masih bingung atau ragu? Hubungi kami di nomor +6288 999 222 333
                    </h2>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Bagaimana Cara Memesan Mobil?
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">

                                <div class="card-body">
                                    Untuk memesan mobil, kunjungi situs web kami dan pilih mobil yang Anda inginkan.
                                    Kemudian, ikuti langkah-langkah pemesanan yang ditentukan.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Bisakah Saya Memilih Mobil Tertentu?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Kami akan berusaha untuk memenuhi permintaan Anda, tetapi ketersediaan mobil
                                    tertentu tidak dapat dijamin. Sebaiknya pesan sebelumnya jika Anda memiliki
                                    preferensi tertentu.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Apa Syarat Umur untuk Menyewa Mobil?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Syarat umur untuk menyewa mobil adalah 17 tahun atau lebih, dan diwajibkan memiliki
                                    sim A.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed  text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Bagaimana Jika Saya Terlambat Mengembalikan Mobil?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    Jika Anda terlambat mengembalikan mobil, biaya keterlambatan akan dikenakan sesuai
                                    dengan kebijakan perusahaan.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Apakah Saya Bisa Memperpanjang Waktu Sewa?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anda dapat memperpanjang waktu sewa jika mobil tersedia. Hubungi kami untuk mengatur
                                    perpanjangan sewa.
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end accorion -->
    <!-- cta -->
    <section class="mt-5 p-5 mb-5">
        <div class="container cta mt-5 pt-5 pb-3">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 text-left">
                    <h3 class="cta-text mt-4 mb-4 ml-5">
                        Sewa mobil terpercaya hanya di
                    </h3>
                    <h1 class="cta-text1 mt-4 mb-4 ml-5">
                        Intermedia Trans
                    </h1>
                    <a href="katalog.html" class="btncta btn-get-started px-4 mt-5 ml-5 p-2 text-decoration-none btnpesan"> Pesan Sekarang
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mt-5">
                    <img src="frontend/images/cta.png" class="about-image rounded img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- end cta -->

    @include('sweetalert::alert')
</main>
@endsection