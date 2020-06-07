@extends('layouts.app')

@section('title', 'List of your tasks')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                 @if (count($tasks) > 0)
                    @foreach ($tasks as $task)
                        <div class="card-body">
                            <a href="/tasks/create" class="btn btn-primary float-right btn-sm mb-1">Add a new task</a>
                            <table class="table table-hover table-bordered">
                               <tr>
                   <th> Task Name</th>
                   <th> Task Priority</th>
                   <th> Date Added</th>
                               </tr>
                               <tr>
                                     <td draggable="true">  {{ $task->name }} </td>
                                   <td draggable=""> {{ $task->priority }}</td>
                                   <td draggable=""> {{ $task->created_at->diffForHUmans() }}</td>
                               <td draggable=""> <a href="/tasks/{{$task->slug}}/edit">View</a></td>
                               </tr>
                           </table>
                        </div>
                    @endforeach
                </div>
                     @else
            <div class="container text-center text-danger my-5">
                <h1 class="lead"> You don't have any tasks at the moment. <a href="/tasks/create" class="btn btn-sm btn-primary">Create tasks?</a></h1>
            </div>
                 @endif

            </div>
        </div>
    </div>
</div>
@endsection
