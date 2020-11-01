<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinishController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;

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

Route::get('/',[IndexController::class, 'index']);
Route::get('/apply', [ContactController::class, 'index']);
Route::post('/apply', [ContactController::class, 'post']);
Route::get('/finish', [FinishController::class, 'index']);
