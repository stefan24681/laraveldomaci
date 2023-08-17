<?php

use App\Http\Controllers\PacijentController;
use App\Http\Controllers\PregledController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

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

//Rute za autentifikaciju
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


//POST i DELETE mogu samo autorizovani korisnici
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });

    Route::resource('pacijents', PacijentController::class);

    Route::post('/pacijents', [PacijentController::class, 'addPacijent']);

    Route::delete('/pacijents/{pacijent}', [PacijentController::class, 'deletePacijent']);


    Route::resource('pregleds', PregledController::class);

    Route::post('/pregleds', [PregledController::class, 'addPregled']);

    Route::delete('/pregleds/{pregled}', [PregledController::class, 'deletePregled']);

    Route::post('/logout', [AuthController::class, 'logout']);

});

//Ovim rutama mogu prisupati svi korisnici


Route::get('/pacijents', [PacijentController::class, 'getAllPacijents']);

Route::get('/pregleds', [PregledController::class, 'getAllPregleds']);