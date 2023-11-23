@extends('frontend.layout.suksesapp')

@section('title')
sukses
@endsection

@section('content1')
<body>
   
    <div class="container">
      <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
          <a class="navbar-brand" href="index.html">
            <img src="frontend/images/logo itc.png" alt="">
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
        <div class="col text-center">
          <img src="frontend/images/ic_mail.png" alt="" />
          <h1>Yay! Success</h1>
          <p>
            We’ve sent you email for trip instruction <br />
            please read it as well
          </p>
          <a href="index.html" class="btn btn-home-page mt-3 px-5"> Home Page </a>
        </div>
      </div>
    </main>
   
  </body>
@endsection