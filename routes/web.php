<?php

//use App\Http\Controllers\UserLoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group([ 'middleware' => 'user'  ],  function () {
    Route::get('/user', [\App\Http\Controllers\UserLoginController::class, 'index'])->name('user');
    //->name('user');дали название роуту
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






//Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
//Route::get('/email/verify', function () {
//    return view('auth.verify-email');
//})->middleware('auth')->name('verification.notice');
