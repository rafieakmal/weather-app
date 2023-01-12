<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(WeatherController::class)->group(function () {
    Route::GET('/weather/jakarta', 'index');
    Route::GET('/gempa/terbaru', 'gempa');
    Route::GET('/gempa/terkini', 'terkini');
    Route::GET('/gempa/dirasakan', 'dirasakan');
});