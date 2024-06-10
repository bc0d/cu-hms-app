@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
    <h1>SuperUser</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href={{ url('super-user/index')}}>Home</a></li>
            <li class="breadcrumb-item active">Tickets</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          <div class="col-lg-12">
    
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tickets</h5>
    
                <!-- Table with stripped rows -->
                <table class="table datatable table-hover">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Category</th>
                      <th>From</th>
                      <th>Date</th>
                      <th>Request</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($reqs as $req)
                      <tr>
                        <td>{{ $req->title }}</td>
                        <td>{{ $req->category }}</td>
                        <td>{{ $req->admin->name }}</td>
                        <td>{{ $req->created_at->toDateString() }}</td>
                        <td>{{ $req->message }}</td>
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