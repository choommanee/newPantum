<?php
Route::get('faqs/all', 'HomeController@index')->name('faqs.index');
Route::get('faqs/cat/{id}', 'HomeController@getbycat')->name('faqs.getbycat');
//Route::get('faqs/{slug}', 'PageController@show')->name('faqs.show');
