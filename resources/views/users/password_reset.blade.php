@extends('layout.public_master')

@section('content')
  <!-- Profile 1 - Bootstrap Brain Component -->
  <section class="py-3 py-md-5 py-xl-8  ">
  <div class="container mx-auto"> <!-- Added mx-auto class -->
    <div class="row gy-4 gy-lg-0">
      
      <div class="col-12 col-lg-8 col-xl-9 mx-auto d-flex align-items-center">
        <div class="card widget-card border-light shadow-sm">
          <div class="card-body pt-4 mx-auto">
            <h5 class="mt-1 pt-4">Password Reset</h5><hr>
            <div class="row g-0">
              <form action="#!">
                <div class="row gy-3 gy-xxl-4 php-email-form">
                  <div class="col-12">
                    <label for="currentPassword" class="form-label">Current Password</label>
                    <input type="password" class="form-control" id="currentPassword">
                  </div>
                  <div class="col-12">
                    <label for="newPassword" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="newPassword">
                  </div>
                  <div class="col-12">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword">
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection