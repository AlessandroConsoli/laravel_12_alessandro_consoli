<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');



//? CROUD

//* Rotte per la create
//* create e store
Route::get('/crea/articolo', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
