<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;





Route::get('/', function () {
    return view("pages/main");
});
    Route::get('/login', [LoginController::class, 'login'])->name('pages.Auth.login');
    Route::get('/register', [RegisterController::class, 'register'])->name('pages.Auth.register');
    // Route::post('/', [LoginController::class, 'login'])->name('pages.Auth.login');
    // Route::post('/register', [RegisterController::class, 'register'])->name('pages.Auth.register');



