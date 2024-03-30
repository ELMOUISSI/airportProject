<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\airport;
use App\http\Controllers\LoginController;

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

Route::middleware('auth:sanctum')->get('/airports/{id?}', function($id=null){
    if($id == null) return Airport::all(); 
    return Airport::find($id);});

//Route::get("/airports/{id}", function($id){
    //return response()->json(airport::find($id));
//});

Route::post("/login", [LoginController::class,'loginApi']);