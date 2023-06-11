<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;


class TaskController extends Controller
{
   public function index(Request $request)
   {
   	   $tasks = Task::where('completed', 1)->orderBy('created_at', 'asc')->get();
   	   
       return view('tasks.index', ['tasks' => $tasks]);
   } 

   public function store(Request $request)
   {

       $this->validate($request, [
           'title' => 'required|max:255',
       ]);
    
       $task = new Task;
       $task->title = $request->title;
       $task->description = $request->description;
       $task->save();
    
       return redirect('/tasks');
   }
   public function edit(Request $request,Task $task)
   {
   		
       return view('tasks.edit', ['task' => $task]);
   } 
   public function update(Request $request)
   {

   	   $task = Task::find($request->id);
       $this->validate($request, [
           'title' => 'required|max:255',
       ]);
       $updatedTime = Carbon::now();
       
       $task->title = $request->title;
       $task->description = $request->description;
       $task->updated_at=$updatedTime;
       $task->save();
    
       return redirect('/tasks');
   }
   public function delete(Request $request, Task $task)
   {
       $task = Task::find($task->id);
       $task->completed = 0;
       $task->save();
       return redirect('/tasks');
   }
}


