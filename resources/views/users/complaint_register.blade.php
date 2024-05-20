@extends('layout.public_master')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact sign-sec">

  <h2 class="sign-sec  text-center">Give Your Complaint</h2><hr>

  <div class="container">


    <div class="row mt-1  justify-content-center">

      <div class="col-lg-8 mt-2 mt-lg-0 pt-2 pt-3">
        
        <form action="{{ route('register-complaint') }}" method="POST" role="form" class="php-email-form">
          @csrf
          <div class="row ">
            <div class="form-floating mt-1">

              <div class="col-6">
                <label class="form-label pt-2 ">Complaint Category</label>
              </div>
              <select name="complaint_cat" id="select1" class="form-select ">
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
              <textarea class="form-control" name="complaint_msg" rows="3" placeholder=""></textarea>
            </div>


          </div>


          <!--<div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>-->
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
@endsection