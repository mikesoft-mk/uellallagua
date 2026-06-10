@extends('layouts.public')

@section('title', 'Comunicados')

@section('content')

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
            <a href="#" class="btn btn-primary">
                Ver todos los comunicados
            </a>
        </div>

    </div>
</section>

@endsection