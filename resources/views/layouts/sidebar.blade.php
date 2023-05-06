<div class="container-fluid">
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
</div>
