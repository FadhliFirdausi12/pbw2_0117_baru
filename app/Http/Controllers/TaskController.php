<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Http\Requests\StoretaskRequest;
use App\Http\Requests\UpdatetaskRequest;

class TaskController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        \Log::info('User authenticated: ' . auth()->check());
        $this->authorize('view-tasks');
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
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
    public function store(StoretaskRequest $request)
    {

        \Log::info('CSRF Token: ' . $request->header('X-CSRF-TOKEN'));
        \Log::info('CSRF Token from input: ' . $request->_token);

        dd(Auth::user()->role);
    
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        //
    }

}
