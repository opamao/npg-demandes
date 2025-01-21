<?php

return [

    'connections' => [
        'default' => [
            'ashost'    => env('SAP_HOST', '10.10.2.40'),
            'sysnr'     => env('SAP_SYSTEM', 'DN0'),
            'lang'      => env('SAP_LANGUAGE', 'EN'),
            'client'    => env('SAP_CLIENT', '100'),
            'user'      => env('SAP_USERNAME', 'Gimad'),
            'passwd'    => env('SAP_PASSWORD', '2024@basis'),
        ]
    ],

];
