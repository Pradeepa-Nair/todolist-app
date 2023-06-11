<!-- resources/views/tasks/index.blade.php -->
 
@extends('layouts.app')
 
@section('content')
 
    <!-- Bootstrap Boilerplate... -->
 
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
 
        <!-- New Task Form -->
        <form action="{{ url('store') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
 
            <!-- Task Name -->
            <div class="form-group">
                <label for="task-title" class="col-sm-3 control-label">Task</label>
 
                <div class="col-sm-6">
                    <input type="text" name="title" id="task-title" class="form-control">
                </div>
            </div>
            <div class="form-group" style="padding-top: 10px;">
                <label for="task-description" class="col-sm-3 control-label">Description</label>
 
                <div class="col-sm-6">
                    <input type="text" name="description" id="task-description" class="form-control">
                </div>
            </div>
 
            <!-- Add Task Button -->
            <div class="form-group" style="padding-top: 10px;">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Add Task
                    </button>

                </div>
            </div>
        </form>
    </div>
 
    <!-- TODO: Current Tasks -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            
            <div class="panel-body">
                <table class="table table-striped task-table">
 
                    <!-- Table Headings -->
                    <thead>
                        <th>Current Tasks</th>
                        <th>&nbsp;</th>
                    </thead>
 
                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $task->title }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $task->description }}</div>
                                </td>

                                <td class="table-text">
                                    <!-- TODO: Delete Button -->
                                    <div>
                                        <form action="{{ url('edit/'.$task->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}
                                 
                                            <button type="submit" id="edit-task-{{ $task->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Edit
                                            </button>
                                        </form>
                                    </div>
                                </td>
 
                                <td class="table-text">
                                    <!-- TODO: Delete Button -->
                                    <div>
                                        <form action="{{ url('task/'.$task->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}
                                 
                                            <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection