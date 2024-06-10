@extends('layout.public_master')



@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row content">
      <div class="col-lg-6">
        <h2 id="text-size">Calicut University Hostel</h2>
        <h5>The Calicut University Men's and Women's Hostels are vital parts of the campus, meeting diverse student accommodation needs. They provide safe, conducive living environments, evolving alongside the university. With modern amenities, vibrant atmospheres, and a focus on community, they foster academic focus, personal growth, and friendships, enriching campus life.</h5>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <h3 class="text-size pt-3"><strong>Latest News</strong></h3>
        <hr>
        @if ($notices->isEmpty())
          <p>No Notices to display</p>        
        @else
          <ul style="overflow-y: hidden; ">
            @foreach ($notices as $notice)
                <li style="overflow: hidden; padding-bottom:0px; margin-bottom:0px;">
                  <a href="j.pdf"><span class="greater-than" style="margin-right: 8px;">&gt;</span>{{ $notices->title }}</a>
                  <p>{{ $notices->created_at->format('d-m-Y') }}</p>
                </li>
            @endforeach
          </ul>
        @endif
      </div>
      <div class="d-grid m-0 mr-2 mt-1">
        <!--<button class="btn btn-outline-primary" type="button">more profie</button>-->
        <a href="{{ url('user/rules/notice-list') }}" class=" d-flex justify-content-end"><span class="arrow  ">&#8594;</span>More</a>
      </div>
    </div>

  </div>
</section>
<hr class="pt-1"><!-- End About Section -->


<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">
    <div class="row d-flex">
      @if(is_Null($roomAlloc) || $roomAlloc->allocation_status === 'Pending')
        <div class="col-md-4">
          <div class="icon-box">
            <i class="bi bi-bank"></i>
            <h4><a href="{{url('user/room/request') }}">Request Room</a></h4>
          </div>
        </div>
      @endif
      @if($student->bed_id)
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-bank"></i>
            <h4><a href="{{ url('user/room') }}">Room</a></h4>
          </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-arrow-repeat"></i>
            <h4><a href="{{ url('user/room/change/request') }}">Room change</a></h4>
          </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-bank"></i>
            <h4><a href="{{ url('user/room/vacate') }}">Room Vacate</a></h4>
          </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-info-circle"></i>
            <h4><a href="{{ url('user/bills-payments/card') }}">Bills & Payments</a></h4>
          </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-exclamation-octagon"></i>
            <h4><a href="{{ url('user/complaints') }}">Complaints</a></h4>
          </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-chat-dots"></i>
            <h4><a href="{{ url('user/feedback') }}">Feedback</a></h4>
          </div>
        </div>
      @endif
      <div class="col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="bi bi-exclamation-triangle"></i>
          <h4><a href="{{ url('user/rules/card') }}">Rules & Notices</a></h4>

        </div>
      </div>

      <!--
          <div class="col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="">feedback</a></h4>
              
            </div>
          </div>
-->
    </div>

  </div>
</section><!-- End Services Section -->

@endsection