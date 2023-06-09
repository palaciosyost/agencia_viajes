@extends('layouts.plantilla')

@section('titulo')
    <link rel="stylesheet" href="../../resources/css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.2.1/hamburgers.min.css"
        integrity="sha512-+mlclc5Q/eHs49oIOCxnnENudJWuNqX5AogCiqRBgKnpoplPzETg2fkgBFVC6WYUVxYYljuxPNG8RE7yBy1K+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Crear Departamentos</title>
@endsection


@section('cuerpo')
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">City Tours</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('menu.departamentos') }}">Destinos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('menu') }}">Viajes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Opciones Crear
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('menu.crearD') }}">Crear Destinos</a></li>
                            <li><a class="dropdown-item" href="{{ route('menu.crearV') }}">Crear Viajes</a></li>
                            <li><a class="dropdown-item" href="{{ route('menu') }}">Ver Viajes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('login.index') }}">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="w-75 mt-5">
            <div class="titulo-form">
                <h1>Crea un nuevo Destino</h1>
            </div>
            <hr>
            <form action="{{ route('menu.crear-confirm') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label fonw">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" name="nombre" class="form-control" placeholder="nombre" value="{{old('nombre')}}">
                        @error('nombre')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Descripcion</label>
                    <div class="col-sm-10">
                        <textarea name="descripcion"rows="5" class="form-control">{{old('descripcion')}}</textarea>
                        @error('descripcion')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Imagen</label>
                    <input class="form-control" name="imagen" type="file" id="formFileMultiple" multiple>
                    @error('imagen')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Estado</label>
                    <div class="col-sm-10">
                        <input type="text" name="estado" class="form-control" accept="image/*" placeholder="Estado" value="{{old('estado')}}">
                        @error('estado')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <input type="submit" value="Ingresar" class="btn btn-warning ">
            </form>

        </div>
    </div>
@endsection
