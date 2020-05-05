<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Let's Cook</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
    <header id="navigation-bar">
      <nav class="navbar navbar-dark navbar-color">
        <div class="container">
          <a href="/recipes" class="navbar-brand"><h3>Let's Cook</h3></a>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>
      @yield('content')
    <footer id="all-footer">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h4>Let's Cook</h4>
          </div>
          <div class="col-6">
            <ul>
              <li>User Agreement</li>
              <li>Privacy Policy</li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    </body>
</html>
