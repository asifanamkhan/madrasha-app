<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/madrasha-app/livewire/update', $handle);
});

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'verified'])->group(function () {


});
