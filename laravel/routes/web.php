<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('users', UserController::class);

Route::post('import',[UserController::class,'import'])->name('import');
Route::get('export', [UserController::class, 'export'])->name('export');
