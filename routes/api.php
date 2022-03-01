<?php

use Illuminate\Http\Request;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonoController;

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

Route::post("add", [MonoController::class,'add']);
Route::get("list", [MonoController::class,'list']);
Route::put("updatetest", [MonoController::class,'updatetest']);
Route::delete("deletetest/{member_id}", [MonoController::class,'deletetest']);
Route::get("search/{name}", [MonoController::class,'search']);
