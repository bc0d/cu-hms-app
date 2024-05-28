@extends('layout.public_master')

@section('content')
 <!-- ======= service Section ======= --> 
<section id="services" class="services sign-sec">

  <h2 class="sign-sec text-center">Rules</h2><hr>

  <div class="container col-lg-8 hi mt-5  align-items-center py-5">
    <div class="row gy-4 gy-lg-0">
      <div class="col-12">

            @if($rules->isEmpty())
                <p>No rules here. </p>
            @else
                <ol>
                    @foreach($rules as $rule)
                        <li>
                            <div class="list-group-item list-group-item-action " aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $rule->title }}</h5>
                                    
                                </div>
                                <p class="mb-1">{{ $rule->description }}</p>
                                            
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