@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
    <h1>Registrar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ url('registrar/index') }}>Home</a></li>
          <li class="breadcrumb-item">Manage Admin</li>
          <li class="breadcrumb-item active">Add Admin</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">

            <div class="col-lg-10"> 

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Admin details</h5>
                        @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                                
                        <!-- General Form Elements -->
                        <form action="{{ route('superuser.admin.add') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Department</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="department" required>
                                        <option selected>--select--</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Mens Hostel">Mens Hostel</option>
                                        <option value="Womens Hostel">Womens Hostel</option>
                                        <option value="Registrar">Registrar</option>
                                        @foreach ($departments as $item)
                                            <option value="{{ $item->department_name }}">{{ $item->department_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Designation</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="designation" required>
                                        <option selected>--select--</option>
                                        <option value="admin">Admin</option>
                                        <option value="hod">HOD</option>
                                        <option value="registrar">Registrar</option>
                                        <option value="staff">Staff</option>
                                        <option value="warden">Warden</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Access</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="access" required>
                                        <option selected>--select--</option>
                                        <option value="all">All</option>
                                        <option value="mens">Mens</option>
                                        <option value="womens">Womens</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password_confirmation" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Create Admin</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

        
                    </div>
                </div>
  
          </div>
        </div>
    </section>
  

@endsection