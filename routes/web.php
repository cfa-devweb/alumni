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
})->name('dashboard');

Route::get('/dashboard/dashboard_archive', function () {
    return view('dashboard_archive');
})->name('dashboard_archive');


/* Route::get('/dashboard/create-post', function () {
    return view('formPost');
}); */

// Route::get('/dashboard/dashboardArchive', function () {
//     return view('dashboardArchive');
// });


Route::get('/dashboard/signalement', function () {
    return view('reports');
});


require __DIR__.'/auth.php';

  
Route::get('./partials/header', [PromotionController::class,'index']);



// route pour l'application
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profils', [MessageController::class,'show']) -> name('message');

Route::get('/members', [MemberController::class, 'index']) ->name('promotion.membres');

// routes pour les posts d'actualité
Route::get('actualites', [BlogPostController::class, 'index']) -> name('actualites.index');
Route::get('actualites/article={id}', [BlogPostController::class, 'show']) -> name('actualites.show');
Route::get('/dashboard/create-post', [BlogPostController::class, 'create']) -> name('actualites.create');
Route::post('actualites', [BlogPostController::class, 'store']) -> name('actualites.store');
Route::get('actualites/post={id}/edit', [BlogPostController::class, 'edit']) -> name('actualites.edit');
Route::put('actualites/post={id}', [BlogPostController::class, 'update']) -> name('actualites.update');
Route::delete('actualites/{id}', [BlogPostController::class, 'destroy']) -> name('actualites.destroy');

// Routes Dashbord

Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('dashboard/dashboardArchive', [DashboardarchiveController::class, 'index'])-> name('archive');