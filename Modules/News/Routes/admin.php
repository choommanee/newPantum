<?php

Route::get('news', [
    'as' => 'admin.news.index',
    'uses' => 'NewsController@index',
    'middleware' => 'can:admin.news.index',
]);

Route::get('news/create', [
    'as' => 'admin.news.create',
    'uses' => 'NewsController@create',
    'middleware' => 'can:admin.news.create',
]);

Route::post('news', [
    'as' => 'admin.news.store',
    'uses' => 'NewsController@store',
    'middleware' => 'can:admin.news.create',
]);

Route::get('news/{id}/edit', [
    'as' => 'admin.news.edit',
    'uses' => 'NewsController@edit',
    'middleware' => 'can:admin.news.edit',
]);

Route::put('news/{id}', [
    'as' => 'admin.news.update',
    'uses' => 'NewsController@update',
    'middleware' => 'can:admin.news.edit',
]);

Route::delete('news/{ids?}', [
    'as' => 'admin.news.destroy',
    'uses' => 'NewsController@destroy',
    'middleware' => 'can:admin.news.destroy',
]);

// append

