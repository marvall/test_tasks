<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DomainController;

Route::get('/', function () {
    return view('home');
})->name('index');

Route::view('/search', 'search')->middleware('auth')->name('search');
Route::post('/search', [SearchController::class, 'SearchDomain']);

Route::get('/result', [DomainController::class, 'getDomains'])->middleware('auth')->name('result');

Route::name("user.")->group(function(){
    
    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route("result"));
        }
        return view('login');
    })->name('login');

    Route::post('/login', [AuthController::class, 'Login']);

    Route::get('/logout', [AuthController::class, 'Logout'])->name('logout');

    Route::get('/singup', function(){
        if(Auth::check()){
            return redirect(route("result"));
        }
        return view("singup");
    })->name('singup');

    Route::post('/singup', [AuthController::class, 'Sing_up']);
});