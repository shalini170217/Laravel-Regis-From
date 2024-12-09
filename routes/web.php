<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[App\Http\Controllers\StudentController::class,'index'] );
Route::post('index',[App\Http\Controllers\StudentController::class,'store'] )->name('store');
Route::post('/',[App\Http\Controllers\StudentController::class,'index'] )->name('index');
