<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Diogo";

    return view('welcome', ['nome' => $nome]);
});


Route::get('/contact', function () {
    return view('contact');
});
