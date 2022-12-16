<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/js/app.js'])
    <title>laravel</title>
</head>
<div class="container">
  <div class="row">
    <body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link" href="{{ route('main.main') }}">
                    <button type="button" class="btn btn-warning">Main</button></a>
                <a class="nav-link" href="{{ route('post.index') }}">
                    <button type="button" class="btn btn-success">Posts</button></a>
                <a class="nav-link" href="{{ route('about.about') }}"><button type="button" class="btn btn-secondary">About</button></a>
                <a class="nav-link" href="{{ route('contact.contact') }}"><button type="button" class="btn btn-info">Contact</button></a>
            </div>
            </div>
          </nav>
    </div>
    @yield('content')
  </body>
</div>
</div>
</html>
