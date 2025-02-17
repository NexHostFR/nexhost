<?php

use App\Http\Controllers\AProposController;
use App\Http\Controllers\ContactCommercialController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LegalPageController;
use App\Http\Controllers\ProductPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingPageController::class, 'index']);
Route::post('/', [LandingPageController::class, 'store_newsletter']);

// Page a propos
Route::get('/a-propos', [AProposController::class, 'a_propos']);
Route::get('/a-propos/equipe', [AProposController::class, 'view_equipe']);
Route::get('/a-propos/carriere', [AProposController::class, 'view_carriere']);


Route::get('/sales', [ContactCommercialController::class, 'view_contact_commercial']);
Route::post('/sales', [ContactCommercialController::class, 'send_contact_commercial']);

// Legal
Route::get('/cgv/condition-general', [LegalPageController::class, 'document_legaux']);
Route::get("/cgv/mentions-legales", [LegalPageController::class, 'mentions_legales']);
Route::get("/cgv/protection-donnes", [LegalPageController::class, 'protection_donnes']);
Route::get("/cgv/politique-confidentilite", [LegalPageController::class, 'politique_confidentilite']);

// Produit
Route::get('/{category}/{produit}', [ProductPageController::class, 'index']);