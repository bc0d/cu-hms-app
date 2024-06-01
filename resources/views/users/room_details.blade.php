@extends('layout.public_master')

@section('content')
<!-- Profile 1 - Bootstrap Brain Component -->
<section class="pt-5 pb-3 py-md-5 py-xl-8 contact sign-sec" id="contact">
    <h2 class="sign-sec  text-center">Room Details</h2><hr>
    <div class="container pt-4">
        <div class="row gy-4 gy-lg-0">
        <!--<div class="col-12 col-lg-8 col-xl-9">-->
            <div class="col-12 col-lg-12 col-xl-12 b-4">
                <div class="card widget-card border-light shadow-sm">
                    <div class="card-body p-4">
                        <div class="tab-content pt-1">
                            <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
                                <div class="row mb-2 g-0">
                                    <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Hostel</div>
                                    </div>
                                    <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">{{ $bed->room->block->hostel->hostel_name }}</div>
                                    </div>
                                    <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Block</div>
                                    </div>
                                    <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">{{ $bed->room->block->block_name }}</div>
                                    </div>
                                    <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Room</div>
                                    </div>
                                    <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">{{ $bed->room->room_name }}</div>
                                    </div>
                                    <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Bed</div>
                                    </div>
                                    <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">{{ $bed->bed_name }}</div>
                                    </div>
                                </div>  
                                <div class="row">
                                    <ul class="list-group list-group-flush mb-1 mt-3">
                                        <li class="list-group-item d-flex justify-content-start align-items-start">
                                            <a href="{{ url('user/bills-payments/rent-card') }}" class=" d-flex justify-content-end">Room Rent</a>
                                          </li>
                                          <li class="list-group-item d-flex justify-content-start align-items-start">
                                            <a href="{{ url('user/bills-payments/bills-card') }}" class=" d-flex justify-content-end">Water and Electric Bill</a>
                                          </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection