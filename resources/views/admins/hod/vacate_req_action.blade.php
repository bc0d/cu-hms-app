@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
        <h1>HOD</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href={{ url('hod/index') }}>Home</a></li>
            <li class="breadcrumb-item">Vacating Request</li>
            <li class="breadcrumb-item active">Student Aproval</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
          
  
          <div class="col-lg-10">
  
            <div class="card">
              @if (session('message'))
                <div class="alert alert-success">
                  {{ session('message') }}
                </div>
              @endif
              <div class="card-body pt-3">
  
                  <div class="tab-pane profile-edit pt-3" id="profile-edit">
  
                    <!-- Profile Edit Form -->
                    <form action="{{ route('hod.vacate.approve') }}" method="POST">
                      @csrf
                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                          <img src="{{ asset($vacate->student->image) }}" alt="Profile">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="{{ $vacate->student->first_name }} {{ $vacate->student->second_name }}" readonly>
                        </div> 
                      </div>
  
                      <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Payment Status</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="phone" type="text" class="form-control" id="Phone" value="{{ $vacate->payment_status }}" readonly>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Office Status</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="phone" type="text" class="form-control" id="Phone" value="{{ $vacate->office_status }}" readonly>
                        </div>
                      </div>
                      <input type="hidden" name="id" value="{{ $vacate->vacate_req_id }}">
                      <div class="text-center">
                        <button type="submit" class="btn btn-danger">Reject</button>
                        <button type="submit" class="btn btn-success">Approve</button>
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