   @extends('frontend.layout.app')

   @section('title')
   Kontak
   @endsection

   @section('content')
   <!-- Hero -->
    <header class="text-left mb-5 headerkontak">
      <h1 class="ml-5">
        Kontak Kami <br />
        Kenal Kami Lebih Dekat Lagi
      </h1>
      <p class="mt-3 ml-5">Butuh Bantuan? Jangan Ragu Untuk Menghubungi Kami</p>
    </header>
    <!-- Hero -->
    <!-- section 2 -->
    <section>
      <div class="container mt-5 p-5">
        <div class="row justify-content-between">
          <div class="col-md-6 col-lg-7">
            <iframe
              width="100% "
              height="350 "
              frameborder="0 "
              style="border: 0"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31618.303504481577!2d112.51710176467897!3d-7.864906913892826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881647d5a818d%3A0xd1263f0f6a34c25d!2sThematic%20Cluster%20Village%20by%20The%20Lavana!5e0!3m2!1sen!2sus!4v1701834489704!5m2!1sen!2sus"
              allowfullscreen
            ></iframe>
          </div>
          <div class="col-md-6 col-lg-4 about-image mx-sm-auto">
            <div class="d-flex flex-column justify-content-center align-items-center h-100">
              <div class="d-flex flex-column align-items-start">
                <div class="d-flex align-items-center mb-3 mt-3">
                  <i class="fab fa-whatsapp fa-2x"></i>
                  <p class="ml-3 mb-0 tulisan">+6288 999 222 333</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                  <i class="fab fa-instagram fa-2x"></i>
                  <p class="ml-3 mb-0 tulisan">@intermediatrans</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                  <i class="fab fa-tiktok fa-2x"></i>
                  <p class="ml-3 mb-0 tulisan">intermediatrans</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                  <i class="far fa-envelope fa-2x"></i>
                  <p class="ml-3 mb-0 tulisan">intermediatrans@gmail.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section 2 -->
   @endsection