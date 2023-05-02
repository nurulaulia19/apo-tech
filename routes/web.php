<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Auth;
// use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes([
    'verify' =>true
]);

Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('/auth/register', function () {
    return view('auth.register');
});


Route::get('/', function() {
    $title = 'Dashboard';
    $slug = 'dashboard';
    return view('/dashboard',compact('title','slug'));
});


// Route::get('/auth/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/auth/login', [AuthController::class, 'authenticate']);
// Route::post('/auth/logout', [AuthController::class, 'logout']);
