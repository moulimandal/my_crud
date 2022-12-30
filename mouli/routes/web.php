<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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

Route::get('/', [MyController::class, 'merge']);
Route::post('/store', [MyController::class, 'modalstore']);
Route::get('/showTable', [MyController::class, 'showTable']);
Route::get('/edituser/{id}', [MyController::class, 'editTable']);
Route::post('/updateuser/{id}', [MyController::class, 'updateTable']);
Route::get('/delete/{id}', [MyController::class, 'deteteTable']);
Route::get('/status/{id}', [MyController::class, 'status']);
Route::get('/datatable', [MyController::class, 'datatable']);