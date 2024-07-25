<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TaskController extends Controller
{
    public function taskProgress()
    {
        $todos = Todo::all();
        $completedTasks = $todos->where('is_completed', 1)->count();
        $incompleteTasks = $todos->where('is_completed', 0)->count();
        $totalTasks = $completedTasks + $incompleteTasks;

        return view('task_progress', compact('completedTasks', 'incompleteTasks', 'totalTasks'));
        
    }
}