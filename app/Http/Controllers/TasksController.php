<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alltasks = Task::all();
        return view('home')->with('tasks', $alltasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tasks.create');
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
        $this->validate($request, [
            'task_name' => 'required|min:5',
            'priority' => 'required',
        ]);
        $task = new Task();
        $task->name = $request->task_name;
        $task->priority = $request->priority;
        $task->user_id = Auth::id();
        $task->slug = $request->task_name;
        $task->save();
        return redirect()->route('tasks.show', $task->slug)->with('success', 'Task has been successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $data = Task::findOrFail($slug);
        dd($data->priority);
        // $showTasks = Task::where('slug', $slug)->first();
        // return view('tasks.show')->with('task', $showTasks);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        $getTask = Task::where('slug', $slug)->first();
        return view('tasks.edit')->with('task', $getTask);
        // dd($getTask);
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
        //
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
        $deleteTask = Task::find($id);
        $deleteTask->delete();
        return redirect()->route('home')->with('success', 'Task has been deleted successfully');
    }
}