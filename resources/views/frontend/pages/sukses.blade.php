@extends('frontend.layout.suksesapp')

@section('title')
sukses
@endsection

@section('content1')
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
      <img src="{{asset('frontend/images/ic_mail.png')}}" alt="" />
      <h1>Yay! Success</h1>
      <h3>Pesanan Berhasil Terkirim</h3>
      <p class="text-dark">Silahkan <a href="https://wa.me/08989392968" target="_blank" class="alert-link">Klik disini</a><br>
        untuk menghubungi Admin kami bahwa anda Sudah Melakukan Pembayaran !</p>
      <a href="/" class="btn btn-home-page mt-3 px-5"> Home Page </a>
    </div>

  </div>
  </div>
</main>
@endsection