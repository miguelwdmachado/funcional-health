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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/saldo', [App\Http\Controllers\HomeController::class, 'saldo'])->name('saldo');
Route::post('/sacar', [App\Http\Controllers\HomeController::class, 'sacar'])->name('sacar');
Route::post('/depositar', [App\Http\Controllers\HomeController::class, 'depositar'])->name('depositar');
