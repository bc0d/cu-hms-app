@extends('layout.mess_master')

@section('content')

  <div class="pagetitle">
    <h1>Purchase & Bills</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ url('mess/index')}}>Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section">
    <div class="row  text-center">
        <div class="col-lg-4">

            <div class="card ">
                <div class="card-mess-body ">
                    <h5 class="card-title"><a href="#">Purchase Bills</a></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row  text-center">
        <div class="col-lg-4">

            <div class="card ">
                <div class="card-mess-body ">
                    <h5 class="card-title"><a href="#">Student Bills</a></h5>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection