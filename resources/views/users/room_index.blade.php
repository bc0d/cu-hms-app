@extends('layout.public_master')

@section('content')
<section id="services" class="services">
  <div class="container col-lg-8 hi mt-5  align-items-center">

    <div class="row d-flex mt-5 justify-content-around py-5  ">
      <div class="col-md-4">
        <div class="icon-box">
        <h4 ><a href="{{ url('user/room/room-rent') }}">room rent</a></h4>
        </div>
      </div>
      <div class="col-md-4 mt-5 mt-md-0 ml-md-2"> <!-- Added ml-md-2 for margin on medium screens and above -->
        <div class="icon-box">
        <h4 ><a href="{{ url('user/room/other-bill') }}">other bill</a></h4>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection



