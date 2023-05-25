<?php

namespace App\Http\Controllers\Programmer;

use App\Http\Controllers\Controller;
use App\Models\Bug;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskProgrammer extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filterKeyword = $request->get('user_id');

        // dd($filterKeyword);
        $bug = Bug::all();
        $query = Task::query();
        $tasks = Task::where('user_id',auth()->user()->id)->paginate(5);
        return view ('programmer.task.index' , compact('tasks' , 'bug'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tasks = Task::findOrFail($id);
        $bug = Bug::all();
        return view('programmer.task.show', compact('tasks', 'bug'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tasks = Task::find($id);
        return redirect()->route('programmer.task.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tasks = Task::findOrFail($id);
        $tasks->delete();
        return redirect()->route('programmer.task.index');
    }

    
}
