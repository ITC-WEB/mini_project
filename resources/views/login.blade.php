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

    <title>Login ITC Trans</title>
</head>

<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('login/images/bg_1.jpg');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        @if (Session::has('status'))
                        <div class="alert alert-danger">
                            {{ Session::get('message') }}
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <h3>Login To <strong>ITC Trans</strong></h3>
                        <form action="" method="post">
                            @csrf
                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="your@gmail.com" id="email">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Register</a></span>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                            </div>
                            <span class="ml-auto"><a href="/" class="forgot-pass">Back To Home</a></span>
                            <input type="submit" class="btn btn-block btn-primary">

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="{{asset('login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('login/js/popper.min.js')}}"></script>
    <script src="{{asset('login/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('login/js/main.js')}}"></script>
</body>

</html>