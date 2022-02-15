<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [MainController::class,'home']);
Route::get('/home', [MainController::class,'demande']);
Route::post('/home', [MainController::class,'CheckLogine'])->name('Tester');
// Route::post('/demande', [MainController::class,'demandeselect'])->name('typedemande');
Route::post('/check', [MainController::class,'Checkdata'])->name('checker');

