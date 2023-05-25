@extends('layouts.admin')

@section('content')
<div class="pagetitle">
            <h1>Bug</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Bug</li>
                </ol>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-primary" name="" id="" href="{{ route('admin.bug.create') }}">Add</a>
    </div>
            </nav>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Bug</h4>
                    <br>
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Bug Name</th>
                                <th>Description</th>
                                <th>File</th>
                                <th>Status</th>
                                <th>Progress</th>
                                <th>Project Name</th>
                                <th>Priority</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bugs as $bug)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $bug->name }}</td>
                                <td>{{ $bug->description }}</td>
                                <td>@if ($bug->file)
                                        <a href="{{asset('storage/'.$bug->file)}}" width="70px">File</a>
                                        
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td> @if ($bug->status == 'PENDING')
                                        <span class="badge bg-primary text-light"
                                            style="font-size: 13px">{{ $bug->status }}</span>
                                    @elseif($bug->status == 'ON PROGRESS')
                                        <span class="badge bg-warning text-light"
                                            style="font-size: 13px">{{ $bug->status }}</span>
                                    @elseif($bug->status == 'DONE')
                                        <span class="badge bg-success text-light"
                                            style="font-size: 13px">{{ $bug->status }}</span>
                                    @elseif($bug->status == 'VERIFICATION')
                                        <span class="badge bg-danger text-light"
                                            style="font-size: 13px">{{ $bug->status }}</span>
                                    @endif</td>
                                <td>{{ $bug->progress }}</td>
                                <td>{{ $bug->project->project_name}}</td>
                                <td>
                                    @if ($bug->priority == 'LOW')
                                        <i class="ri-checkbox-blank-circle-fill text-success"
                                            style="font-size: 13px"></i>
                                    @elseif ($bug->priority == 'MEDIUM')
                                        <i class="ri-checkbox-blank-circle-fill text-warning"
                                            style="font-size: 13px"></i>
                                    @elseif($bug->priority == 'HIGH')
                                        <i class="ri-checkbox-blank-circle-fill text-danger"
                                            style="font-size: 13px"></i>
                                    @endif
                                </td>
                                <td>
                                <a name="" id="" class="btn btn-success"
                                        href="{{ route('admin.bug.edit', $bug->id) }}" role="button">
                                        <i class="bi bi-pencil"></i></a>

                                    <a name="" id="" class="btn btn-primary"
                                        href="{{ route('admin.bug.show', $bug->id) }}" role="button">
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

