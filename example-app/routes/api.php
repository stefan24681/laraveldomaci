<?php

use App\Http\Controllers\PacijentController;
use App\Http\Controllers\PregledController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('pacijents', PacijentController::class);

Route::get('/pacijents', [PacijentController::class, 'getAllPacijents']);

Route::post('/pacijents', [PacijentController::class, 'addPacijent']);

Route::delete('/pacijents/{pacijent}', [PacijentController::class, 'deletePacijent']);



Route::resource('pregleds', PregledController::class);

Route::get('/pregleds', [PregledController::class, 'getAllPregleds']);

Route::post('/pregleds', [PregledController::class, 'addPregled']);

Route::delete('/pregleds/{pregled}', [PregledController::class, 'deletePregled']);