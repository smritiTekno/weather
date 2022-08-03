<?php

use Illuminate\Support\Facades\Route;


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


    Route::get('login', [App\Http\Controllers\UserController::class, 'login'])->name('user.login');
    Route::post('post-login', [App\Http\Controllers\UserController::class, 'post'])->name('user.post'); 
    Route::get('/logout',[App\Http\Controllers\UserController::class, 'logout'])->name('user.logout');
    Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('/register',[App\Http\Controllers\UserController::class, 'register'])->name('user.register');
    Route::post('/store',[App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::get('dashboard',[App\Http\Controllers\DaskboardController::class, 'index'])->name('user.dashboard');
    //Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('index',[App\Http\Controllers\UserController::class,'index'])->name('dask.index');
    Route::get('edit/{id}', [App\Http\Controllers\DaskboardController::class, 'edit'])->name('user.edit');
    Route::put('update/{id}', [App\Http\Controllers\DaskboardController::class, 'update'])->name('user.update');
    Route::delete('delete/{id}',[App\Http\Controllers\DaskboardController::class,'destroy'])->name('user.delete');
   
    Route::resource('users', App\Http\Controllers\UserController::class);