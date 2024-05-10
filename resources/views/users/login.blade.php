@extends('layout.public_master')

@section('content')
    <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
  

      <div class="row justify-content-center center-log">
        <div class="col-lg-4 mt-5 mt-lg-0 login-sec">
          <div>
            <center>
              <h2>Login</h2>
            </center>
          </div>
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="User Name" required>
              </div>
            
              <div class="col-md-6 form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
              </div>
            </div>

            <div class="text-center">
              <button type="reset" class="btn btn-secondary">Clear</button>
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>

        </div>
      </div>

  
  </section><!-- End Contact Section -->
  @endsection