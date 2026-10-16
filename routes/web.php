<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/tracking', function () {
    return view('tracking');
})->name('tracking');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/dashboard', fn () => view('dashboard'))->name('customer.dashboard');
Route::get('/shipments', fn () => view('shipments'))->name('customer.shipments');
Route::get('/quote', fn () => view('quote'))->name('customer.quote');
Route::get('/invoices', fn () => view('invoices'))->name('customer.invoices');
Route::get('/account', fn () => view('profile'))->name('customer.profile');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';