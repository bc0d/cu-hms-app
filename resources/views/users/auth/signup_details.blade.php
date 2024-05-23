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
              <h2>Sign up - Details</h2>
            </center>
          </div>
          <form action="{{ route('signupstep2') }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4 form-group">
                  <label for="distance">Distance Between Home And Institute<span aria-hidden="true" class="required-fields"> *</span></label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" name="distance" class="form-control" id="distance" placeholder="00" required>
                  <span class="form-hint">In kilometers</span>
                </div>
            </div>
            <fieldset class="form-control">
                <legend>Address</legend>
                <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="house_addr">House address<span aria-hidden="true" class="required-fields"> *</span></label>
                    </div>
                    <div class="col-md-8 form-group">
                      <input type="text" name="house" class="form-control" id="house_addr" placeholder="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="street">Street<span aria-hidden="true" class="required-fields"> *</span></label>
                    </div>
                    <div class="col-md-8 form-group">
                      <input type="text" name="street" class="form-control" id="street" placeholder="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="post">Post Office<span aria-hidden="true" class="required-fields"> *</span></label>
                    </div>
                    <div class="col-md-8 form-group">
                      <input type="text" name="post" class="form-control" id="post" placeholder="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="district">District<span aria-hidden="true" class="required-fields"> *</span></label>
                    </div>
                    <div class="col-md-8 form-group">
                      <input type="text" name="district" class="form-control" id="district" placeholder="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="state">State<span aria-hidden="true" class="required-fields"> *</span></label>
                    </div>
                    <div class="col-md-8 form-group">
                      <input type="text" name="state" class="form-control" id="state" placeholder="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="country">Country<span aria-hidden="true" class="required-fields"> *</span></label>
                    </div>
                    <div class="col-md-8 form-group">
                      <input type="text" name="country" class="form-control" id="country" placeholder="" required>
                    </div>
                </div>
            </fieldset>
            
            
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="guardian">Guardian<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" name="guardian" class="form-control" id="guardian" placeholder="Guardian Name" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="guardian_phone">Guardian Phone<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" name="guardian_phone" class="form-control" id="guardian_phone" placeholder="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="pwd">Are you a person with disability?<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="radio" name="pwd" class="" id="pwd_yes" placeholder="" value="Yes" required>
                <label for="pwd_yes" class="form-group">Yes</label>
                <input type="radio" name="pwd" class="" id="pwd_no" placeholder="" value="No" required>
                <label for="pwd_no">No</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="course_duration">Course Duration<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" name="course_duration" class="form-control" id="course_duration" placeholder="" required>
                <span class="form-hint" id="">In years</span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="adm_date">Admission Date<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="date" name="adm_date" class="form-control" id="admsn_date" placeholder="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="course_type">Course Type<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <select name="course_type" id="admsn_type" class="form-control">
                  <option value="">--Select--</option>
                  <option value="intpg">Integrated PG</option>
                  <option value="pg">PG</option>
                  <option value="phd">PHD</option>
                  <option value="pdf">PDF</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="reservation">Reservation Category<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <select name="reservation" id="reservation" class="form-control">
                  <option value="">--Select--</option>
                  <option value="sc">SC</option>
                  <option value="st">ST</option>
                  <option value="obc">OBC</option>
                  <option value="oec">OEC</option>
                  <option value="etb">ETB</option>
                  <option value="gen">General</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="image">Photo<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="file" name="image" class="form-control" id="usr_pic" placeholder="" required>
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


  <!-- Template Main JS File -->
  <script src="{{ asset('users/assets/js/main.js') }}"></script>

</body>

</html>