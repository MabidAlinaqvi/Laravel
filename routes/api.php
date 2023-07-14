<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetDataController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UsersController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    
    Route::get('getdata',[GetDataController::class,'getData']);

    Route::post('setdata',[GetDataController::class,'setData']);

    Route::put('updatedata',[GetDataController::class,'updateData']);

    Route::delete('deletedata/{id}',[GetDataController::class,'deleteData']);

    Route::get('searchdata/{city}',[GetDataController::class,'searchData']);

    Route::put('validatedata',[GetDataController::class,'validateData']);

    Route::apiResource('testresource',TestController::class);
});

Route::post("login",[UsersController::class,'index']);
