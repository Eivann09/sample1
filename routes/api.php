<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\milkteaController;
use App\Models\milkteaModel;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware(['api', 'csrf', 'json'])->group(function () {
    Route::post('/insert', [milkteaController::class, 'insert']);
    Route::get('view',[milkteaController::class, 'index']);
});