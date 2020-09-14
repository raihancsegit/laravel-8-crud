<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
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

Route::get('/crud',[studentController::class,'index']);
Route::get('/student/edit/{id}',[studentController::class,'edit']);
Route::get('/student/delete/{id}',[studentController::class,'delete']);
Route::post('/student/add',[studentController::class,'store']);
Route::post('/student/update/{id}',[studentController::class,'update']);
//Route::get('/crud','studentController@index');