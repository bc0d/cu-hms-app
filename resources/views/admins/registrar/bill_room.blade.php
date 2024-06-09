@extends('layout.admin_master')

@section('content')
   
  <div class="pagetitle">
  <h1>Registrar</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('registrar/index')}}>Dashboard</a></li>
        <li class="breadcrumb-item"><a href={{ url('registrar/fee/card')}}>Fee Details</a></li>
        <li class="breadcrumb-item active">Room Rent</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Room Rents</h5>
            @if(is_Null($rents))
              <p>No data to display</p>
            @else
              <!-- Table with stripped rows -->
              <table class="table datatable table-hover">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Rent Month</th>
                    <th>Rent Amount</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($rents as $rent)
                    @php
                        $createdAt = \Carbon\Carbon::parse($rent->month_of_fee);
                        $monthYear = $createdAt->format('F Y'); // 'F' for full month name, 'Y' for four-digit year
                    @endphp
                    <tr>
                      <td>{{ $rent->student->first_name }} {{ $rent->student->second_name }}</td>
                      <td>{{ $monthYear }}</td>
                      <td>{{ $rent->amount }}</td>
                      <td>{{ $rent->paid_status }}</td>
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