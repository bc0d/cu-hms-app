@extends('layout.admin_master')

@section('content')

  <div class="pagetitle">
   <h1>HOD</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('hod/index')}}>Home</a></li>
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
              <h5 class="card-title">Allocation Requests</h5>
              <a class="d-flex align-items-center" href={{ url('hod/allocation/request')}}>
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
              <a class="d-flex align-items-center" href={{ url('hod/vacate/request')}}>
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
        <!-- Student Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Students Details</span></h5>
              <a class="d-flex align-items-center" href={{ url('hod/students-details/list') }}>
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
        <!-- Fee Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Fee Dues</h5>
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
        <!-- End Fee Card -->
      </div>
    </div>
    <!-- End Left side columns -->
  </section>

@endsection