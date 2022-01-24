<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BOOTSTRAP BLOG</title>
  <link rel="stylesheet" href={{ URL::asset("dist/css/tabler.min.css")}}>
  <link rel="stylesheet" href={{ URL::asset("dist/css/demo.min.css")}}>
  <link rel="stylesheet" href={{ URL::asset("iconfont/tabler-icons.min.css")}}>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Bootstrap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/post">Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/create_post">Craer post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/messages">Mensajes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/view_post">Ver post</a>
        </li>
      </ul>
    </div>
  </nav>
    @yield('contenido')
    <script src={{ URL::asset("dist/js/jquery.min.js")}}></script>
    <script src={{ URL::asset("dist/js/tabler.min.js")}}></script>
    <script src={{ URL::asset("dist/js/demo.min.js")}}></script>
</body>
</html>