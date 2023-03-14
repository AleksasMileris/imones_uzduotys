<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sum=Task::count();
        $tasks=Task::paginate(5);

       return view("tasks.index",[
           "tasks"=>$tasks,
           "sum"=>$sum
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tasks.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $task= new Task();
       $task->name=$request->name;
        $task->status=$request->status;
        $task->save();

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view("tasks.edit",[
            'task'=>$task
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task->name=$request->name;
        $task->status=$request->status;
        $task->save();

        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');

    }
    public function delete($id ,$user_id){
        $user=User::find($user_id);
        if($user !=null){
        $user->tasks()->where('task_id',$id)->detach($id);
        return redirect()->route('users.show',$user->id);
        }
    }
}
