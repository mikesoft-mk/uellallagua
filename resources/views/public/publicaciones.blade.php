@extends('layouts.public')

@section('title', 'Publicaciones')

@section('content')

<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Publicaciones</h2>
            <p class="text-muted">
                Explora nuestras publicaciones y mantente al día con las últimas noticias y eventos.
            </p>
        </div>

        <div class="row g-4">

            <!-- Publicación 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">

                    <img src="{{ asset('theme/img/img12.jpg') }}" class="card-img-top" alt="Publicación 1">

                    <div class="card-body">

                        <h5 class="card-title">
                            Feria de Ciencias 2026
                        </h5>

                        <p class="card-text text-muted">
                            El pasado mes de mayo se llevó a cabo la Feria de Ciencias, donde nuestros estudiantes presentaron proyectos innovadores y creativos.
                        </p>

                    </div>

                    <div class="card-footer bg-white border-0">
                        <small class="text-muted">
                            05 de junio de 2026
                        </small>
                    </div>

                </div>
            </div>
</section>

@endsection