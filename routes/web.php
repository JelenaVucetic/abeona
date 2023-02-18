<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
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

Route::resource('cars', CarController::class);



Route::get('/', [PagesController::class, 'index'])->name('welcome');
Route::get('/about-us', [PagesController::class, 'about'])->name('about-us');
Route::get('/fleet', [PagesController::class, 'fleet'])->name('fleet');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/booking', [PagesController::class, 'booking'])->name('booking');

Route::post('/cars/find', [CarController::class, 'find'])->name('cars.find');


Route::get('/dashboard', function () {
    return view('admin.reservations.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // todo move to AdminController
    //Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
});

require __DIR__.'/auth.php';
