<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::get()
        ]);
    }

    public function show(Task $task)
    {
        return view('tasks.show', [
            'task' => $task
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        Task::create($this->validateTask());
        return redirect( route('tasks.index') );
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Task $task)
    {
        $task->update($this->validateTask());

        return redirect($task->path());
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect( route('tasks.index') );
    }

    public function validateTask()
    {
        return request()->validate([
            'description' => 'required',
            'due_date'  => 'required',
            'priority'  => 'required'
        ]);
    }
}
