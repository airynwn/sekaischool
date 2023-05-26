@if (isset($post))
    <div class="row">
    <!-- ! Por defecto último (para que salga en móvil), en el resto primero -->
    <div class="col-lg-4 col-md-auto order-last order-lg-first">
        <div class="trivia-nav" data-color="border-{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
        <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">Trivia</h2>
        <div class="caja">
            <div class="caja-content">
                <ul>
                    {{-- <li> por cada trivia (TODO) --}}
                    <li>{{ $personaje->nombre }}</li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <picture>
                <img src="{{ asset($personaje->stamp) }}" alt="{{ explode(' ', $personaje->nombre)[0] }} Stamp" width="148" height="128">
            </picture>
        </div>
        <h2>Relaciones</h2>
        <div class="caja">
            <div class="caja-content">
            <div class="container-fluid">
                {{-- Relación seleccionada --}}
                <div class="row centrar-fila">
                    <div class="col-4">
                        <picture>
                            <img src="img/ena-circle.png" alt="Ena Circle" class="img-fluid">
                        </picture>
                    </div>
                    <div class="col-auto">
                        <div class="caja-content">
                            <span>
                                <span class="ena">Ena</span>: A Mizuki le gusta molestar a Ena
                                y la sigue en redes sociales. La mayoría
                                de las conversaciones de Nightcord son
                                bromas entre Mizuki y Ena.
                            </span>
                        </div>
                    </div>
                </div>
                {{-- Relaciones --}}
                <!-- g-3 (gutter-3) da separación horizontal y vertical entre columnas según pantalla -->
                <div class="row row-cols-4 row-cols-sm-6 row-cols-md-6 row-cols-lg-5 g-1 centrar-fila">
                    <div class="col">
                        <picture>
                            <img src="img/kanade-circle.png" alt="Kanade Circle" class="img-fluid">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="col">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                        {{ $personaje->nombre }}
                    </h2>
                    <figure class="caja-icons">
                        <picture>
                            <source media="(max-width: 576px)" srcset="{{ asset($personaje->chibi) }}">
                            <img src="{{ asset($personaje->imagen) }}"
                            alt="{{ $personaje->nombre }}"
                            class="img-fluid" width="318" height="670">
                        </picture>
                    </figure>
                </div>
                <!--  -->
                <div class="col">
                    <div class="espacio">
                        <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                            Datos básicos
                        </h2>
                        <div class="panel" data-color="border-{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                            {{-- TODO Preguntas y Respuestas --}}
                            <div class="caja-content">
                                <span><strong data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">Género</strong>: Desconocido</span>
                                <span><strong>Grupo</strong>: 25-ji, Nightcord de.</span>
                                <span><strong>Cumpleaños</strong>: 27 de Agosto</span>
                                <span><strong>Colegio</strong>: Kamiyama High School (1-A)</span>
                                <span><strong>Hobbies</strong>: Creación de vídeos</span>
                                <span><strong>Especialidad</strong>: Rediseñar ropa</span>
                                <span><strong>Comida favorita</strong>: Arroz al curry y patatas fritas</span>
                                <span><strong>Comida menos favorita</strong>: Setas</span>
                                <span><strong>No le gusta</strong>: La comida muy caliente</span>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="espacio">
                        <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                            Historia
                        </h2>
                        <div class="panel" data-color="border-{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                            <div class="caja-content">
                                <p>
                                    {{ $personaje->historia }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row centrar-fila">
                <div class="col-auto">
                    <div class="espacio">
                        <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                            Personalidad
                        </h2>
                        <div class="caja-content">
                            <p>
                                {{ $personaje->personalidad }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="caja cuadrado">
                        <picture>
                            <img src="{{ asset($personaje->comic) }}"
                            alt="Mizuki 1koma" class="img-fluid" style="max-width: 404px">
                        </picture>
                    </div>
                    <div class="tabs">
                        <div class="tab">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="tab">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="row">
    <div class="col">
        <h2>Elige un personaje para mostrar su información</h2>
    </div>
</div>
@endif
