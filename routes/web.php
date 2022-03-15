<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    sleep(2);
    return Inertia::render('Users', [
        'time' => now()->toTimeString()
    ]);
});

Route::get('/setting', function () {
    return Inertia::render('Setting');
});
