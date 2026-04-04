<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;

Route::get('/sobre', function () {
    return view('sobre');
});

Route::resource('/contato', ContatoController::class);

Route::resource('/', HomeController::class);