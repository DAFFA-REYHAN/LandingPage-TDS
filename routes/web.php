<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
})->name('home');

Route::get('/company', function () {
    return view('pages/company');
})->name('company');

Route::get('/solutions', function () {
    return view('pages/solutions');
})->name('solutions');

Route::get('/services', function () {
    return view('pages/services');
})->name('services');

Route::get('/contact-us', function () {
    return view('pages/contact-us');
})->name('contact-us');
