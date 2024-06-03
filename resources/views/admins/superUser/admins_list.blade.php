@extends('layout.admin_master')

@section('content')
   
    <div class="pagetitle">
        <h1>SuperUser</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href={{ url('super-user/index')}}>Home</a></li>
                <li class="breadcrumb-item active">Manage Admin</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @if (session('message'))
                    <div class="alert alert-success">
                    {{ session('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">Admins</h5>
                            <a href={{ url('super-user/admins/add') }} class="btn btn-primary btn-sm mt-3 mb-4">Add Admin</a>
                        </div>                  
                        <!-- Bordered Table -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Admin ID</th>
                                    <th scope='col'>Admin Name</th>
                                    <th scope='col'>Email</th>
                                    <th scope='col'>Department</th>
                                    <th scope='col'>Designation</th>
                                    <th scope='col'>Access</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $item)
                                    <tr>
                                        <td>{{$item->admin_id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->department}}</td>
                                        <td>{{$item->designation}}</td>
                                        <td>{{$item->access}}</td>
                                        <td>
                                            <form action="{{ route('superuser.admin.remove') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="admin" value="{{ $item->admin_id }}">
                                                <button type="submit" class="btn btn-danger rounded-pill btn-sm" onclick="return confirm('Are you sure You want to delete this Admin')">Remove</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Bordered Table -->                   
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection