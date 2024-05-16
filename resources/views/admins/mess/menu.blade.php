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
      <div class="row ">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Mess Menu</h5>

              <!-- Horizontal Form -->
              <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Hostel Id</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Mess Id</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="text-center">
                    <a href="mess-menu/view" class="btn btn-primary">View</a>
                </div>

              </form><!-- End Horizontal Form -->

            </div>
          </div>
        </div>
    </div>
    </section>
@endsection