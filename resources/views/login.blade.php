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
          <img src="frontend/images/loginsy.png" class="img-fluid" alt="Sample image" />
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="" method="post">
            @csrf
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start selamat mt-5">SELAMAT DATANG di INTERMEDIA TRANS</div>
            <p class="fw-bold mt-2 pt-1 mb-0 sudahakun">sudah memiliki akun? <a href="/register" class="link-masuk text-decoration-none">masuk</a></p>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example3">Email address</label>
              <input name="email" type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" required />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <label class="form-label" for="form3Example4">Password</label>
              <input name="password" type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" required />
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class=" btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem">Login</button>
            </div>
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