<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    ray('Hola Mundo ray');
    return view('welcome');
});
