<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [HomeController::class, 'about']);
// Route::get('/articles/{id}', [HomeController::class, 'articles']);

// Route::get('/', [AboutController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [AboutController::class, 'articles']);

Route::get('/', [ArticleController::class, 'index']);
Route::get('/about', [ArticleController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);