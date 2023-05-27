<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientContactController;


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

// Route::get('blogs', [BlogController::class,'index']);
// Route::get('create', [BlogController::class,'create']);
// Route::get('blogs/{id}', [BlogController::class,'show']);
// Route::get('blogs/{id}', [BlogController::class,'edit']);
// Route::post('store', [BlogController::class,'store']);
// Route::put('blogs/{id}', [BlogController::class,'update']);
// Route::post('blogs/{id}', [BlogController::class,'destroy']);