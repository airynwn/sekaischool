{{-- <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <h4>Panel de administración</h4>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <span class="ms-1 d-none d-sm-inline">Recursos</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{ route('admin.grupos.index')}}" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">Grupos</span>
                                </a>
                            </li>
                            <li class="w-100">
                                <a href="{{ route('admin.cartas.index')}}" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">Cartas</span>
                                </a>
                            </li>
                            <li class="w-100">
                                <a href="{{ route('admin.personajes.index')}}" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">Personajes</span>
                                </a>
                            </li>
                            <li class="w-100">
                                <a href="{{ route('admin.users.index')}}" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">Users</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col py-3">
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @yield('content')
        </div>
    </div>
</div> --}}
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
