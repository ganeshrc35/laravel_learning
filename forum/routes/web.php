<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/aa/hello',[CalcController::class,'hello']);
Route::get('/aa/abc',[CalcController::class,'hello']);
Route::prefix('calculation')->group(function () {
    Route::get('/',[CalcController::class,'calculator']);
    Route::post('/calculate',[CalcController::class,'calculate']);
});