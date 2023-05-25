@extends('layouts.programmer')

@section('content')
<div class="pagetitle">
            <h1>History Task</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">History Task</li>
                </ol>
                
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
                                <th>End Date</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $task->bug->name }}</td>
                                <td>{{ $task->end }}</td>
                                <td> {{ $task->information }}</td>
                                <td></td>
                                <td>

                                    <a name="" id="" class="btn btn-primary"
                                        href="{{ route('programmer.task.show', $task->id) }}" role="button">Lihat</a>
                                </td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

@endsection
