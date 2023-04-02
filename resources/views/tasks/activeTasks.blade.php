@extends('tasks.home')
@section('title','All tasks')
@section('content')



<div class="container">
    
    
    
    <div class="row">
        
        <div class="col-md-9 offset-3">
            <br>
            <br>
            <h1 class="page-title">Active tasks</h1>
            <br>
            <br>
            <div class="card">
                <div class="card-header">
                    <h5>Tasks</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Published</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                
                            
                            <tr >
                                <td>{{$task->id}}</td>
                                <td>{{$task->name}}</td>
                                <td>{{$task->date}}</td>
                                <td>{{$task->description}}</td>
                                <td>{{$task->created_at}}</td>
                               
                                
                                <td> 
                                    


                                    <div class="d-flex" style=" gap: 5px">
                                        
                                        <form action="{{route('complete.task',$task->id)}}"  method="POST">
                                                @csrf
                                            @method('PUT')
                                                <button type="submit" class="btn btn-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 2048 2048"><path fill="currentColor" d="M1024 0q141 0 272 36t244 104t207 160t161 207t103 245t37 272q0 141-36 272t-104 244t-160 207t-207 161t-245 103t-272 37q-141 0-272-36t-244-104t-207-160t-161-207t-103-245t-37-272q0-141 36-272t104-244t160-207t207-161T752 37t272-37zm603 685l-136-136l-659 659l-275-275l-136 136l411 411l795-795z"/></svg></a>
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
        </div>
    </div>
</div>

@endsection