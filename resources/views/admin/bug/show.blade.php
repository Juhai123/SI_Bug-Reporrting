@extends('layouts.admin')

@section('content')
<div class="pagetitle">
        <h1>Bug</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Task</li>
            </ol>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" name="" id="" href="{{ route('admin.bug.index') }}">Back</a></div>
        </nav>
    </div>

    <!--card show bug-->
    <section class="section">
            <div class="card">
                <div class="card-body mt-3">
                <h4 class="card-title">Show Bug</h4>

                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $bug->name }} </td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ $bug->description }} </td>
                                </tr>
                                <tr>
                                    <th>File</th>
                                    <td>
                                        @if($bug->file)
                                        <img src="{{ asset('storage/'. $bug->file) }}" width="300px">
                                         @else
                                         N/A
                                         @endif
                                        </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>@if($bug->status =="PENDING")
                                    <span class="badge bg-success">{{$bug->status}}</span>
                                    @elseif($bug->status == "ON PROGRESS")
                                    <span class="badge bg-danger text-light">{{$bug->status}}</span>
                                    @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                </div>
            </div>
    </section>
    <!--card end show bug-->

     <!--card task-->
 <section>
        <div class="card">
            <div class="card-body md-4">
                <h5 class="card-title">Task</h5>
                <p><strong>Pilih user untuk ditambahkan di task diatas :</strong></p>
                 <!-- Left side columns -->
        <div class="col-lg-10">
          <div class="row">

                <form action="{{ $url }}" method="post">
                    @csrf
                    <input type="hidden" name="bug_id" value="{{ $bug->id }}">
                    <div class="form-group mt-3">
                    <select class="form-select"name="user_id" id="" >
                    <option disabled value="">Pilih Programmer</option>
                    @foreach ($users as $user)
                    <option value=" {{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                    </select>
                    <div class="col-lg-4">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                   
                </div>
                </div>
                </form>

          </div>
        </div>
            </div>
        </div> 
              
    </section>
   
    <!--card end task-->

    <!--card task-->
    <section class="section">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tabel Task</h4>
                    <br>
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                        
                            <tr>
                                <th>No</th>
                                <th>Programmer</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($task as $task)
                        <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $task->user->name }}</td>
                                <td>{{ $task->start }}</td>
                                <td>{{ $task->end }}</td>
                                <td>
                                <form method="POST" action="{{ route('admin.bug.destroy', $task->id )}}" class="d-inline"  >
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Delete" class="btn btn-danger" />

                </form>
                                </td>
                            @endforeach
                            </tr>
                        </tbody>

                    </table>
            </div>
        </div>
    </section>
 
    <!--card end task-->
    @endsection

    