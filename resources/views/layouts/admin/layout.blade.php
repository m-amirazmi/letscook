<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href={{asset('css/app.css')}}>
  <script src="https://kit.fontawesome.com/ce9a652be3.js" crossorigin="anonymous"></script>
  <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  <title>Let's Cook | Admin</title>
</head>
<body>
  <header id="admin-navigation-bar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">LetsCook Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">        
            <li class="nav-item">
              <a class="nav-link" href="/recipes" tabindex="-1" aria-disabled="true">View Site</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">        
            <li class="nav-item">
              <a class="nav-link" href="/register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/logout">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
    @include('inc.admin.sidebar-nav')
  <main>
    @yield('content')
  </main>
  <script>
    CKEDITOR.replace( 'instructionsInput' );
    CKEDITOR.add
    CKEDITOR.replace( 'ingredientsInput' );
    CKEDITOR.add
  </script>
</body>
</html>