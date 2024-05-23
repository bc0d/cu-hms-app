@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
    <h1>Office</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href={{ url('office/index')}}>Home</a></li>
            <li class="breadcrumb-item active">Complaints</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

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
                      <th>Complaints ID</th>
                      <th>Student ID</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($complaints as $complaint)
                      <tr>
                        <td>{{ $complaint->complaint_id }}</td>
                        <td>{{ $complaint->student_id }}</td>
                        <td>{{ $complaint->category }}</td>
                        <td>{{ $complaint->status }}</td>
                        <td>{{ $complaint->created_at->toDateString() }}</td>
                        <td><a href={{ url('office/complaints/view/' . $complaint->complaint_id) }} class="btn btn-primary btn-sm">view</a></td>
                      </tr>
                    @endforeach                   
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
    
              </div>
            </div>
    
          </div>
        </div>
      </section>

@endsection