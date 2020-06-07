<?php

namespace App\Http\Controllers;

use App\Task;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allTasks = Task::all();
        return view('home')->with('tasks', $allTasks);
    }
    public function edit($slug)
    {

        $getTask = Task::where('name', $slug)->get();
        return view('tasks.edit')->with('task', $getTask);
        // dd($getTask);
    }
}