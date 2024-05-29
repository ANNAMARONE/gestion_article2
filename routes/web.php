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
Route::get('/articles/delete/{id}',[ArticleController::class,'destroy'])->name('articles.destroy');
Route::get('/articles/detail/{id}',[ArticleController::class,'detail'])->name('articles.detail');