<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;

use App\Http\Controllers\JobsController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ClientJobController;
use App\Http\Controllers\ApplyJobController;
use App\Http\Controllers\ContactController;

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

Route::get('/frontend/jobs', [ClientJobController::class,'index'])->name('jobs');

// Route::get('/frontend/jobs', [ClientJobController::class,'index']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home');
});

Route::get('/clear', function () {
   $clearcache = Artisan::call('cache:clear');
   Artisan::call('route:clear'); 
   Artisan::call('config:clear'); 
   Artisan::call('view:clear'); 
});




Route::get('send', [ContactMail::class,'envelope']);

// Route::get('/order',function(){
//     return new OrderMail();
// });

Auth::routes();
Route::resource('blogs', BlogController::class);
Route::resource('jobs', JobsController::class);
Route::resource('services', ServiceController::class);
Route::resource('applications', ApplicationController::class);
Route::resource('apply', ApplyJobController::class);
Route::resource('contacts', ContactController::class);


