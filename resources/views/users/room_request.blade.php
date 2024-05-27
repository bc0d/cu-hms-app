@extends('layout.public_master')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact sign-sec">
  <h2 class="sign-sec  text-center">Request room</h2><hr>
  <div class="container">
    @if (is_Null($roomAlloc))
      <div class="row mt-1  justify-content-center">
        <div class="col-lg-8 mt-2 mb-5 mt-lg-2 pt-2 pt-3">
          <form action="{{ route('room.request') }}" method="POST" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="name">Name</label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" name="name" class="form-control" value="{{ $student->first_name }} {{ $student->second_name }}" readonly>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="dept">Department</label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" name="dept" class="form-control" value="{{ $department->department_name }}" readonly>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="dept">Admission No</label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" name="dept" class="form-control" value="{{ $student->adm_no }}" readonly>
              </div>
            </div>
            <div class="text-center mt-3">
              <button type="submit" class="btn btn-primary">Request Room</button>
            </div>
          </form>

        </div>

      </div>
    @else
      <div class="row mt-1  justify-content-center">
        <div class="col-lg-8 mt-2 mb-5 mt-lg-2 pt-2 pt-3">
          <div class="row mb-1">
            <h5>Department Verification Status: </h5>
            <span>{{ $roomAlloc->dep_verification_status }}</span>
          </div>
          <div class="row mb-1">
            <h5>Payment Status: </h5>
            <span>{{ $roomAlloc->payment_status }}</span>
            @if ($roomAlloc->dep_verification_status == 'Approved' && $roomAlloc->payment_status == 'Pending')
                <div class="row">
                  <p>payment amount : 500</p>
                  <a href="">make payment</a>
                </div>
            @endif
          </div>
          <div class="row mb-1">
            <h5>Allocation Status: </h5>
            <span>{{ $roomAlloc->allocation_status }}</span>
          </div>
        </div>

      </div>
    @endif



  </div>
</section><!-- End Contact Section -->
@endsection