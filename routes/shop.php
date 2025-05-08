<?php

use App\Http\Controllers\HebergementGameController;
use App\Http\Controllers\HebergementPage;
use App\Http\Controllers\HebergementWebController;
use Illuminate\Support\Facades\Route;

Route::get("/success", [HebergementPage::class, 'orderSuccess'])->name('success');
Route::get("/cancel", [HebergementPage::class, 'orderCancel'])->name('cancel');

Route::get('/web-hosting/{id}', [HebergementWebController::class, 'orderWebHosting']);
Route::get('/web-hosting/', [HebergementWebController::class, 'WebHostingLandingPage']);

Route::get('/game-hosting/{category}/{id}', [HebergementGameController::class, 'orderGameHosting']);
Route::post('/game-hosting/{category}/{id}', [HebergementGameController::class, 'buyGameHosting']);
Route::get('/game-hosting/{category}', [HebergementGameController::class, 'GameHostingLandingPage']);
Route::get('/game-hosting/', [HebergementGameController::class, 'GameHostingLandingPage']);