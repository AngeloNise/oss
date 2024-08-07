<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/In-Campus', function () {
    return view('incampusg');
});

Route::get('/Homepage', function () {
    return view('homepage');
});

Route::get('/Application', function () {
    return view('application');
});

Route::get('/test', function () {
    return view('test');
});