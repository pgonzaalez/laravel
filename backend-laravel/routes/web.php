<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('app');
});

Route::get('/hola', function () {
   return view('hola');
});

require __DIR__.'/settings.php';

