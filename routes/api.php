<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Rota: POST realizado pelo dispositivo RFID
 * Máximo de 20 requisições por minuto
 */
Route::middleware('throttle:20,1')->group(function () {
    Route::post('/write', 'PresenceController@rfid')->name('write');
});