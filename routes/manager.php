<?php

use App\Http\Controllers\AuthPageController;
use App\Http\Controllers\FacturePageController;
use App\Http\Controllers\PanelPageController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\TicketPageController;
use Illuminate\Support\Facades\Route;

// Section authentification
Route::middleware(['guest'])->group(function () {
    Route::get('/auth/login', [AuthPageController::class, 'index_login'])->name('login');
    Route::post('/auth/login', [AuthPageController::class, 'post_login']);
    Route::get('/auth/register', [AuthPageController::class, 'index_register'])->name('register');
    Route::post('/auth/register', [AuthPageController::class, 'post_register']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/auth/logout', [AuthPageController::class, 'logout'])->name('logout');

    Route::get('/', [PanelPageController::class, 'index']);

    // Section Service

    Route::get("/services", [ServicePageController::class, 'viewListeProduct']);
    Route::get("/services/view/{id}", [ServicePageController::class, 'viewProduct']);

    // Section ticket

    Route::get('/tickets', [TicketPageController::class, 'view_list']);

    Route::get('/tickets/create', [TicketPageController::class, 'view_create']);
    Route::post('/tickets/create', [TicketPageController::class, 'create_ticket']);

    Route::get('/tickets/view/{id}', [TicketPageController::class, 'view_ticket']);
    Route::post('/tickets/view/{id}', [TicketPageController::class, 'create_reponse']);

    // Section facture
    Route::get('/invoices', [FacturePageController::class, 'view_list']);
});