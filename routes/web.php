<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\LoginController;
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
    return view('login');
});

Route::post('/auth', [LoginController::class,'auth'])->name('login');

Route::middleware('auth')->group(function(){
    Route::get('/administrador',[AdministradorController::class,'index'])->name('home.administrador');
});
