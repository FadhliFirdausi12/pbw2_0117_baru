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
        // Anda dapat menambahkan logika tambahan di sini jika diperlukan
        return view('admin.dashboard');
    }

    public function redirectBasedOnTasks()
    {
        $tasks = Task::all();

        if ($tasks->isEmpty()) {
            return view('admin.mytask'); // Jika belum ada data
        }

        return view('admin.list', compact('tasks')); // Jika ada data
    }
}
