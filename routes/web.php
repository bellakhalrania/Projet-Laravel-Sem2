<?php

use App\Http\Controllers\AbonnementController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\BusController;


use App\Http\Controllers\GareController;
use App\Http\Controllers\find_trajet;

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


Route::resource('gares', GareController::class);
Route::resource('Abonnements',AbonnementController::class);
Route::resource('trajets', TrajetController::class);
Route::resource('chauffeurs', ChauffeurController::class);
Route::resource('buses', BusController::class);
Route::resource('findtrajet',find_trajet::class);

