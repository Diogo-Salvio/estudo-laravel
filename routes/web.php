<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);


Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/contact/{id}', function ($id) {
    return view('contact', ['id' => $id]);
});