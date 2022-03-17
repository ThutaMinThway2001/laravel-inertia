<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    return Inertia::render('User/Index', [
        'users' => User::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn ($user) => [
                'id' => $user->id,
                'name' => $user->name
            ]),

        'filters' => Request::only(['search'])
    ]);
});

Route::get('/users/create', function () {
    return Inertia::render('User/Create');
});

Route::post('/users', function () {
    $attributes = request()->validate([
        'name' => 'required',
        'email' => ['required', 'email'],
        'password' => 'required'
    ]);

    User::create($attributes);

    return redirect('/users');
});

Route::get('/setting', function () {
    return Inertia::render('Setting');
});
