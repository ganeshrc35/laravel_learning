<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;
use App\Http\Controllers\calculationController;
use App\Http\Controllers\DivisibleController;
use App\Http\Controllers\UsersController;

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
Route::get('/calc',[calculationController::class,'calc']);
Route::prefix('calculator')->group(function () {
    Route::get('/',[calculationController::class,'calculator']);
    Route::post('/calculate_method',[calculationController::class,'calculate_method']);
});
//Route::post('/calculator',[calculationController::class,'calculator']);
Route::prefix('number')->group(function(){
    Route::get('/divisible',[DivisibleController::class, 'divisible']);
    Route::post('/div_method',[DivisibleController::class, 'div_method']);
});
Route::prefix('registeration')->group(function(){
    Route::get('/',[UsersController::class, 'users_forum']);
    Route::post('/register',[UsersController::class, 'register']);
});
