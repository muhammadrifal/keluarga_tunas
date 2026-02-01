<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/agen_tunas', function () {
    return view('form');
})->name('agen_tunas');