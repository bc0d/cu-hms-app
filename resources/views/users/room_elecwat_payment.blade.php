@extends('layout.public_master')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact sign-sec">
  <h2 class="sign-sec  text-center">Pay Electric and Water</h2><hr>
  <div class="container">
    <div class="row mt-1  justify-content-center">
      <div class="col-lg-4 mt-2 mt-lg-0 pt-2 pt-3 text-center">
        @php
            $createdAt = \Carbon\Carbon::parse($bills->month_of_fee);
            $monthYear = $createdAt->format('F Y'); // 'F' for full month name, 'Y' for four-digit year
        @endphp
        <form action="{{ route('bills.bill.pay') }}" method="POST" role="form" class="php-email-form">
          @csrf
          <div class="form-group d-flex mt-3 mb-3 pt-2">
            <div class="col-4">
              <label class="form-label">Month</label>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="month" value="{{ $monthYear }}" readonly>
            </div>
          </div>
          <div class="form-group d-flex mt-3 mb-3 pt-2">
            <div class="col-4">
              <label class="form-label">Amount</label>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="amount" value="{{ $bills->amount }}" readonly>
            </div>
          </div>
          <input type="hidden" name="id" value="{{ $bills->waterelectric_bills_id}}">
          <input type="hidden" name="student" value="{{ $student->student_id }}">
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
@endsection