<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('task.index');
    }

    public function store(){
        $data = request()->validate([
            'title' => 'required'
        ]);
        if (auth()->user()->tasks()->create($data)) {
            request()->session()->flash('success', 'The task has been saved successfully');
        }else{
            request()->session()->flash('error', 'The task has not been saved successfully');
        }

        return redirect(route('task.index'));
    }

    public function destroy($id){
        $model = \App\Task::findOrFail($id);
        if($model->delete()){
            request()->session()->flash('success', 'The task has been deleted successfully');
        }else{
            request()->session()->flash('error', 'The task has not been deleted');
        }
        return redirect(route('task.index'));
    }

    public function edit(\App\Task $task){
        $this->authorize('update', $task); 
        $task = \App\Task::findOrFail($task->id);
        return view('task.edit', [
            'task' => $task
        ]);
    }

    public function update($task){
        $model = \App\Task::findOrFail($task);
        $data = request()->validate([
            'title' => 'required'
        ]);
        if($model->update($data)){
            request()->session()->flash('success', 'The task has successfully been updated');
        }else{
            request()->session()->flash('error', 'The task has not been updated');
        }

        return redirect(route('task.index'));
        
    }

}
