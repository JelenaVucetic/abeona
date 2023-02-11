<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ADMIN ROUTES

Route::get('/reservations', function () {
    return view('admin.reservations.index');
})->name('reservations');

Route::get('/admin', function () {
    return view('admin.cars.create');
})->name('create');


// USER ROUTES

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/fleet', function () {
    return view('fleet');
})->name('fleet');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');


