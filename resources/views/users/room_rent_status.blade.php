@extends('layout.public_master')

@section('content')
<!-- ======= service Section ======= -->
<section id="services" class="services">

<div class="container col-lg-8 hi mt-5  align-items-center py-5">
<h1 class="heading">ROOM RENT PAYMENT STATUS</h1>
<table class="table">
    <thead>
      <tr>
        <th>Month</th>
        <th>Bill Amount</th>
        <th>Status</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td data-label="Month">april</td>
        <td data-label="Bill Amount">70</td>
        <td data-label="Status">paid</a></td> 
      </tr>
      <tr>
        <td data-label="Month">may</td>
        <td data-label="Bill Amount">70</td>
        <td data-label="Status">not paid</a></td> 
      </tr>
      <tr>
        <td data-label="Month">june</td>
        <td data-label="Bill Amount">70</td>
        <td data-label="Status">not paid</a></td> 
      </tr>
      
      <!-- Add more rows as needed -->
    </tbody>
</table>
</div>
</section>
@endsection