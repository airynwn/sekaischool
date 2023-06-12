@if (isset($post))
{{-- Alpine --}}
<div class="row">
    <div class="col" x-data="{ logo: '{{ asset($grupo->logo) }}' }">
        <img :src="logo" :alt="'Logo ' + '{{ $grupo->nombre }}'" class="img-fluid" width="150">
    </div>
  </div>
  <div class="row">
  <!--  -->
    <div class="col-12 col-md-6">
      <img src="{{ asset($grupo->imagen) }}" alt="Imagen {{ $grupo->nombre }}" class="img-fluid">
    </div>
  <!--  -->
    <div class="col order-last order-md-first order-lg-first align-self-end align-self-md-center">
    <!--  -->
      <div class="panel espacio" data-color="border-grupo-{{ $grupo->id }}">
        <span class="titulo" data-color="bg-grupo-{{ $grupo->id }}">Miembros</span>
        <div class="panel-content">
          @foreach ($grupo->personajes()->get() as $pj)
          <span data-color="{{ strtolower(explode(' ', $pj->nombre)[0]) }}">{{ $pj->nombre }}</span>
          @endforeach
        </div>
      </div>
    </div>
  <!--  -->
    <div class="col align-self-center">
      <div class="panel espacio" data-color="border-grupo-{{ $grupo->id }}">
        <span class="titulo" data-color="bg-grupo-{{ $grupo->id }}">Virtual Singers</span>
        <div class="panel-content">
          <span data-color="miku">Miku Hatsune</span>
          <span data-color="rin">Rin Kagamine</span>
          <span data-color="len">Len Kagamine</span>
          <span data-color="luka">Luka Megurine</span>
          <span data-color="meiko">MEIKO</span>
          <span data-color="kaito">KAITO</span>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="panel espacio" data-color="border-grupo-{{ $grupo->id }}">
        <h2 data-color="grupo-{{ $grupo->id }}">Historia</h2>
        <div class="panel-content">
          <p class="justify">{{ $grupo->historia }}</p>
      </div>
    </div>
  </div>
  </div>
  <div
  x-data="{ personajes: {{ $grupo->personajes()->get()->toJson() }} }">
    <div class="row row-cols-2 row-cols-md-4 espacio">
      <template x-for="pj in personajes">
        <div class="col center">
          <figure>
            <picture>
              <img :src="pj.sticker" :alt="pj.nombre + ' Sticker'" class="img-fluid">
            </picture>
          </figure>
        </div>
      </template>
    </div>
  </div>
@else
<div class="row my-5">
    <div class="col">
        <h2>Elige un grupo para mostrar información acerca de él</h2>
    </div>
</div>
<div class="row">
    <div class="col">
        <video autoplay="" loop="" muted="" class="ratio ratio-16x9" id="bg-video">
            <source src="{{ asset('img/journey.mp4') }}" type="video/mp4">
        </video>
    </div>
</div>
@endif
