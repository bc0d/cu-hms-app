<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Password Reset</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">

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
        <section id="contact" class="contact">
            <h2 class="sign-sec  text-center">Reset Password</h2><hr>
            <div class="container">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="row justify-content-center center-sign">   
                    <div class="col-lg-8  mt-2 mt-lg-0 pt-2 pt-3">
                        <form action="{{ route('forgot.reset.password') }}" method="POST" class="php-email-form">
                            @csrf
                            <div class="row mt-5 mb-3">
                                <div class="col-md-4 form-group">
                                    <label for="password">Password<span aria-hidden="true" class="required-fields"> *</span></label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                            </div>
                            <div class="row mt-5 mb-3">
                                <div class="col-md-4 form-group">
                                    <label for="password_confirmed">Conform Password<span aria-hidden="true" class="required-fields"> *</span></label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmed">
                                </div>
                            </div>
                            <input type="hidden" name="key" value="{{ $key }}">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Reset Password</button>
                            </div>
                        </form>
    
                    </div>
                </div>
            </div>
            
        </section>
    </main><!-- End #main -->
    <div class="container mt-5">
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