<?php

return [

    'driver' => env('MAIL_DRIVER', 'smtp'),


    'host' => env('MAIL_HOST', 'mail.dreamhost.com'),


    'port' => env('MAIL_PORT', 587),



    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'contacto@accesoriosparatuauto.com'),
        'name' => env('MAIL_FROM_NAME', 'Contacto Accesorios'),
    ],





    'username' => env('MAIL_USERNAME', 'contacto@accesoriosparatuauto.com'),

    'password' => env('MAIL_PASSWORD', 'CaJmACC12*'),



    'sendmail' => '/usr/sbin/sendmail -bs',



    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],



    'log_channel' => env('MAIL_LOG_CHANNEL'),
];