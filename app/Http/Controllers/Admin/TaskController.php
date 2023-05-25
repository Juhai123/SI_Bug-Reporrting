<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bug;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $bug = Bug::find($request->bug_id);
        $data = $request->validate([
            'bug_id' => 'required' ,
            'user_id' => 'required' ,
       ]);
       
     $data['start'] = date('Y-m-d');
     $data['end'] = date('Y-m-d');
     $data['status'] = 'PENDING';

     Task::firstOrCreate([
        'bug_id' => $request->bug_id,
        'user_id' => $request->user_id,
    ], $data);
    return redirect()->route('admin.bug.show', $bug->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
