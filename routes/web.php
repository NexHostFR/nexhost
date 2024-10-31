<?php

use App\Http\Controllers\AProposController;
use App\Http\Controllers\ContactCommercialController;
use App\Http\Controllers\LandingPageController;
use App\Models\Newsletter;
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

Route::get('/a-propos', [AProposController::class, 'a_propos']);

Route::get('/a-propos/equipe', [AProposController::class, 'view_equipe']);

Route::get('/a-propos/carriere', [AProposController::class, 'view_carriere']);


Route::get('/sales', [ContactCommercialController::class, 'view_contact_commercial']);
