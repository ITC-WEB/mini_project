<!doctype html>
<html lang="en">
    
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('login/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('login/css/style.css')}}">
    <link rel=" stylesheet" href="{{asset('frontend/styles/main.css')}}" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
    <title>Register ITC Trans</title>
</head>

<body>
    <section>
        <div class="d-flex flex-column flex-md-row">
            <div class="linear-register-bg w-100 xl-w-55 min-vh-100">
              <div class="d-flex align-items-center vh-100 justify-content-center">
                <img src="{{url('frontend/images/register.svg')}}" alt="" style="width: 100%; height: auto; max-width: 500px; max-height: 500px;" />
              </div>
            </div>
            <div class="bg-white w-100 xl-w-55">
              <div class="d-flex justify-content-center mt-3" >
                <div class="justify-content-center col-10" style="margin-bottom: 10px;">
                  <h1 class="title-login">Registration to Intermedia Trans!</h1>
                  <div class="fw-500 account-register" >
                    Sudah mempuyai akun ? <a href="{{ url('/log') }}" class="login" ><b>Login</b></a>
                  </div>
                  <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class=" mt-3">
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-500 email-label">Nama<span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control rounded-pill" id="name" name="name" 
                                placeholder="Nama Lengkap" autofocus>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail2" class="form-label fw-500 email-label">Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control rounded-pill email-input2" autofocus required name="email" placeholder="user@gmail.com" id="email" aria-describedby="emailHelp" autocomplete="off"/>
                                  </div>
                            </div>
                        
                            <!-- Pasangan 2 -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword3" class="form-label fw-500 email-label">Password<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                      <input type="password" class="form-control rounded-pill" id="password" name="password" autocomplete="off" />
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3">
                                <label for="exampleInputPassword2" class="form-label fw-500 email-label">Nomor Hp/ WhatsApp<span class="text-danger">*</span></label>
                                <div class="input-group">
                                 <input type="number" name="phone" class="form-control rounded-pill" placeholder="08X-XXX-XXX-XXX"
                                        id="phone" required autocomplete="off" >
                                </div>
                              </div>
                            </div>
                        
                            <!-- Pasangan 3 -->
                            <div class="col-md-6">
                              <div class="mb-3">
                                <label for="exampleInputEmail3" class="form-label fw-500 email-label">Alamat <span class="text-danger">*</span></label>
                                <input type="text" name="alamat" class="form-control rounded-pill" placeholder="Alamat Lengkap"
                                id="Alamat" required autocomplete="off">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3">
                                <div class="mb-3">
                                    <label class="form-label fw-500 email-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                    <div class="row mt-2">
                                        <div class="col-md-7">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                                                <label class="form-check-label" for="male">Laki-laki</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                                                <label class="form-check-label" for="female">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                              </div>
                            </div>
                        
                            <!-- Pasangan 4 -->
                            <div class="col-md-6">
                              <div class="mb-3">
                                <label for="exampleInputEmail4" class="form-label fw-500 email-label">Unggah Kartu Tanda Penduduk (KTP)<span class="text-danger">*</span></label>
                                <input class="registra3 mt-2 mb-3" type="file" name="ktp" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3">
                                <div class="mb-3">
                                    <label for="exampleInputEmail4" class="form-label fw-500 email-label">Unggah Surat Izin Mengemudi (SIM -
                                        A)<span class="text-danger">*</span></label>
                                    <input class="registra3 mt-2 mb-3" type="file" name="sim" required>
                                  </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LeZSSYpAAAAAF72fUhe4WhtUY4ILtm8IQSXKWZu"
                    data-callback="recaptchaDataCallbackRegister"
                    data-expired-callback="recaptchaExpireCallbackRegister" aria-required="true">
                </div>
                    <button  class="reg-btn btn btn-primary btn-register w-100 rounded-pill" type="submit">Register</button>
                  </form>
                </div>
                
              </div>
            </div>
          </div>


    </section>
</body>

</html>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script src="path/to/bootstrap-5/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('login/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('login/js/popper.min.js')}}"></script>
<script src="{{asset('login/js/bootstrap.min.js')}}"></script>
<script src="{{asset('login/js/main.js')}}"></script>