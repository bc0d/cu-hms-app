@extends('layout.public_master')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact sign-sec">
    <h2 class="sign-sec  text-center">Request Room Vacate</h2><hr>
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="row mt-1 justify-content-center">
            <div class="col-lg-8 mt-2 mb-5 mt-lg-2 pt-2 pt-3">
                <div class="card widget-card border-light shadow-sm">
                    <div class="card-body p-4">
                        <div class="tab-content pt-1">
                            <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
                                <div class="text-center">
                                    <div class="row mb-2 g-0">
                                        <div class="col-6">
                                            <p>Room vacating status</p>
                                        </div>
                                        @if (is_Null($vacateReq))
                                            <div class="col-6">
                                                <p>Not Applied</p>
                                            </div>
                                        @else
                                            <div class="col-6">
                                                <p>Requested</p>
                                            </div>
                                        @endif   
                                    </div> 
                                    <div class="row mb-2 g-0">
                                        <div class="col-6">
                                            <p>Room rent status</p>
                                        </div>
                                        @if (!$rentStatus->isEmpty())
                                            <div class="col-6">
                                                <p>Payment Pending</p>
                                            </div>
                                        @else
                                            <div class="col-6">
                                                <p>No Due</p>
                                            </div>
                                        @endif
                                    </div>  
                                    <div class="row mb-2 g-0">
                                        <div class="col-6">
                                            <p>Water and Electric bill status</p>
                                        </div>
                                        @if (!$billStatus->isEmpty())
                                            <div class="col-6">
                                                <p>Payment Pending </p>
                                            </div>
                                        @else
                                            <div class="col-6">
                                                <p>No Due</p>
                                            </div>
                                        @endif
                                    </div>  
                                </div>
                                
                                <div>
                                    @if (is_Null($vacateReq))
                                        @if (!$rentStatus->isEmpty() || !$billStatus->isEmpty())
                                            <p>Peyments pending. Not eligible for vacate Request</p>
                                        @else
                                            <form action="{{ route('room.vacate.request') }}" method="POST" role="form" class="php-email-form">
                                                @csrf
                                                
                                                <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label for="hostel">Hostel Name</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" name="hostel" class="form-control" value="{{ $bed->room->block->hostel->hostel_name }}" readonly>
                                                </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 form-group">
                                                    <label for="block">Block Name</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                    <input type="text" name="block" class="form-control" value="{{ $bed->room->block->block_name }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 form-group">
                                                    <label for="room">Room No</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                    <input type="text" name="room" class="form-control" value="{{ $bed->room->room_name }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 form-group">
                                                    <label for="bed">Bed No</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                    <input type="text" name="bed" class="form-control" value="{{ $bed->bed_name }}" readonly>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="student_id" class="form-control" value="{{ $student->student_id }}">
                                                <input type="hidden" name="department" class="form-control" value="{{ $student->department }}">
                                                <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-primary">Vacate</button>
                                                </div>
                                            </form>
                                        @endif
                                    @else
                                        <div class="text-center">
                                            <div class="row mb-2 g-0">
                                                <div class="col-6">
                                                    <p>Office approval</p>
                                                </div>
                                                <div class="col-6">
                                                    <p>{{ $vacateReq->office_status }}</p>
                                                </div>
                                            </div> 
                                            <div class="row mb-2 g-0">
                                                <div class="col-6">
                                                    <p>Warden approval</p>
                                                </div>
                                                <div class="col-6">
                                                    <p>{{ $vacateReq->warden_status }}</p>
                                                </div>
                                            </div> 
                                            <div class="row mb-2 g-0">
                                                <div class="col-6">
                                                    <p>Hod approval</p>
                                                </div>
                                                <div class="col-6">
                                                    <p>{{ $vacateReq->hod_status }}</p>
                                                </div>
                                            </div>
                                        </div> 
                                    @endif
                                    
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
</section><!-- End Contact Section -->
@endsection