<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\GenderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    //return "<h1>TEST</h1>";
});

//Route::get('/genders', [GenderController::class, 'index']);
