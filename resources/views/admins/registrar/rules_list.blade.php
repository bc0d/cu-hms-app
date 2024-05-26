@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
        <h1>Rules</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href={{ url('registrar/index')}}>Home</a></li>
            <li class="breadcrumb-item">Rules&amp;Notice</li>
            <li class="breadcrumb-item active">Rules</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Rules</h5>
                    <a href={{ url('registrar/rules/rule-add') }} class="btn btn-success btn-sm mb-3">Add New</a>
                    <!-- List group with Advanced Contents -->
                    <div class="list-group">

                        @if($rules->isEmpty())
                            <p>No rules here. </p>
                        @else
                            @foreach($rules as $rule)
                                <div class="list-group-item list-group-item-action " aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{ $rule->title }}</h5>
                                        <form action="{{ route('registrar.rules.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="ruleId" value="{{ $rule->rule_id }}">
                                            <button type="submit" class="btn btn-danger rounded-pill btn-sm" onclick="return confirm('Are you sure You want to delete this rule')">Remove</button>
                                        </form> 
                                    </div>
                                    <p class="mb-1">{{ $rule->description }}</p>
                                    
                                </div>
                            @endforeach  
                        @endif
                    
                    </div><!-- End List group Advanced Content -->

                </div>
            </div>
        </div>

        </div>
    </section>

@endsection