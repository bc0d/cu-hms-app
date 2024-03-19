<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign up</title>
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
              <h2>Sign up</h2>
            </center>
          </div>
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="first_name">First Name<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" name="first_name" class="form-control" id="fname" placeholder="First Name" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="second_name">Second Name<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" name="second_name" class="form-control" id="sname" placeholder="Second Name" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="gender">Gender<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <select name="gender" id="gender" class="form-control">
                  <option value="">--Select--</option>
                  <option value="female">Female</option>
                  <option value="male">Male</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="department">Department<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <select name="department" id="department" class="form-control">
                  <option value="">--Select--</option>
                  {{--
                    @foreach ($instructors as $instructor)
                      <option value="{{ $instructor->id }}">{{ $instructor->FirstName }} {{ $instructor->LastName }}"</option>">
                    @endforeach
                    --}}
                  <option value="cs">computer</option>
                  <option value="cs">computer</option>
                  <option value="cs">computer</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="admsn_no">Admission Number<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" name="admsn_no" class="form-control" id="admsn_no" placeholder="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="dob">Date Of Birth<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="date" name="dob" class="form-control" id="dob" placeholder="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="first_name">Phone Number<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="" pattern="[0-9] {10}" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="first_name">Email<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="tel" name="mail" class="form-control" id="mail" placeholder="mymail@example.com" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="pass">Password<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="password" name="pass" class="form-control" id="pass" oninput="passLength()" required>
                <span id="pass_length">Password should contain atleast 8 charcters</span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="conf_pass">Confirm Password<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="password" name="conf_pass" class="form-control" id="conf_pass" oninput="passValidation()" required>
                <span aria-hidden="true" id="pass_right">&check;</span>
                <span aria-hidden="true" id="pass_wrong">&#x2718;</span>
              </div>
            </div>
            <div class="text-center">
              <button type="reset" class="btn btn-secondary">Clear</button>
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </form>

        </div>
      </div>

  
  </section><!-- End Contact Section -->

  </main><!-- End #main -->

  

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