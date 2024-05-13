@extends('layout.public_master')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="services" class="services">

<div class="container col-lg-8 hi mt-5  align-items-center">


<h1 class="heading pt-5">Mess Bill Payment</h1>
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
        <td data-label="Bill Amount">1200</td>
        <td data-label="#"><a href="#" class="btn">Pay Now</a></td> 
      </tr>
      <tr>
        <td data-label="Month">may</td>
        <td data-label="Bill Amount">1852</td>
        <td data-label="#"><a href="#" class="btn">Pay Now</a></td> 
      </tr>
      
      <!-- Add more rows as needed -->
    </tbody>
</table>
</div>
</section>
@endsection