@extends('layout.mess_master')

@section('content')

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('mess/index')}}>Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section">
      <div class="row">
       
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Take Attendance</h5>

              <!-- Vertical Form -->
              <form class="row g-3">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Current Date</label>
                  <input type="date" class="form-control">
                </div>

                

               

                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Meal Time</label>
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="State">
                      <option selected>select</option>
                      <option value="1">Breakfast</option>
                      <option value="2">Lunch</option>
                      <option value="3">Snacks</option>
                      <option value="4">Dinner</option>
                    </select>
                    <label for="floatingSelect">Meal Time</label>
                  </div>
                </div>
               
                <div class="d-flex justify-content-end">
                    <a href="take-attendance/scan-qr" class="btn btn-primary">Continue</a>
                </div>

              </form><!-- Vertical Form -->

            </div>
          </div>



          

        </div>
      </div>
    </section>
@endsection