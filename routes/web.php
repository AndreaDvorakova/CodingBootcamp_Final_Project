<?php


use App\Http\Controllers\DrugController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\RegisterController;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [DrugController::class, 'index'])->name('home');
Route::get('/confirmation', [DrugController::class,'confirmation'])->name('confirmation');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/drugs/{id}/detail', [DrugsController::class, 'detail'])->name('detail');
Route::get('/pharmacy-page/{id}', [PharmacyController::class, 'index']);

