<?php

use App\Http\Controllers\ArestaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\VerticeController;
use Illuminate\Support\Facades\Route;

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
    abort(403);
});
Route::resource('/vertice', VerticeController::class);
Route::resource('/aresta', ArestaController::class);
Route::resource('/dijkstra', Controller::class);