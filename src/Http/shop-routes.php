<?php

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency']], function () {
    Route::get('/', 'Webkul\Shop\Http\Controllers\HomeController@index')->defaults('_config', [
        'view' => 'minimal::shop.home.index',
    ])->name('shop.home.index');

    Route::get('/minimal', 'Bagisto\Minimal\Http\Controllers\Shop\MinimalController@index')->defaults('_config', [
        'view' => 'minimal::shop.index',
    ])->name('minimal.shop.index');

    /*Route::get('/categories/{slug}', 'Webkul\Shop\Http\Controllers\CategoryController@index')
    ->defaults('_config', [
        'view' => 'minimal::products.index'
    ])->name('shop.categories.index');*/

});