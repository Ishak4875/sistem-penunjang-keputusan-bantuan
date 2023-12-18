<?php

use App\Http\Controllers\MasyarakatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[MasyarakatController::class,'index'])->name('home');
Route::get('/masyarakat/add',[MasyarakatController::class,'displayPageAdd']);
Route::post('/masyarakat/insert',[MasyarakatController::class,'insert']);
Route::get('/masyarakat/detail/{id_masyarakat}',[MasyarakatController::class,'getDetail']);
Route::get('/masyarakat/edit/{id_masyarakat}',[MasyarakatController::class,'displayPageEdit']);
Route::post('/masyarakat/update/{id_masyarakat}',[MasyarakatController::class,'update']);
Route::get('/masyarakat/delete/{id_masyarakat}',[MasyarakatController::class,'delete']);