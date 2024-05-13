@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
      <h1>Rule Add</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ url('warden/index') }}>Home</a></li>
          <li class="breadcrumb-item">Rules&amp;Notice</li>
          <li class="breadcrumb-item">Rules</li>
          <li class="breadcrumb-item active">Rules Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">

            <div class="col-lg-10"> 

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">New Rule</h5>
            
                        <!-- Room allocation Form -->
                        <form class="row g-3">
                            <div class="row mb-3">
                                <label for="ruleName" class="col-md-4 col-lg-3 col-form-label">Rule Name</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="ruleName" type="text" class="form-control" id="ruleNameNew">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="ruleDesc" class="col-md-4 col-lg-3 col-form-label">Rule Description</label>
                                <div class="col-md-8 col-lg-9">
                                    <textarea name="ruleDesc" class="form-control" id="ruleDescNew" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form><!-- End Room allocation Form -->
        
                    </div>
                </div>
  
          </div>
        </div>
    </section>
  

@endsection