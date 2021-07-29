<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\MemberController;

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



Auth::routes();
Route::get('auth/register', function () {return view('register');});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

Route::get('/', function () {
    return view('home');
});

Route::get('dashboard', function () {
    return view('dashboard');
});


Route::get('/dashboard', function () {
    return view('formPost');
});


Route::get('/profils', [MessageController::class,'show']) -> name('message');


Route::get('actualites', [BlogPostController::class, 'index']);

Route::get('actualites/{id}', [BlogPostController::class, 'show']);

Route::get('/members', [MemberController::class, 'index']) ->name('promotion.membres');



