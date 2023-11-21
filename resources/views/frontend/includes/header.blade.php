<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="index.html">
            <img src="{{asset('frontend/images/logo itc.png')}}" alt="" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu -->
        <!-- Navbar  -->
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">

                <li class="nav-item mx-md-2">
                    <a class="nav-link active" href="/">Beranda</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link " href="/tentang">Tentang Kami</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link" href="/katalog">Katalog</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link" href="/syarat">S&K</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link" href="/kontak">Kontak</a>
                </li>
            </ul>
            <!-- Mobile button -->
            <form class="form-inline d-sm-block d-md-none">
                <a href="{{url('/logout')}}" class="btn btn-login my-2 my-sm-0">Masuk</a>
            </form>
            @if (!Auth::user())
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <a href="/log" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" style="line-height: 40px; padding: 10px 0;">Masuk</a>
            </form>
            @else
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <a href="{{url('/logout')}}" class="btn btn-navbar-right my-2 my-sm-0 px-4" style="line-height: 40px; padding: 10px 0;">
                    <img src="{{asset('admin/images/faces/face23.jpg') }}" class="rounded-circle" style="height: 50px;width:50px;" alt="profile" />
                </a>
            </form>
            @endif
            <!-- Desktop Button -->


        </div>
    </nav>
</div>


<!-- EndNavbar -->