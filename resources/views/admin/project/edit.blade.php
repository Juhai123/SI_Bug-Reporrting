@extends('layouts.admin')

@section('content')
<div class="pagetitle">
            <h1>Bug</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Project</a></li>
                    <li class="breadcrumb-item active">Edit Project</li>
                </ol>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" name="" id="" href="{{ route('admin.project.index') }}">Back</a></div>
            </nav>
        </div>

        <section class="section">
    
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Edit Project</h4>
                <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{ route('admin.project.update', [$project->id])}}" method="POST">
                @csrf
                <input type="hidden" value="PUT" name="_method">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Project Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="project_name" id="" required aria-describedby="helpId" placeholder="Project Name" value="{{ $project->project_name ?? '' }}">
                    {{-- if error validate --}}
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
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
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="link" id="" required aria-describedby="helpId" placeholder="Link" value="{{ $project->link ?? '' }}">
                    {{-- if error validate --}}
                    @error('link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
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