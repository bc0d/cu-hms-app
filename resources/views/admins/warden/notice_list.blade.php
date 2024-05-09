@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
        <h1>Notices</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href={{ url('warden/index')}}>Home</a></li>
            <li class="breadcrumb-item">Rules&amp;Notice</li>
            <li class="breadcrumb-item active">Notices</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Notices</h5>
                    <a href={{ url('warden/rules/notice-add') }} class="btn btn-success btn-sm mb-3">Add New</a>
                    <!-- List group with Advanced Contents -->
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action " aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Notice Subject</h5>
                                <a href="" class="btn btn-danger rounded-pill btn-sm">Remove</a>
                            </div>
                            <p class="mb-1">-Ruledescriptionblablablablablablablablablablablablablablablablablablablablablablabla-</p>
                            
                        </div>
                        
                    
                    </div><!-- End List group Advanced Content -->

                </div>
            </div>
        </div>

        </div>
    </section>

@endsection