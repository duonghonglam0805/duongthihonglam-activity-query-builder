<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'getAllPosts'])->name('post');
Route::get('/id', [PostController::class, 'getOnePost']);
Route::get('/create', [PostController::class, 'create'])->name('add');
Route::post('/create', [PostController::class, 'store'])->name('addPost');
Route::get('/update/{id}', [PostController::class, 'update'])->name('update');
Route::post('/update/{id}', [PostController::class, 'storeUpdate'])->name('updatePost');
Route::get('/delete/{id}', [PostController::class, 'delete'])->name('delete');