<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home', [
        'name' => 'Thuta',
        'frameworks' => [
            'laravel', 'vue', 'react'
        ]
    ]);
});
