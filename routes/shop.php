<?php

use App\Http\Controllers\HebergementGameController;
use App\Http\Controllers\HebergementPage;
use App\Http\Controllers\HebergementWebController;
use Illuminate\Support\Facades\Route;

Route::get("/order/success", [HebergementPage::class, 'orderSuccess'])->name('success');
Route::get("/order/cancel", [HebergementPage::class, 'orderCancel'])->name('cancel');

Route::get('/order/web-hosting/{id}', [HebergementWebController::class, 'orderWebHosting']);
Route::get('/order/web-hosting/', [HebergementWebController::class, 'WebHostingLandingPage']);

Route::get('/order/game-hosting/{category}/{id}', [HebergementGameController::class, 'orderGameHosting']);
Route::post('/order/game-hosting/{category}/{id}', [HebergementGameController::class, 'buyGameHosting']);
Route::get('/order/game-hosting/{category}', [HebergementGameController::class, 'GameHostingLandingPage']);
Route::get('/order/game-hosting/', [HebergementGameController::class, 'GameHostingLandingPage']);