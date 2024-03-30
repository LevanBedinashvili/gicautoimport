<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\PortController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\GuestController;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuestController::class, 'index'])->name('index');
Route::get('/home', [GuestController::class, 'home'])->name('home');

Route::get('/get-states/{auctionId}', [AuctionController::class, 'getStates'])->name('get-states');

Route::get('/info_one', [GuestController::class, 'info_one'])->name('info_one');
Route::get('/info_two', [GuestController::class, 'info_two'])->name('info_two');
Route::get('/info_three', [GuestController::class, 'info_three'])->name('info_three');
Route::get('/about', [GuestController::class, 'about'])->name('about');



Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/password', [ProfileController::class, 'change_password'])->name('profile.password');

    Route::resource('/users', UserController::class);


    Route::resource('/state', StateController::class);
    Route::resource('/port', PortController::class);
    Route::resource('/auction', AuctionController::class);
    Route::resource('/vehicle', VehicleController::class);


    Route::get('/loginout',[LogoutController::class, 'logout'])->name('user.logout');
});
