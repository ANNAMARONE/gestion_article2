<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::resource('articles',ArticleController::class);
Route::get('/articles/create', [ArticleController::class, 'creation'])->name('articles.creation');
Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
Route::post('/articles/edit/{id}', [ArticleController::class, 'edit'])->name('articles.modif');
Route::post('/articles/update', [ArticleController::class, 'update'])->name('articles.modif');