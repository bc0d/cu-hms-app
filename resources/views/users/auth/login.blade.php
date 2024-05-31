<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
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
  

</head>

<body>

  
  <main id="main">

    <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
  

      <div class="row justify-content-center center-log">
        <div class="col-lg-4 mt-5 mt-lg-0 login-sec">
          @if(Session::has('success'))
              <div class="alert alert-success">
                  {{ Session::get('success') }}
              </div>
          @endif
          <div class="text-center">
              <h2>Login</h2>
          </div>
          <form action="{{ route('login') }}" method="POST" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="email" name="email" class="form-control" id="email" placeholder="email" required>
              </div>
            
              <div class="col-md-6 form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
              </div>
            </div>

            <div class="text-center">
              <button type="reset" class="btn btn-secondary">Clear</button>
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="row mt-1">
              <span class="form-group">New user?<a href="{{ url('user-signup') }}">Register</a></span>
            </div>
            
          </form>
          <div class="row ">
            <span class="form-group">Staff<a href="{{ url('admin-login') }}"> Login</a></span>
          </div>
        </div>
      </div>

  
  </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <div class="container">
    <div class="copyright text-center">
      &copy; Copyright <strong><span>ARM</span></strong>. All Rights Reserved
    </div>
    <div class="credits text-center">
        Developed by <a href="#">ARM</a>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('users/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('users/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('users/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('users/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('users/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>



  <!-- Template Main JS File -->
  <script src="{{ asset('users/assets/js/main.js') }}"></script>


</body>

</html>
