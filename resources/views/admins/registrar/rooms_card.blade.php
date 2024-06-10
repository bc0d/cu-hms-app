@extends('layout.admin_master')

@section('content')

  <div class="pagetitle">
    <h1>Registrar</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('registrar/index')}}>Home</a></li>
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
              <h5 class="card-title">All Rooms</h5>
              <a class="d-flex align-items-center" href={{ url('registrar/room-details/list') }}>
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
        <!-- End Allocation Card -->
        <!-- Vacating Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card"> 
            <div class="card-body">
              <h5 class="card-title">New Block</h5>
              <a class="d-flex align-items-center" href="">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-house"></i>
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
        <!-- Room change Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Old Block</span></h5>
              <a class="d-flex align-items-center" href="">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-house"></i>
                </div>
                <div class="ps-3">
                  <h6>view</h6>         
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- End Room change Card -->
        <!-- Complaints Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Annex</h5>
              <a class="d-flex align-items-center" href="">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-house"></i>
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
        <!-- Room change Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">PHD Block</span></h5>
              <a class="d-flex align-items-center" href="">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-house"></i>
                </div>
                <div class="ps-3">
                  <h6>view</h6>         
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- End Room change Card -->
        <!-- Complaints Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">MPhil Block</h5>
              <a class="d-flex align-items-center" href="">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-house"></i>
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