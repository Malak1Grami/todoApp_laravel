@extends('tasks.home')
@section('name','create task')
@section('content')



<div class="container">
    <div class="row mb-3">
        <div class="col-md-9 offset-md-3">
            <br><br>
            <h1 class="page-name">Create task</h1>
            <br><br>
            <div class="card">
                <div class="card-header">
                    <h5>
                        Create task
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{route('store.task')}}" method="POST" >
                        @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-groupe mb-3">
                            <label for="name">name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name')is-invalid @enderror " value="{{old('name')}}">
                            @error('name')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                           
                            @enderror
                        </div>
                    </div> 


                    <div class="col-md-6">
                        <div class="form-groupe mb-3">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" class="form-control
                             @error('date')is-invalid @enderror " value="{{old('date')}}">
                    @error('date')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>



        </div>
{{-- 2 row --}}









<div class="row mb-3">
    <div class="col-md-12">
        <div class="form-group">
            <label for="Description">Description :</label> 
            <textarea name="Description" id="Description" cols="30" rows="10" class="form-control @error('Description')is-invalid @enderror" placeholder="Describe your task"></textarea>
          


            @error('Description')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
    </div>


</div>


        




                        <div class="form-group text-end">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection