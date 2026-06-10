<!-- Responsive navbar-->

        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
             
                <div class="container px-5">
                    <a class="navbar-brand" href="{{ route('inicio') }}">
                    <img src="{{ asset('theme/img/logo.png') }}" alt="Logo" class="logo-navbar">
                    </a>
                    <navbar">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-list">
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }} text-white" aria-current="page" href="{{ route('inicio') }}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('comunicados') ? 'active' : '' }} text-white" href="{{ route('comunicados') }}">Comunicados</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('publicaciones') ? 'active' : '' }} text-white" href="{{ route('publicaciones') }}">Publicaciones</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('calificaciones') ? 'active' : '' }} text-white" href="{{ route('calificaciones') }}">Calificaciones</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        