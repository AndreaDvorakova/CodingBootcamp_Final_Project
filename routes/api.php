<?php

use App\Http\Controllers\Api\DrugController;
use App\Http\Controllers\Api\PharmacyController;
use App\Http\Controllers\Api\PharmacyItemController;
use App\Models\Pharmacy_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/sendTestEmail', [DrugController::class, 'sendTestEmail']);

Route::get('/pharmacies', [PharmacyController::class, 'index']);

Route::get('/pharmacy-items/{id}', [PharmacyItemController::class, 'index']);
// Route::get('/pharmacy-items/{id}', [PharmacyItemController::class, 'show']);
