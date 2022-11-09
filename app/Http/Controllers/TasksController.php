<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Task::query();

        if ($request->has('query')) {
            $search = $request->query('query');
            $tasks = $query->where('name', 'like', '%' . $search . '%')->paginate(4)->appends(['query' => $request->query('query')]);
        } else {
            $tasks = $query->paginate(4)->appends(['query' => $request->get('query')]);
        }

        return view('templates.tasks-list', compact('tasks'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.create-task');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task  = Task::create([
            'name' => $request->name,
            'label' => $request->label
        ]);

        return redirect()->route('tasks', $task);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        if (empty($task)) return response(['message' => 'Task not found', 404]);

        return response($task, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        if (empty($task)) return response(['message' => 'Task not found'], 404);

        return view('templates.edit-task', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        if (empty($task)) return response(['message' => 'Task not found'], 404);

        $task->update($request->all());

        return redirect()->route('tasks', $task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        if (empty($task)) return response(['message' => 'Task not found', 404]);

        $task->delete();

        return redirect()->route('tasks', $task)
            ->with('message', 'Task deleted successfully');
    }
}
