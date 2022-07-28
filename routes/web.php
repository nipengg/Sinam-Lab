<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [HomeController::class, 'admin'])->name('admin/dashboard');
    });

Route::prefix('/user')
    ->middleware(['auth', 'you'])
    ->group(function () {
        Route::get('/{id}', [UserController::class, 'user']);
        Route::get('/password/{id}', [UserController::class, 'password']);
    });