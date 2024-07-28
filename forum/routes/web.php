<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;
use App\Http\Controllers\AuthController;
use Auth;


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

Route::get('/',[AuthController::class,'home']);
Route::prefix('register')->group(function(){
    Route::get('/',[AuthController::class,'register']);
    Route::post('/createUser',[AuthController::class,'createUser']);
    Route::get('/login',[AuthController::class,'login']);
    Route::post('/login',[AuthController::class,'authenticateUser']);

});
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/home',function(){
    dd(Auth::user());
    echo 'Welcome '.Auth::user()->name;
});

Route::get('/aa/hello',[CalcController::class,'hello']);
Route::get('/aa/abc',[CalcController::class,'hello']);
Route::prefix('calculation')->group(function () {
    Route::get('/',[CalcController::class,'calculator']);
    Route::post('/calculate',[CalcController::class,'calculate']);
});