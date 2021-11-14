<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallController;
use App\Http\Controllers\UserController;
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


Route::get('/index',[CallController::class,'index'])->name('calls');
Route::get('/create_call',[CallController::class,'create'])->name('create_calls');
Route::post('/create_call',[CallController::class,'store'])->name('create_calls');
Route::get('/show/',[CallController::class,'show'])->name('show_calls');


Route::get('/users',[UserController::class,'index'])->name('users');
