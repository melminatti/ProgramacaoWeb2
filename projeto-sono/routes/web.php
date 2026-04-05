<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SonoController;

Route::get('/', [SonoController::class, 'index']);

Route::post('/resultado', [SonoController::class, 'calcular']);