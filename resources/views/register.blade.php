<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

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
        <div class="container">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h3 class="mb-2 mt-5 registra">Registration to</h3>
                        <h3 class="mb-5 registra2">Intermedia Trans</h3>
                        <div class="form-group last mb-5">
                            <input type="text" name="name" class="form-control custom-input" placeholder="Nama" id="name" required>
                        </div>
                        <div class="form-group last mb-5">
                            <input type="email" name="email" class="form-control custom-input" placeholder="Alamat Email" id="email" required>
                        </div>
                        <div class="form-group last mb-5">
                            <input type="password" name="password" class="form-control custom-input" placeholder="Kata Sandi" id="password" required>
                        </div>
                        <div class="form-group last mb-5">
                            <input type="number" name="phone" class="form-control custom-input " placeholder="Nomor Hp/WhatsApp" id="phone" required>
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="form-group last mt-5">
                            <input type="text" name="alamat" class="form-control custom-input" placeholder="Alamat" id="alamat" required>
                        </div>
                        <div class=" mb-5 py-2">
                            <h6 class="mb-0 me-4">Jenis Kelamin </h6>
                            <div class="gender form-check form-check-inline mb-0 me-4 mt-5">
                                <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" />
                                <label class="form-check-label" name="gender" for="male">Laki-laki</label>
                            </div>
                            <div class="gender form-check form-check-inline mb-0 me-4 mt-5">
                                <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" />
                                <label class="form-check-label" name="gender" for="female">Perempuan</label>
                            </div>

                            <div class="row">
                                <div class="col md-6 mt-5">
                                    <label for="data_id">Unggah Kartu Tanda Penduduk (KTP)</label>
                                    <input class="mt-3" type="file" name="ktp" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col md-6 mb-4">
                                    <label class="mt-4" for="data_id">Unggah Surat Izin Mengemudi (SIM - A)</label>
                                    <input class="mt-3" type="file" name="sim">
                                </div>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LeZSSYpAAAAAF72fUhe4WhtUY4ILtm8IQSXKWZu" data-callback="recaptchaDataCallbackRegister" data-expired-callback="recaptchaExpireCallbackRegister" aria-required="true"></div>
                            <input type="submit" class="btn butonlog btn-block btn-primary mt-4">

                            <p class="have-account mt-4"> have an account ? <a href="{{ url('/log') }}" class="link-masuk ">login</a></p>

                        </div>
            </form>
        </div>
        </div>
    </section>
    <script src="{{asset('login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('login/js/popper.min.js')}}"></script>
    <script src="{{asset('login/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('login/js/main.js')}}"></script>
</body>

</html>