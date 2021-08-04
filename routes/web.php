<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\VerifMemberController;
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
    return view('home');
})->name('welcome');

// route pour le profil
Route::get('/dashboard', DashboardController::class)->name('dashboard');

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

// routes pour les posts d'actualité
Route::get('actualites', [BlogPostController::class, 'index']) -> name('actualites.index');
Route::get('actualites/{blog_post}', [BlogPostController::class, 'show']) -> name('actualites.show');
Route::get('/dashboard/create-post', [BlogPostController::class, 'create']) -> name('actualites.create');
Route::post('actualites', [BlogPostController::class, 'store']) -> name('actualites.store');
Route::get('actualites/{blog_post}/edit', [BlogPostController::class, 'edit']) -> name('actualites.edit');
Route::put('actualites/{blog_post}', [BlogPostController::class, 'update']) -> name('actualites.update');
Route::delete('actualites/{blog_post}', [BlogPostController::class, 'destroy']) -> name('actualites.destroy');

// Route vers la vérification avant inscription 
Route::post('/verifmember', [VerifMemberController::class, 'verify'])->name('verifmember');
Route::get('/verifmember', [VerifMemberController::class, 'index'])->name('checkmember');

Route::get('/profil', [MemberController::class, 'profile'])->name('profile');
Route::get('/members', [MemberController::class, 'index']) ->name('promotion.membres');
Route::delete('/membersDelete', [MemberController::class, 'destroy'])->name('members.destroy');

