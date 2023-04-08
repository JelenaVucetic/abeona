<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactController;
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

Route::get('cars/{car}/book', [CarController::class, 'bookCar']);
Route::resource('cars', CarController::class);
Route::resource('bookings', BookingController::class);

Route::put('bookings/confirm/{booking}', [BookingController::class, 'confirm']);

Route::post('contacts', [ContactController::class, 'store']);
Route::get('contacts', [ContactController::class, 'index']);


Route::get('/dashboard', function () {
    return view('admin.reservations.index');
});
//->middleware(['auth', 'verified'])->name('dashboard');


// Redirect home with default language yourdomain.com/en/
Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group(
    [
        'prefix' => '{locale}',
        'middleware' => 'setlocale'
    ], function () {
    Route::get('/', [PagesController::class, 'index'])->name('welcome');
    Route::get('/about-us', [PagesController::class, 'about'])->name('about-us');
    Route::get('/fleet', [PagesController::class, 'fleet'])->name('fleet');
    Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
    Route::get('/findCar', [PagesController::class, 'findCar'])->name('findCar');
});


Route::post('/cars/find', [CarController::class, 'find'])->name('cars.find');

Route::post('/car-images/find', [CarController::class, 'find'])->name('car-images.find');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // todo move to AdminController
    //Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

    Route::get('/car-images', [CarController::class, 'index'])->name('car-images.index');
});

require __DIR__ . '/auth.php';
