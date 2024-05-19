@extends('layout.mess_master')

@section('content')

    <div class="pagetitle">
    <h1>Mess</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ url('warden/index') }}>Home</a></li>
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
                        <form class="row g-3">
                            <div class="row mb-3">
                                <label for="noticeSubject" class="col-md-4 col-lg-3 col-form-label">Notice Subject</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="noticeSubject" type="text" class="form-control" id="noticeSubjectNew">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="newNotice">New Notice (PDF):</label>
                                <div class="col-md-8 col-lg-9">
                                    <input type="file" id="newNotice" name="newNotice" accept=".pdf">
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