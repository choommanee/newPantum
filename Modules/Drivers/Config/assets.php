<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Define which assets will be available through the asset manager
    |--------------------------------------------------------------------------
    | These assets are registered on the asset manager
    */
    'all-assets' => [
        'admin.drivers.css' => ['module' => 'drivers:admin/css/drivers.css'],
        'admin.drivers.js' => ['module' => 'drivers:admin/js/drivers.js'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Define which default assets will always be included in your pages
    | through the asset pipeline
    |--------------------------------------------------------------------------
    */
    'required-assets' => [],
];
