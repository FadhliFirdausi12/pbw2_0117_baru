<?php

namespace App\Http\Controllers;

use App\Models\Mytask;
use App\Models\Task;
use App\Models\List;
use App\Http\Requests\StoretaskRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the admin homepage.
     */
    public function homepage()
    {
        return view('admin.dashboard');
    }

    public function redirectBasedOnTasks()
    {
        $tasks = Task::all();

        if ($tasks->isEmpty()) {
            return view('admin.mytask');
        }

        return view('admin.list', compact('tasks'));
    }
}
