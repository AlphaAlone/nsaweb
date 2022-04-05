<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'Home')->name('home');
Route::view('/about', 'Aboutus')->name('about');
Route::view('/product', 'ProducSevice')->name('product');
Route::view('/organi', 'Organization')->name('organi');
Route::view('/contact', 'contact')->name('contact');
