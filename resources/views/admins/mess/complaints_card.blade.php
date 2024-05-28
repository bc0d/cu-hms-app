@extends('layout.admin_master')

@section('content')

  <div class="pagetitle">
  <h1>Mess</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('mess/index')}}>Home</a></li>
        <li class="breadcrumb-item active">Complaints</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->
  <section class="section dashboard">
    <!-- Left side columns -->
    <div class="col-lg-10">
      <div class="row">
        <!-- New Complaints  Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-warn-card">
            <div class="card-body">
              <h5 class="card-title">New Complaints</h5>
              <a class="d-flex align-items-center" href="{{ url('mess/complaints/new') }}">
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
        <!-- End New Complaints Card -->
        <!-- Solved Complaints Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-add-card"> 
            <div class="card-body">
              <h5 class="card-title">Solved Complaints</h5>
              <a class="d-flex align-items-center" href="{{ url('mess/complaints/solved') }}">
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
        <!-- End Solved Complaints Card -->
      </div>
      <div class="row">
        <!-- All Complaints Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">All Complaints</span></h5>
              <a class="d-flex align-items-center" href="{{ url('mess/complaints/all') }}">
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
        <!-- End All Complaints Card -->
      </div>
    </div>
    <!-- End Left side columns -->
  </section>

@endsection