<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="frontend/styles/main.css" />
  <link href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet" />
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="frontend/images/login2.png" class="img-fluid" alt="Sample image" />
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="" method="post">
            @csrf
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start selamat mt-5">Welcome to</div>
            <div class="textlog d-flex flex-row align-items-center justify-content-center justify-content-lg-start selamat mb-4">Intermedia Trans !</div>
            <!-- Email input -->
            <div class="form-outline mb-4">
            <input name="email" type="email" id="form3Example3" class="form-control form-control-lg custom-input" placeholder="email address" required />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input name="password" type="password" id="form3Example4" class="form-control form-control-lg custom-input" placeholder="Password" required />
            </div>
            <div class="form-group form-check mt-2">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me ! <a href="#" class="link-masuk2 ml-5 ">forgot password</a></label>
                      </div>

            <div class=" text-lg-start mt-4 pt-2 ">
              <button type="submit" class="butonlog btn btn-lg" style="padding-left: 2rem; padding-right: 2rem">Login</button>
            </div>
            <p class=mt-4>
              Dont have an account ? <a href="{{ url('/register') }}" class="link-masuk ">sign up</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="frontend/libraries/retina/retina.js"></script>
  <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
  <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
</body>

</html>