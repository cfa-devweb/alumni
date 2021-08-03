<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\DashboardarchiveController;

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
// route pour l'accueil
Route::get('/', function () {
    return view('welcome');
});

// route pour le profil
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/create-post', function () {
    return view('formPost');
});
// Route::get('/dashboard/dashboardArchive', function () {
//     return view('dashboardArchive');
// });


require __DIR__.'/auth.php';

  
//Route::get('register', [PromotionController::class,'index']);



// route pour l'application
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profils', [MessageController::class,'show']) -> name('message');

Route::get('/members', [MemberController::class, 'index']) ->name('promotion.membres');


Route::get('actualites', [BlogPostController::class, 'index']);

Route::get('actualites/{id}', [BlogPostController::class, 'show']);

Route::get('formPost', [BlogPostController::class, 'create']);

// Route::resource('formPost', [BlogPostController::class, 'store']);

Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('dashboard/dashboardArchive', [DashboardarchiveController::class, 'index'])-> name('archive');