@extends('layouts.plantilla')

@section('titulo')
    <link rel="stylesheet" href="../../resources/css/vista.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.2.1/hamburgers.min.css"
        integrity="sha512-+mlclc5Q/eHs49oIOCxnnENudJWuNqX5AogCiqRBgKnpoplPzETg2fkgBFVC6WYUVxYYljuxPNG8RE7yBy1K+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ $departamento }} viajes</title>
@endsection

@section('cuerpo')
    <div class="eslogan">
        <p> <img src="../../resources/img/avion.png" alt="">Flexibilidad de Programacion y Anulaciones en todo
            nuestro tours y programas</p>
    </div>
    <main class="contenedor-viajes">
        <section class="seccion-viajes">
            <article class="contenedor-cards">
                <div class="content-secondary">
                    <div class="card-primary">
                        <div class="fondo-card">
                            <h1>RESERVA YA!!</h1>
                            <p>desde donde sea</p>
                            <h5>Ahora desde tu casa</h5>
                        </div>
                        <p class="card-content">"Conocer el mundo Peruano y sus maravillas tan cerca como hacer un click"
                        </p>
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
            <article class="contenedor-cards-viajes">
                @foreach ($departamentos as $item)
                    <div class="card">
                        <div class="img-card">
                            <div class="bg"></div>
                            <img src="{{ asset($item->imagen) }}" alt="">
                            <div class="text-img">
                                <h4>{{ $item->nombre }}</h4>
                                <span class="estado">{{ $item->estado }}</span>
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-alarm" viewBox="0 0 16 16">
                                        <path
                                            d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                                        <path
                                            d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                                    </svg> {{ $item->horario }}</p>
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-check-all" viewBox="0 0 16 16">
                                        <path
                                            d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                    </svg> Anulacion gratis</p>
                                <a href="{{ route('info-viajes', $item->id) }}">
                                    ver mas
                                </a>
                                <h2>S/.{{ $item->monto }}.00</h2>
                            </div>

                        </div>
                        <div class="text-card">
                            <h3>{{ $item->nombre }}</h3>
                            <div>
                                <span class="message orange">Anulacion
                                    gratis</span>
                                <span class="message green">Aun disponible</span> <span
                                    class="message yellow">{{ $item->estado }}
                                </span>
                            </div>
                            <div>
                                <p>{{ $item->eslogan }} <a href="{{ route('info-viajes', $item->id) }}">ver mas</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </article>
        </section>
    </main>
    <div class="contenido-card">
        <div class="contendor-card">
            <div class="card-info">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" fill="currentColor" class="bi bi-airplane-engines"
                    viewBox="0 0 16 16">
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
                    . La reserva es gratuita y contamos con políticas flexibles de anulación</p>
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
        <script src="../resources/js/navbar.js"></script>
    @endsection
