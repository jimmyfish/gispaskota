<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'auth',
], function () {
    Route::get('login', 'Auth\ShowLoginPageAction@index')->name('login');
    Route::post('login', "Auth\LoginAction@do")->name('login.post');
});

Route::group([
    'prefix' => 'dashboard',
    'middleware' => 'auth',
], function () {
    Route::get('/', 'Dashboard\GetDashboardAction@index')->name('dashboard.main');

    Route::group([
        'prefix' => 'location',
    ], function () {
        Route::get('/', 'Location\ShowLocationAction@show')->name('dashboard.location');
        
        Route::get('/new', 'Location\CreateLocationAction@form')->name('dashboard.location.new');
        Route::post('/new', 'Location\CreateLocationAction@store')->name('dashboard.location.post');

        Route::get('/edit/{id}', 'Location\EditLocationAction@form')->name('dashboard.location.edit');
        Route::post('/edit/{id}', 'Location\EditLocationAction@store')->name('dashboard.location.put');

        Route::delete('/delete/{id}', 'Location\DropLocationAction@do')->name('dashboard.location.delete');
    });
});
