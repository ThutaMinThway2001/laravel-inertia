<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    sleep(2);
    return Inertia::render('Users', [
        'users' => User::all()->map(fn ($user) => [
            'name' => $user->name
        ])
    ]);
});

Route::get('/setting', function () {
    return Inertia::render('Setting');
});
