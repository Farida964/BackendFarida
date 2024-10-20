<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnimalController;

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
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/greeting', function () {
    return 'welcome';
});

Route::get('/animals', function () {
   echo "menampilkan data animals";
});

// Route::post('/animals', function () {
//     echo "menambahkan hewan baru";
//  });

//  Route::put('/animals', function () {
//     echo "mengupdate data hewan";
//  });

 
//  Route::delete('/animals', function () {
//     echo "menghapus data hewan";
//  });
 
 


Route::get('/animals', [AnimalController::class, 'index']);
// Route::post('/animals', [AnimalController::class, 'store']);
// Route::put('/animals/{id}', [AnimalController::class, 'update']);
// Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);