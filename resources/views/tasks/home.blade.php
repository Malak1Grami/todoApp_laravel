<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}app.css"> --}}
    
    <title>@yield('title')</title>
    {{-- bech njm nst3ml sass fi bo93et css --}}
    
    @vite(['resources/css/user.css'])
    @vite(['resources/sass/app.scss'])
    
</head>
<body>
   
   @include('tasks.nav' , ['user' => $user])
  

  
   <main class="user-main">

    @if (session('success'))
    <div class="alert alert-success">
     {{session('success')}}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
     {{session('error')}}
    </div>
    @endif


    @if (session('warning'))
    <div class="alert alert-warning">
     {{session('warning')}}
    </div>
    @endif


    @yield('content')
</main>
</body>
</html>