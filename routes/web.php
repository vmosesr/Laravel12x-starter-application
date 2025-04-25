<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\EnquiryPageController;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Pages controlled from PageController

Route::get('/enquiry', [EnquiryPageController::class, 'show'])->name('enquiry');





// user
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'user'])
    ->name('dashboard');

// admin
Route::view('admin/dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified' , 'admin'])
    ->name('admin.dashboard');

// blogger
Route::view('blogger/dashboard', 'blogger.dashboard')
    ->middleware(['auth', 'verified' , 'blogger'])
    ->name('blogger.dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
