<?php

use App\Http\Controllers\OfferController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/offers', [OfferController::class, 'list']);
Route::get('/offers/detail/{id}', [OfferController::class, 'detail']);
Route::post('/offers/create', [OfferController::class, 'create']);
Route::gut('/offers/modify/{id}', [OfferController::class, 'modify']);
Route::delete('/offers/delete/{id}', [OfferController::class, 'destroy']);
