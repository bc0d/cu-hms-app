@extends('layout.admin_master')

@section('content')

  <div class="pagetitle">
  <h1>Mess</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href={{ url('mess-index')}}>Dashboard</a></li>
        <li class="breadcrumb-item active">Menu</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section">
      <div class="row ">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Mess Menu</h5>

              <!-- Horizontal Form -->
              <form>
              <div class="col-md-8">
                  <label for="inputEmail4" class="form-label">Hostel Id</label>
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="State">
                      <option selected disabled>select</option>
                      <option value="1">mh</option>
                      <option value="2">lh</option>
                    </select>
                    <label for="floatingSelect">Hostel Id</label>
                  </div>
                </div>
                <div class="col-md-8">
                  <label for="inputEmail4" class="form-label">Mess Id</label>
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="State">
                      <option selected disabled>select</option>
                      <option value="1">uyg</option>
                      <option value="2">thyt</option>
                      <option value="3">j6h</option>
                      <option value="4">htyr</option>
                    </select>
                    <label for="floatingSeleMess Idct">Mess Id</label>
                  </div>
                </div>
                
                <div class="text-center">
                <a href={{ url('mess-index/mess-menu/view')}} class="btn btn-primary">View</a>
                </div>

              </form><!-- End Horizontal Form -->

            </div>
          </div>
        </div>
    </div>
    </section>
@endsection