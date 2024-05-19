@extends('layout.mess_master')

@section('content')

  <div class="pagetitle">
    <h1>Mess</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href={{ url('mess-index')}}>Dashboard</a></li>
        <li class="breadcrumb-item active">Expenditure for Join</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->
  <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
            <h5 class="card-title">Expenditure for Join</h5>
              
              <!-- Vertical Form -->
              <form class="row g-3">
                <div class="col-md-8">
                    <label for="inputState" class="form-label">Mess Id</label>
                    <select id="inputState" class="form-select" required>
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                </div>
                
                <div class="col-md-8">
                    <label for="inputState" class="form-label">Month</label>
                    <select id="inputState" class="form-select" required>
                      <option selected disabled>Choose...</option>
                      <option value="1">January</option>
                      <option value="2">February</option>
                      <option value="3">March</option>
                      <option value="4">April</option>
                      <option value="5">June</option>
                      <option value="6">May</option>
                      <option value="7">July</option>
                      <option value="8">Auguest</option>
                      <option value="9">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                    </select>
                </div>
                
                
                <div class="col-md-8 ">
                  <label for="inputNanme4" class="form-label">Total Purchase</label>
                  <input type="text" class="form-control" id="inputNanme4" required>
                </div>
                <div class="col-md-8 ">
                  <label for="inputNanme4" class="form-label">Total Purchase</label>
                  <input type="text" class="form-control" id="inputNanme4" required>
                </div>
                <div class="col-md-8">
                  <label for="inputNanme4" class="form-label">Opening Stock</label>
                  <input type="text" class="form-control" id="inputNanme4" required>
                </div>
                <div class="col-md-8">
                  <label for="inputNanme4" class="form-label">Closing Stock</label>
                  <input type="text" class="form-control" id="inputNanme4" required>
                </div>
                <div class="col-md-8">
                  <label for="inputEmail4" class="form-label">Opening Stock</label>
                  <input type="text" class="form-control" id="inputNanme4" required>
                </div>
                <div class="col-md-8">
                  <label for="inputEmail4" class="form-label">Amount Collected From Vacated Student</label>
                  <input type="text" class="form-control" id="inputNanme4" required>
                </div>
                <div class="col-md-8">
                  <label for="inputEmail4" class="form-label">Unit guest charge</label>
                  <input type="text" class="form-control" id="inputNanme4" required>
                </div>
                <div class="col-md-8">
                  <label for="inputEmail4" class="form-label">Total Joins</label>
                  <input type="text" class="form-control" id="inputNanme4" required>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

         
      </div>
    </section>

  
  @endsection