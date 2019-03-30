<?php

Route::get('serials', [
    'as' => 'admin.serials.index',
    'uses' => 'SerialController@index',
    'middleware' => 'can:admin.serials.index',
]);

Route::get('serials/create', [
    'as' => 'admin.serials.create',
    'uses' => 'SerialController@create',
    'middleware' => 'can:admin.serials.create',
]);

Route::post('serials', [
    'as' => 'admin.serials.store',
    'uses' => 'SerialController@store',
    'middleware' => 'can:admin.serials.create',
]);

Route::get('serials/{id}/edit', [
    'as' => 'admin.serials.edit',
    'uses' => 'SerialController@edit',
    'middleware' => 'can:admin.serials.edit',
]);

Route::put('serials/{id}', [
    'as' => 'admin.serials.update',
    'uses' => 'SerialController@update',
    'middleware' => 'can:admin.serials.edit',
]);

Route::delete('serials/{ids?}', [
    'as' => 'admin.serials.destroy',
    'uses' => 'SerialController@destroy',
    'middleware' => 'can:admin.serials.destroy',
]);

Route::get('serial_translations', [
    'as' => 'admin.serial_translations.index',
    'uses' => 'Serial_translationsController@index',
    'middleware' => 'can:admin.serial_translations.index',
]);

Route::get('serial_translations/create', [
    'as' => 'admin.serial_translations.create',
    'uses' => 'Serial_translationsController@create',
    'middleware' => 'can:admin.serial_translations.create',
]);

Route::post('serial_translations', [
    'as' => 'admin.serial_translations.store',
    'uses' => 'Serial_translationsController@store',
    'middleware' => 'can:admin.serial_translations.create',
]);

Route::get('serial_translations/{id}/edit', [
    'as' => 'admin.serial_translations.edit',
    'uses' => 'Serial_translationsController@edit',
    'middleware' => 'can:admin.serial_translations.edit',
]);

Route::put('serial_translations/{id}', [
    'as' => 'admin.serial_translations.update',
    'uses' => 'Serial_translationsController@update',
    'middleware' => 'can:admin.serial_translations.edit',
]);

Route::delete('serial_translations/{ids?}', [
    'as' => 'admin.serial_translations.destroy',
    'uses' => 'Serial_translationsController@destroy',
    'middleware' => 'can:admin.serial_translations.destroy',
]);

// append


