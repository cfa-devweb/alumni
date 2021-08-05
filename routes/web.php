<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\ConversationController;

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

require __DIR__.'/auth.php';

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/actualites', [PageController::class, 'news'])->name('news');

Route::get('/compte', [PageController::class, 'account'])->name('account');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [PageController::class, 'admin'])->name('admin');

    Route::resource('promotions', PromotionController::class);
    Route::resource('conversations', ConversationController::class);
    Route::resource('membres', MemberController::class)->parameters(['membres' => 'member']);
    Route::resource('articles', PostController::class)->parameters(['articles' => 'post']);
    Route::resource('evenements', EventController::class)->parameters(['evenements' => 'event']);
    Route::resource('signalements', ReportController::class)->parameters(['signalements' => 'report']);
    Route::resource('apprentis', ApprenticeController::class)->parameters(['apprentis' => 'apprentice']);
});
