@extends('layout.public_master')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact sign-sec">
  <h2 class="sign-sec  text-center">Room Change</h2><hr>
  <div class="container">
    @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif
    <div class="row mt-1  justify-content-center">
      <div class="col-lg-8 mt-2 mt-lg-0 pt-2 pt-3">
        <form action="{{ route('room.change.request') }}" method="POST" role="form" class="php-email-form mt-5 mb-5">
          @csrf
          <div class="row ">
            <div class="col-4">
              <label class="form-label pt-2 ">Prefered room no. and block name<span aria-hidden="true" class="required-fields"> *</span></label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text" name="preference" class="form-control" required>
            </div>
          </div>
          <div class="form-group mt-3 mb-3 pt-2">
            <div class="col-6">
              <label class="form-label">Your Reason<span aria-hidden="true" class="required-fields"> *</span></label>
            </div>
            <div class="col">
              <textarea class="form-control" name="reason" rows="3" placeholder=""></textarea>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Request</button>
          </div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
@endsection