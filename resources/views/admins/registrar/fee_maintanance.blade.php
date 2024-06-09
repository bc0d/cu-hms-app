@extends('layout.admin_master')

@section('content')
   
  <div class="pagetitle">
  <h1>Registrar</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('registrar/index')}}" >Dashboard</a></li>
        <li class="breadcrumb-item active"> Fee Maintanance</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Fees</h5>
              <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Hostel</th>
                    <th scope='col'>Room_type</th>
                    <th scope='col'>Fee_item</th>
                    <th scope='col'>Amount</th>
                    <th data-type="date" data-format="YYYY/DD/MM" scope="col">Update Date</th>
                    <th></th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($fees as $item)
                    <tr>
                      <td>{{$item->hostel->hostel_name}}</td>
                      <td>{{$item->room_type}}</td>
                      <td>{{$item->fee_name}}</td>
                      <td>{{$item->amount}}</td>
                      <td>{{$item->updated_at->toDateString()}}</td>
                      <td><a class="btn btn-primary btn-sm" href="{{ url('super-user/fee/edit/'.$item->fee_id) }}">Edit</a></td>
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
              <!-- End Bordered Table 
              <a href={{ url('super-user/fee/add') }} class="btn btn-primary btn-sm">Add</a>-->

            </div>
          </div>


      </div>
    </div>
  </section>


@endsection