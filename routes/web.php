<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/company', function () {
    return view('company');
})->name('company');

Route::get('/solutions', function () {
    return view('solutions');
})->name('solutions');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
