<!DOCTYPE html>
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

    <title>Register ITC Trans</title>
</head>

<body>
    <section style="height: 100vh;">
        <div class="container py-5">
            <div class="row d-flex justify-content-start align-items-center h-100">
                <div class="col-12">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp" alt="Sample photo" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">Registration Itc-Trans</h3>
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group last mb-3">
                                        <label for="name">Full Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" id="name">
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Your Email" id="email">
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="phone">Phone</label>
                                        <input type="number" name="phone" class="form-control">
                                    </div>

                                    <div class="form-group last mb-3">
                                        <label for="alamat">Address</label>
                                        <input type="text" name="alamat" class="form-control">
                                    </div>

                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <h6 class="mb-0 me-4">Gender: </h6>
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" />
                                            <label class="form-check-label" name="gender" for="male">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" />
                                            <label class="form-check-label" name="gender" for="female">Female</label>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col md-6 mb-4">
                                            <label for="data_id">KTP</label>
                                            <input type="file" name="ktp">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col md-6 mb-4">
                                            <label for="data_id">SIM</label>
                                            <input type="file" name="sim">
                                        </div>
                                    </div>
                                    <span class="ml-auto"><a href="/" class="forgot-pass">Back To Home</a></span>
                                    <input type="submit" class="btn btn-block btn-primary">
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <script src="{{asset('login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('login/js/popper.min.js')}}"></script>
    <script src="{{asset('login/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('login/js/main.js')}}"></script>
</body>

</html>