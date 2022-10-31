<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Services\PaginationService;
use Illuminate\Http\Request;
use Throwable;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::paginate(4);
        return view('templates.tasks-list', ['tasks' => $tasks]);
    }

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
        return redirect()->route('tasks', ['task' => $task]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);

        if (empty($task)) return response(['message' => 'Task not found', 404]);

        return response($task, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);

        if (empty($task)) return response(['message' => 'Task not found'], 404);

        return view('templates.edit-task', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        if (empty($task)) return response(['message' => 'Task not found'], 404);

        $task->update($request->all());

        return redirect()->route('tasks', ['task' => $task]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $task = Task::find($id);

        Task::destroy($id);

        if (empty($task)) return response(['message' => 'Task not found', 404]);

        return redirect()->route('tasks', ['task' => $task])->with('message', 'Task deleted successfully');
    }
}
