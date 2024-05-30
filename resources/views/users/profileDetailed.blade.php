@extends('layout.public_master')

@section('content')
<!-- Profile 1 - Bootstrap Brain Component -->
<section class="pt-5 pb-3 py-md-5 py-xl-8 contact sign-sec" id="contact">
  
  <div class="container pt-4">
    <div class="row gy-4 gy-lg-0">
      <div class="col-12 col-lg-4 col-xl-3 ">
        <div class="row gy-4">
          <div class="col-12">
            <div class="card widget-card border-light shadow-sm">
              
              <div class="card-body">
              
                <div class="text-center mb-1 pt-2">
                  <img src="{{ asset($student->image) }}" class="img-fluid " alt="Luna John">
                  <h4 class="text-center">{{$student->first_name." ".$student->second_name}}</h4>
                </div>
 
              </div>
            </div>
          </div>

        </div>
      </div>
      <!--<div class="col-12 col-lg-8 col-xl-9">-->
      <div class="col-12 col-lg-5 col-xl-9 b-4">
        <div class="card widget-card border-light shadow-sm">
          <div class="card-body p-4">
          
            <div class="tab-content pt-1" id="profileTabContent">
              <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
                @if(!is_Null($bed))
                  <h5 class="mb-2">Hostel Detailes</h5><hr>
                  <div class="row mb-2 g-0">
                    <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                      <div class="p-2">Hostel</div>
                    </div>
                    <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                      <div class="p-2">{{ $bed->room->block->hostel->hostel_name }}</div>
                    </div>
                    <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                      <div class="p-2">Block</div>
                    </div>
                    <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                      <div class="p-2">{{ $bed->room->block->block_name }}</div>
                    </div>
                    <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                      <div class="p-2">Room</div>
                    </div>
                    <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                      <div class="p-2">{{ $bed->room->room_name }}</div>
                    </div>
                    <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                      <div class="p-2">Bed</div>
                    </div>
                    <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                      <div class="p-2">{{ $bed->bed_name }}</div>
                    </div>
                  </div>
                @endif
                <h5 class="mb-2">Personal Detailes</h5><hr>
                <div class="row g-0">
                  <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                    <div class="p-2">Name</div>
                  </div>
                  <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">{{ $student->first_name." ".$student->second_name }}</div>
                  </div>
                  <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                    <div class="p-2">Date of Birth</div>
                  </div>
                  <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">{{ $student->dob }}</div>
                  </div>
                  <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                    <div class="p-2">Gender</div>
                  </div>
                  <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">{{ $student->gender }}</div>
                  </div>
                  <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                    <div class="p-2">Mobile No</div>
                  </div>
                  <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">{{ $student->phone }}</div>
                  </div>
                  <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                    <div class="p-2">Email Id</div>
                  </div>
                  <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">{{ $student->email }}</div>
                  </div>
                  <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                    <div class="p-2">Home Address</div>
                  </div>
                  <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">{{ $student->house.", ".$student->street.", ".$student->post.", ".$student->district.", ".$student->state.", ".$student->country }}</div>
                  </div>
                  <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                    <div class="p-2">Guardian Name</div>
                  </div>
                  <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">{{ $student->guardian }}</div>
                  </div>
                  
                  <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                    <div class="p-2">Guardian Mobile</div>
                  </div>
                  <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2 d-flex">{{ $student->guardian_phone }}</div>
                  </div>
                  <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                    <div class="p-2">Department</div>
                  </div>
                  <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">{{ $course->department->department_name }}</div>
                  </div>
                  <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                    <div class="p-2">Course Name</div>
                  </div>
                  <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">{{ $course->course_name }}</div>
                  </div>
                  <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                    <div class="p-2">Admission No</div>
                  </div>
                  <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">{{ $student->adm_no }}</div>
                  </div>
                  <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                    <div class="p-2">Admission Date</div>
                  </div>
                  <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">{{ $student->adm_date }}</div>
                  </div>
                  <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                    <div class="p-2">Course Duration</div>
                  </div>
                  <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">{{ $student->course_duration }}Year</div>
                  </div>
                  
                  <div class="col-5 col-md-4 bg-light border-bottom border-white border-3">
                    <div class="p-2">Distance(Home - University)(kms) </div>
                  </div>
                  <div class="col-7 col-md-8 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">{{ $student->distance }}KM</div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection