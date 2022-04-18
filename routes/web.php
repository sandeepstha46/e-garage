<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;

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

Route::get('/', function () {
    return view('welcome');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});
Route::get('/admin/profile', [AdminController::class, 'ViewProfile'])->name('admin.profile');
Route::get('/admin/profile/edit', [AdminController::class, 'ProfileEdit'])->name('admin.profile.edit');
Route::post('/admin/profile/store', [AdminController::class, 'ProfileStore'])->name('admin.profile.store');

//For User
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});
Route::get('/user/profile', [UserController::class, 'ViewProfile'])->name('user.profile');
Route::get('/user/profile/edit', [UserController::class, 'ProfileEdit'])->name('user.profile.edit');
Route::post('/user/profile/store', [UserController::class, 'ProfileStore'])->name('user.profile.store');

//For Booking
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/booking/view', [BookingController::class, 'ViewBooking'])->name('booking.view');
    Route::get('/booking/add-booking', [BookingController::class, 'AddBooking'])->name('booking.add');
    Route::get('/booking/edit-booking', [BookingController::class, 'EditBooking'])->name('booking.edit');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
