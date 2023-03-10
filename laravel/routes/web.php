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

Route::name('user.')->group(function (){
    Route::view('/private','private')->middleware('auth')->name('private');
    Route::get('/login', function () {
        if (\Illuminate\Support\Facades\Auth::check()) {
            return redirect(\route('user.private'));
    }
        return view('login');
    })->name('login');
   Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);
    Route::get('/logout', function (){
        \Illuminate\Support\Facades\Auth::logout();
        return view('/');
    })->name('logout');
    Route::get('/registation', function (){
        if (\Illuminate\Support\Facades\Auth::check()) {
            return redirect(\route('user.private'));
        }
        return view('registation');
    })->name('registation');
    Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);
});
