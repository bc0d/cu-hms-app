@extends('layout.admin_master')

@section('content')

  <div class="pagetitle">
    <h1>Mess</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('mess-index')}}>Dashboard</a></li>
        <li class="breadcrumb-item"><a href={{ url('mess-index/mess-index/take-attendance')}}>Take Attendance</a></li>
        <li class="breadcrumb-item"><a href={{ url('mess-index/take-attendance/scan-qr')}}>QR</a></li>
        
        <li class="breadcrumb-item active">Attendance Profile</li>
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
                    
                    <div class="col-4 d-flex justify-content-start pt-1">
                    <div class="dt">
                        <img src="{{ asset('admins/assets/img/profile-img.jpg') }}" alt="Profile">
                    </div>
                    </div>
                    <div class="col-8 p-4">
                        <div class="align-items-center">
                        <h5 class="py-3">Roopak M R</h5>
                        <h5>Department of  Computer Science</h5>
                        </div>
                    </div>
                </div>
                <div class="row d-flex pt-3 h6 ">
                    <div class="col-5 pt-3 pr-3 align-items-center ml-2  ">
                        
                      <script>
                        var today = new Date();
                        var dd = String(today.getDate()).padStart(2, '0');
                        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                         var yyyy = today.getFullYear();

                        today = dd + '/' + mm + '/' + yyyy;
                        document.write("Date: " + today);
                       </script>
                    </div>
                    <div class="col-7 d-flex pb-3 text-center ">
                        <div class="bg-success p-3 rounded">out</div>
                        <div class="bg-danger p-3 pr-2 rounded">in </div>
                    </div>
                </div>
            <table class="table border  text-center p-3">
                    <thead>
                     <tr>
                        <th scope="col">Breakfast</th>
                        <th scope="col">Lunch</th>
                        <th scope="col">Snacks</th>
                        <th scope="col">Dinner</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>X</td>
                        <td>X</td>
                        <td>X</td>
                        <td>X</td>
                    </tr>  
                    </tbody>
                </table>
                <!-- End Default Table Example -->

                
                <div class="row pt-3">
                        <div class="col text-center">
                            <a href="javascript:history.back()" class="btn btn-secondary">Cancel</a>
                        </div>
                        <div class="col text-center">
                         <a href="javascript:history.back()" class="btn btn-primary">Next</a>
                        </div>
                    </div>
           
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
