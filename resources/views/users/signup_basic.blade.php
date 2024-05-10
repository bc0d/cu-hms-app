@extends('layout.public_master')

@section('content')
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
  @endsection