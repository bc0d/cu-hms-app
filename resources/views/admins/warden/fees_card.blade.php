@extends('layout.admin_master')

@section('content')

  <div class="pagetitle">
    <h1>Fees&amp;Bills</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('warden/index')}}>Home</a></li>
        <li class="breadcrumb-item active">Fees Details</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->
  <section class="section dashboard">
    <!-- Left side columns -->
    <div class="col-lg-10">
      <div class="row">
        <!--Room Fees   Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Room rent</h5>
              <a class="d-flex align-items-center" href={{ url('warden/fee/room-rent') }}>
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
        <!-- End Room Fees Card -->
        <!-- Water bill Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card"> 
            <div class="card-body">
              <h5 class="card-title">Water bill</h5>
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
        <!-- End Water bill Card -->
      </div>
      <div class="row">
        <!-- Electricity bill Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Electricity bill</span></h5>
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
        <!-- End Electricity bill Card -->
        <!-- Other fee Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Other fee</h5>
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
        <!-- End Other fee Card -->
      </div>
    </div>
    <!-- End Left side columns -->
  </section>

@endsection