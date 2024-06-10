@extends('layout.admin_master')

@section('content')

<div class="pagetitle">
    <h1>Warden</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href={{ url('warden/index') }}>Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


<section class="section profile">
    <div class="row">

        <div class="col-lg-10">

            <div class="card">
                <div class="card-body pt-3">

                    <div class="tab-content pt-2">

                        <div class="tab-pane active profile-overview" id="profile-overview">

                            <h5 class="card-title">Profile Details</h5>



                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                <div class="col-lg-9 col-md-8">{{ $admin->name }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Designation</div>
                                <div class="col-lg-9 col-md-8"> {{ $admin->designation }} </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Department</div>
                                <div class="col-lg-9 col-md-8"> {{ $admin->department }} </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">{{ $admin->email }}</div>
                            </div>

                            <div class="row">
                                <a href="{{ url('admin-reset') }}" class="card-link">Password Reset</a>
                            </div>
                            <div class="row">
                                <form action="{{ route('admin.signout') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-secondary" type="submit">Log out</button>
                                  </form>
                            </div>

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection