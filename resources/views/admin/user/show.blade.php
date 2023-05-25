@extends('layouts.admin')

@section('content')
<div class="pagetitle">
        <h1>Manajemen User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="index.html">Manajemen User</a></li>
                <li class="breadcrumb-item active">Show</li>
            </ol>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" name="" id="" href="{{ route('admin.user.index') }}">Back</a></div>
        </nav>
    </div>

    <!--card show bug-->
    <section class="section">
            <div class="card">
                <div class="card-body mt-3">
                <h4 class="card-title">Show User</h4>

                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $users->name }} </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $users->email }} </td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td>@if($users->image)
                                        <img src="{{ asset('storage/'. $bug->image) }}" width="128px">
                                         @else
                                         No Image
                                         @endif
                                        </td>
                                </tr>
                                <tr>
                                    <th>Job</th>
                                    <td>{{ $users->job }} </td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>{{ $users->role->name }} </td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>


                </div>
            </div>
    </section>
    @endsection