<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\GareController;


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

Route::get('/', function () {
    return view('backend.welcome');
});

Route::get('/front', function () {
    return view('frontend.passager');
});


Route::resource('Abonnements',AbonnementController::class);

use App\Http\Controllers\TrajetController;
use Illuminate\Support\Facades\Route;


Route::resource('trajets', TrajetController::class);
Route::resource('gares', GareController::class);