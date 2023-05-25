<?php

namespace App\Http\Controllers\PICProject;

use App\Http\Controllers\Controller;
use App\Models\Bug;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class BugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bugs = Bug::whereIn('user_id', ['2'])->get();
        return view('pic.bug.index', compact('bugs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();
        $users = User::whereIn('role_id', [1,2])->get();
        return view('pic.bug.create', compact('projects', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          //dd($request);
        // $projects = Project::find($request->project_id);
        $data = $request->validate([

            'name' => 'required|string',
            'project_id' => 'required' ,
            'user_id' =>'nullable',
            'description' => 'nullable' ,
            'file' => 'file|nullable' ,
            'priority'=> 'required',
           
       ]);

       if ($request->file('file')) {
        $file = $request->file('file')->store('bugs', 'public');
         $data['file'] = $file;
      }
      $data['project_id'] = request('project_id');
      $data['status']= 'PENDING';
      $data['progress']= 0 ;

    //     Bug::firstOrCreate([
    //     'project_id' => $request->project_id,
    // ], $data);
    Bug::create($data);
    return redirect()->route('pic.bug.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bug = Bug::findOrFail($id);
        $tasks = $bug->tasks;
        $url = route('admin.task.store');
        // $users = User::role(['programmer'])->get();
        $users = User::whereIn('role_id', [3])->get();
        return view('pic.bug.show', ['bug' => $bug, 'tasks' => $tasks], compact('url', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bug = Bug::findOrFail($id);
        $projects = Project::all();
        return view('pic.bug.edit', compact('bug', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'project_id' => 'nullable' ,
            'description' => 'nullable' ,
            'file' => 'file|nullable' ,
           
       ]);
       $bug = Bug::find($id);
       $bug->update($data);
        return redirect()->route('pic.bug.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
