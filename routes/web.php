<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'main']);

Route::get('my-bookings', [BookingController::class, 'userBookings'])->name('myBookings')->middleware('auth');

Route::post('book-now', [BookingController::class, 'bookNow'])->name('bookNow');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('all-users', [UserController::class, 'showUsers'])->name('allUsers');
    Route::get('bookings', [UserController::class, 'showBookings'])->name('allBookings');
    Route::resource('cars', CarController::class);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
