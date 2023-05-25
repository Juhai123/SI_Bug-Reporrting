@extends('layouts.admin')
@section('content')
<div class="pagetitle">
            <h1>Pogrammer</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Programmer</li>
                    <li class="breadcrumb-item active">Data Programmer</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Programmer</h4>
                    <br>
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Bug Name</th>
                                <th>Project Name</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bugs as $bug)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $bug->name }}</td>
                                <td>{{ $bug->project->project_name}}</td>
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
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        @endsection