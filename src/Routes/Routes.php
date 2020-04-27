<?php

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache clear";
});

Route::get('/home', 'Chernogolov\Excelshop\Controllers\PanelController@index')->name('home')->middleware('web');

Route::get('/categories', 'Chernogolov\Excelshop\Controllers\Panel\CategoryController@index')->name('categories')->middleware('web');

Route::get('/goods', 'Chernogolov\Excelshop\Controllers\Panel\GoodController@index')->name('goods')->middleware('web');

Route::get('/design', 'Chernogolov\Excelshop\Controllers\Panel\DesignController@index')->name('design')->middleware('web');

Route::get('/seo', 'Chernogolov\Excelshop\Controllers\Panel\SeoController@index')->name('seo')->middleware('web');

Route::get('/users', 'Chernogolov\Excelshop\Controllers\Panel\UserController@index')->name('users')->middleware('web');