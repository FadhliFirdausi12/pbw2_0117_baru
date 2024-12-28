<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\List;
use App\Http\Requests\StoretaskRequest;
use App\Http\Requests\UpdatetaskRequest;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('admin.list', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.task');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretaskRequest $request)
    {
    
        $request->validate([
            'title' => 'required|string|max:255',
            'notes' => 'nullable|string',
            'end_date' => 'required|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        Task::create([
            'title' => $request->input('title'),
            'notes' => $request->input('notes'),
            'end_date' => $request->input('end_date'),
            'photo' => $photoPath,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        $tasks = Task::all();

        // Arahkan ke view admin.list dengan task yang di-highlight
        return view('admin.list', ['tasks' => $tasks, 'highlightedTask' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {

        // Arahkan ke view admin.list dengan task yang sedang diedit
        return view('admin.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateSettings(UpdatetaskRequest $request, task $task)
    {
        $user = auth()->user();
        $user->update([
        'username' => $request->username,
        'name' => $request->name,
        'email' => $request->email,
        ]);

    return redirect()->route('admin.setting')->with('success', 'Settings updated successfully!');
    }

    public function update(Request $request, Task $task)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'notes' => 'nullable|string',
            'end_date' => 'nullable|date',
        ]);

        // Update task di database
        $task->update($request->only(['title', 'notes', 'end_date']));

        // Redirect ke view admin.list dengan pesan sukses
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        $task->delete();

        // Redirect ke view admin.list dengan pesan sukses
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }

}
