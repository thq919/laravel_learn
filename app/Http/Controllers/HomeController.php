<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function tasks(): View {
        $tasks = Task::get();
        return view('tasks.tasks', compact('tasks'));
    }
}
