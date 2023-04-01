@extends('master')
@section('title','login')
@section('content')

<section class="login-page">
    <div class="login-form-box">
        <div class="login-title">login</div>
        <div class="login-form">
            <form action="{{route('login')}}" method="POST">
                {{-- ta3tni token --}}
                @csrf

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
                    <button type="submit" class="btn btn-primary btn-block">login</button>
                </div>

            </form>
            <div class="register-link">
                Don't have an account? <a href="{{route('register')}}">Register here</a>
            </div>
        </div>
    </div>
</section>
@endsection