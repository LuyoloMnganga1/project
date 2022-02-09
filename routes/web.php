<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DevelopersController;

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
Route::get('dashboard',[DevelopersController::class,'index'])->name('dashboard');
Route::resource('developers', DevelopersController::class);
Route::post('update/{id}',[DevelopersController::class,'update'])->name('update');
Route::get('destroy/{id}',[DevelopersController::class, 'destroy'])->name('destroy');

