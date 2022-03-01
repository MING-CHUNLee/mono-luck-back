<?php

use Illuminate\Http\Request;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistionsController;

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

Route::post("add", [RegistionsController::class,'add']);
Route::get("list", [RegistionsController::class,'list']);
Route::put("updatetest", [RegistionsController::class,'updatetest']);
Route::delete("deletetest/{member_id}", [RegistionsController::class,'deletetest']);
Route::get("search/{phone}", [RegistionsController::class,'search']);
Route::post("find", [RegistionsController::class,'find']);
Route::post("find_registions", [RegistionsController::class,'find_registions']);
