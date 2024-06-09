@extends('layout.admin_master')

@section('content')

  <div class="pagetitle">
    <h1>Dashboard-Registrar</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('registrar/index')}}">Dashboard</a></li>
        
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->
  <section class="section dashboard">
    <!-- Left side columns -->
    <div class="col-lg-10">
      <div class="row">




        <!-- Student Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Students Details</span></h5>
              <a class="d-flex align-items-center" href="{{ url('registrar/student/filter') }}">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-file-spreadsheet"></i>
                </div>
                <div class="ps-3">
                  <h6>view</h6>         
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- End Student Card -->
        <!-- Room Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Room Details</h5>
              <a class="d-flex align-items-center" href="{{ url('registrar/room-details/filter') }}">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-file-spreadsheet"></i>
                </div>
                <div class="ps-3">
                  <h6>view</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- End Room Card -->

        <!-- Bills Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Bills & Fees</h5>
              <a class="d-flex align-items-center" href="{{ url('registrar/fee/card') }}">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-file-spreadsheet"></i>
                </div>
                <div class="ps-3">
                  <h6>view</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- End Bills Card -->
        <!-- Fee Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Fee Maintanance</h5>
              <a class="d-flex align-items-center" href="{{ url('registrar/fee/maintanance') }}">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-file-spreadsheet"></i>
                </div>
                <div class="ps-3">
                  <h6>view</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- End Fee Card -->

                <!-- Admins Card -->
                <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-warn-card">
            <div class="card-body">
              <h5 class="card-title">Manage Admins</span></h5>
              <a class="d-flex align-items-center" href="{{ url('registrar/admins/manage') }}">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-pencil-square"></i>
                </div>
                <div class="ps-3">
                  <h6>view</h6>         
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- End Admins Card -->

        <!-- Rules Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-warn-card">
            <div class="card-body">
              <h5 class="card-title">Rules & Notices</span></h5>
              <a class="d-flex align-items-center" href="{{ url('registrar/rules/card') }}">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-pencil-square"></i>
                </div>
                <div class="ps-3">
                  <h6>view</h6>         
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- End Rules Card -->
        
        <!-- Complaints Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-warn-card">
            <div class="card-body">
              <h5 class="card-title">Complaints</h5>
              <a class="d-flex align-items-center" href="{{ url('registrar/complaints/card') }}">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-person-exclamation"></i>
                </div>
                <div class="ps-3">
                  <h6>view</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- End Complaints Card -->

                <!-- Complaints Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-warn-card">
            <div class="card-body">
              <h5 class="card-title">Request Admin</h5>
              <a class="d-flex align-items-center" href="{{ url('registrar/request-admin') }}">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="ps-3">
                  <h6>view</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- End Complaints Card -->

      
      </div>
    </div>
    <!-- End Left side columns -->
  </section>

@endsection