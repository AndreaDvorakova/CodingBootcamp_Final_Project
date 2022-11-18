<?php

use App\Http\Controllers\Api\DrugController;
use App\Http\Controllers\Api\PharmacyController;
use App\Http\Controllers\Api\PharmacyItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BasketItemController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/drugs', [DrugController::class, 'index']);
Route::get('/drugs', [DrugController::class, 'searchBar']);
Route::get('/sendTestEmail', [DrugController::class, 'sendTestEmail']);

Route::get('/pharmacies', [PharmacyController::class, 'index']);

Route::get('/pharmacy-items/{id}', [PharmacyItemController::class, 'index']);
// Route::get('/pharmacy-items/{id}', [PharmacyItemController::class, 'show']);

// Route::post('/add-to-cart', [BasketController::class, 'addToCart']);
Route::get('/cart', [BasketItemController::class, 'show']);
