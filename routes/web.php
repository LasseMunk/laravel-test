<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::post('/article', [ArticleController::class, 'store'])->name('articles.store');

Route::get('/article/create', [ArticleController::class, 'create'])->name('articles.create');
Route::get('/article', [ArticleController::class, 'show'])->name('articles.index');
Route::delete('/article/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
