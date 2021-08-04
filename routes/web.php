<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
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
})-> name('home');

Route::get('/dashboard/dashboard_archive', function () {
    return view('dashboard_archive');
})->name('dashboard_archive');


/* Route::get('/dashboard/create-post', function () {
    return view('formPost');
}); */

// Route::get('/dashboard/dashboardArchive', function () {
//     return view('dashboardArchive');
// });


Route::get('/reports', [ReportController::class,'index']);


require __DIR__.'/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/conversations/{id}', [MessageController::class,'create']) -> name('sendMessage');
Route::get('/messages', [MessageController::class,'index']) -> name('message');
Route::get('/conversations/{id}', [MessageController::class,'show']) -> name('conversations');


// routes pour les posts d'actualité
Route::get('actualites', [PostController::class, 'index']) -> name('actualites.index');
Route::get('actualites/{post}', [PostController::class, 'show']) -> name('actualites.show');
Route::get('/dashboard/create-post', [PostController::class, 'create']) -> name('actualites.create');
Route::post('actualites', [PostController::class, 'store']) -> name('actualites.store');
Route::get('actualites/{post}/edit', [PostController::class, 'edit']) -> name('actualites.edit');
Route::put('actualites/{post}', [PostController::class, 'update']) -> name('actualites.update');
Route::delete('actualites/{post}', [PostController::class, 'destroy']) -> name('actualites.destroy');

// Route vers la vérification avant inscription 
Route::post('/verifmember', [VerifMemberController::class, 'verify'])->name('verifmember');
Route::get('/verifmember', [VerifMemberController::class, 'index'])->name('checkmember');

Route::get('/members', [MemberController::class, 'index']) ->name('promotion.membres');
Route::delete('/membersDelete', [MemberController::class, 'destroy'])->name('members.destroy');

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::get('/compte', [DashboardController::class, 'user'])->name('user');
});

// routes Ressource
Route::resource('promotions', PromotionController::class);

