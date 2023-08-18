<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProyectoController;
use App\Http\Controllers\Admin\ClientesController;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('/proyectos', ProyectoController::class);


Route::resource('/clientes', ClientesController::class);


