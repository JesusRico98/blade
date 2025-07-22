<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');