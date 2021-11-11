<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GenderController;
use App\Http\Controllers\UserController;

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



Route::group(['middleware' => 'auth:api'], function () {
    Route::post('/logout', [UserController::class, 'logout']);

    Route::get('/genders', [GenderController::class, 'index']);
    Route::post('/genders/add', [GenderController::class, 'store']);
    Route::put('/genders/update/{id}', [GenderController::class, 'update']);
    Route::delete('/genders/delete/{id}', [GenderController::class, 'destroy']);
});

Route::post('/login', [UserController::class, 'login']);