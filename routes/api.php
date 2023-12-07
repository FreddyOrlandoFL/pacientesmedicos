<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DiagnosticController;

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

//Pacientes
Route::prefix('patient')->group(function () {
    Route::get('/',[PatientController::class,'index']);
    Route::get('/searchpaciente',[PatientController::class,'searchpaciente']);
    Route::get('show/{id}',[PatientController::class,'show']);
    Route::post('/store',[PatientController::class,'store']);
    Route::post('/update/{id}',[PatientController::class, 'update']);
    Route::delete('/delete/{id}',[PatientController::class, 'delete']);
});


//Diagnostic
Route::prefix('assingdiagnostic')->group(function () {
    Route::get('/',[DiagnosticController::class,'index']);
    Route::get('/diagnosticoasignados',[DiagnosticController::class,'diagnosticoasignados']);
});
