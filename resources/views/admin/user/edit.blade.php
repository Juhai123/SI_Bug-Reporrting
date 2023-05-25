@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">User</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" name="" id="" href="{{ route('admin.user.index') }}">Back</a></div>
    </nav>
</div>
<section class="section">
    
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Edit User</h4>
                <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{ route('admin.user.update', [$users->id])}}" method="POST">
                @csrf
                <input type="hidden" value="PUT" name="_method">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="name" id="" 
                    required aria-describedby="helpId" placeholder="Project Name" value="{{ $users->name ?? '' }}">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="email" id="" 
                    required aria-describedby="helpId" placeholder="Project Name" value="{{ $users->email ?? '' }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="phone" id="" 
                    required aria-describedby="helpId" placeholder="" value="{{ $users->phone ?? '' }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Job</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="job" id="" 
                    required aria-describedby="helpId" placeholder="" value="{{ $users->job ?? '' }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Role</label>
                  <div class="col-sm-10">
                  <select class="form-select" name="role_id" id="" >
                    <option disabled value="">Select Role</option>
                    @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                    </select>
                  </div>
                </div>



                

                
              
                <div class="text-end">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </form>
            
            </div>
        </div>
</section>
@endsection