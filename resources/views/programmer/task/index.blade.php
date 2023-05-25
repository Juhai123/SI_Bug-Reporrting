@extends('layouts.programmer')

@section('content')
<div class="pagetitle">
            <h1>Task</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Task</li>
                </ol>
                
            </nav>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Task</h4>
                    <br>
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Bug Name</th>
                                <th>File</th>
                                <th>Status</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $task->bug->name}}</td>
                                <td> @if ($task->bug->file)
                                    <a href="{{asset('storage/'.$task->bug->file)}}" width="70px">File</a>
                                    @else
                                    N/A
                                    @endif
                                    
                                </td>
                                <td>
                                @if ($task->bug->status == 'PENDING')
                                        <span class="badge bg-primary text-light"
                                            style="font-size: 13px">{{ $task->bug->status }}</span>
                                    @elseif($task->bug->status == 'ON PROGRESS')
                                        <span class="badge bg-warning text-light"
                                            style="font-size: 13px">{{ $task->bug->status }}</span>
                                    @elseif($task->bug->status == 'DONE')
                                        <span class="badge bg-success text-light"
                                            style="font-size: 13px">{{ $task->bug->status }}</span>
                                    @elseif($task->bug->status == 'VERIFICATION')
                                        <span class="badge bg-danger text-light"
                                            style="font-size: 13px">{{ $task->bug->status }}</span>
                                    @endif</td>
                                </td>
                                <td>{{ $task->start }}</td>
                                <td>{{ $task->end }}</td>
                                <td>

                                    <a name="" id="" class="btn btn-primary"
                                        href="{{ route('programmer.task.show', $task->id) }}" role="button">Lihat</a>

                                    <a name="edit-btn" id="edit-btn" class="btn btn-success"
                                        href="{{ route('programmer.task.edit', $task->id) }}" role="button">Ambil</a>
                                        
                                    <form method="POST" action="{{ route('programmer.task.destroy', $task->id )}}" class="d-inline"  >
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Delete" class="btn btn-danger" />

                </form>
                                </td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
@endsection

@section('script')
<script>
$(document).ready(function(){
        $('edit-btn').click(function(e){
            e.preventDefault();
            <tr>
            <td>
            <a name="edit-btn" id="edit-btn" class="btn btn-success"
                                        href="{{ route('programmer.task.edit', $task->id) }}" role="button">Yayay</a></td>
            </tr>
        });
    });
    // var i=0;
    // $('edit-btn').click(function(){
    //     ++i;
    //     $('#table').append(
    //         <tr>
    //         <td>
    //         <a name="edit-btn" id="edit-btn" class="btn btn-success"
    //                                     href="{{ route('programmer.task.edit', $task->id) }}" role="button">Yayay</a></td>
    //         </tr>
    //     );
        
    // });
    // $(document).ready(function()){
    //     $.('edit-btn').click(function(e)){
    //         e.preventDefault();
    //         var url = $(this).attr('href');
    //     }

    // };
</script>
@endsection