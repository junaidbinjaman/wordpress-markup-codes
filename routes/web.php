<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/blogs', function () {
    return view('pages.blogs');
})->name('company');

Route::get('/services', function() {
    return view('pages.services');
})->name('services');

Route::get('/contact', function (){
    return view('pages.contact');
})->name('contact');
