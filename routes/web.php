<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/services', function () {
    return view('Services');
});

Route::get('/project', function () {
    return view('Project');
});

Route::get('/blog', function () {
    return view('Blog');
});


Route::get('/contact', function () {
    return view('Contact');
});
