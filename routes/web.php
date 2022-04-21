<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\DashboardComponent;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RequestController;

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
// Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
//     Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('dashboard');
// });

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/profile', [AdminController::class, 'ViewProfile'])->name('admin.profile');
    Route::get('/admin/profile/edit', [AdminController::class, 'ProfileEdit'])->name('admin.profile.edit');
    Route::post('/admin/profile/store', [AdminController::class, 'ProfileStore'])->name('admin.profile.store');
});

//For User
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/profile', [UserController::class, 'ViewProfile'])->name('user.profile');
    Route::get('/user/profile/edit', [UserController::class, 'ProfileEdit'])->name('user.profile.edit');
    Route::post('/user/profile/store', [UserController::class, 'ProfileStore'])->name('user.profile.store');
});

//For Booking
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/booking/view', [BookingController::class, 'ViewBooking'])->name('booking.view');
    Route::get('/booking/add-booking', [BookingController::class, 'AddBooking'])->name('booking.add');
    Route::post('/booking/add-booking', [BookingController::class, 'AddNewBooking'])->name('booking.add');
    Route::get('/booking/edit-booking/{id}', [BookingController::class, 'EditBooking'])->name('booking.edit');
    Route::post('/booking/edit-booking/{id}', [BookingController::class, 'UpdateBooking'])->name('booking.edit');
    Route::post('/booking/delete/{id}', [BookingController::class, 'DeleteBooking'])->name('booking.delete.');
});

//For Product
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/product/view', [ProductController::class, 'ViewProduct'])->name('product.view');
    Route::get('/product/add-product', [ProductController::class, 'AddProduct'])->name('product.add');
    Route::post('/product/add-product', [ProductController::class, 'AddNewProduct'])->name('product.add');
    Route::get('/product/edit-product/{id}', [ProductController::class, 'EditProduct'])->name('product.edit');
    Route::post('/product/edit-product/{id}', [ProductController::class, 'UpdateProduct'])->name('product.edit');
    Route::post('/product/delete/{id}', [ProductController::class, 'DeleteProduct'])->name('product.delete');
});


//All Request

Route::get('/request/view', [RequestController::class, 'ViewRequest'])->name('request.view');
