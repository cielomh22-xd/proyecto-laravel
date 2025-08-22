<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/persona', [PersonaController::class, 'index']) ->name('persona.index');
Route::get('/persona/create', [PersonaController::class, 'create']) ->name('persona.create');

Route::get('/producto', [ProductoController::class, 'index']) ->name('producto.index');
Route::get('/venta', [VentaController::class, 'index']) ->name('venta.index');
