<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AdminReservationController;
use App\Http\Controllers\HomeController;

/**
 * PUBLIC HOME PAGE (accessible by anyone)
 */
Route::get('/', function () {
    return view('welcome'); // Your home page view
})->name('home');



Route::get('/home', function () {
    $menuItems = [
        'starters' => [
            ['name' => 'GARLIC BREAD', 'description' => 'Lorem ipsum dolor sit amet...', 'price' => 8.5, 'image' => 'menu-item-thumbnail-01.jpg'],
            // more starter items here
        ],
        'main_dishes' => [
            ['name' => 'MEAT FEAST PIZZA', 'description' => 'Lorem ipsum dolor sit amet...', 'price' => 5, 'image' => 'menu-item-thumbnail-04.jpg'],
            // more main dishes here
        ],
        'desserts' => [
            ['name' => 'CHOCOLATE FUDGECAKE', 'description' => 'Lorem ipsum dolor sit amet...', 'price' => 4.5, 'image' => 'menu-item-thumbnail-07.jpg'],
            // more dessert items here
        ],
        'drinks' => [
            ['name' => 'CHICKEN TIKKA MASALA', 'description' => 'Lorem ipsum dolor sit amet...', 'price' => 9.5, 'image' => 'menu-item-thumbnail-08.jpg'],
            // more drink items here
        ]
    ];

    return view('home', compact('menuItems'));
});

Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');


/**
 * AUTHENTICATED USER DASHBOARD
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/**
 * PROFILE ROUTES
 */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * ADMIN-ONLY TEST ROUTE (temporary)
 */
Route::get('/test-admin', function () {
    return 'You are an admin!';
})->middleware(['auth', 'admin']);

/**
 * ADMIN RESERVATION MANAGEMENT
 */
Route::aliasMiddleware('admin', AdminMiddleware::class);
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/reservations', [AdminReservationController::class, 'index'])->name('admin.reservations.index');
    Route::delete('/admin/reservations/{id}', [AdminReservationController::class, 'destroy'])->name('admin.reservations.delete');
});

/**
 * BREEZE/AUTH ROUTES
 */
require __DIR__.'/auth.php';
