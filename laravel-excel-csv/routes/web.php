<?php

use Illuminate\Support\Facades\Route;

// use app\Http\Controllers\HomeController;
use app\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('view');
});


Route::get('/view', 'App\Http\Controllers\homeController@view');
Route::post('/import', 'App\Http\Controllers\homeController@import');

// Route::post('/import',[HomeController::class,'import']);
// Route::get('/view',[HomeController::class,'view']);
// Route::post('view', [HomeController::class, 'view'])->name('view');

