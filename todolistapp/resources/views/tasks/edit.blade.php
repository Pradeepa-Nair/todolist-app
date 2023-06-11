<!-- resources/views/tasks/index.blade.php -->
 
@extends('layouts.app')
 
@section('content')
 
    <!-- Bootstrap Boilerplate... -->
 
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
 
        <!-- New Task Form -->
        <form action="{{ url('update') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$task->id}}" >
            <!-- Task Name -->
            <div class="form-group">
                <!-- <label for="task-title" class="col-sm-3 control-label">Edit Task</label> -->
                <h3>Edit Task</h3>
                <div class="col-sm-6">
                    <input type="text" name="title" id="task-title" class="form-control" value="{{ $task->title  }}">
                </div>
            </div>
            <div class="form-group" style="padding-top: 10px;">
                <label for="task-description" class="col-sm-3 control-label" >Description</label>
 
                <div class="col-sm-6">
                    <input type="text" name="description" id="task-description" class="form-control" value="{{ $task->description }}">
                </div>
            </div>
 
            <!-- Add Task Button -->
            <div class="form-group" style="padding-top: 10px;">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Update Task
                    </button>
                </div>
            </div>
        </form>
    </div>
 
@endsection