@extends('master')
@section('title','register')
@section('content') 

<section class="login-page">
    <div class="login-form-box">
        <div class="login-title">Register</div>
        <div class="login-form">
            <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="field">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="@error('name') has-error @enderror" placeholder="malak grami"> 
                    @error('name')
                        <span class="field-error">{{$message}}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="email">email</label>
                    <input type="email" id="email" name="email" class="@error('email') has-error @enderror" placeholder="malak@gmail.com"> 
                    @error('email')
                        <span class="field-error">{{$message}}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="password">password</label>
                    <input type="password" id="password" name="password" class="@error('password') has-error @enderror" placeholder="********"> 
                    @error('password')
                        <span class="field-error">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="field">
                    <label for="password_confirmation">Confirm password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="********"> 
                </div>

                <div class="field">
                    <label for="color">Your favorite color</label>
                    <input type="color" id="color" name="color" class="@error('color') has-error @enderror"> 
                    @error('color')
                        <span class="field-error">{{$message}}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="image">your image</label>
                    <input type="file" id="image" name="image" class="@error('image') has-error @enderror"> 
                    @error('image')
                        <span class="field-error">{{$message}}</span>
                    @enderror
                </div>
                <div class="field">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                {{-- ta3tni token --}}
                    @csrf
            </form>
        </div>
    </div>
</section>

    
@endsection