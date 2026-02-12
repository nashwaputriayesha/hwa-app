<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login'); // arahkan ke login.blade.php
});

Route::post('/login', function (Request $request) {

    $username = $request->username;
    $password = $request->password;

    if ($username == "admin" && $password == "123") {
        return redirect('/');
    }

    return back()->with('error', 'Username atau Password salah!');
});
