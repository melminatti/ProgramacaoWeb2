<?php

use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/contato', ContatoController::class );

Route::get('/sobre', function () {
    return  view('sobre');
});

