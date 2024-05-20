<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CU-HMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('users/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('users/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('users/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('users/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#">CU Hostel</a></h1>
      <h1>welcome</h1>
      <!-- Uncomment below if you prefer to use an image logo
      {{auth()->guard('students')->user()}}
      -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#" class="active">Home</a></li>

          
          
          <li><a href="#about">About</a></li>

          <li><a href="#footer">Contact</a></li>
          <li><a href="{{ route('signup') }}">Register</a></li>
          <li><a href="{{route('login')}}" class="getstarted">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
  
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
  
      <div class="carousel-inner" role="listbox">
  
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('{{ asset('users/assets/img/slide/slide-1.jpg') }}')">
  
  
  
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">CALICUT UNIVERSITY HOSTEL</h2>
              <p class="animate__animated animate__fadeInUp">In the heart of Calicut University's sprawling campus lies a haven of comfort, camaraderie, and academic excellence. Welcome to our hostels, where memories are made and friendships flourish.</p>Lorem Ipsum
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>
  
        <!-- Slide 2 -->
        <div class="carousel-item active" style="background-image: url('{{ asset('users/assets/img/slide/slide-2.jpg') }}')">
  
  
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">CALICUT UNIVERSITY HOSTEL</h2>
              <p class="animate__animated animate__fadeInUp">Where every room tells a story, and every corridor echoes with laughter. Welcome to the heart of university life at Calicut University Hostels.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>
  
        <!-- Slide 3 -->
        <div class="carousel-item active" style="background-image: url('{{ asset('users/assets/img/slide/slide-3.jpg') }}')">
  
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">CALICUT UNIVERSITY HOSTEL</h2>
              <p class="animate__animated animate__fadeInUp">Welcome to Calicut University Hostels, where diversity is celebrated, friendships are forged, and dreams are nurtured.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>
  
      </div>
  
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
  
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
  
    </div>
  </section><!-- End Hero -->
  

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2 id="text-size">Calicut University Hostel</h2>
            <h5>The Calicut University Men's and Women's Hostels are vital parts of the campus, meeting diverse student accommodation needs. They provide safe, conducive living environments, evolving alongside the university. With modern amenities, vibrant atmospheres, and a focus on community, they foster academic focus, personal growth, and friendships, enriching campus life.</h5>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3 class="text-size pt-3"><strong>Latest Notification</strong></h3>
            <hr>
            <ul style="overflow-y: hidden; ">
              <li style="overflow: hidden; padding-bottom:0px; margin-bottom:0px;">
                <a href="j.pdf"><span class="greater-than" style="margin-right: 8px;">&gt;</span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum</a>
                <p>20/02/2023</p>
              </li>
            </ul>
    
    
          </div>
          <div class="d-grid m-0 mr-2 mt-1">
            <!--<button class="btn btn-outline-primary" type="button">more profie</button>-->
            <a href="{{ url('user/moreprofile') }}" class=" d-flex justify-content-end"><span class="arrow  ">&#8594;</span>More</a>
          </div>
        </div>
    
      </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="{{ asset('users/img/misc/cu-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" >
              <div class="portfolio-wrap">
                <img src="{{ asset('users/img/misc/cu-1.jpg') }}" class="img-fluid" alt="">
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="{{ asset('users/img/misc/cu-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" >
              <div class="portfolio-wrap">
                <img src="{{ asset('users/img/misc/cu-2.jpg') }}" class="img-fluid" alt="">
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="{{ asset('users/img/misc/cu-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" >
              <div class="portfolio-wrap">
                <img src="{{ asset('users/img/misc/cu-3.jpg') }}" class="img-fluid" alt="">
              </div>
            </a>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>Calicut University Hostel</h3>
                        <p>
                            Thenhipalam, <br>
                            673635,Kerala,India<br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> abc@example.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>


                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
            Designed by <a href="#">CU</a>
        </div>
    </div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('users/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('users/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('users/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('users/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('users/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('users/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('users/assets/js/main.js') }}"></script>

</body>

</html>