<?php

use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ViewBookingController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\UserDestinationController;
use App\Http\Controllers\User\UserLogincontroller;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserTourController;
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

// Route::get('/', function () {
//     return view('user.form');
// });
// ------------------------------FRONTEND ROUTES------------------------------------


// Route::get('balchal', [Controller::class, 'balchal'])->name('balchal');
Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('about', [Controller::class, 'about'])->name('about');
Route::get('contact', [Controller::class, 'contact'])->name('contact');
Route::get('packages', [UserTourController::class, 'index'])->name('package-sidebar');
Route::get('destinations', [UserDestinationController::class, 'index'])->name('destination');
Route::get('package-details/{id}', [UserTourController::class, 'package_details'])->name('package-details');
Route::get('details-destination/{id}', [UserDestinationController::class, 'destinationdetails'])->name('destination-details');


Route::group(['middleware' => ['guest']], function () {
    Route::get('user-login', [UserLogincontroller::class, 'index'])->name('loginuser');
    Route::post('register', [UserLogincontroller::class, 'store'])->name('userregister');
    Route::post('userlogin', [UserLogincontroller::class, 'authenticate'])->name('userlogin');
    Route::get('user-register', [UserLogincontroller::class, 'register'])->name('registeruser');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('profile', [UserProfileController::class, 'index'])->name('profileuser');
    Route::get('logoutuser', [UserLogincontroller::class, 'logout'])->name('logoutuser');
    Route::post('userupdate', [UserProfileController::class, 'user_update'])->name('updateuser');


    Route::get('book_your_package/{id}', [BookingController::class, 'packagebooking'])->name('bookinguser');
    Route::get('success', [BookingController::class, 'success'])->name('success');
    Route::get('cancel', [BookingController::class, 'cancel'])->name('cancel');
});



// ------------------------ ADMIN ROUTES ----------------------------
Route::prefix('admin')->group(function () {

    Route::group(['middleware' => ['admin.guest']], function () {
        Route::get('/login', [AdminLoginController::class, 'login'])->name('admin.login');
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
        Route::get('/registration', [AdminLoginController::class, 'register'])->name('admin.registration');
    });

    Route::group(['middleware' => ['admin.auth']], function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('/profile', [HomeController::class, 'profile'])->name('admin.profile');
        Route::get('/editprofile', [HomeController::class, 'editprofile'])->name('admin.editprofile');
        Route::post('/avatar', [HomeController::class, 'avatar'])->name('admin.avatar');
        Route::post('/password', [HomeController::class, 'password'])->name('admin.password');
        Route::post('/update', [HomeController::class, 'update'])->name('admin.update');
        Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

        // Destination Routes------------------------------
        Route::get('/destination/create', [DestinationController::class, 'create'])->name('admin.createdestination');
        Route::get('/destination/view', [DestinationController::class, 'view'])->name('admin.viewdestination');
        Route::post('destination', [DestinationController::class, 'store'])->name('admin.storedestination');

        // ----------------------------------
        Route::get('destination/delete/{item_id}', [DestinationController::class, 'delete'])->name('admin.deletedestination');
        Route::get('destination/{id}/edit/', [DestinationController::class, 'edit'])->name('admin.editdestination');
        // --------------
        Route::post('destination/{id}/update/', [DestinationController::class, 'update'])->name('admin.updatedestination');

        // package Routes----------------------------
        Route::get('/package/create', [PackageController::class, 'index'])->name('admin.createpackage');
        Route::post('package', [PackageController::class, 'store'])->name('admin.storepackage');

        // ----------------------------------------------
        Route::get('/packages/view', [PackageController::class, 'view'])->name('admin.viewpackage');
        Route::get('edit/{package_id}/package', [PackageController::class, 'edit_package'])->name('admin.packageedit');
        Route::get('delete/package/{id}', [PackageController::class, 'detete_package'])->name('admin.packagedelete');
        Route::get('booking/{id}/package', [PackageController::class, 'booking_package'])->name('admin.packagebooking');

        // ----------------------------------------
        Route::post('package/{id}/updatepackage/', [PackageController::class, 'update'])->name('admin.updatepackage');
        Route::post('package/{id}/update/', [PackageController::class, 'add_date'])->name('admin.adddate');
        Route::get('package/{id}/image/delete', [PackageController::class, 'image_delete'])->name('admin.deletepackageimage');

        // -----------------------------------------
        Route::get('bookings', [ViewBookingController::class, 'view_bookings'])->name('admin.viewbookings');
    });
});
