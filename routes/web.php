<?php
use App\Http\Controllers\EstructurasDeControl;

Route::get('/', [
    'uses' => 'EstructurasDeControl@login',
    'as' => 'login'
]);

Route::post('/validar', [
    'uses' => 'EstructurasDeControl@validar',
    'as' => 'validar'
]);

Route::get('/inicio', [
    'uses' => 'EstructurasDeControl@archivo',
    'as' => 'archivo'
]);
