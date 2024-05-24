@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
      <h1>Notice Add</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ url('office/index') }}>Home</a></li>
          <li class="breadcrumb-item">Rules&amp;Notice</li>
          <li class="breadcrumb-item">Notice</li>
          <li class="breadcrumb-item active">Notice Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">

            <div class="col-lg-10"> 

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">New Notice</h5>
            
                        <!-- Room allocation Form -->
                        <form action="/upload" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="pdf" class="form-label">Choose PDF</label>
                                <input type="file" class="form-control" id="pdf" name="pdf" accept="application/pdf">
                            </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form><!-- End Room allocation Form -->
        
                    </div>
                </div>
  
          </div>
        </div>
    </section>
  

@endsection