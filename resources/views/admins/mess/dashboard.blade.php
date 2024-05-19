@extends('layout.mess_master')

@section('content')

  <div class="pagetitle">
  <h1>Mess</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('mess/index')}}>Home</a></li>
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
              <h5 class="card-title">Take Attendance</h5>
              <a class="d-flex align-items-center" href={{ url('mess-index/take-attendance') }}>
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
              <h5 class="card-title">Mess Menu</h5>
              <a class="d-flex align-items-center" href={{ url('mess-index/mess-menu') }}>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-basket"></i>
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
              <h5 class="card-title">Purchase & Bills</span></h5>
              <a class="d-flex align-items-center" href={{ url('mess-index/purchase-and-bills') }}>
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
              <h5 class="card-title">View Attendance</span></h5>
              <a class="d-flex align-items-center" href={{ url('mess-index/view-attendance') }}>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-calendar3"></i>
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
        <!-- Rules Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-warn-card">
            <div class="card-body">
              <h5 class="card-title">Rules & Notices</span></h5>
              <a class="d-flex align-items-center" href={{ url('mess-index/rules-and-notices') }}>
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
        <!-- End Student Card -->
        <!-- Room Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-warn-card">
            <div class="card-body">
              <h5 class="card-title">Complaints</h5>
              <a class="d-flex align-items-center" href={{ url('mess-index/complaints') }}>
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
        <!-- End Room Card -->
      </div>
    </div>
    <!-- End Left side columns -->
  </section>

@endsection