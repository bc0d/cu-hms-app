@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
    <h1>Office</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ url('office/index') }}>Home</a></li>
          <li class="breadcrumb-item">Room Allocation List</li>
          <li class="breadcrumb-item active">Room Allocation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">

            <div class="col-lg-10"> 
                <!--student data-->
                <div class="card-body pt-3">
                    <div class="tab-pane profile-edit pt-3" id="profile-edit">
                        <!-- Profile Data -->
                        <div>
                            <div class="row mb-3">
                              <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                              <div class="col-md-8 col-lg-9">
                                <img src="{{ asset($roomReq->student->image) }}" alt="Profile">
                              </div>
                            </div>
        
                            <div class="row mb-3">
                              <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                              <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control" id="fullName" value="{{ $roomReq->student->first_name }} {{ $roomReq->student->second_name }}" readonly>
                              </div>
                            </div>
        
                            <div class="row mb-3">
                              <label for="admno" class="col-md-4 col-lg-3 col-form-label">Admission No</label>
                              <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control" id="admno" value="{{ $roomReq->student->adm_no }}" readonly>
                              </div>
                            </div>
        
                            <div class="row mb-3">
                              <label for="admdate" class="col-md-4 col-lg-3 col-form-label">Admission Date</label>
                              <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control" id="admdate" value="{{ $roomReq->student->adm_date }}" readonly>
                              </div>
                            </div>
        
                            <div class="row mb-3">
                              <label for="distance" class="col-md-4 col-lg-3 col-form-label">Distance</label>
                              <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control" id="distance" value="{{ $roomReq->student->distance }} km" readonly>
                              </div>
                            </div>
        
                            <div class="row mb-3">
                              <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                              <div class="col-md-8 col-lg-9">
                                <textarea id="Address" class="form-control" rows="5" readonly>
                                  {{ $roomReq->student->house }},
                                  {{ $roomReq->student->street }},                            
                                  {{ $roomReq->student->post }},
                                  {{ $roomReq->student->district }},{{ $roomReq->student->state }},
                                  {{ $roomReq->student->country }}, PIN-{{ $roomReq->student->pin }}
                                </textarea>
                              </div>
                            </div>
        
                            <div class="row mb-3">
                              <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                              <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control" id="Phone" value="{{ $roomReq->student->phone }}" readonly>
                              </div>
                            </div>
        
                            <div class="row mb-3">
                              <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                              <div class="col-md-8 col-lg-9">
                                <input type="email" class="form-control" id="Email" value="{{ $roomReq->student->email }}" readonly>
                              </div>
                            </div>
        
                            <div class="row mb-3">
                              <label for="Twitter" class="col-md-4 col-lg-3 col-form-label"> Reservation</label>
                              <div class="col-md-8 col-lg-9">
                                <input name="twitter" type="text" class="form-control" id="Twitter" value="{{ $roomReq->student->reservation }}" readonly>
                              </div>
                            </div>
        
                            <div class="row mb-3">
                              <label for="guardian" class="col-md-4 col-lg-3 col-form-label">Guardian Name</label>
                              <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control" id="guardian" value="{{ $roomReq->student->guardian }}" readonly>
                              </div>
                            </div>
        
                            <div class="row mb-3">
                              <label for="guardianPhone" class="col-md-4 col-lg-3 col-form-label">Guardian Phone</label>
                              <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control" id="guardianPhone" value="{{ $roomReq->student->guardian_phone }}" readonly>
                              </div>
                            </div>
        
                            <div class="row mb-3">
                              <label for="pwd" class="col-md-4 col-lg-3 col-form-label">PWD</label>
                              <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control" id="pwd" value="{{ $roomReq->student->pwd }}" readonly>
                              </div>
                            </div>
                          </div>
                    </div>
                </div><!-- End Bordered Tabs -->

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Room Allocation</h5>
            
                        <!-- Room allocation Form -->
                        <form action="{{ route('office.room.allocate') }}" method="POST" class="row g-3">
                          @csrf
                            <div class="col-md-8">
                                <label for="block" class="form-label">Block</label>
                                <select name="block" id="block" class="form-select">
                                  <option value="">Select Block</option>
                                  @foreach($blocks as $block)
                                      <option value="{{ $block->block_id }}">{{ $block->block_name }}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label for="room" class="form-label">Room</label>
                                <select name="room" id="room" class="form-select" disabled>
                                  <option value="">Select Room</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label for="bed" class="form-label">Bed</label>
                                <select name="bed" id="bed" class="form-select" disabled>
                                  <option value="">Select Bed</option>
                                </select>
                            </div>
                            <input type="hidden" name="student_id" value="{{ $roomReq->student->student_id }}">
                            <input type="hidden" name="req_id" value="{{ $roomReq->allocate_req_id }}">
                            <div class="text-center">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-primary">Assign</button>
                            </div>
                        </form><!-- End Room allocation Form -->
        
                    </div>
                </div>
  
          </div>
        </div>
    </section>

    <script src="{{ asset('admins/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#block').change(function() {
                var blockId = $(this).val();
                if (blockId) {
                    $.ajax({
                        url: '/office/room/blocks/' + blockId + '/rooms',
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#room').empty().append('<option value="">Select Room</option>').prop('disabled', false);
                            $('#bed').empty().append('<option value="">Select Bed</option>').prop('disabled', true);
                            $.each(data, function(key, value) {
                                $('#room').append('<option value="'+ value.room_id +'">'+ value.room_name +' ('+value.room_type+')</option>');
                            });
                        }
                    });
                } else {
                    $('#room').empty().append('<option value="">Select Room</option>').prop('disabled', true);
                    $('#bed').empty().append('<option value="">Select Bed</option>').prop('disabled', true);
                }
            });

            $('#room').change(function() {
                var roomId = $(this).val();
                if (roomId) {
                    $.ajax({
                        url: '/office/room/rooms/' + roomId + '/beds',
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#bed').empty().append('<option value="">Select Bed</option>').prop('disabled', false);
                            $.each(data, function(key, value) {
                                $('#bed').append('<option value="'+ value.bed_id +'">'+ value.bed_name+' ('+value.bed_type+')</option>');
                            });
                        }
                    });
                } else {
                    $('#bed').empty().append('<option value="">Select Bed</option>').prop('disabled', true);
                }
            });
        });
    </script>
  

@endsection