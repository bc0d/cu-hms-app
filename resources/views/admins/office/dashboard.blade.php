@extends('layout.admin_master')

@section('content')

  <div class="pagetitle">
  <h1>Office</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('office/index')}}>Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->
  <section class="section dashboard">
    <!-- Left side columns -->
    <div class="col-lg-10">
      <div class="row">
        <!--Allocation  Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-add-card">
            <div class="card-body">
              <h5 class="card-title">Admission Request</h5>
              <a class="d-flex align-items-center" href={{ url('office/admission/request') }}>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-clipboard-plus"></i>
                </div>
                <div class="ps-3">
                  <h6>view</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- End Allocation Card -->
        <!-- Vacating Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-rmv-card"> 
            <div class="card-body">
              <h5 class="card-title">Vacating Requests</h5>
              <a class="d-flex align-items-center" href={{ url('office/vacate/request') }}>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-clipboard-minus"></i>
                </div>
                <div class="ps-3">
                  <h6>view</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- End Vacating Card -->
      </div>
      <div class="row">
        <!-- Room Allocation Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-add-card">
            <div class="card-body">
              <h5 class="card-title">Room Allocation</span></h5>
              <a class="d-flex align-items-center" href={{ url('office/room/allocation-list') }}>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-house-add"></i>
                </div>
                <div class="ps-3">
                  <h6>view</h6>         
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- End Room allocation Card -->
        <!-- Room change Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Room Change Request</span></h5>
              <a class="d-flex align-items-center" href={{ url('office/room-change/request') }}>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-house-gear"></i>
                </div>
                <div class="ps-3">
                  <h6>view</h6>         
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- End Room change Card -->
      </div>
      <div class="row">
        <!-- Student Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Students Details</span></h5>
              <a class="d-flex align-items-center" href={{ url('office/student/card') }}>
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
              <a class="d-flex align-items-center" href={{ url('office/room-details/card') }}>
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
      </div>
      <div class="row">
        <!-- Bills Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Bills & Fees</h5>
              <a class="d-flex align-items-center" href={{ url('office/fee/card') }}>
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
              <a class="d-flex align-items-center" href={{ url('office/fee/maintanance') }}>
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
      </div>
      <div class="row">
        <!-- Rules Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-warn-card">
            <div class="card-body">
              <h5 class="card-title">Rules & Notices</span></h5>
              <a class="d-flex align-items-center" href={{ url('office/rules/card') }}>
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
              <a class="d-flex align-items-center" href={{ url('office/complaints') }}>
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
      </div>
      <div class="row">
        <!-- Mess Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Mess Details</span></h5>
              <a class="d-flex align-items-center" href="">
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
        <!-- End Mess Card -->
      </div>
    </div>
    <!-- End Left side columns -->
  </section>

@endsection