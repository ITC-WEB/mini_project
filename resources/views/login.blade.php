<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Login</title>
  <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="frontend/styles/main.css" />
  <link href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet" />
</head>

<body>

  <section>
    @include('sweetalert::alert')
    <div class="d-flex flex-column flex-md-row">
      <div class="linear-bg w-100 xl-w-45">
        <div class="d-flex align-items-center vh-100 justify-content-center">
          <img src="{{url('frontend/images/Tablet login-cuate.svg')}}" alt="" style="width: 100%; height: auto; max-width: 500px; max-height: 500px;" />
        </div>
      </div>
      <div class="bg-white w-100 xl-w-55">
        <div class="d-flex justify-content-center px-5 " style="margin-top: 100px;">
          <div class="justify-content-center col-10" style="margin-bottom: 100px;">
            <h1 class="title-login">Welcome to Intermedia Trans!</h1>
            <div class="fw-100 account-register" >
              Belum memiliki akun? <a href="{{ url('/register') }}" class="signup" ><b>Sign Up</b></a>
            </div>
            <form action="" method="post">
              @csrf
              <div class="mb-3 email-input " >
                <label for="exampleInputEmail1" class="form-label fw-500 email-label" >Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control rounded-pill email-input1 " autofocus required name="email" placeholder="user@gmail.com" id="form3Example3" aria-describedby="emailHelp" autocomplete="off"/>
                
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-500 email-label">Password <span class="text-danger">*</span></label>
                <div class="input-group">
                  <input type="password" class="form-control rounded-pill"  id="form3Example4" name="password" autocomplete="off" />
                </div>
              
              </div>
              <button  class="btn btn-masuk w-100 rounded-pill" type="submit">Masuk</button>
            </form>
          </div>
          
        </div>
      </div>
    </div>
    
  </section>
  <script src="frontend/libraries/retina/retina.js"></script>
  <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
  <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>

</body>

</html>