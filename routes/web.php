<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])
    -> name('home');

Route::get('/person/show/{person}', [MainController::class, 'personShow'])
    ->name('person.show');

Route::get('/person/delete/{person}', [MainController::class, 'delete'])
    ->name('person.delete');

Route::get('/person/create', [MainController::class, 'personCreate'])
    ->name('person.create');

Route::post('/person/store', [MainController::class, 'personStore'])
    ->name('person.store');
    
Route::get('/person/edit/{person}', [MainController::class, 'personEdit'])
    ->name('person.edit');

Route::post('/person/update/{person}', [MainController::class, 'personUpdate'])
    ->name('person.update');