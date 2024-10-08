<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SummaryController;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: [SearchController::class, 'index']);
Route::get(uri: '/document/{id}', action: [DocumentController::class, 'index']);
Route::get(uri: '/summary/{id}', action: [SummaryController::class, 'index']);
