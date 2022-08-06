<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Layout\MetaDataController;
use App\Http\Controllers\Layout\PrivillegeController;
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
        // METADATA
        Route::resource('/layout/metadata', MetaDataController::class)->missing(function () {
            return redirect('/layout/metadata');
        });
        // PRIVILLEGE
        Route::resource('/layout/privillege', PrivillegeController::class)->missing(function () {
            return redirect('/layout/privillege');
        });
        Route::post('/layout/metadata/logo/change/{id}', [MetaDataController::class, 'editLogo'])->name('metadata.logo');
        Route::post('/layout/metadata/favicon/change/{id}', [MetaDataController::class, 'editFavicon'])->name('metadata.favicon');
        // USERS
        Route::resource('/users', UserController::class)->missing(function () {
            return redirect('/users');
        });
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
