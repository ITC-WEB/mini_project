@extends('frontend.layout.app')

@section('title')
TentangKami
@endsection

@section('content')
<header class="text-left headertentangkami">
    <h1 class="ml-5">
        Tentang <br /> Intermedia Trans
    </h1>
    <p class="mt-3 ml-5">
        Kenali perusahaan kami lebih dekat
    </p>
</header>
<!-- Hero -->
<!--Tentang Kami -->
<section class="tentangkami mb-5">
    <div class="tentangkami-view" id="tentangkami">
        <div class="text-center">
            <div class="container px-3 mt-5">
                <div class="row mb-md-0 mb-5 justify-content-between">
                    <div class="col-lg-6 py-lg-5" data-aos="fade-right">>
                        <div class="text-center text-lg-left mt-5">
                            <img src="frontend/images/contententangkami.png" class="tentangkami-img img-fluid float-end" />
                        </div>
                    </div>
                    <div class="col-lg-6 py-lg-5" data-aos="fade-left">>
                        <div class="tentangkami-content py-5">
                            <h1 class="text-lg-left font-weight-bold tentangkamiconten1">Intermedia Trans</h1>
                            <p class="text-lg-left mt-lg-2 tentangkami-conten pararaf-tentangkami">
                                Intermedia Trans, mitra terpercaya Anda dalam menjelajahi Malang dengan gaya dan kenyamanan. Sebagai perusahaan penyewaan mobil terkemuka, kami menawarkan pengalaman tanpa kesulitan, menyediakan kendaraan berkualitas tinggi, sopir profesional, dan layanan
                                tak tertandingi. Temukan Malang dengan ritme Anda sendiri, dengan keyakinan bahwa Anda berada di tangan para ahli. Perjalanan Anda dimulai bersama kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!--End Tentang Kami -->

<!--Tentang Kami -->
<section class="berproses mt-5">
    <div class="berproses-view" id="berproses">
        <div class="text-center p-5">
            <div class="" data-aos="fade-down">
                <h4 class="berposes1">Proses Kami Berkerja </h4>
            <h2 class="berproses2 font-weight-bold">Bagaimana Kami Berkerja ?</h2>
            <p class="berproses3">Kami bekerja sesuai dengan prosedur yang berlaku dan menjadikan <br> permasalahan customer sebagai konsep dasar rental mobil </p>
            </div>
            <div class="container px-3 mt-5">
                <div class="row mb-md-0 mb-5 justify-content-around">
                    <div class="col-lg-4 py-lg-5"  data-aos="zoom-in-right">
                        <div class="text-center text-lg-center mt-3">
                            <img src="frontend/images/Notepad.png" class="bp-img img-fluid r" style="height: 64px; width: 64px;" />
                            <h3 class="font-weight-bold">Reservasi</h3>
                            <h4>Reservasi melalui form yang tersedia dan lakukan pembayaran</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 py-lg-5" data-aos="fade-left">
                        <div class="text-center text-lg-center mt-3">
                            <img src="frontend/images/verifikasi.png" class="bp-img img-fluid " style="height: 64px; width: 64px;" />
                            <h3 class="font-weight-bold">Verifikasi</h3>
                            <h4>Anda akan mendapatkan notifikasi melalui email untuk persetujuan reservasi</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 py-lg-5"  data-aos="zoom-in-right">
                        <div class="text-center text-lg-center mt-3">
                            <img src="frontend/images/deal.png" class="bp-img img-fluid " style="height: 64px; width: 64px;" />
                            <h3 class="font-weight-bold">Deal </h3>
                            <h4>Silahkan menikmati fasilitas kendaraan Kami</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection