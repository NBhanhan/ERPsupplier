<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <header class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="col-md-offset-1 col-md-10">
          <a href="/" id="logo">ERP Suppliers</a>
          <nav>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ route('help') }}"> Help </a></li>
              <li><a href="{{ route('about') }}"> About </a></li>

            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div class="container">

      @include('shared.messages')
      @yield('content')

    </div>
  </body>
</html>
