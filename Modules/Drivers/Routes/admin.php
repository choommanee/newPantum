<?php

Route::get('drivers', [
    'as' => 'admin.drivers.index',
    'uses' => 'DriverController@index',
    'middleware' => 'can:admin.drivers.index',
]);

Route::get('drivers/create', [
    'as' => 'admin.drivers.create',
    'uses' => 'DriverController@create',
    'middleware' => 'can:admin.drivers.create',
]);

Route::post('drivers', [
    'as' => 'admin.drivers.store',
    'uses' => 'DriverController@store',
    'middleware' => 'can:admin.drivers.create',
]);

Route::get('drivers/{id}/edit', [
    'as' => 'admin.drivers.edit',
    'uses' => 'DriverController@edit',
    'middleware' => 'can:admin.drivers.edit',
]);

Route::put('drivers/{id}', [
    'as' => 'admin.drivers.update',
    'uses' => 'DriverController@update',
    'middleware' => 'can:admin.drivers.edit',
]);

Route::delete('drivers/{ids?}', [
    'as' => 'admin.drivers.destroy',
    'uses' => 'DriverController@destroy',
    'middleware' => 'can:admin.drivers.destroy',
]);

// append

