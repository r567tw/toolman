<?php

use App\Http\Controllers\PongController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TokenController;
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

Route::get('ping', [PongController::class, 'ping']);
Route::post('token', [TokenController::class, 'create'])->name('token.create');
Route::apiResource('posts', PostController::class)->except(
    ['create']
)->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth')->group(function () {
// });
