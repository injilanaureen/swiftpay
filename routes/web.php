
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminNavBarController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('company.about');
});

Route::get('/mission-vision', function () {
    return view('company.mission-vision');
});

Route::get('/contact', function () {
    return view('company.contact');
});

Route::get('/services/payment-orchestration', function () {
    return view('services.payment-orchestration');
});

Route::get('/services/white-level-solution', function () {
    return view('services.white-level-solution');
});

Route::get('/services/upi-solution', function () {
    return view('services.upi-solution');
});

Route::get('/services/online-solution', function () {
    return view('services.online-solution');
});

Route::get('/services/payment-gateway', function () {
    return view('services.payment-gateway');
});

Route::get('/partnership/referral-partnership', function () {
    return view('partnership.referral-partnership');
});

Route::get('/partnership/psp-partnership', function () {
    return view('partnership.psp-partnership');
});

Route::get('/request-demo', function () {
    return view('request-demo');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('/cancellation-policy', function () {
    return view('cancellation-policy');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/attractions', function () {
    return view('attractions');
});

Route::get('/tickets', function () {
    return view('tickets');
});

Route::get('/blog', function () {
    return view('blog');
});


//admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminNavBarController::class, 'dashboard'])->name('admin.dashboard');

    Route::post('/navbar-item', [AdminNavBarController::class, 'storeNavbarItem'])->name('admin.storeNavbarItem');
    Route::put('/navbar-item/{id}', [AdminNavBarController::class, 'updateNavbarItem'])->name('admin.updateNavbarItem');
    Route::delete('/navbar-item/{id}', [AdminNavBarController::class, 'destroyNavbarItem'])->name('admin.destroyNavbarItem');

    Route::post('/navbar-item/{navbarItemId}/sub-item', [AdminNavBarController::class, 'storeNavbarSubItem'])->name('admin.storeNavbarSubItem');
    Route::put('/navbar-sub-item/{id}', [AdminNavBarController::class, 'updateNavbarSubItem'])->name('admin.updateNavbarSubItem');
    Route::delete('/navbar-sub-item/{id}', [AdminNavBarController::class, 'destroyNavbarSubItem'])->name('admin.destroyNavbarSubItem');
});

Route::get('/admin/navbar', [AdminNavBarController::class, 'navbar'])->name('admin.navbar');
Route::get('/admin/settings', [AdminNavBarController::class, 'settings'])->name('admin.settings');

