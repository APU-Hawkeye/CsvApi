<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('countries', [\App\Http\Controllers\Api\Countries::class, 'index']);
Route::get('currencies', [\App\Http\Controllers\Api\Currencies::class, 'index']);

Route::get('country/{param}', [\App\Http\Controllers\Api\Countries::class, 'searchByName']);
Route::get('currency/{param}', [\App\Http\Controllers\Api\Currencies::class, 'searchByName']);

