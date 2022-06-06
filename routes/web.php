<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;


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
Route::get('/', [App\Http\Controllers\MailController::class, 'index'])->name('contactanos.index');
Route::post('/', [App\Http\Controllers\MailController::class, 'store'])->name('contactanos.store');

Route::get('/', [App\Http\Controllers\PortafolioController::class, 'index'])->name('contactanos.welcome');

Route::middleware(['middleware', 'auth'])->group(function () {
    
});

Auth::routes(['register' => false, 'reset' => false]);

Route::resource('/proyectos', ProyectoController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
