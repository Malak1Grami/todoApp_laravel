<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  
    <title>@yield('title')</title>
    {{-- bech njm nst3ml sass fi bo93et css --}}
    @vite(['resources/css/app.css'])
</head>
<body>
   @include('nav')
        <main class="page">
            @yield('content')
        </main>
    
   
</body>
</html>