<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registercontroller;

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
Route::post('/labour_contractor',[registercontroller::class,'store']);
Route::get('/labour_contractor', [registercontroller::class,'index']);
Route::put('/labour_contractor', [registercontroller::class,'update']);
Route::delete('/labour_contractor/{id}', [registercontroller::class,'destroy']);
Route::get('/labour_contractor/{id}', [registercontroller::class,'show']);
