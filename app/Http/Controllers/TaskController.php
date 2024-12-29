<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\List;
use App\Models\Edit;
use App\Models\Showtask;
use App\Http\Requests\StoretaskRequest;
use App\Http\Requests\UpdatetaskRequest;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Task::query();

        if ($request->has('search') && !empty($request->search)) {
            $query->where('title', 'like', '%' . $request->search . '%')
              ->orWhere('note', 'like', '%' . $request->search . '%');
        }

        $tasks = $query->get();

        return view('admin.list', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hasTasks = Task::exists();
        return view('admin.task', compact('hasTasks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretaskRequest $request)
    {
    
        $request->validate([
            'title' => 'required|string|max:255',
            'note' => 'nullable|string',
            'created_at' => 'required|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $photoName = $file->getClientOriginalName();
            $photoPath = $file->storeAs('photos', $photoName, 'public');
            $task->photo = $photoPath;
        }

        Task::create([
            'title' => $request->input('title'),
            'note' => $request->input('note'),
            'created_at' => $request->input('created_at'),
            'photo' => $photoPath,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        return view('admin.showtask', compact('task'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        return view('admin.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'note' => 'nullable|string',
            'created_at' => 'required|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $task->update([
            'title' => $request->input('title'), 
            'note' => $request->input('note'),
            'created_at'=> $request->input('created_at'),
        ]);

        if ($request->hasFile('photo')) {
            if ($task->photo) {
                \Storage::disk('public')->delete($task->photo); 
            }
    
            $file = $request->file('photo');
            $photoName = $file->getClientOriginalName();
            $photoPath = $file->storeAs('photos', $photoName, 'public');
            $task->photo = $photoPath;       
        }

        $task->save();
        
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        $task->delete();
        return redirect()->route('tasks.list')->with('success', 'Task deleted successfully!');
    }

}
