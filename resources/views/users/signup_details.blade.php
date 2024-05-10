
@extends('layout.public_master')

@section('content')
<!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
  

      <div class="row justify-content-center center-sign">
        <div class="col-lg-8  mt-lg-0 sign-sec">
          <div>
            <center>
              <h2>Sign up - Details</h2>
            </center>
          </div>
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
                      <input type="text" name="house_addr" class="form-control" id="house_addr" placeholder="" required>
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
                <input type="text" name="guardian_phone" class="form-control" id="guardian_phone" placeholder="" pattern="[0-9] {10}" required>
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
                <label for="admsn_date">Admission Date<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="date" name="admsn_date" class="form-control" id="admsn_date" placeholder="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="admsn_type">Course Type<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <select name="admsn_type" id="admsn_type" class="form-control">
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
                <label for="usr_pic">Photo<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="file" name="usr_pic" class="form-control" id="usr_pic" placeholder="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="usr_sig">Signature<span aria-hidden="true" class="required-fields"> *</span></label>
              </div>
              <div class="col-md-8 form-group">
                <input type="file" name="usr_sig" class="form-control" id="usr_sig" placeholder="" required>
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

  