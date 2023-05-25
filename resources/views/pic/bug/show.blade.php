@extends('layouts.pic_project')

@section('content')
<div class="pagetitle">
        <h1>Bug</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Task</li>
            </ol>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" name="" id="" href="{{ route('pic.bug.index') }}">Back</a></div>
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
                                    <th>Image</th>
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

    @endsection