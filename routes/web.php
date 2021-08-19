<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
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

Route::get('/', [PagesController::class,'index'])->name('home');

Route::prefix('/blog')->group(function () {
    Route::get('',[PostController::class,'index'])->name('blog.index');
    Route::post('',[PostController::class,'store'])->name('blog.store');
    Route::get('/create',[PostController::class,'create'])->name('blog.create');
    Route::get('/{slug}',[PostController::class,'show'])->name('blog.show');
    Route::put('/{slug}',[PostController::class,'update'])->name('blog.update');
    Route::get('/{slug}/edit',[PostController::class,'edit'])->name('blog.edit');
});

Auth::routes();

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

