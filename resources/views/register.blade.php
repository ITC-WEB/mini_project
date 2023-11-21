<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="frontend/styles/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="frontend/images/loginsy.png" class="img-fluid" alt="Sample image" />
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start selamat mt-5">Silahkan DAFTAR Dahulu</div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Name</label>
                            <input name="name" type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Masukkan Nama Anda" required />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Email address</label>
                            <input name="email" type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Masukkan Email Anda" required />
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Password</label>
                            <input name="password" type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Masukkan Password" required />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Nomer HP</label>
                            <input name="phone" type="number" id="form3Example3" class="form-control form-control-lg" placeholder="Masukkan Nomer HP" required />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Alamat Lengkap</label>
                            <input name="alamat" type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Masukkan Alamat Lengkap anda" required />
                        </div>

                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Jenis Kelamin : </label><br>
                            <div class="form-check form-check-inline mb-0 me-4">
                                <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" />
                                <label class="form-check-label" name="gender" for="male">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline mb-0 me-4">
                                <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" />
                                <label class="form-check-label" name="gender" for="female">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label sm" for="form3Example4">KTP(Kertu Tanda Penduduk) :</label>
                            <input name="ktp" type="file" id="form3Example4" class="form-control form-control-sm" placeholder="Enter KTP" required />
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">SIM(Surat Izin Mengemudi) :</label>
                            <input name="sim" type="file" id="form3Example4" class="form-control form-control-sm" placeholder="Enter SIM" required />
                        </div>


                        <div class="text-center text-lg-start mt-4 mb-4 pt-2">
                            <button type="submit" id="validasi" class=" btn btn-primary btn-md" style="padding-left: 2.5rem; padding-right: 2.5rem">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="frontend/libraries/retina/retina.js"></script>
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tambahkan event listener pada setiap tombol delete
            document.querySelectorAll('#validasi').forEach(function(button) {
                button.addEventListener('click', function() {
                    // Tampilkan SweetAlert konfirmasi
                    Swal.fire({
                        title: "Anda Berhasil Mendaftar!",
                        text: "Silahkan Login",
                        icon: "success"
                    });
                });
            });
        });
    </script>
</body>

</html>