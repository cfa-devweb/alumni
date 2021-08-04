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
Route::delete('/reports/{report}', [ReportController::class,'destroy']);

require __DIR__.'/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/conversations/{id}', [MessageController::class,'create']) -> name('sendMessage');
Route::get('/messages', [MessageController::class,'index']) -> name('message');
Route::get('/conversations/{id}', [MessageController::class,'show']) -> name('conversations');


// routes pour les posts d'actualité

Route::resource('articles', PostController::class)->parameters([
    'articles' => 'post'
]);

/* Route::get('articles', [PostController::class, 'index']) -> name('articles.index');
Route::post('articles', [PostController::class, 'store']) -> name('articles.store');
Route::get('articles/create', [PostController::class, 'create']) -> name('articles.create');
Route::get('articles/{post}', [PostController::class, 'show']) -> name('articles.show');
Route::put('articles/{post}', [PostController::class, 'update']) -> name('articles.update');
Route::delete('articles/{post}', [PostController::class, 'destroy']) -> name('articles.destroy');
Route::get('articles/{post}/edit', [PostController::class, 'edit']) -> name('articles.edit'); */

// Route vers la vérification avant inscription 
Route::post('/verifmember', [VerifMemberController::class, 'verify'])->name('verifmember');
Route::get('/verifmember', [VerifMemberController::class, 'index'])->name('checkmember');

Route::get('/members', [MemberController::class, 'index']);
Route::get('members/{member}/edit', [MemberController::class, 'edit']);
Route::put('members/{member}', [PostController::class, 'update']);
// Route::delete('/membersDelete', [MemberController::class, 'destroy']);

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::get('/compte', [DashboardController::class, 'user'])->name('user');
});

// routes Ressource
Route::resource('promotions', PromotionController::class);

