@extends('layout.public_master')

@section('content')
<!-- ======= service Section ======= -->
<section id="services" class="services sign-sec">
  <h2 class="sign-sec  text-center">Room Water and Electric Bill Status</h2><hr>
  <div class="container col-lg-8 hi mt-5  align-items-center py-5">
    <div class="row gy-4 gy-lg-0">
      <div class="col-12">
        @if(is_Null($bills))
          <p>No data to display</p>
        @else
          <table class="table">
              <thead>
                <tr>
                  <th>Month</th>
                  <th>Bill Amount</th>
                  <th>Payment Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($bills as $bill)
                  @php
                      $createdAt = \Carbon\Carbon::parse($bill->month_of_fee);
                      $monthYear = $createdAt->format('F Y'); // 'F' for full month name, 'Y' for four-digit year
                  @endphp
                  <tr>
                    <td data-label="Month">{{ $monthYear }}</td>
                    <td data-label="Bill Amount">{{ $bill->amount }}</td>
                    <td data-label="Payment Status">{{ $bill->paid_status }}</td>
                    @if($bill->paid_status === 'Pending')
                      <td><a href="{{ url('user/bills-payments/bill/'.$bill->waterelectric_bill_id) }}">Pay Now</a></td> 
                    @endif
                  </tr>
                @endforeach
                
                <!-- Add more rows as needed -->
              </tbody>
          </table>
        @endif
      </div>
    </div>
  </div>
</section>
@endsection