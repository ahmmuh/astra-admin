<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;

use App\Http\Controllers\JobsController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\StartsidaController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivatServiceController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SendingMailController;
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


Route::get('/', function () {
     return view('frontend.services.index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/clear', function () {
   $clearcache = Artisan::call('cache:clear');
   Artisan::call('route:clear'); 
   Artisan::call('config:clear'); 
   Artisan::call('view:clear'); 
});


Route::resource('abouts', AboutController::class);


Route::get('send', [ContactMail::class,'envelope']);

Auth::routes();
Route::resource('startsida', StartsidaController::class);
Route::resource('blogs', BlogController::class);
Route::resource('jobs', JobsController::class);
Route::resource('services', ServiceController::class);
Route::resource('applications', ApplicationController::class);
Route::resource('contacts', ContactController::class);
Route::resource('privateservices', PrivatServiceController::class);
Route::resource('logos', LogoController::class);
Route::resource('sending', SendingMailController::class);

 Route::get('/frontend/pages/gdpr', [LinkController::class,'index'])->name('gdpr');
 Route::get('/frontend/pages/verksamhet', [LinkController::class,'verksamhet'])->name('verksamhet');



