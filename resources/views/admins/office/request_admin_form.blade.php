@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
        <h1>Office</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('office/index') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Request Admin</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-lg-10"> 
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Request Form</h5>
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        
                        <!-- Request Admin Form -->
                        <form class="row g-3" action="{{ route('office.admin.request') }}" method="POST">
                            @csrf
                            <input type="hidden" name="admin_id" value="{{ $admin->admin_id }}">
                            <div class="col-md-8">
                                <label for="title" class="form-label">Title</label>
                                <div>
                                    <input class="form-control" name="title" id="title">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="category" class="form-label">Category</label>
                                <select name="category" id="category" class="form-select">
                                    <option selected disabled>--select--</option>
                                    <option value="existingFeature">Existing Feature</option>
                                    <option value="newFeature">New Feature</option>
                                </select>
                            </div>
                            <div class="col-md-8 mb-3">
                                <label for="message" class=" col-form-label">Message</label>
                                <div>
                                    <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Request</button>
                            </div>
                        </form><!-- End Request Admin Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
