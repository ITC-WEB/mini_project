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
    <div class="mathead" style="background-color: #071c4d;">
        <div class="color-overlay d-flex justify-content-center align-items-center">
            <section>
                <div class="container">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-sm-6">
                                <h3 class="mb-2 mt-5 registra2">Registration to</h3>
                                <h3 class="mb-5 registra2">Intermedia Trans</h3>

                                <div class="form-floating rounded-form mb-3">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Nama Lengkap">
                                    <label class="floating-label" for="floatingInput"><span class="text-danger">*</span> Nama Lengkap</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="example@gmail.com" id="email" required>
                                    <label for="floatingEmail"><span class="text-danger">*</span> Email</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        id="password" required>
                                    <label for="floatingPassword"><span class="text-danger">*</span> Password</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" name="phone" class="form-control" placeholder="08X-XXX-XXX-XXX"
                                        id="phone" required>
                                    <label for="floatingHp"><span class="text-danger">*</span> Nomor HP/WhatsApp</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap"
                                        id="Alamat" required>
                                    <label for="floatingAlamat"><span class="text-danger">*</span> Alamat</label>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="mb-5 py-2 ">
                                    <h6 class="registra3 mt-5 mb-0 me-4"><span class="text-danger">*</span><b> Jenis Kelamin </b></h6>
                                    <div class="gender form-check form-check-inline mb-0 me-4 mt-3">
                                        <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                            value="male" />
                                        <label class="form-check-label" name="gender" for="male">Laki-laki</label>
                                    </div>
                                    <div class="gender form-check form-check-inline mb-0 me-4 mt-3">
                                        <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                            value="female" />
                                        <label class="form-check-label" name="gender" for="female">Perempuan</label>
                                    </div>

                                    <div class="row">
                                        <div class="col md-6 mt-4">
                                            <label class="registra3" for="data_id"><span class="text-danger">*</span><b> Unggah Kartu Tanda Penduduk (KTP)</b></label>
                                            <input class="registra3 mt-2" type="file" name="ktp" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col md-6 mb-4">
                                            <label class="registra3 mt-4" for="data_id"><span class="text-danger">*</span><b> Unggah Surat Izin Mengemudi (SIM -
                                                A)</b></label>
                                            <input class="registra3 mt-2 mb-3" type="file" name="sim" required>
                                        </div>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LeZSSYpAAAAAF72fUhe4WhtUY4ILtm8IQSXKWZu"
                                        data-callback="recaptchaDataCallbackRegister"
                                        data-expired-callback="recaptchaExpireCallbackRegister" aria-required="true">
                                    </div>
                                    <input type="submit" class="btn butonlog btn-block btn-primary mt-3">

                                    <p class="have-account mt-4"> have an account ? <a href="{{ url('/log') }}"
                                            class="link-masuk "><b>Login</b></a></p>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </section>
        </div>
    </div>
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