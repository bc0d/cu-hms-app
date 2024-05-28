@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
      <h1>Fee Update</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ url('registrar/index') }}>Home</a></li>
          <li class="breadcrumb-item">Fee Maintanance</li>
          <li class="breadcrumb-item active">Fee Update</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">

            <div class="col-lg-10"> 

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fee Update</h5>
            
                        <!-- Room allocation Form -->
                        <form class="row g-3">
                            <div class="row mb-3">
                                <label for="feeName" class="col-md-4 col-lg-3 col-form-label">Fee Name</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="feeName" type="text" class="form-control" id="feeName" value="-room rent-" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Current Rate</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="curRate" type="text" class="form-control" id="curRate" value="-120-" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="newRate" class="col-md-4 col-lg-3 col-form-label">New Rate</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="newRate" type="text" class="form-control" id="newRate">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form><!-- End Room allocation Form -->
        
                    </div>
                </div>
  
          </div>
        </div>
    </section>
  

@endsection