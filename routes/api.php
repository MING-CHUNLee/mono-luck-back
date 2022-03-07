<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegistionController;
use App\Http\Controllers\LockerController;

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

//Registion
Route::post("Registrations", [RegistionController::class,'add']);
Route::get("list", [RegistionController::class,'list']);

//Locker
Route::post("Locker", [LockerController::class,'findLockerbyPhone']);

// Route::get("abc", [RegistionController::class,'abc']);
// Route::put("updatetest", [RegistionController::class,'updatetest']);
// Route::delete("deletetest/{member_id}", [RegistionController::class,'deletetest']);
