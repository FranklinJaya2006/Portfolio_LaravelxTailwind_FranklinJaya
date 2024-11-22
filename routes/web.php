<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pindah;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homeport', [pindah::class, 'pindahnav'])->name('homeport');
