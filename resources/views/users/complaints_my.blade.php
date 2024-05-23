@extends('layout.public_master')

@section('content')
 <!-- ======= service Section ======= --> 
<section id="services" class="services">

  <h2 class="sign-sec text-center">My Complaints</h2><hr>

  <div class="container col-lg-8 hi mt-5  align-items-center py-5">
    <div class="row gy-4 gy-lg-0">
      <div class="col-12">

        @if($complaints->isEmpty())
          <p>No complaints found.</p>
        @else
          <table class="table">
            <thead>
              <tr>
                <th>Complaint ID</th>
                <th>Category</th>
                <th>Complaint</th>
                <th>Status</th>
                <th>Comment</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($complaints as $complaint)
                <tr>
                  <td data-label="Complaint ID">{{ $complaint->complaint_id }}</td>
                  <td data-label="Category">{{ $complaint->category }}</td>
                  <td data-label="Complaint">{{ $complaint->complaint }}</td>
                  <td data-label="Status">{{ $complaint->status }}</td>
                  <td data-label="Comment">{{ $complaint->comment }}</td>
                  <td data-label="Date">{{ $complaint->created_at->toDateString() }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @endif
      </div>
    </div>
  </div>
</section>
@endsection