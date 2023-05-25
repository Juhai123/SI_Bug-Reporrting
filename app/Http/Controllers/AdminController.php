<?php

namespace App\Http\Controllers;

use App\Models\Bug;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $programmers = User::whereIn('role_id', [3])->get();
        $bug = Bug::all();
        $project = Project::all();
        $task = Task::all();
        return view('admin.dashboard', compact('programmers','bug', 'project', 'task'));
    }
}
