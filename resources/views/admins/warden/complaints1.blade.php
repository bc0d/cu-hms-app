@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
        <h1>Student Complaints</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href={{ url('warden/index')}}>Home</a></li>
            <li class="breadcrumb-item active">Complaints</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Complaints</h5>

                    <!-- List group with Advanced Contents -->
                    <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action " aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">-nameofstudent-</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">-Sir, the bulb in room is not working. -</p>
                    </a>
                    
                    </div><!-- End List group Advanced Content -->

                </div>
            </div>
        </div>

        </div>
    </section>

@endsection