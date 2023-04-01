@extends('tasks.home')
@section('title','Edit task')
@section('content')

<h1 class="page-title"> Edit task</h1>


<div class="container">
    <div class="row mb-5">
        <div class="col-md-9 offset-3">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Edit Task
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{route('update.task',$task->id)}}" method="POST">
                        @csrf

                            @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-groupe mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name')is-invalid @enderror " value="{{$task->name}}">
                            @error('Title')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                           
                            @enderror
                        </div>
                    </div> 


                    <div class="col-md-6">
                        <div class="form-groupe mb-3">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="price" class="form-control
                             @error('date')is-invalid @enderror " value="{{$task->date}}">
                    @error('date')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>



        </div>

<div class="row mb-3">
    <div class="col-md-12">
        <div class="form-group">
            <label for="Description">Description :</label> 
            <textarea name="Description" id="Description" cols="30" rows="10" class="form-control @error('Description')is-invalid @enderror" placeholder="Describe your task">
            
          
                {{$task->description}}
            </textarea>
            @error('Description')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
    </div>


</div>


                        <div class="form-group text-end">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection