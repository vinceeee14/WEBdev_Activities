<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/students',[StudentController::class,'index']);
Route::get('/students/create',[StudentController::class,'create'])->name('create.std');
Route::post('/students',[StudentController::class,'store']);
