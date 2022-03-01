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
Route::get("Registions", [RegistionController::class,'list']);
Route::post("Registion", [RegistionController::class,'add']);

//Member
Route::get("Members", [MemberController::class,'index']);
Route::get("Member/{phone}", [MemberController::class,'search']);
//Locker
Route::get("Lockers", [LockerController::class,'index']);
Route::get("Locker/{phone}", [LockerController::class,'findLockerbyPhone']);

// Route::get("abc", [RegistionController::class,'abc']);
// Route::put("updatetest", [RegistionController::class,'updatetest']);
// Route::delete("deletetest/{member_id}", [RegistionController::class,'deletetest']);
