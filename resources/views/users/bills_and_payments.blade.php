@extends('layout.public_master')

@section('content')
 <!-- ======= service Section ======= -->   
<section id="services" class="services sign-sec">
  <h2 class="sign-sec  text-center">Bills And Payments</h2><hr>
  <div class="container col-lg-8 hi mt-5  align-items-center">
    <div class="row d-flex mt-5 justify-content-around py-5  ">
      <div class="col-md-4">
        <div class="icon-box">
          <h4 ><a href="{{ url('user/bills-payments/rent-card') }}">Room Rent</a></h4>
        </div>
      </div>
      <div class="col-md-4 mt-5 mt-md-0 ml-md-2"> <!-- Added ml-md-2 for margin on medium screens and above -->
        <div class="icon-box">
          <h4 ><a href="{{ url('user/bills-paymets/bills-card') }}">Water&Electricity</a></h4>
        </div>
        
      </div>
      
    </div>

  </div>
</section>
@endsection