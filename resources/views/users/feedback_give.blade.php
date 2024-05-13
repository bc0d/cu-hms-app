@extends('layout.public_master')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact sign-sec">
  <div class="container plain-border">


    <div class="row mt-2  justify-content-center">

      <div class="col-lg-8 mt-2 mt-lg-0 pt-3">
        <h2 class="sign-sec  text-center">Give Your Feedback</h2>
        <hr>
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row ">
            <div class="form-floating mt-2">
              <div class="col mb-3">
                <label class="form-label">Rate your hostel experience to help us improve!</label>

              </div>
              <div class="col-6">
                <label class="form-label">Feedback Type</label>
              </div>
              <div class="col-6">
                <select id="select1" class="form-select">
                  <option value="" selected disabled>Select</option>
                  <option>hostel facilities</option>
                  <option>mess facilities</option>
                  <option>internet facilities</option>
                  <option>staff and management</option>
                  <option>suggestion</option>
                  <option>other</option>
                </select>
              </div>
            </div>

            <div class="form-group mt-3">
              <div class="col-6">
                <label class="form-label">Your Feedback</label>
              </div>
              <div class="col">
                <textarea class="form-control" name="message" rows="3" placeholder=""></textarea>
              </div>
            </div>
          </div>


          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Submit</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
@endsection