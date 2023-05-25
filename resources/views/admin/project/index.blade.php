@extends('layouts.admin')

@section('content')
<div class="pagetitle">
            <h1>Project</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Project</li>
                </ol>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-primary" name="" id="" href="{{ route('admin.project.create') }}">Create Project</a>
    </div>
            </nav>
            </nav>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Project</h4>
                    <br>
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Instansi</th>
                                <th>Project Name</th>
                                <th>Link</th>
                                <th>PIC</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $project->instansi->instansi_name}}</td>
                                <td>{{ $project->project_name }}</td>
                                <td>{{ $project->link }}</td>
                                <td>{{ $project->user->name }}</td>
                                <td>
                                <a name="" id="" class="btn btn-success"
                                        href="{{ route('admin.project.edit', $project->id) }}" role="button">
                                        <i class="bi bi-pencil"></i></a>

                                    <a name="" id="" class="btn btn-primary"
                                        href="{{ route('admin.project.show', $project->id) }}" role="button">
                                        <i class="bi bi-eye-fill"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    
        @endsection