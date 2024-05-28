@extends('layout.admin_master')

@section('content')
   
  <div class="pagetitle">
    <h1>HOD</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('hod/index')}}>Home</a></li>
        <li class="breadcrumb-item active">Allocation Requests</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Requests</h5>

            @if ($roomReq->isEmpty())
                <p>There is no Requests!</p>
            @else
              <!-- Table with stripped rows -->
              <table class="table datatable table-hover">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Adnission No</th>
                    <th>District</th>
                    <th>Hostel</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Request Date</th>
                    <th>Distance</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($roomReq as $req)
                    <tr>
                      <td>{{ $req->student->first_name }} {{ $req->student->second_name }}</td>
                      <td>{{ $req->student->adm_no }}</td>
                      <td>{{ $req->student->district }}</td>
                      <td>{{ $req->hostel }}</td>
                      <td>{{ $req->created_at->toDateString() }}</td>
                      <td>{{ $req->student->distance }} km</td>
                      <td><a href={{ url('hod/allocation/action/' . $req->allocate_req_id) }} class="btn btn-primary btn-sm">view</a></td>
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