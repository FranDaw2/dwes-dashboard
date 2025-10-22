<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [MainController::class, 'dashboard'])->name('main.dashboard');
