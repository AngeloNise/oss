<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/In-Campus!', function () {
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

Route::get('/Dashboard', function () {
    return view('dborg');
});

Route::get('/Download', function () {
    return view('download');
});

Route::get('/Account-Settings', function () {
    return view('accset');
});

Route::get('/Pre-Evaluation', function () {
    return view('preeval');
});

Route::get('/In-Campus', function () {
    return view('incampus');
});