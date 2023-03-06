<?php

use App\Http\Controllers\PizzaController;
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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/pizza/show',[PizzaController::class,'index'])->name('Pizza.home')->middleware('auth');
Route::post('/storepizza',[PizzaController::class,'store'])->name('Pizza.save')->middleware('auth');
Route::get('/pizza/create',[PizzaController::class,'create'])->name('Pizza.create')->middleware('auth');
Route::get('/pizza/{id}',[PizzaController::class,'showproduct'])->name('Pizza.show')->middleware('auth');
Route::delete('/pizza/{id}',[PizzaController::class,'destroy'])->name('Pizza.complete')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
