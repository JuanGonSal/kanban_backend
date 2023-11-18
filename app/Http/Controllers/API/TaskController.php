<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasks = Task::all()                        
                        ->with('tags')
                        ->with('createdBy')
                        ->with('assignedTo');
        return response()->json($tasks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $task = new Task;
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->order = $request->input('order');
        $task->column_id = $request->input('column_id');
        $task->created_user_id = $request->input('created_user_id');
        $task->assigned_user_id = $request->input('assigned_user_id');
        $task->save();
        return response()->json($task);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $task = Task::findOrFail($id);
        return response()->json($task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //
        $task = Task::findOrFail($id);
        $task->update($request->all());
        $task = Task::with('assignedTo')->find($id);
        return response()->json($task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $task = Task::findOrFail($id);
        $task->delete();
        return response()->json(null, 204);
    }
    
    public function getTasksByColumn($columndId)
    {
        //
        $tasks = Task::where('column_id', $columndId)
                        ->with('tags')
                        ->with('createdBy')
                        ->with('assignedTo')
                        ->get();
        return response()->json($tasks);
    }
    
    public function addTagsToTask($taskId, Request $request)
    {
        //
        $task = Task::find($taskId);
        $data = $request->all();
        $tagsIds = collect($data)->pluck('id');
        return $task->tags()->sync($tagsIds);
    }
}
