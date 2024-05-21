@extends('layout.public_master')

@section('content')
 <!-- ======= service Section ======= --> 
<section id="services" class="services">


  <h2 class="sign-sec text-center">My Complaints</h2><hr>

  <div class="container col-lg-8 hi mt-5  align-items-center py-5">
    <div class="row gy-4 gy-lg-0">
      <div class="col-12">

        <table class="table">
            <thead>
              <tr>
              
                <th>Date</th>
                <th>complaint type</th>
                <th>summary</th>
                <th>contact</th>
                <th>status</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                
                <td data-label="Date">01/12/23</td>
                <td data-label="complaint type">electrical</a></td>
                <td data-label="summary">no bulb in room 104</td>
                <td data-label="contact">123456789</td>
                <td data-label="status">resolved</td> 
              </tr>
              <tr>
                
                <td data-label="Date">05/01/24</td>
                <td data-label="complaint type">electrical</a></td>
                <td data-label="summary">fan switch not working  in room 104</td>
                <td data-label="contact">123456789</td>
                <td data-label="status">pending</td> 
              </tr>
              <tr>
                
                <td data-label="Date">06/01/24</td>
                <td data-label="complaint type">electrical</a></td>
                <td data-label="summary">fan switch not working  in room 104</td>
                <td data-label="contact">123456789</td>
                <td data-label="status">pending</td> 
              </tr>
              
              <!-- Add more rows as needed -->
            </tbody>
        </table>
      </div>
    </div>
  </div>



  

</section>
@endsection