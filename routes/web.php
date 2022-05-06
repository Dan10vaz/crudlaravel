<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


/* Route::get('/', function () {
    return view('welcome');
});


Route::get('/cliente', function () {
    return view('cliente.index');
});

Route::get('/cliente/create', [ClienteController::class, 'create']); */

Route::resource('cliente', ClienteController::class);
