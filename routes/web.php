<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/tasks',  ([TaskController::class, 'index']))->name('index');
Route::post('/tasks',  ([TaskController::class, 'store']))->name('store');
Route::post('/tasks{task}/task',  ([TaskController::class, 'update']))->name('update');