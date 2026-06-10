<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('theme/img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/styles-navbar.css') }}">
    
</head>

<body>
    @include('partials.public-top-header')

    @include('partials.public-navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.public-footer')
    @include('partials.public-scripts')

</body>
</html>