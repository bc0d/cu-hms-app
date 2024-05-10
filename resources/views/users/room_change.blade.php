@extends('layout.public_master')

@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact sign-sec">
      <div class="container plain-border mx-auto ">

        
        <div class="row mt-2  justify-content-center">

          <div class="col-lg-8 mt-2 mt-lg-0 pt-3">
            <h2 class="sign-sec  text-center">Room Change Request</h2><hr>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" id="myForm">
            <div class="row ">
                <div class="form-floating mt-2">
                    
                <div class="col-6">
                    <label class="form-label ">prefered room no. and block name</label>
                    <input type="text" class="form-control" id="complaint-category" placeholder="" required>
                </div>
                
                
                <div class="form-group mt-3">
                  <div class="col-6">
                    <label class="form-label">Reason to Change </label>
                  </div>
                    <div class="col">
                      <textarea class="form-control" name="message" rows="3" placeholder="" required></textarea>
                    </div>
                  </div>
                </div>
              
              
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" id="submitButton">Submit</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

 
  <script>
    document.getElementById('submitButton').addEventListener('click', function(event) {
        var form = document.getElementById('myForm');
        var inputs = form.querySelectorAll('input, textarea');
        var isValid = true;
        
        inputs.forEach(function(input) {
            if (!input.value.trim()) {
                isValid = false;
            }
        });

        if (!isValid) {
            event.preventDefault();
            alert('Please fill in all required fields.');
        }
    });
  </script>
@endsection