<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>Hola mundo</h1>
</body>
</html> -->
@extends('layouts.base')
@section('contenido')
    <div class="present">
        <div class="container h-100 d-flex justify-content-center align-items-center">
            <h1>Herramientas, tips y más relacionado a Bootstrap</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="nosotros">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ut debitis ullam reprehenderit corporis numquam magnam amet animi molestias corrupti placeat odit omnis, consequuntur modi alias praesentium quaerat beatae ad!
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between blog-section">
                <h2>Blog</h2>
                <a class="more-content" href="#">Ver más</a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item d-flex flex-column">
                    <div class="img-post">
                        <img src="https://contenthub-static.grammarly.com/blog/wp-content/uploads/2017/11/how-to-write-a-blog-post.jpeg" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="">Leer</a>
                        </div>
                    </div>
                    <h3 class="mt-2">Diseños y estructura en Bootstrap</h3>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Miguel JS</a>
                            <div class="text-muted">Hace 3 dias</div>
                        </div>
                        <div class="ms-3">
                            <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item d-flex flex-column">
                    <div class="img-post">
                        <img src="https://www.shoutmeloud.com/wp-content/uploads/2020/12/Your-First-Blog-Post-1024x576.jpg" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="">Leer</a>
                        </div>
                    </div>
                    <h3 class="mt-2">Tu primer post en BootstrapBlog</h3>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Wilberth LP</a>
                            <div class="text-muted">Hace 3 dias</div>
                        </div>
                        <div class="ms-3">
                            <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item">
                    <div class="img-post">
                        <img src="https://www.ryrob.com/wp-content/uploads/2021/07/10-Blog-Post-Templates-to-Download-Free-SEO-Driven-Template-768x432.jpg" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="">Leer</a>
                        </div>
                    </div>
                    <h3 class="mt-2">10 templates de Bootstrap para crear tu propio blog</h3>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Wilberth LP</a>
                            <div class="text-muted">Hace 3 dias</div>
                        </div>
                        <div class="ms-3">
                            <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                        </div>
                         
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item">
                    <div class="img-post">
                        <img src="https://www.baulphp.com/wp-content/uploads/2017/11/tabla-responsiva-bootstrap-para-lista-de-datos.jpg" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="">Leer</a>
                        </div>
                    </div>
                    <h3 class="mt-2">Tabla responsiva Bootstrap</h3>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Miguel JS</a>
                            <div class="text-muted">Hace 3 dias</div>
                        </div>
                        <div class="ms-3">
                            <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item">
                    <div class="img-post">
                        <img src="https://mdbcdn.b-cdn.net/wp-content/uploads/2015/08/cards.jpg" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="">Leer</a>
                        </div>
                    </div>
                    <h3 class="mt-2">Cards en Bootstrap</h3>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Miguel JS</a>
                            <div class="text-muted">Hace 3 dias</div>
                        </div>
                        <div class="ms-3">
                            <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer-public mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-between footer-title">
                    <h3>Sobre Bootstrap</h3>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="#">
                        <div class="other-post d-flex">
                            <img class="me-3" src="https://templatetoaster.com/tutorials/wp-content/uploads/2017/09/Bootstrap-3-An-Ever-Lasting-Legacy-for-Responsive-Designs-Blog.jpg" alt="">
                            <div class="other-post-data d-flex flex-column">
                                <h4>Bootstrap 3</h4>
                                <p>29/01/2022</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="#">
                        <div class="other-post d-flex">
                            <img class="me-3" src="https://miro.medium.com/max/1200/1*lduEjOI-EQltoRbmKSICeA.jpeg" alt="">
                            <div class="other-post-data d-flex flex-column">
                                <h4>Bootstrap 4</h4>
                                <p>29/01/2022</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="#">
                        <div class="other-post d-flex">
                            <img class="me-3" src="https://miro.medium.com/max/1400/1*wBc4B74fBCoU-yi_3-ZGLQ.png" alt="">
                            <div class="other-post-data d-flex flex-column">
                                <h4>Bootstrap 5</h4>
                                <p>29/01/2022</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 d-flex align-items-center justify-content-end mt-3 bootstrap-info">
                    <div class="d-flex align-items-center pt-4 pb-4">
                        <img class="me-3" src="https://miro.medium.com/max/1024/1*9HanDsRU11ZMsgDGJwN96w.png" alt="">
                        <p>Bootstrap es una biblioteca multiplataforma o conjunto de herramientas de código abierto para diseño de sitios y aplicaciones web.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection