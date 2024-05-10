@extends('layout.admin_master')

@section('content')

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('warden/index')}}>Home</a></li>
        <li class="breadcrumb-item"><a href={{ url('warden/complaints')}}>complaints</a></li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->
  <section class="section">
      <div class="row">
        <div class="col-lg-12">
  
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Complaints</h5>
  
              <!-- Table with stripped rows -->
              <table class="table datatable table-hover">
                <thead>
                  <tr>
                    <th>Complaint Id</th>
                    <th>Student_Id</th>
                    <th>Complaint Category</th>
                    <th>Contact</th>
                    <th>Hostel</th>
                    <th>Date posted</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Com001</td>
                    <td>9958</td>
                    <td>Electricity</td>
                    <td>9035625381</td>
                    <td>MH</td>
                    <td>2023/19/05</td>
                    <td><a href={{ url('warden/student/detail') }} class="btn btn-primary btn-sm">View Complaint</a></td>
                  </tr>
                  <tr>
                    <td>Com002</td>
                    <td>8971</td>
                    <td>Water</td>
                    <td>8675353254</td>
                    <td>MH</td>
                    <td>2023/23/04</td>
                    <td><a href={{ url('warden/student/detail') }} class="btn btn-primary btn-sm">View Complaint</a></td>
                  </tr>
                  <tr>
                    <td>Com003</td>
                    <td>8633</td>
                    <td>Water</td>
                    <td>8675353576</td>
                    <td>MH</td>
                    <td>2023/13/04</td>
                    <td><a href={{ url('warden/student/detail') }} class="btn btn-primary btn-sm">View Complaint</a></td>
                  </tr>
                  <tr>
                    <td>Com004</td>
                    <td>8971</td>
                    <td>Electricity</td>
                    <td>8675373254</td>
                    <td>MH</td>
                    <td>2023/08/04</td>
                    <td><a href={{ url('warden/student/detail') }} class="btn btn-primary btn-sm">View Complaint</a></td>
                  </tr>
                  <tr>
                    <td>Com005</td>
                    <td>8671</td>
                    <td>Water</td>
                    <td>9075367254</td>
                    <td>MH</td>
                    <td>2023/23/04</td>
                    <td><a href={{ url('warden/student/detail') }} class="btn btn-primary btn-sm">View Complaint</a></td>
                  </tr>
                  <tr>
                    <td>Com006</td>
                    <td>7671</td>
                    <td>Water</td>
                    <td>8675843854</td>
                    <td>MH</td>
                    <td>2023/13/04</td>
                    <td><a href={{ url('warden/student/detail') }} class="btn btn-primary btn-sm">View Complaint</a></td>
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