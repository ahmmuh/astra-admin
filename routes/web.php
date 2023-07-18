<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientContactController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogControllerAPI;

use App\Http\Controllers\JobsController;
use App\Http\Controllers\JobsControllerAPI;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceControllerAPI;
use App\Http\Controllers\HomeController;


use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ApplicationControllerAPI;

use App\Http\Controllers\MailController;
use \App\Mail\ContactMail;

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

Route::get('/', [HomeController::class,'test']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home');
});

Route::get('send', [ContactMail::class,'envelope']);

// Route::get('/order',function(){
//     return new OrderMail();
// });

Auth::routes();
Route::resource('blogs', BlogController::class);
Route::resource('clients', ClientContactController::class);
Route::resource('jobs', JobsController::class);
Route::resource('services', ServiceController::class);
Route::resource('applications', ApplicationController::class);


