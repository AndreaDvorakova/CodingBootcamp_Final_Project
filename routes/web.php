<?php

use App\Http\Controllers\Api\DrugController as ApiDrugController;
use App\Http\Controllers\DrugController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\Api\BasketItemController;
use App\Http\Controllers\BasketController as ControllersBasketController;
use App\Http\Controllers\Api\BasketController;
use Carbon\Doctrine\CarbonType;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [DrugController::class, 'index'])->name('home');



Route::get('/confirmation/{code}', [DrugController::class, 'confirmation'])->name('confirmation');
Route::view('/terms', 'terms-and-conditions');
Route::post('/sendConfirmation', [ApiDrugController::class, 'sendConfirmation']);



Route::get('/drugs/{id}/detail', [DrugController::class, 'detail'])->name('detail');
Route::get('/pharmacy-page/{id}', [PharmacyController::class, 'index']);


Route::post('/add-to-cart', [BasketItemController::class, 'addToCart']);
Route::post('/cart', [BasketItemController::class, 'update']);
Route::get('/cart', ["App\Http\Controllers\BasketController", 'index'])->name('cart');

// Route::view('/register', )

// Route::get('/register', [RegisterController::class, 'index'])->name('register');
// Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/reservation', [BasketController::class, 'addToCart']);
