<?php

namespace App\Http\Controllers;

use App\Models\task_calendar;
use App\Http\Requests\Storetask_calendarRequest;
use App\Http\Requests\Updatetask_calendarRequest;

class TaskCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Storetask_calendarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(task_calendar $task_calendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task_calendar $task_calendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatetask_calendarRequest $request, task_calendar $task_calendar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task_calendar $task_calendar)
    {
        //
    }
}
