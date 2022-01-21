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
    @yield('contenido')
    <script src={{ URL::asset("dist/js/jquery.min.js")}}></script>
    <script src={{ URL::asset("dist/js/tabler.min.js")}}></script>
    <script src={{ URL::asset("dist/js/demo.min.js")}}></script>
</body>
</html>