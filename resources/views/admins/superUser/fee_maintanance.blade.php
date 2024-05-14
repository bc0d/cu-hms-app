@extends('layout.admin_master')

@section('content')
   
  <div class="pagetitle">
    <h1>Fee Maintanance</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('super-user/index')}}>Home</a></li>
        <li class="breadcrumb-item active"> Fee Maintanance</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Fees</h5>
              <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fee</th>
                    <th scope="col">Amount</th>
                    <th data-type="date" data-format="YYYY/DD/MM" scope="col">Update Date</th>
                    <th scope="col">Actions</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>2009/29/11</td>
                    <td><a href={{ url('super-user/fee/updation') }} class="btn btn-primary btn-sm">Update</a></td>
                    
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>2009/29/11</td>
                    <td><a href={{ url('super-user/fee/updation') }} class="btn btn-primary btn-sm">Update</a></td>
                    
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>2009/29/11</td>
                    <td><a href={{ url('super-user/fee/updation') }} class="btn btn-primary btn-sm">Update</a></td>
                    
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>2009/29/11</td>
                    <td><a href={{ url('super-user/fee/updation') }} class="btn btn-primary btn-sm">Update</a></td>
                    
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division super-userr</td>
                    <td>2009/29/11</td>
                    <td><a href={{ url('super-user/fee/updation') }} class="btn btn-primary btn-sm">Update</a></td>
                    
                  </tr>
                </tbody>
              </table>
              <!-- End Bordered Table -->

            </div>
          </div>


      </div>
    </div>
  </section>


@endsection