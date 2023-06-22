<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Middleware\tracking;


Route::get('users',[App\Http\Controllers\PageController::class, 'users']);

Route::resource('articles',ArticleController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
