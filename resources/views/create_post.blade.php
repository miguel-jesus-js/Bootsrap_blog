@extends('layouts.base')
@section('contenido')
    <br>
    <br>
    <div class="container">
        <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
            <li class="breadcrumb-item"><a class="text-primary" href="/">Home</a></li>
            <li class="breadcrumb-item"><a class="text-primary" href="/post">Bootstrap</a></li>
            <li class="breadcrumb-item"><a class="text-primary" href="/table">Table</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Crear post</a></li>
        </ol>
        <br>
        <form action="" class="shadow-sm rounded p-4 bg-white">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label required">Titulo</label>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                          <i class="ti ti-signature"></i>
                        </span>
                        <input type="text" value="" class="form-control" placeholder="Titulo">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label required">Descripción</label>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                          <i class="ti ti-writing-sign"></i>
                        </span>
                        <input type="text" value="" class="form-control" placeholder="Descripción">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label required">Imagen</label>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                          <i class="ti ti-photo"></i>
                        </span>
                        <input type="file" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label required">Código</label>
                    <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Código"></textarea>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Crear post</button>
        </form>
    </div>
    
@endsection