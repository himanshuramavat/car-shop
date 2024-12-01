<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about')->name('about');

Route::get('/sum/{a}/{b}', [CarController::class, 'sum'])->whereNumber(['a', 'b']);

Route::get('/subtract/{a}/{b}', [CarController::class, 'subtract'])->whereNumber(['a', 'b']);
