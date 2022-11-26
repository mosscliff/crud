<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtilController;

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
Route::get('input-mahasiswa', [AtilController::class,'index']);
Route::post('kirim-mahasiswa', [AtilController::class, 'store']);
Route::get('delete-mahasiswa/{nim}',[AtilController::class,'delete']);
Route::get('edit-mahasiswa/{nim}',[AtilController::class,'edit']);
Route::get('show-data-mahasiswa',[AtilController::class,'show']);
Route::post('update-mahasiswa/{nim}',[AtilController::class,'update']);