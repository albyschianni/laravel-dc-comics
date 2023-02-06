<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])
    -> name('home');

Route::get('/person/show/{person}', [MainController::class, 'personShow'])
    ->name('person.show');

Route::get('/person/delete/{person}', [MainController::class, 'delete'])
    ->name('person.delete');
