<?php

return [
    'required' => 'El campo :attribute es requerido.',
    'email' => 'El campo :attribute debe ser un correo válido.',
    'unique' => 'El valor del campo :attribute ya está en uso.',
    'min' => [
        'string' => 'El campo :attribute debe tener al menos :min caracteres.',
        'numeric' => 'El campo :attribute debe ser al menos :min.',
    ],
    'confirmed' => 'La confirmación del campo :attribute no coincide.',
    'string' => 'El campo :attribute debe ser texto.',

    'custom' => [
        'user_name' => [
            'required' => 'El nombre de usuario es requerido.',
        ],
        'password' => [
            'required' => 'La contraseña es requerida.',
        ],
    ],

    'attributes' => [
        'user_name' => 'nombre de usuario',
        'password' => 'contraseña',
        'email' => 'correo electrónico',
    ],

    'failed' => 'Las credenciales no coinciden con nuestros registros.',
    'password' => 'La contraseña proporcionada es incorrecta.',
    'throttle' => 'Demasiados intentos de acceso. Por favor intente más tarde.',
];
