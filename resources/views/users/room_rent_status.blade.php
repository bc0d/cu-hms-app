@extends('layout.public_master')

@section('content')
<!-- ======= service Section ======= -->
<section id="services" class="services sign-sec">
  <h2 class="sign-sec  text-center">Room Rent Status</h2><hr>
  <div class="container col-lg-8 hi mt-5  align-items-center py-5">
    <div class="row gy-4 gy-lg-0">
      <div class="col-12">
        @if($rents->isEmpty())
          <p>No data to display</p>
        @else
          <table class="table">
              <thead>
                <tr>
                  <th>Month</th>
                  <th>Rent Amount</th>
                  <th>Payment Status</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach ($rents as $rent)
                  @php
                      $createdAt = \Carbon\Carbon::parse($rent->month_of_fee);
                      $monthYear = $createdAt->format('F Y'); // 'F' for full month name, 'Y' for four-digit year
                  @endphp
                  <tr>
                    <td data-label="Month">{{ $monthYear }}</td>
                    <td data-label="Rent Amount">{{ $rent->amount }}</td>
                    <td data-label="Payment Status">{{ $rent->paid_status }}</td>
                    @if($rent->paid_status === 'Pending')
                      <td><a href="{{ url('user/bills-payments/rent/'.$rent->room_rent_id) }}">Pay Now</a></td> 
                    @endif
                  </tr>
                @endforeach
              </tbody>
          </table>
        @endif
      </div>
    </div>
  </div>
</section>
@endsection