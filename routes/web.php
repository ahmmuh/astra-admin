<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientContactController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ServiceController;


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

Auth::routes();
Route::resource('blogs', BlogController::class);
Route::resource('clients', ClientContactController::class);
Route::resource('jobs', JobsController::class);
Route::resource('services', ServiceController::class);
Route::resource('applications', ServiceController::class);
