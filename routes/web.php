<?php

use App\Http\Controllers\Auth\LoginAction;
use App\Http\Controllers\Auth\ShowLoginPageAction;
use App\Http\Controllers\Dashboard\GetDashboardAction;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'auth',
], function () {
    Route::get('login', 'Auth\ShowLoginPageAction@index')->name('auth.login');
    Route::post('login', "Auth\LoginAction@do")->name('auth.login.post');
});

Route::group([
    'prefix' => 'dashboard',
    'middleware' => 'auth',
], function () {
    Route::get('/', 'Dashboard\GetDashboardAction@index')->name('dashboard.main');
});
