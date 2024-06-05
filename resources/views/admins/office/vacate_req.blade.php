@extends('layout.admin_master')

@section('content')
   
  <div class="pagetitle">
  <h1>Office</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('office/index')}}>Home</a></li>
        <li class="breadcrumb-item active">Vacating Requests</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Requests</h5>
            @if($vacates->isEmpty())
              <p>No Vacating requests</p>
            @else
              <!-- Table with stripped rows -->
              <table class="table datatable table-hover">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Adnission No</th>
                    <th>Bed</th>
                    <th>Payment Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($vacates as $vacate)
                    <tr>
                      <td>{{ $vacate->student->first_name }} {{ $vacate->student->second_name }}</td>
                      <td>{{ $vacate->student->adm_no }}</td>
                      <td>{{ $vacate->student->bed->bed_name }}</td>
                      <td>{{ $vacate->payment_status }}</td>
                      <td><a href={{ url('office/vacate/action/'.$vacate->vacate_req_id) }} class="btn btn-primary btn-sm">view</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            @endif
          </div>
        </div>

      </div>
    </div>
  </section>


@endsection