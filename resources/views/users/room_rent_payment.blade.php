@extends('layout.public_master')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="services" class="services sign-sec">
  <h2 class="sign-sec  text-center">Room Rent Payment</h2><hr>
  <div class="container col-lg-8 hi mt-5  align-items-center py-5">
    <div class="row gy-4 gy-lg-0">
      <div class="col-12">
        <h1 class="heading">ROOM RENT BILL PAYMENT</h1>
        <table class="table">
            <thead>
              <tr>
                <th>Month</th>
                <th>Bill Amount</th>
                <th>#</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Month">april</td>
                <td data-label="Bill Amount">70</td>
                <td data-label="#"><a href="#" class="btn">Pay Now</a></td> 
              </tr>
              <tr>
                <td data-label="Month">may</td>
                <td data-label="Bill Amount">70</td>
                <td data-label="#"><a href="#" class="btn">Pay Now</a></td> 
              </tr>
              <tr>
                <td data-label="Month">june</td>
                <td data-label="Bill Amount">70</td>
                <td data-label="#"><a href="#" class="btn">Pay Now</a></td> 
              </tr>
              
              <!-- Add more rows as needed -->
            </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

@endsection
