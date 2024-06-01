@extends('layout.public_master')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact sign-sec">
  <h2 class="sign-sec  text-center">Request Vacate</h2><hr>
  <div class="container">
   {{-- @if (is_Null($roomAlloc))
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
            <div class="row">
              <div class="col-md-4 form-group">
                <label for="hostel">Hostel </label>
              </div>
              <div class="col-md-8 form-group">
                <select name="hostel" id="hostel" class="form-control">
                  <option selected>--select--</option>
                  <option value="Mens Hostel">Mens Hostel</option>
                  <option value="Ladies Hostel">Ladies Hostel</option>
                </select>
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
          <div class="row mb-2">
            <h5>Department Verification Status: </h5>
            <span>{{ $roomAlloc->dep_verification_status }}</span>
          </div>
          <div class="row mb-2">
            <h5>Payment Status: </h5>
            <span>{{ $roomAlloc->payment_status }}</span>
            @if ($roomAlloc->dep_verification_status == 'Approved' && $roomAlloc->payment_status == 'Pending')
                <div class="row">
                  @foreach ($fee as $item)
                      <div class="col-lg-6 mt-1 mb-1">
                        <p>Fee Name : {{ $item->fee_title }}</p>
                        <p>Fee Amount : {{ $item->amount }}</p>
                      </div>
                  @endforeach
                  <hr>
                  <form action="{{ route('room.request.payment') }}" method="POST" class="col-lg-6">
                    @csrf
                    <input type="hidden" name="student_id" value="{{ $student->student_id }}">
                    <div class="row mb-2">
                      <div class="col-md-6 form-group">
                        <label for="purpose">Purpose</label>
                      </div>
                      <div class="col-md-6 form-group">
                        <input type="text" class="form-control" id="purpose" name="purpose" value="Hostel Admission" readonly>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for="amt">Total Fee</label>
                      </div>
                      <div class="col-md-6 form-group">
                        <input type="text" class="form-control" id="amt" name="amount" value="{{ $total }}" readonly>
                      </div>
                    </div>
                    <div class="mt-2 mb-3">
                      <button type="submit" class="btn btn-secondary">Pay now</button>
                    </div>
                  </form>
                  
                </div>
            @endif
          </div>
          <div class="row mb-2">
            <h5>Warden Verification Status: </h5>
            <span>{{ $roomAlloc->warden_verification_status }}</span>
          </div>
          <div class="row mb-2">
            <h5>Allocation Status: </h5>
            <span>{{ $roomAlloc->allocation_status }}</span>
          </div>
        </div>

      </div>
    @endif
    --}}



  </div>
</section><!-- End Contact Section -->
@endsection