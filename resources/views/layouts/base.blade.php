<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BOOTSTRAP BLOG</title>
  <link rel="stylesheet" href={{ URL::asset("dist/css/estiloGeneral.css")}}>
  <link rel="stylesheet" href={{ URL::asset("dist/css/tabler.min.css")}}>
  <link rel="stylesheet" href={{ URL::asset("dist/css/demo.min.css")}}>
  <link rel="stylesheet" href={{ URL::asset("iconfont/tabler-icons.min.css")}}>
</head>
<body>

  <header class="navbar navbar-expand-md navbar-dark d-print-none">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
              <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
              <a href=".">
                BootstrapBlog
              </a>
            </h1>
            

            <div class="collapse navbar-collapse" id="navbar-menu">
              <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center justify-content-end">
                <ul class="navbar-nav" id="menuBoot">
                  <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                    <a class="nav-link" href="/">
                      <span class="nav-link-title">
                        Home
                      </span>
                    </a>
                  </li>
                  <li class="nav-item {{ (request()->is('post')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('post') }}">
                      <span class="nav-link-title">
                        Post
                      </span>
                    </a>
                  </li>
                  <li class="nav-item {{ (request()->is('create_post')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('create_post') }}">
                      <span class="nav-link-title">
                        Crear Post
                      </span>
                    </a>
                  </li>
                  <li class="nav-item {{ (request()->is('view_post')) ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('view_post') }}">
                      <span class="nav-link-title">
                        Ver Post
                      </span>
                    </a>
                  </li>
                  <li class="nav-item {{ (request()->is('messages')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('messages') }}">
                      <span class="nav-link-title">
                        Mensajes
                      </span>
                      <span class="badge bg-red badge-item">2</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
        </div>
  </header>
    @yield('contenido')
    <script src={{ URL::asset("dist/js/jquery.min.js")}}></script>
    <script src={{ URL::asset("dist/js/tabler.min.js")}}></script>
    <script src={{ URL::asset("dist/js/demo.min.js")}}></script>
</body>
</html>