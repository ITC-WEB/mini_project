   @extends('frontend.layout.app')

   @section('title')
   Kontak
   @endsection

   @section('content')
   <!-- Hero -->
   <header class="text-left mb-5 headerkontak ">
       <h1 class="ml-5 ">
           Nikmati Perjalanan Anda
           <br />Dengan Fasilitas Terbaik dari Kami
       </h1>
       <p class="mt-3 ml-5 ">Kendaraan Teraman dan Harga Terbaik</p>
       <a href="# " class="btn btn-get-started px-4 mt-4 ml-5 "> Get Start </a>
   </header>
   <!-- Hero -->
   <!-- section 2 -->
   <section>
       <div class="container mt-5 p-5 ">
           <div class="row justify-content-between ">
               <div class="col-md-6 col-lg-7 ">
                   <iframe width="100% " height="350 " frameborder="0 " style="border: 0 " src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12713.422066100877!2d-122.1239816!3d37.4277374!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbd34928d2b1d%3A0xf9b13b85e8917a6d!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2sus!4v1554311725323!5m2!1sen!2sus " allowfullscreen></iframe>
               </div>
               <div class="col-md-6 col-lg-4 about-image mx-sm-auto ">
                   <div class="d-flex flex-column justify-content-center align-items-center h-100 ">
                       <div class="d-flex flex-column align-items-start ">
                           <div class="d-flex align-items-center mb-3 mt-3 ">
                               <i class="fab fa-whatsapp fa-2x "></i>
                               <p class="ml-3 mb-0 tulisan ">0858890977654</p>
                           </div>
                           <div class="d-flex align-items-center mb-3 ">
                               <i class="fab fa-instagram fa-2x "></i>
                               <p class="ml-3 mb-0 tulisan ">intermediatrans</p>
                           </div>
                           <div class="d-flex align-items-center mb-3 ">
                               <i class="fab fa-tiktok fa-2x "></i>
                               <p class="ml-3 mb-0 tulisan ">intermediatrans</p>
                           </div>
                           <div class="d-flex align-items-center mb-3 ">
                               <i class="far fa-envelope fa-2x "></i>
                               <p class="ml-3 mb-0 tulisan ">intermediatrans@gmail.com</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- section 2 -->
   @endsection