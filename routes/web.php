<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentaireController;



Route::get('/',[ArticleController::class,'index']);


Route::resource('articles',ArticleController::class);
Route::get('/articles/create', [ArticleController::class, 'creation'])->name('articles.creation');
Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
Route::post('/articles/edit/{id}', [ArticleController::class, 'edit'])->name('articles.modif');
Route::post('/articles/update', [ArticleController::class, 'update'])->name('articles.modif');
Route::get('/articles/delete/{id}',[ArticleController::class,'destroy'])->name('articles.destroy');
Route::get('/articles/detail/{id}',[ArticleController::class,'detail'])->name('articles.detail');

Route::post('commentaire/traitement',[CommentaireController::class,'creation']);
Route::get('/article/{article_id}/commentaire/{id}', [CommentaireController::class, 'edit'])->name('commentaire.edit');

Route::post('/article/{article_id}/commentaire/update/{id}', [CommentaireController::class, 'updateCommentaire'])->name('commentaire.update');


Route::delete('/commentaire/delete/{id}',[CommentaireController::class,'destroy'])->name('commentaire.destroy');
