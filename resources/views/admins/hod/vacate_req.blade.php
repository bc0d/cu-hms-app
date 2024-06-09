@extends('layout.admin_master')

@section('content')
   
  <div class="pagetitle">
    <h1>HOD</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('hod/index')}}>Home</a></li>
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
<<<<<<< HEAD

            <!-- Table with stripped rows -->
            <table class="table datatable table-hover">
              <thead>
                <tr>
                  <th>
                    <b>N</b>ame
                  </th>
                  <th>Admission No</th>
                  <th>City</th>
                  <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Unity Pugh</td>
                  <td>9958</td>
                  <td>Curicó</td>
                  <td>2005/02/11</td>
                  <td><span class="badge bg-success">Approved</span></td>
                  <td><a href={{ url('hod/vacate/action') }} class="btn btn-primary btn-sm">view</a></td>
                </tr>
                <tr>
                  <td>Theodore Duran</td>
                  <td>8971</td>
                  <td>Dhanbad</td>
                  <td>1999/04/07</td>
                  <td><span class="badge bg-warning">Pending</span></td>
                  <td><a href={{ url('hod/vacate/action') }} class="btn btn-primary btn-sm">view</a></td>
                </tr>
                <tr>
                  <td>Kylie Bishop</td>
                  <td>3147</td>
                  <td>Norman</td>
                  <td>2005/09/08</td>
                  <td><span class="badge bg-danger">Rejected</span></td>
                  <td><a href={{ url('hod/vacate/action') }} class="btn btn-primary btn-sm">view</a></td>
                </tr>
                <tr>
                  <td>Willow Gilliam</td>
                  <td>3497</td>
                  <td>Amqui</td>
                  <td>2009/29/11</td>
                  <td><span class="badge bg-warning">Pending</span></td>
                  <td><a href={{ url('hod/vacate/action') }} class="btn btn-primary btn-sm">view</a></td>
                </tr>
                <tr>
                  <td>Blossom Dickerson</td>
                  <td>5018</td>
                  <td>Kempten</td>
                  <td>2006/11/09</td>
                  <td><span class="badge bg-success">Approved</span></td>
                  <td><a href={{ url('hod/vacate/action') }} class="btn btn-primary btn-sm">view</a></td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

=======
            @if($vacates->isEmpty())
              <p>No Vacating requests</p>
            @else
              <!-- Table with stripped rows -->
              <table class="table datatable table-hover">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Adnission No</th>
                    <th>Office Status</th>
                    <th>Warden Status</th>
                    <th>Payment Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($vacates as $vacate)
                    <tr>
                      <td>{{ $vacate->student->first_name }} {{ $vacate->student->second_name }}</td>
                      <td>{{ $vacate->student->adm_no }}</td>
                      <td>{{ $vacate->office_status }}</td>
                      <td>{{ $vacate->warden_status }}</td>
                      <td>{{ $vacate->payment_status }}</td>
                      <td><a href={{ url('hod/vacate/action/'.$vacate->vacate_req_id) }} class="btn btn-primary btn-sm">view</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            @endif
>>>>>>> main
          </div>
        </div>

      </div>
    </div>
  </section>


@endsection