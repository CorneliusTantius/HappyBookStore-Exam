<?php

use App\Http\Controllers\DetailsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'IndexHome']);
Route::get('/category/{category_id}', [HomeController::class, 'IndexCategory']);
Route::get('/details/{book_id}', [DetailsController::class, 'IndexDetails']);
Route::get('/contact', [DetailsController::class, 'IndexContact']);