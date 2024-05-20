@extends('layout.admin_master')

@section('content')

  <div class="pagetitle">
  <h1>Mess</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href={{ url('mess-index')}}>Dashboard</a></li>
        <li class="breadcrumb-item active">Take Attendance</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section">
      <div class="row">
       
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Take Attendance</h5>

              <!-- Vertical Form -->
              <form class="row g-3">
                <div class="col-md-8">
                  <label for="inputNanme4" class="form-label">Current Date</label>
                  <script>
                        var today = new Date();
                        var dd = String(today.getDate()).padStart(2, '0');
                        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                         var yyyy = today.getFullYear();

                        today = dd + '/' + mm + '/' + yyyy;
                        document.write("<br>", today);
                       </script>
                </div>
                <div class="col-md-8">
                    <label for="inputState" class="form-label">Meal Time</label>
                    <select id="inputState" class="form-select" required>
                      <option selected disabled>Choose...</option>
                      <option value="1">Breakfast</option>
                      <option value="2">Lunch</option>
                      <option value="3">Snacks</option>
                      <option value="4">Dinner</option>
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                  <a href={{ url('mess-index/take-attendance/scan-qr')}} class="btn btn-primary">Continue</a>
                </div>

              </form><!-- Vertical Form -->

            </div>
          </div>
        </div>
      </div>
  </section>
@endsection