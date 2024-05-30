@extends('layout.admin_master')

@section('content')
   
  <div class="pagetitle">
  <h1>Office</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('office/index')}}>Home</a></li>
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

                    <th scope="col">Fee_id</th>
                    <th scope="col">Hostel_id</th>
                    <th scope='col'>Room_type</th>
                    <th scope='col'>Fee_item</th>
                    <th scope='col'>Amount</th>
                    <th data-type="date" data-format="YYYY/DD/MM" scope="col">Update Date</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($fees as $item)
                      
                 
                  <tr>
                    <td>{{$item->fee_id}}</td>
                    <td>{{$item->hostel_id}}</td>
                    <td>{{$item->room_type}}</td>
                    <td>{{$item->fee_name}}</td>
                    <td>{{$item->amount}}</td>
                    <td></td>
                    
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
              <!-- End Bordered Table -->
              <a href={{ url('office/fee/add') }} class="btn btn-primary btn-sm">Add</a>

            </div>
          </div>


      </div>
    </div>
  </section>


@endsection