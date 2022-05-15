<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;


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

//Route::get('/', function () {
  //  return view('layouts.plantillabase');
//});
//Route::get('/register', function () {
  //  return view('auth.register');
//});
Route::post('/register',[RegisterController::class, 'show']);
Route::post('/register',[RegisterController::class, 'register']);
Route::post('/login',[LoginController::class, 'show']);
Route::post('/login',[LoginController::class, 'login']);
Route::post('/home',[HomeController::class, 'index']);



Route::resource('vehiculos','App\Http\Controllers\VehiculoController');
Route::resource('conductors','App\Http\Controllers\ConductorController');
Route::resource('empresas','App\Http\Controllers\EmpresaController');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
