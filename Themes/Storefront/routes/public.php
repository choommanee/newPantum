<?php

Route::get('products/{slug}/quick-view', 'ProductQuickViewController@show')->name('products.quick_view.show');
Route::get('clear/route', 'ProductQuickViewController@clearRoute');
