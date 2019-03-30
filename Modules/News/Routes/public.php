<?php
Route::get('news/all', 'HomeController@index')->name('news.index');
Route::post('news', 'HomeController@store')->name('news.store');
Route::get('news/{slug}', 'PageController@show')->name('news.show');
