<div class="container justify-content-center d-flex modal-personajes-content" id="modal-personajes">
    <div class="row">
        <div class="col caja">
            <div class="flexbox-cerrar">
                <button type="button" class="boton-cerrar" onclick="location.href='#'">
                    &times;
                </button>
            </div>
            <div class="container caja-content">
                <div class="row row-cols-3 row-cols-md-5 row-cols-lg-6 g-3">
                    @foreach ($personajes as $pj)
                        <div class="col">
                            <picture>
                                <img src="{{ $pj->chibi }}" alt="Chibi {{ $pj->nombre }}" class="img-fluid">
                            </picture>
                        </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
  </div>
