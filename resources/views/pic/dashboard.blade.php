@extends('layouts.pic_project')

@section('content')
<div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">


    <!-- Member Card -->
    <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Bug Review</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-bug-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6></h6>
                      
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End member Card -->
    
     <!-- Programmer Card -->
     <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Bug Report</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-bug-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6></h6>
                      
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End programmer Card -->
          </div>
        </div>
      </div>
        </section>
@endsection
