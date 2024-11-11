<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Hashing Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default hashing driver that will be used by
    | Laravel. By default, we will use the bcrypt hashing driver, but you
    | may use Argon2 if you prefer.
    |
    */

    'driver' => env('HASHING_DRIVER', 'bcrypt'),

    /*
    |--------------------------------------------------------------------------
    | bcrypt Options
    |--------------------------------------------------------------------------
    |
    | Here you may define the options that will be used when hashing passwords
    | using the bcrypt algorithm. You may adjust these to suit your needs.
    |
    */

    'bcrypt' => [
        'rounds' => 10,
    ],

    /*
    |--------------------------------------------------------------------------
    | Argon2 Options
    |--------------------------------------------------------------------------
    |
    | Here you may define the options that will be used when hashing passwords
    | using the Argon2 algorithm. You may adjust these to suit your needs.
    |
    */

    'argon' => [
        'memory' => 1024,
        'time' => 2,
        'threads' => 2,
    ],

];
