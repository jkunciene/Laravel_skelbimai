<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

use Gate;
use File;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showTable(){
        $tasks = Task::all();
        return view('todo.pages.table', compact('tasks'));
    }
    public function taskStore(Request $request){
        $validateDate = $request->validate([
            'subject' => 'required',
            'priority' => 'required',
            'dueDate' => 'required',
            'percent' => 'required']);
        $task = Task::create([
            'subject' => request('subject'),
            'priority' => request('priority'),
            'dueDate' => request('dueDate'),
            'percent' => request('percent')
        ]);

        return redirect('/table');
    }



}
