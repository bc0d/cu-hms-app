@extends('layout.admin_master')

@section('content')
   
  <div class="pagetitle">
  <h1>Office</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('office/index')}}>Home</a></li>
        <li class="breadcrumb-item active">Room Change Request</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Requests</h5>
            @if($roomChange->isEmpty())
              <p>No requests</p>
            @else
              <!-- Table with stripped rows -->
              <table class="table datatable table-hover">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Current block</th>
                    <th>Current room</th>
                    <th>Request</th>
                    <th>Reason</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($roomChange as $item)
                    <tr>
                      <td>{{ $item->student->first_name }} {{ $item->student->second_name }}</td>
                      <td>{{ $item->room->block->block_name }}</td>
                      <td>{{ $item->room->room_name }}</td>
                      <td>{{ $item->request }}</td>
                      <td>{{ $item->reason }}</td>
                      <td><a href={{ url('office/room-change/action/'.$item->roomchange_id) }} class="btn btn-primary btn-sm">view</a></td>
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