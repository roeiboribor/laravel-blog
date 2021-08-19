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
Route::get('/blog',[PostController::class,'index'])->name('blog.index');
Route::get('/blog/{slug}',[PostController::class,'show'])->name('blog.show');
Route::get('/blog/{slug}/edit',[PostController::class,'edit'])->name('blog.edit');
Route::PUT('/blog/{slug}',[PostController::class,'update'])->name('blog.update');
Route::get('/blog/create',[PostController::class,'create'])->name('blog.create');
Route::post('/blog',[PostController::class,'store'])->name('blog.store');

Auth::routes();

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

