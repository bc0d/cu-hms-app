@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
    <h1>Office</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ url('office/index') }}>Home</a></li>
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
                        @if (session('message'))
                          <div class="alert alert-success">
                            {{ session('message') }}
                          </div>
                        @endif
                                
                        <!-- Room allocation Form -->
                        <form class="row g-3" action="{{route('office.fee.edit')}}" method="POST" >  
                            @csrf

                            <div class="col-md-8 mb-3">
                                <label for="name" class="col-md-4 col-lg-3 col-form-label">Fee Name</label>
                                <div class="col-md-8 col-lg-10">
                                  <input type="text" class="form-control" name="name" id="name" value="{{ $fee->fee_name }}" readonly></input>
                                </div>
                            </div>
                            <div class="col-md-8 mb-3">
                                <label for="type" class="col-md-4 col-lg-3 col-form-label">Room Type</label>
                                <div class="col-md-8 col-lg-10">
                                  <input type="text" class="form-control" name="type" id="type" value="{{ $fee->room_type }}" readonly></input>
                                </div>
                            </div>
                            <div class="col-md-8 mb-3">
                                <label for="current" class="col-md-4 col-lg-3 col-form-label">Current Rate</label>
                                <div class="col-md-8 col-lg-10">
                                  <input type="text" class="form-control" name="current" id="current" value="{{ $fee->amount }}" readonly></input>
                                </div>
                            </div>
                            <div class="col-md-8 mb-3">
                                <label for="newrate" class="col-md-4 col-lg-3 col-form-label">New Rate</label>
                                <div class="col-md-8 col-lg-10">
                                  <input type="text" class="form-control" name="newrate" id="newrate"></input>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{ $fee->fee_id }}">
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