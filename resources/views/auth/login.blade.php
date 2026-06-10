@extends('layouts.auth')

@section('content')
<form class="user" method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Campo: Nombre de Usuario -->
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" style="border-top-left-radius: 10rem; border-bottom-left-radius: 10rem; border-right: none; border-color: #d8d8da; background-color: #E8F0FE;">
                    <i class="fas fa-user" style="color: #020e4a;"></i>
                </span>
            </div>
            <input id="user_name" type="text" class="form-control form-control-user @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="username" autofocus placeholder="Ingrese su nombre de usuario" style="border-top-right-radius: 10rem; border-bottom-right-radius: 10rem; ">
        </div>

        @error('user_name')
            <span class="invalid-feedback" role="alert" style="display: block;">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <!-- Campo: Contraseña con opción de Ver/Ocultar -->
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" style="border-top-left-radius: 10rem; border-bottom-left-radius: 10rem; border-right: none; border-color: #d8d8da; background-color: #E8F0FE;">
                    <i class="fas fa-lock" style="color: #020e4a;"></i>
                </span>
            </div>
            <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Ingrese su contraseña" style="border-top-right-radius: 0; border-bottom-right-radius: 0; border-left: none;">
            
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="togglePassword" style="border-top-right-radius: 10rem; border-bottom-right-radius: 10rem; border-left: none; border-color: #ddf3f4; padding-left: 15px; padding-right: 15px;">
                    <i class="fas fa-eye" id="eyeIcon"></i>
                </button>
            </div>

            @error('password')
                <span class="invalid-feedback" role="alert" style="display: block;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <!-- Campo: Recuérdame -->
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="custom-control-label" for="remember">
                {{ __('Recuérdame') }}
            </label>
        </div>
    </div>

    <!-- Botón: Ingresar -->
    <div class="form-group">
        <button type="submit" class="btn btn-info btn-user btn-block">
            {{ __('INGRESAR') }}
        </button>
    </div>
</form>
@endsection

{{-- Código de JavaScript inyectado de forma segura --}}
@push('scripts')
<script>
    $(document).ready(function () {
        $('#togglePassword').click(function () {
            const passwordInput = $('#password');
            const eyeIcon = $('#eyeIcon');
            
            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text');
                eyeIcon.removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                passwordInput.attr('type', 'password');
                eyeIcon.removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });
    });
</script>
@endpush
