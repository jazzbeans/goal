<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Blogs | Boldo Agency Template</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="vendors/prism/prism.css" rel="stylesheet">
    <link href="vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link href="assets/css/user.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="{{ asset('/') }}"><img src="assets/img/Logo.png" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ asset('/') }}">Home</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ asset('/about') }}">About</a></li>
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ asset('/contact') }}">Contact</a></li>
              <li class="nav-item mt-2 mt-lg-0"><a class="nav-link btn btn-light text-black w-md-25 w-50 w-lg-100" aria-current="page" href="{{route('register')}}">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>






      {{--Content--}}
      
      @yield('login')
        @yield('register')

      <!-- <section> close ============================-->
      <!-- ============================================-->
  
  
  
  
      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="pt-0">

          <div class="container">
            <div class="row justify-content-between">
              <div class="col-lg-6 col-sm-12"><a href="index.html"><img class="img-fluid mt-5 mb-4" src="assets/img/black-logo.png" alt="" /></a>
                <p class="w-lg-75 text-gray">Social media validation business model canvas graphical user interface launch party creative facebook iPad twitter.</p>
              </div>
              <div class="col-lg-2 col-sm-4">
                <h3 class="fw-bold fs-1 mt-5 mb-4">Landings</h3>
                <ul class="list-unstyled">
                  <li class="my-3 col-md-4"><a href="#">Home</a></li>
                  <li class="my-3"><a href="#">Products</a></li>
                  <li class="my-3"><a href="#">Services</a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-sm-4">
                <h3 class="fw-bold fs-1 mt-5 mb-4">Company</h3>
                <ul class="list-unstyled">
                  <li class="my-3"><a href="#">Home</a></li>
                  <li class="my-3"><a href="#">Careers</a><span class="py-1 px-2 rounded-2 bg-success fw-bold text-dark ms-2">Hiring!</span></li>
                  <li class="my-3"><a href="#">Services</a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-sm-4">
                <h3 class="fw-bold fs-1 mt-5 mb-4">Resources</h3>
                <ul class="list-unstyled">
                  <li class="mb-3"><a href="#">Home</a></li>
                  <li class="mb-3"><a href="#">Products</a></li>
                  <li class="mb-3"><a href="#">Services</a></li>
                </ul>
              </div>
            </div>
            <p class="text-gray">All rights reserved.</p>
          </div>
          <!-- end of .container-->
    
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
    
    
    
    
        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="vendors/popper/popper.min.js"></script>
        <script src="vendors/bootstrap/bootstrap.min.js"></script>
        <script src="vendors/anchorjs/anchor.min.js"></script>
        <script src="vendors/is/is.min.js"></script>
        <script src="vendors/fontawesome/all.min.js"></script>
        <script src="vendors/lodash/lodash.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="vendors/prism/prism.js"></script>
        <script src="vendors/swiper/swiper-bundle.min.js"></script>
        <script src="assets/js/theme.js"></script>
    
      </body>
    
    </html>