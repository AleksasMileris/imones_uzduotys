<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class AsignController extends Controller
{
    public function index()
    {
        return view("asign.index",[

            "users"=>User::all()
        ]);



    }
    public function addTask(Request $request){
        $user = User::find($request->user_id);

        return view("asign.addTask",[
            "user"=>$user,
            "user_id"=>$user->id,
            "tasks"=>Task::all()
        ]);


    }
    public function store($id,Request $request){

        $user= User::find($id);
        $task= Task::find($request->task_id);
        $user->tasks()->attach($request->task_id,[
            'user_id'=>$user->id,
            'task_id'=>$task->id
        ]);
        $user->save();

        return redirect()->route('tasks.index');}
}
