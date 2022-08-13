<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Layout\MetaDataController;
use App\Http\Controllers\Layout\PartnerController;
use App\Http\Controllers\Layout\PaymentController;
use App\Http\Controllers\Layout\PrivillegeController;
use App\Http\Controllers\Layout\SolutionController;
use App\Http\Controllers\Layout\TestimoniController;
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

// FRONTEND ROUTE HANDLE
Route::get('/', [FrontendController::class, 'homepage'])->name('frontend.index');
Route::get('/about-us', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/our-solution', [FrontendController::class, 'solution'])->name('frontend.solution');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');

// ADMIN & EMPLOYEE
Route::middleware(['auth', 'role:admin|employee'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        // USERS
        Route::resource('/users', UserController::class);
        // METADATA
        Route::resource('/layout/metadata', MetaDataController::class);
        Route::post('/layout/metadata/logo/change/{id}', [MetaDataController::class, 'editLogo'])->name('metadata.logo');
        Route::post('/layout/metadata/favicon/change/{id}', [MetaDataController::class, 'editFavicon'])->name('metadata.favicon');
        // PRIVILLEGE
        Route::resource('/layout/homepage/privillege', PrivillegeController::class);
        // SOLUTIONS
        Route::resource('/layout/homepage/solution', SolutionController::class);
        // PAYMENT
        Route::resource('/layout/homepage/payment', PaymentController::class);
        // PARTNER
        Route::resource('/layout/homepage/partner', PartnerController::class);
        // PARTNER
        Route::resource('/layout/homepage/testimoni', TestimoniController::class);

        Route::get('/layout/homepage', [DashboardController::class, 'homepage'])->name('layout.homepage');
        Route::get('/layout/about', [DashboardController::class, 'about'])->name('layout.about');
    }); 
});

// ADMIN
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::prefix('/dashboard/admin')->group(function () {
//         Route::get('/', function() {
//             return 'HAI ADMIN';
//         })->name('admin.index');
//     }); 
// });

// EMPLOYEE
// Route::middleware(['auth', 'role:employee'])->group(function () {
//     Route::prefix('/dashboard/employee')->group(function () {
//         Route::get('/', [SiteDataController::class, 'index'])->name('employee.index');
//     }); 
// });

// ADMIN, EMPLOYEE, GUEST
// Route::middleware('auth')->group(function () {
//     Route::get('/', function() {
//         return 'HAI ADMIN EMPLOYEE GUEST';
//     });
// });

require __DIR__.'/auth.php';
