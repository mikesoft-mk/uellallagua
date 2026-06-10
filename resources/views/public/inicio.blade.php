@extends('layouts.public')

@section('title', 'Inicio')

@section('content')

<header class="bg-light">

    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicadores -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="{{ asset('theme/img/img1.jpg') }}" class="d-block w-100 banner-img" alt="Banner 1">
             <div class="carousel-caption">
                <div class="row gx-5 justify-content-center">
                   
                    <div class="col-lg-6">
                        
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">UNIDAD EDUCATIVA LLALLAGUA</h1>
                            <p class=" text-white mb-4">Bienvenidos a la web oficial del Colegio Llallagua</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Comunicados</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">Calificaciones</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('theme/img/banner1.png') }}" class="d-block w-100 banner-img" alt="Banner 2">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('theme/img/banner1.png') }}" class="d-block w-100 banner-img" alt="Banner 3">

            <div class="carousel-caption">
                <h1>Educación de Calidad</h1>
                <p>Infraestructura y docentes altamente capacitados.</p>
                <a href="#nosotros" class="btn btn-primary">
                    Conócenos
                </a>
            </div>
        </div>

    </div>

    <!-- Controles -->
    <button class="carousel-control-prev" type="button"
            data-bs-target="#bannerCarousel"
            data-bs-slide="prev">

        <span class="carousel-control-prev-icon"></span>

    </button>

    <button class="carousel-control-next" type="button"
            data-bs-target="#bannerCarousel"
            data-bs-slide="next">

        <span class="carousel-control-next-icon"></span>

    </button>

</div>
     
        </header>

        <section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Misión y Visión</h2>
            <p class="text-muted">
                Comprometidos con la formación integral de nuestros estudiantes.
            </p>
        </div>

        <div class="row g-4">

            <!-- Misión -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-lg">
                    <div class="card-body text-center p-5">

                        <div class="mb-4">
                            <i class="fas fa-bullseye fs-1 text-primary"></i>
                        </div>

                        <h3 class="fw-bold text-primary">
                            Misión
                        </h3>

                        <p class="mt-3 text-muted">
                            Brindar una educación integral de calidad,
                            promoviendo valores, conocimientos y habilidades
                            que permitan a los estudiantes desarrollarse
                            académica, social y humanamente.
                        </p>

                    </div>
                </div>
            </div>

            <!-- Visión -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-lg">
                    <div class="card-body text-center p-5">

                        <div class="mb-4">
                            <i class="fas fa-eye fs-1 text-info"></i>
                        </div>

                        <h3 class="fw-bold text-info">
                            Visión
                        </h3>

                        <p class="mt-3 text-muted">
                            Ser una institución educativa reconocida por
                            su excelencia académica, innovación pedagógica
                            y formación de ciudadanos comprometidos con el
                            desarrollo de la sociedad.
                        </p>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Comunicados</h2>
            <p class="text-muted">
                Mantente informado sobre las últimas novedades y anuncios.
            </p>
        </div>

        <div class="row g-4">

            <!-- Comunicado 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">

                    <div class="card-body">

                        <span class="badge bg-danger mb-3">
                            Importante
                        </span>

                        <h5 class="card-title">
                            Reunión de Padres de Familia
                        </h5>

                        <p class="card-text text-muted">
                            Se comunica a todos los padres de familia que la reunión
                            general se realizará el próximo viernes a horas 18:00.
                        </p>

                    </div>

                    <div class="card-footer bg-white border-0">
                        <small class="text-muted">
                            10 de junio de 2026
                        </small>
                    </div>

                </div>
            </div>

            <!-- Comunicado 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">

                    <div class="card-body">

                        <span class="badge bg-primary mb-3">
                            Académico
                        </span>

                        <h5 class="card-title">
                            Inicio de Evaluaciones
                        </h5>

                        <p class="card-text text-muted">
                            Las evaluaciones correspondientes al segundo trimestre
                            iniciarán el próximo lunes.
                        </p>

                    </div>

                    <div class="card-footer bg-white border-0">
                        <small class="text-muted">
                            08 de junio de 2026
                        </small>
                    </div>

                </div>
            </div>

            <!-- Comunicado 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">

                    <div class="card-body">

                        <span class="badge bg-success mb-3">
                            Evento
                        </span>

                        <h5 class="card-title">
                            Feria Científica
                        </h5>

                        <p class="card-text text-muted">
                            Invitamos a toda la comunidad educativa a participar
                            en la feria científica anual.
                        </p>

                    </div>

                    <div class="card-footer bg-white border-0">
                        <small class="text-muted">
                            05 de junio de 2026
                        </small>
                    </div>

                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="{{ route('comunicados') }}" class="btn btn-primary">
                Ver todos los comunicados
            </a>
        </div>

    </div>
</section>

@endsection
