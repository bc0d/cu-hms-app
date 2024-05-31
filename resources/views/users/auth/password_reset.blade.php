<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Password Reset</title>
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
  

      <div class="row justify-content-center center-sign">
        
        <div class="col-lg-8  mt-lg-0 sign-sec">
          <div>
            <center>
              <h2>Reset Password</h2>
            </center>
          </div>
          @error('update')
            <span class="err_msg">{{ $message }}</span>
          @enderror
          <form action="{{ route('reset') }}" method="POST" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="cur_pass">Current Password<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="password" name="cur_pass" class="form-control" id="cur_pass" placeholder="Password" required>
                @error('cur_pass')
                  <span class="err_msg">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="pass">New Password<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="password" name="pass" class="form-control" id="pass" placeholder="Password" oninput="passLength()" required>
                <span id="pass_length">Password should contain atleast 8 charcters</span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="password">Confirm Password<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="password" name="password" class="form-control" id="conf_pass" placeholder="Password" oninput="passValidation()" required>
                <span aria-hidden="true" id="pass_right">&check;</span>
                <span aria-hidden="true" id="pass_wrong">&#x2718;</span>
              </div>
            </div>
            
            <div class="text-center">
              <button type="reset" class="btn btn-secondary">Clear</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
          

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