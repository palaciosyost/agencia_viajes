@extends('layouts.plantilla')

@section('titulo')
    <link rel="stylesheet" href="../resources/css/login.css">
    <title>Inicia Sesion</title>
@endsection

@section('cuerpo')
    <div class="fondo">
        <a href="{{ route('home') }}" class="boton-back"><img width="64" height="64"
                src="https://img.icons8.com/arcade/64/undo.png" alt="undo" /></a>
        <div class="contenedor">
            <div class="img-content">
                <img style="width: 100%;filter: contrast(130%); height: 100%; border-radius: 20px;"
                    src="../resources/img/img2.jpg" alt="">
            </div>
            <div class="formulario">
                <div class="titulo-formulario">
                    <h1>Inicia Sesion</h1>
                    <span>Conocer las maravillas nunca fue mas facil</span>
                </div>
                <form action="{{ route('login.select') }}" method="post">
                    @csrf
                    <div class="content">
                        <label for=""><span>Correo @error('usuario')
                                    <small>*{{ $message }}</small>
                                @enderror
                            </span> <br>
                            <input type="email" name="usuario" id="">
                        </label>
                    </div>

                    <div class="content">
                        <label for="pass"><span>Password @error('contraseña')
                                    <small>*{{ $message }}</small>
                                @enderror
                            </span> <br>
                            <input type="password" name="contraseña" id="password">
                            <div class="btn-pass">
                                <svg style="width: 19px;" id="btn-pass" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                            </div>
                        </label>

                    </div>

                    <span class="registro-form">no tienes cuenta? registrate <a href="#" class="enlace-registro">
                            aqui</a></span>
                    <input id="btn-ingresar" type="submit" value="Ingresar">

                </form>
            </div>
        </div>

    </div>

    <script src="../resources/js/imgAleatorio.js"></script>
    <script src="../resources/js/password.js"></script>
@endsection
