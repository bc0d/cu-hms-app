@extends('layout.admin_master')

@section('content')

  <div class="pagetitle">
    <h1>Mess</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('mess-index')}}>Dashboard</a></li>
        <li class="breadcrumb-item"><a href={{ url('mess-index/mess-menu') }}>Mess Menu</a></li>
        <li class="breadcrumb-item active">View Menu</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section">
      <div class="row ">
        <div class="col-12">

          <div class="card">
            <div class="card-body">
              

                              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Weekdays</th>
                    <th scope="col">Breakfast</th>
                    <th scope="col">Lunch</th>
                    <th scope="col">Snacks</th>
                    <th scope="col">Dinner</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Sun</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                    <td><a href={{ url('office/room/allocation') }} class="btn btn-primary btn-sm">edit</a></td>

                  </tr>
                  <tr>
                    <th scope="row">Mon</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                    <td><a href={{ url('office/room/allocation') }} class="btn btn-primary btn-sm">edit</a></td>
                  </tr>
                  <tr>
                    <th scope="row">Tue</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                    <td><a href={{ url('office/room/allocation') }} class="btn btn-primary btn-sm">edit</a></td>
                  </tr>
                  <tr>
                    <th scope="row">Wed</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                    <td><a href={{ url('office/room/allocation') }} class="btn btn-primary btn-sm">edit</a></td>
                  </tr>
                  <tr>
                    <th scope="row">Thu</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                    <td><a href={{ url('office/room/allocation') }} class="btn btn-primary btn-sm">edit</a></td>
                  </tr>
                  <tr>
                    <th scope="row">Fri</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                    <td><a href={{ url('office/room/allocation') }} class="btn btn-primary btn-sm">edit</a></td>
                  </tr>
                  <tr>
                    <th scope="row">Sat</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                    <td><a href={{ url('office/room/allocation') }} class="btn btn-primary btn-sm">edit</a></td>
                  </tr>
                </tbody>
              </table>
              <!-- End Default Table Example -->
                
                
                    

                
               

            </div>
          </div>
        </div>
    </div>
    </section>
@endsection