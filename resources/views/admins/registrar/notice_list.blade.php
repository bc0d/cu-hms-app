@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
        <h1>Notices</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href={{ url('registrar/index')}}>Home</a></li>
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
                    <a href={{ url('registrar/rules/notice-add') }} class="btn btn-success btn-sm mb-3">Add New</a>
                    <!-- List group with Advanced Contents -->
                    @if ($notices->isEmpty())
                     <p>No Notices to display</p>
                        
                    @else
                    <div class="list-group">
                        @foreach ($notices as $notice)
                        <div class="list-group-item list-group-item-action " aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $notice->title }}</h5>
                                <form action="{{ route('registrar.notice.remove') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="noticeId" value="{{ $notice->notice_id }}">
                                    <button type="submit" class="btn btn-danger rounded-pill btn-sm" onclick="return confirm('Are you sure You want to delete this Notice')">Remove</button>
                                </form>
                            </div>
                            <p class="mb-1"><a href="{{ asset($notice->path) }}">Click Here</a></p>
                            
                        </div>
                            
                        @endforeach
                        

                        
                    
                    </div><!-- End List group Advanced Content -->
                        
                    @endif
                    

                </div>
            </div>
        </div>

        </div>
    </section>

@endsection