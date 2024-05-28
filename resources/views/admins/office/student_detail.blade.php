@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
    <h1>Office</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ url('office/index') }}>Home</a></li>
          <li class="breadcrumb-item"><a href="">Student List</a></li>
          <li class="breadcrumb-item active">Student Detail</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-lg-10">

          <div class="card">
            <div class="card-body pt-3">

              <div class="tab-content pt-2">

                <div class="tab-pane active profile-overview" id="profile-overview">
                  
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Profile Image</div>
                    <div class="col-md-8 col-lg-9">
                        <img src="{{ asset($student->image) }}" alt="Profile" class="img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
                      </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">{{ $student->first_name." ".$student->second_name }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Admission No</div>
                    <div class="col-lg-9 col-md-8">{{ $student->adm_no }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">DOB</div>
                    <div class="col-lg-9 col-md-8"> {{ $student->dob }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Gender</div>
                    <div class="col-lg-9 col-md-8"> {{ $student->gender }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Course</div>
                    <div class="col-lg-9 col-md-8">{{ $courseName }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Department</div>
                    <div class="col-lg-9 col-md-8">{{ $departmentName }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"> {{ $student->house }}, {{ $student->street }}, {{ $student->post }}, {{ $student->district }}, {{ $student->state }}, {{ $student->country }} - pincode: {{ $student->pin }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"> {{ $student->phone }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{ $student->email }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Reservation</div>
                    <div class="col-lg-9 col-md-8"> {{ $student->reservation }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Admission Date</div>
                    <div class="col-lg-9 col-md-8"> {{ $student->adm_date }}</div>
                  </div>



                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Guardian Name</div>
                    <div class="col-lg-9 col-md-8"> {{ $student->guardian }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Guardian Phone No</div>
                    <div class="col-lg-9 col-md-8"> {{ $student->guardian_phone }}</div>
                  </div>

                </div>


              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection