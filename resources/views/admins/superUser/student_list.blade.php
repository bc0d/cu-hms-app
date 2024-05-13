@extends('layout.admin_master')

@section('content')
    
    <div class="pagetitle">
      <h1>Students List</h1>
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
                  <tr>
                    <td>Unity Pugh</td>
                    <td>9958</td>
                    <td>Curicó</td>
                    <td>2005/02/11</td>
                    <td>MH</td>
                    <td><a href={{ url('office/student/detail') }} class="btn btn-primary btn-sm">view</a></td>
                  </tr>
                  <tr>
                    <td>Theodore Duran</td>
                    <td>8971</td>
                    <td>Dhanbad</td>
                    <td>1999/04/07</td>
                    <td>MH</td>
                    <td><a href={{ url('office/student/detail') }} class="btn btn-primary btn-sm">view</a></td>
                  </tr>
                  <tr>
                    <td>Kylie Bishop</td>
                    <td>3147</td>
                    <td>Norman</td>
                    <td>2005/09/08</td>
                    <td>MH</td>
                    <td><a href={{ url('office/student/detail') }} class="btn btn-primary btn-sm">view</a></td>
                  </tr>
                  <tr>
                    <td>Willow Gilliam</td>
                    <td>3497</td>
                    <td>Amqui</td>
                    <td>2009/29/11</td>
                    <td>MH</td>
                    <td><a href={{ url('office/student/detail') }} class="btn btn-primary btn-sm">view</a></td>
                  </tr>
                  <tr>
                    <td>Blossom Dickerson</td>
                    <td>5018</td>
                    <td>Kempten</td>
                    <td>2006/11/09</td>
                    <td>MH</td>
                    <td><a href={{ url('office/student/detail') }} class="btn btn-primary btn-sm">view</a></td>
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