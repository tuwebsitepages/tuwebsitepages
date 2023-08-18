<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TerminosController;




Route::get('/', [App\Http\Controllers\MailController::class, 'index'])->name('contactanos.index');
Route::post('/', [App\Http\Controllers\MailController::class, 'store'])->name('contactanos.store');

Route::get('/', [App\Http\Controllers\PortafolioController::class, 'index'])->name('contactanos.welcome');

Route::middleware(['middleware', 'auth'])->group(function () {
    
});

Auth::routes(['register' => true, 'reset' => true]);

Route::resource('/terminos', TerminosController::class);








