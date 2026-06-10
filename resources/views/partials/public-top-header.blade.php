<div class="bg-white text-black py-2">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6 text-center text-md-start">

                <small>
                    <i class="fas fa-phone me-2"></i>
                    +591 12345678

                    <span class="mx-3">|</span>

                    <i class="fas fa-envelope me-2"></i>
                    info@empresa.com
                </small>

            </div>

            <div class="col-md-6 text-center text-md-end">

                @auth

                    <a href="{{ route('home') }}"
                       class="btn btn-sm btn-outline-light">
                        Dashboard
                    </a>

                @else

                    <a href="{{ route('login') }}"
                       class="btn btn-sm btn-light me-2">
                        Iniciar Sesión
                    </a>
                     
                

                @endauth

            </div>

        </div>

    </div>
</div>