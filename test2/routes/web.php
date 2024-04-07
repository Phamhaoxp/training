<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{post}/update', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/{post}/destroy', [PostController::class, 'destroy'])->name('post.destroy');