@extends('layouts.base')
@section('contenido')
    <br>
    <br>
    <div class="container">
        <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
            <li class="breadcrumb-item"><a class="text-primary" href="/">Home</a></li>
            <li class="breadcrumb-item"><a class="text-primary" href="/post">Bootstrap</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Mensajes</a></li>
        </ol>
        <br>
        <div class="card">
            <ul class="nav nav-tabs nav-tabs-alt" data-bs-toggle="tabs">
              <li class="nav-item">
                <a href="#tabs-home-ex6" class="nav-link active" data-bs-toggle="tab">
                    <i class="ti ti-messages icon me-2"></i>
                    Chats</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-profile-ex6" class="nav-link" data-bs-toggle="tab">
                    <i class="ti ti-star icon me-2"></i>
                  Favoritos</a>
              </li>
            </ul>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-ex6">
                  <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-ex6">
                  <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
              </div>
            </div>
        </div>
    </div>
    
@endsection