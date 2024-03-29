@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
      <h1>Student Aproval</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ url('hod-index') }}>Home</a></li>
          <li class="breadcrumb-item">Allocation Request</li>
          <li class="breadcrumb-item active">Student Aproval</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
          
          <div class="col-lg-10">
  
            <div class="card">
              <div class="card-body pt-3">
  
                  <div class="tab-pane profile-edit pt-3" id="profile-edit">
  
                    <!-- Profile Edit Form -->
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
                          <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="country" type="text" class="form-control" id="Country" value="USA">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                        </div>
                      </div>
  
                      <div class="text-center">
                        <button type="submit" class="btn btn-danger">Reject</button>
                        <button type="submit" class="btn btn-success">Approve</button>
                      </div>
                    </form><!-- End Profile Edit Form -->
  
                  </div>
  

  
                </div><!-- End Bordered Tabs -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>
  

@endsection