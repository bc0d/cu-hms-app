@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
      <h1>HOD</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ url('hod/index') }}>Home</a></li>
          <li class="breadcrumb-item">Allocation Request</li>
          <li class="breadcrumb-item active">Student Aproval</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
          
          <div class="col-lg-10">
  
            <div class="card">
              <div class="card-body pt-3">
  
                  <div class="tab-pane profile-edit pt-3" id="profile-edit">
  
                    <!-- Profile Edit Form -->
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
                    <form action="{{ route('hod.alloc.action') }}" method="POST" class="mt-5">
                      @csrf
                      <div class="row mb-3">
                        <label for="hostel" class="col-md-4 col-lg-3 col-form-label">Hostel</label>
                        <div class="col-md-8 col-lg-9">
                          <select name="hostel" id="hostel" class="form-control">
                            <option selected>--Select--</option>
                            <option value="Mens Hostel">Mens Hostel</option>
                            <option value="Ladies Hostel">Ladies Hostel</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="status" class="col-md-4 col-lg-3 col-form-label">Request status</label>
                        <div class="col-md-8 col-lg-9">
                          <select name="status" id="status" class="form-control">
                            <option selected>--Select--</option>
                            <option value="Approved">Approve</option>
                            <option value="Rejected">Reject</option>
                          </select>
                        </div>
                      </div>
                      <input type="hidden" name="requestId" value="{{ $roomReq->allocate_req_id }}">
                      <div class="text-center">
                        <button type="clear" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </form><!-- End Profile Edit Form -->
  
                  </div>
  

  
                </div><!-- End Bordered Tabs -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>
  

@endsection