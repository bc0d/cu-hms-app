@extends('layout.public_master')

@section('content')


<section id="services" class="services sign-sec">
  <h2 class="sign-sec  text-center">Feedbacks</h2><hr>
  <div class="container col-lg-8 hi mt-5  align-items-center">
    
    <div class="notify-tray flex items-center justify-between pb-6 font-bold mt-5 mb-3">
          <div class="d-grid m-0 mr-2 mt-1">
                <a href="{{ url('user/feedback/give-feedback') }}" class=" d-flex justify-content-end"><span class="arrow  ">&#8594;</span>give feedback</a>
          </div>
    </div>
    <div class="row notifications-tray flex flex-col gap-3 mb-5" >
      @if ($feedbacks->isEmpty())
          <p>No feedbacks</p>
      @else
          @foreach ($feedbacks as $feedback)
            <div class="notification relative rounded-lg border mb-3">
              <div class="read-shadow flex w-full gap-3 rounded-lg bg-[var(--veryLightGrayishBlue)] p-2">
                
                <div class="d-flex relative leading-[1.15rem] tracking-wide">
                  <img class="status-on h-fit nav-prof" src="{{ asset($feedback->student->image) }}" alt="{{ $feedback->student->first_name }}">
                  <div class="feed">
                    <p class="feed-name">
                      <strong>{{ $feedback->student->first_name }}</strong>
                    </p>
                    <span>{{ $feedback->updated_at->diffForHumans() }}</span>
                  </div>
                </div>
                <p class="rounded-lg bg-white p-4 text-[var(--darkGrayishBlue)]">{{ $feedback->review }}</p>
              </div>
            </div>
          @endforeach
      @endif

    </div>
  </div>
</section>

@endsection