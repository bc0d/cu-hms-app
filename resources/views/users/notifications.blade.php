@extends('layout.public_master')

@section('content')
 <!-- ======= service Section ======= --> 
<section id="services" class="services sign-sec">

  <h2 class="sign-sec text-center">Notifications</h2><hr>

  <div class="container col-lg-8 hi mt-5  align-items-center py-5">
    <div class="row gy-4 gy-lg-0">
      <div class="col-12">

            @if($notifications->isEmpty())
                <p>No Notifications here. </p>
            @else
                <ol>
                    @foreach($notifications as $notification)
                        <li>
                            <div class="list-group-item list-group-item-action " aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $notification->notification }}</h5>
                                    <p class="mb-1">{{ $notification->created_at->diffForHumans() }}</p>
                                </div>      
                            </div>
                        </li>
                    @endforeach 
                </ol> 
            @endif
                    
            </div>
        </div>
    </div>
</section>
@endsection