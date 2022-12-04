<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AtilController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Post;
use App\Models\atil;


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
Route::get('input-mahasiswa', [AtilController::class,'index'])->middleware('auth');
Route::post('kirim-mahasiswa', [AtilController::class, 'store'])->middleware('auth');
Route::get('delete-mahasiswa/{nim}',[AtilController::class,'delete'])->middleware('auth');
Route::get('edit-mahasiswa/{nim}',[AtilController::class,'edit'])->middleware('auth');
Route::get('show-data-mahasiswa',[AtilController::class,'show'])->middleware('auth');
Route::post('update-mahasiswa/{nim}',[AtilController::class,'update'])->middleware('auth');

Route::get("/login",[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post("/login",[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get("registrasi",[RegisterController::class,'index'])->middleware('guest');
Route::post('registrasi-user',[RegisterController::class,'register'])->middleware('guest');