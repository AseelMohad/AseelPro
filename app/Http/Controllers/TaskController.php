<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('dashboard', compact('tasks'));
    }

    public function create()
    {
        // Return a view to create a new task
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'task' => 'required',
            'category_id' => 'required|exists:categories,id',
            'completed' => 'boolean',
        ]);

        // Create a new task
        Task::create($request->all());

        // Redirect back or to a specific route
    }

    public function show(Task $task)
    {
     
    }

    public function edit(Task $task)
    {
        // Return a view to edit a specific task
    }

    public function update(Request $request, Task $task)
    {
        // Validate the request data
        $request->validate([
            'task' => 'required',
            'category_id' => 'required|exists:categories,id',
            'completed' => 'boolean',
        ]);

        // Update the task
        $task->update($request->all());

        // Redirect back or to a specific route
    }

    public function destroy(Task $task)
    {
        // Delete the task
        $task->delete();

        // Redirect back or to a specific route
    }
}