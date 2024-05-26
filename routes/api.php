<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return json_encode('Success');
});

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);