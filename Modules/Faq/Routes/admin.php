<?php

Route::get('faqs', [
    'as' => 'admin.faqs.index',
    'uses' => 'FaqController@index',
    'middleware' => 'can:admin.faqs.index',
]);

Route::get('faqs/create', [
    'as' => 'admin.faqs.create',
    'uses' => 'FaqController@create',
    'middleware' => 'can:admin.faqs.create',
]);

Route::post('faqs', [
    'as' => 'admin.faqs.store',
    'uses' => 'FaqController@store',
    'middleware' => 'can:admin.faqs.create',
]);

Route::get('faqs/{id}/edit', [
    'as' => 'admin.faqs.edit',
    'uses' => 'FaqController@edit',
    'middleware' => 'can:admin.faqs.edit',
]);

Route::put('faqs/{id}', [
    'as' => 'admin.faqs.update',
    'uses' => 'FaqController@update',
    'middleware' => 'can:admin.faqs.edit',
]);

Route::delete('faqs/{ids?}', [
    'as' => 'admin.faqs.destroy',
    'uses' => 'FaqController@destroy',
    'middleware' => 'can:admin.faqs.destroy',
]);

// append

