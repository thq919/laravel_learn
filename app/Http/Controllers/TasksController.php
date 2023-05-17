<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\View\View;

class TasksController extends Controller
{
    public function task($id): View {
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }
}
