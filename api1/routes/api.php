<?php

use App\Http\Controllers\projController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/add',[projController::class,'add_response']);
Route::get('/receive/{id}',[projController::class,'get_response']);
// Route::put('/update/{id}',[projController::class,'update_response']);
Route::post('/update',[projController::class,'update_response']);
Route::delete('/delete/{id}',[projController::class,'delete_response']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

