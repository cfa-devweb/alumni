<?php


use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home');
});

Route::get('dashboard', function () {
    return view('dashboard');
});



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profils', [MessageController::class,'show']) -> name('message');

Route::get('/members', [MemberController::class, 'index']) ->name('promotion.membres');

Route::get('/dashboard', function () {
    return view('formPost');
});


Route::get('/profils', [MessageController::class,'show']) -> name('message');

Route::get('/members', [MemberController::class, 'index']) ->name('promotion.membres');
