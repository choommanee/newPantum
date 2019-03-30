<?php

Route::middleware('auth')->group(function () {
    Route::get('account', 'AccountDashboardController@index')->name('account.dashboard.index');

    Route::get('account/profile', 'AccountProfileController@edit')->name('account.profile.edit');
    Route::put('account/profile', 'AccountProfileController@update')->name('account.profile.update');

    Route::get('account/orders', 'AccountOrderController@index')->name('account.orders.index');
    Route::get('account/orders/{id}', 'AccountOrderController@show')->name('account.orders.show');

    Route::get('account/wishlist', 'AccountWishlistController@index')->name('account.wishlist.index');
    Route::delete('account/wishlist/{productId}', 'AccountWishlistController@destroy')->name('account.wishlist.destroy');

    Route::get('account/reviews', 'AccountReviewController@index')->name('account.reviews.index');
    Route::get('account/warranty', 'AccountWarrantyController@index')->name('account.warranty.index');
    Route::get('account/warranty/add', 'AccountWarrantyController@addwarranty')->name('account.warranty.addwarranty');
    Route::put('account/warranty/add', 'AccountWarrantyController@managewarranty')->name('account.warranty.addwarranty');
});
