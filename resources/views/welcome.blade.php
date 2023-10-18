<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>Webpage</title>
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <style type="text/css">
        i{
            font-size: 50px;
        }
    </style>
</head>
<body class="vw-100 vh-100 d-flex justify-content-center align-items-center">
<div class="container">
    <h1 class="text-center font-weight-bold">A Simple Library System</h1>
    <div class="d-flex flex-wrap p-5 justify-content-around gap-3">
        <a href="/login" class="btn btn-custom flex-fill">Login</a>
        <a href="/register" class="btn btn-custom flex-fill">Create Account</a>
    </div>
</div>

    
    </div>
</body>
</html>