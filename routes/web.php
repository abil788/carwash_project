<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\accController;
// use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TakeBookController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// Public routes
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/review', function () {
    return view('pages.review');
})->name('review');

Route::get('/book-now', function () {
    return view('book-now');
})->name('book-now');

Route::get('/home', [HomeController::class, 'index']);

// Authentication required routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(['role:user'])->group(function () {
        Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
        Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
        Route::get('/bookings', [BookingController::class, 'index'])->name('booking.index');
    });

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/bookings', [AdminBookingController::class, 'index'])->name('admin.bookings');
        Route::post('/admin/bookings/{booking}/approve', [AdminBookingController::class, 'approve'])->name('admin.bookings.approve');
    });
});

// Profile index route (accessible without authentication)
Route::get('/', [ProfileController::class, 'index'])->name('profile.index');

// Routes for TakeBookController
Route::get('/acc/{id}/done', [TakeBookController::class, 'changeStatusToDone'])->name('acc.done');
Route::get('/services', [TakeBookController::class, 'create']);
Route::get('/acc', [TakeBookController::class, 'index2']);
Route::post('/home', [TakeBookController::class, 'store']);
Route::post('/takebooks/{id}/update-status', [TakeBookController::class, 'updateStatus'])->name('takebooks.updateStatus');
Route::delete('/acc/{id}/delete', [TakeBookController::class, 'destroy'])->name('acc.destroy');

// Menandai ulasan sebagai selesai (opsional, jika Anda memiliki logika ini)
Route::get('/reviews/{id}/done', [ReviewController::class, 'markAsDone'])->name('reviews.markAsDone');
require __DIR__.'/auth.php';