<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio de Sesion</title>

    <!-- Custom fonts for this template-->
    <link href="theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/theme/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #00c0ff 0%, #FFFFFF 100%);
            min-height: 100vh;
        }

        .card {
            box-shadow: 0 0 40px rgba(1, 3, 91, 0.6), 
                        0 0 20px rgba(69, 196, 246, 0.4),
                        0 8px 32px rgba(0, 0, 0, 0.2) !important;
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 0 50px rgba(4, 2, 56, 0.8), 
                        0 0 30px rgba(69, 196, 246, 0.6),
                        0 12px 40px rgba(0, 0, 0, 0.3) !important;
            transform: translateY(-5px);
        }
    </style>

</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row g-0 align-items-stretch">
                            <!-- Columna del Logo (Corregida y Centrada) -->
<div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center overflow-hidden" style="background: linear-gradient(135deg, #45c4f6 0%, #87CEEB 100%);">
                                <img src="{{ asset('theme/img/logo-2.png') }}" alt="Imagen de acceso" class="img-fluid" style="max-width: 320px; max-height: 420px; object-fit: contain;">
                            </div>
                            <!-- Columna del Formulario -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        
                                        <h1 class="h4 text-gray-900 mb-0" style="font-family: 'Helvetica Neue', Arial">Bienvenido al Sistema del</h1>
                                        <h1 class="mb-4" style="font-family: 'Helvetica Neue', Arial, sans-serif; font-size: 2.5rem; color: #00279d; font-weight: 700;">Colegio Llallagua</h1>
                                    </div>
                                    <!-- Aquí va el contenido del formulario de inicio de sesión -->

                                    @yield('content')
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->

    <script src="{{ asset('theme/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('theme/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('theme/js/sb-admin-2.min.js') }};"></script>

     @stack('scripts') 

</body>

</html>