@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
    <h1>Warden</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ url('warden/index') }}>Home</a></li>
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
                        <h5 class="card-title">Fee Add</h5>
                        @if (session('message'))
                          <div class="alert alert-success">
                            {{ session('message') }}
                          </div>
                        @endif
                                
                        <!-- Room allocation Form -->
                        <form class="row g-3" action="{{route('warden.fee.add')}}" method="POST" >  
                            @csrf
                            <div class="col-md-8">
                                <label for="hostel_id" class="form-label">Hostel Name</label>
                                <select name="hostel_id" id="hostel_id" class="form-select">
                                  <option selected>--select--</option>
                                  @if($admin->access === 'mens')
                                    <option value="1">1.Mens Hostel</option>
                                  @else
                                    <option value="2">2.Ladies Hostel</option>
                                  @endif
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label for="room_type" class="form-label">Room type</label>
                                <select name="room_type" id="room_type" class="form-select">
                                  <option selected>--select--</option>
                                  <option value="single">Single</option>
                                  <option value="shared">Shared</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label for="fee_item" class="form-label">Fee Item</label>
                                <select name="fee_item" id="fee_item" class="form-select">
                                  <option selected>--select--</option>
                                  <option value="room rent">Room Rent</option>
                                  <option value="water/electric bill">Water & Electricity</option>
                                </select>
                            </div>
                            <div class="col-md-8 mb-3">
                                <label for="amt" class="col-md-4 col-lg-3 col-form-label">Amount</label>
                                <div class="col-md-8 col-lg-6">
                                  <input type="text" class="form-control" name="amt" id="amt"></input>
                                </div>
                                
                            </div>
                            <div class="text-center">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form><!-- End Room allocation Form -->
        
                    </div>
                </div>
  
          </div>
        </div>
    </section>
  

@endsection