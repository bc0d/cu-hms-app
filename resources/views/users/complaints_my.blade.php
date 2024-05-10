@extends('layout.public_master')

@section('content')
 <!-- ======= service Section ======= --> 
 <section id="services" class="services">

<div class="container col-lg-8 hi mt-5 py-5 align-items-center">
 
<h1 class="heading">My Complaints</h1>
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



  

  <!-- Vendor JS Files -->
  <script src="{{ asset('users/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('users/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('users/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('users/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('users/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('users/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('users/assets/js/main.js') }}"></script>
  <script src="{{ asset('users/assets/js/paymentlink.js') }}"></script>
  


</body>

</html>