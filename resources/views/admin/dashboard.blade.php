@extends('layouts.admin')

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
                  <h5 class="card-title">Programmer</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-plus-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ count($programmers) }}</h6>
                      
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End member Card -->
    
     <!-- Programmer Card -->
     <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Bug Handle</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-bug-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ count($bug) }}</h6>
                      
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End programmer Card -->
    
    <!-- Bug Handled Card-->
    <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Project</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-clipboard-data"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ count($project)}}</h6>
                     
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- Bug Handler Card-->

          </div>
        </div>
         <!-- Buttom side columns -->

 <!-- Right side columns -->
 <div class="col-lg-3">

<!-- Task Card -->
<div class="card info-card sales-card">
  <div class="card-body">
    <h5 class="card-title">Task</h5>
    <div class="activity">
      <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-code-slash"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ count($task) }}</h6>
                    </div>
                  </div>
                </div>
    </div>
  </div><!-- End Task Card -->
</div><!-- End Right side colomns -->
        
    </div>
</section>

@endsection
