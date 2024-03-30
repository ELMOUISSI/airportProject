<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\volControl;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route is class !

//makaynach ghir create kayna hta save
//Route::get('/vole',[volControl::class,"index"])->name('vole.index');
//Route::get('/insertVole' ,[volControl::class ,'create'])->name('insertVole.prepareInsert');
//Route::post('/createVole' ,[volControl::class ,'store'])->name('createVole.store');

Route::get('register', [RegisterController::class,"showRegistrationForm"])->name('register');
Route::post('register', [RegisterController::class,"register"]);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);


Route::middleware('auth')->group(function(){
    Route::get('/vole',[volControl::class,"index"])->name('vole.index');
    Route::get('/insertVole' ,[volControl::class ,'create'])->name('insertVole.prepareInsert');
    Route::post('/createVole' ,[volControl::class ,'store'])->name('createVole.store');
    Route::get('/dashboard', [DashboardController::class, 'index']);
});



