<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Define which assets will be available through the asset manager
    |--------------------------------------------------------------------------
    | These assets are registered on the asset manager
    */
    'all-assets' => [
        'admin.serials.css' => ['module' => 'serials:admin/css/serials.css'],
        'admin.serials.js' => ['module' => 'serials:admin/js/serials.js'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Define which default assets will always be included in your pages
    | through the asset pipeline
    |--------------------------------------------------------------------------
    */
    'required-assets' => [],
];
