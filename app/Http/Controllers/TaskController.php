<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        return Task::create($request->all());
    }

    public function show($id)
    {
        return Task::find($id);
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'completed' => 'boolean',
        ]);
    
        $task->update($request->all());
    
        return response()->json($task, 200);
    }

    public function destroy($id)
    {
        Task::destroy($id);
        return response()->json(['message' => 'Task deleted']);
    }
    public function getTaskOrderDate($order)
    {
        if (!in_array(strtoupper($order), ['ASC', 'DESC'])) {
            return response()->json(['error' => 'Invalid order parameter'], 400);
        }
        $tasks = Task::orderBy('created_at', $order)->get();
        return response()->json($tasks);
    }
    public function getTasksOrderStatus($order)
    {
        if (!in_array(strtoupper($order), ['ASC', 'DESC'])) {
            return response()->json(['error' => 'Invalid order parameter'], 400);
        }
        $tasks = Task::orderBy('completed', $order)->get();
        return response()->json($tasks);
    }  
    public function getTasksCompleted($status)
    {
        if (!in_array(strtoupper($status), [0, 1])) {
            return response()->json(['error' => 'Invalid order parameter'], 400);
        }
        $tasks = Task::where('completed', $status)->get();
        return response()->json($tasks);
    }      
     
}