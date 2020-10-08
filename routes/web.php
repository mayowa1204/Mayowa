<?php

use App\Http\Controllers\NewsongController;
use App\Http\Controllers\SongController;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/groups', [GroupController::class, 'index'])->name('group.index');

// Route::resource("actor", ActorsController::class);
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');

Route::get('/index', function () {
    return view('index');
});
// Route::get('/explore', [SongController::class, 'explore'])->name('explore');
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/like/{id}', [SongController::class, 'like'])->name('like');
Route::get('/dislike/{id}', [SongController::class, 'dislike'])->name('dislike');
Route::get('/dislikes', [SongController::class, 'dislikes'])->name('dislikes');
Route::get('/likes', [SongController::class, 'likes'])->name('likes');
// Route::resource('/newsong', NewsongController::class)->name('newsong');
Route::get('/logout', function () {
    return view('auth/login');
})->middleware(['auth'])->name('logout');

Route::get('/explore', [SongController::class, 'index'])->name('explore');
Route::resource('songs', SongController::class);
Route::get('/search', [SongController::class, 'search'])->name('search');
Route::get('/recentlyadded', [SongController::class, 'recentlyadded'])->name('uploads');

// Route::get('/delete/{id}', [SongController::class, 'destroy'])->name('delete');
Route::delete('/delete/{id}', [SongController::class, 'destroy'])->name('delete.destroy');
