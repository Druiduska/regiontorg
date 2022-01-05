<?php

use Illuminate\Support\Facades\Route;

Route::get('/clear', function() {
    Artisan::call('clear-compiled');
    Artisan::call('auth:clear-resets');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('event:clear');
    Artisan::call('optimize:clear');
    Artisan::call('queue:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
//    Artisan::call('websockets:clean');
    return "Кэш прочищен.";
});


Route::get('/', function () {
    return view('home');
});
