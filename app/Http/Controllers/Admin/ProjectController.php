<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instansi;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instansis = Instansi::all();
        $users = User::whereIn('role_id', [2])->get();
        return view('admin.project.create', compact('instansis', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd ($request);
        $data = $request->validate([
            'project_name' => 'required|string',
            'instansi_id' => 'required' ,
            'link'=> 'required',
            'user_id' => 'required' ,
       ]);
    //    Project::firstOrCreate([
    //         'instansi_id' => $request->instansi_id,
    //         'user_id' => $request->user_id,
    //     ], $data);
    Project::create($data);
    return redirect()->route('admin.project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::findOrFail($id);
        $instansi = Instansi::all();
        $user = User::role(['pic_project'])->get();
        return view('admin.project.show', compact('project', 'instansi', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        $instansis = Instansi::all();
        $users = User::role(['pic_project'])->get();
        return view('admin.project.edit', compact('project', 'instansis', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'project_name' => 'required|string',
            'instansi_id' => 'required' ,
            'link'=> 'required',
            'user_id' => 'required' ,
           
       ]);
       $project = Project::find($id);
       $project->update($data);
        return redirect()->route('admin.project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
