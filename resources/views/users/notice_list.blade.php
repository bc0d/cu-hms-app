@extends('layout.public_master')

@section('content')
 <!-- ======= service Section ======= --> 
<section id="services" class="services sign-sec">

  <h2 class="sign-sec text-center">Notices</h2><hr>

  <div class="container col-lg-8 hi mt-5  align-items-center py-5">
    <div class="row gy-4 gy-lg-0">
      <div class="col-12">
                <!-- List group with Advanced Contents -->
                @if ($notices->isEmpty())
                    <p>No Notices to display</p>        
                @else
                    <div class="list-group">
                        <ul>
                            @foreach ($notices as $notice)
                                <li>
                                    <div class="list-group-item list-group-item-action " aria-current="true">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">{{ $notice->title }}</h5>
                                        </div>
                                        <p class="mb-1"><a href="{{ asset($notice->path) }}">Click Here</a></p> 
                                    </div>
                                </li>  
                            @endforeach
                        </ul>
                    </div><!-- End List group Advanced Content -->        
                @endif
            </div>
        </div>
    </div>
</section>
@endsection