<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DocumentController;

// Existing routes
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

// Admin routes
Route::get('/Dashboard-Admin', function () {
    return view('dbadmin');
});

Route::get('/Organization-Account-Management', function () {
    return view('oam');
});

Route::get('/Application-Admin', function () {
    return view('applicationadmin');
});

Route::get('/Post-Report', function () {
    return view('postreport');
});

Route::get('/Pre-Evaluation-Document', function () {
    return view('preevaldoc');
});

Route::get('/Pre-Evaluation-FRA', function () {
    return view('preevalfra');
});


Route::get('/upload', [DocumentController::class, 'create'])->name('documents.create');
Route::post('/upload', [DocumentController::class, 'store'])->name('documents.store');
Route::get('/admin', [DocumentController::class, 'index'])->name('documents.index');
Route::get('/admin/documents', [DocumentController::class, 'index'])->name('documents.index');
Route::get('/admin/documents', [DocumentController::class, 'index'])->name('admin.documents.index');
