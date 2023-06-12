<div class="container-fluid">
    <div class="row flex-nowrap flex-column flex-lg-row">
            <div class="col-3 d-flex flex-lg-column p-3 sidebar sidebar-width">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                  <h4>Portal de administración</h4>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                  <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link text-white
                    {{ Route::current()->getName() === 'admin.users.index' ? 'ruta-actual' : '' }}">
                      Users
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('admin.grupos.index') }}" class="nav-link text-white
                    {{ Route::current()->getName() === 'admin.grupos.index' ? 'ruta-actual' : '' }}">
                      Grupos
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('admin.personajes.index') }}" class="nav-link text-white
                    {{ Route::current()->getName() === 'admin.personajes.index' ? 'ruta-actual' : '' }}">
                      Personajes
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('admin.cartas.index') }}" class="nav-link text-white
                    {{ Route::current()->getName() === 'admin.cartas.index' ? 'ruta-actual' : '' }}">
                      Cartas
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('admin.trivias.index') }}" class="nav-link text-white
                    {{ Route::current()->getName() === 'admin.trivias.index' ? 'ruta-actual' : '' }}">
                      Trivias
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('admin.preguntas.index') }}" class="nav-link text-white
                    {{ Route::current()->getName() === 'admin.preguntas.index' ? 'ruta-actual' : '' }}">
                      Preguntas
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('admin.respuestas.index') }}" class="nav-link text-white
                    {{ Route::current()->getName() === 'admin.respuestas.index' ? 'ruta-actual' : '' }}">
                      Respuestas
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('admin.relaciones.index') }}" class="nav-link text-white
                    {{ Route::current()->getName() === 'admin.relaciones.index' ? 'ruta-actual' : '' }}">
                      Relaciones
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('admin.canciones.index') }}" class="nav-link text-white
                    {{ Route::current()->getName() === 'admin.canciones.index' ? 'ruta-actual' : '' }}">
                      Canciones
                    </a>
                  </li>
                </ul>
            </div>
            <div class="col py-3 overflow-y-scroll" id="tabla-container">
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
