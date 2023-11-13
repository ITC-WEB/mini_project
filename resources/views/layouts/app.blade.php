<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title> 
    <link rel="stylesheet" href="{{ url('/frontend/frontend/libraries/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url('/frontend/frontend/styles/main.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <!-- Semantic elements -->
    <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

    <!-- Bootstrap navbar example -->
    <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="index.html">
                <img src="/frontend/frontend/images/logo itc.png" alt="" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu -->
            <!-- Navbar  -->
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a class="nav-link active" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link " href="tentangkami.html">Tentang Kami</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="katalog.html">Katalog</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="syaratketentuan.html">S&K</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="kontakkami.html">Kontak</a>
                    </li>
                </ul>
                <!-- Mobile button -->
                <form class="form-inline d-sm-block d-md-none">
                    <a href="login.html" class="btn btn-login my-2 my-sm-0">Masuk</a>
                </form>
                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <a href="login.html" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" style="line-height: 40px; padding: 10px 0;">Masuk</a>
                </form>
            </div>
        </nav>
    </div>
    <!-- EndNavbar -->


    @yield('content')
    

  

    <footer class="section-footer mt-5 mb-4 border-top pt-lg-5">
        <div class=" container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="row ">
                                <div class="col-12 col-lg-2">
                                    <a class="footer-brand" href="index.html">
                                        <img src="/frontend/frontend/images/logofooter.png" alt="" />
                                    </a>
                                    <div class="social-icons mt-3 ">
                                        <a href="#" class="social-icon mr-2">
                                            <i class="fab fa-facebook fa-2x "></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-whatsapp fa-2x mr-2 "></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-instagram fa-2x "></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-2">
                                    <h5 class="footertxt ">BERANDA</h5>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="index.html">Mobil Populer </a>
                                        </li>
                                        <li>
                                            <a href="index.html">Our Network</a>
                                        </li>
                                        <li>
                                            <a href="index.html">Testimonial</a>
                                        </li>
                                        <li>
                                            <a href="index.html">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="index.html">CTA Us</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-2">
                                    <h5 class="footertxt">KATALOG</h5>
                                    <ul class="list-unstyled">
                                        <li><a href="katalog.html">Banner</a></li>
                                        <li><a href="katalog.html">Filtering</a></li>
                                        <li><a href="katalog.html">Katalog</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-2">
                                    <h5 class="footertxt">S&K</h5>
                                    <ul class="list-unstyled">
                                        <li><a href="syaratketentuan.html">Ketentuan Umum </a></li>
                                        <li><a href="syaratketentuan.html">Ketentuan Khusus</a></li>

                                    </ul>
                                </div>
                                <div class="col-12 col-lg-2">
                                    <h5 class="footertxt">KONTAK KAMI</h5>
                                    <ul class="list-unstyled footertxt">
                                        <li>Malang, Indonesia</li>
                                        <li>0821 - 2222 - 8888</li>
                                        <li>support@nomads.id</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footerbawah" style="background-color: white;">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-black-500 font-weight-light">2019 Copyright Nomads • All rights reserved • Made in Jakarta</div>
            </div>
        </div>
    </footer>
    <script src="{{ url('/frontend/frontend/libraries/retina/retina.js') }}"></script>
    <script src="{{ url('/frontend/frontend/libraries/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('/frontend/frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
</body>

</html>