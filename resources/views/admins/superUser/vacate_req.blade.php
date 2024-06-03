@extends('layout.admin_master')

@section('content')
   
  <div class="pagetitle">
    <h1>SuperUser</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('super-user/index')}}>Home</a></li>
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
            @if ($vacateReqs->isEmpty())
                <p>No requests to show</p>
            @else
                <!-- Table with stripped rows -->
                <table class="table datatable table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Payment status</th>
                      <th>Hostel status</th>
                      <th>Warden status</th>
                      <th>HOD status</th>
                      <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                      <th>Payment Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($vacateReqs as $item)
                      <tr>
                        <td>{{ $item->student->first_name }} {{ $item->student->second_name }}</td>
                        <td>{{ $item->department->department_name }}</td>
                        <td>{{ $item->payment_status }}</td>
                        <td>{{ $item->office_status }}</td>
                        <td>{{ $item->warden_status }}</td>
                        <td>{{ $item->hod__status }}</td>
                        <td><span class="badge bg-success">No Due</span></td>
                        <td><a href={{ url('super-user/vacate/action') }} class="btn btn-primary btn-sm">view</a></td>
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