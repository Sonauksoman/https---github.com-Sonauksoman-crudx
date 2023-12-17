<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartmentController;


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


Route::get('/',[ApartmentController::class,'tableView']);
Route::get('/delete/{id}',[ApartmentController::class,'delete']);
Route::get('/edit/{id}',[ApartmentController::class,'edit']);
Route::get('/cart',[ApartmentController::class,'viewCarts']);
Route::get('/cart/{id}',[ApartmentController::class,'cart']);
Route::post('/cart/{id}',[ApartmentController::class,'cartSave']);
Route::post('/edit/{id}',[ApartmentController::class,'editSave']);
Route::get('/form',[ApartmentController::class,'formView']);
Route::post('/form',[ApartmentController::class,'saveApartment']);
Route::get('/flat',[ApartmentController::class,'flatView']);
Route::post('/flat',[ApartmentController::class,'findFlats']);



