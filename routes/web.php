<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return inertia('Home');
});

Route::get('/users', function () {
    sleep(2);
    return inertia('Users', [
        'time' => now()->toTimeString()
    ]);
});

Route::get('/setting', function () {
    return inertia('Setting');
});

Route::post('/logout', function () {
    dd(request('foo'));
});
