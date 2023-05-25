@extends('layouts.admin')

@section('content')
<div class="pagetitle">
            <h1>Bug</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Project</a></li>
                    <li class="breadcrumb-item active">Create Project</li>
                </ol>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" name="" id="" href="{{ route('admin.project.index') }}">Back</a></div>
            </nav>
        </div>
        <section class="section">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Project</h4>
            <form action="{{ route('admin.project.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(@$project)
                    @method('PUT')
                @endif

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Instansi</label>
                  <div class="col-sm-10">
                  <select class="form-select" name="instansi_id" id="" >
                    <option disabled value="">Select Instansi</option>
                    @foreach($instansis as $instansi)
                    <option value="{{ $instansi->id }}">{{ $instansi->instansi_name }}</option>
                    @endforeach
                    </select>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Project Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="project_name" 
                    id="" required aria-describedby="helpId" placeholder="Project Name" value="{{ $project->name ?? '' }}">
                    {{-- if error validate --}}
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="link" 
                    id="" required aria-describedby="helpId" placeholder="Input Link" value="{{ $project->link ?? '' }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">PIC</label>
                  <div class="col-sm-10">
                  <select class="form-select" name="user_id" id="" >
                    <option disabled value="">Select PIC</option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                    </select>
                  </div>
                </div>
               
                <div class="text-end">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
                
            </form>
            
        </div>
    </div>
</section>
        @endsection