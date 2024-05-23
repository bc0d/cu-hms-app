@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
    <h1>Office</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ url('office/index') }}>Home</a></li>
          <li class="breadcrumb-item">Complaints</li>
          <li class="breadcrumb-item active">Edit Complaint</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">

            <div class="col-lg-10"> 
                <!--student data-->
                <div class="card-body pt-3">
                    <div class="tab-pane profile-edit pt-3" id="profile-edit">
                        <!-- Profile Data -->
                        <form>
                            <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                <div class="col-md-8 col-lg-9">
                                    <img src="{{ asset('admins/assets/img/profile-img.jpg') }}" alt="Profile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke" readonly >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="job" type="text" class="form-control" id="Job" value="Web Designer" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="country" type="text" class="form-control" id="Country" value="USA" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com" readonly>
                                </div>
                            </div>
                        </form><!-- End Profile Data -->
                    </div>
                </div><!-- End Bordered Tabs -->

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Complaint Action</h5>
            
                        <!-- Room allocation Form -->
                        <form class="row g-3" action="{{ route('complaint.action') }}" method="POST">
                            @csrf
                            <div class="col-md-8">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" name="status" class="form-select">
                                    <option selected>Choose...</option>
                                    <option value="Verifying">Verifying</option>
                                    <option value="Solved">Solved</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label for="comment" class="form-label">Comment</label>
                                <textarea class="form-control" name="comment" id="comment" cols="30" rows="3"></textarea>
                            </div>
                            <input type="hidden" name="id" value="{{ $complaint->complaint_id }}">
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