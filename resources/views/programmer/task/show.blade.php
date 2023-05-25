@extends('layouts.programmer')

@section('content')
<div class="pagetitle">
        <h1>Task</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="index.html">Task</a></li>
                <li class="breadcrumb-item active">Show Task</li>
            </ol>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" name="" id="" href="{{ route('programmer.task.index') }}">Back</a></div>
        </nav>
    </div>

    <!--card show bug-->
    <section class="section">
            <div class="card">
                <div class="card-body mt-3">
                <h4 class="card-title">Show Task</h4>

                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                    <th>Bug Name</th>
                                    <td>{{ $tasks->bug->name }} </td>
                                </tr>
                                <tr>
                                    <th>File</th>
                                    <td>
                                    @if($tasks->bug->file)
                                        <img src="{{ asset('storage/'. $tasks->bug->file) }}" width="300px">
                                         @else
                                         N/A
                                         @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if($tasks->bug->status =="PENDING")
                                    <span class="badge bg-primary text-light">{{$tasks->bug->status}}</span>
                                    @elseif($tasks->bug->status == "ON PROGRESS")
                                    <span class="badge bg-warning text-light">{{$tasks->bug->status}}</span>
                                    @elseif($tasks->bug->status == "DONE")
                                    <span class="badge bg-success text-light">{{$tasks->bug->status}}</span>
                                    @elseif($tasks->bug->status == "VERIFICATION")
                                    <span class="badge bg-danger text-light">{{$tasks->bug->status}}</span>
                                    @endif
                                </td>
                                </tr>
                                <tr>
                                    <th>Start Date</th>
                                    <td>{{ $tasks->start }} </td>
                                </tr>
                                <tr>
                                    <th>End Date</th>
                                    <td>{{ $tasks->end }} </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>


                </div>
            </div>
    </section>
    <!--card end show bug-->
@endsection