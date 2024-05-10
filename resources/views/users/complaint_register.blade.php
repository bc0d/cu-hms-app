@extends('layout.public_master')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact sign-sec">
  <div class="container plain-border">


    <div class="row mt-1  justify-content-center">

      <div class="col-lg-8 mt-2 mt-lg-0 pt-2 pt-3">
        <h2 class="sign-sec  text-center">Give Your Complaint</h2>
        <hr>
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row ">
            <div class="form-floating mt-1">

              <div class="col-6">
                <div class="col-6">
                  <label class="form-label">Contact No</label>
                </div>
                <input type="text" class="form-control" id="name" placeholder="">
                <label class="form-label pt-2 ">Complaint Category</label>
              </div>
              <select id="select1" class="form-select ">
                <option value="" selected disabled>Select</option>
                <option>hostel</option>
                <option>mess</option>
                <option>electricity</option>
                <option>internet</option>
                <option>staff and management</option>
                <option>other</option>
              </select>
            </div>
          </div>


          <div class="form-group mt-3 pt-2">
            <div class="col-6">
              <label class="form-label">Your Complaint</label>
            </div>
            <div class="col">
              <textarea class="form-control" name="message" rows="3" placeholder=""></textarea>
            </div>


          </div>


          <!--<div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>-->
          <div class="text-center"><button type="submit">Submit</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
@endsection