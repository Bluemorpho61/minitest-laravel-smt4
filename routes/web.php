<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'homepage']);

Route::get('/dashboard', function () {
    return redirect('/home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home',[HomeController::class,'index']);

Route::get('/isi-artikel/{id}',[HomeController::class,'showArticle']);

Route::get('/lihat-user',[AdminController::class,'showUsers'])->name('show-usr');

Route::get('/tulis-artikel',[PenulisController::class,'tambahArtikel'])->name('tulis-art');

Route::get('/kelola-artikel',[PenulisController::class,'manageArticle'])->name('man-art');

Route::post('/post',[PenulisController::class,'postArticle']);

Route::get('/lihat-artikel',[AdminController::class,'showArticles'])->name('adm-showArt');
Route::get('/lihat-artikel/isi-artikel',[AdminController::class,'lihatisiArtikel'])->name('isi-art');

Route::get('/kelola-artikel/edit-artikel/{id}',[PenulisController::class,'editArticle']);
Route::post('/kelola-artikel/konfirm-edit/{id}',[PenulisController::class,'updateArtikel']);
Route::get('/kelola-artikel/hapus-artikel/{id}',[PenulisController::class,'hapusArtikel']);

Route::get('/logout',[HomeController::class,'logout'])->name('logout');


require __DIR__.'/auth.php';
