@extends('tasks.home')
@section('title','All tasks')
@section('content')

<h1 class="page-title">All tasks</h1>

<div class="container">
    
    
    <div class="row">
        <div class="col-md-9 offset-3">
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
                                
                            
                            <tr class="{{ $task->completed ? 'completed' : '' }}">
                                <td>{{$task->id}}</td>
                                <td>{{$task->name}}</td>
                                <td>{{$task->date}}</td>
                                <td>{{$task->description}}</td>
                                <td>{{$task->created_at}}</td>
                               
                                
                                <td> 
                                    


                                    <div class="d-flex" style=" gap: 5px">
                                        <a href="{{route('edit.task',$task->id)}}" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v6h-2v-2H5v10h7v2H5Zm17.125-5L20 14.875l.725-.725q.275-.275.7-.275t.7.275l.725.725q.275.275.275.7t-.275.7l-.725.725ZM14 23v-2.125l5.3-5.3l2.125 2.125l-5.3 5.3H14Z"/></svg></a>
                                        


                                        <form action="{{route('destroy.task',$task->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <Button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M7 21q-.825 0-1.413-.588T5 19V6q-.425 0-.713-.288T4 5q0-.425.288-.713T5 4h4q0-.425.288-.713T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5q0 .425-.288.713T19 6v13q0 .825-.588 1.413T17 21H7Zm2-5q0 .425.288.713T10 17q.425 0 .713-.288T11 16V9q0-.425-.288-.713T10 8q-.425 0-.713.288T9 9v7Zm4 0q0 .425.288.713T14 17q.425 0 .713-.288T15 16V9q0-.425-.288-.713T14 8q-.425 0-.713.288T13 9v7Z"/></svg></Button>
                                        </form>

                                        <form action="{{route('complete.task',$task->id)}}"  method="POST">
                                                @csrf
                                            @method('PUT')
                                                <button type="submit" class="btn btn-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 2048 2048"><path fill="currentColor" d="M1024 0q141 0 272 36t244 104t207 160t161 207t103 245t37 272q0 141-36 272t-104 244t-160 207t-207 161t-245 103t-272 37q-141 0-272-36t-244-104t-207-160t-161-207t-103-245t-37-272q0-141 36-272t104-244t160-207t207-161T752 37t272-37zm603 685l-136-136l-659 659l-275-275l-136 136l411 411l795-795z"/></svg></a>
                                                </button>
                                        </form>
                                                {{-- <form action="{{route('complete.task')}}" method="POST">
                                            @csrf
                                            
                                                    @if (!$task->completed)         
                                                        <input type="checkbox" name="tasks[]" id="checkbox{{ $task->id }}" value="{{ $task->id }}">
                                                    @else
                                                        <input type="checkbox" checked name="tasks[]" value="{{$task->id}}">
                                                        @endif --}}
                                                
                                            
                                            
                                    </div>
                                </td>
                                        
                            </tr>
                                        
                                @endforeach
                                        {{-- <tr>
                                            <td colspan="5"></td>
                                            <td><input  class="btn btn-danger" type="submit" value="Mark as completed"></td>
                                        </tr> --}}
                                        
                                    {{-- </form> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection