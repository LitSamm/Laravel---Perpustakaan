<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\TransaksiController;


/*
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

Route::get('/getsiswa',[SiswaController::class,'getsiswa']);
Route::post('/addsiswa',[SiswaController::class,'addsiswa']);
Route::put('/updatesiswa/{id}',[SiswaController::class,'updatesiswa']);
Route::delete('/deletesiswa/{id}',[SiswaController::class,'deletesiswa']);

Route::get('/getbuku',[BukuController::class,'getbuku']);
Route::post('/addbuku',[BukuController::class,'addbuku']);
Route::put('/updatebuku/{id}',[BukuController::class,'updatebuku']);
Route::delete('/deletebuku/{id}',[BukuController::class,'deletebuku']);

Route::get('/getkelas',[KelasController::class,'getkelas']);
Route::post('/addkelas',[kelasController::class,'addkelas']);
Route::put('/updatekelas/{id}',[KelasController::class,'updatekelas']);
Route::delete('/deletekelas/{id}',[KelasController::class,'deletekelas']);

Route::post('/pinjambuku',[TransaksiController::class,'pinjambuku']);
Route::post('/tambahitem/{id}',[TransaksiController::class,'tambahitem']);
Route::post('/mengembalikanbuku/{id}',[TransaksiController::class,'mengembalikanbuku']);
