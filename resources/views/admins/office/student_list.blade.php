@extends('layout.admin_master')

@section('content')
    
    <div class="pagetitle">
    <h1>Office</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ url('office/index') }}>Home</a></li>
          <li class="breadcrumb-item">Students List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
  
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Students</h5>
  
              <!-- Table with stripped rows -->
              <table class="table datatable table-hover">
                <thead>
                  <tr>
                    <th>
                      <b>N</b>ame
                    </th>
                    <th>Admission No</th>
                    <th>City</th>
                    <th>Year</th>
                    <th>Hostel</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($students as $student)
                      <tr>
                        <td>{{ $student->first_name." ".$student->second_name }}</td>
                        <td>{{ $student->adm_no }}</td>
                        <td>{{ $student->street }}</td>
                        <td></td>
                        <td></td>
                        <td><a href={{ url('office/complaints/view/' . $complaint->complaint_id) }} class="btn btn-primary btn-sm">view</a></td>
                      </tr>
                    @endforeach 
                  <tr>
                    <td>Unity Pugh</td>
                    <td>9958</td>
                    <td>Curicó</td>
                    <td>2005/02/11</td>
                    <td>MH</td>
                    <td><a href={{ url('office/student/detail' . $complaint->complaint_id) }} class="btn btn-primary btn-sm">view</a></td>
                  </tr>
                  
                 
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
  
            </div>
          </div>
  
        </div>
      </div>
    </section>
  

@endsection