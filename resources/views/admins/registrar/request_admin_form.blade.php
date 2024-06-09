@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
    <h1>Registrar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('registrar/index') }}">Dashboard</a></li>
          <li class="breadcrumb-item">Request Admin</li>
        </ol>
      </nav>


    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">

            <div class="col-lg-10"> 

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Request Form</h5>
                            @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                            @endif
                                
                        <!-- Room allocation Form -->
                        <form class="row g-3" action="{{ route('registrar.admin.request')}}" method="POST" >  
                            @csrf
                            <div class="col-md-8">
                                <label for="hostel_id" class="form-label">Title</label>
                                <div>
                                    <input class="form-control" name="title" id="title" ></input>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="room_type" class="form-label">Category</label>
                                <select name="room_type" id="room_type" class="form-select">
                                  <option selected disabled>--select--</option>
                                  <option value="1">Mens Hostel</option>
                                  <option value="2">Ladies Hostel</option>
                                  <option value="">other</option>
                                </select>
                            </div>
                            <div class="col-md-8 mb-3">
                                <label for="amt" class=" col-form-label">Message</label>
                                <div>
                                    <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Request</button>
                            </div>
                        </form><!-- End Room allocation Form -->
        
                    </div>
                </div>
  
          </div>
        </div>
    </section>
  

@endsection