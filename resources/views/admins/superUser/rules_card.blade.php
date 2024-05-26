@extends('layout.admin_master')

@section('content')

  <div class="pagetitle">
    <h1>Rules&amp;Notices</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('super-user/index')}}>Home</a></li>
        <li class="breadcrumb-item active">Rules&amp;Notices</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->
  <section class="section dashboard">
    <!-- Left side columns -->
    <div class="col-lg-10">
      <div class="row">
        <!--Rule  Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card">
            <div class="card-body">
              <h5 class="card-title">Rules</h5>
              <a class="d-flex align-items-center" href={{ url('super-user/rules/rule-list') }}>
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
        <!-- End Rule Card -->
        <!-- Notice Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card req-view-card"> 
            <div class="card-body">
              <h5 class="card-title">Notice</h5>
              <a class="d-flex align-items-center" href={{ url('super-user/rules/notice-list') }}>
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
        <!-- End Notice Card -->
      </div>
    </div>
    <!-- End Left side columns -->
  </section>

@endsection