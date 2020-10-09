<?php

Route::group(['middleware' => ['web', 'admin']], function () {

    Route::get('/admin/minimal', 'Bagisto\Minimal\Http\Controllers\Admin\MinimalController@index')->defaults('_config', [
        'view' => 'minimal::admin.index',
    ])->name('minimal.admin.index');

});