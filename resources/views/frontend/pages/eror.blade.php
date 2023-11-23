@extends('frontend.layout.suksesapp')

@section('title')
eror
@endsection

@section('content1')
<body>
    <!-- Semantic elements -->
    <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

    <!-- Bootstrap navbar example -->
    <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
    <div class="container">
      <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
          <a class="navbar-brand" href="index.html">
            <img src="frontend/images/logo.png" alt="" />
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
      <div class="section-success d-flex align-items-center">
        <div class="col text-center mt-5">
          <img src="frontend/images/error.png" alt="" style="width: 350px; height: 300px" />
          <h1 class="mt-5">Oops! Halaman yang Anda cari tidak ditemukan</h1>

          <a href="index.html" class="btn btn-home-page mt-3 px-5"> Home Page </a>
        </div>
      </div>
    </main>
    <script src="frontend/libraries/retina/retina.js"></script>
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="frontend/libraries/xzoom/dist/xzoom.min.js"></script>
    <script src="frontend/libraries/gijgo/js/gijgo.min.js"></script>
  </body>
  @endsection