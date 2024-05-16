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
                <div class="row d-flex pt-3">
                    
                    <div class="col-4 d-flex justify-content-center">
                    <div class="dt">
                        <img src="{{ asset('admins/assets/img/profile-img.jpg') }}" alt="Profile">
                    </div>
                    </div>
                    <div class="col-8 pt-3">
                        <div class="align-items-center">
                        <h5>Roopak M R</h5>
                        <h5>Department of  Computer Science</h5>
                        </div>
                    </div>
                </div>
                <div class="row d-flex pt-3">
                    <div class="col-4 ">
                        
                      <script>
                        var today = new Date();
                        var dd = String(today.getDate()).padStart(2, '0');
                        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                         var yyyy = today.getFullYear();

                        today = dd + '/' + mm + '/' + yyyy;
                        document.write("Date: " + today);
                       </script>
                    </div>
                    <div class="col-8 d-flex">
                        <div class="bg-success">out</div>
                        <div class="bg-danger">in </div>
                    </div>
                </div>
              <!-- Vertical Form -->
              <form class="row g-3">
                <div class="col-12">
                    
                <p id="currentDate"></p>
                    
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
               
                <div class="d-flex justify-content-around">
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>

              </form><!-- Vertical Form -->

            </div>
          </div>



          

        </div>
      </div>
    </section>
@endsection
@push('scripts')
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    today = mm + '/' + dd + '/' + yyyy;
    document.write(today);
@endpush