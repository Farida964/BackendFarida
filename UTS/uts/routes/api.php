<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

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


Route::get('/news', [BeritaController::class, 'index']);
Route::post('/news', [BeritaController::class, 'store']);
Route::get('/news/{id}', [BeritaController::class, 'show']);
Route::put('/news/{id}', [BeritaController::class, 'update']);
Route::delete('/news/{id}', [BeritaController::class, 'destroy']);


Route::get('/news/category/sport', [BeritaController::class, 'index']);
Route::get('/news/category/finance', [BeritaController::class, 'index']);
Route::get('/news/category/automotive', [BeritaController::class, 'index']);