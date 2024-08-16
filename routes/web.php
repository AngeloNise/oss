<?php

use App\Http\Controllers\Faculty\FacultyHomeController;
use App\Http\Controllers\Faculty\FacultyLoginController;
use App\Http\Controllers\preeval\FRAController;
use App\Http\Controllers\preeval\FRADocController;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\FacultyMiddleware;
use App\Http\Middleware\GuestFacultyMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DocumentController;

// GUEST
Route::get('/', function () {
    return view('/guest/welcome');
});

Route::get('/In-Campus!', function () {
    return view('/guest/incampusg');
});

// Faculty routes
Route::prefix('faculty')->name('faculty.')->group(function () {

    Route::middleware([GuestFacultyMiddleware::class])->group(function () {
        Route::get('/login', [FacultyLoginController::class, 'index']);
        Route::post('/login', [FacultyLoginController::class, 'login'])->name('login');
    });

    Route::middleware(['auth', FacultyMiddleware::class])->group(function () {
        Route::get('/home', [FacultyHomeController::class, 'index'])->name('home');
        
        Route::get('/Dashboard-Admin', function() {
            return view ('/faculty/auth/dbadmin');
        })->name('dbadmin');

        Route::get('/Organization-Account-Management', function() {
            return view ('/faculty/auth/oam');
        })->name('dbadmin');
        
        Route::get('/Application-Admin', function() {
            return view ('/faculty/auth/applicationadmin');
        })->name('dbadmin');

        Route::get('/Post-Report', function() {
            return view ('/faculty/auth/postreport');
        })->name('dbadmin');

        Route::get('/Pre-Evaluation-Document', function() {
            return view ('/faculty/auth/preevaldoc');
        })->name('dbadmin');
    });
});


// Auth routes
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Homepage')->middleware(UserMiddleware::class);
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'orgLogin'])->name('login');

// Organization routes
Route::middleware(['auth'])->group(function () {
    Route::get('/Homepage', function () {
        return view('/org/auth/homepage');
    });

    Route::get('/Application', function () {
        return view('/org/auth/application');
    });

    Route::get('/test', function () {
        return view('test');
    });

    Route::get('/Dashboard', function () {
        return view('/org/auth/dborg');
    });

    Route::get('/Download', function () {
        return view('/org/auth/download');
    });

    Route::get('/Account-Settings', function () {
        return view('/org/auth/accset');
    });

    Route::get('/Pre-Evaluation', function () {
        return view('/org/auth/preeval');
    });

    Route::get('/In-Campus', function () {
        return view('/org/auth/incampus');
    });

    //Route::get('/Fund-Raising', function () {
        //return view('/org/auth/preevalfra');
    //});
    Route::get('/Fund-Raising', [FRAController::class,'preevalfra']);
    Route::post('/uploaddocument', [FRAController::class,'store']);
    Route::get('/faculty/Pre-Evaluation-Document', [FRADocController::class, 'display'])->name('preevaldoc');
    Route::get('/display', [FRADocController::class, 'display'])->name('display');
    Route::get('/download/{filename}', [FRADocController::class, 'download'])->name('download');
    Route::get('/view/{type}/{filename}', [FRADocController::class, 'view'])->name('view');

});