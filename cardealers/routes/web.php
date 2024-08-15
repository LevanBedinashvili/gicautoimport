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
use App\Http\Controllers\DealerPurchaseController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DiscountController;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuestController::class, 'index'])->name('index');
Route::get('/home', [GuestController::class, 'home'])->name('home');
Route::get('/info_one', [GuestController::class, 'info_one'])->name('info_one');
Route::get('/info_two', [GuestController::class, 'info_two'])->name('info_two');
Route::get('/info_three', [GuestController::class, 'info_three'])->name('info_three');
Route::get('/about', [GuestController::class, 'about'])->name('about');
Route::get('/get-states/{auctionId}', [AuctionController::class, 'getStates'])->name('get-states');
Route::get('/my-car-information', [GuestController::class, 'searchvehicle'])->name('searchvehicle');
Route::get('/vehicle/{id}', [GuestController::class, 'vehicle'])->name('vehicle');

Route::get('/clear-everything', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');

    return 'All caches cleared successfully';
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/password', [ProfileController::class, 'change_password'])->name('profile.password');

    Route::resource('/users', UserController::class);

    Route::get('/dealerpurchases', [DashboardController::class, 'dealerpurchases'])->name('dealerpurchases');

    Route::resource('/state', StateController::class);
    Route::resource('/port', PortController::class);
    Route::resource('/auction', AuctionController::class);
    Route::resource('/vehicle', VehicleController::class);
    Route::resource('/news', NewsController::class);
    Route::resource('/purchase', DealerPurchaseController::class);
    Route::put('/purchase/updateAdmin/{id}', [DealerPurchaseController::class, 'updateAdmin'])->name('purchase.updateAdmin');
    Route::get('/purchase/approve/{id}', [DealerPurchaseController::class, 'approve'])->name('purchase.approve');
    Route::get('/purchase/showUploadForm/{id}', [FileUploadController::class, 'showUploadForm'])->name('adminka.showUploadForm');
    Route::post('/purchase/uploadFile/{id}', [FileUploadController::class, 'uploadFile'])->name('adminka.uploadFile');
    Route::get('/purchase/showPhotoUploadForm/{id}', [FileUploadController::class, 'showPhotoUploadForm'])->name('adminka.showPhotoUploadForm');
    Route::post('gallery/storeGalleryPhoto/{id}', [FileUploadController::class, 'storeGalleryPhoto'])->name('adminka.storeGalleryPhoto');
    Route::delete('gallery/deleteGalleryPhoto/{id}', [FileUploadController::class, 'destroyGalleryPhotos'])->name('adminka.destroyGalleryPhotos');
    Route::post('gallery/storeGalleryPortPhoto/{id}', [FileUploadController::class, 'storeGalleryPortPhoto'])->name('adminka.storeGalleryPortPhoto');
    Route::delete('gallery/deleteGalleryPortPhoto/{id}', [FileUploadController::class, 'destroyGalleryPortPhotos'])->name('adminka.destroyGalleryPortPhotos');
    Route::post('gallery/storeGalleryBuyPhoto/{id}', [FileUploadController::class, 'storeGalleryBuyPhoto'])->name('adminka.storeGalleryBuyPhoto');
    Route::delete('gallery/deleteGalleryBuyPhoto/{id}', [FileUploadController::class, 'deleteGalleryBuyPhoto'])->name('adminka.deleteGalleryBuyPhoto');
    Route::get('/calculator', [CalculatorController::class, 'calculator'])->name('admin.calculator');
    Route::post('/purchase/uploadFileSecond/{id}', [FileUploadController::class, 'uploadFileSecond'])->name('adminka.uploadFileSecond');
    Route::get('/discounts/index', [DiscountController::class, 'index'])->name('discount.index');
    Route::get('/discounts', [DiscountController::class, 'edit'])->name('discount.edit');
    Route::post('/discounts/update', [DiscountController::class, 'update'])->name('discount.update');

    Route::get('/ratings', [DiscountController::class, 'ratings'])->name('rating.ratings');
    Route::post('/ratings/update', [DiscountController::class, 'ratingUpdate'])->name('rating.update');

    Route::get('/vehicle-information', [DashboardController::class, 'searchvehicle'])->name('admin.searchvehicle');

    Route::get('/loginout',[LogoutController::class, 'logout'])->name('user.logout');
});
