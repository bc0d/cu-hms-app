@extends('layout.public_master')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact sign-sec">
  <h2 class="sign-sec  text-center">Give Your Feedback</h2><hr>
  <div class="container">
    @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif
    <div class="row mt-1  justify-content-center">
      <div class="col-lg-8 mt-2 mt-lg-0 pt-2 pt-3">
        <form action="{{ route('user.addfeedback') }}" method="POST" role="form" class="php-email-form">
          @csrf
          <div class="text-center">
            <p>Rate your hostel experience to help us improve!</p>
          </div>
          <div class="form-group mt-3 mb-3 pt-2">
            <div class="col-6">
              <label class="form-label">Your Feedback<span aria-hidden="true" class="required-fields"> *</span></label>
            </div>
            <div class="col">
              <textarea class="form-control" name="feedback" rows="5" placeholder=""></textarea>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->
@endsection