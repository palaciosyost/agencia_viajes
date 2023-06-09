@extends('layouts.plantilla')

@section('titulo')
    <link rel="stylesheet" href="../../../resources/css/menu.css">
    <link rel="stylesheet" href="../../../resources/css/vista.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.2.1/hamburgers.min.css"
        integrity="sha512-+mlclc5Q/eHs49oIOCxnnENudJWuNqX5AogCiqRBgKnpoplPzETg2fkgBFVC6WYUVxYYljuxPNG8RE7yBy1K+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ $lugar->nombre }}</title>
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
                        <a class="nav-link active" aria-current="page" href="{{ route('menu.departamentos') }}">Destinos</a>
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
    <main class="contenedor">
        <article class="seccion">
            <div class="content-primary">
                <div class="img-seccion">
                    <img src="{{ asset($lugar->imagen) }}" alt="">
                </div>
                <div class="seccion-primary">
                    <div class="text-seccion">
                        <p>City {{ $lugar->departamento }} Tours</p>
                        <form action="{{ route('viajes.eliminar', $lugar->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Eliminar" />
                        </form>
                        <a href="{{ route('viajes.editar', $lugar->id) }}" class="btn btn-warning">Editar</a>

                        <h1>{{ $lugar->nombre }}</h1>
                        <span class="message orange">Anulacion gratis</span>
                        <span class="message green">Aun disponible</span>
                        <span class="message red">{{ $lugar->estado }}
                    </div>
                    <hr>
                    <div class="eslogan-seccion">
                        <p>"{{ $lugar->eslogan }}"</p>
                    </div>
                    <hr>
                    <div class="info-seccion">
                        <div class="info-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                <path
                                    d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                <path
                                    d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                            </svg>
                            <strong>Pago por persona:</strong>
                            <p>S/. {{ $lugar->monto }}.00</p>
                        </div>
                        <div class="info-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-clock" viewBox="0 0 16 16">
                                <path
                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                            <strong>Horario:</strong>
                            <p>{{ $lugar->horario }}</p>
                        </div>
                        <div class="info-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                            </svg>
                            <strong>Duracion:</strong>
                            <p>{{ $lugar->duracion }}</p>
                        </div>
                        <div class="info-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            <strong>Lugar de Encuentro:</strong>
                            <p>{{ $lugar->punto_encuentro }}</p>
                        </div>
                        <div class="info-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            </svg>
                            <strong>Que Llevar:</strong>
                            <p>{{ $lugar->llevar }}</p>
                        </div>
                        <div class="info-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z" />
                            </svg>
                            <strong>No Cuenta:</strong>
                            <p>{{ $lugar->no_cuenta }}</p>
                        </div>
                    </div>
                    <div class="descripcion" style="padding-left: 10px; margin-top: 30px">
                        <h3>Descripcion</h3>
                        <p>{{ $lugar->descripcion }}</p>
                    </div>
                </div>
            </div>
            <div class="content-secondary">
                <div class="card-primary">
                    <div class="fondo-card">
                        <h1>RESERVA YA!!</h1>
                        <p>S/. {{ $lugar->monto + 20 }}.00</p>
                        <h1>S/. {{ $lugar->monto }}.00</h1>
                    </div>
                    <p class="card-content">"{{ $lugar->eslogan }}"</p>
                </div>
                <div class="card-secondary">
                    <div class="fondo-card-secondary">
                        <p>¿Necesitas ayuda con la planificacion de tus viajes?..</p>
                    </div>
                    <hr class="div-content">
                    <p class="card-text">Solicita la Asesoria de un ejecutivo aqui!</p>
                </div>
                <div class="card-tercero">
                    <div class="fondo-card-tercero">
                        <p>¡Contactanos!</p>
                        <hr>
                    </div>
                    <hr class="div-content">
                    <div class="card-content">
                        <div class="card-text">
                            <small>correo electronico</small>
                            <p>reservas.example@gmail.com</p>
                        </div>
                        <div class="card-text">
                            <small>Whatsapp</small>
                            <p>+51 981054542</p>
                        </div>
                    </div>

                </div>
            </div>
        </article>

    </main>
    <div class="contenido-card">
        <div class="contendor-card">
            <div class="card-info">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" fill="currentColor"
                    class="bi bi-airplane-engines" viewBox="0 0 16 16">
                    <path
                        d="M8 0c-.787 0-1.292.592-1.572 1.151A4.347 4.347 0 0 0 6 3v3.691l-2 1V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.191l-1.17.585A1.5 1.5 0 0 0 0 10.618V12a.5.5 0 0 0 .582.493l1.631-.272.313.937a.5.5 0 0 0 .948 0l.405-1.214 2.21-.369.375 2.253-1.318 1.318A.5.5 0 0 0 5.5 16h5a.5.5 0 0 0 .354-.854l-1.318-1.318.375-2.253 2.21.369.405 1.214a.5.5 0 0 0 .948 0l.313-.937 1.63.272A.5.5 0 0 0 16 12v-1.382a1.5 1.5 0 0 0-.83-1.342L14 8.691V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v.191l-2-1V3c0-.568-.14-1.271-.428-1.849C9.292.591 8.787 0 8 0ZM7 3c0-.432.11-.979.322-1.401C7.542 1.159 7.787 1 8 1c.213 0 .458.158.678.599C8.889 2.02 9 2.569 9 3v4a.5.5 0 0 0 .276.447l5.448 2.724a.5.5 0 0 1 .276.447v.792l-5.418-.903a.5.5 0 0 0-.575.41l-.5 3a.5.5 0 0 0 .14.437l.646.646H6.707l.647-.646a.5.5 0 0 0 .14-.436l-.5-3a.5.5 0 0 0-.576-.411L1 11.41v-.792a.5.5 0 0 1 .276-.447l5.448-2.724A.5.5 0 0 0 7 7V3Z" />
                </svg>
                <small>Operadores profesionales</small>
                <p class="carrusel-texto">
                    Seleccionamos las mejores actividades de operadores locales profesionales, para asegurarnos de
                    que
                    tengas una experiencia segura, personalizada y excepcional.</p>
            </div>
            <div class="card-info">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" fill="currentColor" class="bi bi-piggy-bank"
                    viewBox="0 0 16 16">
                    <path
                        d="M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.138-1.496A6.613 6.613 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.602 7.602 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962z" />
                    <path fill-rule="evenodd"
                        d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595zM2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.558 6.558 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.649 4.649 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393zm12.621-.857a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199z" />
                </svg>
                <small>Mejor precio garantizado</small>
                <p class="carrusel-texto">
                    Te aseguramos que el precio que encontrarás aquí no será mayor al que encontrarás en cualquier
                    otro
                    lugar. La reserva es gratuita y contamos con políticas flexibles de anulación</p>
            </div>
            <div class="card-info">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" fill="currentColor" class="bi bi-clock-history"
                    viewBox="0 0 16 16">
                    <path
                        d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                    <path
                        d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                </svg>
                <small>Atención personalizada</small>
                <p class="carrusel-texto">
                    Nuestros expertos en viaje están disponibles 24/7 para ayudarte en el proceso de reserva,
                    resolver
                    tus dudas y aconsejarte en la planificación de tu viaje.
                </p>
            </div>
        </div>
        <footer id="contactos">
            <div class="contenedor-items">
                <div class="item-footer">
                    <ul>
                        <li class="prim">Empresa</li>
                        <li class="">Quienes somos</li>
                        <li class="">Alianza Latam</li>
                        <li class="">Blog</li>
                        <li class="">Trabajr con nosotros</li>
                    </ul>
                </div>
                <div class="item-footer">
                    <ul>
                        <li class="prim">Soporte</li>
                        <li class="">Preguntas frecuentes</li>
                        <li class="">Cambios o anulaciones</li>
                        <li class="">Sugerencias o reclamos</li>
                        <li class="">Politica de privacidad</li>
                    </ul>
                </div>
                <div class="item-footer">
                    <ul>
                        <li class="prim">Redes sociales</li>
                        <li class=""> <a href="https://www.facebook.com/yostin.pc.50">Faceboock</a> </li>
                        <li class=""><a href="https://wa.me/918592638">Whatsapp</a> </li>
                        <li class=""><a href="https://github.com/palaciosyost"> Git Hub</a></li>
                        <li class=""><a
                                href="https://palaciosyost.github.io/portafolio-personal.github.io/">Portafolio
                                Personal</a> </li>
                    </ul>
                </div>
            </div>
        </footer>
        <div class="copis">
            <p>Yostin Palacios Calle® Creador de esta pagina web City Tours como desarrollo educativo</p>
        </div>
    @endsection
