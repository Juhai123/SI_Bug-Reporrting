@extends('layouts.admin')

@section('content')
<div class="pagetitle">
        <h1>Project</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="index.html">Project</a></li>
                <li class="breadcrumb-item active">Show Project</li>
            </ol>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" name="" id="" href="{{ route('admin.project.index') }}">Back</a></div>
        </nav>
    </div>

    <!--card show bug-->
    <section class="section">
            <div class="card">
                <div class="card-body mt-3">
                <h4 class="card-title">Show Project</h4>

                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                    <th>Instansi</th>
                                    <td>{{ $project->instansi->instansi_name }} </td>
                                </tr>
                                <tr>
                                    <th>Project Name</th>
                                    <td>{{ $project->project_name }} </td>
                                </tr>
                                <tr>
                                    <th>Link</th>
                                    <td>{{ $project->link }} </td>
                                </tr>
                                <tr>
                                    <th>PIC</th>
                                    <td>{{ $project->user->name }} </td>
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